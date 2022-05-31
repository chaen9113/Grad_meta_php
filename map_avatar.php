<?php
$con=mysqli_connect("localhost","root","password","dbname");

$sql = "SELECT email, mem_avatar.avatar, front, back, a_left, a_right FROM mem_avatar, avatar_info WHERE mem_avatar.avatar=avatar_info.avatar";

$result = mysqli_query($con, $sql);

$data = array();

if ($result) {
    while ($row=mysqli_fetch_array($result)) {
        array_push($data, 
        array('email'=>$row[0],'avatar'=>$row[1],'front'=>$row[2],'back'=>$row[3],'left'=>$row[4],'right'=>$row[5]));
    }
    header ('Content-Type: application/json; charset=utf8');
    $json=json_encode(array("map_avatar"=>$data),JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE);
    echo $json;
}

?>