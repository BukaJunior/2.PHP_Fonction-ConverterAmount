<?php

function getAmountInDollars(int $amount) {

    // $amount = 42 ;
    // var_dump($amount);

    $tauxDeConversion = $amount * 1.14 ;
    // var_dump($tauxDeConversion);

    $amountInDollars = $tauxDeConversion ;
    // var_dump($amountInDollars);

    return $amountInDollars;
}

$dollars = getAmountInDollars(123);
echo $dollars;
echo getAmountInDollars(10);

?>