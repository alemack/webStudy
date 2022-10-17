<html>
    <head>
        <title>Посмотрим на мир</title>
    </head>
    <body>
        <?php 
        echo "Привет, мир!"; 

        echo <<<END
        <p>Для отображения большого <br> количества текста используют синтаксис heredoc</p>
        END;

        phpinfo();
        
        ?>
    </body>
</html>