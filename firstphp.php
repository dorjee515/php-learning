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
            echo "this is echo speacking";
            echo "<br>";
           echo "Lorem ipsum dolor sit amet.";
         //declaring varibles
           $var1=34;    //dynamic type
           $var2=43;
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
        echo "<br>";
        //  logical operator

        //end of php tag  ?> 
         
    </div>
</body>
</html>