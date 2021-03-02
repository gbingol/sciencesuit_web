<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Convert to Array</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>







<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

    
 
    
    
<h1>util.toarray</h1>

<p>
    Converts a given iteratable container to a 
    <a href="../classes/array.php">Array</a> data type.

</p>



<p class="funcsignature">
    util.toarray(container=) &rarr; nil / Array, integer, integer 
</p>

<p>
    returns an array (or nil), the number of numeric and non-numeric entries.
</p>




<p>&nbsp;</p>





<h3 id="luatable">From Lua Table</h3>
<p class="CodeCommand">
    &gt;&gt;t={1, 2, "a", "b", 3} <br>
    
    <br>
    
    &gt;&gt;std.util.toarray(t) <br>
    1 &emsp; 2 &emsp; "a" &emsp; "b" &emsp; 3 <br>	
    3	<br>
    2	
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="vector">Vector</h3>
<p class="CodeCommand">
    &gt;&gt;v=std.rand(4) <br>
    &gt;&gt;v <br>
    0.0238247 &emsp; 0.656005 &emsp; 0.879824 &emsp; 0.629283 &emsp; COL <br>
    
    <br>
    
    &gt;&gt;std.util.toarray(v) <br>
    0.0238247 &emsp; 0.656005 &emsp; 0.879824 &emsp; 0.629283 <br>
    4	<br>
    0	
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="matrix">Matrix</h3>

<p class="CodeCommand">
    &gt;&gt;m=std.rand(2, 2) <br>
    &gt;&gt;m <br>
    0.77254  &emsp; 0.39515 <br>
    0.77577  &emsp; 0.24375 <br>
    
    <br>

    &gt;&gt;std.util.toarray(m) <br>
    0.77254 &emsp; 0.395152 &emsp; 0.775774 &emsp; 0.243749 <br>	
    4	<br>
    0
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="util.tovector.php">std.util.tovector</a>
    <a href="util.tomatrix.php">std.util.tomatrix</a>
</div>



</body>

</html>
