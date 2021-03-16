<?php

//Parent Class
class Product {

  public $id;

  public $department;

  public function __construct($id, $department) {
    $this->id = $id;
    $this->department = $department;
  }

  //getter
  public function getName() {
    return this->id;
  }

  public function getSurname() {
    return this->department;
  }



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

  protected $password;

  public function __construct(string $name, string $surname, $email, int $phone, $adress, $creditCard, $password) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    $this->adress = $adress;
    $this->creditCard = $creditCard;
  }

  //getter
    public function getName() {
      return this->name;
    }

    public function getSurname() {
      return this->surname;
    }

    public function getEmail() {
      return this->email;
    }

    public function getPhone() {
      return this->phone;
    }

    public function getAdress() {
      return this->adress;
    }

    public function getCreditCard() {
      return this->creditCard;
    }

}
