<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>cor</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>cor</h1>

<p>Computes the correlation coefficient.</p>

<p class="funcsignature">
    cor(y1, y2) &rarr; number
</p>


<p>
    where arguments <em>y1</em>, <em>y2</em> must be iteratable containers of same size.
</p>


<p>&nbsp;</p>

<p>
    <em>Note:</em> If one (or both) of the arguments is of type 
    <a href="../classes/array.php">Array</a>, the size of the array must be 
    equivalent to the other container after removing 
    <span class="LuaKeyword">nil</span>s and strings.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="example">Example</h3>
<p>
    We are going to test whether it is a good idea <em> just to rely on r<sup>2</sup></em> 
    to test quality of fitting. In order to do that we will generate numbers y1 on the line 
    y<sub>1</sub>=2x+1 and y<sub>2</sub>=4x+2 in the interval [1,5].
</p>

<p class="CodeCommand">
    
    &gt;&gt;x=std.linspace(1, 5, 5) <br />
    
    <br />
    
    &gt;&gt;y1=2*x+1 <br />
    &gt;&gt;y2=4*x+2 <br />
    
    <br />
    
    &gt;&gt;std.cor(y1,y2)^2 <br />
    1

</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="cov.php">cov</a>
    <a href="var.php">var</a>
</div>



</body>

</html>
