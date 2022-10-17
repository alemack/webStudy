<html>
    <head>
        <title>Форма приветствия</title>
    </head>
    <body>
        <?php
        if(!empty($_POST['name']))
        {
            echo "Привет, {$_POST['name']}, и добро пожаловать!";
        } 
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        Введите ваше имя: <input type="text" name="name"/>
        <input type="submit"/> 

        </form>
    </body>
</html>