function SignupValidate() {
	let txtUser = document.getElementById('user');
	let validUser = document.getElementById('userValid');

	let txtPass1 = document.getElementById('pass1');
	let txtPass2 = document.getElementById('pass2');
	let validPass = document.getElementById('passValid');
	let validPass2 = document.getElementById('passValid2');
	let validPass3 = document.getElementById('passValid3');

	let txtCorreo = document.getElementById('email');
	let validEmail = document.getElementById('emailValid');

	if (txtPass1.value != txtPass2.value) {
        event.preventDefault();
		validPass.style.display = 'block';
		txtPass1.style.border = 'solid 1px rgb(185, 59, 59)';
		txtPass2.style.border = 'solid 1px rgb(185, 59, 59)';
		return false;
	} else {
		txtPass1.style.border = 'solid 1px #11977D';
		txtPass2.style.border = 'solid 1px #11977D';
		validPass.style.display = 'none';
	}

	if (txtPass1.value.length == 0) {
        event.preventDefault();
		validPass2.style.display = 'block';
		txtPass1.style.border = 'solid 1px rgb(185, 59, 59)';
		return false;
	} else {
		txtPass1.style.border = 'solid 1px #11977D';
		validPass2.style.display = 'none';
	}

	if (txtPass2.value.length == 0) {
        event.preventDefault();
		validPass3.style.display = 'block';
		txtPass2.style.border = 'solid 1px rgb(185, 59, 59)';
		return false;
	} else {
		txtPass2.style.border = 'solid 1px #11977D';
		validPass3.style.display = 'none';
	}

    if (txtUser.value == null || txtUser.value.length == 0) {
        event.preventDefault();
		validUser.style.display = 'block';
		txtUser.style.border = 'solid 1px rgb(185, 59, 59)';
		return false;
	} else {
		txtUser.style.border = 'solid 1px #11977D';
		validUser.style.display = 'none';
	}

	if (!/\S+@\S+\.\S+/.test(txtCorreo.value)) {
        event.preventDefault();
		validEmail.style.display = 'block';
		txtCorreo.style.border = 'solid 1px rgb(185, 59, 59)';
		return false;
	} else {
		txtCorreo.style.border = 'solid 1px #11977D';
        validEmail.style.display = 'none';
        
	}

	return true;
}
