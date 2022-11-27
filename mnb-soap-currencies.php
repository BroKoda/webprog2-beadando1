<?php
    $exchangeRates = null;
    try {
        $client = new SoapClient("https://www.mnb.hu/arfolyamok.asmx?singleWsdl");
        $exchangeRates = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);
    } catch (SoapFault $e) {
        var_dump($e);
    }
?>

<?php
include_once 'includes/header.php';
include_once './helpers/session_helper.php';
?>

    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h2 class="mb-4">Aktuális HUF árfolyam</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <div>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const exchangeRatesJS = <?= json_encode($exchangeRates) ?>;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="includes/mnb-soap-currencies-chart.js"></script>

<?php
include_once 'includes/footer.php'
?>