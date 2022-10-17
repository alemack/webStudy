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
        // создание соединения с бд
        $mysql = new mysqli("localhost", "root", "root", "mybase"); // адрес сервера, пароль, логин аккаунта на сервере, названеи базы данных
        // установление кодировки
        $mysql->query("SET NAMES 'utf8'");
        if($mysql->connect_error) {
            echo 'Error Number: '.$mysql->connect_errno.'<br/>';
            echo 'Error '.$mysql->connect_error;
        }
        else {
            /*
            // добавление записей в бд
            for($i = 1; $i <= 5; $i++) {
                $name = "Bob #".$i;
                $mysql->query("INSERT INTO `example` (`name`, `bio`) VALUES('$name', 'Full text')");
            }
            */

            // обновление записей в бд
            # $mysql->query("UPDATE `example` SET `bio` = 'New text!!' WHERE `id` <= 2");

            // удаление записей из бд
            $mysql->query("DELETE FROM `example` WHERE `id` = 1 AND `name` = 'John'");
            
        }

        // закрытие соединения с бд
        $mysql->close();
    ?>
</body>
</html>