window.addEventListener('message', function(event) {
    for (var key in event.data) {
   document.getElementById(key).innerText= event.data[key] || '';}
   console.log(event.data[key]+" cert.js");

});