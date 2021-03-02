<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>accumulate</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

    
</head>





<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>accumulate</h1>

<p>
    Accumulates addable entries in an <a href="../index.php">iteratable container</a>. 
    
    It is a powerful and a flexible function and forms the backbone for general containers 
    for a number of functions, such as 
    <a href="mean.php">mean</a>, <a href="sum.php">sum</a> and <a href="var.php">var</a>.
</p>

<p class="funcsignature">
    accumulate(container=, x0=, f=<span class="LuaKeyword">nil</span>) &rarr; entry, integer 
</p>

<p>returns an element of type <em>entry</em> in the <em>container</em> and the number of entries in the <em>container</em>.</p>
    
<p>&nbsp;</p>


<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>container:</td> 
        <td>An iteratable container with addable entries</td>
    </tr>

    <tr>
        <td>x0:</td> 
        <td>Initial value</td>
    </tr>

    <tr>
        <td>f:</td> 
        <td>Unary function applied on each entry in the container</td>
    </tr>
</table>
   
    



<p>&nbsp;</p>
<p>&nbsp;</p>



    
<p>By default Lua tables are iteratable:</p>
<p class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />

    <br />
    <span class="LuaComment">--equivalent to sum function</span> <br />
    &gt;&gt;std.accumulate(t, 0) <br />
    22	<br />
    6	<br />

    <br />

    &gt;&gt;v=std.util.tovector(t) <br />
    &gt;&gt;v <br />
    3&emsp; 5&emsp; 2&emsp; 1&emsp; 7&emsp; 4&emsp; COL <br />
    <br />
    &gt;&gt;std.accumulate(v, 0) <br />
    22	<br />
    6	<br />

    <br />
    <br />
    <span class="LuaComment">--Sum up squares of entries</span> <br />
    &gt;&gt;std.accumulate(t, 0, <span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 
    <span class="LuaKeyword">end</span>) <br />
    104	 <br />
    6	
</p>


<p>&nbsp;</p>


<p>
    Since <a href="../classes/vector.php">Vectors</a> are addable (v<sub>1</sub>+v<sub>2</sub>=v<sub>3</sub>) 
    and Lua tables are iteratable, following is doable:
</p>

<p class="CodeCommand">
    &gt;&gt;t={} <br />
    &gt;&gt;t.v1=std.util.tovector{1, 2, 3, 4} <br />
    &gt;&gt;t.v2=std.util.tovector{4, 3, 2, 1} <br />
    <br />
    &gt;&gt;t <br />
    v1=Vector <br />
    v2=Vector <br />

    <br />
    &gt;&gt;std.accumulate(t, 0) <br />
    5&emsp; 5&emsp; 5&emsp; 5&emsp; COL <br />
    2	

</p>

<p>&nbsp;</p>

<p>
    Note that since addition of a Vector with a number is also defined (<em>v<sub>1</sub>+number=v<sub>2</sub></em>), 
    the function accepted 0 as the initial value in the example above. 
    
    Alternatively, the initial value, <em>x0,</em> could have been as same as the type in the container:
</p>

<p class="CodeCommand">
    &gt;&gt;x0=std.util.tovector{0, 0, 0, 0} <br />

    <br />

    &gt;&gt;std.accumulate(t, x0) <br />
    5&emsp; 5&emsp; 5&emsp; 5&emsp; COL <br />
    2	
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="mean.php">mean</a>
    <a href="sum.php">sum</a>
    <a href="var.php">var</a>
</div>


</body>

</html>
