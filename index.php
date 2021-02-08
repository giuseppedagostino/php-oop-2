<!-- <?php  ?> -->

<?php 
  include_once __DIR__ . "/classes/item.php";
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
  $item_1 = new Item (
    "P9 Lite",
    "Huawei",
    "Huawei P9 Lite è un smartphone Android completo, che non ha molto da invidare ai dispositivi più avanzati. Dispone di un enorme display Touchscreen da 5.2 pollici con una risoluzione di 1920x1080 pixel. Sul versante delle funzionalità a questo Huawei P9 Lite non manca davvero nulla. A cominciare dal modulo LTE 4G che permette un trasferimento dati e una navigazione in internet eccellente, passando per la connettività Wi-fi e il GPS.",
    "€ 139,99",
  )
?> 

<body>
  <h1>php-oop-2</h1>
  <p><?php echo $item_1->name; ?></p>
  <p><?php echo $item_1->brand; ?></p>
  <p><?php echo $item_1->description; ?></p>
  <p><?php echo $item_1->price; ?></p>
</body>
</html>