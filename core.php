<?php
include('config.php');
header("Content-Type: application/json");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_GET['amount'])){
        $data['result'] = 0;
        $data['resultof'] = 0;
        echo json_encode($data); 
        return false;
    }
    $query = "select * from crypto where crypto ='".$_GET['to']."'";
    $from = $_GET['from'];
    $result = mysqli_query($conn , $query);
    while($row = mysqli_fetch_assoc($result)){ 
        $data['result'] = $_GET['amount'] / $row[$from];
        $data['resultof'] = $_GET['amount'];
        echo json_encode($data); 
    }
}
?>