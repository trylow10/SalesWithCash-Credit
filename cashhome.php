 <html>
 <title>Home</title>
        <style>
              <?php include 'details.css'; ?>
        </style>
     <body>
     <div class="details__container">
            <div class="details__header">
                <a href="" id="title" target="_self">New Upreti Distributor</a>
                <a href="cashhome.php">Home</a>
                <a href="Dataview.php" target="_self">DataView</a>
               <a href ="logout.php">Logout</a>
            </div>
            <div class="user_input">
                <div class="user__input__title">
                <h3>Customer Cash Entry</h3>
                </div>
                <div class="user__input__form">
                <form action="savecash.php" method="POST">

               
                    <span>Name</span></br><input type="text" name="name" required></br>
                    <span>Address</span></br><input type="text" name="address" required></br>
                    <span>Phone</span></br><input type="text" name="phone" required></br>
                    <span> Purchase Item</span>
                <select  name ="item" required>  
                   <option value="">Select</option>  
  <option value="Nun">Nun</option>  
  <option value="Daal">Daal</option>  
  <option value="Chini">Chini</option>  
  <option value="Biscut">Biscuit</option>  
  <option value="Chauchau">Chauchau</option>  
</select> <br><br><br>

<span>Quantity</span></br><input type="number" name="quantity" required></br>

                    <span>Amount</span></br><input type="text" name="cash" required></br>
                    
                    <input type="submit" value="Add Cash" id="entry">
                </form>        
                </div>
            </div>
        </div>
      
    </body>

     </body>
     </html>