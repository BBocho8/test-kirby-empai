document.addEventListener("DOMContentLoaded", () => {
	const burgerMenu = document.querySelector(".burger-menu");
	const navbarMenu = document.querySelector(".navbar-menu");

	burgerMenu.addEventListener("click", () => {
		navbarMenu.classList.toggle("active");
	});
});
