<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>brentq</title>
   
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <style>
        
        .auto-style4 {
            color: #800000;
        }
        
        
        
        ol.spaced li
        {
            padding-top:10px;
            padding-bottom: 10px;
        }
        
    </style>


        
        
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    
    
<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Select_OutlineFromTagName.bind(null, "H3"), false);
</script>



<h1>brentq</h1>

<p>
    Finds the root of an equation of form <em>f(x)=0</em>. 
    Uses the Brent’s method (1973) to find the root of the function combined with
    using inverse quadratic interpolation.
</p>



<p class="funcsignature">
    
    brentq{f=, a=, b=, tol=1E-5, maxiter=100} <br>
    <br>
    
    brentq(f=, a=, b=)
    
</p>


<p>
    The function returns the <em>root,</em> and <em>number of iterations</em>.
</p>


<p>&nbsp;</p>



<h3 id="arguments">Arguments</h3>
<table class="funcarguments">
    <tr>
        <td>f:</td>
        <td>A unary function whose root is sought after &larr; <em>function</em></td>
    </tr>

    <tr>
        <td>a, b:</td>
        <td>The interval where root lies in &larr; number</td>
    </tr>
    
    <tr>
        <td>tol:</td>
        <td>tolerance for error &larr; <em>number</em></td>
    </tr>
    <tr>
        <td>maxiter:</td>
        <td>Maximum number of iterations during the search for the root &larr; <em>integer</em></td>
    </tr>
</table>




<p>&nbsp;</p>
<p> &nbsp;</p>



<h3 id="example">Example</h3>
<p> 
    Solving the equations <em>f(x)=x<sup>2</sup>-5=0</em> and <em>f(x)=x<sup>10</sup>-1=0</em>:
</p>

<p class="CodeCommand">
    &gt;&gt;std.brentq
    {f=<span class="LuaKeyword">function</span>(x) <span class="LuaKeyword">return</span> x^2-5 
    <span class="LuaKeyword">end</span>, a=0, b=4} <br>
    
    
    2.23607 <span class="LuaComment">--root</span><br>
    7	<span class="LuaComment">--iterations</span><br>
    
    
    
    <br>
    <br>
    
    
    
    &gt;&gt;std.brentq
    {f=<span class="LuaKeyword">function</span>(x) <span class="LuaKeyword">return</span> x^10-1 
    <span class="LuaKeyword">end</span>, a=0, b=1.3} <br>
    
    1 &emsp; 7		
</p>

<p>&nbsp;</p>

<p>
    Compare the results with the bracketing method, <a href="bisection.php">bisection</a>, and
    fast open methods such as <a href="newton.php">newton and secant</a>.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="bisection.php">bisection</a>
    <a href="newton.php">newton</a>
    <a href="solve.php">solve</a>
</div>


</body>
</html>