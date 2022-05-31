<?php
$con=mysqli_connect("localhost","root","password","dbname");

$gname = $_POST['gname'];

$sql = "DELETE FROM guest WHERE EXISTS gname='$gname'";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "Success";
} else {
    echo "Fail";
}

?>