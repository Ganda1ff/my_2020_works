<meta charset="utf-8">

<style>

.txt {
font-family:'Oswald';
font-size:30px;
margin-top:20px;
margin-left:100px;

}
.text{
    font-family: 'Oswald', sans-serif;
    font-size:16px;
    font-weight:bold;
    text-indent:10px;
    margin-top:10px;

}
.area {
margin-left:115px;
margin-top:20px;
}

.prokrutka {

height:500px;
width:500px;
margin-top:200px;
margin-left:380px;
background: #fff;
border: 4px solid black;
overflow-x: scroll;
overflow-y: scroll;
}
.place {
    background-color: lightskyblue;
    margin-left:-50px;
    width:100%;
    height:20px;
    border-radius:20px;

}

#Div1 {

    margin-top:5px;
    background-color: rgb(172, 172, 172);
    margin-left:-30px;
    width:100%;
    height:20px;
    border-radius:20px;


}

</style>

<form method="POST" action="">
<div class="prokrutka"> <div class="area"><p><b><h3>Введите ваш отзыв:</h3></b></p>

<input type="text" name="message"> <input type="submit" value="Отправить">

</form>

<?php
$mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'programs');
if($mysqli->connect_errno) {
echo "Error: " . $mysqli->connect_error . "\n";
exit;
}
if(isset($_POST['message'])) {
$message = $_POST['message'];

$_POST['message'] = null;

$query = "INSERT INTO `messages` (`message`) VALUES ('$message')";

$mysqli->query($query);
if($mysqli->errno) {
echo "Error: " . $mysqli->error . "\n";

exit;
}
}

$result = $mysqli->query("SELECT * FROM `messages`");
if ($mysql->errno) {
echo "Error: " . $mysql->error . "\n";
exit;
}


while ($row = $result->fetch_assoc()) {
?>
<div>
    <div class="text">
<p>
<div class="place"       >
<?php echo $row['id'] . "-->" . $row['message']; ?>
</p>

</div>
</div>
</div>
<?php
}
$mysqli->close();
?>