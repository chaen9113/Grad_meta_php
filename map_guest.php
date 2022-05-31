<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT gname, gavatar, front, back, a_left, a_right FROM guest, avatar_info WHERE gavatar=avatar";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('gname'=>$row[0],'gavatar'=>$row[1],'front'=>$row[2],'back'=>$row[3],'left'=>$row[4],'right'=>$row[5]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("map_guest"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>