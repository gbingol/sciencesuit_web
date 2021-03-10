<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>atan</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>


<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>
    



<h1>atan</h1>
    
<p>
    Computes the arctan (inverse tangent)
</p>
    

<p>&nbsp;</p>


<h3>Syntax</h3> 

<p class="funcsignature">
    atan(param=) &rarr; param
</p>

<p>
    <em>param</em> can be real or complex number, or an iteratable container.
</p>


<p>&nbsp;</p>


<h3 id="complex">Complex numbers</h3>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>
    &gt;&gt;std.atan(c) <br>
    1.44831 + 0.158997i
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="containers">Containers</h3>

<p>
      The container must be an iteratable container.
</p>

<div class="CodeCommand">
    &gt;&gt;t={1, -1, 0.5, -0.5} <br>
    &gt;&gt;std.atan(t) <br>
    0.785398 &emsp;  -0.785398 &emsp;  0.463648 &emsp;  -0.463648   <br>

    <br>
    <br>

    &gt;&gt;v=std.util.tovector(t) <br>
    &gt;&gt;std.atan(v) <br>
    0.785398 &emsp; -0.785398 &emsp; 0.463648 &emsp; -0.463648  &emsp; COL <br>

    <br>
    <br>

    &gt;&gt;arr=std.util.toarray(t) <br>
    &gt;&gt;std.atan(arr) <br>
    0.785398 &emsp; -0.785398 &emsp; 0.463648 &emsp; -0.463648   
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="acos.php">std.acos</a>
    <a href="asin.php">std.asin</a>
    <a href="tan.php">std.tan</a>
</div>

</body>

</html>