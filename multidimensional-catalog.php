<?php

$products = [
  "Adidas Rainbow" => [
    "name" => "Adidas Rainbow",
    "price" => 200,
    "weight" => 500,
    "discount" => 20,
    "picture" => "img/shoes/paire9.jpg",
  ],

  "Adidas Blue" => [
    "name" => "Adidas Blue",
    "price" => 499,
    "weight" => 260,
    "discount" => 5,
    "picture" => "img/shoes/paire8.jpg",
  ],

  "Adidas Black & Red" => [
    "name" => "Adidas Black & Red",
    "price" => 250,
    "weight" => 520,
    "discount" => 10,
    "picture" => "img/shoes/paire4.jpg",
  ]
  ];

?>

<html>
  <body class="bg-dark">

    <h1>Multidimensional Catalog</h1>

  <!--  <div class="container row mx-auto mt-4 mb-4">
    <ul class="row col-4 list-group list-group-flush mx-auto border bg-white text-center">
      <style>.list-group-item img{width: 200px; height: 200px;}</style>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["name"]);
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["price"]);
        echo ("€");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["weight"]);
        echo ("g");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Rainbow"]["discount"]);
        echo ("%");
        ?>
      </li>
      <li class="list-group-item">
        <img src="<?php echo ($products["Adidas Rainbow"]["picture"]);?>" alt="Adidas Rainbow">
      </li>
    </ul>

    <ul class="row col-4 list-group list-group-flush mx-auto border bg-white text-center">
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["name"]);
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["price"]);
        echo ("€");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["weight"]);
        echo ("g");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Blue"]["discount"]);
        echo ("%");
        ?>
      </li>
      <li class="list-group-item">
        <img src="<?php echo ($products["Adidas Blue"]["picture"]);?>" alt="Adidas Blue">
      </li>
    </ul>

    <ul class="row col-4 list-group list-group-flush mx-auto border bg-white text-center">
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["name"]);
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["price"]);
        echo ("€");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["weight"]);
        echo ("g");
        ?>
      </li>
      <li class="list-group-item">
        <?php
        echo ($products["Adidas Black & Red"]["discount"]);
        echo ("%");
        ?>
      </li>
      <li class="list-group-item">
        <img src="<?php echo ($products["Adidas Black & Red"]["picture"]);?>" alt="Adidas Black & Red">
      </li>
    </ul>
  </div> -->

    <div class="boucle-while">
      <h2>Boucle While</h2>
      <p class="text-light">
      <?php
      $i = 0;
      $keys = array_keys($products);
      while($i < count($products)){
        $ii = 0;
        echo "$keys[$i] : <br>";
        $keys_value = array_keys($products[$keys[$i]]);
        $value = array_values($products[$keys[$i]]);
        while ($ii < count($keys_value)) {
          if ($ii === 4) {
            echo "$keys_value[$ii] : <img src='$value[$ii]' alt='image baskettes'><br>";
            $ii = $ii +1;
          } else {
          echo "$keys_value[$ii] : $value[$ii]<br>";
          $ii = $ii +1;
        }
        }
        echo "<br>";
        $i = $i +1;
      }
      ?>
    </p>
  </div>

  <div class="boucle-do-while">
    <h2>Boucle Do-While</h2>

    </p>
  </div>

  <div class="boucle-for">
    <h2>Boucle For</h2>
    <p class="text-light">

    </p>
  </div>

  <div class="boucle-foreach">
    <h2>Boucle Foreach</h2>
    <p class="text-light">

    </p>
  </div>

  </body>
</html>