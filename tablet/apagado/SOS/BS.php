<?php
$archivo =fopen("../BootCount/BSCount.inf","a+");
   $linea=fgets($archivo);
   if($linea=="11"){echo('<script type/text="javascript" language="javascript">window.location="BSD.php"</script>');}else {
    fwrite($archivo,"1");
   }
fclose($archivo);
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8"/>
	<title>STOP: Error</title>
	<style type="text/css">
html{

	background-color: #08088A;
	color:#A4A4A4;
	font-size:2em;
	/*cursor:none;*/
	width:100%
	height:100%;
}


	</style>
	<script type="text/javascript">
		window.onload=function(){
setTimeout(function () {
                 location.href="../Restart.php"
                }, 40000);

		}


	</script>
</head>
<body>
A problem has been detected and Uindous has been shut down to prevent domage to the server.<br>
The problem seeems to be caused by the following file:MSIL/IRCbot
<br>
<strong>MANUALLY_INITIATED_CRASH</strong><br><br>
If this is the first time you've seen this stop error screen, restart Uindous. <br>
If problems continue, disable or remove any newly instaled software or hardware. Disable BIOS memory options such as caching or shadowing.<br>

<br>Technical information:
<br>
*** STOP: 0x000000e2 (0x0000000, 0x0000000, 0x0000000, 0x0000000)<br>
<!--
***kbdhid.sys - Address 0x94efd1aa base at 0x94efb000 DateStamp 0x4a5bc705-->
<p>Error:<br>
<?php 
echo($error); 
?><br>
</p>


</body>
</html>