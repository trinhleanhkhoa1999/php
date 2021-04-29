<?php 

$day = "";
$mon = "";

if(isset($_POST["day"]) && isset($_POST["mon"])){
    $day = $_POST["day"];
    $mon = $_POST["mon"];
}
if((is_numeric($day)) && (is_numeric($mon))){

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
        <h2>Ban thuoc chom sao nao ?</h2>
        <form method="POST" action="#" name="main-from">
            <div class="row">
                <label>Ngay sinh:</label>
                <input type="text" name="day" value="<?php echo $day ?>">
            </div>
            <div class="row">
                <label>Thang sinh:</label>
                <input type="text" name="mon" value="<?php echo $mon ?>">
            </div>
            <div class="row">
                <input type="submit" value="Click vao de xem chom sao ^.^" name="submit">
            </div>
            <div class="row">
                <img src="../Age/img/CungBachDuong.png" alt="CungBachDuong">
                <p>Cung bach duong <span> 21/3 - 20/4 </span></p>
            </div>
        </form>
    </div>
</body>
</html>