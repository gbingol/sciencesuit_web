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

<p>Computes the left-tailed cumulative area and returns a column Vector.</p>

<p class="funcsignature">
    
    cumtrapz(f=, v1=) &rarr; Vector <br />
    
    <br>
    
    cumtrapz(v1=,v2=) &rarr; Vector <br />
    
    <br>
    
    cumtrapz{f=, a=, b=, inter=10} &rarr; Vector
    
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
        <td>v1, v2:</td> <td>Vectors, values on x- and y-axis, respectively. &larr; Vector</td>
    </tr>
</table>





<p>&nbsp;</p>



<p>Let's work on <em>f(x)=x</em><sup>2</sup>.</p>

<p class="CodeCommand">
    &gt;&gt;y=x^2 <br />
    &gt;&gt;y <br />
    1&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; 9&nbsp;&nbsp;&nbsp; 16&nbsp;&nbsp;&nbsp; 25&nbsp;&nbsp;&nbsp; COL  <br />

    <br />

    &gt;&gt;std.cumtrapz(x, y) <br />
    0&nbsp;&nbsp;&nbsp; 2.5&nbsp;&nbsp;&nbsp; 9&nbsp;&nbsp;&nbsp; 21.5&nbsp;&nbsp;&nbsp; 42&nbsp;&nbsp;&nbsp; COL
</p>



<p>&nbsp;</p>


<p><em>cumtrapz{f=, a=, b=, inter=10}:</em></p>

<p class="CodeCommand">
    &gt;&gt;std.cumtrapz{f=<span class="auto-style1">function</span>(x) <span class="auto-style1">return</span> x^2 <span class="auto-style1">end</span>, a=1, b=5, inter=4} <br />
    0&nbsp;&nbsp;&nbsp; 2.5&nbsp;&nbsp;&nbsp; 9&nbsp;&nbsp;&nbsp; 21.5&nbsp;&nbsp;&nbsp; 42&nbsp;&nbsp;&nbsp; COL </p>


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
