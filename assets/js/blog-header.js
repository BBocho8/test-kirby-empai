document.addEventListener("DOMContentLoaded", () => {
	const bullets = document.querySelectorAll("#post-bullets span");
	const postImage = document.getElementById("post-image");
	const postCategory = document.querySelector(".flex.space-x-2 span");
	const postTitle = document.querySelector("h2");
	const postLink = document.querySelector("a");
	const postsData = document.querySelectorAll("#posts-data div");

	for (const bullet of bullets) {
		bullet.addEventListener("click", function () {
			const index = this.getAttribute("data-index");

			// Update bullet colors
			for (const b of bullets) {
				b.classList.remove("bg-primary");
			}
			for (const b of bullets) {
				b.classList.add("bg-gray-500");
			}
			this.classList.remove("bg-gray-500");
			this.classList.add("bg-primary");

			// Find the selected post
			const selectedPost = Array.from(postsData).find(
				(post) => post.getAttribute("data-index") === index,
			);

			if (selectedPost) {
				postCategory.textContent = selectedPost.getAttribute("data-category");
				postTitle.textContent = selectedPost.getAttribute("data-title");
				postImage.src = selectedPost.getAttribute("data-image");
				postLink.href = selectedPost.getAttribute("data-url");
			} else {
				console.error("Selected post not found!");
			}
		});
	}
});
