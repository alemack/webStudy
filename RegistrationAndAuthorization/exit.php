<?php
    setcookie('user', $user['name'], time() - 3600 * 24, "/"); // куки будет жить один день
    header('Location: http://study/RegistrationAndAuthorization/');
?>