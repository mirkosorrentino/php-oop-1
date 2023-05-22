<?php
require_once __DIR__ . "/../Models/Genre.php";
require_once __DIR__ . "/../Models/Movie.php";

$genres = [
    new Genre("Action"),
    new Genre("Fantasy")
];

$movies = [
    $WolfOfWallStreet = new Movie($genres, "The Wolf of Wall Street", "/images/wolf.jpg"),
    $Avatar = new Movie ($genres, "Avatar", "/images/Avatar.jpg"),
    $WolfOfWallStreet = new Movie($genres, "The Wolf of Wall Street", "/images/wolf.jpg"),
    $Avatar = new Movie ($genres, "Avatar", "/images/Avatar.jpg"),
    $WolfOfWallStreet = new Movie($genres, "The Wolf of Wall Street", "/images/wolf.jpg"),
    $Avatar = new Movie ($genres, "Avatar", "/images/Avatar.jpg")
];
?>