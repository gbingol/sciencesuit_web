﻿<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

    <title>Polynomial Fitting</title>

    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
     <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>polyfit</h1>
<p>
    Performs n<sup>th</sup> degree polynomial (a<sub>n</sub>x<sup>n</sup> + a<sub>n-1</sub>x<sup>n-1</sup> +..+ a<sub>0</sub>) 
    curve fitting on a given dataset. 
</p>

<p class="funcsignature">
    
        polyfit(x=, y=, n=, [intercept=]) &rarr; Polynomial <br />
        
        <br>
        
        polyfit{x=, y=, n=, [intercept=] } &rarr; Polynomial 
</p>

<p style="margin-right: 5%;">
    where <em>x</em> and <em>y</em> are Vectors and <em>n</em> is the degree of the polynomial. 
    Returns a <a href="../classes/polynomial.php">Polynomial</a>.
</p>


<p>&nbsp;</p>

<p>
    <span class="auto-style1"><em>Note on algorithm:</em></span> The system creates 
    a <a href="https://en.wikipedia.org/wiki/Vandermonde_matrix" target="_blank">Vandermonde matrix</a> 
    (A) with the given <em>x</em> vector and solves the system (A<sup>T</sup>Ab=A<sup>T</sup>y) using QR 
    decomposition to find the cofficient, <em>b</em>.
</p>





<p>&nbsp;</p>





<h3>Example</h3>
<p>
    Find the 3<sup>rd</sup> degree polynom that <em>best</em> fits to the following (x, y) pairs of data:

    <span style="font-size: 0.9em; background-color: lightgoldenrodyellow;">
        (0, 4), (1, 10), (2, 26), (3, 58), (4, 112), (5, 194)

    </span>
</p>



<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.polyfit(x, y, 3) <br />
    x<sup>3</sup>+ 2x<sup>2</sup> + 3x + 4
</p>

    
 



<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="expfit.php">expfit</a>
    <a href="logfit.php">logfit</a>
    <a href="powfit.php">powfit</a>
    <a href="polyval.php">polyval</a>
</div>

</body>
</html>