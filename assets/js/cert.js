
window.addEventListener('message', function(event) {
    //  console.log(event.data.num0);
    //  this.document.getElementById("num0").innerText = event.data.num0;
    for (var key in event.data) {
    if (key.match('var') || key.match('num') || key.match('day') || key.match('sup') || key.match('month') || key.match('year')){
        document.getElementById(key).innerText= event.data[key] || '';
    }    else { document.getElementById(key).innerText= event.data[key] || '';}


    // if (key.match('date')){

        
    // }
    
    }
//    
});