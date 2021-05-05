<?php 
include 'dbTable.php';

$getStar = getDB();
echo '<pre>';
print_r($getStar);



$day = "";
$mon = "";

$img    = "";
$name   = "";
$nameEN = "";
$time   = "";




if(isset($_POST["day"]) && isset($_POST["mon"])){
    $day = $_POST["day"];
    $mon = $_POST["mon"];
}
if((is_numeric($day)) && (is_numeric($mon))){
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
     * Libra      24/09 - 23/10  Thien Xung
     * Scorpio    24/10 - 22/11 Ho Cap
     * Sagittarius  23/11 - 22/12 Nhan ma
    */
    switch ($mon) {
        case '1':
            if($day <= 19) { $img = $getStar[0]['img']; $name   = $getStar[0]["name"]; $nameEN = $getStar[0]["nameEN"]; $time   = $getStar[0]["time"];} 
            if($day >= 20) { $img = $getStar[1]['img']; $name   = "Cung Bao Binh"; $nameEN = "Aquarius"; $time   = "20/01 - 19/02";}
        break;
        case '2':
            if($day <= 19) { $img = "CungBaoBinh.png"; $name   = "Cung Bao Binh";$nameEN = "Aquarius";$time   = "20/01 - 19/02";}
            if($day >= 20) {$img = "CungSongNgu.png"; $name   = "Cung Song Ngu"; $nameEN = "Pisces"; $time   = "20/02 - 21/03";}
        break;
        case '3':
            if($day <= 21) {$img    = "CungSongNgu.png"; $name   = "Cung Song Ngu";$nameEN = "Pisces";$time   = "20/02 - 21/03";}
            if($day >= 22) {$img  = "CungBachDuong.png";$name   = "Cung Bach Duong"; $nameEN = "Aries";$time   = "22/03 - 20/04";}
        break;
        case '4':
            if($day <= 20) {$img  = "CungBachDuong.png";$name   = "Cung Bach Duong"; $nameEN = "Aries";$time   = "22/03 - 20/04";}
            if($day >= 21) {$img  = "CungKimNguu.png";$name   = "Cung Kim Nguu"; $nameEN = "Taurus";$time   = "21/04 - 21/05";}
        break;
        case '5':
            if($day <= 21) {$img  = "CungKimNguu.png";$name   = "Cung Kim Nguu"; $nameEN = "Taurus";$time   = "21/04 - 21/05";}
            if($day >= 22) {$img  = "CungSongTu.png";$name   = "Cung Song Tu"; $nameEN = "Gemini";$time   = "22/05 - 22/06";}
        break;
        case '6':
            if($day <= 22) {$img  = "CungSongTu.png";$name   = "Cung Song Tu"; $nameEN = "Gemini";$time   = "22/05 - 22/06";}
            if($day >= 23) {$img  = "CungCuGiai.png";$name   = "Cung Cu Giai"; $nameEN = "Cancer";$time   = "23/06 - 23/07";}
        break;
        case '7':
            if($day <= 23) {$img  = "CungSongTu.png";$name   = "Cung Song Tu"; $nameEN = "Gemini";$time   = "22/05 - 22/06";}
            if($day >= 23) {$img  = "CungCuGiai.png";$name   = "Cung Cu Giai"; $nameEN = "Cancer";$time   = "23/06 - 23/07";}
        break;
        case '8':
            if($day <= 22) {$img  = "CungSongTu.png";$name   = "Cung Song Tu"; $nameEN = "Gemini";$time   = "22/05 - 22/06";}
            if($day >= 23) {$img  = "CungCuGiai.png";$name   = "Cung Cu Giai"; $nameEN = "Cancer";$time   = "23/06 - 23/07";}
        break;
            
        
        default:
            # code...
            break;
    }
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
        </form>
        <!-- <div class="row">
                <img src="../Age/img/CungBachDuong.png" alt="CungBachDuong">
                <p>Cung bach duong <span> (Aries : 21/3 - 20/4) </span></p>
        </div> -->
        <?php 
            $result =   '<div class="row">
                            <img src="../Age/img/'. $img .'" alt="'. $img .'">
                            <p>'. $name .' <span> ('. $nameEN .' : '. $time .') </span></p>
                        </div>';
            echo $result;
           
        ?>
    </div>
</body>
</html>