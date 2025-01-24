<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>syeda ansa</h1>";
    // variables in php $variables_name
    $username="syeda ansa";
    $userName="syed shayaan";

    print($userName) ."<br>";
    print($username) ."<br>";
   
    echo"<h3>my name is   $username</h3>";
    //    concetenation dot(.)
    echo"<h3>sum of $num1 and$num2 is" .($num1 +$num2) ." </h3>";
    // maths method

    $negval=-10;
    echo abs($negval) ."<br>";
    echo pow(5,4) ."<br>";
    echo sqrt(144) ."<br>";
    echo ceil(3.3) ."<br>";
    echo floor(3.9) ."<br>";
    echo round(7.2) ."<br>";


// string method
$phrase =" syeda ansa";
echo strtoupper($phrase) ."<br>";
echo strtolower($phrase) ."<br>";
echo strlen($phrase) ."<br>";
echo ucwords($phrase) ."<br>";
echo str_replace("syeda","ansa",$phrase) ."<br>";
echo str_word_count($phrase) ."<br>";
echo strrev($phrase) ."<br>";
//data type in php
$num1 =10;
$num1 =1.67; //float
$num1 =100.68909893;
$num1 ="10";//string
$num1 ="city";//string

//boolean
$userRespones=true;
$isvalid=false;

//Array
$fruit =array("apple","mango","banana","orange");
echo $fruit;

//functions
//declare
function sayhi(){
    echo "hello 2403f1 batch..<br>";

}
//call
sayhi();

//paramterized function
function add ($snum1,$num2){
    echo $num1 + $num2;
}

//call
$c=add(110,20);
echo $c;


function first(){

}



//conditional statments
$age=16;
// if($age >=18){
//     echo"you are eligible to vote";
// }
// else{
//     echo"you are not eligible to vote";
// }


$age=16;
if($age >=18){
    echo"you can drive";

}
elseif($age >=16){
    echo"<script>alert('you can drive with a gradution')</script>";
}
else{
    echo"you canit drive";
}

//switch case
$favcolor ="red";
switch($favcolor){
    case "red";
    echo"your favorite  color is red";
    break;
    case "blue";
    echo"your favorite  color is blue";
    break;
    case "green";
    echo"your favorite  color is green";
    break;
   default:
   echo"your favorite color is neither red, blue  nor green";
}


    function calculate($num1=10, $num2=12){
        echo "sum of $num1 and $num2 is".  ($num1 + $num2). "<br>";
        echo "subtract of $num1 and $num2 is". ($num1 - $num2). "<br>";
        echo "multiply of $num1 and $num2 is". ($num1 * $num2). "<br>";
        echo "divide of $num1 and $num2 is". ($num1 / $num2). "<br>";
        echo "remainder of $num1 and $num2 is". ($num1 % $num2). "<br>";
    }
     
    ?>

</body>
</html>