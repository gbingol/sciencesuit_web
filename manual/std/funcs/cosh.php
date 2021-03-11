<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>cosh</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>



<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>
    



<h1>cosh</h1>
    
<p>
      Computes the hyperbolic cosine
</p>



<p>&nbsp;</p>



<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
      cosh(param=) &rarr; param
</p>

<p>
      <em>param</em> can be real or complex number, or an iteratable container.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="complex">Complex numbers</h3>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>
    &gt;&gt;std.cosh(c) <br>
    -6.58066 - 7.58155i
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="containers">Containers</h3>

<p>
      The container must be an iteratable container.
</p>

<div class="CodeCommand">
      &gt;&gt;t={-1, 0, 1} <br>
      &gt;&gt;std.cosh(t) <br>
      1.54308 &emsp;  1  &emsp; 1.54308 

      <br>
      <br>

      &gt;&gt;arr=std.util.toarray{-1, 0, 1, "3+4i"} <br>
      &gt;&gt;std.cosh(arr) <br>
      1.54308 &emsp;  1  &emsp; 1.54308 &emsp;  -6.58066 - 7.58155i 
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
      <a href="cos.php">std.cos</a>
      <a href="sinh.php">std.sinh</a>
      <a href="tanh.php">std.tanh</a>
</div>


</body>

</html>