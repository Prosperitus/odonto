//Validate birthdate


function isValidDate(dateString)
{
    // First check for the pattern
    if(!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
        return false;

    // Parse the date parts to integers
    var parts = dateString.split("/");
    var day = parseInt(parts[0], 10);
    var month = parseInt(parts[1], 10);
    var year = parseInt(parts[2], 10);

    // Check the ranges of month and year
    if(year < 1000 || year > 3000 || month == 0 || month > 12)
        return false;

    var monthLength = [ 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31 ];

    // Adjust for leap years
    if(year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
        monthLength[1] = 29;

    // Check the range of the day
    return day > 0 && day <= monthLength[month - 1];
};



//Name validation

function validateName($name) {
    
    if($name ==""){
        alert("EspaÃ§o precisa ser preenchido");
        return false;
    } else if (!/^[a-zA-Z]*$/.test($name)) {
            alert("O nome contem caracteres invalidos");
        return false;
    } else {
        alert("Tudo certo");
            return true;
    }
}
function validateSurname() {
    
    if($surname ==""){
        alert("EspaÃ§o precisa ser preenchido");
        return false;
    } else if (!/^[a-zA-Z]*$/.test($surname)) {
            alert("O nome contem caracteres invalidos");
        return false;
    } else {
        alert("Tudo certo");
            return true;
    }
}

//Password Validation


function checkForm(form)
{
	if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
	if(form.pwd1.value.length < 6) {
		alert("Erro: A senha deve conter pelo menos 6 caracteres!");
		form.pwd1.focus();
		return false;
	}
	if(form.pwd1.value == form.name.value) {
		alert("Erro: A senha deve ser diferente do nome de usuario!");
		form.pwd1.focus();
		return false;
      	}
      	var re = /[0-9]/;
      	if(!re.test(form.pwd1.value)) {
		alert("Erro: A senha deve conter pelo menos um numero (0-9)!");
		form.pwd1.focus();
		return false;
      	}
      	var re = /[a-z]/;
      	if(!re.test(form.pwd1.value)) {
		alert("Erro: A senha deve conter pelo menos uma letra minuscula (a-z)!");
		form.pwd1.focus();
		return false;
	}
      	var re = /[A-Z]/;
      	if(!re.test(form.pwd1.value)) {
		alert("Erro: A senha deve conter pelo menos uma letra maiuscula (A-Z)!");
		form.pwd1.focus();
		return false;
      	}
    	} else {
	      alert("Erro: Verifique se introduziu e/ou confirmou a sua palavra-passe!");
	      form.pwd1.focus();
	      return false;
	}
	
	alert("Cadastro realizado com sucesso!");
	return true;
}



