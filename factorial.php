<?php
function factorial($x){
    $ans=1;
    for( $i= 1; $i<=$x; $i++ ){
        $ans*=$i;
    }
    return $ans;
}
//to print factorial 5
echo "Fact 5:". factorial(5);
?>
