<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cumulative Integration</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>cumtrapz</h1>

<p>
    Computes the left-tailed cumulative area and returns a Vector/Array.
</p>

<p class="funcsignature">
    
    cumtrapz(f=, a=, b=) &rarr; Vector<br />
    
    <br>
    
    cumtrapz(f=, nodes=) &rarr; Vector/Array<br>
    
    <br>
    
    cumtrapz{[f=], [a=], [b=], [inter=10], [x=], [y=], [nodes=]} &rarr; Vector/Array
    
</p>

<p>&nbsp;</p>

<details>
    <summary><b>Expected Combinations for Table Input</b></summary>

    <ul class="linespaced">
        <li>
            cumtrapz{f=, a=, b=,  [inter=10]} &rarr; Vector
        </li>

        <li>
            cumtrapz{f=, nodes= } &rarr; Vector/Array
        </li>

        <li>
            cumtrapz{x=, y= } &rarr; Vector/Array
        </li>

    </ul>
</details>



<p>&nbsp;</p>



<h3>Arguments:</h3>


<table class="funcarguments">
    <tr>
        <td>f:</td> 
        <td>A unary function (integrand), f(x) &larr; function</td>
    </tr>
    <tr>
        <td>a, b:</td> 
        <td>Limits of the integral &larr; number</td>
    </tr>
    <tr>
        <td>inter:</td> 
        <td>Number of intervals in the limits [a,b]. Default value is 10 &larr; integer</td>
    </tr>
    <tr>
        <td>nodes:</td> 
        <td>Pre-defined nodes at which the integral will be accumulated &larr; Array/Vector</td>
    </tr>
    
    <tr>
        <td>x, y</td> 
        <td>x- and y-axis values, respectively. &larr; Vector/Array</td>
    </tr>
</table>



<p>
    If the return value is Vector or Array, then if at least 1 parameter is 
    Vector, then returns Vector, otherwise returns an Array.
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>






<h3>Integrating Data</h3>

<p>
    Both <em>x</em> and <em>y</em> are of type Vector/Array containing the data. 
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.tovector{1, 2, 3, 4, 5}<br>
    &gt;&gt;y=std.tovector{1, 4, 9, 16, 25}<br>

    <br />

    &gt;&gt;std.cumtrapz(x, y) <br />
    0 &emsp; 2.5 &emsp; 9 &emsp; 21.5 &emsp; 42 &emsp; COL
</p>




<p>&nbsp;</p>

<p>
    In the following example, both <em>arr_x</em> and <em>arr_y</em> are 
    of type Array, therefore the function returns an Array.
</p>

<p class="CodeCommand">
    &gt;&gt;arr_x=std.toarray{1, 2, 3, 4, 5} <br>
    &gt;&gt;arr_y=std.tovector{1, 4, 9, 16, 25}<br>
    
    <br>
    
    &gt;&gt;std.cumtrapz(arr_x, arr_y) <br>
    0 &emsp; 2.5 &emsp; 9 &emsp; 21.5 &emsp; 4
</p>


<p>&nbsp;</p>

<p>
    Unlike the previous two examples where both inputs were either Array or Vector, 
    in the example below, one is an Array and the other is a Vector. The return type 
    is a Vector.
</p>

<p class="CodeCommand">
    &gt;&gt;arr=std.toarray{1, 2, 3, 4, 5} <br>
    &gt;&gt;vec=std.tovector{1, 4, 9, 16, 25}<br>
    
    <br>

    &gt;&gt;std.cumtrapz(arr, vec) <br>
    0&emsp; 2.5&emsp; 9&emsp; 21.5&emsp; 42&emsp; COL
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h3>Integrand and nodes are known</h3>

<p>
    The function itself and the nodes are already known. 
</p>

<p class="CodeCommand">
    &gt;&gt;node=std.toarray{1, 2, 3, 4, 5} <br>
    
    <br>
    
    <span class="LuaComment">--returns Array</span><br>
    &gt;&gt;std.cumtrapz(<span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 <span class="LuaKeyword">end</span>, node) <br>
    
    0&emsp; 2.5&emsp; 9&emsp; 21.5&emsp; 42   <br>

    <br>
    <br>
    
    &gt;&gt;node=std.tovector{1, 2, 3, 4, 5} <br>
    
    <br>
    
    <span class="LuaComment">--returns Vector</span><br>
    &gt;&gt;std.cumtrapz(<span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 <span class="LuaKeyword">end</span>, node) <br>
    0 &emsp; 2.5 &emsp; 9 &emsp; 21.5 &emsp; 42 &emsp; COL   <br>
    
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<h3>Integrand and limits known</h3>
<p>
    The function itself and the upper and lower limits of the integral is known.
</p>

<p class="CodeCommand">
    &gt;&gt;std.cumtrapz{f=<span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 <span class="LuaKeyword">end</span>, a=1, b=5, inter=4} <br />
    0&emsp; 2.5&emsp; 9&emsp; 21.5&emsp; 42&emsp; COL 
</p>


<p>
    Please note the distinction in the terminology of <em>node</em> vs <em>interval</em>. For example, 
    in the last example 5 values have been returned by the function since the number of intervals is 4, 
    therefore the number of nodes (values) is 5.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="trapz.php">trapz</a>
    <a href="cumsum.php">cumsum</a>
    <a href="sum.php">sum</a>
</div>


</body>

</html>
