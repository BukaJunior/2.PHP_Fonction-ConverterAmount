<?php

function getAmountInDollars(int $numberToConvert) {

    // $amount = 42 ;
    // var_dump($amount);
    $numberToConvert = $_GET['number'];

    $tauxDeConversion = $numberToConvert * 1.14 ;
    // var_dump($tauxDeConversion);

    $amountInDollars = $tauxDeConversion ;
    // var_dump($amountInDollars);

    return $amountInDollars;
}

$dollars = getAmountInDollars(5);
echo $dollars;
// echo getAmountInDollars(10);

?>