<?php
/*
$temperature = 75;
$scale = 'F';
$location = "Cambridge";

echo 'Temperature in '.$location.': '.$temperature.' '.$scale;

require 'this-file-is-bogus.php';

echo "Hello"
echo "World"
    
echo rand(5);    


echo $foo;


$location = 'Cambridge';
echo gettype($location); # string

$temperature = 75;
echo gettype($temperature); # integer

$temperature = '75';
echo gettype($temperature); # string (because of the quotes)



# Cast a floating point number to an integer
$score = (int)10.9;
echo gettype($score); # integer


$privileges = 'You can: ';

$age = 76;
    
if ($age > 16) {
    $privileges .= 'drive, ';
}
if ($age > 18) {
    $privileges .= 'vote, ';
}
if ($age > 21) {
    $privileges .= 'purchase alcohol, ';
}
if ($age > 75) {
    $privileges .= 'retire, ';
}

echo $privileges;



function getCelsius(int $temperature, $includeUnit = true)
{
    $result = ($temperature - 32) / 1.8;
    
    if ($includeUnit) {
        return $result .= ' C';
    }
    else {
        return $result;
    }
}

# Example usage

echo getCelsius(75); # Output 23.88888889 C
echo getCelsius(75, false); # Output 23.88888889

*/

$luckynumber = rand();
$luckynumber = rand(0, 100);

echo $luckynumber;
?>
