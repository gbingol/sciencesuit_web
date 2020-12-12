<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Single-factor ANOVA</title>



    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
	
    
        table.colorful
        {
            border-collapse:collapse;
            text-align:center;
            border: solid 1px;
        }

        table.colorful td
        {
            padding-left:10px;
            padding-right:10px;
            border: solid 1px;
        }

        table.colorful td:first-child
        {
            background-color:yellow;
        }

        table.colorful td:nth-child(2)
        {
            background-color:white;
        }

        table.colorful td:nth-child(3)
        {
            background-color: greenyellow;
        }

        table.colorful td:nth-child(4)
        {
            background-color:deepskyblue;
        }
            

       
        .auto-style1 
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


<h1>anova</h1>

<p>Performs single-factor analysis of variance test.</p>

<p class="funcsignature">
    
    anova(v1=, v2=, v3=, ...) &rarr; number, Lua table
    
</p>

<p>
    The function returns p-value and an ANOVA table.
</p>





<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>v1, v2...</td> <td>Responses &larr; Vector</td>
    </tr>
</table>
        

<p>&nbsp;</p>




<p>
    <em><strong>Example:</strong></em> The following data is obtained for relative attractiveness of various luminescent colors 
    to the cereal leaf beetle*. The data shows the colors and the numbers of insects trapped.
</p>

<p>
    *<span class="auto-style7"><span class="auto-style1">Moore and McCabe(2002). Introduction to the 
    Practice of Statistics 4th Edition, pp. 789</span> (<span class="auto-style1">Original data from: Wilson and 
    Shade (1967). Relative attractiveness of various luminescent colors to the 
    cereal leaf beetle and the meadow spittlebug. Journal of Economic Entomology, 
    60, pp. 578-580</span>)</span> .
</p>


<table class="colorful">
	
    <tr>
        <td><b>Lemon Yellow</b></td>
        <td><b>White</b></td>
        <td><b>Green</b></td>
        <td ><b>Blue</b></td>
    </tr>
    <tr>
        <td>45</td>
        <td>21</td>
        <td>37</td>
        <td>16</td>
    </tr>
    <tr>
        <td>59</td>
        <td>12</td>
        <td>32</td>
        <td>11</td>
    </tr>
    <tr >
        <td>48</td>
        <td>14</td>
        <td>12</td>
        <td>20</td>
    </tr>
    <tr>
        <td>46</td>
        <td>17</td>
        <td>25</td>
        <td>21</td>
    </tr>
    <tr >
        <td>38</td>
        <td>13</td>
        <td>39</td>
        <td>14</td>
    </tr>
    <tr >
        <td>47</td>
        <td>17</td>
        <td>41</td>
        <td>7</td>
    </tr>
</table>



<p>&nbsp;</p>


<p>
    Create 4 vectors or a range or a matrix from the data in the worksheet. 
    See <a href="../../workbook/index.php#createdatastructures">how to create vectors</a>. 
    Assuming a vector was created for each color data:
</p>


<p class="CodeCommand">
    <span style="color:green"> --each parameter is of type Vector</span> <br>
    &gt;&gt;pval, AnovaTable=std.anova(lemon, white, green, blue)   <br />

    <br />

    &gt;&gt;pval <br />
    2.90e-007
</p>


<p>
    Although not shown here, the argument <em>AnovaTable</em> contains all the information to setup an ANOVA table.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="anova2.php">anova2</a>
    <a href="test_t.php">test_t</a>
    <a href="test_f.php">test_f</a>
    <a href="tukey.php">tukey</a>     
</div>

    </body>

</html>
