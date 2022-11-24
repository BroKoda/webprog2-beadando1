<?php
require_once '../libraries/Database.php';

class SoapNemzetiBank
{

    public $exchangeRates;

    public function __construct()
    {

    }

    public function GetExchangeRates(string $startDate, string $endDate, string $currencyNames)
    {
        try {
            $soapClient = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
            $result = $soapClient->GetExchangeRates(array('startDate' => $startDate, 'endDate' => $endDate, 'currencyNames' => $currencyNames))->GetExchangeRatesResult;
        } catch (SoapFault $e) {
            var_dump($e);
            $result = false;
        }

        return $result;
    }

//    public function getRatesFromBank() {
//        try {
//            $client = new SoapClient("http://www.mnb.hu/arfolyamok.asmx?WSDL");
//
//            $currentExchangeRates = (array)simplexml_load_string($client->GetCurrentExchangeRates()->GetCurrentExchangeRatesResult);
////            echo $currentExchangeRates['Day']['date']."<br>";
////            print_r($currentExchangeRates['Day']);
//            $this->exchangeRates = $currentExchangeRates;
//
//            $currencyArray = (array)simplexml_load_string($client->GetExchangeRates("2022-11-10", "2022-11-18", "EUR", "USD")->GetExchangeRatesResult);
////            echo $currencyArray['Day']['date'];
////            print_r($currencyArray);
//
//        } catch (SoapFault $e) {
//            var_dump($e);
//        }
//    }

}