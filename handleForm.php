<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Part 2</title>

    <style>
      * {
        font-family: Arial;
      }

      h2 {
        text-align: center;
        font-weight: bold;
      }

      .container {
        border: 1px dotted black;
      }
    </style>
  </head>
  <body>
    <?php
      session_start();
      date_default_timezone_set("Asia/Manila");
      if (isset($_POST['submitBtn'])){
        $order = $_POST['menuChoices'];
        $quantity = $_POST['quantity'];
        $cash = $_POST['cash'];

        $menuPrices = array(
          "burger" => 50, 
          "fries" => 75, 
          "steak" => 150 ); 
      $total = $menuPrices[$order] * $quantity; 
      $change = $cash - $total; 
      
      if ($cash < $total) { 
        echo '<div class="container" style="border: 1px dotted red";>'; 
        echo "<h1>Sorry, balance not enough.</h1>"; 
        echo '</div>'; } else { echo '<div class="container">'; 
        echo "<h2>RECEIPT</h2>"; 
        echo "<h3>Total Price: " . $total . "</h3>"; 
        echo "<h3>You Paid: " . $cash . "</h3>"; 
        echo "<h3>CHANGE: " . $change . "</h3>"; 
        echo "<h3 style='font-style: italic;'>" . date("m/d/Y"). " " . date("h:i:sa") . "</h3>"; 
        echo '</div>'; } } 
    ?>
  </body>
</html>
