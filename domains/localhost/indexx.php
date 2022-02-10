<?php
  include_once('functions.php')
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Загрузка изображений на сервер</title>
  </head>
  <body>
    <form action="functions.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <input type="submit" value="Загрузить файл!">
    </form>
    <?php
    // если была произведена отправка формы
    if(isset($_FILES['file'])) {
      // проверяем, можно ли загружать изображение
      $check = can_upload($_FILES['file']);
    
      if($check === true){
        // загружаем изображение на сервер
        make_upload($_FILES['file']);
        echo "<strong>Файл успешно загружен!</strong>";
      }
      else{
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";  
      }
    }
    ?>
  </body>
</html>

