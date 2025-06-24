<?php
class Book{
    public $title;
    public $author;
    public $price;
    public function __construct($title,$author,$price)
    {
        $this->title=$title;
        $this->author=$author;
        $this->price=$price;

    }
    public function displayDetails(){
        echo "\nBooks Title".$this->title;
        echo "\nAuthor ".$this->author;
        echo "\nBooks Price".$this->price;
    }

}
$boo =new Book("Rich Dad Poor Dad","Robert","450");
$boo->displayDetails();
$bo =new Book("Wings of  fire","Apj","550");
$bo->displayDetails();

