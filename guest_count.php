<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT count(*)+1 AS count FROM guest";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('count'=>$row[0]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("guest_count"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>