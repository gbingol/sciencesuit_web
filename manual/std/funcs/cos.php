<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>cos</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>


<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>
    



<h1>cos</h1>
    
<p>Computes the cosine.</p>


<p>&nbsp;</p>



<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
    cos(param=) &rarr; param
</p>

<p>
    <em>param</em> can be real or complex number, or an iteratable container.
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="complex">Complex numbers</h3>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>
    &gt;&gt;std.cos(c) <br>
    -27.0349 - 3.85115i
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="containers">Containers</h3>

<p>
      The container must be an iteratable container.
</p>

<div class="CodeCommand">
    &gt;&gt;t={3.1415, 0, std.Complex.new(1,2) } <br>
    &gt;&gt;std.cos(t) <br>
    -1 &emsp;  1 &emsp;  Complex  <br>

    <br>
    <br>

    &gt;&gt;v=std.rand(3) <br>
    &gt;&gt;v <br>
    0.848325   &emsp; 0.588981  &emsp;  0.00752196   &emsp; COL <br>

    <br>

    &gt;&gt;std.cos(v) <br>
    0.66124  &emsp;  0.831507  &emsp;  0.999972  &emsp;  COL
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="cosh.php">std.cosh</a>
    <a href="sin.php">std.sin</a>
</div>


</body>

</html>