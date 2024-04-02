<?php


class Movie
{

    public $title;
    public $director;
    public $genres;
    public $language;
    public $runningTime;


    /**
     * __construct
     *
     * @param  string $_title
     * @param  mixed $_director
     * @param  array $_genres
     * @param  int $_runningTime
     */
    function __construct($_title, Director $_director, $_runningTime, array $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->runningTime = $_runningTime;
        $this->genres = $_genres;
    }


    public function getMovieLength()
    {
        $hours = floor($this->runningTime / 60);
        $minutes = $this->runningTime % 60;
        return "$hours ore e $minutes minuti";
    }

    public function getGenresFilm()
    {
        $allGenres = "";
        foreach ($this->genres as $genre) {
            $allGenres .= "$genre ";
        }
        return $allGenres;
    }
}


// class Genre
// {
//     public $name;

//     /**
//      * __construct
//      *
//      * @param  string $_name

//      */
//     function __construct($_name)
//     {
//         $this->name = $_name;
//     }
// }
