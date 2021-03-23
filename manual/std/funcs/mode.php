<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>mode</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>mode</h1>

<p>
    Finds the most frequently occuring element/elements in an <a href="../index.php">iteratable container</a>.
</p>
    
<p class="funcsignature">
    
    mode(Container) &rarr; nil / number / Lua table
    
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<p class="CodeCommand">
    &gt;&gt;t={1, 2, 3, 4, 5} <br />
    &gt;&gt;std.mode(t) <br />
    <span class="LuaKeyword">nil</span> <br />

    <br />

    &gt;&gt;t={1, 3, 5, 7, 9, 3, 5, 7, 3, 6} <br />
    &gt;&gt;std.mode(t) <br />
    3	<br />

    <br />

    &gt;&gt;v=std.util.tovector{1, 3, 5, 5, 7, 9, 3, 5, 7, 3, 6} <br />
    &gt;&gt;std.mode(v) <br />
    3&nbsp;&nbsp;&nbsp; 5	

</p>







<p>&nbsp;</p>
<p> &nbsp;</p>




<div class="RelatedLinks">
    <a href="minmax.php#min">min</a>
    <a href="median.php">median</a>
    <a href="mean.php">mean</a>
    <a href="minmax.php#max">max</a>
</div>



</body>

</html>
