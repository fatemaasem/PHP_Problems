<?php 
//write function to check a string is palindrome
function is_palindrome($str) {
    $mid=strlen($str)/2-1;
    $len=strlen($str);
   
    for( $i= 0; $i<=$mid; $i++ ){
        if($str[$i]!=$str[$len-1-$i])
        {
           
            return false;
        }
    }
    return true;
}
//check if this string is palindrome or not
echo  is_palindrome("ABcccBA");
///////////////////////////////////////////////////
echo "<hr>";
function is_palindrome_v2($str) {
    $first=0;
    $end=strlen($str)-1;
   
   while($str<=$end){
    if( $str[$end]!=$str[$first])
        return false;
    $first++;
    $end--;
   }
    return true;
}
echo  is_palindrome("ABcccBcA");
?>