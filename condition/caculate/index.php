<?php 
//  if ($caculate === ("+")){
//    $result = $number1 + $number2;
//  } else if($caculate === ("-")){
//   $result = $number1 - $number2;
//  }else if($caculate === ("*")){
//   $result = $number1 * $number2;
//  }else if($caculate === ("/")){
//   $result = $number1 / $number2;
//  }
$number1="";
$caculate="";
$number2="";
if(isset($_POST["number1"]) && isset($_POST["caculate"]) && isset($_POST["number2"])){
    $number1 = $_POST["number1"];
    $caculate = $_POST["caculate"];
    $number2 = $_POST["number2"];
}
if((is_numeric($number1)) && (is_numeric($number2))){
  switch ($caculate) {
    case '+':
      $result=$number1 + $number2;
      break;
    case '-':
      $result=$number1 - $number2;
      break;
    case '*':
      $result=$number1 * $number2;
      break;
    case '/':
      $result=$number1 / $number2;
      break;
    default:
    $result=$number1 + $number2;
      break;
  }
} else {
  $result = "phai la so ";
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
</head>

<body>
    <div class="content">
        <h2>May tinh thong dung</h2>
        <form method="POST" action="#" name="main-from">
            <div class="row">
                <label>So thu nhat:</label>
                <input type="text" name="number1" value="<?php echo $number1 ?>">
            </div>
            <div class="row">
                <label>Nhap phep tinh:</label>
                <input type="text" name="caculate" value="<?php echo $caculate ?>">
            </div>
            <div class="row">
                <label>So thu hai:</label>
                <input type="text" name="number2" value="<?php echo $number2 ?>">
            </div>
            <div class="row">
                <input type="submit" value="xem ket qua" name="submit">
            </div>
        
            <div class="row">
                <p> <?php echo "ket qua ". $number1 ." ".$caculate." ". $number2." = ". $result  ?></p>
            </div>
        </form>
    </div>
</body>
</html>