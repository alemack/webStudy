<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $pass = md5($pass."wdwdwd"); // ."соль"

    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    // конвертация в массив
    $user = $result->fetch_assoc();

    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600 * 24, "/"); // куки будет жить один день

    $mysql->close();

    header('Location: http://study/RegistrationAndAuthorization/');
?>