// assets/js/language-switcher.js
document.addEventListener("click", (event) => {
	const languageButton = document.querySelector(".language-button");
	const languageDropdown = document.querySelector(".language-dropdown");

	if (languageButton.contains(event.target)) {
		// Toggle dropdown visibility
		languageDropdown.style.display =
			languageDropdown.style.display === "block" ? "none" : "block";
	} else {
		// Close dropdown if clicking outside
		languageDropdown.style.display = "none";
	}
});
