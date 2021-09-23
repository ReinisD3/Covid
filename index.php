<?php

require_once 'vendor/autoload.php';

use App\DataLoader;
use App\DataManipulations;


$data = DataLoader::makeCovidRecords(DataLoader::loadCsvData('dati.csv'));

if ( isset($_GET['country'])) $data = DataManipulations::searchByCountry($_GET['country'],$data);

if (isset($_GET['sort'])) $data = DataManipulations::sortByKumulativais($data);


require 'view-index.html';