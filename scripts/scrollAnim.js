document.addEventListener("DOMContentLoaded", () => {
	const observer = new IntersectionObserver((entries, observer) => {
		entries.forEach(entry => {
			if (entry.isIntersecting) {
				entry.target.classList.add('animate');
				observer.unobserve(entry.target);
			}
		});
	}, {
		threshold: 0.15
	});
	const article = document.querySelectorAll("article");
	article.forEach(a => observer.observe(a));
	const h2 = document.querySelector(".container main .header-site");
	h2.forEach(h=>observer.observe(h));
});
