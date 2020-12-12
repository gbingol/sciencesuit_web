<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>newton</title>
   
    
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



<h1>newton</h1>

<p>
    Finds the root of an equation of form <em>f(x)=0</em>. 
</p>

<p class="funcsignature">
    
    newton{f=, x0=, fprime=, x1=nil, tol=1E-5, maxiter=100} <br>
    <br>
    
    newton(f=, x0=, fprime=) <br>
    
    <br>
    
    newton(f=, x0=, x1=)
    
</p>


<p>
    The function returns the <em>root,</em> <em>error </em>and<em> number of iterations</em>.
</p>


<p>&nbsp;</p>



<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>f:</td>
        <td>A unary function whose root is sought after &larr; <em>function</em></td>
    </tr>
    <tr>
        <td>fprime:</td>
        <td>A unary function (derivative of f)  &larr; <em>function</em></td>
    </tr>
    <tr>
        <td>x0:</td>
        <td>Initial guess &rarr; number</td>
    </tr>
    <tr>
        <td>x1:</td>
        <td>Initial guess &rarr; number</td>
    </tr>
    <tr>
        <td>tol:</td>
        <td>Minimum tolerance for error &larr; <em>number</em></td>
    </tr>
    <tr>
        <td>maxiter:</td>
        <td>Maximum number of iterations during the search for the root &larr; <em>integer</em></td>
    </tr>
</table>




<p>&nbsp;</p>




<h3>Notes</h3>
<ol class="spaced">
    
    <li>
        If the derivative of the function, <em>fprime</em>, is provided, 
        then <span class="auto-style4">Newton-Raphson</span> method is selected.
    </li>
    
    <li>
        If <em>fprime</em> is not provided, then <em>x1</em> must be provided and then 
        the <span class="auto-style4">Secant</span> method is selected.
    </li>
    
</ol>




<p> &nbsp;</p>
<p> &nbsp;</p>




<p> 
    Solving the equations <em>f(x)=x<sup>2</sup>-5=0</em> and <em>f(x)=x<sup>10</sup>-1=0</em>:
</p>

<p class="CodeCommand">
    &gt;&gt;std.newton{f=<span class="LuaKeyword">function</span> (x) <span class="LuaKeyword">return</span> x^2-5 <span class="LuaKeyword">end</span>, x0=1, <mark>fprime</mark>=function(x) return 2*x end} <br />
    2.23607 &emsp; <span class="LuaComment">--root</span>  <br />
    9.18143e-07 &emsp; <span class="LuaComment">--error</span>     <br />
    
    5 &emsp; <span class="LuaComment">--number of iterations </span>  <br />

    <br>
    <br />

    &gt;&gt;std.newton{f=<span class="LuaKeyword">function</span>(x) <span class="LuaKeyword">return</span> x^10-1 end, x0=1.3, <mark>fprime</mark>=function(x) return 10*x^9 end} <br />
    1 &emsp; 2.91879e-09 &emsp; 7	
</p>


<p >
    Since the derivative, f'(x)=2x and f'(x)=10x<sup>9</sup> are provided, 
    <span class="auto-style4">Newton-Raphson</span> method is selected.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>





<p> 
    In the following example, instead of the derivative argument <em>x1</em> is provided.
</p>

<p class="CodeCommand">
    &gt;&gt;std.newton{f=<span class="LuaKeyword">function</span> (x) <span class="LuaKeyword">return</span> x^2-5 <span class="LuaKeyword">end</span>, x0=1, <mark>x1</mark>=3} <br />
    2.23607 &emsp; 7.4651e-09 &emsp; 7
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>



<h3>Definition of error</h3>
<p> 
    For both Newton-Raphson and Secant methods, 
    the error is calculated as the difference between two consecutive iterations: <em>Error</em>=&verbar;X<sub>i+1</sub>-X<sub>i</sub>&verbar;
</p>





<p >&nbsp;</p>
<p >&nbsp;</p>






<div class="RelatedLinks">
    <a href="bisection.php">bisection</a>
    <a href="solve.php">solve</a>
</div>


</body>
</html>