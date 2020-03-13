/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function firstDropdown() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.addEventListener("click", function(e) {
    if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
    }
  });

  function secondDropdown() {
    document.getElementById("myDropdown2").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.addEventListener("onclick", function(hallo) {
    if (!hallo.target.matches('.dropbtn')) {
    var myDropdown2 = document.getElementById("myDropdown2");
      if (myDropdown2.classList.contains('show')) {
        myDropdown2.classList.remove('show');
      }
    }
  });