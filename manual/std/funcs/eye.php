<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Identity Matrix</title>
    
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
   
    <script src="/jsscripts/siteanalytics.js"></script>
</head>









<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>eye</h1>

<p>Creates identity matrix.</p>

<p class="funcsignature">
    
    eye(m, [n=]) &rarr; Matrix
    
</p>

<p>where arguments <em>m, n n</em> are integers greater than 1.</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<p class="CodeCommand">
    &gt;&gt;std.eye(2) <br />
    1&nbsp;&nbsp;&nbsp; 0 <br />
    0&nbsp;&nbsp;&nbsp; 1 <br />

    <br />
    <br>

    &gt;&gt;std.eye(3,2)    <br />
    1&nbsp;&nbsp;&nbsp; 0   <br />
    0&nbsp;&nbsp;&nbsp; 1   <br />
    0&nbsp;&nbsp;&nbsp; 0   <br />

    <br />
    <br>

    &gt;&gt;std.eye(2,3)    <br />
    1&nbsp;&nbsp;&nbsp; 0&nbsp;&nbsp;&nbsp; 0   <br />
    0&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 0
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
</div>


</body>
</html>