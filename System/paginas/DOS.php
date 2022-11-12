<?php
session_start();
if ($_SESSION['acceso']!="1")
{
	header("Location:../../1026/Nosesion.php?next=http://localhost/SublimeText/C/OperatingSystem/System/paginas/DOS.php&hacia=DOS");
	exit;
}


?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8" />
<script src="cmd/comandos32.js"></script>
                         <link rel="icon" type="image/ico" href="../../Documents_and_settings/visible/Windows10/DOS.ico"/>
                           <title>Comand Prompt</title>
                           <style type="text/css">
                            html{
                                background-color:black !important;
 overflow-x:hidden !important;
  overflow-y:hidden !important;
                            }
                            iframe{
                                overflow:hidden !important;
        overflow-y:hidden !important;
            overflow-x:hidden !important;
         

                            }
                            #ComandHis{
                                color: #01DF01 !important;
                                background-color: black !important;
                                position:absolute;
                                top:0;
                                right:0;
                                left:0;
                                height:300px;
                                width:100%;
                               
                               border: none !important;
                              
        overflow-y:scroll !important;
            overflow-x:hidden !important;


                            }
                            #comand{
                                color: #01DF01 !important;
                                background-color: black !important;
                                position:absolute;
                                top:300px;
                             
                                left:0;
                                height:30px;
                                width:80%;

                                border-bottom: 1px solid white !important; 
                                border-top: 1px solid white !important;

 border-right: none !important;

 border-left: none !important;
                            }





                            #ComandEnter{
                                color: #01DF01 !important;
                                background-color: black !important;
                                position:absolute;
                                top:300px;
                                right:0;
                                height:34px;
                                width:20%;
                                
                                border-bottom: 1px solid white !important; 
                                border-top: 1px solid white !important;

 border-right: none !important;

 border-left:1px solid white !important;
                            }
                               #ComandEnter:hover{
                                color: black !important;
                                background-color: #01DF01 !important;
                                position:absolute;
                                top:300px;
                                right:0;
                                height:34px;
                                width:20%;
                                
                                border-bottom: 1px solid white !important; 
                                border-top: 1px solid white !important;

 border-right: none !important;

 border-left:1px solid white !important;
                            }
                           /* .cmdverde {
                                background-color: black;
                                color: #01DF01;
                                height: 100%;
                                width: 100%;
                            }
                            .displaynone{
                                display:none;
                                border:2px solid #01DF01;
                            }
                            textarea{border-radius:10% 10% 10% 10% ;}*/

                        </style>

                        <script type="text/javascript">
  
window.onload=function(){
var ComandEnter=document.getElementById("ComandEnter");
  var comand=document.getElementById("comand");
 var ComandHis=document.getElementById("ComandHis");
 ImprimeComandHis();
  ComandEnter.onclick=function(){
   verifica();
  




  }

}
function verifica(){




var comand=document.getElementById("comand");
    var string = comand.value;
substring = ".php?";
if (string.indexOf(substring) > -1) {
var comand=document.getElementById("comand");
var elementos=document.getElementById("elementos");
 elementos.innerHTML='<iframe id="ifpaginaIframe" onload="verificaIframeContent();" width="0" height="0" src="cmd/comandos/'+comand.value+'" frameborder="0" allowfullscreen></iframe>';




}else {
var comand=document.getElementById("comand");
var elementos=document.getElementById("elementos");
 elementos.innerHTML='<iframe id="ifpaginaIframe" onload="verificaIframeContent();" width="0" height="0" src="cmd/comandos/'+comand.value+'.php" frameborder="0" allowfullscreen></iframe>';


}
  
}
function verificaIframeContent()

{

    var iFrame =  document.getElementById('ifpaginaIframe');

    var iFrameBody;

    if ( iFrame.contentDocument )

    { // FF

        iFrameBody = iFrame.contentDocument.getElementsByTagName('body')[0];

    }

    else if ( iFrame.contentWindow )

    { // IE

        iFrameBody = iFrame.contentWindow.document.getElementsByTagName('body')[0];

    }
var contenido=iFrameBody.innerHTML;
var string = contenido;
substring = "Error 404";
if (string.indexOf(substring) > -1) {
 var comand=document.getElementById("comand");
var ComandHis=document.getElementById("ComandHis");
ComandHis.innerHTML+='<br><br>El comando '+comand.value+' no existe.';
ComandHis.innerHTML+='<br><br>$^\\OS>Kernel{kernel>System32=>^DOS[admin==(true)]}>';



}else{
    var comand=document.getElementById("comand");
var ComandHis=document.getElementById("ComandHis");
ComandHis.innerHTML+='<br><br>$^\\OS>Kernel{kernel>System32=>^DOS[admin==(true)]}>cmd=="'+comand.value+'";';

}
   

}
function EnterDetect(e){
tecla=(document.all) ? e.keyCode : e.which;
if(tecla==13){
    verifica();
}
}


                        </script>
                        </head>
                        <body>
                       <div width="100%" height="300px" id="ComandHis"  >
                           <style>html{color:red; background-color:white;}</style>
$^\OS>Kernel{kernel>System32=>^DOS[admin==(true)]}>

                       </div>



                        <input type="text" onkeypress="EnterDetect(event);" name="comandINPUT" id="comand" placeholder="Introducir comando. Por ejemplo: 'help' (sin las comillas)" />


                       <input type="button" onclick="verifica();" name="ComandEnter" id="ComandEnter" value="Enter" />
                       <div id="elementos">
                           

                       </div>
                     
                        </body>
                       
</html>