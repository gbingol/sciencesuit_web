<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>polyval</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>







<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1 >polyval</h1>

<p>
    Evaluates a polynomial 
    (a<sub>n</sub>x<sup>n</sup> + a<sub>n-1</sub>x<sup>n-1</sup> +..+ a<sub>0</sub>) 
    at a given data or dataset.
</p>

<p class="funcsignature">   
    polyval(v=, arg=) &rarr; real / Complex / Vector     
</p>

<p>
    where parameter <em>v</em> must be of type Vector and parameter <em>arg</em> must be 
    either real or Complex number or Vector.
</p>


<p>&nbsp;</p>


<details>
    <summary>Note on algorithm:</summary>
    <p>
        The function uses 
        <a href="https://en.wikipedia.org/wiki/Horner's_method" target="_blank">Horner's method</a> 
        to evaluate the polynom.
    </p>
</details>



<p>&nbsp;</p>



<h3 id="realnumber">Real numbers</h3>
<p class="CodeCommand">
    &gt;&gt;coefficients=std.polyfit(x, y, 3)<br>
    <br />

    <span class="LuaComment">Single data point</span><br>
    &gt;&gt;std.polyval(coefficients, 3.5)<br />
    81.875 <br />

    <br />
    <br>

    <span class="LuaComment">Multiple data points</span><br>
    &gt;&gt;v=std.util.tovector{3.5, 4.5} <br />
    &gt;&gt;std.polyval(coefficients, v) <br />
    81.875 &emsp; 149.125 &emsp; COL
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="complexnumber">Complex number</h3>
<p class="CodeCommand">
    <span class="LuaComment">x<sup>2</sup> + 1 = 0 has complex roots</span><br>
    &gt;&gt;poly=std.util.tovector{1, 0, 1} <br>
    &gt;&gt;roots=std.polyroots(poly) <br>
    &gt;&gt;roots <br>
    i &emsp;  -i   <br>

    <br>

    &gt;&gt;std.polyval(poly, roots[1]) <br>
    0 + 0i <br>

    <br>
    <span class="LuaComment">Evaluate at x = 1 + i</span><br>
    &gt;&gt;std.polyval(poly, std.Complex.new(1, 1)) <br>
    1 + 2i

</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="polyfit.php">polyfit</a>
    <a href="../classes/vector.php">Vector</a>
    <a href="util.tovector.php">util.tovector</a>
</div>

</body>
</html>