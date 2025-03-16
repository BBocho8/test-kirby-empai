// assets/js/faq-accordion.js
document.addEventListener("DOMContentLoaded", () => {
	for (const button of document.querySelectorAll(".border-b button")) {
		button.addEventListener("click", () => {
			const isExpanded = button.getAttribute("aria-expanded") === "true";
			button.setAttribute("aria-expanded", !isExpanded);
			button.querySelector("svg").classList.toggle("rotate-180", !isExpanded);
			button.nextElementSibling.classList.toggle("hidden", isExpanded);
		});
	}
});
