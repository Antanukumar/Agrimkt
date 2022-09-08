<?php
//PHP Function

//Defining a function 
function add($a, $b, $op)
{
    if ($op == '+')
        $r = $a + $b;
    elseif ($op == '-') {
        if ($a > $b)
            $r = $a - $b;
        else
            $r = $b - $a;
    } elseif ($op == 'x') {
        $r = $a * $b;
    } else {
        echo "Not a valid op";
    }


    //return of functio 
    return $r;
}

//Call/run the function
$sm = add(34, 18, '-');

echo "Result : $sm";
