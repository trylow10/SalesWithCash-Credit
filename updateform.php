<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
        $id=$_POST["id"];
        $con=mysqli_connect("localhost","root","","swcs");
        if(!$con){
            die('Sorry!!! connection failed'.mysqli_error());
        }
        else{
            echo"<h2>Update Information</h2>";
        }
        $sql="SELECT ID,Name,Address,PhoneNumber,Amount FROM Customer where ID=$id";
        $result=mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo 
                "
                <form method='post' action='update.php'>
                <input type='hidden' value='".$row["ID"]."' name='id'>
                Name:<input type='text' value='".$row["Name"]."' name='name'>
                Address:<input type='text' value='".$row["Address"]."' name='address'>
                PhoneNumber:<input type='text' value='".$row["PhoneNumber"]."' name='phone'>
                CreditAmount:<input type='text' value='".$row["Amount"]."' name='amount'>
                <input type='submit' value='save'>
                </form>";
            }
        }
    ?>
</body>
</html>