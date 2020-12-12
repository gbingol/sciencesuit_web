<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Multiple Linear Regression</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>

        table{
            border:solid 1px;
            border-collapse:collapse;
        }
        
        tr:first-child
        {
            font-weight: bold;
        }

        td{
            border:solid 1px;
            padding-left:10px;
            padding-right:10px;
        }

        .auto-style1 {
            font-size: small;
        }
        .auto-style2 {
            color: #008000;
        }
        .auto-style3 {
            color: #800080;
        }

        .auto-style4 {
            text-align: center;
        }
        .auto-style5 {
            text-align: left;
        }

    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>
    

</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Linear Regression</h1>
<p>
    Performs simple/multiple linear regression. 
    The app uses <a href="../../std/funcs/lm.php">std.lm</a> function
</p>

<p>&nbsp;</p>


<img src="../images/linearregression.png" alt="">


<p>&nbsp;</p>
    
<h2>Example</h2>


<p>
    Let's work on the <a href="https://online.stat.psu.edu/onlinecourses/sites/stat501/files/data/babybirds.txt" target="_blank">data</a> 
    available on PSU Website 
    (<span class="auto-style1">From: Statistics Online - Penn State, STAT 501  Example on Underground Air Quality</span>). 
</p>


<p>&nbsp;</p>
    
<p>
    For this particular data set, <span class="auto-style2"><em>Response</em></span> corresponds to 
    <span class="auto-style2"><em>Vent</em></span> and <span class="auto-style3"><em>Factors</em></span> 
    correspond to a combined matrix of <span class="auto-style3">O<sub>2</sub> and CO<sub>2</sub></span>.
</p>
   
<p>Once <em>OK</em> button is clicked, a report similar to the following will be prepared:</p>
    

<p>&nbsp;</p>

<table >
    <tr>
        <td colspan="6">Linear Regression Table</td>
    </tr>
    <tr>
        <td colspan="6">R<sup>2</sup>=0.268</td>
        
    </tr>
    <tr>
        <td colspan="6">&nbsp;</td>
    </tr>
    
    <tr>
        <td></td>
        <td class="auto-style4"><em>df</em></td>
        <td class="auto-style4"><em>SS</em></td>
        <td class="auto-style4"><em>MS</em></td>
        <td class="auto-style4"><em>F</em></td>
        <td class="auto-style4"><em>p-value</em></td>
	</tr>
    <tr>
        <td class="auto-style5"><em>Regression</em></td>
        <td>2</td>
        <td>1061819</td>
        <td>530909</td>
        <td>21.44</td>
        <td>0.00000</td>
	</tr>
    <tr>
        <td class="auto-style5"><em>Residual</em></td>
        <td>117</td>
        <td>2897566</td>
        <td>24766</td>
        <td></td>
        <td></td>
	</tr>
	
    <tr>
        <td class="auto-style5"><em>Total</em></td>
        <td>119</td>
        <td>3959385</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
	</tr>
	
    <tr>
        <td colspan="6">&nbsp;</td>
    </tr>
	
    <tr>
        <td colspan="6">&nbsp;</td>
    </tr>
	
    <tr>
        <td>&nbsp;</td>
        <td class="auto-style4"><em>Coefficient</em></td>
        <td class="auto-style4"><em>Std Error</em></td>
        <td class="auto-style4"><em>T value</em></td>
        <td class="auto-style4"><em>p-value</em></td>
        <td class="auto-style4"><em>CI</em></td>
	</tr>
	
    <tr>
        <td><em>Intercept</em></td>
        <td>85.90</td>
        <td>106.0</td>
        <td>0.8103</td>
        <td>0.4194;</td>
        <td>-124.0 , 295.8</td>
	</tr>
	
    <tr>
        <td><em>Variable 1</em></td>
        <td>-5.330</td>
        <td>6.425</td>
        <td>-0.8296</td>
        <td>0.4084</td>
        <td>-18.05 , 7.394</td>
	</tr>
	
    <tr>
        <td><em>Variable 2</em></td>
        <td>31.10</td>
        <td>4.789</td>
        <td>6.495</td>
        <td>0.00000</td>
        <td>21.62 , 40.59</td>
	</tr>
	
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="../../std/funcs/lm.php">lm</a>
    <a href="../../std/funcs/anova2.php">anova2</a>
</div>


</body>

</html>
