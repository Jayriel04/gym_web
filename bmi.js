// Get the Calculate Now button element
var calculateBtn = document.getElementById("calculateBtn");

// Attach an event listener to the button
calculateBtn.addEventListener("click", function() {
    // Get the weight and height input values
    var weight = parseFloat(document.getElementById("weightInput").value);
    var height = parseFloat(document.getElementById("heightInput").value);

    // Calculate BMI
    var bmi = weight / ((height / 100) * (height / 100));

    // Display the result
    alert("Your BMI is: " + bmi.toFixed(2));
});