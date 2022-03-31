  <head>
        <title>Home</title>
        <style>
              <?php include 'details.css'; ?>
        </style>
    </head>    
    <body>
        <div class="details__container">
            <div class="details__header">
                <a href="CreditManagement.php" id="title" target="_self">New Upreti Distributor</a>
                <a href="home.php">Home</a>
                <a href="Dataview.php" target="_self">DataView</a>
            </div>
            <div class="user_input">
                <div class="user__input__title">
                <h3>Customer Credit Entry</h3>
                </div>
                <div class="user__input__form">
                <form action="insert.php" method="POST">
                    <span>Name</span></br><input type="text" name="name" required></br>
                    <span>Address</span></br><input type="text" name="address" required></br>
                    <span>Phone</span></br><input type="text" name="phone" required></br>
                    <span>Credit Amount</span></br><input type="text" name="creditAmount" required></br>
                    
                    <input type="submit" value="Add Credit" id="entry">
                </form>        
                </div>
            </div>
        </div>
      
    </body>
</html>
