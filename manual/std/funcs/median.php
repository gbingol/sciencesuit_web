<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>median</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>median</h1>

<p>
    Computes the median of an <a href="../index.php">iteratable container</a>.
</p>



<p class="funcsignature">   
    median(container) &rarr; number   
</p>



<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;std.median(t) <br />
    3.5 <br />

    <br />

    &gt;&gt;t={a=3, b=5, c=2, d=1, e=7, f=4} <br />
    &gt;&gt;std.median(t) <br />
    3.5	<br />

    <br />
    <br />

    &gt;&gt;v=std.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 7&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />
    <br />
    &gt;&gt;std.median(v) <br />
    3.5 <br />

    <br />
    <br />

    &gt;&gt;m  <br />
    &nbsp;
    1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp;&nbsp; 3  <br />
   &nbsp; 4&nbsp;&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6 <br />
    &nbsp;
    7&nbsp;&nbsp;&nbsp;&nbsp; 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9  <br />

    <br />

    &gt;&gt;std.median(m) <br />
    5	
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>




    

<div class="RelatedLinks">
    <a href="quantile.php">quantile</a>
    <a href="minmax.php#min">min</a>
    <a href="mean.php">mean</a>
    <a href="minmax.php#max">max</a>
</div>

</body>

</html>
