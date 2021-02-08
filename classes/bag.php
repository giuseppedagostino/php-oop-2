<?php 

  require_once __DIR__ . "/item.php";

  class Bag extends Item {
    
    // proprietà
    public $height;
    public $width;
    public $depth;
    public $litres;
    public $material;

    // costruttore
    function __construct($name, $brand, $description, $price, $height, $width, $depth, $litres, $material) {

      parent::__construct($name, $brand, $description, $price);

      $this->height = $height;
      $this->width = $width;
      $this->depth = $depth;
      $this->litres = $litres;
      $this->material = $material;

    }

  }

?>