<?php
session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:../../System32/Nosesion.php");
	exit;
}


?>
<!DOCTYPE html>
<html class="fondoobscuro fondologin">
<head>
<meta charset="utf-8"/>
<link href="../../System32/css/personalizacion.css" rel="stylesheet"/><link href="../../System32/css/imageres.css" rel="stylesheet"/>
<link rel="icon" type="ico" href="../../Documents_and_settings/visible/Windows10/calculadora.ico" />
  <title>TY-Calculator.</title>
  <script type="text/javascript">


  </script>
  <style type="text/css">
html{

            width: 100%;
            /*Width=1323px;*/
            height: 720px;
color:white;}
html a{/*background-color:black;*/
color:white;
position:fixed;
font-size:1.6em;}
html a:hover{/*background-color:black;*/
color:white;
position:fixed;
font-size:1.8em;}


#logo{
	position: absolute;
	top:0;
	right: 0;
	height: 30px;
	width: 100px;
	background-color: black;		
	
		
	   }
	   #logo img{
		height:28;
		width:20px; 
		float:center;  
		margin-top:1px;
		padding-top:1px;
	   }
	   header{
		position:absolute;
		height:30px;
		width:100%;
		top:0;
		left:0;
		right;:0;
		
		border-bottom:1px solid balck;
		famili:vivaldi;
		color:white;
		paddingh:0;
		margin:0;
		border-bottom:5px solid black;
		  
	  }


  </style>

</head>
<body>
<header class="fondoclaro">

<div id="superior">Ty-Calculator<div id="cierre"></div><div id="logo"><center><img src="../../Documents_and_settings/visible/logo.ico" /></center></div></div>



</header>
<br><br><br>
<table border="0" bordercolor="#111111" id="AutoNumber1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%">

  <tr>
    <td width="33%"> </td>
    <td width="33%"><font size="1">
</font><div id="calc" class="drag">
  <form name="calculator">
    <table bordercolor="gray" border="3" cellspacing="1" cellpadding="0" width="150" bgcolor="black">
      <tr>
        <td>

        <input style="color: #01DF01; background: black" length="19" name="ans" size="19"/>
        </td>
      </tr>
    </table>
    <table bordercolor="gray" border="3" cellspacing="2" cellpadding="2" width="150" bgcolor="black">
      <tr>
        <td align="middle">
        <input onmousedown="document.calculator.ans.value+='7'" value="  7  " name="seven" type="button"/>
        </td>

        <td align="middle">
        <input value="  8  " name="eight" onclick="document.calculator.ans.value+='8'" type="button"/>
        </td>
        <td align="middle">
        <input value="  9  " name="nine" onclick="document.calculator.ans.value+='9'" type="button"/>
        </td>
        <td align="middle">
        <input value="  /  " name="divide" onclick="document.calculator.ans.value+='/'" type="button"/>
        </td>

      </tr>
      <tr>
        <td align="middle">
        <input value="  4  " name="four" onclick="document.calculator.ans.value+='4'" type="button"/>
        </td>
        <td align="middle">
        <input value="  5  " name="five" onclick="document.calculator.ans.value+='5'" type="button"/>
        </td>
        <td align="middle">

        <input value="  6  " name="six" onclick="document.calculator.ans.value+='6'" type="button"/>
        </td>
        <td align="middle">
        <input value="  *  " name="multiply" onclick="document.calculator.ans.value+='*'" type="button"/>
        </td>
      </tr>
      <tr>
        <td align="middle">
        <input value="  1  " name="one" onclick="document.calculator.ans.value+='1'" type="button"/>

        </td>
        <td align="middle">
        <input value="  2  " name="two" onclick="document.calculator.ans.value+='2'" type="button"/>
        </td>
        <td align="middle">
        <input value="  3  " name="three" onclick="document.calculator.ans.value+='3'" type="button"/>
        </td>
        <td align="middle">
        <input value="  -  " name="subtract" onclick="document.calculator.ans.value+='-'" type="button"/>

        </td>
      </tr>
      <tr>
        <td align="middle">
        <input value="  C  " name="clear" onclick="document.calculator.ans.value=''" type="button"/>
        </td>
        <td align="middle">
        <input value="  0  " name="zero" onclick="document.calculator.ans.value+='0'" type="button"/>
        </td>

        <td align="middle">
        <input value="  =  " name="equal" onclick="document.calculator.ans.value=eval(document.calculator.ans.value)" type="button"/>
        </td>
        <td align="middle">
        <input value="  +  " name="add" onclick="document.calculator.ans.value+='+'" type="button"/>
        </td>
      </tr>
    </table>
  </form>

</div>
</td>
    <td width="34%"> </td>
  </tr>
</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="http://web2.0calc.es/" title="Calculadora cientifica.">Calculadora cientifica.</a> 
</body>
</html> 