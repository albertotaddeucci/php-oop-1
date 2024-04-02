<?php

$movies = [

    $movie1 = new Movie("The House That Jack Built", new Director("Lars", "von Trier", "Danmark"), 155, ["Horror", "Thriller"]),
    $movie2 = new Movie("The Boy and the Heron", new Director("Hayao", "Miyazaki", "Japan"), 124, ["Animation"]),
    new Movie("Perfect Days", new Director("Wim", "Wenders", "Germany"), 125, ["Drama"])


];

$movie1->language = "English";
$movie2->language = "Japanese";
