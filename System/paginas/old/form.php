<html>
<head>
<title>Ejemplo FCKEditor</title>
<script type="text/javascript" src="./fckeditor/fckeditor.js"></script>
</head>
<body>

<pre>
<?php
	if (get_magic_quotes_gpc())
		echo (stripslashes($_POST['FCKeditor1']));
	else
		echo ($_POST['editor1']);
?>
</pre>
</body>
</html>

