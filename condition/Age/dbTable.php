<?php 
    include 'connectSQL.php';
    function getDB(){
        $connect = connectDB();
        $sql = "SELECT img, name, nameEN, firstDate, lastDate
                FROM `table1` WHERE 
                (STR_TO_DATE('2021-01-30','%Y-%m-%d') BETWEEN STR_TO_DATE(CONCAT(DATE_FORMAT(now(),'%Y'),'-',firstDate),'%Y-%m-%d') AND STR_TO_DATE(DATE_ADD(CONCAT(DATE_FORMAT(now(),'%Y'),'-',lastDate),INTERVAL `step` YEAR),'%Y-%m-%d')) OR
                (STR_TO_DATE('2021-01-30','%Y-%m-%d') BETWEEN STR_TO_DATE(DATE_ADD(CONCAT(DATE_FORMAT(now(),'%Y'),'-',firstDate),INTERVAL -`step` YEAR),'%Y-%m-%d') AND STR_TO_DATE(CONCAT(DATE_FORMAT(now(),'%Y'),'-',lastDate),'%Y-%m-%d')) ";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC); 
            //     echo '<pre>';
            // print_r($row[0][3]);
            // die();
            //     $khoa =   '<div class="row">
            //                     <img src="../Age/img/'. $row["ïmg"] .'" alt="'. $row["ïmg"] .'">
            //                     <p>'. $row["name"] .' <span> ('. $row["nameEN"] .' : '. $row["time"] .') </span></p>
            //                 </div>';
            // }
            return $rows;
        //}
    }
}
    
?>