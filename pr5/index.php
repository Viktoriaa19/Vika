<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .heading{
        background-color: green;
        align-items:center;
        color: aliceblue;
    }
    </style>;
<body>

<?php
$host = "db4.myarena.ru";      // Адрес сервера базы данных
$dbname = "u19978_a12";        // Имя базы данных
$user = "u19978_a12";          // Имя пользователя
$password = "6C1a4B6d7I";      // Пароль

try {
    $connection = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
    } catch (PDOException $e) {
        echo "Ошибка подключения:"; return;
    }
    
    echo "<table border = 1>";
    $result = $connection->query('SELECT * FROM  `product`');
    $row = $result->fetch( PDO::FETCH_ASSOC );
    echo "<tr>";  
    foreach ($row as $key => $value) {
            echo "<td class = 'heading'>".$key."</td>";
    }
    echo "<tr>";  

  do {
echo "<tr>";
 foreach ($row as $key => $value) {  
     echo "<td>" .$value. "<td>";
  }
        echo "</tr>";
}
        while ($row = $result->fetch(PDO::FETCH_ASSOC));
            echo "</table>";
           
?>
</body>
</head>
</html>