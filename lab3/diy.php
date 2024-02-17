<?php



//take 1000 ===== Final Take (Keep Code)
    // multiply given number by 37 
    function getSum($num1){
    
        try {
            if (is_numeric($num1)){ 
                $sum = $num1 * 37;
                echo "Sum of the two numbers $num1 and 37 is : $sum";
            } else {
        
                throw new Exception ("Please Enter a Number");
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
        }
        
         // Calling function
         getSum(10);
         getSum(20);
         getSum(37.5);
         getSum("mayonaise");
         getSum("words don't work");
         getSum(100);
         getSum(1000);
        
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";


$sum1 = 0;
for($x=0; $x<1000; $x+=3)
{
$sum1 +=$x;
}
echo "The sum of the numbers 0 to 1000 divisible by 3 is $sum1"."\n";
echo "<br>";

$sum2 = 0;
for($y=0; $y<1000; $y+=5)
{
$sum2 +=$y;
}
echo "The sum of the numbers less than 1000 divisible by 5 is $sum2"."\n";
echo "<br>";


$total = 0;
for($z=0; $z<1000; $z+=15)
{
    $total +=$z;
    
}

echo "the sum of the duplicates of 15 less than 1000 is $total"."\n";
echo"<br>";
echo $sum1+$sum2-$total;
echo"<br>";
echo"<br>";
echo"<br>";

echo "233168 is the sum of all numbers less than 1000 divisible by 3 and 5";