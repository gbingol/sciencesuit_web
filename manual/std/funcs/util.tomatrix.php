<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Convert to Matrix</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        ol.spaced li
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>

<h1>tomatrix</h1>
<p>
    Converts a given suitable iteratable container to a <a href="../classes/matrix.php">Matrix</a> data type.
</p>

<p class="funcsignature">   
        tomatrix(vector=, nrows=, ncols=) &rarr; Matrix<br>
        
        <br>
        
        tomatrix(table=, nrows=, ncols=) &rarr; Matrix<br>
        
        <br>
        
        tomatrix(table=) &rarr; Matrix<br>
        
        <br>
        
        tomatrix(range=, nrows=, ncols=) &rarr; Matrix
</p>

<p>
    Please note that Matrix can only contain numeric values. 
</p>
    
<p>&nbsp;</p>

<h3>From Vector</h3>
<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3, 4, 5, 6} <br>
    
    <br>
    
    &gt;&gt;m=std.util.tomatrix(v, 2, 3) <br>
    &gt;&gt;m <br>
    1 &emsp;  2 &emsp;  3 <br>
    4  &emsp; 5  &emsp; 6
</p>


<p>&nbsp;</p>




<h3>From 1-D Lua table</h3> 
<p>Please note that table must contain only numeric entries.</p>
<p class="CodeCommand">
    &gt;&gt;t={1, 2, 3, 4, 5, 6} <br>
    
    <br>
    
    &gt;&gt;m=std.util.tomatrix(t, 2, 3) <br>
    &gt;&gt;m <br>
    1 &emsp; 2 &emsp; 3 <br>
    4 &emsp; 5  &emsp; 6
</p>



<p>&nbsp;</p>




<h3>From 2-D Lua table</h3> 
<p>Please note that table must contain only numeric entries.</p>
<p class="CodeCommand">
    &gt;&gt;t={ {1, 2}, {3, 4}, {5, 6} } <br>
    
    <br>
    
    &gt;&gt;m=std.util.tomatrix(t) <br>
    &gt;&gt;m <br>
    1 &emsp;  2 <br>
    3 &emsp;  4 <br>
    5 &emsp;  6
</p>

<p>&nbsp;</p>

<p>You can also use expressions that return a number.</p>
<p class="CodeCommand">
    &gt;&gt;t={ {1, math.cos(0.95)}, {3, 4}, {5, 6} } <br>
    
    <br>
    
    &gt;&gt;m=std.util.tomatrix(t) <br>
    &gt;&gt;m <br>
    1 &emsp;  <span style="color: red"> 0.58168</span> <br>
    3 &emsp;  4 <br>
    5 &emsp;  6
</p>



<p>&nbsp;</p>

<h3>From Range</h3> 
<p>Please note that table must contain only numeric entries.</p>

<img src="../images/tomatrix_range.png" alt=""/>

<p class="CodeCommand">
        
    &gt;&gt;m=std.util.tomatrix(rng, 3, 2) <br>
    &gt;&gt;m <br>
    1 &emsp;  2 <br>
    3 &emsp;  4 <br>
    5 &emsp;  6
</p>

<p>
    Please note that number of rows and columns of matrix must match number of rows and columns of the range.
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="util.tovector.php">std.util.tovector</a>
</div>


</body>

</html>
