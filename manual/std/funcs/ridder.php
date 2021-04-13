<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ridder</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
       
        .auto-style1 {
            color: #0000FF;
        }
        
        .auto-style3 {
            
            color: #800000;
        }
        
        
        table.summary
        {
            width: 60%;
            border: 1px solid;
        }
        
        table.summary td
        {
            text-align: center;
        }
        
        table.summary td:first-child
        {
            text-align: left;
            
            font-style: italic;
        }
        
        
        @media screen and (max-width: 900px)
        {
            table.summary
            {
                width: 100%;
            }
            
            table.summary td
            {
                font-size: small;
            }
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


<h1>ridder</h1>

<p>Finds the root of an equation of form <em>f(x)=0</em>. </p>

<p class="funcsignature">
    
ridder (f=, a=, b=) <br>
    
    <br>
    
    ridder{f= , a= , b= , tol=1E-5, maxiter=100}
    
</p>
    
<p>The function returns the <em>root</em> and the <em>number of iterations</em>.</p>

<p>&nbsp;</p>
    
   
<h3 id="arguments">Arguments:</h3>


<table class="funcarguments">
    <tr>
        <td>f:</td> 
        <td>A unary function &larr; <em>function</em></td>
    </tr>
    
    <tr>
        <td>a, b:</td>  
        <td>The interval where the root lies in &larr; <em>number</em></td>
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
<p>&nbsp;</p>


<h3 id="example1">Example 1</h3>


<p>
    Solving the equation for <em>f(x) = x<sup>2</sup>-5 = 0</em>:
</p>

<p class="CodeCommand">
    &gt;&gt;std.ridder{f=function(x) return x^2-5 end, a=0,b=4} <br />
    2.23607 &emsp; 3
</p>




<p>&nbsp;</p>


<h3 id="example2">Example 2</h3>

<p>
    Finding root of <em>f(x) = x<sup>10</sup> -1 = 0</em>
    <a href="https://www.wolframalpha.com/input/?i=plot+x%5E10+-1+from+0+to+1.5" target="_blank">
        (plot on WolframAlpha)
    </a>
</p>

<p class="CodeCommand">
    &gt;&gt;std.ridder{f=function(x) return x^10-1 end, a=0, b=1.3} <br />
    1 &emsp; 4
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="bisection.php">bisection</a>
    <a href="brentq.php">brentq</a>
    <a href="muller.php">muller</a>
    <a href="newton.php">newton</a>
</div>

</body>
</html>