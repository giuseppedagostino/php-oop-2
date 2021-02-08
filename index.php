<!-- <?php  ?> -->

<?php 
  include_once __DIR__ . "/classes/item.php";
  include_once __DIR__ . "/classes/camera.php";
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <title>php-oop-2</title>
</head>

<?php
  
  // primo elemento
  $item_1 = new Item (
    "P9 Lite",
    "Huawei",
    "Huawei P9 Lite è un smartphone Android completo, che non ha molto da invidare ai dispositivi più avanzati. Dispone di un enorme display Touchscreen da 5.2 pollici con una risoluzione di 1920x1080 pixel. Sul versante delle funzionalità a questo Huawei P9 Lite non manca davvero nulla. A cominciare dal modulo LTE 4G che permette un trasferimento dati e una navigazione in internet eccellente, passando per la connettività Wi-fi e il GPS.",
    "€ 139,99",
  );

  // primo elemento
  $camera_1 = new Camera (
    "D5300",
    "Nikon",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, totam iusto? Quia consequatur optio repellat explicabo aut iusto eos nobis consectetur perspiciatis delectus eum, voluptates nisi error hic! Cumque, dolore.",
    "€ 899",
    "Reflex",
    "69",
    "45x",
    "50mm",
  );

?> 

<body>
  <h1>php-oop-2</h1>

  <div class="card_container">

    <div class="card">
      <h2><?php echo $item_1->name . " - " . $item_1->brand ?></h2>
      <p><?php echo $item_1->description; ?></p>
      <span id="prezzo"><?php echo $item_1->price; ?></span>
    </div>

    <div class="card">
    <h2><?php echo $camera_1->name . " - " . $camera_1->brand ?></h2>
      <p><?php echo $camera_1->description; ?></p>
      <span id="prezzo"><?php echo $camera_1->price; ?></span>
      <p><?php echo $camera_1->type; ?></p>
      <p><?php echo $camera_1->getSpecs(); ?></p>
    </div>

    <div class="card">
      <h2><?php echo $item_1->name . " - " . $item_1->brand ?></h2>
      <p><?php echo $item_1->description; ?></p>
      <span id="prezzo"><?php echo $item_1->price; ?></span>
    </div>

    <div class="card">
      <h2><?php echo $item_1->name . " - " . $item_1->brand ?></h2>
      <p><?php echo $item_1->description; ?></p>
      <span id="prezzo"><?php echo $item_1->price; ?></span>
    </div>

  </div>

</body>
</html>