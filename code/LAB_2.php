<?php

/*Laboratory work 2: PHP */

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
echo "1. Access by Link <br>";
$order = &$very_bad_unclear_name;
$order .= " and Pepsi";


//// Don't change the line below
echo "<br>Your order is: $very_bad_unclear_name.";
echo "<br><br> 2. Digits <br><br>";
$BadNumber = 13;
echo $BadNumber . "<br>";
$NegativeNumber = -1;
echo $NegativeNumber . "<br>";
$FractionalNumber = 13.37;
echo $FractionalNumber . "<br>";
echo ($BadNumber + $NegativeNumber) . "<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month) . "<br>";


// 11. Multiplication and division
echo "<br><br> 11. Multiplication and division <br><br>";
$num_languages = 4;
$months = 11;
$days = 16;
$days_per_language = ($days * $months) / $num_languages;
echo $days_per_language . "<br>";


// 12. Power
echo "<br><br> 12. Power <br><br>";
echo 8 ** 2;


// 13. Assignment operators
echo "<br><br> 13. Assignment operators <br><br>";
$my_num = 31;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "<br>";


// 14. Math functions
echo "<br><br> 14. Math functions <br><br>";
// Find the remainder of dividing $a by $b
$a = 10;
$b = 3;
echo ($a % $b) . "<br>";

// Check that $a is evenly divisible by $b
if (($a % $b) == 0)
    echo "Делиться ", $a / $b;
else
    echo "Делиться с остатком ", $a % $b;
echo "<br>";

// Working with degree and root
$st = 2 ** 10;
echo $st . "<br>";

echo sqrt(245) . "<br>";

$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $value)
    $sum = $sum + $value ** 2;
echo sqrt($sum) . "<br>";

// Working with rounding functions
echo round(sqrt(379), 0) . "<br>";
echo round(sqrt(379), 1) . "<br>";
echo round(sqrt(379), 2) . "<br>";

$array2 = array('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $array2['ceil'] . "<br>";
echo $array2['floor'] . "<br>";

// Working with min and max
echo min(4, -2, 5, 19, -130, 0, 10) . "<br>";
echo max(4, -2, 5, 19, -130, 0, 10) . "<br>";
echo rand(1, 100) . "<br>";

$array3 = [10];
for ($i = 0; $i < 10; $i++) {
    $array3[$i] = rand(1, 100);
    echo $array3[$i] . " ";
}

// Working with the module
echo "<br>" . abs(($b - $a)) . "<br>";
$array3 = [1, 2, -1, -2, 3, -3];
foreach ($array3 as $value) {
    $value = abs($value);
    echo $value . " ";
}

// General
$a = 56666;
$dividers = [];
for ($i = 1; $i <= $a; $i++)
    if ($a % $i == 0)
        $dividers[] = $i;
print_r($dividers);

$array4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
foreach ($array4 as $value) {
    $sum += $value;
    if ($sum > 10) {
        echo "<br>" . $value . "<br>";
        break;
    }
}


// 15. Functions
echo "<br><br> 15. Functions <br><br>";

function printStringReturnNumber(string $string): int
{
    echo $string . "<br>";
    return 666;
}

$my_num = printStringReturnNumber('Devil number');
echo $my_num;


// 16. Functions
echo "<br><br> 16. Funtions 2 <br><br>";

//16.1
function increaseEnthusiasm(string $string): string
{
    $string .= '!';
    return $string;
}

//16.2
echo increaseEnthusiasm('Hello, world') . "<br>";

//16.3
function repeatThreeTimes(string $string): string
{
    $string .= $string . $string;
    return $string;
}

//16.4
echo repeatThreeTimes(increaseEnthusiasm('Hello, world')) . "<br>";

//16.5
function cut(string $string, int $int = 10): string
{
    $return = "";
    for ($i = 0; $i < $int; $i++)
        $return .= $string[$i];
    return $return;
}

//16.6
echo cut("string example", 6) . "<br>";

//16.7
function arrayFilling($array, $number)
{
    if ($number < sizeof($array)) {
        echo $array[$number] . " ";
        arrayFilling($array, $number + 1);
    }
}

$array5 = array(9, 8, 7, 6, 5, 4, 3, 2, 1, 0);
arrayFilling($array5, 0);

//16.8
$sum = 0;
$array6 = [9, 8, 7, 6, 5, 4, 3, 2, 1, 0];
foreach ($array6 as $value) {
    $sum += $value;
    if ($sum > 10) {
        echo "<br>" . $value . "<br>";
        break;
    }
}


//17. Arrays
echo "<br><br> 17. Arrays <br><br>";

//17.1
$array7 = [];
for ($i = 1; $i < 11; $i++) {
    $array7[$i - 1] = '';
    for ($j = 0; $j < $i; $j++)
        $array7[$i - 1] .= 'x';
}
print_r($array7);

//17.2
function arrayFill($value, int $number)
{
    $array8 = [];
    for ($i = 1; $i <= $number; $i++) {
        $array8[$i - 1] = '';
        for ($j = 0; $j < $i; $j++)
            $array8[$i - 1] .= $value;
    }
    return $array8;
}

echo "<br>";
echo "<br>";
print_r(arrayFill('x', 5));
echo "<br>";

//17.3
$sum = 0;
$array9 = [[1, 2, 3], [4, 5], [6]];

foreach ($array9 as $value) {
    foreach ($value as $number) {
        $sum += $number;
    }
}
echo "<br>" . $sum . "<br>";
echo "<br>";

//17.4
$array10 = [];
$counter = 1;
for ($i = 0; $i < 3; $i++)
    for ($j = 0; $j < 3; $j++)
        $array10[$i][$j] = $counter++;
print_r($array10);
echo "<br>";

//17.5
$array11 = [2, 5, 3, 9];
$result = $array11[0] * $array11[1] + $array11[2] * $array11[3];
echo "<br>" . $result . "<br>";
echo "<br>";

//17.6
$user = ['name' => 'Ilya', 'surname' => 'Solovev', 'patronymic' => 'Andreevich', 31, 01, 2002];
echo $user['surname'] . " " . $user['name'] . " " . $user['patronymic'] . "<br>";
echo "<br>";

//17.7
$date = ['year' => 2022, 'month' => '02', 'day' => '11'];
echo "{$date['year']}-{$date['month']}-{$date['day']}<br>";
echo "<br>";

//17.8
$array12 = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($array12) . "<br>";
echo "<br>";

//17.9
echo $array12[sizeof($array12) - 1] . "<br>";
echo $array12[sizeof($array12) - 2] . "<br>";


// 18. if-else construct
echo "<br><br> 18. if/else Construction <br><br>";

//18.1
function MoreOrLessThan10(int $a, int $b): bool
{
    if ($a + $b > 10) return true;
    else return false;
}

if (MoreOrLessThan10(2, 9)) ;

//18.2
function EqualityOfNumbers(int $a, int $b): bool
{
    if ($a == $b) return true;
    else return false;
}

if (EqualityOfNumbers(21, 21)) echo "The numbers are equal";
echo "<br>";

//18.3
$test = 0;
echo ($test == 0) ? 'Верно!<br>' : 'Ложно!<br>';
echo "<br>";

//18.4
$age = rand(0, 150);
echo "age = {$age}<br>";
if ($age < 10) echo "{$age} < 10<br>";
else if ($age > 99) echo "{$age} > 99<br>";
else {
    $sum = 0;
    for ($i = 0; $i < strlen($age); $i++) {
        $sum += $age % 10;
        $age /= 10;
    }
    echo ($sum > 9) ? "сумма цифр двузначная<br>" : "сумма цифр однозначна<br>";
}
echo "<br>";

//18.5
$array13 = [1, 2, 3];
$sum = array_sum($array13);
echo (sizeof($array13) == 3) ? "{$sum}<br>" : "В массиве не 3 элемента";
echo "<br>";

// 19. Cycles
echo "<br><br> 19. Cycles <br><br>";

for ($i = 1; $i <= 20; $i++) {
    for ($j = 1; $j <= $i; $j++)
        echo "x";
    echo "<br>";
}
echo "<br>";


//20. Function combination
echo "<br><br> 20. Function Combinations <br><br>";

//20.1
$array14 = [5, 8, 7, 13, 7, 6, 77, 21, 2];
echo array_sum($array14) / sizeof($array14) . "<br>";

//20.2
echo array_sum(range(1, 100)) . "<br>";

//20.3
$array15 = [100, 64, 4, 49];
print_r(array_map('sqrt', $array15));
echo "<br>";

//20.4
$vals = range(1, 26);
$keys = range('a', 'z');
$array16 = array_combine($keys, $vals);
echo "<br>";
print_r($array16);
echo "<br>";
echo "<br>";

//20.5
$numbers = '1234567890';
$array17 = str_split($numbers, 2);
$new_result = array_sum($array17);
echo $new_result;
