<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Part 2</title>

    <style>
      table,
      th,
      td {
        border: 1px solid black;
      }

      table {
        width: 220px;
      }
    </style>
  </head>
  <body>
    <?php session_start(); ?>

    <h1>Menu</h1>

    <table>
      <tr>
        <th>Order</th>
        <th>Amount</th>
      </tr>
      <tr>
        <td>Burger</td>
        <td>50</td>
      </tr>
      <tr>
        <td>Fries</td>
        <td>75</td>
      </tr>
      <tr>
        <td>Steak</td>
        <td>150</td>
      </tr>
    </table>

    <br />

    <form action="handleForm.php" method="POST">
      <label for="menuChoices">Select an order </label>
      <select name="menuChoices">
        <option value="burger">Burger</option>
        <option value="fries">Fries</option>
        <option value="steak">Steak</option>
      </select>

      <br />
      <br />

      <label for="quantity">Quantity</label>
      <input type="number" name="quantity" required />

      <br />
      <br />

      <label for="cash">Cash</label>
      <input type="number" name="cash" required />

      <br />
      <br />

      <input type="submit" value="submit" name="submitBtn" />
    </form>
  </body>
</html>
