<?php
$con=mysqli_connect("localhost","root","password","dbname");

$email = $_POST['email'];

$sql = "DELETE FROM member WHERE email='$email'";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>