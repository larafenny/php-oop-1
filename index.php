<?php
    /*
    create un file index.php in cui:
    - è definita una classe ‘Movie’
    => all'interno della classe sono dichiarate delle variabili d'istanza
    => all'interno della classe è definito un costruttore
    => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

    */

    //phpinfo();

    // definisco class Movie e suoi attributi
    class Movie{
        public $title;
        public $country;
        public $release_date;
        public $production;
        public $running_time;
    }

    // creo qualche istanza
    $HarryPotterELaPietraFilosofale = new Movie();
    $HarryPotterELaCameraDeiSegreti = new Movie();
    $HarryPotterEIlPrigionieroDiAzkaban = new Movie();
    $HarryPotterEIlCaliceDiFuoco = new Movie();
    $HarryPotterELOrdineDellaFenice = new Movie();
    $HarryPotterEIlPrincipeMezzosangue = new Movie();
    $HarryPotterEIDoniDellaMorte = new Movie();
    

?>