<?php
class LibItem
{
    public $title;
    public $author;
    public $publicationYear;
    public function __construct($title, $author, $publicationYear)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
    }
    public function getTitle($title)
    {
        return $this->title;
    }
    public function getAuthor($author)
    {
        return $this->author;
    }
    public function getPublicationYear($publicationYear)
    {
        return $this->publicationYear;
    }
}

class Book extends LibItem {
    public $ISBN;
    public function __construct($title, $author, $publicationYear, $ISBN) {
        parent::__construct($title, $author, $publicationYear);
        $this->ISBN = $ISBN;
    }
    public function getISBN($ISBN) {
        return $this->ISBN;
    }
    public function displayBookInfo() {
        echo "Title: ". $this->title. "<br>";
        echo "Author: ". $this->author. "<br>";
        echo "Publication Year: ". $this->publicationYear. "<br>";
        echo "ISBN: ". $this->ISBN. "<br>";
    }
}

class DVD extends LibItem {
    public $director;
    public function __construct($title, $author, $publicationYear, $director) {
        parent::__construct($title, $author, $publicationYear);
        $this->director = $director;
    }
    public function getDirector($director) {
        return $this->director;
    }
    public function displayDVDInfo() {
        echo "Title: ". $this->title. "<br>";
        echo "Author: ". $this->author. "<br>";
        echo "Publication Year: ". $this->publicationYear. "<br>";
        echo "Director: ". $this->director. "<br>";
    }
}

$book = new Book("Don Quixote", "Miguel de Cervantes", 1605, "Epic novel");
$dvd = new DVD("The Land Before Time", "Charles Grosvenor", 2010, 150);

$book->displayBookInfo();
$dvd->displayDVDInfo();