<html>
    <head>
        <title>Объекты</title>
    </head>
    <body>
        <?php
           class Person
           {
               public $name='';
   
               function name($newname=NUll)
               {
                   if (!is_null($newname))
                   {
                       $this->name=$newname;
                   }
                   return $this->name;
               }
           }

           $ed=new Person();
           $ed->name('Эдисон');
           echo "Привет, {$ed->name}\n";

         

           $tc=new Person;
           $tc->name('Крэппер');
           echo "Привет, {$tc->name}\n";

           $long = "Длинное название";
           $short = &$long;
           print"\$short = $short \n";
           unset($short); // удаление переменной-ссылки
           print $logn;
          
        ?>


    </body>
</html>