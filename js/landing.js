window.onload = function() {
	const IMAGENES = ['./img/image-big.png', './img/image-big2.png', './img/image-big3.jpg'];
	let posicionActual = 0;
	let $botonRetroceder = document.querySelector('#retroceder');
	let $botonAvanzar = document.querySelector('#avanzar');
	let $imagen = document.querySelector('#imagen');
	function pasarFoto() {
		if (posicionActual >= IMAGENES.length - 1) {
			posicionActual = 0;
		} else {
			posicionActual++;
		}
		renderizarImagen();
	}
	function retrocederFoto() {
		if (posicionActual <= 0) {
			posicionActual = IMAGENES.length - 1;
		} else {
			posicionActual--;
		}
		renderizarImagen();
	}
	function renderizarImagen() {
		$imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
	}
	$botonAvanzar.addEventListener('click', pasarFoto);
	$botonRetroceder.addEventListener('click', retrocederFoto);
	renderizarImagen();
};
function openFunction() {
	document.getElementById('menu').style.opacity = '100';
	document.getElementById('menu').style.height = '100px';
	document.getElementById('menu').style.opacity = '1';
	document.getElementById('menu').style.visibility = 'visible';
}
function closeFunction() {
	document.getElementById('menu').style.opacity = '0';
	document.getElementById('menu').style.height = '0px';
	document.getElementById('menu').style.opacity = '0';
	document.getElementById('menu').style.visibility = 'hidden';
}
window.onscroll = function() {
	scrollFunction();
};
function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById('to-top').style.display = 'block';
	} else {
		document.getElementById('to-top').style.display = 'none';
	}
}
function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}
