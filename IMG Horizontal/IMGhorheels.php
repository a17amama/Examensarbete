<!DOCTYPE html>
<html>
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
            <a class="menu-link" href="IMGhorIndex.php">Home </a>

            <div class="dropdown">
            <button class="dropbtn" onclick="firstDropdown('myDropdown')">Bottoms </button>
            <div class="dropdown-content" id="myDropdown">
              <a href="IMGhorfiller.php"><img class="dropdown-img" src="58103.svg"> Pants </a>
              <a href="IMGhorfiller.php"><img class="dropdown-img" src="shorts.svg"> Shorts </a>
              <a href="IMGhorskirts.php"><img class="dropdown-img" src="skirt.svg"> Skirts</a>
            </div>
            </div> 

            <div class="dropdown">
                <button class="dropbtn" onclick="firstDropdown('myDropdown2')"> Tops </button>
                <div class="dropdown-content" id="myDropdown2">
                  <a href="IMGhortshirts.php"><img class="dropdown-img" src="tshirt.svg">T-shirts</a>
                  <a href="IMGhorfiller.php"><img class="dropdown-img" src="tanktop.svg">Tank tops</a>
                  <a href="IMGhorhoodie.php"><img class="dropdown-img" src="hoodie.svg">Hoodie</a>
                  <a href="IMGhorfiller.php"><img class="dropdown-img" src="jacket.svg">Jacket</a>
                  <a href="IMGhorfiller.php"><img class="dropdown-img" src="coat.svg">Coat</a>
                </div>               
            </div> 

            <div class="dropdown">
              <button class="dropbtn" onclick="firstDropdown('myDropdown3')"> Swimwear </button>
              <div class="dropdown-content" id="myDropdown3">
                <a href="IMGhorfiller.php"><img class="dropdown-img" src="bikini.svg">Bikini</a>
                <a href="IMGhorfiller.php"><img class="dropdown-img" src="swimsuit.svg">Swimsuit</a>
                <a href="IMGhorfiller.php"><img class="dropdown-img" src="swimshorts.svg">Shorts</a>
              </div>               
          </div> 

          <div class="dropdown">
            <button class="dropbtn" onclick="firstDropdown('myDropdown4')"> Underwear </button>
            <div class="dropdown-content" id="myDropdown4">
              <a href="IMGhorfiller.php"><img class="dropdown-img" src="bra.svg">Bras</a>
              <a href="IMGhorfiller.php"><img class="dropdown-img" src="panties.svg">Panties</a>
              <a href="IMGhorfiller.php"><img class="dropdown-img" src="boxers.svg">Boxers</a>
            </div>               
        </div> 



        <div class="dropdown">
          <button class="dropbtn" onclick="firstDropdown('myDropdown5')"> Accessories </button>
          <div class="dropdown-content" id="myDropdown5">
            <a href="IMGhorbags.php"><img class="dropdown-img" src="purse.svg">Bags</a>
            <a href="IMGhorfiller.php"><img class="dropdown-img" src="jewlery.svg">Jewelry</a>
            <a href="IMGhorfiller.php"><img class="dropdown-img" src="hat.svg">Hats</a>
            <a href="IMGhorfiller.php"><img class="dropdown-img" src="glasses.svg">Glasses</a>           
          </div>               
      </div> 

      <div class="dropdown">
        <button class="dropbtn" onclick="firstDropdown('myDropdown6')"> Shoes </button>
        <div class="dropdown-content" id="myDropdown6">
          <a href="IMGhorfiller.php"><img class="dropdown-img" src="sneakers.svg">Sneakers</a>
          <a href="IMGhorheels.php"><img class="dropdown-img" src="heels.svg">Heels</a>
          <a href="IMGhorfiller.php"><img class="dropdown-img" src="sandals.svg">Sandals</a>
        </div>               
    </div> 

    <div class="dropdown">
      <button class="dropbtn" onclick="firstDropdown('myDropdown7')"> Overalls & Dresses </button>
      <div class="dropdown-content" id="myDropdown7">
        <a href="IMGhordress.php"><img class="dropdown-img" src="dress.svg">Dresses</a>
        <a href="IMGhorfiller.php"><img class="dropdown-img" src="overall.svg">Overalls</a>
      </div>    
            </div>
</div>
           <!--Images of items inside a contentbox (centered)-->
           <div class="content-box">
                <?php
                    $sql = "SELECT * FROM rheels;";
                    
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
</html>