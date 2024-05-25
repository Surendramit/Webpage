// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

function w3_close() {
  mySidebar.style.display = "none";
}





// JS For Modal -> Get Estimate

const modal = document.querySelector(".modal");
const overlay = document.querySelector(".overlay");

//   Modal open function
const openModal = () => {
  console.log("Modal is Open");
  modal.classList.add("active");
  overlay.classList.add("overlayactive");
};

// Modal close function
const closeModal = () => {
  modal.classList.remove("active");
  overlay.classList.remove("overlayactive");
};


// JS For Modal -> Get Estimate

//  End of modal Code 




// Partners Slide
$(document).ready(function () {
  $('.customer-logos').slick({
    slidesToShow: 3,
    slidesToScroll: 2,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: false,
    pauseOnHover: true,
  });
});



  




function handleScreenSizeChange(mediaQuery) {
  if (mediaQuery.matches) {
    $(document).ready(function () {
      $('.customer-logos-1').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        autoplay: false,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        pauseOnHover: true,
      });
    });
  } else {
    $(document).ready(function () {
      $('.customer-logos-1').slick({
        slidesToShow: 4,
        slidesToScroll:3,
        autoplay: false,
        autoplaySpeed: 4000,
        arrows: false,
        dots: false,
        pauseOnHover: true,
      });
    });
  }
}

function setupResponsiveCode() {
  const mediaQuery = window.matchMedia('(max-width: 850px)');
  
  // Initial check
  handleScreenSizeChange(mediaQuery);

  // Listen for screen size changes
  mediaQuery.addEventListener('change', function (event) {
    handleScreenSizeChange(event.target);
  });
}

// Call the setup function
setupResponsiveCode();




// JS for FAQ Accordion

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}






