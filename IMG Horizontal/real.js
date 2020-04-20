/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function firstDropdown(dropdowns) {
    const myDropdownList = document.getElementsByClassName("dropdown-content");

    var el = document.getElementById(dropdowns);
    if(el.classList.contains('show')) {
      el.classList.remove('show');
      return;
    }

    for( let i=0; i < myDropdownList.length;i++ ) {
     const item = myDropdownList[i];
      if (item.classList.contains("show")) {
        item.classList.remove("show");
      }
    }

    el.classList.toggle("show");
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
    
  function color(event) {
    event.target.style.opacity = "0.5";  
    console.log("hi", event);
  }
  
  let LogElements = document.getElementsByClassName("log");
  
  for(let i = 0; i < LogElements.length; i++){
    let item = LogElements[i];
    item.addEventListener("click", LogValues);
  }
  
  function LogValues(event) {
    console.log(event);
    let currentDate = new Date();
    //all links contains href
    let element = event.target.href;
  
    console.log(element, currentDate);
  
  }
  