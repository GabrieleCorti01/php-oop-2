<?php
    
    //inizio sezione shop

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

    //tratto in comune tra le due classi di prodotti
    trait Misura{
        public $taglia;
    }


    //nuovo oggetto da inserire all'interno della classe Scarpe da Calcio
    $mercurial = new ScarpaCalcio(11, "giallo", "nike", "m", "mercurial", 270, "ciao sample description ciao");
    //nuovo oggetto da inserire all'interno della classe Canotte da basket
    $jordan = new CanottaBasket("rosso", "nike", "l", "canotta jordan", 100, "ciao seconda descrizione sample ciao" );


    //inizio sezione utente

    //classe utente generica
    class Utente{
        protected $nome;
        protected $cognome;

        public function __construct($indirizzoDiSpedizione, $nome, $cognome){

            $this->indirizzoDiSpedizione = $indirizzoDiSpedizione;
            $this->nome = $nome;
            $this->cognome = $cognome;
        }
    }

    //classe più specifica per la carta di credito
    class CartaDiCredito extends Utente{
        protected $numeroCarta;
        protected $codiceIdentificativo;
        protected $scadenza;

        public function __construct($numeroCarta, $codiceIdentificativo, $scadenza, $indirizzoDiSpedizione, $nome, $cognome){

            $this->numeroCarta = $numeroCarta;
            $this->codiceIdentificativo = $codiceIdentificativo;
            $this->scadenza = $scadenza;
            parent:: __construct($indirizzoDiSpedizione, $nome, $cognome);
        }

        public function verificaNumero(){
            if(strlen($numeroCarta = 16)){
                return true;
            } else{
                return false;
            }
            
        }
    }

    //classe generica carrello
    class Carrello extends Utente{
        
        public function __construct($indirizzoDiSpedizione, $nome, $cognome){

            $this->indirizzoDiSpedizione = $indirizzoDiSpedizione;
            parent:: __construct($nome, $cognome);
        }
    }

    //tratto in comune tra utente e carta di credito
    trait IndirizzoSpedizione{
        public $indirizzoDiSpedizione;
    }

    //utente 
    $gabriele = new Utente("Via Rossini 7", "Gabriele", "Corti");

    //carta di credito
    $cartaGabriele = new CartaDiCredito (2222222222222222, 722, "22/01/2001", "Via Rossini 7", "Gabriele", "Corti" )

    
    

?>

<pre>
    <?php
        var_dump($mercurial, $jordan);

        var_dump($cartaGabriele);

        echo $cartaGabriele->verificaNumero();
    ?>
</pre>