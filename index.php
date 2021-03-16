<?php

//Parent Class
class Product {

  public $department;

  public $quality;

  protected $price = 1; //euro


  public function __construct(string $department, string $quality) {
    $this->department = $department;
    $this->quality = $quality;
  }

  //getter
  public function getDepartment() {
    return $this->department;
  }

  public function getQuality() {
    return $this->quality;
  }



}
//End Parent Class

//Children Classes
class Pasta extends Product {

  public $typology;

  protected $price;

  public $quantity;

  public $totalPrice;

// setter
  public function setTypology($typology) {
    $this->typology = $typology;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public function setQuantity($quantity) {
    $this->quantity = $quantity;
  }

  //getter
  public function getTotalPrice(){
    if ($this->quantity > 1) {
      return $this->totalPrice = $this->price * $this->quantity;
    }
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

  public $creditCard;

  private $password;

  public $product;

  public function __construct(string $name, string $surname, string $email, float $phone, string $adress, string $password, Product $product) {
    $this->name = $name;
    $this->surname = $surname;
    $this->email = $email;
    $this->phone = $phone;
    $this->adress = $adress;
    // $this->creditCard = $creditCard;
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

    // setter
      public function setCreditCard($creditCard) {
        $this->creditCard = $creditCard;
    }

}

//Creazione oggetto/istanza di classe Pasta
// public function __construct(string $department, string $quality)
$firstPasta = new Pasta('food', 'fresco');
var_dump($firstPasta);
$firstPasta->setTypology('spaghetti');
$firstPasta->setPrice(1.5);
$firstPasta->setQuantity(2);
var_dump($firstPasta);

//Creazione oggetto/istanza di classe User
// public function __construct(string $name, string $surname, string $email, int $phone, string $adress, (removed:int $creditCard), string $password
$firstUser = new User('Andrea', 'De Candia', 'andrea.decandia@gmail.com', 3330078843, 'via Caronte 100 - 70022 Altamura', 'at568bcdudi', $firstPasta);
var_dump($firstUser);
$firstUser->setCreditCard(8822907688423333);

// echo 'CIAO';
echo 'Pagamento: ' . $firstPasta->getTotalPrice() . 'euro';
