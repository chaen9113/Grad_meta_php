<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT * FROM guest";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('gnum'=>$row[0],'gname'=>$row[1],'gavatar'=>$row[2]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("guest"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>