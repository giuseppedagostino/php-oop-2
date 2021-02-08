<?php 

  class Item {

    // proprietà
    public $name;
    public $brand;
    public $description;
    public $price;
    
    // costruttore
    function __construct($name, $brand, $description, $price) {
      $this->name = $name;
      $this->brand = $brand;
      $this->description = $description;
      $this->price = $price;
    }

  }

?>