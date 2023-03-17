
	const navbarHover = (e) => {
		const parent = e;

		// Mengambil child nodes
		const childNodes = parent.childNodes;

		// Mengakses elemen anak pertama
		const firstChild = parent.childNodes[1];
		// Mengakses elemen anak terakhir
		const lastChild = parent.childNodes[childNodes.length - 2];
		const icon = firstChild.childNodes[1];
		lastChild.style.display="block";
		// icon.setAttribute("width", "30px");
		// icon.setAttribute("height", "30px");
		console.log(icon);
	}
	const navbarHoverLeave = (e) => {
		const parent = e;

		// Mengambil child nodes
		const childNodes = parent.childNodes;

		// Mengakses elemen anak pertama
		const firstChild = parent.childNodes[1];

		// Mengakses elemen anak terakhir
		const lastChild = parent.childNodes[childNodes.length - 2];
		lastChild.style.display="none";
		const icon = firstChild.childNodes[1];
		icon.setAttribute("width", "22px");
		icon.setAttribute("height", "22px");
	}

	const hideNav = () => {
		document.querySelector('nav').style.left="0px";
		document.querySelector('nav').style.justifyContent="flex-start";
		document.querySelector('.navList').style.display="none";
		document.querySelector('.btnHideNav').style.display="none";
		document.querySelector('.btnDisplaysNav').style.display="block";
	}
	const displaysNav = () => {
		document.querySelector('nav').style.left="30%";
		document.querySelector('nav').style.width="40%";
		document.querySelector('nav').style.justifyContent="center";
		document.querySelector('.navList').style.display="flex";
		document.querySelector('.btnHideNav').style.display="block";
		document.querySelector('.btnDisplaysNav').style.display="none";
	}