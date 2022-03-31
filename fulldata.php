<?php include 'header.php'; ?>
<?php
    $con = mysqli_connect("localhost","root","","swcs");
    if(!$con){
    echo "Database Connection Error".mysqli_error($con);
    }
    $sql="SELECT ID,Name,Address,PhoneNumber,Amount FROM Customer";
    $result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    echo "<table border=1>";
    echo "<tr><th>ID</th><th>Name</th><th>Address</th><th>PhoneNumber</th><th>CreditAmount(Rs)</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
       echo "<tr><td>".$row["ID"]."</td>" 
       ."<td>".$row["Name"]."</td>" 
       ."<td>".$row["Address"]."</td>" 
       ."<td>".$row["PhoneNumber"]."</td>"
       ."<td>".$row["Amount"]."</td>"
        ."<td> <form action='delete.php' method='post'>
        <input type='hidden' value='".$row["ID"]."' name='id'>
        <input type='submit' value='Clear' id='clear_button'>
       </form></td>"
       ."<td><form action='updateform.php' method='post'>
        <input type='hidden' value='".$row["ID"]."' name='id'>
        <input type='submit' value='Update' id='update_button'>
       </form></td></tr>";
    }
   echo " </table>";
}
else{
    echo "No results found";
}
mysqli_close($con);
?>
</body>
</html>