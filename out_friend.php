<?php
$con=mysqli_connect("localhost","root","password","dbname");

$email = $_POST['email'];

$sql = "DELETE FROM friend WHERE email='$email' or f_email='$email'";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>