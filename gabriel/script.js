function valida_cpf(field){
	var numeros, digitos, soma, i, resultado, digitos_iguais;
	digitos_iguais = 1;
	if (cpf.length < 11)
		alert('CPF Inválido');
	for (i = 0; i < cpf.length - 1; i++)
		if (cpf.charAt(i) != cpf.charAt(i + 1)){
			digitos_iguais = 0;
			break;
		}
		if (!digitos_iguais){
			numeros = cpf.substring(0,9);
			digitos = cpf.substring(9);
			soma = 0;
			for (i = 10; i > 1; i--)
			soma += numeros.charAt(10 - i) * i;
			resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
			if (resultado != digitos.charAt(0))
			alert('CPF Inválido');
			numeros = cpf.substring(0,10);
			soma = 0;
			for (i = 11; i > 1; i--)
			  soma += numeros.charAt(11 - i) * i;
			resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
			if (resultado != digitos.charAt(1))
		    alert('CPF Inválido');
			return true;
		}
	else
	alert('CPF Inválido');	
}

function validacaoEmail(field) {
	usuario=field.value.substring(0,field.value.indexOf("@"));
	dominio=field.value.substring(field.value.indexOf("@")+ 1, field.value.length);
	if((usuario.length >=1) && (dominio.length >=3) &&
	(usuario.search("@")==-1) && (dominio.search("@")==-1) &&
	(usuario.search(" ")==-1) && (dominio.search(" ")==-1) && (dominio.search(".")!=-1) && (dominio.indexOf(".") >=1) &&(dominio.lastIndexOf(".") < dominio.length - 1)){
	  return true;
	}
	else{
	  alert("E-mail invalido");
	}
  }