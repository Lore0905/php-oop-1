<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<!-- ---------------------------------------------------------------------------- -->

<!-- creo la classe Movie nella quale creo le seguenti variabili d'istanza:
    - public $Title
    - public $Year
    - public $Protagonist
    - public $star 

    creo una funzione construct che viene invocata alla creazione dell'istanza/oggetto.
    Come argomenti passo il titolo e l'anno di pubblicazione

    creo un metodo che ha la funzione di scrivere a schermo le seguenti valutazione del film in base alle stelle asseggnate per ognuno di essi:
    1 - 4 stelle -> il film non è piaciuto alla maggior parte di persone 
    5 stelle -> il film è piaciuto alla metà delle persone 
    6 - 10 stelle -> il film è piaciuto alla maggior parte delle persone-->
<?php
    class Movie {
        public $title;
        public $year;
        public $protagonist = "purtroppo, non è disponibile";
        public $star;
        public function __construct($_title, $_year){
            $this->title = $_title;
            $this->year = $_year;
        }
    }
    
    $Joker = new Movie('Joker', 2019);
    $Joker->protagonist = 'Joaquin Phoenix';
    $Joker->star = '10';
    var_dump($Joker)
?>