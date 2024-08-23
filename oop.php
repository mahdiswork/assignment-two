<?php

class Book {
 private $title,$availableCopies;

 public function __construct($title, int $availableCopies) {
    $this->title = $title;
    $this->availableCopies = $availableCopies;
 }

 public function getTitle() {
     return $this->title;
 }

 public function getAvailableCopies() {
     return $this->availableCopies;
 }

 public function borrowBook() {
     if ($this->availableCopies < 0) {
         $this->availableCopies = 0;
     } else {
         $this->availableCopies = $this->availableCopies - 1;
     }
}

public function returnBook(){
    $this->availableCopies = $this->availableCopies + 1;
}

}

class Member {
private $name;

 public function __construct($name) {
    $this->name = $name;
 }

 public function getName(){
    return $this->name;
 }

 public function borrowBook(Book $book){
    $book->borrowBook();
 }

 public function returnBook(Book $book){
    $book->returnBook();
 }

}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

$member1 = new Member("John Doe");
$member1->borrowBook($book1);

$member2 = new Member("Jane Smith");
$member2->borrowBook($book2);

echo "Available Copies of '".$book1->getTitle()."': ". $book1->getAvailableCopies() . PHP_EOL;
echo "Available Copies of '".$book2->getTitle()."': ". $book2->getAvailableCopies() . PHP_EOL;
 
?>
