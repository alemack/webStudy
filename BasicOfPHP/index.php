<?php
    // использование ординарный ковычек уменьшает использование памяти
    // в два раза по сравнению в двойными
    // так на ординарные выделяется 1 байт, на двойные - 2 байта
    echo "Hello World <br>"; // эта строчка выводит "Hello World"
    /*
    Так можно писать многострочные комментарии:
    Комментарий 1,
    Комментарий 2,
    Комментарий 3
    */
    echo "Hello world"; # Это тоже комментарий, в стиле оболочки unix
    echo "РУсский текст";

    $number = 3;
    $float = 3.26;
    $string = "Hello";
    $bool = true;

    echo "Перменная mynumber = $bool <br>";

    echo PHP_VERSION;;

    // создаем константу
    define("PI", 3.14);
    echo "<br>";
    echo PI;
    echo "<br>";
    echo defined("PI");

    $x=5;
    $y=6;
    $summ=$x+$y;
    $diff=$x-$y;
    $mult=$x*$y;
    $dil=$x/$y;

    echo "Сумма из чисел $x и $y =$summ ";

    $z = 12;
    $ostatok = $x % $z;
    echo "остаток от деления $x и $z = $ostatok";

    $q=400;
    $q+=10;
    echo "<br>";
    echo $q;
    $q++;
    echo "<br>";
    echo $q;


    echo "<br>";
    $str_1="<b>Первая строка</b> <input type=\"text\" />";
    $str_2="<i>Вторая строка</i>";

    echo $str_1." ".$str_2;

    echo "\" \\";
    echo '\" \\';
    echo "<br>";

    $x=12;
    $y=34;
    $z=4.25;

    $bool_1= $x == $z;
    echo $bool_1;

    echo "<br>";


    $bool_1= $x != $z;
    echo $bool_1;

    $bool_3=!($x==$y);
    $bool_4= $x==$y || $x==$z;
    $bool_5 = $x==$y && $x<$z;
    $bool6=$x!=$y ^ $y==$z;

    echo "<br>";
    $string = "строка";
    $num = 0;

    // оператор эквивалентности, проверяет ещёи тип данный 
    $bool=$string===true; // будет false 
    $bool = $string == true; // будет true

    $x=22;
    $y=12;
    if($x<$y)
        echo 'Всё сработало';
    else if($x+$x>$y)
        echo 'Сработал else if';
    else
        echo 'Не сработало';
        
        
    $x>$y ? $string="Да": $string="Нет";
    echo "<br>".$string;


    $x=12;

    switch ($x)
    {
        case "hello": echo "это перемменная хелло"; break;
        case 5: echo "это перемменная 5"; break;
        case 12: echo "это перемменная 12"; break;
        default : echo "Эта переменная нам не известна"; 
    }

    for ($i=0; $i <=10; $i++)
    {
        if($i%5==0) continue; // завершает текущую операцию и запускает следующую
        if($i==8) break; // заканчивает цикл и выходит из него
        echo "<br>Цикл под номером $i";
    }

    $x=0;

    while($x<=10){
        echo " <br> итерация под номером $x";
        $x++;
    }



    $z=20;
    do {
        echo " <br> операция выполнилось один раз";
        $z++;
    }
        while($z<5);




    function printWords($word, $x, $y){
        $word = math($x, $y);
        echo $word;
        
    }    

    function math($firs, $second){
        $summa = $firs + $second;
        return $summa;
    }

    $x = 12;
    $y = 35;

    $summ = $x + $y;

   // echo $summ;

    $sum  = math($x, $y);
    printWords("<br>".$sum, $x, $y);


    // массивы 
    $arrayZero =  array(); // создали пустой массив
    $array = array(12, -3.25, "String", false);
    echo $array[1];
    $array[1] = "String";
    echo "<br/>".$array[1];

    for($i = 0; $i <count($array); $i++){
        echo "<br/>"."элемент массива с индексом $i = ".$array[$i]."";
    }


    $list = array("age"=>12, "name"=>"Alex", "schoolBoy"=>true);
    $list["age"] = 10;

    
    echo "<hr>".getAverage(array("firs"=>12, "sec"=>55, "third"=>23));
    function getAverage($array){
        $sum=0;
        foreach($array as $key =>$value)
        {
            $sum+=$value;
            echo "<br/>".$key;
        }
        return $sum/count($array);
    }

    // двумерные массивы
    $array = array(array(12,4.45, "string", true), array("Examle"), array(45, "strong"));

    echo $array[0][2]."<br/>";
    

    for($i=0; $i<count($array); $i++){
        for($j=0; $j<count($array[$i]); $j++)
        {
            echo $array[$i][$j]." ";
        }
        echo "<br/>";
    }

    // область видимости переменных 
    // глобальные , локальные , статические

    //глобавльная 
    $x=12;
    echo "переменная х равно $x <br/>";
    $x=10;
    echo "переменная х равно $x <br/>";

    function test(){
        // локальная функция
        $x=1;
        echo "переменная х равно $x <br/>";

        // обращщение к глоабльно переменной 
        $GLOBALS["x"] +=7;
        // или 
        global $x;
        $x+=10;
        echo "переменная х равно $x <br/>";
    }
    test();
    echo "переменная х равно $x <br/>";


    function test2(){
        // статическая переменная , значение постояно запоминается
        // может существовать только в функции
        static $id;
        $id++;
        echo $id;
    }

    for($i=0; $i<10; $i++){
        test2();
    }


    // подключение файлов
    
    $title="заголовок страницы";
    /*
    include "header.php"; // если не найдет файл, код всё равно продолжит работать
    */
    include_once "header.php"; //include_once и require_once вызывает один раз файл с таким именем и больше вызовит его 
    echo "тело документа";
    require_once "footer.php"; // если файл не найдет, то остановит программу на этом и выдаст ошибку


    // Функции для работы с типами переменных

    $x=12;
   // isset(); // проверит сществует ли перменная или нет, а если существуюет, то нажата ли 
   if(isset($x) )
   echo "переменная существует";
   else echo "не сущетсвует переменной";

   unset ($x); // полностью удалят переменную
 
   if(isset($x) )
   echo "переменная существует";
   else echo "не сущетсвует переменной";

   $x=424;
   $n;
   echo "is numeric - ".is_numeric($x)."<br>/";
   echo "is integer - ".is_integer($x)."<br>/";
   echo "double - ".is_double($x)."<br/>";
   echo "sttring- ".is_string($x)."<br/>";
   echo "boolean - ".is_bool($x)."<br/>";
   echo "scalar - ".is_scalar($x)."<br/>";
   echo "null - ".is_null($n)."<br/>";
   echo "array - ".is_array($x)."<br/>";
   echo "null - ".gettype($X)."<br/>";
   echo "null - ".gettype($n)."<br/>";



   // математические функции 
   // константы pi и e
   echo M_PI."<br/>".M_E."<br/>";
   $x =15;
   // значенеи по модулю
   echo abs($x)."<br/>";
   $y=49.3434343;
   // округление числа к меньше илии большему . можно указать сколько знаков после запятой должно быть
   echo round($y, 3)."<br/>";
   // всегда округляет к большему
   echo ceil($y)."<br/>";
   // округляет к меньшему
   echo floor($y)."<br/>";
   
   // находит случайные числа в целочисленном диапозоне 
   echo mt_rand(1,20)."<br/>";
   // находит минимальное значение среди элементов
   echo min(12,23,-2,334,23)."<br/>";
   // находит максимальное значение среди элементов
   echo max(12,23,-2,334,23)."<br/>";

   $z=1;
   echo sin($z)."<br/>"; // asin - акр-синус и там для всех
   echo cos($z)."<br/>";  
   echo tan($z)."<br/>";


   // строковые функции
   $string ="This is example";

   // длинну строки 
   echo strlen($string)."<br/>";
   // начнёт искать is с 4 элемента строки , можно не указывать с какой строки искать
   echo strpos($string, "is", 4)."<br/>";

   // T это 0-левой элемент, зщначит нужна и проверка на типы ===
   if(strpos($string, "T") === false) echo "T не найдено";
   else echo "T найдено";

   // удаляет первые 3 символа и удалит все после 7 символа
   echo substr($string, 3, 7)."<br/>";
   // удалит три первый и два с конца
   echo substr($string, 3, -2);
   // заменяет в строк (3 параметр) строку (1 параметра) на новый (2 параметр)
   echo str_replace("is", "abd", $string)."<br/>";


   $str="<b>АХхахах, жирный шрифт</b>";
   echo $str."<br/>";
   // выводит символы, не трансформирую, так лучше в базу передавать . ничего польщователь не поломает
   echo htmlspecialchars($str);

   // перевод в нижний или верхний регистр
   echo "<br/>".strtolower($string)."<br/>";
   echo "<br/>".strtoupper($string)."<br/>";

   // обработка паролей , кодирование пароля
   echo md5("123")."<br/>";

   // обрезает пробелы
   echo trim(" wd  wwddwdw      wdwdd      wd")."<br/>";



   // Функции для работы с массивами

   $array = array(12, 17, 5, 23, 56);

   // считает количество элементов массива
   echo count($array)."<br/>";
   // сортировака по возрастанию
   sort($array)."<br/>";
   print_r($array)."<br/>";
   // сортировака по убыванию
   rsort($array)."<br/>";
   print_r($array)."<br/>";

   // сортировка ассоциативных массивов по возрастанииЮ, запоминаются ключи
   asort($array)."<br/>";
   arsort($array)."<br/>";
   print_r($array);
   // сортировка по ключу
   ksort($array);
   print_r($array);

   // мешает элементы массива
   shuffle($array);
   print_r($array);

   echo "<br/>";

   // проверяет массив на наличие 12
   echo in_array(12, $array)."<br/>";

   // функция сложения двух масиивов
   $arr_1 =array(10,2);
   $arr_2=array(4,5,7);
   
   $arr_3=array_merge($arr_1,$arr_2);
   print_r($arr_3);

   echo "<br/>";

   // обрезает массив, откинем 2 элеменат сначала,   и откидываем два последних (-2)
   $arrDone = array(1,2,3,4,5,6,7,8);
   print_r($arrDone);
   echo "<br/>";
   array_slice($arrDone, 2, -2);
   print_r($arrDone);
   echo "<br/>";


   // функции для работы даты
   // 1 января 1970 года с этой даты выводит кол-во секунд
   echo time()."<br/>";

   // миллисекунду ещё
   echo microtime(true)."<br/>";

   $start = microtime(true);
   echo "время работы скрипта:".(microtime(true)-$start)."секунд";
   echo "<br/>";
   // date
   // можно передать количестов секунд прошедших с 1 января 1970 и он выяснит какая это была дата
   echo date("Y-m-d H:i:s", 94329843)."<br/>";

   // считает сколько секунд прошло на тот момент с 1 января 1970
   $time = mktime(12, 35, 23, 12, 7, 2007);
   echo date("Y-m-d H:i:s", $time)."<br/>";
   echo "<br/>";

   // вернет дату в массиве
   $array = getdate($time);
   print_r($array);
   echo "<br/>";
   // проверяет существует ли такой день
   checkdate(2,28,2012);
   echo "<br/>";



   // права доступа
   // указывает где находится этот файл
   echo  __FILE__;
   // выводит текущие права доступа
   echo fileperms(__FILE__);
   // теперь и владелец и группа пользоваетелй и пользователти могут чиать изменять и псиать здесь что-либо
   chmod(__FILE__, 0777);

   
  // echo $_SERVER["SERVER_PORT"];
   // phpinfo() и $_SERVER
  // phpinfo();




  // редиректы
  #   header("Location: http://google.com");
    // используется после переправления, чтобы код после редиректа ничего не выполнялось
  #  exit;

    
    // Отправка почты на email
    $message = "это самое простое\nсообщение в мире";
    $to = "awswd@dwdw.com";
    $from = "alex@wd.com";
    $subject="тема сообщения";
    // так нужно оформлять темы сообщения для mail.ru
    $subject="=?utf-8?B?".base64_encode($subject)."?=";
    // plain - текс без тегов, просто текст, а с тегами просто text/html
    $headers ="From: $from\r\nReply-to:$from\r\nContent_type:text/plain; charset=utf-8\r\n";
    // отправка на почту сообщения
    mail($to, $subject, $message, $headers);



    // Работа с куки $_COOKIE
    
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
