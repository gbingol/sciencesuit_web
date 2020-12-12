<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>quantile</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>quantile</h1>

<p>Computes the quantile of an <a href="../index.php">iteratable container</a>.</p>
    
<p class="funcsignature">
    
    quantile(x=, prob=) &rarr; number <br>
    
    <br>
    
    quantile{x=, prob=} &rarr; number
     
</p>



<p>&nbsp;</p>



<p class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />
    <br>
    <br>
    &gt;&gt;std.quantile{x=t, prob=0} <br>
    1 <br>

    <br>

    &gt;&gt;std.quantile{x=t, prob=0.25} <br>
    2.25	 <br>

    <br>

    &gt;&gt;std.quantile{x=t, prob=0.5} <br>
    3.5	<br>

    <br>

    &gt;&gt;std.quantile{x=t, prob=0.75} <br>
    4.75	<br>

    <br>

    &gt;&gt;std.quantile{x=t, prob=1} <br>
    7	

</p>






<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="median.php">median</a>
    <a href="mean.php">mean</a>
</div>

</body>

</html>
