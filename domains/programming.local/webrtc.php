
<?php
 
// Путь загрузки
$path = 'img/';
 
// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))
 echo 'Что-то пошло не так';
 else
 echo 'Загрузка удачна';
}
 
?>
<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
 <title>Загрузка изображения с изменением размеров</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
 <h1>Загрузка изображения с изменением размеров</h1>
 <form method="post" enctype="multipart/form-data">
 <input type="file" name="picture">
 <input type="submit" value="Загрузить">
 </form>
 </body>
</html>