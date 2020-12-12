﻿<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>mean</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>







<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>mean</h1>

<p>
    Computes the average of an <a href="../index.php">iteratable container</a>.
</p>

<p class="funcsignature">
    
    mean(container) &rarr; number <br>
    
    <br>
    
    mean(Matrix, [axes=]) &rarr; Vector
     
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>








<!-- *********************************************************************** -->

<h2 id="vector">Vector</h2>
<p class="CodeCommand">
    &gt;&gt;v=std.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 7&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />
    
    <br />
    
    &gt;&gt;std.mean(v) <br />
    3.66667	<br />
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>








<!-- *********************************************************************** -->

<h2 id="matrix">Matrix</h2>
<p class="CodeCommand">
     &gt;&gt;m  <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3  <br />
    4&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 6 <br />
    7&nbsp;&nbsp;&nbsp; 8&nbsp;&nbsp;&nbsp; 9  <br />

    <br />

    &gt;&gt;std.mean(m) <br />
    5	<br>
    
    <br>
    &gt;&gt;std.mean(m, 0)<br />
    4  &nbsp;&nbsp;&nbsp; 5 &nbsp;&nbsp;&nbsp;  6 &nbsp;&nbsp;&nbsp;  COL <br />
    
    <br />
    
    &gt;&gt;std.mean(m, 1) <br />
    2 &nbsp;&nbsp;&nbsp;  5  &nbsp;&nbsp;&nbsp; 8  &nbsp;&nbsp;&nbsp; COL
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- *********************************************************************** -->

<h2 id="container">General containers</h2>

<p>By default Lua tables are iteratable:</p>
<p class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;std.mean(t) <br />
    3.66667	<br />

    <br />

    &gt;&gt;t={a=3, b=5, c=2, d=1, e=7, f=4} <br />
    &gt;&gt;std.mean(t) <br />
    3.66667&nbsp;	
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="minmax.php#min">min</a>
    <a href="median.php">median</a>
    <a href="minmax.php#max">max</a>
</div>


</body>

</html>
