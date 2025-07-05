<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // This is how to declare variables in php
    $nana = "My name is: ";
    $yaw = "Philip";
    $benson = 12;
    $afia = 'The time is ';

    echo "$nana $yaw<br>";
    echo "$afia $benson ";
    echo "oclock <br>";

    //calling or creating functions
    function classroom(){
        global $afia;
        $master = '<br> My teacher is ';
        $pupil = 'Mr. Nyarko <br>';

        echo $master. ' '.$pupil .$afia;
    }

    classroom();

    function static_var() {
        static $num1 = 5;
        $num2 = 6;

        $num1++;
        $num2++;

        echo $num1 + $num2. '<br> <br>';
    }

    static_var();


//php operators

//arithmetic operators

$number1 = 10;
$number2 = 4;

echo ("If a is 10 and b is 4 <br>");

echo ("addition = ". $number1 + $number2. '<br>');
echo ("subtraction = ". $number1 - $number2. '<br>');
echo ("multiplication = ". $number1 * $number2. '<br>');
echo ("division = ". $number1 / $number2. '<br>');
echo ("modulus = ". $number1 % $number2. '<br>');
echo ("exponential = ". $number1 ** $number2. '<br> <br>');


//assignment operators
$a = 10;
echo ($a. "<br>");

$a = 20;
$a += 30;
echo ($a. '<br>');

$a = 50;
$a -= 20;
echo ($a. '<br>');

$a = 5;
$a *= 25;
echo ($a. '<br>');

$a = 50;
$a /= 10;
echo ($a. '<br>');
    
$a = 100;
$a %= 15;
echo ($a. '<br> <br>');

//comparison operators
$a = 25;
$b = 35;
$c = "25";

var_dump($a == $c);
echo ('<br>');

var_dump($a === $c);
echo ('<br>');

var_dump($a != $b);
echo ('<br>');

var_dump($a !== $c);
echo ('<br>');

var_dump($a < $b);
echo ('<br>');

var_dump($a > $b);
echo ('<br>');

var_dump($a <= $b);
echo ('<br>');

var_dump($a >= $b);
echo ('<br> <br>');


//incrementing and decrementing operator
$a = 10;
echo ++$a;
echo '<br>';
echo $a;
echo '<hr>';

$a = 10;
echo $a++;
echo '<br>';
echo $a;
echo '<hr>';

$a = 10;
echo --$a;
echo '<br>';
echo $a;
echo '<hr>';

$a = 10;
echo $a--;
echo '<br>';
echo $a;
echo '<hr>';


//logical operators
$year = 2014;
$age = 25;
$haslicense = true;
//and operator
if ($age >= 18 && $haslicense) {
    echo ("You can drive <br>");
} else {
    echo ("You cannot drive");
}

//OR operator
if ($age >= 18 || $haslicense) {
    echo ("You can be old enough and can drive <br>");
} else {
    echo ("You are not old enough or can't drive");
}

//NOT operator
if (!$haslicense) {
    echo ("You do not have a license <br>");
} else {
    echo ("You have a license <br>");
}

//combination
//leap year are divisible by 400 or by 4 but not 100
if (($year % 400 === 0) || (($year % 100 != 0) && ($year %4 === 0))) {
    echo ("$year is a leap year.");
} else {
    echo ("$year is not a leap year.");
}
echo "<hr>";

//String Operators
$a = "Akwaaba";
$b = "Ghana!";

echo $a.$b;
echo '<br>';

echo $a.=$b;

    ?>
</body>
</html>