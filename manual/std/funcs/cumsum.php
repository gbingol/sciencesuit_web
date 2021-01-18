<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cumulative Sum</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>cumsum</h1>

<p>
    Finds the cumulative sum of a Vector, Matrix or other iteratable containers.
</p>

<p class="funcsignature">
    
    cumsum(Vector/Array) &rarr; Vector/Array <br>
    
    <br>
    
    cumsum(Matrix, [axes=]) &rarr; Matrix <br>
    
    <br>
    
    cumsum(Container) &rarr; table
    
</p>


<p>&nbsp;</p>

    
<h2 id="vector">Vector</h2>    
<p class="CodeCommand">
    &gt;&gt;v=std.tovector{1, 2, 3, 4} <br />
    &gt;&gt;v <br />
    1&emsp; 2&emsp; 3&emsp; 4&emsp; COL <br />
    <br />
    &gt;&gt;std.cumsum(v) <br />
    1&emsp; 3&emsp; 6&emsp; 10&emsp; COL
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<!-- ********************************************************************* -->

<h2 id="matrix">Matrix</h2> 
<p class="CodeCommand">
    &gt;&gt;m=std.tomatrix{ {1, 2}, {3, 4} } <br>
    &gt;&gt;m <br>
    1 &emsp; 2 <br>
    3 &emsp; 4 <br>
    
    <br>

    &gt;&gt;std.cumsum(m) <br>
    1  &emsp;  3 <br>
    6  &emsp; 10 <br>

    <br>
    
    &gt;&gt;std.cumsum(m, 0) <br>
    1 &emsp; 2 <br>
    4 &emsp; 6 <br>

    <br>
    
    &gt;&gt;std.cumsum(m, 1) <br>
    1 &emsp; 3 <br>
    3 &emsp; 7
    
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 id="array">Array</h2>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    1 &emsp;2&emsp;"A" &emsp;"B"&emsp;"D"&emsp;3 <br>
    
    <br>
    
    <span class="LuaComment">--return type is Array</span><br>
    &gt;&gt;std.cumsum(arr) <br>
    1&emsp;3&emsp;6
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="table">Lua table</h2>
<p class="CodeCommand">
    &gt;&gt;t={1, 2, 3, 4} <br />
    &gt;&gt;t <br />
    1&emsp; 2&emsp; 3&emsp; 4 <br />
    <br />
    &gt;&gt;std.cumsum(t) <br />
    1&emsp; 3&emsp; 6&emsp; 10 <br>
    
    <br>
    <br>
    
    &gt;&gt;t2={a=1, b=2, 3, 4, 5} <br>
    
    <br>
    
    <span class="LuaComment">--skipping keys of type string</span><br>
    &gt;&gt;std.cumsum(t2) <br>
    3 &emsp;7 &emsp;12	
    
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="sum.php">sum</a>
    <a href="mean.php">mean</a>
    <a href="median.php">median</a>
</div>


</body>

</html>
