<?php

//Parent Class
class Product {

  public $id;

}
//End Parent Class

//Children Classes
class Food extends Product {

}

class Hygiene extends Product {

}

class Stationery extends Product {

}
//End Children Classes



class User {

  public $name;

  public $surname;

  public $email;

  public $phone;

  public $adress;

  private $creditCard;

  public function __construct(string $name, string $surname, $email, int $phone, $adress, $creditCard) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    $this->adress = $adress;
    $this->creditCard = $creditCard;
  }

}
