<?php
global $retroceso;
session_start();
if ($_SESSION['acceso']!="1")
{
  $host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$total= "http://" . $host . $url;

  header("Location:http://localhost/SublimeText/C/OperatingSystem/1026/Nosesion.php?next=$total&hacia=Explorador de archivos");
  exit;
}


require_once("echo/folder.php");
require_once("echo/files.php");

?>