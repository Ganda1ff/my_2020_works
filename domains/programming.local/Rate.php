<?php
 
include('mysql.php');
include('functions.php');
 
if ($_GET['winner'] && $_GET['loser']) {
 
 $result = mysql_query("SELECT * FROM images WHERE image_id = ".$_GET['winner']." ");
 $winner = mysql_fetch_object($result);
 
 $result = mysql_query("SELECT * FROM images WHERE image_id = ".$_GET['loser']." ");
 $loser = mysql_fetch_object($result);
 
 $winner_expected = expected($loser->score, $winner->score);
 $winner_new_score = win($winner->score, $winner_expected);
  //test print "Winner: ".$winner->score." - ".$winner_new_score." - ".$winner_expected."<br>";
 mysql_query("UPDATE images SET score = ".$winner_new_score.", wins = wins+1 WHERE image_id = ".$_GET['winner']);
 
 $loser_expected = expected($winner->score, $loser->score);
 $loser_new_score = loss($loser->score, $loser_expected);
  //test print "Loser: ".$loser->score." - ".$loser_new_score." - ".$loser_expected."<br>";
 mysql_query("UPDATE images SET score = ".$loser_new_score.", losses = losses+1  WHERE image_id = ".$_GET['loser']);
 
 mysql_query("INSERT INTO battles SET winner = ".$_GET['winner'].", loser = ".$_GET['loser']." ");
 
 header('location: /');
 
}
 
?>