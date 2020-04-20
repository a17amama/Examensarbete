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
    event.preventDefault();

    console.log(event.currentTarget);
    //all links contains href
    var targetUrl = event.currentTarget.href;
    var itemName = event.currentTarget.innerText;

    sendAjaxRequest(itemName, targetUrl);
  }

  function sendAjaxRequest(_name, _url) {
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "datalog.php", true); 
    xhttp.setRequestHeader("Content-Type", "application/json");
    xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
         // Response
         console.log(this.responseText);
       }
    };

    var current_datetime = new Date()
    var formatted_date = current_datetime.getFullYear() + "-" + (current_datetime.getMonth() + 1) + "-" + current_datetime.getDate() + " " + current_datetime.getHours() + ":" + current_datetime.getMinutes() + ":" + current_datetime.getSeconds() 

    var data = {name: _name,datum: formatted_date,url: _url};
    
    xhttp.send(JSON.stringify(data));
  }
  