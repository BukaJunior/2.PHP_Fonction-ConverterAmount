<?php

function getAmountInDollars() {

    $amount = 42 ;
    var_dump($amount);

    $tauxDeConversion = $amount * 1.14 ;
    var_dump($tauxDeConversion);

    $amountInDollars = $tauxDeConversion ;
    var_dump($amountInDollars);

    return $amountInDollars;
}

?>