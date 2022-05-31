<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT email, count(*)-1 AS num_following FROM friend GROUP BY email";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('email'=>$row[0],'num_following'=>$row[1]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("following"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>