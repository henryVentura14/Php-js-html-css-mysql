function validarFormulario() {
  var cmbSelector = document.getElementById('puesto').selectedIndex;
  var txtNombre = document.getElementById('nombre').value;
  var txtUser = document.getElementById('user').value;
  var txtEdad = document.getElementById('edad').value;
  var txtHijos = document.getElementById('hijos').value;
  var txtSalario = document.getElementById('salario').value;
  var txtFecha = document.getElementById('ingreso').value;
  var txtFecha2 = document.getElementById('retiro').value;
  var txtPass1 = document.getElementById('pass1').value;
  var txtPass2 = document.getElementById('pass2').value;
  var txtCorreo = document.getElementById('email').value;

  var numerico = /^\d*$/;

  if(txtPass1!=txtPass2){
	alert('ERROR: Las contraseñas no coinciden');
		return false;
  }
	//Test campo obligatorio
	if (txtUser == null || txtUser.length == 0 ||txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre) ||mumerico.test(txtNombre)) {
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
	if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
		alert('ERROR: Debe escribir un correo válido');
		return false;
	  }

	return true;
}