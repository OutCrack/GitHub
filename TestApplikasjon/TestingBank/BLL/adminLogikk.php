<?php
//include_once '../DAL/adminDatabase.php';
include_once '../DAL/adminDatabaseStub.php';

class Admin
{
    private $db;
    function __construct($innDb=null)
    {
        if($innDb==null)
        {
            $this->db=new DB(); 
        }
        else
        {
            $this->db=$innDb;
        }
    }
    
    function hentAlleKunder() //Testet
    {
        $kunder= $this->db->hentAlleKunder();
        return $kunder;
    }
    
    function endreKundeInfo($kunde) //Testet
    {
        $OK= $this->db->endreKundeInfo($kunde);
        return $OK;
    }
    
    function registrerKunde($kunde) //Testet
    {
        $OK = $this->db->registrerKunde($kunde);
        return $OK;
    }
    
    function slettKunde($personnummer) //Testet
    {
        $OK = $this->db->slettKunde($personnummer);
        return $OK;
    }
    
    function registrerKonto($konto) //Testet
    {
        $OK = $this->db->registerKonto($konto);
        return $OK;
    }
    
    function endreKonto($konto) //Testet
    {
        $OK = $this->db->endreKonto($konto);
        return $OK;
    }
    function hentAlleKonti() //Testet
    {
        $konti = $this->db->hentAlleKonti();
        return $konti;
    }
    function slettKonto($kontonummer) //Testet
    {
        $OK = $this->db->slettKonto($kontonummer);
        return $OK;
    }
}