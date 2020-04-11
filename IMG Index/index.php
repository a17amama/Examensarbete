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
      <!--Menu, with dropdowns and images in menu-->
        <div class="navbar" class="nav"> 
          <div class="logo">DØ<span style="color: rgb(248, 232, 8);">Z</span>E</div>
        </div>
        <div class="navigation-box">
            <a class="navigation-buttons" href="#" class="button"> <img class="nav-icon" src="house.png" alt="home"> Home</a>
            
        </div>  
            <!--Images of menu navigation inside a contentbox (centered)-->
          <div class="content-box">          
             <table>
                <tr>
                    <td><a href="bottom.php"><img class="menu-images" src="bottoms.svg"></a></td>
                    <td><a href="top.php"><img class="menu-images" src="57950.svg"></a></td>
                    <td><a href="swimwear.php"><img class="menu-images" src="bikini.svg"></a></td>
                    <td><a href="underwear.php"><img class="menu-images" src="lingerie.svg"></a></td>                
                </tr>
                <tr>
                  <td><a href="shoes.php"><img class="menu-images" src="shoes.svg"></a></td>    
                    <td><a href="accessories.php"><img class="menu-images" src="necklace.svg"></a></td>    
                    <td><a href="dress.php"><img class="menu-images" src="dress.svg"></a></td>    
                </tr>
 
             </table> 
            </div>
         
          <!--License ball at bottom right-->
          <div id="ball">
            <p id="licenses">Licenses</p>
        </div>  
          
          
        <script src="real.js"></script>

</body>