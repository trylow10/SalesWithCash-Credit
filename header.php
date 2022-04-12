<html>
    <head>
        <style>
             <?php include 'dataview.css'; ?>
        </style>
    </head>
<body>
<div class="header">
    <div class="store__title">
        <a href="cashhome.php" target="_self">New Upreti Distributor</a>
    </div>
    <div class="search__data">
        <form action="Dataview.php" method="POST">
        <input type="text" placeholder="Enter PhoneNumber" name="userdata"/>
        <input type="submit" value="search" id="search_ind"/>
        </form>  
         
    </div>
    <div class="view__data">
        <form action="fulldata.php" method="POST">
        <input type="submit" value="View All Credits" id="search__ind"/>
        </form>   
    </div>
</div>
