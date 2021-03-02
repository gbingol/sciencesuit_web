<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sign test</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">
    .verticalaligned{
        vertical-align:middle;
    }
   
    .auto-style3 {
        font-size: small;
    }
    .auto-style4 {
        font-weight: normal;
    }

    
   
    .auto-style5 {
        text-decoration: underline;
    }   
    </style>



</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Sign Test</h1>

<p>
    Performs a 1-sample nonparametric test to test if the null hypothesis of a median of a distribution is equal to some specific value or not.
</p>


<p class="funcsignature">
    test_sign{x=, [y=], md=, alternative="two.sided", conflevel=0.95} 
</p>

<p>
    returns p-value and a table containing confidence intervals and extra information.
</p>

<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>x:</td>
        <td>Sample &rarr; Vector</td>
    </tr>

    <tr>
        <td>y:</td>
        <td>Second sample &rarr; Vector</td>
    </tr>

    <tr>
        <td>md:</td>
        <td>Median of the population tested by the null hypothesis &rarr; number</td>
    </tr>

    <tr>
        <td>alternative:</td>
        <td>"two.sided", "less", "greater" &rarr; string</td>
    </tr>

    <tr>
        <td>conflevel:</td>
        <td>Confidence level, [0,1] &rarr; number</td>
    </tr>
</table>

<p>
    <span class="auto-style5"><em>Note:</em></span> If argument <em>y</em> is provided, 
    then function performs the test by assuming <em>x</em> and <em>y</em> are paired data.
</p>

<p>&nbsp;</p>
<h3><span class="auto-style4"><strong>Implementation details</strong></span></h3>
<p>Let y<sub>1</sub>, y<sub>2</sub>,…, y<sub>n</sub> be a random sample of size <em>n</em> from any distribution having median <em>md</em>. 
    Let <em>k</em> denote the number of y<sub>i</sub>'s greater than <em>md</em>.</p>

<p><em>Assumption:</em> 
</p>
<p>If n&ge;12 then, for the decision making a normal approximation can be used and
    <img class="verticalaligned" style="width:96px; height:49px;" alt="" src="../images/test_sign_equation_zvalue.png" /> 
    otherwise decision rule is determined using the exact binomial distribution.
</p>

<p class="auto-style3">
    <em>Larsen & Marx</em> (<a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" target="_blank">An Introduction to Mathematical Statistics and Its Applications</a> pp 657) recommends a sample size of 10 
    (aligned with general rule of np>=5, where p=0.5) whereas <em>Chakraborti & Gibbons</em> (<a href="https://www.crcpress.com/Nonparametric-Statistical-Inference/Gibbons-Chakraborti/p/book/9781420077612" target="_blank">Nonparametric Statistical Inference, Fifth Edition</a> pp 171) 
    recommends at least 12. <br>
    Although not heavily tested, <em>Minitab</em> and <em>R</em> seems to choose a number greater than 10. 
    Furthermore, <em>R</em> refers to <em>Chakraborti & Gibbons</em> publication in its documentation. 
    Therefore, 12 was chosen for normal approximation of binomial distribution.
</p>

<p>&nbsp;</p>



<h3>Example</h3>
<p>
    It has been shown that the median amount of caffeine left by the freeze-drying method 
    in instant coffee is 3.55 grams of dry matter. Following are the caffeine residues 
    recorded for eight brands of coffee produced by spray drying: [4.8, 4.0, 3.8, 4.3, 3.9, 4.6, 3.1, 3.7]. 
    (<span class="auto-style3">Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</span>)
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{4.8, 4.0, 3.8, 4.3, 3.9, 4.6, 3.1, 3.7} <br />

    <br />

    &gt;&gt;p, tbl=std.test_sign{x=v, md=3.55}  <br />

     <br />

    &gt;&gt;p  <br />
    0.0703125	 <br />
    
    <br>
    
    &gt;&gt;tbl <br />
    lower=table&emsp; interpolated=table&emsp; upper=table&emsp; ngreater=7&emsp; nequal=0  <br />

     <br />

    &gt;&gt;tbl.interpolated <br />
    CILow=3.505&emsp; CIHigh=4.665&emsp; prob=0.95
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="dist_norm.php">Normal Dist</a>

    <a href="test_t.php">t-test</a>
    <a href="test_z.php">Z-test</a>
</div>

        
</body>

</html>
