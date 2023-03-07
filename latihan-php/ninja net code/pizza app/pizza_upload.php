<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>


  <?php

  $servername = "localhost";
  $username = "ahmadsahrija";
  $password = "sahrijabangetya";
  $dbname = "pizza ninja";


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);


  if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $pizza = $_POST['pizza'];

    if ($conn) {

      $sql = "INSERT INTO `pizza_orders` (`id`, `customer_name`, `pizza`) VALUES ('$id', '$customer_name', '$pizza')";
    }
    try {
      mysqli_query($conn, $sql);
      //code...
    } catch (\Throwable $th) {
      //throw $th;
      echo "  <script>
      window.location = 'pizza_order.php';
    </script>";
    }
  }








  if (isset($_GET['delete'])) {
    $db = "pizza ninja";
    $tablename = `pizza_orders`;

    $id =  validate($_GET['delete']);
    $sql = "DELETE FROM `pizza_orders` WHERE id = $id";
    mysqli_query($conn, $sql);
  }

  function validate($value)
  {
    $value = trim($value);
    $value = stripcslashes($value);
    $value = htmlspecialchars($value);
    return $value;
  }

  ?>

  <script>
    window.location = "pizza_order.php";
  </script>
</body>

</html>