<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>pow</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>


<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>


<h1>pow</h1>


    
<p>
      If <i>arg</i> is a number returns x<sup>y</sup>, equivalent to x^y <br>
      If <i>arg</i> is an iteratable container, computes x^y on each element.
 </p>
    
<h3>Syntax:</h3>
<p>pow(arg, y) &rarr; arg</p>

<p>&nbsp;</p>

<h3>Example:</h3>
<p>
      &gt;&gt;std.pow( {2, 3, 4}, 2) <br>
      4 &nbsp;&nbsp; 9 &nbsp;&nbsp;	16
</p>

</body>

</html>