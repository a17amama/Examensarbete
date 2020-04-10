

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
            <a class="menu-link" href="#">Home </a>

            <div class="dropdown">
            <button class="dropbtn" onclick="firstDropdown('myDropdown')">Bottoms </button>
            <div class="dropdown-content" id="myDropdown">
              <a href="#" class="log"> Pants </a>
              <a href="#"> Shorts </a>
              <a href="#"> Skirts</a>
            </div>
            </div> 

            <div class="dropdown">
                <button class="dropbtn" onclick="firstDropdown('myDropdown2')"> Tops </button>
                <div class="dropdown-content" id="myDropdown2">
                  <a href="#">T-shirts</a>
                  <a href="#">Tank tops</a>
                  <a href="#">Hoodie</a>
                  <a href="#">Jacket</a>
                  <a href="#">Coat</a>
                </div>               
            </div> 

            <div class="dropdown">
              <button class="dropbtn" onclick="firstDropdown('myDropdown3')"> Swimwear </button>
              <div class="dropdown-content" id="myDropdown3">
                <a href="#">Bikini</a>
                <a href="#">Swimsuit</a>
                <a href="#">Shorts</a>
              </div>               
          </div> 

          <div class="dropdown">
            <button class="dropbtn" onclick="firstDropdown('myDropdown4')"> Underwear </button>
            <div class="dropdown-content" id="myDropdown4">
              <a href="#">Bras</a>
              <a href="#">Panties</a>
              <a href="#">Boxers</a>
            </div>               
          </div> 



        <div class="dropdown">
          <button class="dropbtn" onclick="firstDropdown('myDropdown5')"> Accessories </button>
          <div class="dropdown-content" id="myDropdown5">
            <a href="#">Purses</a>
            <a href="#">Jewelry</a>
            <a href="#">Hats</a>
            <a href="#">Glasses</a>           
          </div>               
        </div> 

        <div class="dropdown">
        <button class="dropbtn" onclick="firstDropdown('myDropdown6')"> Shoes </button>
        <div class="dropdown-content" id="myDropdown6">
          <a href="#">Sneakers</a>
          <a href="#">Heels</a>
          <a href="#">Sandals</a>
        </div>               
        </div> 

    <div class="dropdown">
      <button class="dropbtn" onclick="firstDropdown('myDropdown7')"> Overalls & Dresses </button>
      <div class="dropdown-content" id="myDropdown7">
        <a href="#">Dresses</a>
        <a href="#">Overalls</a>
      </div>               
  </div> 
</div>
           <!--Images of items inside a contentbox (centered)-->
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
          
          
       
        <script src="real.js"></script>
</body>
</html>