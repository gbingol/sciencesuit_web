<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Normal Distribution</title>

    

    <link href="../../../css/common.css" rel="stylesheet">



    <script src="/jsscripts/siteanalytics.js"></script>

</head>







<body>




<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"] . "/mainmenu.php";
    include $mainmenuloc;
?>




<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Select_OutlineFromTagName.bind(null, "H2"), false);
</script>





<h1>Normal Dist</h1>

<p>
    The equation for normal distribution, where <em>mean </em>(&mu;) and 
    <em>standard deviation</em> (&sigma;): 
</p>

    
<img src="../images/normaldist_mainequation.png" alt=""/>


<p>&nbsp;</p>


<h3 id="arguments">Arguments</h3>

<table class="funcarguments">
    <tr>
        <td>x:</td> 
        <td>Quantile, <em>number / Vector / Array</em></td>
    </tr>
    <tr>
        <td>p:</td> 
        <td>Cumulative probability</td>
    </tr>
    <tr>
        <td>q:</td> 
        <td>quantile, <em>number / Vector / Array</em></td>
    </tr>
    <tr>
        <td>mean:</td>   
        <td>Mean of the distribution (type: <em>number</em>)</td>
    </tr>
    <tr>
        <td>sd:</td> 
        <td>standard deviation&nbsp; ( <em>number</em> &gt; 0)</td>
    </tr>
</table>






<p>&nbsp;</p>
<p>&nbsp;</p>









<h2 class="head_l2" id="dnorm">dnorm</h2>

<p>Computes the density. </p>

<p class="funcsignature">

    dnorm(x, mean=0, sd=1) &rarr; number/Vector/Array <br>

    <br>

    dnorm{x=, mean=0, sd=1} &rarr; number/Vector/Array

</p>


<p>&nbsp;</p>

<p class="CodeCommand">
     &gt;&gt;std.dnorm{x=0, mean=0, sd=1} <br />
     0.398942
</p>


<img src="../images/normaldist_dnorm.png" alt=""/>
    

<p>&nbsp;</p>


<h3 class="head_l3">Example</h3>
<p>
    Assume that the mean test score for a class of large 
    size is 70 and standard deviation is 15. What is the percentage of students 
    scoring between 69 and 71?
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.linspace(69,71, 50) <br>
    &gt;&gt;y=std.dnorm{x=x, mean=70, sd=15} <br>
    &gt;&gt;std.trapz(x, y) <span style="color:green">-- 0.05315</span> <br>

    <br>

    <span style="color:green">--Compare with</span> <br>
     pnorm{q=71, mean=70, sd=15} - pnorm{q=69, mean=70, sd=15}  <span style="color:green">--0.05315 </span>
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>










<h2 class="head_l2" id="pnorm">pnorm</h2>
<p>Computes the lower tail area (probability). </p>

<p class="funcsignature">

    pnorm(q=,mean=0, sd=1) &rarr; number/Vector/Array<br>

    <br>

    pnorm{q=, mean=0, sd=1} &rarr; number/Vector/Array

</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.pnorm{q=-1, mean=0, sd=1} <br />
    0.158655		<br />

    <br />

    &gt;&gt;std.pnorm{q=0, mean=0, sd=1} <br />
    0.5	<br />

    <br />

    &gt;&gt;std.pnorm{q=1, mean=0, sd=1} <br>
    0.841345
</p>

<p>
    It can be clearly seen that, as we move to the right on the horizontal axis, the area increases which clearly 
    indicates that the function returns left tailed area.
</p>

<p>&nbsp;</p>


<h3 class="head_l3">Example</h3>
<p>
    Assume that the mean test score for a class of large 
    size is 70 and standard deviation is 15. What is the percentage of students 
    scoring <em>less than</em> 80?
</p>

<p class="CodeCommand">
    &gt;&gt;std.pnorm{q=80, mean=70, sd=15}
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>












<h2 class="head_l2" id="qnorm">qnorm</h2>

<p>Computes the lower tail quantile (inverse of <a href="#pnorm">pnorm</a>). </p>

<p class="funcsignature">

    qnorm(p=,mean=0, sd=1) &rarr; number/Vector/Array<br>

    <br>

    qnorm{p=,mean=0, sd=1} &rarr; number/Vector/Array 

</p>

<p>&nbsp;</p>


<h3 class="head_l3">Example</h3>
<p>
    Assume that the mean test score for a class of large 
    size is 70 and standard deviation is 15. How well did 75% of the students do?</p>

<p class="CodeCommand">
    &gt;&gt;std.qnorm{p=0.75,mean=70,sd=15} - std.qnorm(0.75, 70, 15) <br />
    80.11 
</p>

<p>
    The result tells that 75% of students scored less than 80.11.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>











<h2 class="head_l2" id="rnorm">rnorm</h2>
<p>Generates normally distributed random numbers.</p>

<p class="funcsignature">

    rnorm(n, mean=0, sd=1) &rarr; number/Vector <br>

    <br>

    rnorm{n=, mean=0, sd=1} &rarr; number/Vector 

</p>

<p>&nbsp;</p>


<h3 class="head_l3">Example</h3>
<p>
    Generate 100 normally distributed random numbers with &mu;=0 and &sigma;=1</p>

<p class="CodeCommand">
    &gt;&gt;v=std.rnorm(100) <br />
    <br />

    &gt;&gt;std.mean(v) <br />
    0.00677 <br />
    <br />
    &gt;&gt;std.stdev(v) <br />
    0.964
</p>



<p>&nbsp;</p>


<h3 class="head_l3">Example</h3>
<p>
    Generate 100 normally distributed random numbers with &mu;=5 and &sigma;=2</p>

<p class="CodeCommand">
    &gt;&gt;v=std.rnorm{n=100, mean=5, sd=2}
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="dist_unif.php">Uniform Dist</a>
    <a href="dist_binom.php">Binomial Dist</a>
    <a href="dist_pois.php">Poisson Dist</a>
    <a href="dist_chisq.php">Chi-Square Dist</a>
    <a href="dist_t.php">t Dist</a>
    <a href="dist_f.php">F Dist</a>
    </div>

</body>

</html>
