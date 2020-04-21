

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
            <a class="menu-link log" href="Rindex.php">Home </a>

            <div class="dropdown">
            <button class="dropbtn log" onclick="firstDropdown('myDropdown')">Bottoms </button>
            <div class="dropdown-content" id="myDropdown">
              <a class="log" href="horTextHolder.php" class="log"> Pants </a>
              <a class="log" href="horTextHolder.php"> Shorts </a>
              <a class="log" href="horTextSkirt.php"> Skirts</a>
            </div>
            </div> 

            <div class="dropdown">
                <button class="dropbtn log" onclick="firstDropdown('myDropdown2')"> Tops </button>
                <div class="dropdown-content" id="myDropdown2">
                  <a class="log" href="horTextTshirt.php">T-shirts</a>
                  <a class="log" href="horTextHolder.php">Tank tops</a>
                  <a class="log" href="horTextHoodie.php">Hoodie</a>
                  <a class="log" href="horTextHolder.php">Jacket</a>
                  <a class="log" href="horTextHolder.php">Coat</a>
                </div>               
            </div> 

            <div class="dropdown">
              <button class="dropbtn log" onclick="firstDropdown('myDropdown3')"> Swimwear </button>
              <div class="dropdown-content" id="myDropdown3">
                <a class="log" href="horTextHolder.php">Bikini</a>
                <a class="log" href="horTextHolder.php">Swimsuit</a>
                <a class="log" href="horTextHolder.php">Shorts</a>
              </div>               
          </div> 

          <div class="dropdown">
            <button class="dropbtn log" onclick="firstDropdown('myDropdown4')"> Underwear </button>
            <div class="dropdown-content" id="myDropdown4">
              <a class="log" href="horTextHolder.php">Bras</a>
              <a class="log" href="horTextHolder.php">Panties</a>
              <a class="log" href="horTextHolder.php">Boxers</a>
            </div>               
          </div> 



        <div class="dropdown">
          <button class="dropbtn log" onclick="firstDropdown('myDropdown5')"> Accessories </button>
          <div class="dropdown-content" id="myDropdown5">
            <a class="log" href="horTextBag.php">Bags</a>
            <a class="log" href="horTextHolder.php">Jewelry</a>
            <a class="log" href="horTextHolder.php">Hats</a>
            <a class="log" href="horTextHolder.php">Glasses</a>           
          </div>               
        </div> 

        <div class="dropdown">
        <button class="dropbtn log" onclick="firstDropdown('myDropdown6')"> Shoes </button>
        <div class="dropdown-content" id="myDropdown6">
          <a class="log" href="horTextHolder.php">Sneakers</a>
          <a class="log" href="horTextHeels.php">Heels</a>
          <a class="log" href="horTextHolder.php">Sandals</a>
        </div>               
        </div> 

    <div class="dropdown">
      <button class="dropbtn log" onclick="firstDropdown('myDropdown7')"> Overalls & Dresses </button>
      <div class="dropdown-content" id="myDropdown7">
        <a class="log" href="horTextDress.php">Dresses</a>
        <a class="log" href="horTextHolder.php">Overalls</a>
      </div>               
  </div> 
</div>
           <!--Images of items inside a contentbox (centered)-->
           <div class="content-box">
            <?php
                    $sql = "SELECT * FROM rdress;";
                    
                    $result = mysqli_query($conn, $sql);  
                  
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<div class="item log" onclick="color(event)">';
                      echo '<img src="'. $row['path'] . '" />';
                      echo $row['namn'];
                      echo '</div>';
                    }
                  ?>
            
            </div>
          
          <!--License ball at bottom right-->
          <div id="ball">
            <p id="licenses" class="log">Licenses</p>
        </div>  
          
          
       
        <script src="real.js"></script>
</body>
</html>