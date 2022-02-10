<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DELETE</title>
    <style>
        table{border-spacing: 0;border-collapse: collapse;}
        td, th{padding: 10px;border: 1px solid black;}
        td:last-child{text-align:center;}
    </style>
</head>
<body>
<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "MySafePass4!";
$db_name = "Bookstore"; 
try {
    /// Открываем соединение, указываем адрес сервера, имя бд, имя пользователя и пароль,
    // также сообщаем серверу в какой кодировке должны вводится данные в таблицу бд.
    $db = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // Устанавливаем атрибут сообщений об ошибках (выбрасывать исключения)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    // Запрос на вывод записей из таблицы
    $sql = "SELECT id, title, author, price, discount FROM books LIMIT 5";
    // Подготовка запроса
    $statement = $db->prepare($sql);
    // Выполняем запрос
    $statement->execute();
    // Получаем массив строк 
    $result_array = $statement->fetchAll();
 
    // Создаем таблицу вывода и форму для удаления записей
    echo "<form action='delete.php' method='POST'><table>";
    echo "<tr><th>id</th><th>Title</th><th>Author</th><th>Price</th><th>Discount</th><th>Удалить запись</th></tr>";
    foreach ($result_array as $result_row) {
        echo "<tr>";
        echo "<td>" . $result_row["id"] . "</td>";
        echo "<td>" . $result_row["title"] . "</td>";
        echo "<td>" . $result_row["author"] . "</td>";
        echo "<td>" . $result_row["price"] . "</td>";
        echo "<td>" . $result_row["discount"] . "</td>";
        echo "<td><input type='checkbox' name='delete_row[]' value='" . $result_row["id"] . "'></td>";
        echo "</tr>";
    }
    echo "</table><br><input type='submit' value='Удалить выделенные записи'></form>"; 
}
 
catch(PDOException $e) {
    echo "Ошибка при удалении записи в базе данных: " . $e->getMessage();
}
 
// Закрываем соединение
$db = null;
?>
 
</body>
</html>