<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT member.email as m_email, password, phone, device_ox, mem_avatar.email as ma_email, avatar FROM member, mem_avatar";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('m_email'=>$row[0],'password'=>$row[1],'phone'=>$row[2],'device_ox'=>$row[3],'ma_email'=>$row[4], 'avatar'=>$row[5]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("login"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>