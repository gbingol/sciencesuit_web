<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Binomial Distribution</title>

   
    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>







<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;

?>


<h1>Binomial Dist</h1>

<img src="../images/binomialdist_mainequation.png" alt=""/>


<p>&nbsp;</p>

<h3> Arguments</h3>
<table class="funcarguments">
    <tr>
        <td>x:</td>
        <td>Number of successes, number/Vector/Array</td>
    </tr>
    <tr>
        <td>p:</td>
        <td>Cumulative probability</td>
    </tr>
    <tr>
        <td>q:</td>
        <td>quantile, number/Vector/Array</td>
    </tr>
    <tr>
        <td>size:</td>
        <td>Number of independent trials</td>
    </tr>
    <tr>
        <td>prob:</td>
        <td>Probability of success on each trial</td>
    </tr>
</table>





<p>&nbsp;</p>
<p>&nbsp;</p>



<!-- ********************************************************************** -->
    
<h2 id="dbinom">dbinom</h2>
<p>Computes the probability value for Binomial distribution. </p>

<p class="funcsignature">
    
    dbinom{x=, size=, prob=} &rarr; number/Vector/Array<br>
    
    <br>
    
    dbinom(x=, size=, prob=) &rarr; number/Vector/Array
   
</p>

    <p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.dbinom{x=2, size=5, prob=0.3}<br>
    0.3087
</p>


<p><em>Equivalent to: </em></p>
<img src="../images/binomialdist_dbinom.png" alt=""/>



<p>&nbsp;</p>

<h3>Examples</h3>
<p>
    An information technology center uses 9 disk drives for storage. The probability that any of them 
    is out of service is 0.06. For the center to function properly, at least 7 of the drives must 
    be available. What is the probability that the computing center can get its work done? 
    (<em>Question from:</em>Larsen RJ, Marx ML (2012). An Introduction to Mathematical Statistics 
    and Its Applications 5th Edition pp 105.
</p>


<p>Mathematically the solution is: &nbsp;</p>
<img src="../images/binomialdist_dbinom_example.png" alt=""/>

<p>&nbsp;</p>

<p><em>Code:</em></p>


<p class="CodeCommand">
    &gt;&gt;x=std.util.tovector{7, 8, 9} <br />
    &gt;&gt;probs=std.dbinom{x=x, trials=9, prob=0.94} <br />
    &gt;&gt;std.sum(probs) <br />
    0.986
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






    
<!-- ********************************************************************* -->
    
<h2 id="pbinom">pbinom</h2>
<p>Computes the cumulative probability values. </p>

<p class="funcsignature">
    
    pbinom{q=, size=, prob=} &rarr; number/Vector/Array <br>
    
    <br>
    
    pbinom(q=, size=, prob=) &rarr; number/Vector/Array
    
</p>
    
<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.pbinom{q=2,size=5, prob=0.3}<br>
    0.83692<br>
    <br>
    &gt;&gt;std.pbinom(2, 5,0.3)<br>
    0.83692
</p>

<p>&nbsp;</p>

<p>
    <em>Example:</em> Working on the same example at <a href="#dbinom">dbinom</a>
</p>


<p>Mathematically the solution is: &nbsp;</p>

<img src="../images/binomialdist_pbinom_example.png" alt=""/>

<p>&nbsp;</p>


<p><em>Code:</em>
</p>

<p class="CodeCommand">
    &gt;&gt;res=1-std.pbinom{q=6, trials=9, prob=0.94} <br />
    &gt;&gt;res <br>
    0.986
</p>
	

    
    
    
<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- ********************************************************************* -->


<h2 id="qbinom">qbinom</h2>
<p>Computes the lower tail quantile (inverse of <a href="#pbinom">pbinom</a>). </p>

<p class="funcsignature">
    
    qbinom{p=, size=, prob=} &rarr; number/Vector/Array <br>

    <br>

    qbinom(p=, size=, prob=) &rarr; number/Vector/Array
    
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.qbinom{p=0.83692, size=5, prob=0.3} <br>
    2 <br>
    <br>
    &gt;&gt;std.qbinom(0.83692, 5, 0.3)<br>
    2
</p>


<p>Equivalent to:</p>
<img src="../images/binomialdist_qbinom.png" alt=""/>

<p>&nbsp;</p>

<p>
    Although, in the above example the quantile was perfectly overlapping with the cumulative probability, 
    it very rarely is the case. Consider the following two commands:
</p>

<p class="CodeCommand">
    &gt;&gt; std.qbinom{p=0.53, size=5, prob=0.3}<br>
    2<br>
    <br>	
    &gt;&gt;std.qbinom{p=0.80, size=5, prob=0.3}<br>
    2
</p>

<p>
    Although the cumulative probability in all 3 cases are different (0.53, 0.80, 0.83692) 
    the quantile is always reported as 2. 
    
    Here, the function applies a policy, where it always rounds up the result 
    (<a href="https://www.boost.org/doc/libs/1_40_0/libs/math/doc/sf_and_dist/html/math_toolkit/policy/pol_tutorial/understand_dis_quant.html" 
        target="_blank">for more info</a>).
</p>

<p>&nbsp;</p>

<p>The following two commands shines more light on this policy:</p>

<p class="CodeCommand">
    &gt;&gt;std.pbinom{q=1,size=5, prob=0.3}<br>
    0.52822 <br>
    <br>
    &gt;&gt;std.pbinom{q=2,size=5, prob=0.3}<br>
    0.83692
</p>

<p>
    It can be seen that p=0.53 is close to q=1 (p=0.52822), whereas p=80 is 
    close to q=2 (p=0.83692), therefore, any number in between p=0.52822 and p=0.83692 
    will be reported as q=2 by <i>qbinom</i> function.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>







    
<!-- *********************************************************************** -->   
    
    
<h2 id="rbinom">rbinom</h2>

<p>Generates binomiallly distributed random numbers.</p>
<p class="funcsignature">
    
    rbinom(n=, size=, prob=) &rarr; number/Vector <br />
    
    <br>
    
    rbinom{n=, size=, prob=} &rarr; number/Vector
   
</p>
    
    <p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;v=std.rbinom{n=10, size=5, prob=0.3} <br>
    &gt;&gt;v <br>
    0 &emsp; 2&emsp; 2&emsp; 1&emsp; 0&emsp; 
    2&emsp; 0&emsp; 2&emsp; 2&emsp; 4&emsp; COL
</p>

<p>&nbsp;</p>

<p>
    <em>What do the numbers returned by the function mean?</em> In an analogy, say each time we flip 5 coins and count the 
    number of heads which we consider as success. We run this experiment for 10 times. In the first 
    experiment we have 0 heads, in the second 2 heads and so on.
</p>

<p>&nbsp;</p>

<p><em>Is the probability 0.3?</em></p>

    <p class="CodeCommand">
        &gt;&gt; probs=v/5 <br>
        &gt;&gt;std.mean(probs) <br>
        0.3
    </p>

<p>&nbsp;</p>
<p>
    Please note that although in the above experiment the probability is perfectly 0.3, it may not always be 0.3; 
    however, will be in some close neighborhood of 0.3. 
</p>

<p class="CodeCommand">&gt;&gt;v=std.rbinom{n=10, size=5, prob=0.3}<br>
    &gt;&gt;probs=v/5<br>
    &gt;&gt;std.mean(probs)<br>
    0.32
</p>

<p>&nbsp;</p>

<p>Another way to check the probability is by using the expected number: <em>E=n &middot; p</em></p>

<p class="CodeCommand">
    &gt;&gt;p=std.mean(v)/5 <br>
    &gt;&gt;p <br>
    0.32	
</p>

<p>
    Needless to say, as the number of runs increase, the outcome will get closer to the desired probability.
</p>

<p>&nbsp;</p>



<h3>Example:</h3>
<p>
    Suppose we throw 5 coins 10 times and count the heads at the end of trials.
</p>

<p class="CodeCommand">
    <span class="LuaComment">--equivalent to v=std.rbinom(5, 10, 0.5}</span> <br>
    &gt;&gt;v=std.rbinom{n=5, size=10, prob=0.5}  
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="dist_unif.php">Uniform Dist</a>
    <a href="dist_pois.php">Poisson Dist</a>
    <a href="dist_norm.php">Normal Dist</a>
    <a href="dist_wilcox_signrank.php">Wilcoxon Dist</a>
</div>
    
</body>

</html>
