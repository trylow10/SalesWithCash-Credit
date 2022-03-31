<?php
    $num=$_POST["id"];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $amount=$_POST["amount"];
    $con=mysqli_connect("localhost","root","","swcs");
    if(!$con){
    die('Sorry!!! connection failed'.mysqli_error());
    }
    $sql ="UPDATE Customer SET Name='$name',Address='$address',PhoneNumber='$phone',Amount='$amount'
    where ID=$num ";
    if(mysqli_query($con,$sql)){
        echo "Record Updated successfully";
        header('Location: Dataview.php');
        exit;
    }
    else{
        echo "error updating redord".mysqli_error($con);
    }
    mysqli_close($con);
?>