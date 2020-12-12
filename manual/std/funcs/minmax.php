<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>minmax, min, max</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


    
    
    
    
<h1 id="minmax">minmax</h1>
<p>
    Finds the minimum and maximum entries in an <a href="../index.php">iteratable container</a>.
</p>

<p class="funcsignature">
    
    minmax(container) &rarr; entry, entry <br>
    
    <br>
    
    minmax(Matrix, axes=) &rarr; Vector, Vector
    
</p>


<p>&nbsp;</p>




<h3 id="vector_minmax">Vector</h3>


<p class="CodeCommand">
    &gt;&gt;v=std.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 7&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />
    <br />
    &gt;&gt;std.minmax(v) <br />
    1 &nbsp;&nbsp;&nbsp;   7	
</p>




<p>&nbsp;</p>



<h3 id="matrix_minmax">Matrix</h3>
    
<p class="CodeCommand">
    
    
    &gt;&gt;m  <br />
    &nbsp;
    2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; -1  <br />
   -4&nbsp;&nbsp;&nbsp;&nbsp; -5&nbsp;&nbsp;&nbsp;&nbsp; 3 <br />
    &nbsp;
    2&nbsp;&nbsp;&nbsp; -5&nbsp;&nbsp;&nbsp; -4  <br />

    <br />

    &gt;&gt;std.minmax(m) <br />
    -5	&nbsp;&nbsp;&nbsp;  4 <br>
    
    <br>
    &gt;&gt;std.minmax(m, 0) <br />
    -4  &nbsp;&nbsp;&nbsp; -5  &nbsp;&nbsp;&nbsp; -4  &nbsp;&nbsp;&nbsp; COL <br>
    2  &nbsp;&nbsp;&nbsp; 4  &nbsp;&nbsp;&nbsp; 3  &nbsp;&nbsp;&nbsp; COL <br>
    
    <br>
    
    &gt;&gt;std.minmax(m, 1) <br>
    -1  &nbsp;&nbsp;&nbsp; -5  &nbsp;&nbsp;&nbsp; -5 &nbsp;&nbsp;&nbsp;  COL <br>
    4  &nbsp;&nbsp;&nbsp; 3  &nbsp;&nbsp;&nbsp; 2  &nbsp;&nbsp;&nbsp; COL <br>

</p>



<p>&nbsp;</p>



<h3 id="container_minmax">General container</h3>
<p class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;std.minmax(t) <br />
    1	<br />
    7   <br />

    <br />
    <br />

    &gt;&gt;t={a=3, b=5, c=2, d=1, e=7, f=4} <br />
    &gt;&gt;std.minmax(t) <br />
    1	<br />
    7	
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>












<!-- ************************************************************************ -->

<h2 id="min">min</h2>
<p>
    Uses <a href="#minmax">minmax</a> to find the minimum of an iteratable container.
</p>

<p class="funcsignature">
    
    min(container) &rarr; entry <br>

    <br>

    min(Matrix, axes=) &rarr; Vector
    
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 7&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />
    <br />
    &gt;&gt;std.min(v) <br />
    1	<br />

    <br />
    <br />

    &gt;&gt;m  <br />
    &nbsp;
    2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; -1  <br />
   -4&nbsp;&nbsp;&nbsp;&nbsp; -5&nbsp;&nbsp;&nbsp;&nbsp; 3 <br />
    &nbsp;
    2&nbsp;&nbsp;&nbsp; -5&nbsp;&nbsp;&nbsp; -4  <br />

    <br />

    &gt;&gt;std.min(m) <br />
    -5	<br>
    
    <br>
    &gt;&gt;std.min(m, 0) <br />
    -4  &nbsp;&nbsp;&nbsp; -5  &nbsp;&nbsp;&nbsp; -4  &nbsp;&nbsp;&nbsp; COL <br>
    
    <br>
    
    &gt;&gt;std.min(m, 1) <br>
    -1  &nbsp;&nbsp;&nbsp; -5  &nbsp;&nbsp;&nbsp; -5 &nbsp;&nbsp;&nbsp;  COL <br>
    

</p>











<p>&nbsp;</p>
<p>&nbsp;</p>











<!-- ********************************************************************** -->

<h2 id="max">max</h2>
<p>
    Uses <a href="#minmax">minmax</a> to find the maximum of an iteratable container.
</p>

<p class="funcsignature">
    
    max(container) &rarr; entry <br>
    
    <br>
    
    max(Matrix, axes=) &rarr; Vector
    
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 7&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />
    <br />
    &gt;&gt;std.max(v) <br />
    7	<br />

    
    
    <br />
    <br />

    
    
    &gt;&gt;m  <br />
    &nbsp;
    2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; -1  <br />
   -4&nbsp;&nbsp;&nbsp;&nbsp; -5&nbsp;&nbsp;&nbsp;&nbsp; 3 <br />
    &nbsp;
    2&nbsp;&nbsp;&nbsp; -5&nbsp;&nbsp;&nbsp; -4  <br />

    <br />

    &gt;&gt;std.max(m) <br />
    4 <br>
    
    <br>
    &gt;&gt;std.max(m, 0) <br />
    2  &nbsp;&nbsp;&nbsp; 4  &nbsp;&nbsp;&nbsp; 3  &nbsp;&nbsp;&nbsp; COL <br>
    
    <br>
    
    &gt;&gt;std.max(m, 1) <br>
    4  &nbsp;&nbsp;&nbsp; 3  &nbsp;&nbsp;&nbsp; 2  &nbsp;&nbsp;&nbsp; COL <br>

</p>









<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="median.php">median</a>
    <a href="mean.php">mean</a>
</div>


</body>

</html>
