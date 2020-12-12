<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

    <title>Logarithmic Fitting</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>logfit</h1>
<p>
    Fits the given dataset to equation of <em>y = a&middot;ln(x) + b</em>
</p>

<p class="funcsignature">
    
    logfit(x=, y=) &rarr; Vector <br />
    
    <br>
    
    logfit{x=, y=} &rarr; Vector 
</p>

<p>
    where <em>x</em> and <em>y</em> are Vectors. 
    The function returns a vector containing the coefficients of the fitting.
</p>




<p>&nbsp;</p>
    
    

<h3>Example</h3>

<p class="CodeCommand">
    &gt;&gt;x=std.tovector{1, 2, 3, 4} <br>
    &gt;&gt;y=x^2 <br />

    <br />

    &gt;&gt;std.logfit{x=x, y=y} <br />
    10.1506 &nbsp;&nbsp;&nbsp;  -0.564824 &nbsp;&nbsp;&nbsp;  COL
</p>

<p> corresponding to the equation: y=10.1506*ln(x)-0.564824</p>
    




    
<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="expfit.php">expfit</a>
    <a href="polyfit.php">polyfit</a>
    <a href="powfit.php">powfit</a>
</div>

</body>
</html>