<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Convert to Lua Table</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>

<h1>totable</h1>
<p>
    Converts a given iteratable container to Lua Table.
</p>

<p class="funcsignature">
    totable(container=, Force1D=<span style="color: blue;">false</span>) &rarr; Lua table
</p>


<p>
    If the container type is <a href="../classes/matrix.php">Matrix</a> or 
    <a href="../classes/range.php">Range</a> and argument <em>Force1D=<span style="color: blue;">false</span></em> 
    then returns a 2-D Lua table; however, if <em>Force1D=<span style="color: blue;">true</span></em>, then returns a 1-D Lua table. 
    
    <br>
    
    For all other types of containers, returns a 1-D Lua table.
</p>

<p>&nbsp;</p>


<h3><a href="../classes/vector.php">Vector</a></h3>
<p class="CodeCommand">
    &gt;&gt;v=std.rand(4) <br>
    &gt;&gt;v <br>
    0.0238247&emsp;  0.656005&emsp;  0.879824 &emsp; 0.629283 &emsp; COL <br>
    
    <br>
    
    &gt;&gt;std.util.totable(v) <br>
    0.0238247&emsp; 0.656005&emsp; 0.879824&emsp; 0.629283
</p>



<p>&nbsp;</p>




<h3><a href="../classes/array.php">Array</a></h3>
<p class="CodeCommand">
    &gt;&gt;type(arr) <br>
    Array <br>
    &gt;&gt;arr <br>
    "Treatment"&emsp; 24&emsp; 43&emsp; 58&emsp; 71&emsp; 43	<br>
    
    <br>

    &gt;&gt;std.util.totable(arr) <br>
    Treatment&emsp; 24&emsp; 43&emsp; 58&emsp; 71&emsp;43
</p>



<p>&nbsp;</p>




<h3><a href="../classes/matrix.php">Matrix</a></h3>

<p class="CodeCommand">
    &gt;&gt;m=std.rand(2, 2) <br>
    &gt;&gt;m <br>
    0.77254 &emsp;  0.39515 <br>
    0.77577 &emsp;  0.24375 <br>
    
    <br>

    &gt;&gt;std.util.totable(m, <span style="color: blue;">true</span>) <br>
    0.77254&emsp; 0.395152&emsp; 0.775774&emsp; 0.243749	
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;t=std.util.totable(m) <br>
    &gt;&gt;t <br>
    table&emsp; table	<br>
    <br>
    &gt;&gt;t[1][1] <br>
    0.77254
</p>


<p>&nbsp;</p>




<h3><a href="../classes/range.php">Range</a></h3>
<img src="../images/totable_range.png" alt=""/>

<p class="CodeCommand">
    &gt;&gt;rng <br>
    ttest!A1:B4 <br>
    
    <br>
    
    &gt;&gt;t=std.util.totable(rng) <br>
    &gt;&gt;t <br>
    table&emsp; table&emsp; table&emsp; table	 <br>
    &gt;&gt;t[2][2] <br>
    42	<br>
    
    <br>
    <br>
    
    &gt;&gt;std.util.totable(rng, <span style="color: blue;">true</span>) <br>
    Treatment&emsp; Control&emsp; 24&emsp; 42&emsp; 43&emsp; 
    43&emsp; 58&emsp;55
</p>

<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="util.toarray.php">std.util.toarray</a>
    <a href="util.tomatrix.php">std.util.tomatrix</a>
    <a href="util.tovector.php">std.util.tovector</a>
</div>


</body>

</html>
