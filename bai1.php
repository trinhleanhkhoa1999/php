<?php 
    echo ('<br>');
    echo ('<h5 style="color:red"> Bat dau voi PHP </h5>');
    echo ('<br>');
    $value = '<h2 style="color: blue; text-align:center"> Chien PHP </h2>';
    echo $value;

    echo ('<br>--------------------------------------------------------------</br>');
    echo ('<br>');
 /**
  *bai toan tinh tuoi 
  */
  $namSinhh=1999;
  $namHienTai=date('Y');
  $soTuoi= $namHienTai - $namSinhh;
  echo ('so tuoi hien tai la '. $soTuoi );
  echo ('<br>');


  /**
   * tinh dien tich hinh chu nhat
   */

   $chieuDai= 5;
   $chieuRong = 5;
   $result = $chieuDai * $chieuRong;
   echo ('chieu dai hinh chu nhat la '.$chieuDai. ' chieu rong hinh chu nhat la '. $chieuRong.' ket qua dien tich hinh chu nhat la: ' . $result);
   echo ('<br>');


    /**
 *  1. Viết chương trình so sánh 2 số 
 *  Input :  
 *         + firstNumber = 2;
 *         + secondNumber = 9;
 *  Output:
 *         + secondNumber lớn hơn firstNumber
 *
 *  Algorithm :
 *           ... 
 * 
 */
$firstNumber = 2;
$secondNumber = 9;

if($firstNumber<$secondNumber){
    echo ('secondNumber lớn hơn firstNumber');
}else {
    echo ('secondNumber nho hơn firstNumber');

}
echo ('<br>');

/**
 *  2. Viết chương trình tìm max của 3 số 
 *  Input :  
 *         + firstNumber   = 2;
 *         + secondNumber   = 9;
 *         + thirdNumber = 4;
 *  Output:
 *         + Max là secondNumber
 */
   
$firstNumber   = 2;
$secondNumber   = 9;
$thirdNumber = 4;

$max = $firstNumber;

if($max < $secondNumber){
    $max = $secondNumber;
}
if($max < $thirdNumber){
    $max = $thirdNumber;
}
echo ('so lon nhat la '.$max);
echo ('<br>');
echo ('<br>');

/**
 *  3. Viết chương trình tung đồng xu 
 *  Input :  
 *         + Coin 
 *         + Khi code được server xử lý -> Coin = rand(0,1) -> hàm rand sẽ trả về 0 hoặc 1
 *         + 0 = mặt sấp  
 *         + 1 = mặt ngửa 
 *  Output:
 *         + Ngẫu nhiễn sấp hoặc ngửa
 */

$Coin = null;
$Coin = rand(0,1);

if($Coin == 0){
    echo("Sấp");
    echo ('<br /> --------------------------------------  <br />');

}
else {
    echo("Ngửa");
    echo ('<br /> --------------------------------------  <br />');

}
echo ('<br>');

/**
 *  4. Bài toán tính tiền taxi với số km cho trước 
 *  Input :  
 *         + 1km đầu giá = 15000 đ 
 *         + từ 1km đến 5km giá = 12000 đ 
 *         + từ 6km trở đi giá  = 90000 đ
 *         + từ 140km trở đi được giảm 12 % tổng tiền
 *  Output:
 *         + Số tiền cần thanh toán
 */
const FIRST_LEVEL  = 15000;
const SECOND_LEVEL = 12000;
const THIRD_LEVEL  = 90000;
const FOURTH_LEVEL = 12/100;

$numberKm   = 3; // Khai báo số km sẽ đi 
$amount     = 0;

if($numberKm <= 1){
    $amount = $numberKm * FIRST_LEVEL;
}
else if($numberKm <= 5){
    $amount =  1 * FIRST_LEVEL + ($numberKm  - 1) * SECOND_LEVEL;
}
else if($numberKm <= 140){
    $amount = 1 * FIRST_LEVEL + 4 * SECOND_LEVEL +  ($numberKm - 5) * THIRD_LEVEL;
}
else{
    $amount = (1 * FIRST_LEVEL + 4 * SECOND_LEVEL +  ($numberKm - 5) * THIRD_LEVEL) * FOURTH_LEVEL;
}

$amount = number_format($amount); // định dạng lại số tiền theo chuẩn 500000  = 500,000

echo("Số tiền khách phải trả khi đi $numberKm km là: $amount đ");

echo '<br>';

$var =  9;

$test = is_string($var)?" da la chuoi":'khong phai la chuoi';
echo $test; 

if(is_string($var)){
    echo 'day la chuoi';
} else {
    echo 'day khong la chuoi' ;

}
?>