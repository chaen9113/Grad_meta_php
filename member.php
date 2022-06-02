<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT * FROM member";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('nickname'=>$row[0],'email'=>$row[1],'password'=>$row[2],'phone'=>$row[3],'device_ox'=>$row[4]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("member"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>