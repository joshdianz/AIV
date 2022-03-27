<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIV Tech Assessment</title>
</head>
<body>
<?php

#Question 1
// Write a function to find number of days between two dates in Php?

$date1 = "3/24/2021";
$date2 = "3/24/2022";
$diff = daysbetween($date1, $date2);

function daysbetween($date1, $date2){
    $diff = strtotime($date2) - strtotime($date1);
    return abs(round($diff / 86400));
}
echo "Days between $date1 and $date2 is:" . $diff . " days ";

#Question 2 
// What is the use of namespace in Php?

echo "<p>Namespaces allow you to have multiple classes with the same name, inorder to perform a task.</p>"

#Question 3
// Write a function in Php to check whether a number is prime or not?

/* function primeNumber($prime_number){
    $counter = 0;
    if ($prime_number == 1)
     return true;
    for ($i = 1; $i <= $prime_number; $i++){
        if (isFactor($prime_number,$i))
            $counter++;
    }
    return $counter == 2;
}



function isFactor($n,$i){
    return $n%$i == 0;
} */

function primeNumber($prime_number){
    $counter = 0;
    if ($prime_number == 1)
     return true;
    for ($i = 1; $i <= $prime_number; $i++){
        if (isFactor($prime_number,$i))
            $counter++;
    }
    if ($counter == 2)
     echo $prime_number . "Is prime number ";
    else 
     echo $prime_number . "Not prime number ";

}


function isFactor($n,$i){
    return ($n%$i == 0);
}


#Question 4
// Write a function in PHP to find the occurrence of a word in a string?
function indexOfSubstring($string, $substring){
    echo strpos($string, $substring);
1
}
?>
</body>
</html>