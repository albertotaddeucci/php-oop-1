<?php

class Movie
{

    public $title;
    public $releaseDate;
    public $director;
    public $language;
    public $runningTime;
    public $budget;

    function __construct($_title, $_director, $_runningTime)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->runningTime = $_runningTime;
    }
}
