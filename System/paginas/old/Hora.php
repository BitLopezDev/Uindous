<?php
session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:../../System32/Nosesion.php");
	exit;
}


?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Dynamic HTML - demostración práctica  </title>

<script language="JavaScript">

function TimeOutfunc() {
	timeout = window.setTimeout("TimeOutfunc()", 1000);
	var today = new Date();
	document.forms[0].elements[0].value = today.toString();
}

</script>
	
</head>


<body bgcolor="White" onLoad="timeout = setTimeout(&#39;TimeOutfunc();&#39;,1000);">


<form>
<input type="text" name="disp" value="" size="40">
</form>




</body></html>