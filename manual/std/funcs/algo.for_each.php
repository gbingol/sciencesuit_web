<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>for_each</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>










<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>for_each</h1>

<p>
    Applies a function to each entry in an <a href="../index.php">iteratable container</a>. 
    It is a powerful and a very flexible function and in the <a href="../index.php">std</a> library 
    forms the backbone for a number of essential math functions, such as sin, cos... .
</p>

<p class="funcsignature">
    for_each(container=, func=, ...) &rarr; container
</p>

<p>returns the same type of the <em>container</em>. </p>



<p>&nbsp;</p>



<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>container:</td> 
        <td>An iteratable container with addable entries</td>
    </tr>

    <tr>
        <td>func:</td> 
        <td>A unary, binary or multivariable function applied on each entry in the container</td>
    </tr>

    <tr>
        <td>...</td> 
        <td>2<sup>nd</sup>, 3<sup>rd</sup>... arguments of the parameter <em>func</em>.</td>
    </tr>
</table>


<p>&nbsp;</p>





<h3>Notes:</h3>

<ol>
    <li>At the end of the operation, the entries in the container is modified.</li>
    <li>The entries in the container must support the operation applied on them.</li>

</ol>




<p>&nbsp;</p>




<p class="CodeCommand">
    &gt;&gt;t={1, 2, 3, 4} <br />
    &gt;&gt;std.algo.for_each(t, <span class="LuaKeyword">function</span>(x) <span class="LuaKeyword">return</span> x^2 <span class="LuaKeyword">end</span>) <br />
    1 &emsp; 4&emsp;9&emsp;16	<br />

    <br />
    

    &gt;&gt;t <br />
    1&emsp;4&emsp;	9&emsp;	16	 <br />

    <br />
    <br />

    &gt;&gt;t={1, 2, 3, 4} <br />
    &gt;&gt;y=2 <br />
    &gt;&gt;std.algo.for_each(t, <span class="LuaKeyword">function</span>(x, <mark>y</mark>) <span class="LuaKeyword">return </span>math.pow(x, y) <span class="LuaKeyword">end</span>, <mark>y</mark>) <br />
    1&emsp;4&emsp;9&emsp;	16	 <br />

     <br />

    &gt;&gt;t <br />
    1&emsp;4&emsp;9&emsp;16	<br />

    <br />
    <br />

    &gt;&gt;v=std.util.tovector{1, 2, 3, 4} <br />
    &gt;&gt;y=2 <br />
    &gt;&gt;std.algo.for_each(v, <span class="LuaKeyword">function</span>(x, <mark>y</mark>) <span class="LuaKeyword">return</span> math.pow(x, y) <span class="LuaKeyword">end</span>, <mark>y</mark>) <br />
    1 &emsp; 4 &emsp;  9 &emsp;  16 &emsp;  COL <br />

     <br />

    &gt;&gt;v <br />
    1 &emsp;  4 &emsp;  9 &emsp;  16 &emsp;  COL <br />
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    
    <a href="algo.accumulate.php">accumulate</a>
    <a href="algo.find.php">find</a>
</div>


</body>

</html>
