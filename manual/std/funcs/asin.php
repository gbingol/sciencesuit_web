<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>asin</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>


<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>
    
    



<h1>asin</h1>
    
<p>Computes the arcsine (inverse sine)</p>
    

<p>&nbsp;</p>



<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
    asin(param=) &rarr; param
</p>

<p>
    <em>param</em> can be real or complex number, or an iteratable container.
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="complex">Complex numbers</h3>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>
    &gt;&gt;std.asin(c) <br>
    0.633984 + 2.30551i
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="containers">Containers</h3>

<p>
      The container must be an iteratable container.
</p>

<div class="CodeCommand">
    &gt;&gt;t={1, -1, 0.5, -0.5} <br>
    &gt;&gt;std.asin(t) <br>
    1.5708 &emsp; -1.5708 &emsp; 0.523599 &emsp; -0.523599  <br>

    <br>
    <br>

    &gt;&gt;v=std.util.tovector(t) <br>
    &gt;&gt;std.asin(v) <br>
    1.5708 &emsp; -1.5708 &emsp; 0.523599 &emsp; -0.523599 &emsp; COL
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="acos.php">std.acos</a>
    <a href="atan.php">std.atan</a>
    <a href="sin.php">std.sin</a>
</div>

</body>

</html>