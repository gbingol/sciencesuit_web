<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>t-test 2 sample App</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        
        table
        {
            border-collapse: collapse;
        }
        
        tr:first-child
        {
            font-weight: bold;
            
            text-align: center;
        }
        
        td:first-child
        {
            font-style: italic;
            
           
        }
        
        
        td:last-child
        {
            font-style: initial;
            
        
        }
        
        td
        {
            border-style: solid;
            border-width: 1px;

           
        }
        
        ul.spaced
        {
            margin-left: -1em;
        }
    
        ul.spaced li
        {
            margin-top: 6px;
            margin-bottom: 6px;
        }
    
    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>
    

</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>t-test (2-sample)</h1>
<p>
    Determine whether the average difference in means of two samples are different.      
</p>

<p>
    <span style="color: red; font-size: x-large;">&#9432;</span>
    The data can come in two different flavors: 
    either in separate columns or in a single column. The app can analyze both styles.
</p>


<p>&nbsp;</p>


<img alt="t-test 2-sample" src="../images/ttest_2sample.png">



<ul class="spaced">
    <li>The default confidence level is 95% and a value between (0,100) is accepted. </li>
    <li>The alternative hypothesis can be: <em>1)</em> Less than, <em>2)</em> Not equal, <em>3)</em> Greater than. </li>
    <li>If <em>"Assume Equal Variances"</em> is selected, then pooled variance is also reported. </li>

</ul>
    

<p>&nbsp;</p>

<p>If <em>"Assume Equal Variances"</em> is selected, a report similar to the following is prepared (see <a href="test_f.php">F test</a>):</p>

<table>
    
    <tr>
        <td></td>
        <td>Variable 1</td>
        <td>Variable 2</td>
    </tr>
    
    <tr>
        <td>Observation</td>
        <td>21</td>
        <td>23</td>
    </tr>
    <tr>
        <td>Mean</td>
        <td>51.48</td>
        <td>41.52</td>
    </tr>
    <tr>
        <td>Std Deviation</td>
        <td>11.08</td>
        <td>17.15</td>
    </tr>
    <tr>
        <td></td>
        <td>&nbsp;</td>
        <td></td>
    </tr>
    <tr>
        <td>Pooled variance</td>
        <td>14.55</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>t-critical</td>
        <td>2.27</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>p-value</td>
        <td>0.0286</td>
        <td>&nbsp;</td>
    </tr>
    
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
    <td colspan="3">95.0 Confidence Interval for two.sided (1.09 , 18.82)</td>
    </tr>

</table>





<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="test_t_1sample.php">1 sample t test App</a>
    <a href="test_t_paired.php">Paired t test App</a>
    <a href="../../std/funcs/test_t.php">std.test_t</a>
</div>


</body>

</html>
