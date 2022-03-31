<?php
$con = mysqli_connect("localhost","root","","swcs");
if(!$con){
echo "Database Connection Error".mysqli_error($con);
}
$name=$_POST["name"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$c_amount=$_POST["creditAmount"];
$sql="INSERT INTO customer(Name,Address,PhoneNumber,Amount) Values('$name','$address','$phone','$c_amount')";
if(mysqli_query($con,$sql)){
    header('Location: Dataview.php');

    exit;
}
else{
    "Error".$sql."</br>".mysqli_error($con);
}
?>
