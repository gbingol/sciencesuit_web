<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>t-test 1 sample App</title>

<link href="../../../css/common.css" rel="stylesheet" type="text/css" />

<style>
    
    table
    {
        border-collapse: collapse;
    }
    
    tr:first-child
    {
        font-weight: bold;
    }
    
    td
    {
        border-style: solid;
        border-width: 1px;
        padding-left:10px;
        padding-right:10px;
    }
</style>


    <script src="/jsscripts/siteanalytics.js"></script>
    

</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h2>t-test (1-sample)</h2>

<p>
    The one-sample t-test is used to determine whether the sample mean is statistically different from a known population mean.  
</p>

<img alt="t-test 1-sample" src="../images/ttest_1sample.png">

<p>
    The default confidence level is 95% and a value between (0,100) is accepted. 
    The alternative hypothesis can be: <em>1)</em> Less than, <em>2)</em> Not equal, <em>3)</em> Greater than. 
</p>
    

<p>&nbsp;</p>

<h3>Example</h3>
<p>
    Let's test if the mean of the data (4.8, 5.2, 5.6, 7.3, 4.2, 4.9) is statistically different than 5.0.
</p>


<p>&nbsp;</p>
    

<p>For the above-shown data, a report is generated in the following way:</p>

<table>
    
    <tr>
        <td>N</td>
        <td>Average</td>
        <td>Std Deviation</td>
        <td>SE Mean</td>
        <td>T </td>
        <td>p-value</td>
    </tr>
    <tr>
        <td>6</td>
        <td>5.33</td>
        <td>1.07</td>
        <td>0.436</td>
        <td>0.764</td>
        <td>0.479</td>
    </tr>
    <tr>
        <td colspan="6">&nbsp;</td>
     </tr>
    <tr>
        <td colspan="6">95.0 Confidence Interval for two.sided 	(4.21 , 6.46)</td>
     </tr>
    
</table>


<p>&nbsp; </p>
    <p>&nbsp;</p>

    <div class="RelatedLinks">
        <a href="../../std/funcs/test_t.php">std.test_t</a>
        <a href="test_t_2sample.php">2 Sample t test App</a>
        <a href="test_t_paired.php">Paired t test App</a>
    </div>

<p></p>

</body>

</html>
