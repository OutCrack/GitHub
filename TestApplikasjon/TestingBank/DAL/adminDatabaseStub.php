<?php
    include_once '../Model/domeneModell.php';
    
    class DBStub 
    {
        function hentAlleKunder()
        {
           $alleKunder = array();
           $kunde1 = new kunde();
           $kunde1->personnummer ="01010122344";
           $kunde1->navn = "Per Olsen";
           $kunde1->adresse = "Osloveien 82 0270 Oslo";
           $kunde1->telefonnr="12345678";
           $alleKunder[]=$kunde1;
           $kunde2 = new kunde();
           $kunde2->personnummer ="01010122344";
           $kunde2->navn = "Line Jensen";
           $kunde2->adresse = "Askerveien 100, 1379 Asker";
           $kunde2->telefonnr="92876789";
           $alleKunder[]=$kunde2;
           $kunde3 = new kunde();
           $kunde3->personnummer ="02020233455";
           $kunde3->navn = "Ole Olsen";
           $kunde3->adresse = "Berumsveien 23, 1234 Berum";
           $kunde3->telefonnr="99889988";
           $alleKunder[]=$kunde3;
           return $alleKunder;
        }
        
        function endreKundeInfo($kunde)
        {
            if($kunde->personnummer==15058139780){
                return "Feil";
            }
            return "OK";
        }
        
        function registrerKunde($kunde)
        {
            if($kunde->personnummer==15058139781){
                return "OK";
            }
            return "Feil";
        }
        
        function slettKunde($personnummer)
        {
            if($personnummer==15058139780){
                return "Feil";
            }
            return "OK";
        }
        
        function registerKonto($konto)
        {
            if($konto->kontonummer==20160464023){
                return "OK";
            }
            return "Feil";
        }
        
        function endreKonto($konto)
        {
            if($konto->kontonummer==20160464023){
                return "OK";
            }
            return "Feil";
        }
        
        function hentAlleKonti(){
            $alleKonti = array();
            $konto1 = new konto();
            $konto1->personnummer = "15267839781";
            $konto1->kontonummer = "21580625941";
            $konto1->saldo = "100,00";
            $konto1->type = "Brukskonto";
            $konto1->valuta = "Kroner";
            $alleKonti[]=$konto1;
            $konto2 = new konto();
            $konto2->personnummer = "15267839782";
            $konto2->kontonummer = "21580625942";
            $konto2->saldo = "200,00";
            $konto2->type = "Sparekonto";
            $konto2->valuta = "Kroner";
            $alleKonti[]=$konto2;
            $konto3 = new konto();
            $konto3->personnummer = "15267839783";
            $konto3->kontonummer = "21580625943";
            $konto3->saldo = "300,00";
            $konto3->type = "Kreditkonto";
            $konto3->valuta = "Kroner";
            $alleKonti[]=$konto3;
            return $alleKonti;
        }
        
        function slettKonto($kontonummer)
        {
            if($kontonummer==20160464020){
                return "Feil";
            }
            return "OK";
        }
    }
    