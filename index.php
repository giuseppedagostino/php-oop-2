<?php 
  include_once __DIR__ . "/classes/item.php";
  include_once __DIR__ . "/classes/smartphone.php";
  include_once __DIR__ . "/classes/camera.php";
  include_once __DIR__ . "/classes/bag.php";
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
  $smartphone_1 = new Smartphone (
    "P9 Lite",
    "Huawei",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, totam iusto? Quia consequatur optio repellat explicabo aut iusto eos nobis consectetur perspiciatis delectus eum, voluptates nisi error hic! Cumque, dolore.",
    "€ 219,99",
    "Kirin 970", // processore
    "3 Gb", // ram
    "3100 mAh", // batteria
    "5,2 pollici", // pollici
    "175 gr" // peso
  );

  // secondo elemento
  $camera_1 = new Camera (
    "D5300",
    "Nikon",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, totam iusto? Quia consequatur optio repellat explicabo aut iusto eos nobis consectetur perspiciatis delectus eum, voluptates nisi error hic! Cumque, dolore.",
    "€ 490,00",
    "Reflex", // tipologia
    "69 Mpx", // megapixels
    "22x", // zoom
    "45 mm" // dimensione obiettivo
  );

  // terzo elemento
  $bag_1 = new Bag (
    "Tugo L",
    "Tucano",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, totam iusto? Quia consequatur optio repellat explicabo aut iusto eos nobis consectetur perspiciatis delectus eum, voluptates nisi error hic! Cumque, dolore.",
    "€ 69,90",
    "55 cm", // altezza
    "35 cm", // larghezza
    "20 cm", // profondità
    "39 litri", // capacità
    "Tessuto tecnico idrorepellente" // materiale
  );

  // quarto elemento
  $bag_2 = new Bag (
    "Work Out 3",
    "Tucano",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, totam iusto? Quia consequatur optio repellat explicabo aut iusto eos nobis consectetur perspiciatis delectus eum, voluptates nisi error hic! Cumque, dolore.",
    "€ 79,90",
    "43 cm", // altezza
    "30 cm", // larghezza
    "14 cm", // profondità
    "20 litri", // capacità
    "Tessuto tecnico idrorepellente" // materiale
  );

  // quinto elemento
  $smartphone_2 = new Smartphone (
    "Galaxy S21",
    "Samsung",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, totam iusto? Quia consequatur optio repellat explicabo aut iusto eos nobis consectetur perspiciatis delectus eum, voluptates nisi error hic! Cumque, dolore.",
    "€ 879,00",
    "Cortex-A78", // processore
    "8 Gb", // ram
    "4000 mAh", // batteria
    "6,2 pollici", // pollici
    "169 gr" // peso
  );

?> 

<body>
  <h1>php-oop-2</h1>

  <div class="card_container">

  <?php  ?> 

    <!-- primo telefono -->
    <div class="card">
      <h2><?php echo $smartphone_1->name . " - " . $smartphone_1->brand ?></h2>
      <p><?php echo $smartphone_1->description; ?></p>
      <p><strong>Processore: </strong><?php echo $smartphone_1->processor ?></p>
      <p><strong>Ram: </strong><?php echo $smartphone_1->ram ?></p>
      <p><strong>Batteria: </strong><?php echo $smartphone_1->battery_mAh ?></p>
      <p><strong>Schermo: </strong><?php echo $smartphone_1->screen_inches ?></p>
      <p><strong>Peso: </strong><?php echo $smartphone_1->weight ?></p>
      <span id="prezzo"><?php echo $smartphone_1->price; ?></span>
    </div>

    <!-- prima fotocamera -->
    <div class="card">
    <h2><?php echo $camera_1->name . " - " . $camera_1->brand ?></h2>
      <p><?php echo $camera_1->description; ?></p>
      <span id="prezzo"><?php echo $camera_1->price; ?></span>
      <p><strong>Tipo: </strong><?php echo $camera_1->type; ?></p>
      <p><strong>Risoluzione: </strong><?php echo $camera_1->getMegapixels(); ?></p>
      <p><strong>Zoom: </strong><?php echo $camera_1->getZoom(); ?></p>
      <p><strong>Obiettivo: </strong><?php echo $camera_1->getSensorDimensions(); ?></p>
    </div>

    <!-- primo zaino -->
    <div class="card">
    <h2><?php echo $bag_1->name . " - " . $bag_1->brand ?></h2>
      <p><?php echo $bag_1->description; ?></p>
      <span id="prezzo"><?php echo $bag_1->price; ?></span>
      <p><strong>Dimensioni: </strong><?php echo $bag_1->height . " x " . $bag_1->width . " x " . $bag_1->depth ?></p>
      <p><strong>Capacità: </strong> <?php echo $bag_1->litres; ?></p>
      <p><strong>Materiale: </strong> <?php echo $bag_1->material; ?></p>
    </div>

    <!-- secondo zaino -->
    <div class="card">
      <h2><?php echo $bag_2->name . " - " . $bag_2->brand ?></h2>
      <p><?php echo $bag_2->description; ?></p>
      <span id="prezzo"><?php echo $bag_2->price; ?></span>
      <p><strong>Dimensioni: </strong><?php echo $bag_2->height . " x " . $bag_2->width . " x " . $bag_2->depth ?></p>
      <p><strong>Capacità: </strong> <?php echo $bag_2->litres; ?></p>
      <p><strong>Materiale: </strong> <?php echo $bag_2->material; ?></p>
    </div>

    <!-- secondo telefono -->
    <div class="card">
    <h2><?php echo $smartphone_2->name . " - " . $smartphone_2->brand ?></h2>
      <p><?php echo $smartphone_2->description; ?></p>
      <p><strong>Processore: </strong><?php echo $smartphone_2->processor ?></p>
      <p><strong>Ram: </strong><?php echo $smartphone_2->ram ?></p>
      <p><strong>Batteria: </strong><?php echo $smartphone_2->battery_mAh ?></p>
      <p><strong>Schermo: </strong><?php echo $smartphone_2->screen_inches ?></p>
      <p><strong>Peso: </strong><?php echo $smartphone_2->weight ?></p>
      <span id="prezzo"><?php echo $smartphone_2->price; ?></span>
    </div>

  </div>

</body>
</html>