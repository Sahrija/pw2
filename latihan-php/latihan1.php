<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: consolas;
    }

    b {
      color: red;
    }
  </style>
</head>

<body>

  <?php
  $_POST['food'] = array();
  ?>

  <form method="post" action="latihan1.php">
    <input type="checkbox" name="foods[]" value="pizza" id="pizza"><label for="pizza">pizza</label>
    <br>
    <input type="checkbox" name="foods[]" value="spagheti" id="spagheti"><label for="spagheti">spagheti</label>
    <br>
    <input type="checkbox" name="foods[]" value="croissant" id="croissant"><label for="croissant">croissant</label>
    <br>
    <input type="checkbox" name="foods[]" value="baguette" id="baguette"><label for="baguette">baguette</label>
    <br>

    <input type="text" name="name" id="name">
    <input type="number" name="id" id="">
    <button type="submit">submit</button>
  </form>

  <?php
  // $foods[] =  $_POST['food'];

  // print_r($_POST['food']);

  print_r($_POST);


  br();
  ?>


  <?php

  $servername = "localhost";
  $username = "sahrija";
  $password = "sahrijabangetya";
  $dbname = "latihan1";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  } else {
    echo "Connected successfully";
  }
 $id = 9;

  $sql = "INSERT INTO table1 (id, name)
  VALUES ( $id, 'Doe');";

  if ()

  $sql= "SELECT * FROM table1";
  $result =  $conn->query($sql);
  
  while ($row = $result->fetch_assoc()) {
    print_r($row);
}




  br();
  $someday = mktime(12, 23, 43, 4, 24, 2023);

  echo "today is " . date("Y/M/D", $someday) . "<br>";
  echo "today is " . date("l") . "<br>";
  include("footer.php");

  br();
  $x = 5 + 5;
  echo $x;

  function myTest()
  {
    $x = 90 + 5;
    echo "<p>variable x inside function is: $x</p>";
  }

  myTest();

  echo "<p>variable x outside function is: $x</p>";

  // echo print

  echo '<br>';

  $x = 04.4;
  echo var_dump($x);

  // php object

  class Car
  {
    public $color;
    public $model;
    public function __construct($color, $model)
    {
      $this->color = $color;
      $this->model = $model;
    }
    public function message()
    {
      return "my car is a " . $this->color  . " " . $this->model;
    }
  }


  $sahrijacar = new Car("red", 'lambo');

  echo $sahrijacar->color;
  echo $sahrijacar->message();


  echo '<br>';
  echo var_dump($sahrijacar);

  // string

  echo '<br>';
  echo strlen("abcde fg");
  echo '<br>';
  echo str_word_count("abcde fg");
  echo '<br>';
  echo strrev("abcde fg");
  echo '<br>';

  $text = "hello world";
  echo str_replace("world", 'bro', $text);

  for ($i = 0; $i < 9;) {
    echo $i++;
  }

  echo '<br>';
  $text1 = "nurul";
  $text2 = "fikri";
  $text1 .= $text2;
  echo $text1;
  if (1 == '1') {
    echo true;
  }

  $time = date('h');

  if ($time < '20') {
    echo "it's day time at $time, have a good day!";
  } else {
    echo 'have a good night';
  }

  echo '<br>';

  $color = 'red';
  switch ($color) {
    case 'red':
      echo 'your fav color is red';
      break;
    case 'blue':
      echo 'your fav color is blue';
      break;

    default:
      echo "don't have favourite color";
      break;
  }

  function br()
  {
    echo "<br>";
  }

  br();
  for ($i = 0; $i < 9; $i += 2) {
    echo $i;
    br();
  }
  br();

  function print_var_name($var)
  {
    foreach ($GLOBALS as $var_name => $value) {
      if ($value === $var) {
        return $var_name;
      }
    }

    return false;
  }
  $text = "foobar";
  print($text);
  br();

  ?>




  <?php

  function makeMultiDimArray($var = null)
  {
    # code...
    foreach (['a', 'b', 'c', 'd', 'e'] as $key) {
      echo "'$key' =>";
      echo "[";

      for ($i = 0; $i < 5; $i++) {
        echo "'$key$i', ";
      }

      echo "], ";
      br();
    }
  }
  makeMultiDimArray();

  $categories = [
    'a' => ['a0', 'a1', 'a2', 'a3', 'a4',],
    'b' => ['b0', 'b1', 'b2', 'b3', 'b4',],
    'c' => ['c0', 'c1', 'c2', 'c3', 'c4',],
    'd' => ['d0', 'd1', 'd2', 'd3', 'd4',],
    'e' => ['e0', 'e1', 'e2', 'e3', 'e4',],
  ];

  foreach ($categories as $category => $books) {
    echo "<h3>$category</h3>";
    echo "<ul>";
    foreach ($books as $book) {
      echo "<li>" . $book . "</li>";
    }
    echo "</ul>";
  }

  ?>


  <?php
  function printArray(array $array, string $separator)
  {
    foreach ($array as $value) {
      print_r($value . $separator);
    }
  }
  function printAsArray(array $array)
  {
    foreach ($array as $key => $value) {
      print_r($key . " => " . "<b>$value</b>");
      br();
    }
  }

  // function constructTags(array $tagslist){
  //   foreach ($tagslist as $key => $tag) {

  //   }
  // }

  $cars = ["lambo", "bmw", "ferrari", "nascar"];
  rsort($cars);
  printArray($cars, ", ");
  printArray(['d'], ", ");
  br();
  br();

  echo "<h1>next</h1>";
  printAsArray($_REQUEST);
  br();
  echo "down here";
  echo htmlspecialchars($_SERVER["PHP_SELF"]);
  echo $_SERVER["PHP_SELF"];

  $_REQUEST = [0];

  printAsArray($_REQUEST);
  ?>



</body>

</html>