<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>t-test 1 sample App</title>

<script>
    document.createElement("red");
</script>

<link href="../../../css/common.css" rel="stylesheet" type="text/css" />

<style>

    table.collapsed
    {
        border-collapse:collapse;
    }

     table.collapsed td:first-child{
         font-style:italic;
     }

     table.collapsed td
     {
        border-style: solid;
        border-width: 1px;
        padding-left:10px;
        padding-right:10px;
    }
  
    
    .auto-style3 
    {
        text-decoration: underline;
        color: #FF0000;
    }
    
    p
    {
        margin-right: 10%;
    }
    
    ul.spaced li
    {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    
    red
    {
        color: red;
    }
    
    @media screen and (max-width: 900px)
    {
        p
        {
            margin-right: 2%;
        }
    }
    
    
</style>


    <script src="/jsscripts/siteanalytics.js"></script>


</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>Sign Test</h1>

<p>
    Performs the non-parametric sign test test to test if the null hypothesis of a median of a distribution 
    is equal to some specific value or not.  
</p>


<img src="../images/test_sign_1sample.png" alt="">


<ul class="spaced">
    <li>
        <red>Confidence level:</red> The default is 95% and a 
        value between (0,100) is accepted.
    </li> 

    <li>
        <red>Alternative hypothesis</red>: <em>1)</em> Less than, 
        <em>2)</em> Not equal, <em>3)</em> Greater than.
    </li>

    <li>
        <red>Paired Test:</red> If checked, "<em>Variable range</em>" will be 
        renamed as "<em>First Sample Range</em>" and "<em>Second Sample Range</em>" will be active. 
        
        <br />
        
        The app will assume that the data (first and second sample) are <strong>paired</strong>.
    </li>
</ul>



<p>&nbsp;</p>




<h3>Example</h3>
<p>
    Synovial fluid is the clear, viscid secretion that lubricates joints and tendons. In healthy adults, 
    the median pH for synovial fluid is 7.39. Data is for the pH values measured from fluids drawn from the 
    knees of patients with arthritis. Does it follow from these data that synovial fluid pH can be useful in diagnosing arthritis?
</p>


<p>
    Data: 
    <span style="font-size: small;">7.02, 7.35, 7.32, 7.33, 7.15,7.26, 7.25, 7.35, 7.38, 7.2, 7.31, 
        7.24, 7.34, 7.32, 7.34, 7.14, 7.2, 7.41, 7.77, 7.12, 7.45, 7.28, 7.34, 7.22
    </span> 
    (Adapted from: 
    <a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" target="_blank">
        <span style="font-size: small;">Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</span>
    </a>).
</p>


<p>&nbsp;</p>



<p>For the above-shown data, a report is generated similar to the following:</p>

<table class="collapsed">
    <tr>
        <td>N</td>
        <td colspan="3">24</td>

    </tr>

    <tr>
        <td>Number>7.39</td>
        <td colspan="3">3</td>

    </tr>

    <tr>
        <td>Number=7.39</td>
        <td colspan="3">0</td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td>Median</td>
        <td colspan="3">7.315</td>
    </tr>

    <tr>
        <td colspan="4">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="4">Median=7.39 vs Median<>7.39</td>
    </tr>

    <tr>
        <td>p-value</td>
        <td colspan="3">0.00024</td>
    </tr>

    <tr>
       <td colspan="4">&nbsp;</td>

    </tr>

    <tr>
       <td colspan="4" class="auto-style2">CONFIDENCE INTERVALS</td>
    </tr>

    <tr>
       <td>Lower Achieved</td>
       <td>0.9361</td>
       <td>7.240</td>
       <td>7.340</td>
    </tr>

    <tr>
       <td>Interpolated</td>
       <td>0.9500</td>
       <td>7.233</td>
       <td>7.340</td>
    </tr>

    <tr>
       <td>Upper Achieved</td>
       <td>0.9773</td>
       <td>7.220</td>
       <td>7.340</td>
    </tr>
</table>





<p>&nbsp; </p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="../../std/funcs/test_sign.php">std.test_sign</a>
    <a href="test_t_1sample.php">1 Sample t test App</a>
    <a href="test_t_paired.php">Paired t test App</a>
</div>


</body>

</html>
