<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>powfit</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>powfit</h1>
<p>
    Fits the given dataset to equation of <em>y = a&middot;x</em><sup><em>n</em></sup>
</p>

<p class="funcsignature"> 
    powfit(x=, y=) &rarr; Vector <br />

    <br>

    powfit{x=, y=} &rarr; Vector 
</p>

<p>
    where <em>x</em> and <em>y</em> are Vectors. 
    The function returns a vector containing the coefficients of the fitting.
</p>
    


<p>&nbsp;</p>
    
    


<h3>Example</h3>

<p class="CodeCommand">
    &gt;&gt;x=std.tovector{1,2,3,4} <br />
    &gt;&gt;y=1.2*x^2 <br />

    <br />

    &gt;&gt;std.powfit{x=x, y=y} <br />
    1.2 &nbsp;&nbsp;&nbsp;  2  &nbsp;&nbsp;&nbsp; COL
</p>
<p> corresponding to the equation: y=1.2x<sup>2</sup> </p>
    
   




<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="expfit.php">expfit</a>
    <a href="logfit.php">logfit</a>
    <a href="polyfit.php">polfit</a>

</div>

</body>
</html>