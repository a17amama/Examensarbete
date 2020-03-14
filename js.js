/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function firstDropdown(dropdowns) {
 
    document.getElementById(dropdowns).classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.addEventListener ("click", function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementsByClassName("dropdown-content");
      if (myDropdown.classList.contains("show")) {
        myDropdown.classList.remove("show");
      }
    }
  });

  console.log(contains);

