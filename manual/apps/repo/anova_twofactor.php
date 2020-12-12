<!DOCTYPE html>
<html>

<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Two factor ANOVA</title>
    
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>

        table
        {
            border-collapse: collapse;

            width: 50%;
        }

        td
        {
            border: solid 1px;

            text-align: center;
        }

        td:first-child
        {
            text-align: left;

            font-style: italic;
        }


        tr:first-child
        {
            text-align: center;

            font-weight: bold;

            font-style: normal;
        }
        

        @media screen and (max-width: 900px)
        {
            table
            {
                width: 95%;
            }
            
            tr
            {
                font-size: small;
            }
            
            img
            {
                max-width: 80%;
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


<h1>Two-factor ANOVA</h1>

<p>
    When multiple levels of two-factor needs to be analyzed, two-way ANOVA can be used. 
    
</p>


<p>&nbsp;</p>

<p>
    As can noted from the following figure, <em>response</em>, 
    <em>factor #1</em> and <em>#2</em> must be at different columns.
</p>



<img alt="" src="../images/anova_twofactor.png">


<p>&nbsp;</p>
<p>
    Below report was generated using the
    <a href="https://newonlinecourses.science.psu.edu/onlinecourses/sites/stat501/files/data/babybirds.txt" target="_blank">data from PSU</a>.
</p>

<table>
    <tr>
        <td>Source</td>
        <td>DF</td>
        <td>SS</td>
        <td>MS</td>
        <td>F-value</td>
        <td>p-value</td>
    </tr>
    <tr>
        <td>Factor #1</td>
        <td>3</td>
        <td>17046</td>
        <td>5682</td>
        <td>0.20</td>
        <td>0.90</td>
    </tr>
    <tr>
        <td >Factor #2</td>
        <td >4</td>
        <td >1127995</td>
        <td >281998</td>
        <td >10.1</td>
        <td>7E-7</td>
    </tr>
    <tr>
        <td>Interaction</td>
        <td >12</td>
        <td >8061.5</td>
        <td >671.8</td>
        <td >0.023</td>
        <td >1</td>
    </tr>
    <tr>
        <td colspan="6">&nbsp;</td>
        
    </tr>
    <tr>
        <td>Error</td>
        <td >100</td>
        <td >2806283</td>
        <td >28062</td>
        <td ></td>
        <td ></td>
    </tr>
    <tr>
        <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
        <td>Total</td>
        <td >119</td>
        <td >3959385</td>
        <td ></td>
        <td ></td>
        <td ></td>
    </tr>
</table>

 
<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../../std/funcs/anova2.php">anova2</a>
    <a href="../../std/funcs/anova.php">anova</a>
    <a href="../../std/funcs/lm.php">lm</a>
</div>


</body>

</html>
