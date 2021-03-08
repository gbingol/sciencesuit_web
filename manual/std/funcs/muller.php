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
    returns the <em>root,</em> and<em> number of iterations</em>.
</p>


<p>&nbsp;</p>



<h3>Arguments:</h3>
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
            See <a href="#example2">example #2</a>.
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
    Let's work on the polynom which has both real and complex roots: 2x<sup>3</sup> - 5x<sup>2</sup> + 2x - 5 = 0 
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



<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="example2">Example #2</h3>


</body>
</html>