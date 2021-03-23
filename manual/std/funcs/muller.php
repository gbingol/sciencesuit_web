<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>muller</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
    
</head>


<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    
    
 

<h1>muller</h1>
<p>
    Finds the root of an equation of form <em>f(x)=0</em>. 
</p>

<p class="funcsignature">
    
    muller{f=, x0=, [h=0.5], [tol=1E-5], [maxiter=100]} &rarr; Complex / real, integer <br>
    <br>
    
    muller{f=, x0=, x1=, x2=, [tol=1E-5], [maxiter=100]}  &rarr; Complex / real, integer<br>
    
    <br>
    
    muller(f=, x0=) &rarr; Complex / real, integer
    
</p>


<p>
    returns the <em>root</em> and<em> the number of iterations</em>.
</p>


<p>&nbsp;</p>



<h3 id="arguments">Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>f:</td>
        <td>A unary function  &larr; <em>function</em></td>
    </tr>
    
    <tr>
        <td>x0, x1, x2:</td>
        <td>Initial guesses &larr; <em>real / Complex number</em></td>
    </tr>
   
    <tr>
        <td>h:</td>
        <td>Step length &larr; <em>real / Complex number</em></td>
    </tr>

    <tr>
        <td>tol:</td>
        <td>tolerance for error &larr; <em> real number</em></td>
    </tr>
    <tr>
        <td>maxiter:</td>
        <td>Max number of iterations &larr; <em>integer</em></td>
    </tr>
</table>




<p>&nbsp;</p>




<details>
    <summary>Notes on usage and implementation</summary>
    <ol class="linespaced">
        
        <li>
            The function must be comprised of elements all of which can handle complex numbers. 
            See <a href="#ex2_scenario1">example #2</a>.
        </li>

        <li>
            If only <em>x0</em> is provided then <em>h</em> = 0.5.
        </li>
        
        <li>
            If <em>h</em> is provided, <em>x1</em> and <em>x2</em> can not be used. Conversely, 
            If <em>x1</em> and <em>x2</em> are provided, <em>h</em> can not be used.
        </li>

        <li>
            If <em>x0</em> and/or <em>h</em> are provided, then:<br>
            x<sub>1</sub> = x<sub>0</sub> + x<sub>0</sub>&middot;h <br>
            x<sub>2</sub> = x<sub>0</sub> - x<sub>0</sub>&middot;h <br>
        </li>
        
    </ol>
</details>


<p>&nbsp;</p>


<h3 id="example1">Example #1</h3>
<p>
    Let's work on the polynom which has both 
    real and complex roots: 
    2x<sup>3</sup> - 5x<sup>2</sup> + 2x - 5 = 0 
</p>

<p class="CodeCommand">
    &gt;&gt;<span class="LuaKeyword">function</span> f(x) 
        <span class="LuaKeyword">return</span> 2*x^3 - 5*x^2 + 2*x -5 
        <span class="LuaKeyword">end</span> <br>

    <br>
    
    &gt;&gt;std.muller{f=f, x0=2} <br>
    2.50001 &emsp; 3 <br>

    <br>

    &gt;&gt;std.muller{f=f, x0=-1} <br>
    i &emsp; 5 <br>

    <br>

    &gt;&gt;std.muller{f=f, x0=std.Complex.new(0,-2)} <br>
    -i &emsp;  2
</p>


<p>Few things to notice:</p>

<ol class="linespaced">
    <li>
        When x0 is real, the root can be real or complex.
    </li>

    <li>
        Similar to other root finding methods, depending on the initial guess, the located root 
        and the number of iterations might differ.
    </li>
</ol>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="example2">Example #2</h3>

<p>
    Let's work with a non-linear equation: x<sup>2</sup> - sin(x) = 0
</p>


<p>&nbsp;</p>

<h4 id="ex2_scenario1">Getting unexpected errors</h4>
<p class="CodeCommand">
    &gt;&gt;f=<span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 - math.sin(x) 
    <span class="LuaKeyword">end</span> <br>

    <br>

    &gt;&gt;std.muller{f=f, x0=-2} <br>
    <span style="color: red;">bad argument #1 to sin (number expected, got Complex)</span>
</p>

<p style="text-decoration: underline;">
    Why did we get the error, although the function definition is completely correct?
</p>

<p>
    Let's re-visit Notes #1: 
    <em>The function must be comprised of elements all of which can handle complex numbers.</em>
</p>

<p>
    The problem is that, the built-in function <em>math.sin</em> can only handle real numbers; however, 
    the internal implementation of muller method requires that all pieces of the defined function 
    should be able to handle complex numbers. So the fix is instead of using 
    <em>math.sin</em> we will redefine the function using 
    <a href="sin.php"><em>std.sin</em></a>.
</p>



<p>&nbsp;</p>



<h4 id="ex2_scenario2">Make it work</h4>
<p class="CodeCommand">
    &gt;&gt;f=<span class="LuaKeyword">function</span>(x) 
    <span class="LuaKeyword">return</span> x^2 - <mark>std</mark>.sin(x) 
    <span class="LuaKeyword">end</span> <br>

    <br>

    &gt;&gt;std.muller{f=f, x0=-2} <br>
    0 + 0i &emsp; 4
</p>

<p>
    It is seen that changing from <em>math.sin</em> to <em>std.sin</em>, which 
    can handle Complex numbers, eliminated the error and yielded a correct result.
</p>

</body>
</html>