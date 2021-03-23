<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>abs</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

    <script src="/jsscripts/matrixtotable.js"></script>
  
</head>
    
    
<body>
    


<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    


<h1>abs</h1>
    
<p>
      Computes the absolute value for real numbers and the magnitude for the complex number.
</p>

<p>&nbsp;</p>    

<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
      abs(param=) &rarr; number/param
</p>

<p>
      where <em>param</em> can be real or complex number, or an iteratable container.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="complex">Complex number</h3>

<p class="CodeCommand">
      &gt;&gt;c=std.Complex.new(1, 1) <br>
      &gt;&gt;std.abs(c) <br>
      1.41421
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="containers">Containers</h3>

<p>
      The container must be an iteratable container.
</p>

<div class="CodeCommand">
      &gt;&gt;t={1, -2, 3, -4} <br>
      &gt;&gt;std.abs(t)  <br>
      1 &emsp;  2 &emsp;  3 &emsp;  4   <br>

      <br>
      <br>

      &gt;&gt;arr <br>
      -1 &emsp;  2  &emsp; 3 + 2i &emsp;  "A"   <br>

      <br>

      &gt;&gt;std.abs(arr) <br>
      1  &emsp; 2  &emsp; 3.60555 &emsp; <span class="LuaKeyword">nil</span>  <br>

      <br>

      &gt;&gt;m=std.util.tomatrix{{-1,2}, {-3, 4}} <br>
      &gt;&gt;m <br>
      <script>
            matrixtotable([[-1,2], [-3, 4]]);

            document.write("<br>");

            document.write("&gt;&gt;std.abs(m)");

            matrixtotable([[1, 2],[3,4]]);

      </script>   
</div>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
      <a href="../classes/complex.php">Complex</a>
</div>

</body>

</html>