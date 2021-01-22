<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Anderson-Darling Test</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css">

    <style type="text/css">
        .auto-style4 
        {
            font-size: small;
        }

        .auto-style5 
        {
            text-decoration: underline;
        }

        .verticalaligned
        {
            vertical-align:middle;
        }
   
    </style>


    


</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Anderson-Darling Test</h1>

<p>
    Performs <a href="https://en.wikipedia.org/wiki/Anderson–Darling_test" target="_blank">Anderson-Darling</a> 
    test to test whether a sample of data came from a normal population.
</p>


<p class="funcsignature">
    test_norm_ad(vec) &rarr; number, number
</p>

<p>
    where argument <em>vec</em> must be of type Vector and the function returns p-value and the test-statistic, namely the A<sup>2</sup>.
</p>




<p>&nbsp;</p>
<p>
    <span class="auto-style5">The null hypothesis:</span> H<sub>0</sub>: The data follows the normal distribution.
</p>


<p>&nbsp;</p>

<p class="auto-style5">
    <em>Note on implementation:</em>
</p>

<div>
    <p style="display: inline-block;">The test statistic is calculated using <em>A</em><sup><em>2</em></sup><em>=-n-S</em>:</p>
    &nbsp;<p style="display: inline-block;">&nbsp; where </p>
    <img class="verticalaligned" src="../images/test_norm_ad_s.png" alt="" />
</div>





<p>&nbsp;</p>
<p>&nbsp;</p>

<h3>Example: </h3>
<p>
    Inspect whether the following data comes from a normal distribution.
    <span class="auto-style4">(2.39798, -0.16255, 0.54605, 0.68578, -0.78007, 1.34234, 1.53208, -0.86899, -0.50855, -0.58256, -0.54597, 0.08503, 0.38337, 0.26072, 0.34729)</span>
</p>

<p>
    Create a vector, namely <em>vec</em>. See <a href="../../workbook/createdatastructures.php">how to create vectors</a>.
</p>


<p class="CodeCommand">
    &gt;&gt;pval, A2=std.test_norm_ad(vec) <br />

    <br />

    &gt;&gt;pval <br />
    0.356325	<br />
    
    <br>
    
    &gt;&gt;A2 <br />
    0.380373
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
