<?php
    $exchangeRates = null;
    $currencyArray = null;
    try {
        $startDate = "2022-11-10";
        $endDate = "2022-11-18";
        $currencyNames = "EUR,USD";
        $options = ["2022-11-10", "2022-11-18", "EUR", "USD"];
        $client = new SoapClient("https://www.mnb.hu/arfolyamok.asmx?singleWsdl");
        $exchangeRates = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);
        $currencyArray = (array)simplexml_load_string(
                $client->GetExchangeRates(array('startDate' => $startDate, 'endDate' => $endDate, 'currencyNames' => $currencyNames))->GetExchangeRatesResult);
    } catch (SoapFault $e) {
        var_dump($e);
    }
?>

<?php
include_once 'includes/header.php';
include_once './helpers/session_helper.php';
?>

    <h1 class="header">MNB SOAP</h1>

    <script>
        const exchangeRatesJS = <?= json_encode($exchangeRates) ?>;
        const currencyArrayJs = <?= json_encode($currencyArray) ?>;
        console.log(exchangeRatesJS)
        console.log(currencyArrayJs)
    </script>

<?php
include_once 'includes/footer.php'
?>