<?php
    $Item = array(
        array('1','2','3','A'),
        array('1','2','B','C'),
        array('1','D','E','F'),
    );

    echo "1st Shape:\n";
    $temp = 2;
    for($i = 0; $i<3; $i++)
    {
        for($j = 0; $j <3-$i; $j++)
        {
            echo $Item[$i][$j];
        }
        echo "\n";
    }


    echo "\n2nd Shape:\n";
    $temp = 2;
    for($i = 0; $i<3; $i++)
    {
        for($j = 3-$i; $j <4; $j++)
        {
            echo $Item[$i][$j];
            
        }
        echo "\n";
    }

?>