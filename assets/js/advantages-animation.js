document.addEventListener("DOMContentLoaded", () => {
	const leftBox = document.getElementById("left-box");
	const rightBox = document.getElementById("right-box");

	// Set up Intersection Observer
	const observerAdvantagesOptions = {
		root: null, // Use the viewport as the root
		rootMargin: "0px", // No margin
		threshold: 0.5, // Trigger when 50% of the element is visible
	};

	const observerAdvantages = new IntersectionObserver((entries, observer) => {
		for (const entry of entries) {
			if (entry.isIntersecting) {
				// Start the animation when the box is in view
				if (entry.target === leftBox) {
					leftBox.style.transform = "translateX(0)";
				} else if (entry.target === rightBox) {
					rightBox.style.transform = "translateX(0)";
				}
				// Stop observing after the animation starts
				observer.unobserve(entry.target);
			}
		}
	}, observerAdvantagesOptions);

	// Observe both boxes
	observerAdvantages.observe(leftBox);
	observerAdvantages.observe(rightBox);
});
