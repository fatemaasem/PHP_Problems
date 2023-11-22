<?php 
/*
write a function getPriceWithDiscount that takes the price and returns the price after discount.
discount is 10% for prices greater than 1000
and 5% for prices less than or equal 1000
*/
function getPriceWithDiscount($price) {
    if($price>1000)return $price-(.1*$price);
    else if($price<= 1000)return $price-(.05*$price);
}
echo getPriceWithDiscount(1000);
?>
