<style>
.button {
  display: inline-block;
  width: 220px;
  padding: 8px;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;
}
.button:hover,
.button:active {
  border-color: yellow;
  text-decoration-color:yellow; 
  color: yellow;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
}
</style>


<form method="post" enctype="multipart/form-data" action="username">
<input type="file" name="picture"> 
<input class="button" type="submit" value="Загрузить файл">

<?php
define('SITE_ROOT', realpath(dirname(__FILE__)));
$uploadDir = '/files/';
$uploadFile = $uploadDir . basename($_FILES['userfile']['name']);
var_dump($uploadFile);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], SITE_ROOT . $uploadFile)) {
echo "Файл успешно загружен!";
$mysql = new mysqli(127.0.0.1.3306, 'root', '', 'programming')
if ($mysql ->connect_errno) {
echo "Error:" $mysql->connect_error . "\n";
exit;
}
$query = "INSERT INTO images('path') VALUES('$uploadFile')";
$mysql->query($query);
if ($mysql ->errno) {
echo "Error:" $mysql->error . "\n";
exit;
}
}
else {
echo "Произошла ошибка!";
}
?>