<?php

    //classe più generica che comprende tutti gli articoli sportivi dello shop
    class ShopSport{
        protected $nome;
        protected $costo;
        protected $descrizione;

        protected function __construct($nome, $costo, $descrizione){

            $this->nome = $nome;
            $this->costo = $costo;
            $this->descrizione = $descrizione;
        }
    }

    //classe meno generica che comprende solo le scarpe da calcio
    class ScarpeCalcio extends ShopSport{
        protected $numeroTacchetti;
        protected $colore;
        protected $marca;

        protected function __construct($numeroTacchetti, $colore, $marca, $nome, $costo, $descrizione){

            $this->numeroTacchetti = $numeroTacchetti;
            $this->colore = $colore;
            $this->marca = $marca;
            parent::__construct($nome, $costo, $descrizione);
        }
    }

    //nuovo oggetto da inserire all'interno della classe Scarpe da Calcio
    $mercurial = new ScarpeCalcio("11", "giallo", "nike", "mercurial", "270", "ciao sample description ciao",);
    
?>