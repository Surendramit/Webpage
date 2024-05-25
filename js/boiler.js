const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const sliderIndicators = document.querySelector('.slider-indicators');
const sliderBtnLeft = document.querySelector('.slider-btn-left');
const sliderBtnRight = document.querySelector('.slider-btn-right');
let currentSlide = 0;
let intervalId;

function init() {
  // Set slide width based on parent slider width
  const slideWidth = slider.offsetWidth;
  slides.forEach(slide => {
    slide.style.width = `${slideWidth}px`;
  });

  // Create indicators for each slide
  for (let i = 0; i < slides.length; i++) {
    const indicator = document.createElement('li');
    indicator.classList.add('slider-indicator');
    indicator.addEventListener('click', () => {
      currentSlide = i;
      moveSlider();
      setActive();
    });
    sliderIndicators.appendChild(indicator);
  }

  setActive();
}

function moveSlider() {
  const slideWidth = slider.offsetWidth;
  slider.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
  setActive();
}

function setActive() {
  const indicators = document.querySelectorAll('.slider-indicator');
  indicators.forEach((indicator, index) => {
    if (index === currentSlide) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
}

function slideLeft() {
  if (currentSlide > 0) {
    currentSlide--;
  } else {
    currentSlide = slides.length - 1;
  }
  moveSlider();
}

function slideRight() {
  if (currentSlide < slides.length - 1) {
    currentSlide++;
  } else {
    currentSlide = 0;
  }
  moveSlider();
}

sliderBtnLeft.addEventListener('click', slideLeft);
sliderBtnRight.addEventListener('click', slideRight);

init();

function startAutoRun() {
  intervalId = setInterval(() => {
    slideRight();
  }, 5000);
}

function stopAutoRun() {
  clearInterval(intervalId);
}

startAutoRun();

slider.addEventListener('mouseenter', () => {
  stopAutoRun();
});

slider.addEventListener('mouseleave', () => {
  startAutoRun();
});




