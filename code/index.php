<?php
/* Imagine a lot of code here */
$very_bad_unclear_name="15 chicken wings";


// Write your code here:
echo "1. Access by Link <br>";
$order = &$very_bad_unclear_name;
$order .=" and Pepsi";


//// Don't change the line below
echo "<br>Your order is: $very_bad_unclear_name.";
echo "<br><br> 2. Digits <br><br>";
$BadNumber = 13;
echo $BadNumber."<br>";
$NegativeNumber = -1;
echo $NegativeNumber."<br>";
$FractionalNumber = 13.37;
echo $FractionalNumber. "<br>";
echo ($BadNumber + $NegativeNumber)."<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month)."<br>";


// 11. Multiplication and division
echo "<br><br> 11. Multiplication and division <br><br>";
$num_languages = 4;
$months = 11;
$days = 16;
$days_per_language = ($days * $months)/$num_languages;
echo $days_per_language."<br>";


// 12. Power
echo "<br><br> 12. Power <br><br>";
echo 8**2;


// 13. Assignment operators
echo "<br><br> 13. Assignment operators <br><br>";
$my_num = 31;
$answer = $my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -=$my_num;
echo $answer."<br>";


// 14. Math functions
echo "<br><br> 14. Math functions <br><br>";
// Find the remainder of dividing $a by $b
$a = 10;
$b = 3;
echo ($a%$b)."<br>";

// Check that $a is evenly divisible by $b
if (($a % $b) == 0)
    echo "Делиться ", $a / $b ;
else
    echo "Делиться с остатком ", $a % $b ;
echo "<br>";

// Working with degree and root
$st = 2**10;
echo $st."<br>";

echo sqrt(245)."<br>";

$array = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($array as $value)
    $sum = $sum + $value**2;
echo sqrt($sum)."<br>";

// Working with rounding functions
echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";

$array2 = array ('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $array2['ceil']."<br>";
echo $array2['floor']."<br>";

// Working with min and max
echo min(4, -2, 5, 19, -130, 0, 10)."<br>";
echo max(4, -2, 5, 19, -130, 0, 10)."<br>";
echo rand(1, 100)."<br>";

$array3 = [10];
for ($i = 0; $i < 10; $i++)
{
    $array3[$i] = rand(1,100);
    echo $array3[$i]." ";
}

// Working with the module
echo "<br>".abs(($b-$a))."<br>";
$array3 = [1, 2, -1, -2, 3, -3];
foreach ($array3 as $value) {
    $value = abs($value);
    echo $value." ";
}

// General
$a = 56666;
$dividers = [];
for ($i = 1; $i <= $a; $i++)
    if ($a % $i == 0)
        $dividers[] = $i;
print_r($dividers);

$array4 = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
foreach ($array4 as $value) {
    $sum += $value;
    if ($sum > 10)
    {
        echo "<br>".$value. "<br>";
        break;
    }
}





