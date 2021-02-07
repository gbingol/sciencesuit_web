<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>fsolve</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>fsolve</h1>
<p>
    Solves system of non-linear equations using Newton-Raphson approach.
</p>

<p class="funcsignature">  
    fsolve(Functions, initialValues) &rarr; table
</p>

<p>
    returns the solution vector as Lua table.
</p>

<p>&nbsp;</p>

<h3>Note</h3>
<p>
    Similar to <a href="newton.php">Newton-Raphson</a> method, for single-variable functions, 
    the initial estimate of the root determines the root found, whereas more than one root 
    (or a combination of roots) could be satisfying the equation(s).
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>

<p class="CodeCommand">
</p>









<div class="RelatedLinks">
    <a href="bisection.php">std.bisection</a>
    <a href="brentq.php">std.brentq</a>
    <a href="newton.php">std.newton</a>
</div>


</body>

</html>
