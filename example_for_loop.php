<?php
/*
question 1 
Write a PHP program to print the odd numbers from 1 to 99. Prints one number per line.
*/
for ( $i = 1; $i < 100; $i=$i+2 ) {
    echo $i."<br>";
}
///////////////////////////////////////////////////////////////////
/*
question 2
Write a PHP program to print numbers between 1 to 100 which are divisible by 3, 5 and by both
*/
$divisible_by_3=[];
$divisible_by_5=[];
$divisible_by_both=[];
for ($i=1;$i<=100;$i++) {
if($i%3==0){
    $divisible_by_3[]=$i;
}
if($i%5==0){
    $divisible_by_5[]=$i;
}
if($i%3==0&&$i%5==0){
    $divisible_by_both[]=$i;
}
}
//to print array contain all numbers divisible by 3 from 1 to 100
echo "Divided by 3: <br>";
foreach ($divisible_by_3 as $item){
    echo $item." ";
}
echo "<hr>";
//to print array contain all numbers divisible by 5 from 1 to 100
echo "Divided by 5: <br>";
foreach ($divisible_by_5 as $item){
    echo $item." ";
}
echo "<hr>";
//to print array contain all numbers divisible by 3 and 5 from 1 to 100
echo "Divided by 3 and 5: <br>";
foreach ($divisible_by_both as $item){
    echo $item." ";
}
?>