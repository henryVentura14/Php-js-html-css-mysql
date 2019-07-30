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
function validarFormulario() {
	let cmbSelector = document.getElementById('puesto').selectedIndex;
	let txtNombre = document.getElementById('nombre').value;
	let txtUser = document.getElementById('user').value;
	let txtEdad = document.getElementById('edad').value;
	let txtHijos = document.getElementById('hijos').value;
	let txtSalario = document.getElementById('salario').value;
	let txtFecha = document.getElementById('ingreso').value;
	let txtFecha2 = document.getElementById('retiro').value;
	let txtPass1 = document.getElementById('pass1').value;
	let txtPass2 = document.getElementById('pass2').value;
	let txtCorreo = document.getElementById('email').value;

	let numerico = /^\d*$/;

	if (txtPass1 != txtPass2) {
		alert('ERROR: Las contraseñas no coinciden');
		return false;
	}
	//Test campo obligatorio
	if (
		txtUser == null ||
		txtUser.length == 0 ||
		txtNombre == null ||
		txtNombre.length == 0 ||
		/^\s+$/.test(txtNombre) ||
		mumerico.test(txtNombre)
	) {
		alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
		return false;
	}
	//Test number
	if (txtEdad == null || txtEdad.length == 0 || isNaN(txtEdad) || !numerico.test(txtEdad)) {
		alert('ERROR: Debe ingresar una edad valida');
		return false;
	}
	if (txtHijos == null || txtHijos.length == 0 || isNaN(txtHijos) || !numerico.test(txtHijos)) {
		alert('ERROR: Debe ingresar una cantidad valida');
		return false;
	}
	if (txtSalario == null || txtSalario.length == 0 || isNaN(txtSalario) || !numerico.test(txtSalario)) {
		alert('ERROR: Debe ingresar un monto valido');
		return false;
	}
	//Test fecha
	if (!isNaN(txtFecha || txtFecha2)) {
		alert('ERROR: Debe elegir una fecha');
		return false;
	}
	if (!isNaN(txtFecha < txtFecha2)) {
		alert('ERROR: La fecha de ingreso debe ser menor a la fecha de retiro');
		return false;
	}
	//Test comboBox
	if (cmbSelector == null || cmbSelector == 0) {
		alert('ERROR: Debe seleccionar una opcion del select');
		return false;
	}
	if (!/\S+@\S+\.\S+/.test(txtCorreo)) {
		alert('ERROR: Debe escribir un correo válido');
		return false;
	}

	return true;
}
