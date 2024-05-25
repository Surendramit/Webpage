// Function to open the popup
function openPopup() {
    document.getElementById("popupContainer").style.display = "block";
  }
  
  // Function to close the popup
  function closePopup() {
    document.getElementById("popupContainer").style.display = "none";
  }
  
  // Attach click event listener to the button
  document.getElementById("openPopupBtn").addEventListener("click", openPopup);

  document.getElementById("btn-close-listener").addEventListener("click",closePopup);
  
  // Close the popup when the user clicks outside the popup content
  window.addEventListener("click", function (event) {
    if (event.target === document.getElementById("popupContainer")) {
      closePopup();
    }
  });
  
 