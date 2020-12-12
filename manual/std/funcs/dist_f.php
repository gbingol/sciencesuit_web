<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>F Distribution</title>

    	
    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>







<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

    
    
<h1>F Dist</h1>

<img src="../images/dist_f_mainequation.png" alt=""/>
   
<p>
    where <em>w</em> &gt;0 is the pdf with <em>df<sub>1</sub>=m and df<sub>2</sub>=n</em> degrees of freedoms.
</p>


<p>&nbsp;</p>

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
        <td>df1, df2:</td> 
        <td>Degrees of freedoms</td>
    </tr>
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>




<!-- **************************************************************** -->


<h2 id="df">df</h2>

<p>Computes the height of the probability density function. </p>

<p class="funcsignature">

    df(x=, df1=, df2=) &rarr; number/ Vector <br>

    <br>

    df{x=, df1=, df2=}  &rarr; number/ Vector

</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.df{x=1, df1=3, df2=5} <br>
    0.361174	
</p>


<p>&nbsp;</p>
<p>Mathematically it is as follows:</p>
<img src="../images/dist_f_df.png" alt=""/>


<p>&nbsp;</p>

<p>For reasonably small df1 and df2, following approach can be made:</p>

<p class="CodeCommand">
    &gt;&gt;m=3; n=5; w=1 <br>

    <br />

    &gt;&gt;num=std.gamma((m+n)/2)*m^(m/2)*n^(n/2)*w^((m/2)-1) <br>
    &gt;&gt;denom=std.gamma(m/2)*std.gamma(n/2)*(n+m*w)^((m+n)/2) <br>

    <br />

    &gt;&gt;num/denom<br>
    0.361174
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>





<!-- *********************************************************************** -->

<h2 id="pf">pf</h2>

<p>Computes the cumulative probability .</p>

<p class="funcsignature">

    pf{q=, df1=, df2=}  &rarr; number/ Vector <br>

    <br>

    pf(q=, df1=, df2=) &rarr; number/ Vector

</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.pf{q=1, df1=3, df2=5} <br>
    0.535145	<br>

    <br />

    &gt;&gt;std.pf{q=2, df1=3, df2=5}<br>
    0.767376	<br>

    <br />

    &gt;&gt;std.pf{q=3, df1=3, df2=5}<br>
    0.866145	
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>




<!-- *********************************************************************** -->


<h2 id="qf">qf</h2>

<p>Computes the lower tail quantile.</p>

<p class="funcsignature">

    qf{p=, df1=, df2=} &rarr; number/ Vector <br>

    <br>

    qf(p=, df1=, df2=) &rarr; number/ Vector

</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.<span style="background-color:gold">p</span>f{q=1, df1=3, df2=5} <br>
    0.535145	<br>

    <br />

    &gt;&gt;std.<span style="background-color:gold">q</span>f{p=0.535145, df1=3, df2=5} <br>
    0.999999	
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- *********************************************************************** -->



<h2 id="rf">rf</h2>

<p>Generates random sample for the F distribution</p>

<p class="funcsignature">

    rf(n=, df1=, df2=) &rarr; Vector / number <br>

    <br>

    rf{n=, df1=, df2=} &rarr; Vector / number 

</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.rf{n=5, df1=3, df2=5} <br />
    1.62134&nbsp;&nbsp;&nbsp; 1.76374&nbsp;&nbsp;&nbsp; 3.38552&nbsp;&nbsp;&nbsp; 0.771544&nbsp;&nbsp;&nbsp; 1.32867&nbsp;&nbsp;&nbsp; COL
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="dist_norm.php">Normal Dist</a>
    <a href="dist_chisq.php">Chi-Square Dist</a>
    <a href="dist_t.php">t Dist</a>
</div>




</body>

</html>
