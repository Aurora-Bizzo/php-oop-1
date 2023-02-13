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

    <div class="containder">
        <div class="row">
            <div class="col-12">
                <?php
                    $harryPotter_1 = new Movies('Harry Potter e la camera dei segreti', '2001', 'Fantasy');
                    $harryPotter_1 -> setImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3s6pfzpaoVk3sI9MT2lQf_JqZrLdi-AcmR6-uBQzgBZ5w1Gbd');

                    echo '<img src="'.$harryPotter_1->getImage().'">';
                    echo $harryPotter_1->getDescription();
                ?>
            </div>
        </div>
    </div>

    <script src="./js/script.js"></script>
</body>
</html>