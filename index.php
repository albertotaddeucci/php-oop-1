<?php

class Movie
{

    public $title;
    public $director;
    public $language;
    public $runningTime;

    /**
     * __construct
     *
     * @param  string $_title
     * @param  string $_director
     * @param  int $_runningTime
     
     */
    function __construct($_title, $_director, $_runningTime)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->runningTime = $_runningTime;
    }


    public function getMovieLength()
    {
        $hours = floor($this->runningTime / 60);
        $minutes = $this->runningTime % 60;
        return "$hours ore e $minutes minuti";
    }
}




$movies = [

    $movie1 = new Movie("The House That Jack Built", "Lars von Trier", 155),
    $movie2 = new Movie("The Boy and the Heron", "Hayao Miyazaki", 124),
    new Movie("Perfect Days", "Wim Wenders", 125)



];

$movie1->language = "English";
$movie2->language = "Japanese";





?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>

    <!-- ------------------------------ Bootstrap ------------------------------ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


</head>

<body>
    <h1>film</h1>

    <ul>
        <?php
        foreach ($movies as $movie) {

            echo "
            <li>
                " . $movie->title . ", " . $movie->director . ", " . $movie->language . "<br>
                " . $movie->getMovieLength() . "
            </li>";
        }
        ?>
    </ul>



    <!-- ------------------------------ Bootstrap ------------------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>

</html>