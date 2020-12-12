<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>kurt</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>










<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>kurt</h1>
<p>Computes the excess kurtosis.</p>

<p class="funcsignature">
        
    kurt(v) &rarr; number
         
</p>


<p>where argument <em>v</em> is of type Vector.</p>
    

<p>&nbsp;</p>
   

<h3>Example</h3>
<p>Kurtosis of different distributions:</p>

<p class="CodeCommand">
    <span class="LuaComment">--Normal Distribution </span> <br />
    &gt;&gt;v=std.rnorm(10000) <br />
    &gt;&gt;std.kurt(v) <br />
    0.0220726	<br />
    
    
    <br />
    <br />
    
    
    <span class="LuaComment">--Uniform Distribution </span> <br />
    &gt;&gt;v=std.runif(10000) <br />
    &gt;&gt;std.kurt(v) <br />
    -1.20449	<br />
    
    
    <br />
    <br />
    
    
    
    <span class="LuaComment">--t Distribution with increasing degrees of freedom </span> <br />
    &gt;&gt;v=std.rt{n=10000, df=3} <br />
    &gt;&gt;std.kurt(v) <br />
    21.2626	<br />
    
    <br />
    
    &gt;&gt;v=std.rt{n=10000, df=10} <br />
    &gt;&gt;std.kurt(v) <br />
    1.15628	 <br />
    
    <br />
    
    &gt;&gt;v=std.rt{n=10000, df=25} <br />
    &gt;&gt;std.kurt(v) <br />
    0.266284	
</p>
    
    




<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="skew.php">skew</a> 
    <a href="dist_unif.php#runif">runif</a>
    <a href="dist_norm.php#rnorm">rnorm</a>
    <a href="dist_pois.php#rpois">rpois</a>
</div>


</body>

</html>
