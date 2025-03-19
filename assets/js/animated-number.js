const animatedNumber = document.getElementById("animated-number");
let start = 0;
const targetNumber = 21;
const duration = 2000; // Animation duration in milliseconds
const increment = targetNumber / (duration / 16); // 60 FPS

const animate = () => {
	start += increment;
	if (start < targetNumber) {
		animatedNumber.textContent = `+${Math.ceil(start)}%`;
		requestAnimationFrame(animate);
	} else {
		animatedNumber.textContent = `+${targetNumber}%`;
	}
};

// Set up Intersection Observer
const observerOptions = {
	root: null, // Use the viewport as the root
	rootMargin: "0px", // No margin
	threshold: 0.5, // Trigger when 50% of the element is visible
};

const observer = new IntersectionObserver((entries, observer) => {
	for (const entry of entries) {
		if (entry.isIntersecting) {
			// Start the animation when the element is in view
			animate();
			// Stop observing after the animation starts
			observer.unobserve(entry.target);
		}
	}
}, observerOptions);

// Observe the div containing the animated number
const targetDiv = animatedNumber.closest("div");
observer.observe(targetDiv);
