<?php
$num = $_POST["id"];
$con=mysqli_connect("localhost","root","","swcs");

$sql="DELETE FROM Customer where ID =$num";
if (mysqli_query($con, $sql)) {
    
    header('Location:fulldata.php');
}
 else {
    echo "Error deleting record".mysqli_error($con);
}
mysqli_close($con);
?>