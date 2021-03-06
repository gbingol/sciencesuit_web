<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>polyroots</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <script src="/jsscripts/siteanalytics.js"></script>
    
    
</head>


<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    
    
 

<h1>polyroots</h1>
    
<p>
    Finds all the roots (real, complex) of a polynomial in the form of a<sub>n</sub>x<sup>n</sup> + ... + a<sub>0</sub>.
</p>

<p class="funcsignature">
    polyroots(vec=) &rarr; real number / Array
</p>

<p>
    where parameter <em>vec</em> must be a vector containing the coefficients of the polynom and the function returns either 
    a real number or an Array of complex numbers.
</p>



<p>&nbsp;</p>



<details>
    <summary>Note on algorithm:</summary>

    <p>
        The applied algorithm depends on the order (<em>n</em>) of the polynomial.
    </p>

    <ol>
        <li>n=1, directly solving the simple equation.</li>
        <li>n=2 and n=3, application of the well-known equations to find the roots.</li>
        <li>
            n>3, forms <a href="https://en.wikipedia.org/wiki/Companion_matrix" target="_blank">companion matrix</a> 
            and returns eigen values as roots.
        </li>
    </ol>


</details>



<p class="CodeCommand">
    
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
    <a href="bisection.php">bisection</a>
    <a href="muller.php">muller</a>
    <a href="newton.php">newton</a>
</div>

</body>
</html>
