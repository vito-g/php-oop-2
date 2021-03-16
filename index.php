<?php

//Parent Class
class Product {

  public $id;

  public $department;

  public function __construct(int $id, string $department) {
    $this->id = $id;
    $this->department = $department;
  }

  //getter
  public function getName() {
    return $this->id;
  }

  public function getSurname() {
    return $this->department;
  }



}
//End Parent Class

//Children Classes
class Food extends Product {

}
// var_dump(Food);

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

  private $password;

  public function __construct(string $name, string $surname, string $email, int $phone, string $adress, int $creditCard, string $password) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    $this->adress = $adress;
    $this->creditCard = $creditCard;
    $this->password = $password;
  }

  //getter
    public function getName() {
      return $this->name;
    }

    public function getSurname() {
      return $this->surname;
    }

    public function getEmail() {
      return $this->email;
    }

    public function getPhone() {
      return $this->phone;
    }

    public function getAdress() {
      return $this->adress;
    }

    public function getCreditCard() {
      return $this->creditCard;
    }

}

// public function __construct(string $name, string $surname, string $email, int $phone, string $adress, int $creditCard, string $password)

//Creazione oggetto/istanza di classe User

$firstUser = new User('Andrea', 'De Candia', 'andrea.decandia@gmail.com', 3330078843, 'via Caronte 100 - 70022 Altamura', 5622907688425761, 'at568bcdudi');
var_dump($firstUser);

// echo 'CIAO';
