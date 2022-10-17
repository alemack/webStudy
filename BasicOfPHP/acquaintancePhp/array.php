<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php 
    $person = array("Эдисон", "Ванкель", "Крэппер");
    $creator = array('Лампочку'=> 'Эдисон', 'Роторный двигатель'=>'Ванкель', 'Туалет'=>'Крэппер');

    $person = ["Эдисон", "Ванкель", "Крэппер"]; // начиная с версии PHP 5.4
    sort($person);
    foreach($person as $name)
    {
        echo "Привет, {$name} \n";
    }

    asort($creator);
    foreach($creator as $invention=>$inventor)
    {
        echo "{$inventor} создал {$invention} \n";
    }
    ?>
</body>
</html>