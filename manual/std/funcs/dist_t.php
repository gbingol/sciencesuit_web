<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student t Distribution</title>
    
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>








<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>Student t Distribution</h1>


<img src="../images/dist_t_mainequation.png" alt=""/>
<p>-&infin; &lt; t &lt; &infin; is the pdf with <em>n</em> degrees of freedom.</p>



<h3>Arguments</h3>

<table class="funcarguments">
    <tr>
        <td>x:</td> 
        <td>quantile, number / Vector</td>
    </tr>
    <tr>
        <td>p:</td> 
        <td>Cumulative probability </td>
    </tr>
    <tr>
        <td>q:</td>
        <td>quantile, number / Vector </td>
    </tr>
    <tr>
        <td>df</td>
        <td>Degrees of freedom</td>
    </tr>
</table>








<p>&nbsp;</p>
<p>&nbsp;</p>








<!-- ******************************************************************* -->


<h2 id="dt">dt</h2>

<p>Computes the height of the probability density function. </p>

<p class="funcsignature">
    
    dt(x=, df=) &rarr; number/ Vector <br />
    
    <br>
    
    dt{x=, df=}  &rarr; number/ Vector
    
</p>
    
<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.dt{x=-2, df=5} <br />
    0.0650903	<br />

    <br />

    &gt;&gt;std.dt{x=2, df=5} <br />
    0.0650903
</p>


<p>It can be computed as follows as well:</p>
<img src="../images/dist_t_dt.png" alt=""/><!-- equation is already long -->








<p>&nbsp;</p>
<p>&nbsp;</p>










<!-- ******************************************************************* -->


<h2 id="pt">pt</h2>
<p>Computes the cumulative probability .</p>

<p class="funcsignature">
    
    pt{q=, df=}  &rarr; number/ Vector <br>
    
    <br>
    
    pt(q=, df=) &rarr; number/ Vector
    
</p>
    
<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.pt{q=-1, df=5} <br />
    0.181609	<br />

    <br />

    &gt;&gt;std.pt{q=0, df=5}<br />
    0.5	<br />

    <br />

    &gt;&gt;std.pt{q=1, df=5}<br />
    0.818391
</p>



<p>&nbsp;</p>

<p>Using the equation, it can be computed as follows: </p>
<img src="../images/dist_t_pt.png" alt=""/>

    
<p>&nbsp;</p>

<p>A simple approach to handle the above equation with a script is:</p>

<p class="CodeCommand">
    <span class="LuaKeyword">function</span> f(t, n) <br />
        &nbsp;&nbsp;&nbsp; <span class="LuaKeyword">local</span> num=std.gamma((n+1)/2) <br />
        &nbsp;&nbsp;&nbsp;  <span class="LuaKeyword">local</span> denom=math.sqrt(n*math.pi)*std.gamma(n/2)*(1+t^2/n)^((n+1)/2)<br />
        <br />
        &nbsp;&nbsp;&nbsp; <span class="LuaKeyword">return</span> num/denom<br />
    <span class="LuaKeyword">end</span><br />
    <br />
    <span class="LuaKeyword">local</span> <span class="LuaKeyword">function</span> func(t) <span class="LuaKeyword">return</span> f(t,5) <span class="LuaKeyword">end</span> <br />
    <br />
    <span class="LuaKeyword">local</span> res=std.trapz{f=func, a=-100,b=1, inter=1000}<br />
    <br />
    print(res) <span class="LuaComment">--0.818204 </span>
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>









<!-- ******************************************************************* -->


<h2 id="qt">qt</h2>


<p>Computes the lower tail quantile.</p>

<p class="funcsignature">
    
    qt{p=, df=} &rarr; number/ Vector <br>
    
    <br>
    
    qt(p=, df=) &rarr; number/ Vector
</p>
    <p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.<span style="background-color:gold">p</span>t{q=1, df=5} <br />
    0.818391	<br />

    <br />

    &gt;&gt;std.<span style="background-color:gold">q</span>t{p=0.818391, df=5}<br />
    0.999999
</p>

    

<p>The following equation can be used:</p>
<img src="../images/dist_t_qt.png" alt=""/>










<p>&nbsp;</p>
<p>&nbsp;</p>










<!-- ******************************************************************* -->


<h2 id="rt">rt</h2>

<p>Generates random sample for the Student t distribution</p>
<p class="funcsignature">
    
    rt(n=, df=) &rarr; Vector / number <br>
    
    <br>
    
    rt{n=, df=} &rarr; Vector / number 
    
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.rt{n=1, df=5} <br />
    -0.0730832	<br />

    <br />

    &gt;&gt;std.rt{n=5, df=5} <br />
    -1.0581&nbsp;&nbsp;&nbsp; 0.0325742&nbsp;&nbsp;&nbsp; -0.980538&nbsp;&nbsp;&nbsp; 1.71746&nbsp;&nbsp;&nbsp; -0.593335&nbsp;&nbsp;&nbsp; COL
</p>

    
    





<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="dist_norm.php">Normal Dist</a>
    <a href="dist_chisq.php">Chi-Square Dist</a>
    <a href="dist_f.php">F Dist</a>
</div>



</body>

</html>
