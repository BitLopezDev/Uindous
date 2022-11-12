//
//Buscar subcadenas con el método indexOf()
//
//pacoarce@gmail.com
//        @
//012345678901234567
//-1 significa que no se encontro la subcadena
var email = "pacoarce@gmail.com";
var usuario = "PacoArce@Gmail.com";
var pos = -1;
var invalidos = " ,/()[]{}ñÑáéíóú:;";
var errores = 0;

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
			for(i=0; i<invalidos.length; i++){
				c = invalidos.charAt(i);
				if(email.indexOf(c)!=-1){
					errores++;
				}
			}
			if(errores>0){
				alert("Tu mail tiene caracteres especiales no aceptados");
			} else {
				pos = email.indexOf("@");
				servicioMail = email.slice(pos+1);
				//usuarioMail = email.substr(0,pos);
				usuarioMail = email.substring(0,pos);
				if(email.toLowerCase()!=usuario.toLowerCase()){
					alert("Acceso denegado");
				} else {
					alert("Tu servicio de mail es: "+servicioMail+"\n\nTu suario es: "+usuarioMail);
				}
			}
		}
	}
}