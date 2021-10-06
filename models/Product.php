<?php


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
class Product
{
    //// Traits
    use Discount;
    //// Properties
    protected $id;
    protected $name;
    protected $type;
    //// Construct
    public function __construct($_id, $_name, $_type, $_price)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->type = $_type;
        $this->price = $_price;
    }
}

$product_1 = new Product(1, "Vaso", "Giardinaggio", 25);
$product_1->getDiscount($product_1->price);
var_dump($product_1->getDiscount($product_1->price));
var_dump($product_1);

class Card
{

    //// Properties
    protected $number;
    protected $name;
    //// Construct
    public function __construct($_name, $_number)
    {
        $this->name = $_name;
        $this->number = $_number;
    }
    public function getCard()
    {
        return "Intestazione" . $this->name . "n." . $this->number;
    }
}

class User
{

    //// Properties
    protected $name;
    protected $card;

    //// Construct
    public function __construct($_name)
    {
        $this->name = $_name;
    }
    public function addedCard($_card)
    {
        $this->card = $_card;
    }
}

$user_1 = new User("davide");
var_dump($user_1);
$card_1 = new Card("davide", "234566");

$user_1->addedCard($card_1);
var_dump($user_1);
