<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       

    </head>
    <body>
        <?php 
        include_once 'database.php';
      ?>
      <!--The site logo and buttons for home and back-->
          <div class="logo">DØ<span style="color: rgb(248, 232, 8);">Z</span>E</div>
        
        <div class="navigation-boxItems">
             <a class="navigation-buttons" href="TextIndex.php" class="button"> Home</a>
            <a class="navigation-buttons" href="IndTextbottom.php" class="button"> Back</a>
        </div>  

            <!--The items from the database and the contentbox-->
          <div class="Itemcontent-box">  
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
        <script src="real.js"></script>
</body>