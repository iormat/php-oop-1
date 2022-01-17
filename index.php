<?php
    /** GOAL
     * 
        * DEFINIRE CLASSE Film:
        *      Attributi:
        *      - titolo
        *      - sottotiolo
        *      - regista
        * 
        *      Metodi:
        *      - costruttore che accetta titolo
        *      - getFullTitle: 
        *          Se sottotitolo presente:
        *            restituisce "titolo: sottotitolo" 
        *          Se sottotiolo assente:
        *            restituisce "titolo" 
        *      - __toString: 
        *          Se regista presente:
        *            restituisce "fullTitle | regista"
        *          Se regista assente:
        *            restituisce "fullTitle | ???"
        * 
        * UTILIZZO OGGETTI Film:
        * 
        *      Generare 3 istanze della classe Film:
        *      - uno con solo il titolo
        *      - uno con titolo e sottotitolo
        *      - uno con titolo, sottotiolo e regista
        * 
        *      Stampare tutti gli oggetti tramite toString (implicito)
        * 
        *  RISULTATO ATTESO:
        * 
        *      Matrix | ???
        *      Fantozzi 2: il ritorno di fantozzi | ???
        *      Peter Pan: il ritorno all'isola che non c'e' | Robin Budd
    */

    // CODE
    class Film {
        public $title;
        public $subtitle;
        public $director;

        // construct
        public function __construct($title) {
            $this -> title = $title;
        }

        // get film fullTitle
        public function getFullTitle($err) {
            if($this -> subtitle) {
                return $this -> title . ": " . $this -> subtitle;
            }else {
                return $this -> title . $err; 
            }
        }

        // get film director and fullTitle
        public function getDirector($err, $divider) {
            if($this -> director) {
                return $this -> getFullTitle(" | ???", "<br>") . " | " . $this -> director;
            }else {
                return $this -> getFullTitle(" | ???", "<br>") . $err . $divider;
            }
        }

        // toString results
        public function __toString() {
            return $this -> getDirector(" | ???", "<br>");
        }
    }

    // instances
    $f1 = new Film("Matrix");

    $f2 = new Film("Fantozzi 2");
    $f2 -> subtitle = "il ritorno di fantozzi";

    $f3 = new Film ("Peter Pan");
    $f3 -> subtitle = "il ritorno all'isola che non c'e'";
    $f3 -> director = "Robin Budd";

    // echo results
    echo $f1;
    echo $f2;
    echo $f3;
?>