<?php
$con=mysqli_connect("localhost","root","password","dbname");

$email = $_POST['email'];
$avatar = $_POST['avatar'];

$sql = "INSERT INTO mem_avatar VALUES ('$email', '$avatar') ON DUPLICATE KEY UPDATE email='$email', avatar='$avatar'";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>