<?php 

  require_once __DIR__ . "/item.php";

  class Camera extends Item {
    
    // proprietà
    public $type;
    private $megapixels;
    private $zoom;
    private $sensor_dimensions;

    // costruttore
    function __construct($name, $brand, $description, $price, $type, $megapixels, $zoom, $sensor_dimensions, $weight) {

      parent::__construct($name, $brand, $description, $price);

      $this->type = $type;
      $this->megapixels = $megapixels;
      $this->zoom = $zoom;
      $this->sensor_dimensions = $sensor_dimensions;

    }

    // metodi
    public function getSpecs() {
      return $this->megapixels . "<br>" . $this->zoom . "<br>" . $this->sensor_dimensions;
    }

  }

?>