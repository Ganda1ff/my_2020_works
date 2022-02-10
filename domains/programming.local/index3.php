<title>Главная</title>

<style>
        .profile {
background-image:url(https://cdn1.ntv.com.tr/gorsel/pzeDhZxJfESBLEc8ihdXxw.jpg?width=1000&mode=both&scale=both&v=1285239178000);
background-size:160px 120px;
background-position: center;
cursor:pointer;
margin-top:-80px;
border:10px solid white;
border-radius:50%;
width:120px;
height:120px;
margin-left:150px;
margin-right:30px;
box-shadow:0 0 10px 0  black;
}
.text {
    margin-left:300px;
    margin-top:150px;
    font-size:25px;
    max-width:200px;
}
.head {
    border-radius:5px;
    margin-top:-205px;
    margin-left:120px;
    width:900px;
    height:120px;
    background-color:darkslategrey;
}

.button {
    background-color:transparent;
    cursor:pointer;
height:25px;
width:140px;
margin-left:600px;
border:1px solid rgb(160, 167, 167);
margin-top:-33px;
color:rgb(160, 167, 167);
border-radius:2px;
text-align:left;
padding:0 0 0px 10px;
font-weight:bold;
}
.button:focus {
    outline: 0;
outline-offset: 0;
}


.button2 {
    background-color:transparent;
    cursor:pointer;
height:25px;
width:165px;
margin-left:750px;
border:1px solid rgb(175, 73, 73);
margin-top:-33px;
color:rgb(175, 73, 73);
border-radius:2px;
transition: 0.4s ease-out;
text-align:left;
padding:0 0 0px 10px;
font-weight:bold;
}
.button2:focus {
    outline: 0;
outline-offset: 0;
}
.button2:hover,
.button2:active {
    box-shadow:0 0 2px 0 black;
}
    </style>
    <div class="text">
<?php
    if (isset($_SESSION['user'])) { 
        echo("<h3>" . $_SESSION['user']['name'] . "</h3>");
?>
</div>
<div class="head"></div>
<div class="profile"></div>
<form action="index3.php">
<input class="button" type="submit" value="✔ Вы подписаны" >
    </form>
<button class="button2">Количество лайков: x</div>
<script>


</script>
<script>


</script>
<?php
    }
    else {
?>

<?php
}
?>
