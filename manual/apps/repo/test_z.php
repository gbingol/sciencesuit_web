<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Z test App</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>

        table
        {
            border-collapse: collapse;
        }
        
        table tr:first-child
        {
            font-weight:bold;
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

        .auto-style3 
        {
            font-size: small;
        }
        
        </style>
        
        
        <script src="/jsscripts/siteanalytics.js"></script>
</head>



<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;   
?>

<h1>Z test App</h1>

<p>
    Test the mean of a distribution in which we already know the population standard deviation. 
</p>


   
<img alt="z-test app" src="../images/test_z_dialog.png" />
   

<ul class="spaced">
    <li>The default confidence level is 95% and a value between (0,100) is accepted. </li>
    <li>The alternative hypothesis can be: <em>1)</em> Less than, <em>2)</em> Not equal, <em>3)</em> Greater than. </li>
</ul>


        
<p>&nbsp;</p>
<p>&nbsp;</p>

<h3>Example</h3>

<p>
    Researchers believe that skull widths of a certain population is normally distributed with a 
    mean (&mu;) of 132.4mm and a standard deviation (&sigma;) of 6.0 mm. 
    Does the following data have an association with the population? 
    (<span class="auto-style3">Question adapted from: 
        <a href="https://www.amazon.com/Introduction-Mathematical-Statistics-Its-Applications/dp/0321693949" 
           target="_blank">Larsen & Marx, An Introduction to Mathematical Statistics and Its Applications</a>
    </span>): 
</p>

<p>
    Measurements: 
    <span class="auto-style3">141, 146, 144, 141, 141, 136, 137, 149, 141, 142, 142, 147, 148, 155, 
    150, 144, 140, 140, 139, 148, 143, 143, 149, 140, 132, 158, 149, 144, 145, 146, 143, 135, 147, 153, 142, 
    142, 138, 150, 145, 126 
    </span>
</p>


<p>&nbsp;</p>


<p>
    A report similar to the following will be prepared on a separate worksheet:
</p>

<table>
    <tr>
        <td>N</td>
        <td>Average</td>
        <td>stdev</td>
        <td>SE Mean</td>
        <td>z</td>
        <td>p-value</td>
    </tr>

    <tr>
        <td>40</td>
        <td>143.53</td>
        <td>6.04</td>
        <td>0.949</td>
        <td>11.73</td>
        <td>0.000</td>
    </tr>

    <tr>
        <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="6">95.0 Confidence Interval for two.sided (141.67 , 145.38)</td>
    </tr>
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="../../std/funcs/test_z.php">std.test_z</a>
    <a href="test_t_1sample.php">1-sample t-test App</a>
</div>
    

</body>

</html>
