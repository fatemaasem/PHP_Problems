<?php
/*
function to sort an array and return array after make sort and can define if we want ascending order or descending 
by default is ascending
*/
function sort_array($arr,$order='acs') {
    for($i=0;$i<count($arr);$i++) {
        for($j=$i+1;$j<count($arr);$j++){
            if($arr[$j]<$arr[$i]&&$order=='acs'){
                $temp=$arr[$j];
                $arr[$j]=$arr[$i];
                $arr[$i]=$temp;
            }
            else if($arr[$j]>$arr[$i]&&$order=='desc'){
                $temp=$arr[$j];
                $arr[$j]=$arr[$i];
                $arr[$i]=$temp;
            }
        }
    }
    return $arr;
}
//print array after make descending order 
echo "<pre>";
$arr=[5,1,0,10,20];
print_r(sort_array($arr,'desc'));
echo "<hr>";
//print array after make ascending order 
$arr=[5,1,0,10,20];
print_r(sort_array($arr));
echo "</pre>";
?>