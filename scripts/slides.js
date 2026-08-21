const slides = document.querySelectorAll(".slide-content .slide");
const menuSlides = document.querySelectorAll(".menu-slides .slide");
let currentIndex = 0;
const slideIntervalTime = 5000;
let autoSlideInterval;

function showSlide(index) {
	slides[currentIndex].classList.remove("active");
	menuSlides[currentIndex].classList.remove("active");
	currentIndex = index;
	slides[currentIndex].classList.add("active");
	menuSlides[currentIndex].classList.add("active");
}

function prevSlide() {
	let index = currentIndex - 1;
	if (currentIndex > 0) {
		showSlide(currentIndex - 1);
	} else {
		showSlide(slides.length - 1);
	}
	
}

function nextSlide() {
	if (currentIndex < slides.length-1) {
		showSlide(currentIndex + 1);
	} else {
		showSlide(0);
	}
}

function currentSlide(index) {
	showSlide(index);
	resetAutoSlide();
}

function startAutoSlide() {
	autoSlideInterval = setInterval(nextSlide, slideIntervalTime);
}

function resetAutoSlide() {
	clearInterval(autoSlideInterval);
	startAutoSlide();
}

document.querySelectorAll(".btn-prev").forEach(button => {
	button.addEventListener("click", () => {
		prevSlide();
		resetAutoSlide();
	});
});

document.querySelectorAll(".btn-next").forEach(button => {
	button.addEventListener("click", () => {
		nextSlide();
		resetAutoSlide();
	});
});

startAutoSlide();