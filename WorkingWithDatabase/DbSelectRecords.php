<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + MySQL</title>
</head>
<body>
    <h1>PHP + MySQL</h1>
    <?php
        function printResults($result) {
            if($result->num_rows > 0) {
                # print_r($result->fetch_assoc());
                while($row = $result->fetch_assoc()) {
                    echo "<b>ID:</b> ".$row['id'].". ";
                    echo "Name: ".$row['name'].". ";
                    echo "Bio: ".$row['bio'].'<br><br>';
                }
            }
            echo "<hr>";
        }

        // создание соединения с бд
        $mysql = new mysqli("localhost", "root", "root", "mybase"); // адрес сервера, пароль, логин аккаунта на сервере, названеи базы данных
        // установление кодировки
        $mysql->query("SET NAMES 'utf8'");

        $result = $mysql->query("SELECT * FROM `example`");
        # print_r($result);
        # echo "Nums: ".$result->num_rows;
        printResults($result);

        $result = $mysql->query("SELECT `id`, `name` FROM `example`");
        printResults($result);

        $result = $mysql->query("SELECT * FROM `example` WHERE `id` < 6 ORDER BY `id` DESC");
        printResults($result);

        // вывод лимитированного количества записей, а именно 2
        $result = $mysql->query("SELECT * FROM `example` LIMIT 2"); // LIMIt 2, 1 - пропускает первые две и выводит третью
        printResults($result);

        // закрытие соединения с бд
        $mysql->close();
    ?>
</body>
</html>