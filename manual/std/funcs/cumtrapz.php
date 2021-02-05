<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cumulative Integration</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        .auto-style1 {
            color: #0000FF;
        }
    </style>
    
    
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
    
    cumtrapz([f=], [arg1=], [arg2=]) &rarr; Vector/Array <br />
    
    <br>
    
    cumtrapz{[f=], [a=], [b=], [inter=10], [x=], [y=]} &rarr; Vector
    
</p>



<p>&nbsp;</p>



<h3>Arguments:</h3>


<table class="funcarguments">
    <tr>
        <td>f:</td> <td>A unary function, f(x) &larr; function</td>
    </tr>
    <tr>
        <td>a, b:</td> <td>Limits of the integral &larr; number</td>
    </tr>
    <tr>
        <td>inter:</td> <td>Number of intervals in the limits [a,b]. Default value is 10 &larr; integer</td>
    </tr>
    <tr>
        <td>x, y, arg1, arg2:</td> <td>x- or y-axis values. &larr; Vector/Array</td>
    </tr>
</table>

<p>
    If the return value is Vector or Array, then if at least 1 parameter is 
    Vector, then returns Vector, otherwise returns an Array.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<details>
    <summary><b>Possible Usage Cases</b></summary>

    <ul class="linespaced">
        <li>
            cumtrapz(arg1=, arg2=) &rarr; Vector/Array
        </li>

        <li>
            cumtrapz(f=, arg2=) &rarr; Vector/Array
        </li>

        <li>
            cumtrapz(f=, a=, b=,  [N=10]) &rarr; Vector
        </li>

        <li>
            cumtrapz{f=, a=, b=,  [inter=10]} &rarr; Vector
        </li>

        <li>
            cumtrapz{f=, [x=], [y=] } &rarr; Vector/Array, either <em>x or y</em>
        </li>

        <li>
            cumtrapz{x=, y= } &rarr; Vector/Array
        </li>

    </ul>
</details>




<p>&nbsp;</p>
<p>&nbsp;</p>



<p>
    Let's work on <em>f(x)=x</em><sup>2</sup>.
</p>

<p class="CodeCommand">
    &gt;&gt;y=x^2 <br />
    &gt;&gt;y <br />
    1&emsp; 4&emsp; 9&emsp; 16&emsp; 25&emsp; COL  <br />

    <br />

    &gt;&gt;std.cumtrapz(x, y) <br />
    0&emsp; 2.5&emsp; 9&emsp; 21.5&emsp; 42&emsp; COL
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>




<p class="CodeCommand">
    &gt;&gt;arr=std.toarray{1, 2, 3, 4, 5} <br>
    
    <br>
    
    <span class="LuaComment">--return type is Array</span><br>
    &gt;&gt;std.cumtrapz(<span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 <span class="LuaKeyword">end</span>, arr) <br>
    0&emsp; 2.5&emsp; 9&emsp; 21.5&emsp; 42   <br>

    <br>
    <br>
    
    &gt;&gt;v=std.tovector{1, 2, 3, 4, 5} <br>
    
    <br>
    
    <span class="LuaComment">--return type is Vector</span><br>
    &gt;&gt;std.cumtrapz(<span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 <span class="LuaKeyword">end</span>, v) <br>
    0 &emsp; 2.5 &emsp; 9 &emsp; 21.5 &emsp; 42 &emsp; COL   <br>
    
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<p class="CodeCommand">
    &gt;&gt;std.cumtrapz{f=<span class="auto-style1">function</span>(x) 
    <span class="auto-style1">return</span> x^2 <span class="auto-style1">end</span>, a=1, b=5, inter=4} <br />
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
