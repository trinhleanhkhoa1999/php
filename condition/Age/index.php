<?php 
include 'dbTable.php';

$day = "";
$mon = "";


$getStar[0]['img'] = "";
$getStar[0]['name'] = "";
$getStar[0]['nameEN'] = "";
$getStar[0]['firstDate'] = "";
$getStar[0]['lastDate'] = "";

if(isset($_POST["day"]) && isset($_POST["mon"])){
    $day = $_POST["day"];
    $mon = $_POST["mon"];
    $getStar = getDB($day, $mon);
    // echo '<pre>';
    // print_r($getStar[0]['img']);
 
}

    /**
     * Capricorn  23/12 - 19/1   Ma Ket
     * Aquarius   20/01 - 19/02  Bao Binh
     * Pisces     20/02 - 21/03  Song Ngu
     * Aries      22/03 - 20/04  Bach Duong
     * Taurus     21/04 - 21/05  Kim Nguu
     * Gemini     22/05 - 22/06  Song Tu
     * Cancer     23/06 - 23/07  Cu Giai
     * Leo        24/07 - 23/08  Su Tu
     * Virgo      24/08 - 23/09  Xu Nu
     * Libra      24/09 - 23/10  Thien binh
     * Scorpio    24/10 - 22/11 Ho Cap
     * Sagittarius  23/11 - 22/12 Nhan ma
    */
 


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content">
        <h2>Kiệt Thạch thuộc chòm sao nào ?</h2>
        <form method="POST" action="#" name="main-from">
            <div class="row">
                <label>Ngày sinh:</label>
                <input type="text" name="day" value="<?php echo $day ?>">
            </div>
            <div class="row">
                <label>Tháng sinh:</label>
                <input type="text" name="mon" value="<?php echo $mon ?>">
            </div>
            <div class="row">
                <input type="submit" value="Click vào để xem chòm sao ^.^" name="submit">
            </div>
        </form>
        <!-- <div class="row">
                <img src="../Age/img/CungBachDuong.png" alt="CungBachDuong">
                <p>Cung bach duong <span> (Aries : 21/3 - 20/4) </span></p>
        </div> -->
        <?php 
        if ($getStar !== false) {
            $result =   '<div class="row">
                            <img src="../Age/img/'. $getStar[0]['img'] .'" alt="'. $getStar[0]['img'] .'">
                            <p>'. $getStar[0]['name'] .' <span> ('.$getStar[0]['nameEN'].' : '.$getStar[0]['firstDate'] .' '. $getStar[0]['lastDate'].') </span></p>
                        </div>';
            echo $result;
        } else {
            
            echo 'Nhập thông ngày tháng';
        }
        ?>
    </div>
</body>
</html>
