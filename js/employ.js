function EmployValidate() {
	event.preventDefault();
	let cmbSelector = document.getElementById('puesto').selectedIndex;
	let txtNombre = document.getElementById('nombre').value;
	let txtEdad = document.getElementById('edad').value;
	let txtHijos = document.getElementById('hijos').value;
	let txtSalario = document.getElementById('salario').value;
	let txtFecha = document.getElementById('ingreso').value;
	let txtFecha2 = document.getElementById('retiro').value;
	let numerico = /^\d*$/;
	//Test campo obligatorio
	if (txtNombre == null || txtNombre.length == 0 || numerico.test(txtNombre) || numerico.test(txtNombre)) {
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
	return true;
}
