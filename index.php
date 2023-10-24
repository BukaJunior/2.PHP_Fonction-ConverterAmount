

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="number">Montant à convertir</label>
        <input type="number" name="number" id="number">

        <button type="submit">COnvertir</button>

    </form>

    <?php

        // function getAmountInDollars(int $numberToConvert) {

        //     // $amount = 42 ;
        //     // var_dump($amount);
        //     $numberToConvert = $_GET['number'];

        //     $tauxDeConversion = $numberToConvert * 1.14 ;
        //     // var_dump($tauxDeConversion);

        //     $amountInDollars = $tauxDeConversion ;
        //     // var_dump($amountInDollars);

        //     return $amountInDollars;
        // }

        // $dollars = getAmountInDollars(10);
        // echo $dollars;
        // echo getAmountInDollars(10);

        // function getAmountInYens(int $numberToConvert) {

            
        //     // $amount = 42 ;
        //     // var_dump($amount);
        //     $numberToConvert = filter_input(INPUT_GET, 'number', FILTER_VALIDATE_FLOAT);

        //     $tauxDeConversion = $numberToConvert * 126 ;
        //     // var_dump($tauxDeConversion);

        //     $amountInYens = $tauxDeConversion ;
        //     // var_dump($amountInDollars);

        //     return $amountInYens;

            
        // }

        // $yens = getAmountInYens(10);
        // echo $yens . "&yen";

        function getConvertedAmount($numberToConvert, $nameOfCurrency) {

        }


?>


</body>
</html>