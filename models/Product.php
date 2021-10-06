<?php

//? (Educational test of the use of 'trait')
trait Discount
{
    public $discount;

    private function setDiscount($_price)
    {
        $this->discount = $_price > 50 ? 20 : 10;
    }
    public function getDiscount($_price)
    {
        $this->setDiscount($_price);
        return "Lo sconto applicato è del $this->discount %";
    }
}

//// Creation of the product class
class Product
{
    //// Properties
    protected $id;
    protected $category;
    //// Construct
    public function __construct($_id, $_category)
    {
        $this->id = $_id;
        $this->category = $_category;
    }
    //// Methods that return product class data
    public function getCategory()
    {
        return $this->category;
    }
}

//// Creation of a computer class
class Book extends Product
{
    //// Traits
    use Discount;
    //// Properties
    private $name;
    private $author;
    private $genre;
    //// Construct
    public function __construct($_name, $_author, $_genre, $_price, $_id, $_category)
    {
        $this->name = $_name;
        $this->author = $_author;
        $this->genre = $_genre;
        $this->price = $_price;
        parent::__construct($_id, $_category);
    }
    //// Methods that return book class data
    public function getName()
    {
        return $this->name;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function getGenre()
    {
        return $this->genre;
    }
}

//* Creation of a product instance
$product_1 = new Product(1, "Books");
//* Creation of a book instance
$book_1 = new Book("Finché il caffè è caldo", "Toshikazu Kawaguchi", "Fantasy", 15, 2, "Libri");
//* Check the discount to apply
$book_1->getDiscount($book_1->price);
