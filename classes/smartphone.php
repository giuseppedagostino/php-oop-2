<?php 

  require_once __DIR__ . "/item.php";

  class Smartphone extends Item {
    
    // proprietà
    public $processor;
    public $ram;
    public $battery_mAh;
    public $screen_inches;
    public $weight;

    // costruttore
    function __construct($name, $brand, $description, $price, $processor, $ram, $battery_mAh, $screen_inches, $weight) {

      parent::__construct($name, $brand, $description, $price);

      $this->processor = $processor;
      $this->ram = $ram;
      $this->battery_mAh = $battery_mAh;
      $this->screen_inches = $screen_inches;
      $this->weight = $weight;

    }

    // metodi
    public function getDiscount($perc) {
      return number_format($this->price - ($this->price / 100 * $perc) ,2);
    }
    // con public format arrotondo il numero alla seconda cifra decimale

  }

?>