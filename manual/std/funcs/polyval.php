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
    Evaluates a polynomial (a<sub>n</sub>x<sup>n</sup> + a<sub>n-1</sub>x<sup>n-1</sup> +..+ a<sub>0</sub>) at a given data or dataset.
</p>

<p class="funcsignature">   
    polyval(v=,arg=) &rarr; number / Vector     
</p>

<p>
    where parameter <em>v</em> must be of type Vector. If <em>arg</em> is a single data point the function returns a number; 
    however, if <em>arg</em> is a vector of data points then function returns a vector.
</p>


<p>&nbsp;</p>



<h4>Note on algorithm:</h4>
<p>
    The function uses <a href="https://en.wikipedia.org/wiki/Horner's_method" target="_blank">Horner's method</a> 
    to evaluate the polynom.
</p>




<p>&nbsp;</p>




<h3>Example</h3>
<p>
    Assume we are finding the polynom that <em>best</em> fits to the following data and testing the 
    polynom at different data points:
    
    <span style="font-size: 0.9em; background-color: lightgoldenrodyellow;">
        (0, 4), (1, 10), (2, 26), (3, 58), (4, 112), (5, 194)

    </span>
</p>


<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;coef=std.polyfit(x, y, 3)<br>
    <br />

    &gt;&gt;std.polyval(coef, 3.5)<br />
    81.875 <br />

    <br />

    &gt;&gt;v=std.util.tovector{3.5, 4.5} <br />
    &gt;&gt;std.polyval(coef, v) <br />
    81.875 &emsp; 149.125 &emsp; COL
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