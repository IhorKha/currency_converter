<?php
function convertCurrency($amount, $from, $to){
    $conv_id = "{$from}_{$to}";
    $string = file_get_contents("https://free.currencyconverterapi.com/api/v6/convert?q=$conv_id&compact=ultra&apiKey=02912f070c72b93e8dba");
    $json_a = json_decode($string, true);
    return $amount * round($json_a[$conv_id], 4);
}
 $convert=convertCurrency($_POST['amount'], $_POST['from'], $_POST['to']);
echo $convert;

$history = $_POST['amount']." ". $_POST['from']." - ". $convert. " ". $_POST['to']." "." &ensp; &ensp; ". date("Y-m-d H:i:s")."<br>". "\n" ;
$fp = fopen("history.txt",'a');
$test = fwrite($fp, $history);



