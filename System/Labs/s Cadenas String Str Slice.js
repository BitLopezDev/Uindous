//js Cadenas String Str Slice//
//Buscar subcadenas con el método indexOf()
//
//pacoarce@gmail.com
//        @
//012345678901234567
//-1 significa que no se encontro la subcadena
var email = "pacoarce@gmail.com";
var usuario = "PacoArce@Gmail.com";
var pos = -1;
var usuarioMail = "";
var servicioMail = "";

if(email.length<10){
	alert("Tu mail es muy corto");
} else {
	pos = email.indexOf("@");
	if(pos==-1){
		alert("Tu mail no tiene  arroba, es incorrecto!!!");
	} else {
		pos = email.indexOf(".");
		if(pos==-1){
			alert("Tu mail no tiene  punto, es incorrecto!!!");
		} else {
			pos = email.indexOf("@");
			servicioMail = email.slice(pos+1);
			usuarioMail = email.substr(0,pos);
			if(email.toLowerCase()!=usuario.toLowerCase()){
				alert("Acceso denegado");
			} else {
				//alert("La arroba esta en el caracter número: "+pos);
				alert("Tu servicio de mail es: "+servicioMail+"\n\nTu usuario es: "+usuarioMail);
			}
		}
	}
}