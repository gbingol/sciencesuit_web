<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>covariance</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        .auto-style1 {
            background-color: #FFFF00;
        }
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>cov</h1>

<p>Computes the covariance.</p>

<p class="funcsignature"> 
    cov(y1, y2) &rarr; number (Sample)<br />
    
    <br>

    cov.<span class="auto-style1">s</span>(y1, y2) &rarr; number (Sample) <br>
    
    <br>

    cov.<span class="auto-style1">p</span>(y1, y2) &rarr; number (Population)
    
</p>


<p>where y1 and y2 are of type Vector.</p>


<p>&nbsp;</p>



<h3>Example</h3>
<p>
    What is the covariance of the dataset, y1 on the line 
    y1=2x+1 and and y2 on the line y2=4x+2 in the interval [1,5]. 
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.linspace(1,5,5) <br />
    <br />
    &gt;&gt;y1=2*x+1 <br />
    &gt;&gt;y2=4*x+2 <br />
    <br />
    &gt;&gt;std.cov(y1,y2)^2 <br />
    20
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="cor.php">cor</a>
    <a href="var.php">var</a>
</div>


</body>

</html>
