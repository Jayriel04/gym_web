// // Update navigation header
// function updateNavHeader(tabId) {
//     const navLinks = document.querySelectorAll('.nav-link');
  
//     for (let i = 0; i < navLinks.length; i++) {
//       if (navLinks[i].getAttribute('href') === `#${tabId}`) {
//         navLinks[i].classList.add('active');
//       } else {
//         navLinks[i].classList.remove('active');
//       }
//     }
//   }
  
//   // Call updateNavHeader when "Next" button is clicked
//   $('.btn-primary').click(function (event) {
//     event.preventDefault();
//     const targetTab = $(this).attr('data-target');
//     updateNavHeader(targetTab);
//     $(`a[href="${targetTab}"]`).tab('show');
//   });
  
//   // Call updateNavHeader when "Confirm" button is clicked
//   $('.btn-success').click(function (event) {
//     event.preventDefault();
//     const targetTab = $(this).attr('data-target');
//     updateNavHeader(targetTab);
//     $(`a[href="${targetTab}"]`).tab('show');
//   });

//   //navigate to next tab
//   function navigateToOffer() {
//     // Submit the form
//     document.getElementById("myForm").submit();

//     // Switch to the "offer" tab
//     document.getElementById("offer-tab").click();
//   }

//   function selectMembership(membershipType, price) {
//     // Store the membership data in a session
//     sessionStorage.setItem('membershipType', membershipType);
//     sessionStorage.setItem('price', price);
//   }