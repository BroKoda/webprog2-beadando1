    <?php
        $currencyArray = null;
        try {
            $startDate = date("Y-m-d", strtotime('-30 days'));
            $endDate = date("Y-m-d");
            $currencyNames = "EUR,USD";
            $client = new SoapClient("https://www.mnb.hu/arfolyamok.asmx?singleWsdl");
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

<div class="col-12">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2 class="mb-4">USD - HUF árfolyam (30 nap)</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <div>
                    <canvas id="lineChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const currencyArrayJs = <?= json_encode($currencyArray) ?>;
    console.log(currencyArrayJs)
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="includes/mnb-soap-day-chart.js"></script>

<?php
include_once 'includes/footer.php'
?>
