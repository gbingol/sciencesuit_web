<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

<title>transpose</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>


<h1>trans</h1>
<p>Finds the transpose of a given matrix or a vector.</p>
<p class="funcsignature">
    trans (arg=) &rarr; Matrix

</p>
    
<p>
    <strong>1)</strong> If <em>arg </em>is a matrix and the function returns transpose of the matrix.<br>
    <strong>2) </strong><em>If arg </em>is a vector of shape COL, then arg becomes shape ROW and vice versa. 
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;A=std.tomatrix{ {1, 2}, {3, 4} } <br />
    &gt;&gt;std.trans(A)<br>
    1&nbsp;&nbsp;&nbsp; 3 <br />
    2&nbsp;&nbsp;&nbsp; 4
</p>
    <p >&nbsp;</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;v=std.tovector{1,3} <br />
    &gt;&gt;v <br />
    1&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; COL <br />
    
    <br />

    &gt;&gt;std.trans(v)<br>
    1&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; ROW
</p>

    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="RelatedLinks">
        <a href="../classes/matrix.php">Matrix</a>
        <a href="../classes/vector.php">Vector</a>
    </div>



</body>
</html>