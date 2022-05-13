<?php
//definisco la classe
    class Movie{
        //attributi(variabili d'istanza)
        public $titolo ;
        public $regista;
        public $visualizzazioni = 0;
        public $commenti = [];

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
            $this->commenti[] = $comment;
        }

        public function visualizzaCommenti()
        {
            if(count( $this->commenti) == 0)
            {
                echo('Non vi sono commenti al film');
            }
            else{
                foreach($this->commenti as $commento)
                {
                    echo("Commento al film: $commento <br>");
                }
            }
        }
    }

    //istanzio un oggetto della classe
    $film = new Movie('via col vento','Victor Flaming');


    //echo('Il film ' . $film -> titolo .  'è stato visto ' . $film -> visualizzazioni .  ' volte'); 
    echo("Il film $film->titolo è stato visto  $film->visualizzazioni volte");
    echo('<br>');

    $film->incrementViews();
    echo("Il film $film->titolo è stato visto  $film->visualizzazioni volte");
    echo('<br>');

    $film->addComment('un capolavoro');
    $film->visualizzaCommenti();
    echo('<br>');
    $film->addComment('imperdibile');
    $film->visualizzaCommenti();
?>