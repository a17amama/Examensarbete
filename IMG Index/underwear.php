<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="stylesheet.css" <link rel="stylesheet" type="text/css" href="stylesheet.css">
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
            <a class="navigation-buttons" href="index.php" class="button"> <img class="nav-icon" src="house.png" alt="home"> Home</a>
            <a class="navigation-buttons" href="index.php" class="button"> <img class="nav-icon" src="arrow.png" alt="back"> Back</a>
        </div>  
            <!--Images of menu navigation inside a contentbox (centered)-->
          <div class="content-box">          
             <table>
                <tr>
                    <td><a href="underwearholder.php"><img class="menu-images" src="lingerie.svg"></a></td>
                    <td><a href="underwearholder.php"><img class="menu-images" src="bras.svg"></a></td>
                    <td><a href="underwearholder.php"><img class="menu-images" src="boxers.svg"></a></td>
                                  
                </tr>
               
 
             </table> 
            </div>
         
          <!--License ball at bottom right-->
          <div id="ball">
            <p id="licenses">Licenses</p>
        </div>  
          
        <script src="real.js"></script>
       

</body>