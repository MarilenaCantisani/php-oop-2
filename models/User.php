<?php

//// Creation of a user class
class User
{
    //// Properties
    protected $name;
    protected $lastname;
    protected $email;
    protected $number;
    protected $card;

    //// Construct
    public function __construct($_name, $_lastname, $_email, $_number)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->number = $_number;
    }
    public function addedCard($_card)
    {
        $this->card = $_card;
    }
    //// Methods that return user class data
    public function getFullName()
    {
        return  $this->name . " " . $this->lastname;
    }
    public function getEmail()
    {
        return  $this->email;
    }
    public function getNumber()
    {
        return  $this->number;
    }
}

//// Creation of a card class
class Card
{

    //// Properties
    protected $cardholder;
    protected $number;
    //// Construct
    public function __construct($_cardholder, $_number)
    {
        $this->cardholder = $_cardholder;
        $this->number = $_number;
    }
    public function getCard()
    {
        return "Proprietario" . $this->name . "n." . $this->number;
    }
}

//* Creation of a user instance
$user_1 = new User("Mario", "Rossi", "mariorossi@gmail.com", "3295847398");

//* Creation of a card instance
$card_1 = new Card("Mario Rossi", "3005006000700");

//* Add the card to the user
$user_1->addedCard($card_1);
