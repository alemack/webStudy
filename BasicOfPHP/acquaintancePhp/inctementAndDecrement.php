<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?echo "цввц"?>
<?php 

echo "<h4>Пост-инкремент</h4>"; 
$var = 5; 
echo "Должно быть 5: ". $var++. "<br />\n"; 
echo "Должно быть 6: ". $var. "<br />\n"; 
echo "<h4>Пре-инкремент</h4>"; 
$var = 5; 
echo "Должно быть 6: ". ++$var. "<br />\n"; 
echo "Должно быть 6:". $var. "<br />\n"; 
echo "<h4>Пост-декремент</h4>"; 
$var = 5; 
echo "Должно быть 5: ". $var--. "<br />\n"; 
echo "Должно быть 4:". $var. "<br />\n"; 
echo "<h4>Пре-декремент</h4>"; 
$var = 5; 
echo "Должно быть 4:". --$var. "<br />\n"; 
echo "Должно быть 4:". $var. "<br />\n"; 
?> 
</body>
</html>