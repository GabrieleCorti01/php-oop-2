<?php

    //classe più generica che comprende tutti gli articoli sportivi dello shop
    class Product{
        protected $nome;
        protected $costo;
        protected $descrizione;

        public function __construct($nome, $costo, $descrizione){

            $this->nome = $nome;
            $this->costo = $costo;
            $this->descrizione = $descrizione;
        }
    }

    //classe meno generica che comprende solo le scarpe da calcio
    class ScarpaCalcio extends Product{
        use Misura;
        protected $numeroTacchetti;
        protected $colore;
        protected $marca;

        public function __construct($numeroTacchetti, $colore, $marca, $taglia, $nome, $costo, $descrizione){

            $this->taglia = $taglia;
            $this->numeroTacchetti = $numeroTacchetti;
            $this->colore = $colore;
            $this->marca = $marca;
            parent::__construct($nome, $costo, $descrizione);
        }
    }

    //classe meno generica che comprende solo le canotte da basket
    class CanottaBasket extends Product{
        use Misura;
        protected $colore;
        protected $marca;

        public function __construct($colore, $marca, $taglia, $nome, $costo, $descrizione){

            $this->taglia = $taglia;
            $this->colore = $colore;
            $this->marca = $marca;
            parent::__construct($nome, $costo, $descrizione);
        }
    }

    trait Misura{
        public $taglia;
    }


    //nuovo oggetto da inserire all'interno della classe Scarpe da Calcio
    $mercurial = new ScarpaCalcio(11, "giallo", "nike", "m", "mercurial", 270, "ciao sample description ciao");
    //nuovo oggetto da inserire all'interno della classe Canotte da basket
    $jordan = new CanottaBasket("rosso", "nike", "l", "canotta jordan", 100, "ciao seconda descrizione sample ciao" )
    
    

?>

<pre>
    <?php
        var_dump($mercurial, $jordan);
    ?>
</pre>