var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var output2 = document.getElementById("profit");

// output.innerHTML = slider.value; // Display the default slider value
var x = slider.value;
var y = Math.ceil(x/1000)*1000
var z = y * 0.3;
output.innerHTML = '$' + y;
output2.innerHTML = '$' + z + ' Monthly';

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    var x = this.value;
    var y = Math.ceil(x/1000)*1000;
    var z = y * 0.3;
    output.innerHTML = '$' + y;
    output2.innerHTML = '$' + z + ' Monthly'; 
} 