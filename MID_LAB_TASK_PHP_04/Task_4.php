<?php
    $value1 = 15;
    $value2 = 37;
    $value3 = 56;

    if($value1 > $value2 && $value1 > $value3)
    {
        echo $value1.' is the largest value';
    }
    elseif($value2 > $value1 && $value2 > $value3)
    {
        echo $value2.' is the largest value';
    }
    elseif($value3 > $value1 && $value3 > $value1)
    {
        echo $value3.' is the largest value';
    }
?>