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
	const header2 = document.querySelector(".container main .header-site");
	header2.forEach(h2=>observer.observe(h2));
	const paragraphs = document.querySelector(".container main p");
	paragraphs.forEach(p => observer.observe(p));
});
