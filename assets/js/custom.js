$(function(){
	jQuery.extend(jQuery.validator.messages, {
		required: "Este campo é obrigatório.",
		remote: "Please fix this field.",
		email: "Use um e-mail válido.",
		url: "Use uma URL válida.",
		date: "Use uma data válida.",
		dateISO: "Please enter a valid date (ISO).",
		number: "Please enter a valid number.",
		digits: "Digite somente números.",
		creditcard: "Please enter a valid credit card number.",
		equalTo: "Digite o mesmo valor.",
		accept: "Please enter a value with a valid extension.",
		maxlength: jQuery.validator.format("Digite no máximo {0} caracteres."),
		minlength: jQuery.validator.format("Digite pelo menos {0} caracteres."),
		rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
		range: jQuery.validator.format("Digite um número entre {0} e {1}."),
		max: jQuery.validator.format("Utilize um número menor ou igual a {0}."),
		min: jQuery.validator.format("Utilize um número maior ou igual a {0}.")
	});
})


