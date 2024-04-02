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
     * @param  string $_director
     * @param  array $_genres
     * @param  int $_runningTime
     */
    function __construct($_title, $_director, $_runningTime, array $_genres)
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

// $genres = [
//     $genre1 = new Genre("Horror"),
//     $genre2 = new Genre("Thriller"),
//     $genre3 = new Genre("Animation"),
//     $genre4 = new Genre("Drama"),
// ];
