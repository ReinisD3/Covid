<?php

namespace App;

class CovidRecord
{

    private string $date;
    private string $valsts;
    private string $XIVDienuKumulativaIncidence;
    private string $izcelosana;
    private string $pasizolacija;
    private string $PersIrVakcParslSert_PasizolacijaLatvija;
    private string $PersIrVakcParslSert_TestsPirmsIebrauksanasLV;
    private string $PersIrVakcParslSert_TestsPecIebrauksanasLV;
    private string $CitasPersonas_PasizolacijaLatvija;
    private string $CitasPersonas_TestsPirmsIebrauksanasLV;
    private string $CitasPersonas_TestsPecIebrauksanasLV;

    public function __construct(string $date,
                                string $valsts,
                                string $XIVDienuKumulativaIncidence,
                                string $izcelosana,
                                string $pasizolacija,
                                string $PersIrVakcParslSert_PasizolacijaLatvija,
                                string $PersIrVakcParslSert_TestsPirmsIebrauksanasLV,
                                string $PersIrVakcParslSert_TestsPecIebrauksanasLV,
                                string $CitasPersonas_PasizolacijaLatvija,
                                string $CitasPersonas_TestsPirmsIebrauksanasLV,
                                string $CitasPersonas_TestsPecIebrauksanasLV)
    {
        $this->date = $date;
        $this->valsts = $valsts;
        $this->XIVDienuKumulativaIncidence = $XIVDienuKumulativaIncidence;
        $this->izcelosana = $izcelosana;
        $this->pasizolacija = $pasizolacija;
        $this->PersIrVakcParslSert_PasizolacijaLatvija = $PersIrVakcParslSert_PasizolacijaLatvija;
        $this->PersIrVakcParslSert_TestsPirmsIebrauksanasLV = $PersIrVakcParslSert_TestsPirmsIebrauksanasLV;
        $this->PersIrVakcParslSert_TestsPecIebrauksanasLV = $PersIrVakcParslSert_TestsPecIebrauksanasLV;
        $this->CitasPersonas_PasizolacijaLatvija = $CitasPersonas_PasizolacijaLatvija;
        $this->CitasPersonas_TestsPirmsIebrauksanasLV = $CitasPersonas_TestsPirmsIebrauksanasLV;
        $this->CitasPersonas_TestsPecIebrauksanasLV = $CitasPersonas_TestsPecIebrauksanasLV;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getValsts(): string
    {
        return mb_strimwidth($this->valsts,0,20);
    }

    public function getXIVDienuKumulativaIncidence(): string
    {
        return $this->XIVDienuKumulativaIncidence;
    }

    public function getIzcelosana(): string
    {
        return mb_strimwidth($this->izcelosana,0,21);
    }

    public function getPasizolacija(): string
    {
        return mb_strimwidth($this->pasizolacija,0,31);
    }

    public function getPersIrVakcParslSertPasizolacijaLatvija(): string
    {
        return $this->PersIrVakcParslSert_PasizolacijaLatvija;
    }

    public function getPersIrVakcParslSertTestsPirmsIebrauksanasLV(): string
    {
        return $this->PersIrVakcParslSert_TestsPirmsIebrauksanasLV;
    }

    public function getPersIrVakcParslSertTestsPecIebrauksanasLV(): string
    {
        return $this->PersIrVakcParslSert_TestsPecIebrauksanasLV;
    }

    public function getCitasPersonasPasizolacijaLatvija(): string
    {
        return mb_strimwidth($this->CitasPersonas_PasizolacijaLatvija,0,20);
    }

    public function getCitasPersonasTestsPirmsIebrauksanasLV(): string
    {
        return $this->CitasPersonas_TestsPirmsIebrauksanasLV;
    }

    public function getCitasPersonasTestsPecIebrauksanasLV(): string
    {
        return $this->CitasPersonas_TestsPecIebrauksanasLV;
    }
}