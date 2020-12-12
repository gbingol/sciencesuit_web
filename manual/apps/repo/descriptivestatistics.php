<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Descriptive Statistics App</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>

        table
        {
            border-collapse: collapse;

            width: 30%;
        }

        table.worksheet
        {
            border-collapse: collapse;

            width: 20%;

            background-color: beige; 

            margin-top: -6px;
        }

        td
        {
            border: 1px solid;
        }

        tr:first-child
        {
            text-align: center;

            font-weight: bold;
        }

        #AppImage
        {
            max-width: 400px;
        }

        @media screen and (max-width: 900px)
        {
            table
            {
                border-collapse: collapse;

                width: 90%;
            }

            table.worksheet
            {
                border-collapse: collapse;

                width: 70%;
            } 

            #AppImage
            {
                max-width: 90%;
            }
        }


    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>

    
    
<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"] . "/mainmenu.php";
    include $mainmenuloc;
?>


<h1>Descriptive Statistics</h1>
<p>
   Compute many statistical measures at once.
</p>


<p>&nbsp;</p>

<img id="AppImage" src="../images/descriptivestat.png" alt="">
  

<p>
    Once the data is selected from a worksheet, either all or 
    individual measures of the data can be selected. 
    It is possible to analyze the whole data set or each individual column separately. 
</p>

<p>&nbsp;</p>


<p>
    <em>Table</em>: Data in a worksheet
</p>
<table class="worksheet">
    <tr>
        <td>A</td>
        <td>B</td>
    </tr>
    
    <tr>
        <td>1</td>
        <td>10</td>
    </tr>

    <tr>
        <td>2</td>
        <td>20</td>
    </tr>
    
    <tr>
        <td>3</td>
        <td>30</td>
    </tr>
    
    <tr>
        <td>4</td>
        <td>&nbsp;</td>
    </tr>
    
</table>


<p>&nbsp;</p>

<p>
    For the above-shown table, 
    below is a report showing the difference of selecting (separated) 
    and not selecting (aggregated) the <em>"Treat columns separately"</em> option:
</p>

<table>
    <tr>
        <td>&nbsp;</td>
        <td colspan="2">Separated</td>
        <td>Aggregated</td>
    </tr>
    <tr>
        <td><strong>Mean</strong></td>
        <td>2.500</td>
        <td>20.0</td>
        <td>10.0</td>
    </tr>
    <tr>
        <td><strong>Variance</strong></td>
        <td>1.667</td>
        <td>100.0</td>
        <td>121.67</td>
    </tr>
    <tr>
        <td><strong>Sum</strong></td>
        <td>10.0</td>
        <td>60.0 </td>
        <td class="auto-style8">70.0</td>
    </tr>
    <tr>
        <td><strong>Count</strong></td>
        <td>4</td>
        <td>3</td>
        <td>7</td>
    </tr>
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="anova_singlefactor.php">Single-factor ANOVA</a>
    <a href="anova_twofactor.php">Two-factor ANOVA</a>
</div>


</body>

</html>
