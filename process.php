<?php
$myArray = [
    "teks1", "teks2", "teks3", "teks4", "teks5", "teks6", "teks7", 
];

$randomize1 = array_rand($myArray);
$randomize2 = array_rand($myArray);
$randomize3 = array_rand($myArray);

$myVals = [
    'satu' => "1. ". $myArray[$randomize1],
    'dua' => "2. ". $myArray[$randomize2],
    'tiga' => "3. ". $myArray[$randomize3],
];

echo json_encode($myVals);

?>