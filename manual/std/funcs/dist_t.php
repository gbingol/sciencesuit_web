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





<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Select_OutlineFromTagName.bind(null, "H2"), false);
</script>





<h1>Student t Distribution</h1>


<img src="../images/dist_t_mainequation.png" alt=""/>
<p>-&infin; &lt; t &lt; &infin; is the pdf with <em>n</em> degrees of freedom.</p>



<h3 id="arguments">Arguments</h3>

<table class="funcarguments">
    <tr>
        <td>x:</td> 
        <td>quantile, number/Vector/Array</td>
    </tr>
    <tr>
        <td>p:</td> 
        <td>Cumulative probability </td>
    </tr>
    <tr>
        <td>q:</td>
        <td>quantile, number/Vector/Array </td>
    </tr>
    <tr>
        <td>df</td>
        <td>Degrees of freedom</td>
    </tr>
</table>











<p>&nbsp;</p>
<p>&nbsp;</p>















<h2 class="head_l2" id="dt">dt</h2>

<p>Computes the height of the probability density function. </p>

<p class="funcsignature">
    
    dt(x=, df=) &rarr; number/Vector/Array <br />
    
    <br>
    
    dt{x=, df=}  &rarr; number/Vector/Array
    
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













<h2 class="head_l2" id="pt">pt</h2>
<p>Computes the cumulative probability .</p>

<p class="funcsignature">
    
    pt{q=, df=}  &rarr; number/Vector/Array <br>
    
    <br>
    
    pt(q=, df=) &rarr; number/Vector/Array
    
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
<p>&nbsp;</p>












<h2 class="head_l2" id="qt">qt</h2>


<p>Computes the lower tail quantile.</p>

<p class="funcsignature">
    
    qt{p=, df=} &rarr; number/Vector/Array <br>
    
    <br>
    
    qt(p=, df=) &rarr; number/Vector/Array
</p>
    <p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.<span style="background-color:gold">p</span>t{q=1, df=5} <br />
    0.818391	<br />

    <br />

    &gt;&gt;std.<span style="background-color:gold">q</span>t{p=0.818391, df=5}<br />
    0.999999
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>













<h2 class="head_l2" id="rt">rt</h2>

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
    -1.0581&emsp; 0.0325742&emsp; -0.980538&emsp; 1.71746&emsp; -0.593335&emsp; COL
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
