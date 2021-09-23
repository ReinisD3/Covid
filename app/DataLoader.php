<?php

namespace App;

use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\TabularDataReader;

class DataLoader
{
    public static function loadCsvData(string $address): TabularDataReader
    {

        $csv = Reader::createFromPath($address, 'r');
        $csv->setDelimiter(';');
        $csv->setHeaderOffset(0); //set the CSV header offset

//get 25 records starting from the 11th row
        return Statement::create()->process($csv);

    }

        public static function makeCovidRecords(TabularDataReader $records):array
    {
        $covidData = [];

        foreach ($records as $line)
        {
            $covidData[] = new CovidRecord($line['Datums'],
                $line['Valsts'],
                $line['14DienuKumulativaIncidence'],
                $line['Izcelosana'],
                $line['Pasizolacija'],
                $line['PersIrVakcParslSert_PasizolacijaLatvija'],
                $line['PersIrVakcParslSert_TestsPirmsIebrauksanasLV'],
                $line['PersIrVakcParslSert_TestsPecIebrauksanasLV'],
                $line['CitasPersonas_PasizolacijaLatvija'],
                $line['CitasPersonas_TestsPirmsIebrauksanasLV'],
                $line['CitasPersonas_TestsPecIebrauksanasLV']);
        }

        return $covidData;
    }





}

