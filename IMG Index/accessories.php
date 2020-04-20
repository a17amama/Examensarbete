<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
       

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
            <a class="navigation-buttons log" href="index.php" class="button"> <img class="nav-icon" src="house.png" alt="home"> Home</a>
            <a class="navigation-buttons log" href="index.php" class="button"> <img class="nav-icon" src="arrow.png" alt="back"> Back</a>
        </div>  
            <!--Images of menu navigation inside a contentbox (centered)-->
          <div class="content-box">          
             <table>
                <tr>
                    <td><a class="log" href="accessholder.php"><img class="menu-images" src="glasses.svg"></a></td>
                    <td><a class="log"  href="accessholder.php"><img class="menu-images" src="necklace.svg"></a></td>
                    <td><a class="log" href="accessholder.php"><img class="menu-images" src="hat.svg"></a></td>
                    <td><a class="log" href="imgIndBag.php"><img class="menu-images" src="purse.svg"></a></td>
                                  
                </tr>
               
 
             </table> 
            </div>
         
          <!--License ball at bottom right-->
          <div id="ball">
            <p id="licenses" class="log">Licenses</p>
        </div>  
          
        <script src="real.js"></script>
       

</body>