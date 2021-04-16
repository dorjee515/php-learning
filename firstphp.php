<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is php file</title>
</head>
<body>
    <div id="container">
        php first code
       
        <?php  //opening tag of php
        //for making constant
       define('pi',3.14);
       echo "this is echo speacking";
            echo "<br>";
           echo "Lorem ipsum dolor sit amet.";
         //declaring varibles
           $var1=1;    //dynamic type
           $var2=2;
           echo "<br>";
        //  arithmatic operator
        echo $var2 + $var1;
        echo "<br>";
        echo $var2 * $var1;
        echo "<br>";
        echo $var2 / $var1;
        echo "<br>";
        echo $var2 - $var1;
        echo "<br>";
        //  assignment operator
        $v1=$var2;
        echo $v1;
        echo "<br>";
        //  comparison operator
        echo var_dump(1==4);
        echo "<br>";
        echo var_dump(1<4);
        echo "<h1>this is html header</h1>";
        echo "<br>";
        //  incre/decre operator
        echo $var2;
        echo "<br>";
        echo $var2++;
        echo "<br>";
        echo $var2--;
        echo "<br>";
        echo ++$var2;
        echo "<br>";
        echo --$var2;
        echo "<br>";
        //  logical operator
       echo $var1 ^ $var2;
       $myvar=!(true and false);
       $myvar=!(true or false);
       $myvar=(true xor true);
       echo var_dump($myvar);
    
        //end of php tag  ?> 
         <?php
         //data types in php
        //  string
        //  integer
        //  float
        //  boolean
        //  array
        //  object 
        echo pi*2;
        ?>
    </div>
</body>
</html>