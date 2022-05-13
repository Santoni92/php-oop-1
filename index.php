<?php
//definisco la classe
    class Movie{
        //attributi(variabili d'istanza)
        public $titolo ;
        public $regista;
        public $visualizzazioni = 0;
        public $commenti = [];
        public $numeroDiCommenti = 0;

        //costruttore
        function __construct($titolo,$regista)
        {
            $this->$titolo = $titolo;
            $this->$regista = $regista;             
        }

        //metodi
        public function incrementViews()
        {
            $this->visualizzazioni++;
        }

        public function addComment($comment)
        {
            $this->commenti = $comment;
            $this->numeroDiCommenti++;
        }
    }

    //istanzio un oggetto della classe
    $film = new Movie('via col vento','Victor Flaming');


    //echo('Il film ' . $film -> titolo .  'è stato visto ' . $film -> visualizzazioni .  ' volte'); 
    echo("Il film $film->titolo è stato visto  $film->visualizzazioni volte");
    echo('<br>');

    $film->incrementViews();
    echo("Il film $film->titolo è stato visto  $film->visualizzazioni volte");
?>