document.addEventListener("DOMContentLoaded", () => {
	const leftDiv = document.getElementById("left-div");
	const rightDiv = document.getElementById("right-div");

	// Set up Intersection Observer
	const observerOptions = {
		root: null, // Use the viewport as the root
		rootMargin: "0px", // No margin
		threshold: 0.5, // Trigger when 50% of the element is visible
	};

	const observer = new IntersectionObserver((entries, observer) => {
		for (const entry of entries) {
			if (entry.isIntersecting) {
				// Start the animation when the div is in view
				if (entry.target === leftDiv) {
					leftDiv.style.transform = "translateX(0)";
				} else if (entry.target === rightDiv) {
					rightDiv.style.transform = "translateX(0)";
				}
				// Stop observing after the animation starts
				observer.unobserve(entry.target);
			}
		}
	}, observerOptions);

	// Observe both divs
	observer.observe(leftDiv);
	observer.observe(rightDiv);
});
