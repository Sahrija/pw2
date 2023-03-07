<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    input {
      width: fit-content;
    }
  </style>
</head>

<body>




  <?php


  $servername = "localhost";
  $username = "ahmadsahrija";
  $password = "sahrijabangetya";
  $dbname = "pizza ninja";


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    echo "connection error: " . mysqli_connect_error();
  } else {
    echo "connected";
  }

  $sql = "SELECT * FROM `pizza_orders`;";

  $result = mysqli_query($conn, $sql);
  // fetch the resulting rows as an array

  $pizza_orders_data = mysqli_fetch_all($result, MYSQLI_ASSOC);




  ?>







  <h1>pizza orders</h1>

  <table border="">

    <thead>
      <th>Id</th>
      <th>Customer name</th>
      <th>pizza</th>
      <th>action</th>
    </thead>

    <tbody>

      <?php
      foreach ($pizza_orders_data as $idx => $datarow) {
      ?>

        <tr>
          <td><?php echo $datarow["id"] ?></td>
          <td><?php echo $datarow["customer_name"] ?></td>
          <td><?php echo $datarow["pizza"] ?></td>
          <td><a href="pizza_upload.php?delete=<?php echo $datarow['id']; ?>" class="btn btn-danger">Delete</a></td>
        </tr>

      <?php
      }
      ?>


    </tbody>

  </table>

  <form action="pizza_upload.php" method="post">
    <input type="number" name="id">
    <input type="text" name="customer_name">
    <input type="text" name="pizza">
    <button type="submit" value="submit" name="submit">add order</button>
  </form>


  <?php if(isset($warning)){echo $warning;};?>

</body>

</html>