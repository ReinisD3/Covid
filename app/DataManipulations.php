<?php

namespace App;


class DataManipulations
{

    public static function searchByCountry(string $countryToSearch, array $data):array
    {
        $searchedData = [];
        /** @var CovidRecord $record */
        foreach ($data as $record)
        {
            if ($record->getValsts() === $countryToSearch) $searchedData[] = $record;
        }
        return $searchedData;


    }

    public static function sortByKumulativais(array $data):array
    {
        /** @var CovidRecord $first */
        /** @var CovidRecord $second */

        usort($data,function($first,$second){
            return $first->getXIVDienuKumulativaIncidence() < $second->getXIVDienuKumulativaIncidence();
        });
        return $data;

    }

}