<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>minmax, min, max</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
    <style>
        table.algright td
        {
            text-align: right;
            padding-right: 6px;
            padding-left: 6px;
        }
    </style>
    
    

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


    
    
    
    
<h1 id="minmax">minmax</h1>
<p>
    Finds the minimum and maximum entries in an <a href="../index.php">iteratable container</a>.
</p>

<p class="funcsignature">
    
    minmax(container) &rarr; entry, entry <br>
    
    <br>
    
    minmax(Matrix, axes=) &rarr; Vector, Vector
    
</p>



<p>&nbsp;</p>




<h3 id="vector_minmax">Vector</h3>


<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3 &emsp; 5&emsp; 2&emsp; 1&emsp; 7&emsp; 4&emsp; COL <br />
    <br />
    &gt;&gt;std.minmax(v) <br />
    1 &emsp;   7	
</p>




<p>&nbsp;</p>



<h3 id="matrix_minmax">Matrix</h3>
    
<div class="CodeCommand">
    
    
    &gt;&gt;m  
    
    <table class="algright">
        <tr>
            <td>2</td>
            <td>4</td>
            <td>-1</td>
        </tr>
        <tr>
            <td>-4</td>
            <td>-5</td>
            <td>3</td>
        </tr>
        <tr>
            <td>2</td>
            <td>-5</td>
            <td>-4</td>
        </tr> 
    </table>

    <br />

    &gt;&gt;std.minmax(m) <br />
    -5	&emsp;  4 <br>
    
    <br>
    &gt;&gt;std.minmax(m, 0) <br />
    -4  &emsp; -5  &emsp; -4  &emsp; COL <br>
    2  &emsp; 4  &emsp; 3  &emsp; COL <br>
    
    <br>
    
    &gt;&gt;std.minmax(m, 1) <br>
    -1  &emsp; -5  &emsp; -5 &emsp;  COL <br>
    4  &emsp; 3  &emsp; 2  &emsp; COL <br>

</div>



<p>&nbsp;</p>




<h3 id="array">Array</h3>
<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp; "b" &emsp; 1 &emsp; 2 &emsp; 3.5 <br> 
    
    <br>
    
    &gt;&gt;std.minmax(arr) <br>
    1 <br>
    b 
</p>




<p>&nbsp;</p>





<h3 id="container_minmax">General container</h3>
<p class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;std.minmax(t) <br />
    1	<br />
    7   <br />

    <br />
    <br />

    &gt;&gt;t={a=3, b=5, c=2, d=1, e=7, f=4} <br />
    &gt;&gt;std.minmax(t) <br />
    1	<br />
    7	
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>












<!-- ************************************************************************ -->

<h2 id="min">min</h2>
<p>
    Uses <a href="#minmax">minmax</a> to find the minimum of an iteratable container.
</p>

<p class="funcsignature">
    
    min(container) &rarr; entry <br>

    <br>

    min(Matrix, axes=) &rarr; Vector
    
</p>


<p>&nbsp;</p>


<div class="CodeCommand">
    
    <span class="LuaComment">--Vector</span><br>
    
    &gt;&gt;v=std.util.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&emsp; 5&emsp; 2&emsp; 1&emsp; 7&emsp; 4&emsp; COL <br />
    
    <br />
    
    &gt;&gt;std.min(v) <br />
    1	<br />

    
    
    <br />
    <br />
    
    
    <span class="LuaComment">--Matrix</span><br>

    &gt;&gt;m  
   <table class="algright">
        <tr>
            <td>2</td>
            <td>4</td>
            <td>-1</td>
        </tr>
        <tr>
            <td>-4</td>
            <td>-5</td>
            <td>3</td>
        </tr>
        <tr>
            <td>2</td>
            <td>-5</td>
            <td>-4</td>
        </tr> 
    </table>

    <br />

    &gt;&gt;std.min(m) <br />
    -5	<br>
    
    <br>
    &gt;&gt;std.min(m, 0) <br />
    -4  &emsp; -5  &emsp; -4  &emsp; COL <br>
    
    <br>
    
    &gt;&gt;std.min(m, 1) <br>
    -1  &emsp; -5  &emsp; -5 &emsp;  COL <br>
    
    <br>
    <br>
    
    
    <span class="LuaComment">--Array</span><br>
    
    &gt;&gt;arr <br>
    "a" &emsp; "b" &emsp; 1 &emsp; 2 &emsp; 3.5 <br> 
    
    <br>
    
    &gt;&gt;std.min(arr) <br>
    1	

</div>











<p>&nbsp;</p>
<p>&nbsp;</p>











<!-- ********************************************************************** -->

<h2 id="max">max</h2>
<p>
    Uses <a href="#minmax">minmax</a> to find the maximum of an iteratable container.
</p>

<p class="funcsignature">
    
    max(container) &rarr; entry <br>
    
    <br>
    
    max(Matrix, axes=) &rarr; Vector
    
</p>


<p>&nbsp;</p>


<div class="CodeCommand">
    
    
    <span class="LuaComment">--Vector</span><br>
    &gt;&gt;v=std.util.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3&emsp; 5&emsp; 2&emsp; 1&emsp; 7&emsp; 4&emsp; COL <br />
    <br />
    &gt;&gt;std.max(v) <br />
    7	<br />

    
    
    <br />
    <br />

    
    <span class="LuaComment">--Matrix</span><br>
    
    &gt;&gt;m  <br />
    <table class="algright">
        <tr>
            <td>2</td>
            <td>4</td>
            <td>-1</td>
        </tr>
        <tr>
            <td>-4</td>
            <td>-5</td>
            <td>3</td>
        </tr>
        <tr>
            <td>2</td>
            <td>-5</td>
            <td>-4</td>
        </tr>
    </table>


    <br />

    &gt;&gt;std.max(m) <br />
    4 <br>
    
    <br>
    &gt;&gt;std.max(m, 0) <br />
    2  &emsp; 4  &emsp; 3  &emsp; COL <br>
    
    <br>
    
    &gt;&gt;std.max(m, 1) <br>
    4  &emsp; 3  &emsp; 2  &emsp; COL <br>
    
    
    
    
    <br>
    <br>
    
    
    
    <span class="LuaComment">--Array</span><br>
     &gt;&gt;arr <br>
    "a" &emsp; "b" &emsp; 1 &emsp; 2 &emsp; 3.5 <br> 
    
    <br>
    
    &gt;&gt;std.max(arr) <br>
    b

</div>









<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="median.php">median</a>
    <a href="mean.php">mean</a>
</div>


</body>

</html>
