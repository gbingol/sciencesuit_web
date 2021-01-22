<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Z test</title>
    <style type="text/css">
		

        .auto-style4 
        {
            font-size: small;
        }

        .auto-style5 
        {
            text-decoration: underline;
        }
   
    </style>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css">


</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Z test</h1>

<p>
    Performs 1-sample z-test and returns p-value and a Lua table with extra information on the test.
</p>


<p class="funcsignature">
    test_z{ x=, sd=, mu=, alternative="two.sided", conflevel=0.95 } 
</p>



<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>x</td>
        <td>sample &larr; <em>Vector</em></td>
    </tr>
    <tr>
        <td>alternative:</td>
        <td>"two.sided", "less", "greater" &larr; <em>string</em></td>
    </tr>

    <tr>
        <td><em>alternative:</em></td>
        <td>"two.sided", "less", "greater", &larr; string</td>
    </tr>
    <tr>
        <td>mu:</td>
        <td>Assumed mean of population &larr; <em>number</em></td>
    </tr>
    <tr>
        <td>conflevel:</td>
        <td>Confidence level, [0,1] &larr; <em>number</em></td>
    </tr>

    <tr>
        <td>sd:</td>
        <td>Standard deviation of population  &larr; <em>number</em></td>
    </tr>
</table>

<p>&nbsp;</p>

<p class="auto-style5">
    <em>Note on implementation:
</em>
</p>

<p>
    If the standard deviation of the population (&sigma;) is known we use one-sample t-test procedure to test &mu;=&mu;<sub>0</sub>.
</p>


<div style="display: flex; vertical-align: middle">
    <p>Z value is defined as: &nbsp;</p>
    <img src="../images/test_z_zvalueequation.png" alt=""/>
</div>
    
<p>&nbsp;</p>



<h3>Example</h3>
<p>
    Researchers believe that skull widths of a certain population is normally distributed with 
    a mean (&mu;) of 132.4mm and a standard deviation (&sigma;) of 6.0 mm. 
    Does the following data have an association with the population? 
    (Question adapted from: <span class="auto-style4">
    <a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" target="_blank">Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</a></span>): 
</p>

<p>
    Measurements: <span class="auto-style4">141, 146, 144, 141, 141, 136, 137, 149, 141, 142, 142, 147, 148, 155, 150, 
    144, 140, 140, 139, 148, 143, 143, 149, 140, 132, 158, 149, 144, 145, 146, 143, 135, 147, 153, 142, 142, 138, 150, 145, 126 </span>
</p>


<p>&nbsp;</p>

<p>
    Create a vector, namely <em>x</em>. See <a href="../../workbook/createdatastructures.php">how to create vectors</a>.
</p>


<p class="CodeCommand">
    &gt;&gt;pval, tbl=std.test_z{x=x, mu=132.4, sd=6} <br />

    <br />

    &gt;&gt;pval  <br />
    4.646e-32	 <br />

     <br />

    &gt;&gt;tbl  <br />
    SE=0.948&nbsp;&nbsp;&nbsp; zcritical=11.727&nbsp;&nbsp;&nbsp; mean=143.525&nbsp;&nbsp;&nbsp; 
    stdev=6.038&nbsp;&nbsp;&nbsp; CI_lower=141.666&nbsp;&nbsp;&nbsp; CI_upper=145.384&nbsp;&nbsp;&nbsp; N=40
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="dist_norm.php">Normal Dist</a>
    <a href="test_t.php">t-test</a>
    <a href="test_f.php">F-test</a>
</div>

        
</body>

</html>
