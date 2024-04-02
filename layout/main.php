<main>

    <div class="row justify-content-center py-5 gap-2">

        <?php
        foreach ($movies as $movie) {

            echo "
            <div class='card' style='width: 18rem;'>
        
                <div class='card-body'>
                    <h5 class='card-title'>$movie->title</h5>

                    <p class='card-text'>" . $movie->director->getFullName() . "</p>
                    <p class='card-text'> $movie->language</p>
                    <p class='card-text'> " . $movie->getGenresFilm() . "</p>

                    <p class='card-text'>" . $movie->getMovieLength() . "</p>
                </div>
            </div>

            
            ";
        }
        ?>

    </div>


</main>