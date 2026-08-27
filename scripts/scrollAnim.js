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
	const header2 = document.querySelectorAll(".container main .header-site");
	header2.forEach(h2=>observer.observe(h2));
	const contentSites = document.querySelectorAll(".container main .content-site");
	contentSites.forEach(cs=>observer.observe(cs));
	const paragraphs = document.querySelectorAll(".container main p");
	paragraphs.forEach(p => observer.observe(p));
	const lists = document.querySelectorAll(".container main .list-style");
	lists.forEach(l => observer.observe(l));
	const imgThumbs = document.querySelectorAll(".container main img.article-thumb");
	imgThumbs.forEach(imgThumb => observer.observe(imgThumb));
	const imgSites = document.querySelectorAll(".container main img.img-site");
	imgSites.forEach(imgSite => observer.observe(imgSite));
});
