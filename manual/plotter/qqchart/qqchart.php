<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Q-Q Chart</title>

   
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        
        .spaced li
        {
            margin-bottom: 6px;
            margin-top: 6px;
        }
        
         tr,td{
            border:solid 1px;
            text-align:left;
            margin-bottom:10px;
            margin-top:10px;
        }

        table{
            width: 60%;
            border-collapse:collapse;
        }

        

        td:first-child{
            font-style:italic;
            white-space:nowrap;
           
        }

      
         @media only screen and (max-width:900px) 
        {
            table
            {
                width: 80%;
            }

        }



        @media only screen and (max-width:600px) 
        {
            table 
            {
                width: 100%;
            }

        }

    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>
   
</head>


<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
</script>

    
<h1>Q-Q Chart</h1>


<p>
    Used for determining if a single data set comes from a normal-distribution or 
    if two data sets come from populations with a common distribution.
</p>


<p>&nbsp;</p>


<details>
    <summary>Terminology</summary>
    <ul class="linespaced">
        
        <li>
            <b>Theoretical Quantile:</b> A quantile value computed using normal distribution.
        </li>


        <li>
            <b>Theoretical line:</b> The line whose coordinates computed using theoretical quantiles and 
            sample quantiles at p={0.25, 0.75}. 
        </li> 
    </ul>
</details>


<p>&nbsp;</p>


<details>
    <summary>Technical Details</summary>
    <ul class="linespaced">
        <li>
            The following formula used to locate the plotting positions: <br>
            <em>(k - a) / (n + 1 - 2a)</em>, if n<=10 &rarr; a = 0.375, otherwise a = 0.5
        </li>

        <li>
            If a pair of data is used to construct the chart, then:<br>
            <b>1) </b> If data lengths are equal, then sorted values are plotted against each other.<br>
            <b>2) </b> If data lengths are unequal, then linear interpolation is used to "sample" from 
            the data with larger size.
        </li>

    </ul>

</details>



<p>&nbsp;</p>






<h2 class="head_l2"  id="plottingsimplechart">Plotting Simple Chart</h2>

  
<p>
    Depending on the nature of the selection the chart displays two different 
    Q-Q plots.
</p>



<p> &nbsp;</p>







<h3 class="head_l3"  id="Existing_Selection">Existing Selection</h3>
<p>
    The following data set used:
</p>

<p>
    <span style="font-size: small;">
        treatment = [24, 33,43,43,43,44,46,49,49,52,53,54,56,57,57,58,59,61,62,67,71] <br>
        control = [10,17,19,20,26,28,33,37,37,41,42,42,42,43,46,48,53,54,55,55,60,62,85]   
    </span>
</p>


<p>&nbsp;</p>

 <p>
    Assuming that the data has already been entered to worksheet, there are two cases: 
 </p>  

 <ol class="linespaced">
    <li>Selection of single column,</li>
    <li>Selection of two columns</li>
 </ol> 



 <p>&nbsp;</p>



<h4 id="singlecolumn" class="head_l4">Single column</h4>

<ol class="linespaced">
    <li>Select "Control" data, optionally including the label itself.</li>
    <li>Click on Q-Q plot icon and a chart similar to the following will be displayed:</li>
 </ol> 

 <img src="images/selection_singlecolumn.png" alt="">

<p>
    Note that Anderson-Darling normality test is not shown by default.
</p>


 <p>&nbsp;</p>


 <h4 id="twocolumns" class="head_l4">Two columns</h4>
 <ol class="linespaced">
    <li>Select "Treatment" and "Control", optionally including the labels themselves.</li>
    <li>Click on Q-Q plot icon and a chart similar to the following will be displayed:</li>
 </ol>

 <img src="images/selection_twocolumn.png" alt="">


<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 class="head_l3"  id="Using_Commands">Using Commands</h3>

<p>
   Please see <a href="../../std/funcs/qqnorm.php">std.qqnorm</a> and 
   <a href="../../std/funcs/qqplot.php">std.qqplot</a>
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    
   
     
     
     
     
     
     
    
    
<h2 class="head_l2"  id="customizechart">Customizing the Chart</h2>

<p>
    Right-click on any of the marker and select "Format...". A dialog with 
    "Line Tab" and "Marker Tab" will be shown.
</p>

<h3 class="head_l3"  id="optionstab">Line Tab</h3>

<p>
    The line tab is enabled only when a single column is selected and 
    is disabled when two columns are selected as shown in the following 
    figure:
</p>

<img src="images/format_linetab.png" alt="">

<p>&nbsp;</p>

<p class="rightmargined">
    When a single column is selected, the "theoretical line" can be shown or hidden 
    and its appearance can be changed. Furthermore, Anderson-Darling normality test 
    can be carried out.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 class="head_l3"  id="fill_linetab">Marker Tab</h3>
<p>
    Appearance of markers can be formatted.
</p>

<img src="images/format_markertab.png" alt="">








<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="../../std/funcs/qqnorm.php">std.qqnorm</a>
    <a href="../../std/funcs/qqplot.php">std.qqplot</a>
    <a href="../../std/funcs/test_norm_ad.php">std.test_norm_ad</a>

    <a href="../boxwhisker/boxwhisker.php">Box-Whisker Chart</a>
    <a href="../histogram/histogram.php">Histogram</a>
</div>

  



</html>
