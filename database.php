<?php

$movies = [

    $movie1 = new Movie("The House That Jack Built", new Director("Lars", "von Trier", "Danmark"), 155, ["Horror", "Thriller"]),
    $movie2 = new Movie("The Boy and the Heron", new Director("Hayao", "Miyazaki", "Japan"), 124, ["Animation"]),
    $movie3 = new Movie("Perfect Days", new Director("Wim", "Wenders", "Germany"), 125, ["Drama"])


];

$movie1->poster = "https://m.media-amazon.com/images/M/MV5BNDQ4Y2E5ODktODI5ZS00ZGVkLTgyZTEtNWY1ZjNiZTFjOTE3XkEyXkFqcGdeQXVyODY3Nzc0OTk@._V1_.jpg";
$movie1->language = "English";

$movie2->poster = "https://m.media-amazon.com/images/M/MV5BZjZkNThjNTMtOGU0Ni00ZDliLThmNGUtZmMxNWQ3YzAxZTQ1XkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_FMjpg_UX1000_.jpg";
$movie2->language = "Japanese";

$movie3->poster = "https://www.dillingernews.it/wp-content/uploads/2024/02/MV5BYjI2Njc4MGQtYzYwNC00MDQ1LTkyMzQtODY0NDk4NzZjNGMyXkEyXkFqcGdeQXVyMTM1NjM2ODg1._V1_FMjpg_UX1000_.jpg";
