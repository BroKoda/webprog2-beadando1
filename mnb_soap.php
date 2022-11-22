<?php
    try {
        $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
        $exchangeRates = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);
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
        console.log(exchangeRatesJS)
    </script>

<?php
include_once 'includes/footer.php'
?>