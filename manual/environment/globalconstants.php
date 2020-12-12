<!DOCTYPE html>
<html>

<head>
<meta content="en-us" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Global Constants</title>

<link href="../css/common.css" rel="stylesheet" type="text/css">


</head>

<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php";
	include $mainmenuloc;
?>


<h1>GLOBAL CONSTANTS</h1>

    <p>&nbsp;</p>
    <h2><a name="ERRORLEVEL">ERRORLEVEL</a></h2>

<p>Lua functions can raise errors at different levels with different amount of
information. Current level is set to 0 for a leaner and therefore a clearer
understanding of the error messages. However, for detailed error messages, it is
advised to set it to 1.</p>



</body>

</html>
