<?php

    class Movies {

        //Movie Description 

            public $title;
            public $year;
            public $genre;

            public function __construct($title, $year, $genre)
            {
                $this->title = $title;
                $this->year = $year;
                $this->genre = $genre;
            }

            public function getDescription()
            {
                return $this->title." - ".$this->year." - ".$this->genre;
            }

        //

        //Movie image

            public $image;

            public function setImage($image)
            {
                $this->image = $image;
            }

            public function getImage()
            {
                return $this->image;
            }

        //

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row">

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_1 = new Movies('Harry Potter e la pietra filosofale', '2001', 'Fantasy');
                    $harryPotter_1 -> setImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3s6pfzpaoVk3sI9MT2lQf_JqZrLdi-AcmR6-uBQzgBZ5w1Gbd');

                    echo '<img class="img w-100" src="'.$harryPotter_1->getImage().'">';
                    echo $harryPotter_1->getDescription();
                ?>
            </div>

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_2 = new Movies('Harry Potter e la camera dei segreti', '2002', 'Fantasy');
                    $harryPotter_2 -> setImage('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS89EyAC-sy1SddiCkTT65slUCStYueMEtFnzjyKK1i8-d3tumI');

                    echo '<img class="img w-100" src="'.$harryPotter_2->getImage().'">';
                    echo $harryPotter_2->getDescription();
                ?>
            </div>

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_3 = new Movies('Harry Potter e il prigioniero di Azkaban', '2004', 'Fantasy');
                    $harryPotter_3 -> setImage('https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51M-B+pzWBL.jpg');
                    echo '<img class="img w-100" src="'.$harryPotter_3->getImage().'">';
                    echo $harryPotter_3->getDescription();
                ?>
            </div>

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_4 = new Movies('Harry Potter e il calice di fuoco', '2005', 'Fantasy');
                    $harryPotter_4 -> setImage('https://pad.mymovies.it/filmclub/2005/06/034/locandina.jpg');
                    echo '<img class="img w-100" src="'.$harryPotter_4->getImage().'">';
                    echo $harryPotter_4->getDescription();
                ?>
            </div>

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_5 = new Movies('Harry Potter e l\'Ordine della Fenice', '2007', 'Fantasy');
                    $harryPotter_5 -> setImage('https://www.warnerbros.it/sites/default/files/HP5_MOVIE_V_DD_KA_TT_1400x2100_300dpi_IT.jpg');

                    echo '<img class="img w-100" src="'.$harryPotter_5->getImage().'">';
                    echo $harryPotter_5 -> getDescription();
                ?>
            </div>

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_6 = new Movies('Harry Potter e il principe mezzosangue', '2009', 'Fantasy');
                    $harryPotter_6 -> setImage('https://i.ebayimg.com/images/g/~YoAAOSwHUdihJJz/s-l500.jpg');

                    echo '<img class="img w-100" src="'.$harryPotter_6->getImage().'">';
                    echo $harryPotter_6->getDescription();
                ?>
            </div>

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_7 = new Movies('Harry Potter e i doni della morte: Parte 1', '2010', 'Fantasy');
                    $harryPotter_7 -> setImage('https://aforismi.meglio.it/img/film/Harry_Potter_e_i_Doni_della_Morte_-_Parte_1.jpg');

                    echo '<img class="img w-100" src="'.$harryPotter_7->getImage().'">';
                    echo $harryPotter_7->getDescription();
                ?>
            </div>

            <div class="col-md-4 p-5">
                <?php
                    $harryPotter_8 = new Movies('Harry Potter e i Doni della Morte - Parte 2', '2011', 'Fantasy');
                    $harryPotter_8 -> setImage('https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T2/images/I/51RWnUmv+ZL.jpg');

                    echo '<img class="img w-100" src="'.$harryPotter_8->getImage().'">';
                    echo $harryPotter_8->getDescription();
                ?>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>