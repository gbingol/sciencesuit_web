<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>lm</title>



    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>










<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>lm</h1>

<p>Performs simple/multiple linear regression.  </p>

<p class="funcsignature">

    lm (response=, factor<mark>s</mark>=, IsIntercept=<span class="LuaKeyword">false</span>, Alpha=0.05) &rarr; Lua Table (regression table)

    <br>
    <br>
       
    lm.summary(RegressionTable=)

</p>



<p>&nbsp;</p>


<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>response:</td>
        <td>Response &larr; Vector</td>
    </tr>
    <tr>
        <td>factors:</td>
        <td>Factors &larr; Matrix / Vector</td>
    </tr>
    <tr>
        <td>IsIntercept:</td>
        <td>Intercept &larr; boolean</td>
    </tr>
</table>





<p>&nbsp;</p>





<h3>Technical Note</h3>
<p>
    As revealed by the signature of <em>lm</em>, it is actually a Lua table 
    with the <a href="https://www.lua.org/pil/13.html" target="_blank"><em>__call</em> metamethod</a> 
    implemented, therefore behaves like a function. 
    However, the table contains another function, namely <em>summary,</em>
    to statistically summarize the regression results returned by <em>lm</em>. 
</p>





<p>&nbsp;</p>





<h3>Example</h3>
<p>
    Do the following data (Data from: 
    <a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" target="_blank">
        Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</a>) 
    support the suspicion that smoking contributes to CHD mortality?
</p>


<p>
    <em>Cigarette Consumption: </em>
    <span style="font-size: small;">[3900, 3350, 3220, 3220, 2790, 2780, 2770, 2290, 2160, 1890, 1810, 1800, 1770, 
        1700, 1680, 1510, 1500, 1410, 1270, 1200, 1090]</span> <br />

    <em>Mortality per 100000:</em> <span style="font-size: small;">[256.9, 211.6, 238.1, 211.8, 194.1, 124.5, 187.3, 
        110.5, 233.1, 150.3, 124.7, 41.2, 182.1, 118.1, 31.9, 114.3, 144.9, 59.7, 126.9, 43.9, 136.3]</span>
</p>



<p>&nbsp;</p>


<p>
    Let’s seek the answer by performing a linear regression.
    <a href="../../workbook/index.php#createdatastructures">Create 2 vector</a> namely 
    <em>response</em> (Mortality per 100000) and <em>factor</em> (Cigarette consumption).
</p>
    
    
<p class="CodeCommand">
    &gt;&gt;std.lm(response, factor, true, 0.05) <br />
    0.0600977*x + 15.7711 <br />

    <br />

    &gt;&gt;RegressTbl=std.lm(response, factor, true, 0.05) <br />

    <br />

    &gt;&gt;Summary=std.lm.summary(RegressTbl) <br />
    &gt;&gt;Summary <br />
    R2=0.532193&nbsp;&nbsp;&nbsp; SE=46.7083&nbsp;&nbsp;&nbsp; CoefStats=table&nbsp;&nbsp;&nbsp; ANOVA=table

</p>


<p>&nbsp;</p>

<p>
    Here, the Lua table namely <em>ANOVA</em> contains all the information on the ANOVA test performed for the regression 
    and <em>CoefStats</em> contains all the regression information on each coefficient. Let’s take a look at <em>CoefStats</em> table.
</p>
    

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;Summary.CoefStats[1] <br />
    coeff=15.7711	 <br /> 
    pvalue=0.600085  <br />
    tvalue=0.533189 <br />
    CILow=-46.1382 <br />
    CIHigh=77.6805 <br />
    SE=29.5789 <br />

    <br />

    &gt;&gt;Summary.CoefStats[2] <br />
    coeff=0.0600977 <br />
    pvalue=0.00017488  <br />
    tvalue=4.64919  <br />
    CILow=0.0330423 <br />
    CIHigh=0.0871531 <br />
    SE=0.0129265
</p>


<p>&nbsp;</p>


<p>
    Performing <em>multiple linear regression</em> is similar; however, instead of using a 
    Vector a Matrix data structure must be used for the factors, .
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="../../apps/repo/linearregression.php">Linear Regression App</a>
    <a href="test_t.php">test_t</a>
    <a href="test_f.php">test_f</a>
    <a href="anova.php">anova</a>
    <a href="anova2.php">anova2</a>
</div>


</body>

</html>
