<?php
//definisco la classe
    class Movie{
        //attributi(variabili d'istanza)
        public $titolo ;
        public $regista;
        //public $paeseDiProduzione;
        public $visualizzazioni = 0;

        //costruttore
        function __construct($titolo,$regista)
        {
            $this -> $titolo = $titolo;
            $this -> $regista = $regista;             
        }

        //metodi
        public function incrementViews()
        {
            $this -> $visualizzazioni++;
        }
    }

    //istanzio un oggetto della classe
    $film = new Movie('via col vento','Victor Flaming');


    echo('Il film ' . $film -> titolo .  'è stato visto ' . $film -> visualizzazioni .  ' volte');   
?>