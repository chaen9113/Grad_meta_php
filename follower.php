<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT f_email, count(*)-1 AS num_follower FROM friend GROUP BY f_email";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('f_email'=>$row[0],'num_follower'=>$row[1]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("follower"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>