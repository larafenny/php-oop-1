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

    // aggiungo attributi alle istanze
    $HarryPotterELaPietraFilosofale->title = 'Harry Potter e la pietra filosofale';
    $HarryPotterELaPietraFilosofale->country = 'Regno Unito';
    $HarryPotterELaPietraFilosofale->release_data = '2001';
    $HarryPotterELaPietraFilosofale->production = 'Warner Bros';
    $HarryPotterELaPietraFilosofale->running_time = '2h e 32m';

    $HarryPotterELaCameraDeiSegreti->title = 'Harry Potter e la camera dei segreti';
    $HarryPotterELaCameraDeiSegreti->country = 'Regno Unito';
    $HarryPotterELaCameraDeiSegreti->release_data = '2002';
    $HarryPotterELaCameraDeiSegreti->production = 'Warner Bros';
    $HarryPotterELaCameraDeiSegreti->running_time = '2h e 39m';

    $HarryPotterEIlPrigionieroDiAzkaban->title = 'Harry Potter e il prigioniero di Azkaban';
    $HarryPotterEIlPrigionieroDiAzkaban->country = 'Regno Unito';
    $HarryPotterEIlPrigionieroDiAzkaban->release_data = '2004';
    $HarryPotterEIlPrigionieroDiAzkaban->production = 'Warner Bros';
    $HarryPotterEIlPrigionieroDiAzkaban->running_time = '2h e 6m';

    $HarryPotterEIlCaliceDiFuoco->title = 'Harry Potter e il calice di fuoco';
    $HarryPotterEIlCaliceDiFuoco->country = 'Regno Unito';
    $HarryPotterEIlCaliceDiFuoco->release_data = '2005';
    $HarryPotterEIlCaliceDiFuoco->production = 'Warner Bros';
    $HarryPotterEIlCaliceDiFuoco->running_time = '2h e 37m';

    $HarryPotterELOrdineDellaFenice->title = 'Harry Potter e l\'ordine della Fenice';
    $HarryPotterELOrdineDellaFenice->country = 'Regno Unito';
    $HarryPotterELOrdineDellaFenice->release_data = '2007';
    $HarryPotterELOrdineDellaFenice->production = 'Warner Bros';
    $HarryPotterELOrdineDellaFenice->running_time = '2h e 22m';

    $HarryPotterEIlPrincipeMezzosangue->title = 'Harry Potter e il principe mezzosangue';
    $HarryPotterEIlPrincipeMezzosangue->country = 'Regno Unito';
    $HarryPotterEIlPrincipeMezzosangue->release_data = '2009';
    $HarryPotterEIlPrincipeMezzosangue->production = 'Warner Bros';
    $HarryPotterEIlPrincipeMezzosangue->running_time = '2h e 33m';

    $HarryPotterEIDoniDellaMorte->title = 'Harry Potter e i doni della morte';
    $HarryPotterEIDoniDellaMorte->country = 'Regno Unito';
    $HarryPotterEIDoniDellaMorte->release_data = '2010';
    $HarryPotterEIDoniDellaMorte->production = 'Warner Bros';
    $HarryPotterEIDoniDellaMorte->running_time = '2h e 26m';

    var_dump($HarryPotterELaPietraFilosofale);
    var_dump($HarryPotterELaCameraDeiSegreti);
    var_dump($HarryPotterEIlPrigionieroDiAzkaban);
    var_dump($HarryPotterEIlCaliceDiFuoco);
    var_dump($HarryPotterELOrdineDellaFenice);
    var_dump($HarryPotterEIlPrincipeMezzosangue);
    var_dump($HarryPotterEIDoniDellaMorte);

?>