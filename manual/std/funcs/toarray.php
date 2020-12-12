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

<h1>toarray</h1>
<p>
    Converts a given iteratable container to a <a href="../classes/array.php">Array</a> data type.

</p>

<p class="funcsignature">
    toarray(container=) &rarr; nil / Array, integer, integer 
</p>

<p>
    The function returns an array, the number of numeric and non-numeric entries.
</p>

<p>&nbsp;</p>


<h3>From Lua Table</h3>
<p class="CodeCommand">
    &gt;&gt;t={1, 2, "a", "b", 3} <br>
    
    <br>
    
    &gt;&gt;std.toarray(t) <br>
    1 &nbsp;&nbsp;&nbsp; 2 &nbsp;&nbsp;&nbsp;"a" &nbsp;&nbsp;&nbsp; "b" &nbsp;&nbsp;&nbsp; 3 <br>	
    3	<br>
    2	
</p>



<p>&nbsp;</p>


<h3>From <a href="../classes/vector.php">Vector</a></h3>
<p class="CodeCommand">
    &gt;&gt;v=std.rand(4) <br>
    &gt;&gt;v <br>
    0.0238247 &nbsp;&nbsp;&nbsp;  0.656005 &nbsp;&nbsp;&nbsp;  0.879824  &nbsp;&nbsp;&nbsp; 0.629283  &nbsp;&nbsp;&nbsp; COL <br>
    
    <br>
    
    &gt;&gt;std.toarray(v) <br>
    0.0238247 &nbsp;&nbsp;&nbsp; 0.656005 &nbsp;&nbsp;&nbsp; 0.879824 &nbsp;&nbsp;&nbsp; 0.629283 <br>
    4	<br>
    0	
</p>


<p>&nbsp;</p>
<h3>From <a href="../classes/matrix.php">Matrix</a></h3>

<p class="CodeCommand">
    &gt;&gt;m=std.rand(2, 2) <br>
    &gt;&gt;m <br>
    0.77254  &nbsp;&nbsp;&nbsp;  0.39515 <br>
    0.77577  &nbsp;&nbsp;&nbsp;  0.24375 <br>
    
    <br>

    &gt;&gt;std.toarray(m) <br>
    0.77254 &nbsp;&nbsp;&nbsp; 0.395152 &nbsp;&nbsp;&nbsp; 0.775774 &nbsp;&nbsp;&nbsp; 0.243749 <br>	
    4	<br>
    0
</p>


<p>&nbsp;</p>

    <div class="RelatedLinks">
        <a href="tovector.php">std.tovector</a>
        <a href="tomatrix.php">std.tomatrix</a>
    </div>


</body>

</html>
