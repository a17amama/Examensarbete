/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function firstDropdown(dropdowns) {
  const myDropdownList = document.getElementsByClassName("dropdown-content");
  for( let i=0; i < myDropdownList.length;i++ ) {
   const item = myDropdownList[i];
    if (item.classList.contains("show")) {
      item.classList.remove("show");
    }
  }
    document.getElementById(dropdowns).classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
  window.addEventListener ("click", function(e) {
    if (!e.target.matches('.dropbtn')) {
    const myDropdownList = document.getElementsByClassName("dropdown-content");
    for( let i=0; i < myDropdownList.length;i++ ) {
     const item = myDropdownList[i];
      if (item.classList.contains("show")) {
        item.classList.remove("show");
      }
    }
  }});