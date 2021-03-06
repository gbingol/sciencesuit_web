<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>acos</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>


<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    
    



<h1>acos</h1>
    
<p>
    Computes the arccosine (inverse cosine).
</p>
    

<p>&nbsp;</p>    

<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
    acos(param=) &rarr; param
</p>

<p>
    <em>param</em> can be real or complex number, or an iteratable container.
</p>



<p>&nbsp;</p>



<h3 id="complex">Complex numbers</h3>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>
    &gt;&gt;std.acos(c) <br>
    0.936812 - 2.30551i
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="containers">Containers</h3>

<p>
      The container must be an iteratable container.
</p>

<div class="CodeCommand">
    &gt;&gt;t={1, -1, 0.5, -0.5} <br>
    &gt;&gt;std.acos(t) <br>
    0 &emsp; 3.14159 &emsp; 1.0472 &emsp; 2.0944  <br>

    <br>
    <br>

    &gt;&gt;v=std.util.tovector(t) <br>
    &gt;&gt;std.acos(v) <br>
    0 &emsp; 3.14159 &emsp; 1.0472 &emsp; 2.0944 &emsp; COL
</div>





<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
    <a href="atan.php">std.atan</a>
    <a href="asin.php">std.asin</a>
</div>


</body>

</html>