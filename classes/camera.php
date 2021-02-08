<?php 

  require_once __DIR__ . "/item.php";

  class Camera extends Item {
    
    // proprietà
    public $type;
    public $megapixels;
    public $zoom;
    public $sensor_dimensions;

    // costruttore
    function __construct($name, $brand, $description, $price, $type, $megapixels, $zoom, $sensor_dimensions, $weight) {

      parent::__construct($name, $brand, $description, $price);

      $this->type = $type;
      $this->megapixels = $megapixels;
      $this->zoom = $zoom;
      $this->sensor_dimensions = $sensor_dimensions;

    }

  }

?>