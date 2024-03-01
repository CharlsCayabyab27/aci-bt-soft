window.addEventListener('message', function(event) {
    console.log("hello world!");
    var data = event.data;   
    document.getElementById('var1').innerHTML = data.var1;
    console.log(data.var1);
  
}
);