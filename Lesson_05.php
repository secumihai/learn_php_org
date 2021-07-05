<?php

$matrix = [ 
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];

foreach ($matrix as $numbers) {
    $sum = 0;
    // TODO: Write you'r code here.
   foreach($numbers as $num){
       $sum+=$num;
   }
    echo "{$sum}\n";
}

?>