<?php

namespace App\Entity;

class Book{
    private $title;
    private $description;
    private $author;
    private $publisher;
    private $category;
    private $stock_unit;
    private $publication_date;
    

    public function __construct($title,$description,$author,$publisher,$category,$stock_unit,$publication_date){
        $this->title = $title;
        $this->description = $description;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->category = $category;
        $this->stock_unit = $stock_unit;
        $this->publication_date = $publication_date;
    }

    

	function getTitle() { 
 		return $this->title; 
	} 

	function getDescription() { 
 		return $this->description; 
	} 

	function getAuthor() { 
 		return $this->author; 
	} 

	function getPublisher() { 
 		return $this->publisher; 
	} 

	function getCategory() { 
 		return $this->category; 
	} 

	function getPublicationDate() { 
 		return $this->publication_date; 
	} 

	function getStockUnit() { 
 		return $this->stock_unit; 
	} 
}