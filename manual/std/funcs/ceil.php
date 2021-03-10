<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ceil</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>


<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>
    



<h1>ceil</h1>
    
<p>Computes the integer which is no less than the given parameter.</p>

   
    
<p>&nbsp;</p>



<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
    ceil(param=) &rarr; param
</p>

<p>
    <em>param</em> can be real number or an iteratable container.
</p>



<p>&nbsp;</p>


<h3 id="complex">Complex numbers</h3>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>
    &gt;&gt;std.ceil(c) <br>
    <span style="color: red;">std.ceil does not support complex numbers</span>
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="containers">Containers</h3>

<p>
      The container must be an iteratable container.
</p>

<p class="CodeCommand">
    &gt;&gt;t={1.2, -2.1, 0.5, -0.5} <br>
    &gt;&gt;std.ceil(t) <br>
    2 &emsp;  -2 &emsp;  1  &emsp; 0   <br>

    <br>
    <br>

    &gt;&gt;arr=std.util.toarray(t) <br>
    &gt;&gt;std.ceil(arr) <br>
    2 &emsp;  -2 &emsp;  1  &emsp; 0 
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="floor.php">std.floor</a>
</div>


</body>

</html>