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
    0.0238247 &nbsp;&nbsp;&nbsp;  0.656005 &nbsp;&nbsp;&nbsp;  0.879824  &nbsp;&nbsp;&nbsp; 0.629283  &nbsp;&nbsp;&nbsp; COL <br>
    
    <br>
    
    &gt;&gt;std.totable(v) <br>
    0.0238247 &nbsp;&nbsp;&nbsp; 0.656005 &nbsp;&nbsp;&nbsp; 0.879824 &nbsp;&nbsp;&nbsp; 0.629283
</p>



<p>&nbsp;</p>




<h3><a href="../classes/array.php">Array</a></h3>
<p class="CodeCommand">
    &gt;&gt;type(arr) <br>
    Array <br>
    &gt;&gt;arr <br>
    "Treatment" &nbsp;&nbsp;&nbsp; 24 &nbsp;&nbsp;&nbsp; 43 &nbsp;&nbsp;&nbsp; 58 &nbsp;&nbsp;&nbsp; 71 &nbsp;&nbsp;&nbsp; 43	<br>
    
    <br>

    &gt;&gt;std.totable(arr) <br>
    Treatment &nbsp;&nbsp;&nbsp; 24 &nbsp;&nbsp;&nbsp; 43 &nbsp;&nbsp;&nbsp; 58 &nbsp;&nbsp;&nbsp; 71 &nbsp;&nbsp;&nbsp;43
</p>



<p>&nbsp;</p>




<h3><a href="../classes/matrix.php">Matrix</a></h3>

<p class="CodeCommand">
    &gt;&gt;m=std.rand(2, 2) <br>
    &gt;&gt;m <br>
    0.77254  &nbsp;&nbsp;&nbsp;  0.39515 <br>
    0.77577  &nbsp;&nbsp;&nbsp;  0.24375 <br>
    
    <br>

    &gt;&gt;std.totable(m, <span style="color: blue;">true</span>) <br>
    0.77254 &nbsp;&nbsp;&nbsp; 0.395152 &nbsp;&nbsp;&nbsp; 0.775774 &nbsp;&nbsp;&nbsp; 0.243749	
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;t=std.totable(m) <br>
    &gt;&gt;t <br>
    table &nbsp;&nbsp;&nbsp; table	<br>
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
    
    &gt;&gt;t=std.totable(rng) <br>
    &gt;&gt;t <br>
    table &nbsp;&nbsp;&nbsp; table &nbsp;&nbsp;&nbsp; table &nbsp;&nbsp;&nbsp; table	 <br>
    &gt;&gt;t[2][2] <br>
    42	<br>
    
    <br>
    <br>
    
    &gt;&gt;std.totable(rng, <span style="color: blue;">true</span>) <br>
    Treatment &nbsp;&nbsp;&nbsp; Control &nbsp;&nbsp;&nbsp; 24 &nbsp;&nbsp;&nbsp; 42 &nbsp;&nbsp;&nbsp; 43 &nbsp;&nbsp;&nbsp; 
    43 &nbsp;&nbsp;&nbsp; 58 &nbsp;&nbsp;&nbsp;55
</p>

<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="toarray.php">std.toarray</a>
    <a href="tomatrix.php">std.tomatrix</a>
    <a href="tovector.php">std.tovector</a>
</div>


</body>

</html>
