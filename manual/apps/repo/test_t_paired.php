<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Paired t-test App</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        td
        {
            border-style: solid;
            border-width: 1px;
        }
        
        td:first-child
        {
            font-style: italic;
            
            text-align: left;
        }
        
        td:last-child
        {
            font-style: normal;
        }
        
        tr:first-child
        {
            font-weight: bold;
            
            text-align: center;
            
            font-style: italic;
        }
        
        ul.spaced li
        {
            padding-top: 0.5em;
            padding-bottom: 0.5em;
        }
        
        ul.spaced
        {
            margin-left: -1em;
        }
        
    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>



<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

    
    
<h1>Paired t-test</h1>

<p>
    Compare two means <em>"before"</em> and <em>"after"</em> a treatment 
    that are from the same individual, object, or related units. 
    
</p>


<img alt="t-test 2-sample" src="../images/ttest_paired.png">
    

<ul class="linespaced">
    <li>The default confidence level is 95% and a value between (0,100) is accepted. </li>
    <li>The alternative hypothesis can be: <em>1)</em> Less than, <em>2)</em> Not equal, <em>3)</em> Greater than. </li>
    <li>The <em>"Assumed mean difference"</em> is the difference we expect due to the treatment. </li>

</ul>



    

<p>&nbsp;</p>
    
<h3>Example</h3>
<p>
    Suppose 20 students are exposed to a learning module and their scores are (data from: Rosie Shier. 2004):
</p>
<p>
    <em>Pre-module</em> 18, 21, 16, 22, 19, 24, 17, 21, 23, 18, 14, 16, 16, 19, 18, 20, 12, 22, 15, 17<br>
    <em>Post-module:</em> 22, 25, 17, 24, 16, 29, 20, 23, 19, 20, 15, 15, 18, 26, 18, 24, 18, 25, 19, 16
</p>

<table style="border-collapse: collapse;" >
    
    <tr>
        <td></td>
        <td>N</td>
        <td>Mean</td>
        <td>Std Dev</td>
        <td>SE Mean</td>
    </tr>
    <tr>
        <td>Sample 1</td>
        <td>20</td>
        <td>18.40</td>
        <td>3.15</td>
        <td>0.705</td>
    </tr>
    <tr>
        <td>Sample 2</td>
        <td>20</td>
        <td>20.45</td>
        <td>4.06</td>
        <td>0.907</td>
    </tr>
    <tr>
        <td>Difference</td>
        <td>20</td>
        <td>2.84</td>
        <td>2.84</td>
        <td>0.634</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>t-critical</td>
        <td colspan="4" style="text-align: left">-3.23</td>
        </tr>
    <tr>
        <td>p-value</td>
        <td colspan="4" style="text-align:left">0.0044</td>
        </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
        </tr>
    <tr>
        <td colspan="5">95.0 Confidence Interval for two.sided: (-3.38 , -0.722) </td>
    </tr>
    
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="test_t_1sample.php">1 sample t test App</a>
    <a href="test_t_2sample.php">2 sample test App</a>
   <a href="../../std/funcs/test_t.php">test_t</a>
</div>



</body>

</html>
