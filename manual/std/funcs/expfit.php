<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exponential Fitting</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>expfit</h1>
<p>
    Fits the given dataset to equation of y = a&middot;e<sup>b&middot;x</sup>
</p>

<p class="funcsignature">
    
    expfit(x=, y=, [intercept=]) &rarr; Vector <br>
    
    <br>
    
    expfit{x=, y=, [intercept=]} &rarr; Vector 
    
</p>

<p>
    where <em>x</em> and <em>y</em> are Vectors. The function returns a vector containing the 
    coefficients of the fitting in the order of [a, b].
</p>





<p>&nbsp;</p>
    
    



<h3>Example:</h3>

<p class="CodeCommand">
    &gt;&gt;x=std.tovector{1, 2, 3, 4} <br>
      &gt;&gt;y=2.1*std.exp(3.4*x) <br>

      <br>

      &gt;&gt;std.expfit{x=x, y=y} <br>
      2.1 &emsp;  3.4  &emsp; COL
</p>


<p>corresponding to: y=2.1*e<sup>3.4*x</sup> </p>
    

<p>&nbsp;</p>

 



<h3>Example:</h3>


<p class="CodeCommand">
    &gt;&gt;x=std.tovector{1, 2, 3, 4} <br>
     &gt;&gt;y=2.1*std.exp(3.4*x) <br>

    <br>

    &gt;&gt;>>std.expfit{x=x, y=y, intercept=3} <br />
    3&emsp; 3.28111&emsp; COL
</p>

<p> corresponding to: y=3*e<sup>3.28111*x</sup> </p>
  






<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
    


    
<div class="RelatedLinks">
    <a href="logfit.php">logfit</a>
    <a href="polyfit.php">polfit</a>
    <a href="powfit.php">powfit</a>
</div>

</body>
</html>