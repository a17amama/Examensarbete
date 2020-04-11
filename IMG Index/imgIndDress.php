<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="rstylesheet.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       

    </head>
    <body>
        <?php 
        include_once 'database.php';
      ?>
      <!--Menu, with dropdowns and images in menu-->
        <div class="navbar" class="nav"> 
          <div class="logo">DØ<span style="color: rgb(248, 232, 8);">Z</span>E</div>
        </div>
        <div class="navigation-box">
            <a class="navigation-buttons" href="#" class="button"> <img class="nav-icon" src="house.png" alt="home"> Home</a>
            
        </div>  
            <!--Images of menu navigation inside a contentbox (centered)-->
          <div class="content-box">  
            <?php
            $sql = "SELECT * FROM dress;";
            
            $result = mysqli_query($conn, $sql);  
          
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<div class="item" onclick="color(event)">';
              echo '<img src="'. $row['path'] . '" />';
              echo $row['namn'];
              echo '</div>';
            }
          ?>
 
          </div>
         
          <!--License ball at bottom right-->
          <div id="ball">
            <p id="licenses">Licenses</p>
        </div>  
          
          
       

</body>