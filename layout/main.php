<main>

    <div class="row justify-content-center py-5 gap-3">

        <?php
        foreach ($movies as $movie) {

            echo "
            <div class='card m-0 p-0 my_shadow' style='width: 15rem;'>
                <img src=' $movie->poster' class='object-fit-cover rounded-top-1 ' style='height: 25rem;' >
                <div class='card-body text-center my_sec_color rounded-2'>
                    <h5 class='card-title'>$movie->title</h5>
                    
                    <hr>
            
                    <h6 class='card-text'>" . $movie->director->getFullName() . "</h6>
                    <p class='card-text m-0'> $movie->language</p>
                    <p class='card-text m-0 '> " . $movie->getGenresFilm() . "</p>

                    <p class='card-text text-end pt-4 my_small_text '>" . $movie->getMovieLength() . "</p>
                </div>
            </div>

            
            ";
        }
        ?>

    </div>


</main>