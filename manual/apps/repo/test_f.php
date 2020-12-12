<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>F test App</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        
        table
        {
            border-collapse: collapse;
        }
        
        table.bordered tr:first-child
        {
            text-align: center;
            
            font-weight: bold;
        }
        
        table.bordered td:first-child
        {
            font-style: italic;
        }
        
        
        table.bordered td:last-child
        {
            font-style: initial;
        }
        
        
        table.bordered td
        {
            border-style: solid;
            border-width: 1px;
        }

        
        </style>

        
        <script src="/jsscripts/siteanalytics.js"></script>

</head>




<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc; 
?>

<h2>F test App</h2>

<p>
    Perform F test to determine whether the ratio of variances of two samples is equal to a hypothesized ratio. 
</p>
    
        
<img alt="" src="../images/test_f.png" />
   

<p>
    The default confidence level is 95% and a value between (0,100) is accepted. 
    The alternative hypothesis can be:
</p>

<ol>
    <li>Less than</li>
    <li>Not equal</li>
    <li>Greater than</li>
</ol>

<p>the "Assumed ratio" is the assumed ratio of variances.</p>


<p>&nbsp;</p>



<p>
    <b>Example: </b>To test the equality of variances for the following data 
    (<span style="font-size: small;">Data from: 
        <a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" target="_blank">
            Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</a>
    </span>): 
</p>

<table>
    <tr>
        <td>Non-confined:</td>
        <td>10.7, 10.7, 10.4, 10.9, 10.5, 10.3, 9.6, 11.1, 11.2, 10.4</td>
    </tr>
    
    <tr>
        <td>Confined:</td>
        <td>9.6, 10.4, 9.7, 10.3, 9.2, 9.3, 9.9, 9.5, 9.0, 10.9</td>
    </tr>
</table>

<p>&nbsp;</p>


<table class="bordered">
    <tr>
        <td>&nbsp;</td>
        <td>df</td>
        <td>Variance</td>
    </tr>
    <tr>
        <td>Sample 1:</td>
        <td>9</td>
        <td>0.357</td>
    </tr>
    <tr>
        <td>Sample 2:</td>
        <td>9</td>
        <td>0.211</td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>F critical</td>
        <td>1.70</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>p-value</td>
        <td>0.443</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td colspan="3">95.0 confidence interval for two.sided (0.421, 6.83)</td>

    </tr>
</table>



<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../../std/funcs/dist_f.php">F Dist</a>
    <a href="../../std/funcs/test_f.php">test_f</a>
    <a href="test_t_2sample.php">2 Sample t-test</a> 
</div>
    

</body>

</html>
