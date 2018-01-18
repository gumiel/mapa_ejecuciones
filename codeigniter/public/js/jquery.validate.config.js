$.extend( $.validator.messages, {
	required: "Este campo es obligatorio.",
	remote: "Por favor, rellena este campo.",
	email: "Por favor, escribe una dirección de correo válida",
	url: "Por favor, escribe una URL válida.",
	date: "Por favor, escribe una fecha válida.",
	dateISO: "Por favor, escribe una fecha (ISO) válida.",
	number: "Por favor, escribe un número entero válido.",
	digits: "Por favor, escribe sólo dígitos.",
	creditcard: "Por favor, escribe un número de tarjeta válido.",
	equalTo: "Por favor, escribe el mismo valor de nuevo.",
	accept: "Por favor, escribe un valor con una extensión aceptada.",
	maxlength: jQuery.validator.format("Por favor, no escribas más de {0} caracteres."),
	minlength: jQuery.validator.format("Por favor, no escribas menos de {0} caracteres."),
	rangelength: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
	range: jQuery.validator.format("Por favor, escribe un valor entre {0} y {1}."),
	max: jQuery.validator.format("Por favor, escribe un valor menor o igual a {0}."),
	min: jQuery.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});

$.validator.addMethod('latCoord', function(value, element) {
  console.log(this.optional(element))
return this.optional(element) ||
  value.length >= 4 && /^(?=.)-?((8[0-5]?)|([0-7]?[0-9]))?(?:\.[0-9]{1,20})?$/.test(value);
}, 'Por favor, escribe un valor de latitud válido.')

$.validator.addMethod('longCoord', function(value, element) {
  console.log(this.optional(element))
return this.optional(element) ||
  value.length >= 4 && /^(?=.)-?((0?[8-9][0-9])|180|([0-1]?[0-7]?[0-9]))?(?:\.[0-9]{1,20})?$/.test(value);
}, 'Por favor, escribe un valor de longitud válido.')