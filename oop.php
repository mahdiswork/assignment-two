<?php

class Book {

 // TODO: Add properties as Private

 private $title,$availableCopies;

 

 public function __construct($title, int $availableCopies) {

     // TODO: Initialize properties
     $this->title = $title;
     $this->availableCopies = $availableCopies;

     }

// TODO: Add getTitle method

 public function getTitle() {
     return $this->title;
 }

 // TODO: Add getAvailableCopies method

 public function getAvailableCopies() {
     return $this->availableCopies;
 }


 // TODO: Add borrowBook method

 public function borrowBook() {

     if ($this->availableCopies < 0) {

         $this->availableCopies = 0;

     } else {

         $this->availableCopies = $this->availableCopies - 1;

     }

}


 // TODO: Add returnBook method
public function returnBook(){
    $this->availableCopies = $this->availableCopies + 1;
}
 

}


class Member {

 // TODO: Add properties as Private
private $name;

 public function __construct($name) {

      $this->name = $name;

     }


 // TODO: Add getName method
 public function getName(){
    return $this->name;
 }

 

 // TODO: Add borrowBook method

  public function borrowBook(Book $book){
    $book->borrowBook();
  }


 // TODO: Add returnBook method

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