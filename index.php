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
  public function getId() {
    return $this->id;
  }

  public function getDepartment() {
    return $this->department;
  }



}
//End Parent Class

//Children Classes
class Food extends Product {

  public $typology;

// setter
  public function setTypology($typology) {
    $this->typology = $typology;
}
}




// class Hygiene extends Product {
//
// }
//
// class Stationery extends Product {
//
// }
//End Children Classes



class User {

  public $name;

  public $surname;

  public $email;

  public $phone;

  public $adress;

  private $creditCard;

  private $password;

  public $product;

  public function __construct(string $name, string $surname, string $email, float $phone, string $adress, float $creditCard, string $password, Product $product) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    $this->adress = $adress;
    $this->creditCard = $creditCard;
    $this->password = $password;
    $this->product = $product;
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

//Creazione oggetto/istanza di classe Food
// public function __construct(int $id, string $department)
$firstFood = new Food(32, 'food');
var_dump($firstFood);
$firstFood->setTypology('spaghetti');
var_dump($firstFood);





// public function __construct(string $name, string $surname, string $email, int $phone, string $adress, int $creditCard, string $password)

//Creazione oggetto/istanza di classe User

$firstUser = new User('Andrea', 'De Candia', 'andrea.decandia@gmail.com', 3330078843, 'via Caronte 100 - 70022 Altamura', 5622907688425761, 'at568bcdudi', $firstFood);
var_dump($firstUser);
// echo $firstUser->getPhone();

// echo 'CIAO';
