<?php
require_once __DIR__ . "/Genre.php";

/**
 * ## Movie Class
 * Defines a movie class
 * @author Mirko Sorrentino
 */
class Movie {
    public $title;
    public $poster;
    public $duration;
    public $genres;

    /**
     * @param Array $_genres
     * @param String $_title
     * @param String $_poster
     * @param Int $_duration
     */
    function __construct(Array $_genres, $_title, $_poster, $_duration="120")
    {
        $this->genres = $_genres;
        $this->title = $_title;
        $this->duration = $_duration;
        $this->poster = $_poster;
    }

    public function get_movie_data() {
        return "Movie: {$this->title}, Duration: {$this->duration} min";
    }

    public function get_genres() {
        $genres_str = "";

        foreach ($this->genres as $key => $genre) {
            $genres_str .= $genre->name;
            if($key < (count($this->genres) - 1)) {
                $genres_str .= ", ";
            }
        };

        return $genres_str;
    }
}
?>