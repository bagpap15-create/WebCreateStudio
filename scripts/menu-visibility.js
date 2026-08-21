function menuVis() {
	let menu = document.querySelector(".main-menu-phone ul");
	let container = document.querySelector(".container");
	if (menu.style.display == "") {
		menu.style.display = "none";
	}
	if (menu.style.display != "none") {
		menu.style.display = "none";
	} else {
		menu.style.display = "flex";
		menu.style.flexDirection = "column";
	}
} 

function reportWindowSize() {
	if (window.innerWidth > 768) {
		document.querySelector(".main-menu-phone ul").style.display = "none";
	}	
}

window.onresize = reportWindowSize;