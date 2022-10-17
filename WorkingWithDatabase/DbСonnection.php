<!DOCTYPE html>
<html lang="en">
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
            # echo 'Host info: '.$mysql->host_info;
            # $mysql->query("DROP TABLE `example`");
            $mysql->query("CREATE TABLE `example` (
                    id INT(11) NOT NULL,
                    name VARCHAR(50) NOT NULL,
                    bio TEXT NOT NULL,
                    PRIMARY KEY(id)
                )");
        }

        // закрытие соинедения с бд
        $mysql->close();
    ?>
</body>
</html>