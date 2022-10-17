<html>
    <head>
        <title>ресурсы</title>
    </head>

    <body>
        <?php

        $res = database_connect(); // фиктивная функция соединения с БД
        database_query($res);
        $res="boo";
        // соединение с бд будет автоматически закрыто, посколько переменная 
        // $res была переопределена
        
        function search(){
            $res = database_connect();
            database_qury($res);
            // когда функци завершается автоматически освобождаются все ресурсы
        }
        

        $foo = "raz";
        $$foo="rab";
        ?>
    </body>
</html>