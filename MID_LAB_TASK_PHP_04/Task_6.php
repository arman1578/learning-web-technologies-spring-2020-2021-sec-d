<?php
    $fruits = array('Banana', 'Apple', 'Grape', 'Orange', 'Lemon');
    $searchItem = 'Apple';

    foreach($fruits as $fruit)
    {
        if($fruit === $searchItem)
        {
            echo $fruit." is in the array.";
        }
    }
?>