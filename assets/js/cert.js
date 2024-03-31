
window.addEventListener('message', function(event) {
    for (var key in event.data) {
    if (key.match('var') || key.match('num') || key.match('day') || key.match('sup') || key.match('month') || key.match('year')){
        // document.getElementById(key).innerText= event.data[key] || '';
        console.log(key);
    }    //else { document.getElementById(key).innerText= event.data[key] || '';}
    }
//    
});