<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="compname">
            <div class="comptitle">
                <h1>
                    New Upreti Distributor
                </h1>
            </div>
            <div class="complogo">
                <img src="loogin.jpg" height="400" width="350" alt="image">
            </div>
        </div>
        <div class="loginform">
            <div class="loginheader">
                <h2>Login Here</h2>
            </div>
            <div class="logininfo">
                <form action="validatelogin.php" method="post">
                   <span>Username:</span><input type="text" name="username" placeholder="Enter username" required> </br>
                   <span> Password:</span><input type="password" name="password" placeholder="Enter password" required> </br>
                    <input type="submit" value="Login" id="submit">
            </form>
            </div>
        </div>
    </div>
</body>
</html>