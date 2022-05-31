<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT * FROM friend";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('email'=>$row[0],'f_email'=>$row[1]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("friend"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>