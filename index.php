<?php
require_once __DIR__ . "/Database/db.php";

foreach ($movies as $movie) {
    echo "<p>";
    echo $movie->get_genres();
    echo "</p>";
    echo $movie->get_movie_data();
    echo "<br>";
}
?>