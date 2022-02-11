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


