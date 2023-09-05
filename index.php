<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            font-size: 20px;
        }
    </style>
</head>
<body>
<?php
error_reporting(E_ALL); // type 0 inside () to disable it
ini_set('display_errors', 'on'); // change off to disable it
mb_internal_encoding('UTF-8');
echo "<br> <h2>Работа  с переменными</h2>";

$num = 10;
$num = 20;
$str = ' string one ';
$bool = true;
echo 'Number ' . $num . " True $str " . "<br>";
$a = 0.5;
$b = "0.8";

const USER_AGE = 18;
echo USER_AGE . "<br>";
$num += 10;
echo "<br> <h2>Математически функции</h2>";
echo $a + floatval($b) . "<br>"; //  converts string to float
echo M_PI . "<br>" . M_E . "<br>";
echo abs(-22) . "<br>" . ceil(3.1) . "<br>" . floor(3.90) . "<br>" . round(3.552626, 2) . "<br>";
echo mt_rand(1, 100) . "<br>";
echo max(1, 3, 15, 7) . "<br>";
echo min(1, 3, 15, 7) . "<br>";

echo "<input type=\"text\">" . "<br>";

$length = strlen($str);
echo $length . "<br>"; // shows length of the string
echo mb_strlen($str); // use for strings with problematic symbols or non-latin letters
echo trim($str) . "<br>"; // removes spaces in string
echo strtolower($str) . "<br>"; // transform text to lowercase
echo mb_strtolower($str) . "<br>"; // transform text to lowercase in case if there are non-latin letters
echo strtoupper($str) . "<br>"; // transform text to uppercase
echo strtoupper(trim($str)) . "<br>";
echo md5($str) . "<br>"; // creates cache for passwords
echo "<br>";

echo "<br> <h2>'print_r', 'var_dump'</h2>";
$myArray = [1, 2, 3];
print_r($myArray); // is specialized for displaying array structures in a readable format during debugging
echo "<br>";
echo '<a href="index.php" target="_blank">URL</a>' . "<br>";
var_dump("1234"); //Provides detailed information about the data type, length, and values of variables or expressions, including arrays and objects.
echo "<br>";
var_dump((float)"1.200");
echo "<br>";
var_dump((int)'1.8');
echo "<br>";
$boollly = true;
var_dump($boollly);
echo "<br>";
var_dump((string) 123000);

echo "<br>";
echo true; // Output 1
echo false; // Output emptiness
echo "<br>";

echo "<br> <h2>Работа с строками</h2>";
$string = 'abcde';
echo $string[0];
$string[0] = 'd';
echo "<br>";
echo $string;
echo "<br>";

echo "<br> <h2>Работа с массивами</h2>";
$arr = [3, 'e', null, false];
echo "<br>";
$arr = [1 => 3, 'e', null, false];
print_r ($arr);
echo "<br>";
$arraySal = ['user1' => 300, 'user2' => 500, 'user3' => 200];
echo "<br>" . count($arraySal) . "<br>"; //shows array length

echo "<br> <h2>if, else</h2>";
$test = 5;
$test2 = 10;

if($test > 0 and $test2 <= 10){ //and = &&, or = ||
    echo '++++';
} else{
    echo '-----';
}
echo "<br>";

$test3 = null;
if(isset($test3)){ // checks if variable value is null or not
    echo '++++';
} else{
    echo '-----';
}
echo "<br>";

$test4 = '';
if(!empty($test4)){ // checks if the variable is empty or not
    echo '++++';
} else{
    echo '-----';
}
echo "<br>";

echo "<br> <h2>Конструктор Switch</h2>";
$lang = 'ru';
switch ($lang){
    case 'ru' : // if, else if
        echo 'рус';
    break;
    case 'en' :
        echo 'англ';
    break;
    case 'de':
        echo 'нем';
    break;
    default: //else
        echo 'not supported';
    break;
}
echo "<br>";

//$check = $lang == 'ru' ? true : false;
var_dump($lang == 'ru' ? true : false);
echo "<br>";
echo "<br> <h2>ForEach</h2>";


?>
</body>
</html>