<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>F test</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">

        .auto-style4 
        {
            font-size: small;
        }
    </style>


</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;

?>


<h1>F test</h1>

<p>Test for ratios of variances of two samples. If the assumed ratio is 1, then the test is equivalent to testing equality of variances.</p>


<p class="funcsignature">
    
    test_f {x=, y=, alternative="two.sided", ratio=1, conflevel=0.95}
    
</p>

<p>&nbsp;</p>


<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>x:</td>
        <td>First sample &larr; <em>Vector</em></td>
    </tr>
    <tr>
        <td>y:</td>
        <td>Second sample &larr; <em>Vector</em></td>
    </tr>

    <tr>
        <td>alternative:</td>
        <td>"two.sided", "less", "greater", &larr; string</td>
    </tr>
    <tr>
        <td>ratio:</td>
        <td>Assumed ratio of variances of the samples &larr; <em>number</em></td>
    </tr>
    <tr>
        <td>conflevel:</td>
        <td>Confidence level, [0,1] &larr; <em>number</em></td>
    </tr>
</table>

<p>&nbsp;</p>

<p>
    Suppose that a given experiment consists of two independent random samples 
    X<sub>1</sub>, X<sub>2</sub>,…, X<sub>n</sub> and Y<sub>1</sub>, Y<sub>2</sub>,…,Y<sub>m</sub>. 

    Let  &sigma;<sup>2</sup><sub>X</sub> and &sigma;<sup>2</sup><sub>Y</sub> denote their variances, respectively. 
    We test H<sub>0</sub>: &sigma;<sup>2</sup><sub>X</sub>=&sigma;<sup>2</sup><sub>Y</sub>.
</p>
 

<div style="display: flex; vertical-align: middle;">
    <p>Critical F value has been defined as: &nbsp;</p>
    <img src="../images/test_f_fcritical.png" alt=""/>
</div>


<p>&nbsp;</p>


<div style="display: flex; vertical-align: middle;">
    <p>Confidence interval:&nbsp;</p>
    <img src="../images/test_f_confidenceinterval.png" alt=""/>
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    <b>Example: </b>To test the equality of variances for the following data 
    (Data from: <span class="auto-style4"><a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" target="_blank">Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</a></span>): 
</p>

<p>
    <em>Non-confined</em>:&nbsp; 10.7, 10.7, 10.4, 10.9, 10.5, 10.3, 9.6, 11.1, 11.2, 10.4 <br />
    <em>Confined:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </em>9.6, 10.4, 9.7, 10.3, 9.2, 9.3, 9.9, 9.5, 9.0, 10.9

</p>

<p>&nbsp;</p>

<p>
    Create two vectors, <em>confined</em> and <em>nonconfined</em>, from the data in a worksheet. 
    See <a href="../../workbook/createdatastructures.php">how to create vectors</a>.
</p>



    
<p class="CodeCommand">
    &gt;&gt;pval, tbl=std.test_f{x=confined, y=nonconfined} <br />
    &gt;&gt;pval <br />
    0.443301	<br />
    &gt;&gt; tbl <br />
    df1=9&nbsp;&nbsp;&nbsp; df2=9&nbsp;&nbsp;&nbsp; var1=0.2106&nbsp;&nbsp;&nbsp; var2=0.3573&nbsp;&nbsp;&nbsp; 
    Fcritical=0.5895&nbsp;&nbsp;&nbsp; CI_lower=0.1464&nbsp;&nbsp;&nbsp; CI_upper=2.373
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="dist_f.php">F Dist</a>
    <a href="../../apps/repo/test_f.php">F test App</a>
</div>


        
</body>

</html>
