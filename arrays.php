<!Doctype html>
<html>
<body>
<?php
$car = array("BMW","Volvo","Toyota");
echo count($car);
// getting all items using for loop
$cars = array("Volvo","BMW","Toyota");
$arraylength = count($cars);

for($x = 0; $x < $arraylength; $x++){
    echo $cars[$x];
    echo "<br>";
}
   
 function writeMessage(){
    echo "I am grateful";

}
writeMessage();


// php functions with arguments
function addFunction($num1,$num2){
    $sum = $num1 + $num2;
    echo "The total sum is: $sum";
}
addFunction(40,30);






?>
</body>

</html>
</body>