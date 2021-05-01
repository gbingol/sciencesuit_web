<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>search_if</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>search_if</h1>
<p>
    Finds the entries in an iteratable container satisfying a given condition. 
    Compare with <a href="algo.find.php#find_if">find_if</a>.
</p>

<p class="funcsignature">
    search_if(container=, function=) &rarr; Entries, integer 
</p>


<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>Container:</td> 
        <td>An iteratable container</td>
    </tr>
    <tr>
        <td>size:</td> 
        <td>A Unary Predicate function &larr; function</td>
    </tr>
</table>



<p>&nbsp;</p>



<p class="CodeCommand">
    &gt;&gt;t={10, 20, 30, 40} <br />

    <br />

    &gt;&gt;std.algo.search_if(t, <span class="LuaKeyword">function</span>(x) <span class="LuaKeyword">return</span> x>15 <span class="LuaKeyword">end</span>) <br />
    20&emsp; 30&emsp; 40 <br />
    3 <br />

    <br />

    &gt;&gt;std.algo.search_if(t, <span class="LuaKeyword">function</span>(x) <span class="LuaKeyword">return</span> x<15 <span class="LuaKeyword">end</span>) <br />
    10 <br />
    1
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="algo.find.php#find_if">find_if</a>
    <a href="../index.php">Iteratable container</a>
</div>
 

</body>

</html>
