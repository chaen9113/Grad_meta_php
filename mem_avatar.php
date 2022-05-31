<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT * FROM mem_avatar";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('email'=>$row[0], 'avatar'=>$row[1]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("mem_avatar"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>