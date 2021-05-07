<?php 
    include 'connectSQL.php';
    function getDB($day,$mon){
        $connect = connectDB();
        $times = date('Y').'-'.$mon.'-'.$day;
        $sql = "SELECT img, name, nameEN, firstDate, lastDate, step
                FROM `table1` WHERE 
                (STR_TO_DATE('$times','%Y-%m-%d') BETWEEN STR_TO_DATE(CONCAT(DATE_FORMAT(now(),'%Y'),'-',firstDate),'%Y-%m-%d') AND STR_TO_DATE(DATE_ADD(CONCAT(DATE_FORMAT(now(),'%Y'),'-',lastDate),INTERVAL `step` YEAR),'%Y-%m-%d')) OR
                (STR_TO_DATE('$times','%Y-%m-%d') BETWEEN STR_TO_DATE(DATE_ADD(CONCAT(DATE_FORMAT(now(),'%Y'),'-',firstDate),INTERVAL -`step` YEAR),'%Y-%m-%d') AND STR_TO_DATE(CONCAT(DATE_FORMAT(now(),'%Y'),'-',lastDate),'%Y-%m-%d')) ";
        $result = $connect->query($sql);
        if($result->num_rows > 0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC); 
            //     echo '<pre>';
            // print_r($rows[3]);
            // die();
            return $rows;
        //}
        } else { 
            return false;
        }
    }
    
?>