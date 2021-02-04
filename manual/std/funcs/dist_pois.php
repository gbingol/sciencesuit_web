<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Poisson Distribution</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    
        
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>








<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>Poisson Dist</h1>


<p>
    The random variable X is said to have a Poisson distribution if,
</p>
<img src="../images/dist_pois_mainequation.png" alt=""/>


<p>where &lambda; is a positive constant.</p>

<p>&nbsp;</p>

<h3>Arguments</h3>

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
        <td>lambda:</td>  
        <td>the average number of events per interval (event rate) </td>
    </tr>
</table>










<p>&nbsp;</p>
<p>&nbsp;</p>












<!-- ********************************************************************** -->

<h2 id="dpois">dpois</h2>

<p>Computes the probability. </p>

<p class="funcsignature">
    
    dpois(x=, lambda=) &rarr; number/Vector/Array <br>
    
    <br>
    
    dpois{x=, lambda=}  &rarr; number/Vector/Array
    
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.dpois{x=2, lambda=3}<br>
    0.224042
</p>


<p>The above command is equivalent to:</p>
<img src="../images/dist_pois_dpois.png" alt=""/>



<p>&nbsp;</p>


<h3>Example</h3>
<p>
    If on the average, 2 cars enter a certain parking lot per 
    minute, what is the probability that during any given minute 4 or more cars will 
    enter the lot? (Kreyszig E. (2006). Advanced Engineering Mathematics 9th Edition, pp 1023) 
</p>

<p>
    Mathmetically, are looking for <em>f(4)+f(5) + f(6) +...+f(n)</em>. Let's 
    choose the upper limit n=100.
</p>





<p>&nbsp;</p>



<h4>The code:</h4>
    
<p class="CodeCommand">
    <span class="LuaComment">-- 4, 5, 6, .... 100 </span> <br>
    &gt;&gt;ncars=std.linspace(4,100, 97) <br/>
    
    <br>
    
    <span class="LuaComment"> -- probability for 4 cars or more (n=100 cars)</span><br>
    &gt;&gt;probs=std.dpois({x=ncars,  lambda=2}) 
    
    <br>

    &gt;&gt;std.sum(probs) 
</p>	 
	
<p>
    Compare the approach to the solution with <a href="#ppois">ppois</a>.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>










<!-- ********************************************************************** -->


<h2 id="ppois">ppois</h2>
<p>Computes the cumulative probability .</p>
<h3>Syntax</h3>

<p class="funcsignature">
    
    ppois{q=, lambda=}  &rarr; number/Vector/Array<br>
    
    <br>
    
    ppois(q=, lambda=) &rarr; number/Vector/Array
    
</p>
    <p>
        &nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.ppois{q=2, lambda=3} <br>
    0.42319
</p>

<img src="../images/dist_pois_ppois.png" alt=""/>


<p>&nbsp;</p>


<h3>Example</h3>
<p>
    If on the average, 2 cars enter a certain parking lot per 
    minute, what is the probability that during any given minute 4 or more cars will 
    enter the lot? (<span class="auto-style3">Kreyszig E. (2006). Advanced 
    Engineering Mathematics 9th Edition, pp 1023</span>)  
</p>

<p>
    Mathematically: <em>f(0)+f(1)+f(2)+f(3)+f(4)...+f(n)=1</em>. 
</p>
<p>
    Therefore, <em>f(4)+...+f(n) = 1- f(0)+f(1)+f(2)+f(3)</em>
</p>


<p>&nbsp;</p>

<p><em>The code:</em> </p>	

<p class="CodeCommand">
    &gt;&gt;1-std.ppois{q=3, lambda=2}
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>












<!-- ********************************************************************** -->

<h2 id="qpois">qpois</h2>


<p>
    Computes the lower tail quantile (inverse of <a href="#ppois">ppois</a>). 
    The function always rounds up the result 
    (<a href="https://www.boost.org/doc/libs/1_40_0/libs/math/doc/sf_and_dist/html/math_toolkit/policy/pol_tutorial/understand_dis_quant.html" 
        target="_blank">for more info</a>).
</p>

<p class="funcsignature">
    
    qpois{p=, lambda=} &rarr; number/Vector/Array <br>
    
    <br>
    
    qpois(p=, lambda=) &rarr; number/Vector/Array
    
</p>
    

<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.ppois{q=1, lambda=3}<br>
    0.199148 <br>	

    <br />
    
    &gt;&gt;std.ppois{q=2, lambda=3}<br>
    0.42319
</p>




<p>&nbsp;</p>
    

<p>
    Similar to <a href="dist_binom.php#qbinom">qbinom</a> 
    function, the function applies a policy, where it always rounds up the result 
    (<a href="https://www.boost.org/doc/libs/1_40_0/libs/math/doc/sf_and_dist/html/math_toolkit/policy/pol_tutorial/understand_dis_quant.html" 
        target="_blank">for more info</a>
    )
    and consider the outcome of the following two commands:
</p>

<p class="CodeCommand">
    &gt;&gt;std.qpois{p=0.20, lambda=3}  <span style="color:green">-- slightly greater than 0.199</span> <br>
    2	<br>
    
    <br>
    
    &gt;&gt;std.qpois{p=0.422, lambda=3}  <span style="color:green">-- slightly smaller than 0.423 </span><br>
    2
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>











<!-- ********************************************************************** -->


<h2 id="rpois">rpois</h2>

<p>Generates random sample for the Poisson distribution</p>

<p class="funcsignature">
    
    rpois(n=, lambda=) &rarr;Vector<br>
    
    <br>
    
    rpois{n=, lambda=} &rarr;Vector 
    
</p>
    

<p>&nbsp;</p>

<div class="CodeCommand" style="display: block;">
    &gt;&gt;v=std.rpois{n=10, lambda=3} <br>
    
    &gt;&gt;v <br>
    
    5&emsp; 4&emsp; 3&emsp; 4&emsp; 2&emsp; 
    4&emsp; 5&emsp; 2&emsp; 2&emsp; 0&emsp; COL
</div>


<p>&nbsp;</p>
    

<p>
    Check if above numbers represent a Poisson distribution with &lambda;=3: We know that E(X)=&lambda;
</p>

<p class="CodeCommand">
    &gt;&gt;std.mean(v) <br>
    3.1
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>










<div class="RelatedLinks">
    <a href="dist_binom.php">Binomial Dist </a>
    <a href="dist_norm.php">Normal Dist</a>
    <a href="dist_chisq.php">Chi-Square Dist</a>
</div>





</body>

</html>
