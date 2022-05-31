<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT member.email, nickname, avatar FROM member, mem_avatar where member.email=mem_avatar.email";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('email'=>$row[0],'nickname'=>$row[1],'avatar'=>$row[2]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("mem_list"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>