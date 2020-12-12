<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>round</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>round</h1>

<p>Rounds a given floating-point number to the nearest integer with the specified number of decimals.</p>

<p class="funcsignature">   
    round(number=, digits=0) &rarr; number/integer 
</p>



<p>&nbsp;</p>
 

<p class="CodeCommand">
    &gt;&gt;x=3.141516 <br>
    
    <br>
    
    &gt;&gt;std.round(x)<br>
    3	<br>
    
    <br>
    
    &gt;&gt;std.round(x, 0) <br>
    3	<br>
    
    <br>
    
    &gt;&gt;std.round(x, 1) <br>
    3.1	<br>
    
    <br>
    
    &gt;&gt;std.round(x, 2) <br>
    3.14	<br>
    
    <br>
    
    &gt;&gt;std.round(x, 3) <br>
    3.142	
   
</p>



<p>&nbsp;</p>



<p>Let's check the return types:</p>

<p class="CodeCommand">
    &gt;&gt;x=3.141516 <br>
    
    <br>
    
    &gt;&gt;math.type(std.round(x, 0)) <br>
    integer <br>
    
    <br>

    &gt;&gt;math.type(std.round(x)) <br>
    integer <br>
    
    <br>

    &gt;&gt;math.type(std.round(x, 1)) <br>
    float

</p>




<p>&nbsp;</p>




<p>Some possible pitfalls in usage:</p>

<p class="CodeCommand">
    &gt;&gt;x=3.5 <br>
    
    <br>
    
    &gt;&gt;std.round(x, 10) <br>
    3.5	<br>
    
    <br>
    
    &gt;&gt;std.round(x, 1) <br>
    3.5	<br>
    
    <br>
    
    &gt;&gt;std.round(x) <br>
    4	<br>
    
    <br>
    <br>
    
    &gt;&gt;y=3.49999 <br>
    
    <br>
    
    &gt;&gt;std.round(y) <br>
    3	<br>
    
    <br>
    
    &gt;&gt;std.round(y, 1) <br>
    3.5	<br>
    
    <br>
    
    &gt;&gt;std.round(y, 2) <br>
    3.5	<br>
    
    <br>
    
    &gt;&gt;std.round(y, 3) <br>
    3.5	
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">

</div>


</body>

</html>
