<?php
$con = mysqli_connect("localhost","root","","swcs");
if(!$con){
echo "Database Connection Error".mysqli_error($con);
}
//$date = $_POST['date'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$item = $_POST['item'];
$quantity = $_POST["quantity"];
$cash = $_POST['cash'];

$sql1 = "SELECT PRICE,ID FROM PRODUCTS WHERE items = '$item'";
$result = mysqli_query($con,$sql1);
$price = mysqli_fetch_array($result);
$id = $price['ID'];

$total = $quantity*$price['PRICE'];
$sql2="INSERT INTO cashcustomer(item_id, name, address, phone, quantity, cash, Total) VALUES ('$id','$name','$address','$phone','$quantity','$cash','$total')";
$amount = $total-$cash;
if($amount!=0){

$query="INSERT INTO customer(Name,Address,PhoneNumber,Amount) Values('$name','$address','$phone','$amount')";
    $res1 = mysqli_query($con,$query);
    $res = mysqli_query($con,$sql2);
    echo "credit";

}
else{

    $res = mysqli_query($con,$sql2);
    echo "cash";
}



?>
