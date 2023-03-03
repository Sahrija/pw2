<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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


  function checkID(array $arr, $id)
  {
    foreach ($arr as $datarow) {
      if ($datarow['id'] == $id) {
        return true;
      }
    }
  }
  //add data
  // unset($_POST['id']);


  if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $pizza = $_POST['pizza'];

    if (!checkID($pizza_orders_data, $id)) {

      $sql = "INSERT INTO `pizza_orders` (`id`, `customer_name`, `pizza`) VALUES ('$id', '$customer_name', '$pizza')";

      mysqli_query($conn, $sql);
    }
    else{
      
      unset($_POST);
      $warning = "data id is same";
    }
  }


  ?>







  <h1>pizza orders</h1>

  <table border="">

    <thead>
      <th>Id</th>
      <th>Customer name</th>
      <th>pizza</th>
    </thead>

    <tbody>

      <?php
      foreach ($pizza_orders_data as $idx => $datarow) {
      ?>

        <tr>
          <td><?php echo $datarow["id"] ?></td>
          <td><?php echo $datarow["customer_name"] ?></td>
          <td><?php echo $datarow["pizza"] ?></td>
        </tr>

      <?php
      }
      ?>


    </tbody>

  </table>

  <form action="pizza_order.php" method="post">
    <input type="number" name="id">
    <input type="text" name="customer_name">
    <input type="text" name="pizza">
    <button type="submit" value="submit" name="submit">add order</button>
  </form>


  <?php if(isset($warning)){echo $warning;};?>

</body>

</html>