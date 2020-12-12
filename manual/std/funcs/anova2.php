<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Two-factor ANOVA</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>





<body>

<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>

<h1>anova2</h1>

<p>Performs two-factor analysis of variance test.</p>

<p class="funcsignature">
    anova2 (yobs, x1, x2) 
</p>

<p>
    returns a Vector containing p-values and a 
    Lua table containing extra information to be used as ANOVA 
    table. The order of p-values contained in the Vector is factor #1, factor #2 and interaction.
</p>



<p>&nbsp;</p>



<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>yobs:</td> <td>Data on observed (response) variable&nbsp; &larr; <em>Vector</em></td>
    </tr>
    <tr>
        <td>x1, x2:</td> <td><em>Factor 1</em> and <em>factor 2</em>, respectively.&nbsp; &larr; <em>Vector / Array</em></td>
    </tr>
</table>
    




<p>&nbsp;</p>
<p>&nbsp;</p>





<p>
    <em><strong>Example:</strong></em> The following analysis is performed on the data available
    <a href="https://newonlinecourses.science.psu.edu/onlinecourses/sites/stat501/files/data/babybirds.txt" target="_blank">here</a>.
</p>

<p>
    <a href="../../workbook/index.php#createdatastructures">Create 3 vectors</a> namely as <em>vent</em>, <em>O2</em> and <em>CO2</em>.
</p>



<p class="CodeCommand">
    &gt;&gt;pvalues, AnovaTable=std.anova2(vent, O2, CO2) <br/> 
    <br />

    &gt;&gt;pvalues <br />
    0.895 &emsp; 7.06e-07 &emsp; 1 &emsp; COL
</p>


<p>
    It is seen that only factor #2 has a significant effect, whereas factor #1 
    (p=0.895) and <em>O2</em>*<em>CO2</em> (p=1) do not have significant effect.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="anova.php">anova</a>
    <a href="test_t.php">test_t</a>
    <a href="test_f.php">test_f</a>

</div>

</body>

</html>
