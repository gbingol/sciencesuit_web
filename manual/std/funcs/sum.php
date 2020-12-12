<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>sum</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>sum</h1>
<p>
    sums up addable entries in an <a href="../index.php">iteratable container</a>.
    For <a href=#container>containers</a> other than Vector and Matrix, 
    it uses the <a href="accumulate.php">accumulate</a> function.
</p>

<p class="funcsignature"> 
    
    sum(container=) &rarr; entry <br>
    
    <br>
    
    sum(Matrix=, [axes=]) &rarr; Vector
    
</p>

<p>
    returns sum of elements of type <em>entry</em> in the <em>container</em>. 
    Argument <em>axes</em> is only available for <a href=#matrix>Matrix</a> data type.
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h2 id="vector">Vector</h2>

<p class="CodeCommand">
    &gt;&gt;v=std.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 7&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />
    <br />
    &gt;&gt;std.sum(v) <br />
    22
</p>


<p>&nbsp;</p>

<h2 id="matrix">Matrix</h2>
<p class="CodeCommand">
    &gt;&gt;m=std.tomatrix{ {1, 2} , {3, 4} } <br />
    &gt;&gt;m  <br />
       1&nbsp;&nbsp;&nbsp; 2   <br />
       3&nbsp;&nbsp;&nbsp; 4   <br />

    <br />

    &gt;&gt;std.sum(m) <br />
    10	<br>

    <br>

    &gt;&gt;std.sum(m, 0) <br>
    4  &nbsp;&nbsp;&nbsp; 6  &nbsp;&nbsp;&nbsp; COL <br>

    <br>
    &gt;&gt;std.sum(m, 1) <br>
    3 &nbsp;&nbsp;&nbsp;  7  &nbsp;&nbsp;&nbsp; COL

</p>



<p>&nbsp;</p>

<h2 id="container">General containers</h2>

<h3 id="table">Lua table</h3>
<p class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;std.sum(t) <br />
    22	<br>
    
    <br>
    &gt;&gtt2={a=1, b=2, 3, 4, 5} <br>
    &gt;&gtstd.sum(t2) <br>
    15	
</p>



<p>&nbsp;</p>


<p>Since <a href="../classes/vector.php">Vectors</a> are 
    addable (v<sub>1</sub>+v<sub>2</sub>=v<sub>3</sub>) and 
    Lua tables are iteratable, the following is also doable:
</p>
<p class="CodeCommand">
    &gt;&gt;t={} <br />
    &gt;&gt;t.v1=std.tovector{1, 2, 3, 4} <br />
    &gt;&gt;t.v2=std.tovector{4, 3, 2, 1} <br />
    <br />
    &gt;&gt;t <br />
    v1=Vector <br />
    v2=Vector <br />

    <br />
    &gt;&gt;std.sum(t) <br />
    5&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; COL <br />

</p>

<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="accumulate.php">accumulate</a>
    <a href="mean.php">mean</a>
    <a href="var.php">var</a>
</div>


</body>

</html>
