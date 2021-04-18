<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        h1{
            color:Red;
        }
        .container{
        max-width: 80%;
        background-color:rgb(141, 141, 199);
        font-size:18px;
        margin:auto;
        padding:20px;
        }
        

    </style>
</head>
<body>
<div class="container">
    <h1>Let know more about php</h1>
    <?php
      $age=34;
      if($age<18){
          echo "chotu garh jaa!!";
      }
     else if($age>18){
         echo "aao aao bhai";
     }
     else{
         echo "bach gaya aja andar abb";
     }
     echo "<br>";

     //array 
     $lang=array("A","B","C","D","E");
     echo $lang[0];
     echo "<br>";
     echo count($lang);
     echo "<br>";
     //loops in php
    //while loop
    echo "while loop<br>";
     $i=0;
     while($i!=count($lang)){
           echo $lang[$i];
           echo "<br>";
           $i++;
       }

    echo "do while loop <br>";
       //do while loop
    $j=count($lang)-1;
    do{
        echo $lang[$j];
        echo "<br>";
       
    }while( $j--);
 
    //for loop
    echo "for loop <br>";
      for($i=0;$i<count($lang);$i++){
         echo $lang[$i];
         echo "<br>" ;
           }
       
           echo "foreach loop <br>";
           //foreach
           foreach($lang as $k){
               echo $k;
               echo "<br>";
           }
       //functions
   
         function f1(){
             echo "<br>this is a function";
         }
         f1();  //function call

           //array 
         $ar=array("pratap","dinesh","karan","rajan");

         foreach($ar as $val){
             echo $val;
             echo "<br>";
         }

         //associative array has key and value

         $ar2=array("pratap"=>21,"dinesh"=>20,"karan"=>20,"rajan"=>6);
         foreach($ar2 as $i=>$j){
          echo "age of ".$i." is ";
          echo $j;
          echo "<br>";
         }
    
           //multi dimensional array

           $ar3=array(
               array("pratap",21,"male"),
               array("dinesh",20,"middleman"),
               array("karan",20,"female"),
               array("rajan",6,"gay")
            );
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";
                echo "name ".$ar3[0][0]." age ".$ar3[0][1]." sex ".$ar3[0][2]; 
                echo "<br>";         
                echo "name ".$ar3[1][0]." age ".$ar3[1][1]." sex ".$ar3[1][2]; 
                echo "<br>";          
                echo "name ".$ar3[2][0]." age ".$ar3[2][1]." sex ".$ar3[2][2]; 
                echo "<br>";
                echo "name ".$ar3[3][0]." age ".$ar3[3][1]." sex ".$ar3[3 ][2]; 
                echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";      
    
    ?>
      

    </div>
</body>
</html>