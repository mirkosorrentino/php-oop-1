<?php
/**
 * Class Genre
 * Defines a genre class
 * @author Mirko Sorrentino
 */
class Genre {
    public $name;

    /**
     * @param string $_name
     */
    function __construct($_name){
        $this->name = $_name;
    }
}
?>