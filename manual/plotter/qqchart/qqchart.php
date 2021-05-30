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

    
<h1>Histogram</h1>


<p>
    Used for determining if a single data set comes from a normal-distribution or 
    if two data sets come from populations with a common distribution.
</p>


<p>&nbsp;</p>

<p id="terminology"><b>Terminology</b></p>

<ul class="linespaced">
    
    <li>
        <b>Theoretical Quantile:</b> A quantile value computed using normal distribution.
    </li>


    <li>
        <b>Theoretical line:</b> The line whose coordinates computed using theoretical quantiles and 
        sample quantiles at p={0.25, 0.75}. 
    </li> 
</ul>


<details>
    <summary>Plotting positions</summary>
    <p>
        The following formula used to locate the plotting positions.
    </p>

    <p>
        <em>(k - a) / (n + 1 - 2a)</em>, if n<=10 &rarr; a = 0.375, otherwise a = 0.5
    </p>

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
    The following data set used: <br>
    <span style="font-size: small;">
        treatment = [24, 33,43,43,43,44,46,49,49,52,53,54,56,57,57,58,59,61,62,67,71] <br>
        control = [10,17,19,20,26,28,33,37,37,41,42,42,42,43,46,48,53,54,55,55,60,62,85]   
    </span>
</p>
    
</p>



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


<h3 class="head_l3"  id="optionstab">Options Tab</h3>

<p>
    The options tab simply allows you to change the way histogram is constructed.
</p>

<img src="images/formathistogram_optionstab.png" alt="">


<h4 class="head_l4" id="series_distributionmode">Distribution Mode</h4>

<p>
    Initially the chart is plotted using the "Frequency" mode; however, 
    the mode can be changed to "Relative Frequency" or "Density".  
    
    If "Density" is selected, then "Cumulative" option is disabled and unchecked, therefore, 
    the chart will not display a cumulative distribution anymore. 
</p>

<p>
    Below, the chart is constructed using the cumulative and relative frequency options.
</p>

<img src="images/chart_singleseries_relativefreq_cumulative.png" alt="">


<p>&nbsp;</p>

<p>
    The following chart displays the same data in the "Density" mode.
</p>

<img src="images/chart_singleseries_density.png" alt="">


<p>&nbsp;</p>


<h4 class="head_l4" id="bin_mode">Bin Method</h4>

<p>
    The default bin method is for computing the number of bins is Freedman–Diaconis rule. 
    The number of bins can be changed and a number between [1, 100] can be selected. 
</p>

<p>
    The following chart shows the same data using 30 bins. 
</p>

<img src="images/chart_singleseries_freq_binnum_30bins.png" alt="">


<p>&nbsp;</p>


<p><b>Class Intervals of Unequal Widths</b></p>

<p>
    The number of bins, whether automatically computed or manually changed,
    results in equal class widths. However, unequal class widths can be used 
    as well using the following steps: 
</p>

<p>
    <b>1) </b> <a href="../../workbook/createdatastructures.php">Either using the workbook</a> 
    or using the command-line create a vector variable holding the breaks.
</p>

<p class="CodeCommand">
    &gt;&gt;breaks=std.util.tovector{-2,-0.5, 0, 2}
</p>

<p>
    <span style="color: red;">Note:</span> The breakpoints must be in (min, max) data.
</p>

<p>
    <b>2)</b> In the "Binning Method", select "Lua Variable" and type the name of the Lua variable, 
    namely <span style="background-color:lightcyan;">breaks</span>, and press enter.
</p>

<p>
    <b>3)</b> The following chart was obtained using the above-generated breaks and in the density mode.
</p>

<img src="images/chart_singleseries_manualbreaks_density.png" alt="">



<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 class="head_l3"  id="fill_linetab">Line/Fill Tab</h3>
<p>
    Appearance of the bins can be formatted using the following options.
</p>

<img src="images/formathistogram_line_filltab.png" alt="">

<p>&nbsp;</p>

<p>
    For example, the following chart is displayed 
    in frequency and cumulative mode using some formatting.
</p>

<img src="images/chart_singleseries_formatted_freq_cumulative.png" alt="">






<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="../../std/funcs/histogram.php">std.histogram</a>
    <a href="../argand/argand.php">Argand Diagram</a>
    <a href="../boxwhisker/boxwhisker.php">Box-Whisker Chart</a>
    <a href="../scatter/scatterchart.php">Scatter Charts</a>
</div>

  



</html>
