<html>
    <head>
        <title>
            обласи видимости смотрим, глобальные переменные, локальные и прочее
        </title>
    </head>

    <body>
        <?php 
        function updateCounter()
        {
          global $counter;
          $counter++;
    
        }

        $counter=10;
        updateCounter();
        echo $counter;
        ?>
    </body>
</html>