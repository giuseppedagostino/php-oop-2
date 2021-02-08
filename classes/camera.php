<?php 

  require_once __DIR__ . "/item.php";

  class Camera extends Item {
    
    // proprietà
    public $type;
    private $megapixels;
    private $zoom;
    private $sensor_dimensions;

    // costruttore
    function __construct($name, $brand, $description, $price, $type, $megapixels, $zoom, $sensor_dimensions) {

      parent::__construct($name, $brand, $description, $price);

      $this->type = $type;
      $this->megapixels = $megapixels;
      $this->zoom = $zoom;
      $this->sensor_dimensions = $sensor_dimensions;

    }

    // metodi
    public function getMegapixels() {
      return $this->megapixels;
    }

    public function getZoom() {
      return $this->zoom;
    }
    
    public function getSensorDimensions() {
      return $this->sensor_dimensions;
    }

  }

?>