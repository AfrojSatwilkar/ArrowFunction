<?php
// array
$Numbers = [5,72,9,1,48,71,5,6,4,2,5,17,87];
// Arrow function
$getEvenNumbers = array_filter($Numbers,fn($num)=>$num % 2 == 0);
//print_r($getEvenNumbers);
echo "Even Numbers : \n";
foreach($getEvenNumbers as $evenNumber) {
    echo "$evenNumber \n";
}

?>
