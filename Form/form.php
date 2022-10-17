<?php
    // print_r(($_POST)); // при использование пост не отображаеются данных для передач в адресной строке
   // print_r(($_GET)); // появляется в адресной строке
   if(isset($_POST["done"]))
    if($_POST["name"] == "")
            echo "введите имя.<a href='/'>исправить</a>";
        else
            header("Location:index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="test" action="check.php" method="post"> <br/>
        <label>Имя: </label><br/>
        <input type="text" name="name" placeholder="имя"/> <br/>
        <label>Email: </label><br/>
        <input type="text" name="name" placeholder="Email"/> <br/>
        <label>Сообщение: </label><br/>
        <textarea name="message" cols="20" rows="40"></textarea>
        <br/>
        <input type="submit" name="done" value="готово"/>
    </form>
</body>
</html>