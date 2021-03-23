<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>fsolve</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>fsolve</h1>
<p>
    Solves system of non-linear equations using Newton-Raphson approach.
</p>

<p class="funcsignature">  
    fsolve(Functions, initialValues) &rarr; table
</p>

<p>
    returns the solution vector as Lua table.
</p>


<p>&nbsp;</p>


<h3>Parameters</h3>
<table class="funcarguments">
    <tr>
        <td>Functions</td>
        <td>A table of functions where each function takes a table as its parameter</td>
    </tr>
    
    <tr>
        <td>InitialValues</td>
        <td>A table of values for the initial estimate of the roots.</td>
    </tr>
</table>




<p>&nbsp;</p>



<h3>Note</h3>
<p class="rightmargined">
    For <a href="newton.php">Newton-Raphson</a> method for single-variable functions, 
    the function can have multiple roots and the initial estimate of the root determines 
    the root found. Similarly, for multi-variable functions a combination of different roots
    could be satisfying the equation(s) and the combination is determined by the initial values.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    Let's work on the following set of functions:<br>
    x<sup>2</sup> + y<sup>2</sup> = 5 <br>
    x<sup>2</sup> - y<sup>2</sup> = 1
</p>


<p>&nbsp;</p>


<div class="CodeCommand">
    <span class="LuaKeyword">function</span> f1(t) <br>
    &emsp;<span class="LuaKeyword">return</span> t[1]^2 + t[2]^2 -5 <br>
        
    <span class="LuaKeyword">end</span> <br>
    
    <br>

     <span class="LuaKeyword">function</span> f2(t) <br>
    &emsp;<span class="LuaKeyword">return</span> t[1]^2 - t[2]^2 -1 <br>
        
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    &gt;&gt;roots, iter=std.fsolve( {f1, f2}, {1, 1} ) <br>
    
    &gt;&gt;roots <br>
    1.73205 &emsp; 1.41421 <br>
    
    <br>
    
    &gt;&gt;iter <br>
    5 <br>
    
    <br>
    
    <span class="LuaComment">--Check if all went well</span><br>   
    
    &gt;&gt;f1(roots) <br>
    9.42e-09 <br>
    
    <br>
    
    &gt;&gt;f2(roots) <br>
    9.37e-09
    
</div>

<p class="rightmargined">
    Notice that f<sub>1</sub> and f<sub>2</sub> takes a single parameter,
    namely <em>t</em>, which is of type table 
    and that <em>t[1]</em> represents variable <em>x</em> and 
    <em>t[2]</em> represents variable <em>y</em>.
    
    Similarly in the returned solution table, <em>t[1]</em> represents variable <em>x</em> and 
    <em>t[2]</em> represents variable <em>y</em>
</p>

<p>&nbsp;</p>

<p>
    Now let's use the above-defined functions; however, change the 
    initial estimate of the roots.
</p>


<p class="CodeCommand">
    &gt;&gt;roots, iter=std.fsolve( {f1, f2}, {-1, -1} ) <br>
    
    &gt;&gt;roots <br>
    -1.73205 &emsp; -1.41421 <br>

    <br>
    <br>
    
    &gt;&gt;roots, iter=std.fsolve( {f1, f2}, {1, -1} ) <br>
    
    &gt;&gt;roots <br>
    1.73205 &emsp; -1.41421 
</p>

<p>&nbsp;</p>

<p>
    Now it is seen that as the initial estimate changed the 
    roots changed such that the following combinations all satisfy both equations.
</p>

<ul class="linespaced">
    <li>x = 1.73205, y = 1.41421</li>
    <li>x = -1.73205, y = -1.41421</li>
    <li>x = 1.73205,  y = -1.41421</li>
</ul>

<p>
    Although not presented, it is clearly seen that x = -1.73205,  y = 1.41421 would have also 
    satisfied both equations as well.
</p>
    
   





<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="bisection.php">std.bisection</a>
    <a href="brentq.php">std.brentq</a>
    <a href="newton.php">std.newton</a>
</div>


</body>

</html>
