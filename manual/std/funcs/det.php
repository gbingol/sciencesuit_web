<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Determinant</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>





<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>det</h1>
<p>Computes the determinant of given square matrix</p>

<p class="funcsignature">
    det(m) &rarr; number  
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 3, 2}, {4, 5, 6}, {7, 8, 9}} <br />

    &gt;&gt;m <br />

    1&emsp; 3&emsp; 2 <br />
    4&emsp; 5&emsp; 6 <br />
    7&emsp; 8&emsp; 9 <br />

    <br />
    &gt;&gt;std.det(m) <br />
    9	
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="eye.php">eye</a>
    <a href="lu.php">lu</a>
    <a href="qr.php">qr</a>
    <a href="eig.php">eig</a>
</div>



</body>
</html>