<?php 
    // куки храянтся в браузере, небезопасно
    // название куки, значение куки
    // удалятся куки , когда сессия закончится 
    // через 7 секунд удалится
    /*
    echo "<br/>";
    setcookie("num", 10, time()+7);
    echo $_COOKIE["num"];
    
    if(isset($_COOKIE["num"]))
        echo "куки установлены";
    else
        echo "куки не установлены";
        */
    
    
    $num = (isset($_COOKIE["num"]))? $_COOKIE["num"]:0;
    $num++;
    setcookie("num", $num,  time()+4);
    echo "пользователь обновил страничку $num раз";

?>