<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","swcs");

if(!$con){
    die('Sorry!!! connection failed'.mysqli_error());

}
$sql="SELECT * FROM admin where username='$username' and password='$password'";

    $result=mysqli_query($con,$sql);

    if (mysqli_num_rows($result)!=0)

    {
header("Location:Home.php");
exit;

    }
    else {
        echo ("<html>
        <head>

        <script type='text/javascript'>
    
        function show_alert()
    
        {
    
        alert('Username or Password is Wrong.!');
    
        }
    
        </script>
    
        </head>
    
        <body onLoad=show_alert()>
        </html>");
       header("Location:index.php");
    }
    mysqli_close($con);
?>