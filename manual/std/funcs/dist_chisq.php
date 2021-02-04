<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chi-Square Distribution</title>

    
    <link href="../../../css/common.css" rel="stylesheet">
    
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>






<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"] . "/mainmenu.php";
    include $mainmenuloc;
?>


<h1>Chi-Square Dist</h1>
<img src="../images/distchisquare_mainequation.png" alt=""/>


<p>&nbsp;</p>

<h3>Arguments</h3>

<table class="funcarguments">
    <tr>
        <td>x:</td>   
        <td>Quantile, <em>number/Vector/Array</em></td>
    </tr>
    <tr>
        <td>p:</td> 
        <td>Cumulative probability</td>
    </tr>
    <tr>
        <td>q:</td> 
        <td>quantile, <em>number/Vector/Array</em></td>
    </tr>
    <tr>
        <td>df</td> 
        <td>Degrees of freedom</td>
    </tr>
</table>








<p>&nbsp;</p>
<p>&nbsp;</p>

    








<!-- ********************************************************************** -->
        
        
<h2 id="dchisq">dchisq</h2>

<p>Computes the density. </p>

<p class="funcsignature">

    dchisq(x=, df=) &rarr; number/Vector/Array <br>

    <br>

    dchisq{x=, df=} &rarr; number/Vector/Array

</p>


<p> &nbsp;</p>



<p class="CodeCommand">
     &gt;&gt;std.dchisq{x=2, df=5} <br />
    0.138369	<br />

    <br />

    &gt;&gt;std.dchisq(2,5)<br />
    0.138369
</p>

<p>&nbsp; </p>


<img src="../images/distchisquare_dchisq.png" alt=""/>

<p class="CodeCommand">
    &gt;&gt;denom=2^(5/2)*std.gamma(5/2) <br />
    &gt;&gt;num=2^((5/2)-1)*math.exp(-2/2) <br />

    <br />

    &gt;&gt;num/denom <br />
    0.138369	
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>








     

<!-- **************************************************************** -->
        
        
<h2 id="pchisq">pchisq</h2>
<p>Computes the lower tail area (probability). </p>

<p class="funcsignature">

    pchisq{q=, df=} &rarr; number/Vector/Array<br>

    <br>

    pchisq(q=, df=) &rarr; number/Vector/Array

</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.pchisq{q=0.5, df=5} <br />
    0.00787671	<br />

    <br />

    &gt;&gt;std.pchisq{q=1, df=5}<br />
    0.0374342	<br />

    <br />

    &gt;&gt;std.pchisq{q=3, df=5}<br />
    0.300014
</p>


<p>Mathematically the computation would be:</p>
<img src="../images/distchisquare_pchisq.png" alt=""/>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;<span class="LuaKeyword">function</span> f(u) <span class="LuaKeyword">return</span> 
    u^1.5*math.exp(-u/2) / (2^2.5*std.gamma(2.5)) <span class="LuaKeyword">end</span>	
    
    <br />
    
    &gt;&gt;std.trapz(f, 0,3) <br />
    0.300014
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>

        










<!-- **************************************************************** -->
        
        
<h2 id="qchisq">qchisq</h2>
<p>Computes the lower tail quantile. </p>

<p class="funcsignature">

    qchisq{p=, df=} &rarr; number/Vector/Array  <br>

    <br>

    qchisq(p=, df=) &rarr; number/Vector/Array 

</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.<span style="background-color:gold">p</span>chisq{q=3, df=5} <br />
    0.300014	<br />

    <br />

    &gt;&gt;std.<span style="background-color:gold">q</span>chisq{p=0.3, df=5} <br />
    2.99991
</p>


<p>Mathematically, it can be computed as follows:</p>
<img src="../images/distchisquare_qchisq.png" alt=""/>

        







<p>&nbsp;</p>
<p>&nbsp;</p>

        









<!-- ********************************************************************** -->

        
        
<h2 id="rchisq">rchisq</h2>
<p>Generates n &ge;1 random numbers from the chi-square distribution.</p>

<p class="funcsignature">

    rchisq(n=, df=) &rarr; number/Vector <br />

    <br>

    rchisq{n=, df=} &rarr; number/Vector 

</p>





<p>&nbsp;</p>



<p class="CodeCommand">
    &gt;&gt;std.rchisq{n=5, df=5} <br />
    6.38474 &emsp; 8.02805 &emsp; 2.90747 &emsp; 3.27364 &emsp; 2.33255 &emsp; COL
</p>

<p>&nbsp;</p>

<p>
    Mathematically we know that <em>E(X)=k</em>, where k is the degrees of freedom (df).
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.rchisq{n=100, df=5} <br />

    <br />

    &gt;&gt;std.mean(v) <br />
    4.94346
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="dist_f.php">F Dist</a>
    <a href="dist_norm.php">Normal Dist</a>
    <a href="dist_t.php">t Dist</a>
</div>

        
</body>

</html>
