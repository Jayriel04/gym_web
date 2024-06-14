// document.getElementById("myForm").addEventListener("submit", function(event) {
//     event.preventDefault(); // Prevent default form submission

//     // Get form data
//     var firstName = document.getElementById("firstName").value;
//     var lastName = document.getElementById("lastName").value;
//     var email = document.getElementById("email").value;
//     var phoneNumber = document.getElementById("phoneNumber").value;
//     var address = document.getElementById("address").value;
//     var termsAndConditions = document.getElementById("termsAndConditions").checked;

//     // Create an AJAX request
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "../back-end/php/connect-DB.php", true);
//     xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

//     // Prepare the data to be sent
//     var data = "firstName=" + encodeURIComponent(firstName) +
//                 "&lastName=" + encodeURIComponent(lastName) +
//                 "&email=" + encodeURIComponent(email) +
//                 "&phoneNumber=" + encodeURIComponent(phoneNumber) +
//                 "&address=" + encodeURIComponent(address) +
//                 "&termsAndConditions=" + (termsAndConditions ? 1 : 0);

//     // Handle the AJAX response
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState === XMLHttpRequest.DONE) {
//             if (xhr.status === 200) {
//                 // Success message
//                 console.log(xhr.responseText);
//             } else {
//                 // Error message
//                 console.error(xhr.responseText);
//             }
//         }
//     };

//     // Send the AJAX request with the form data
//     xhr.send(data);
// });