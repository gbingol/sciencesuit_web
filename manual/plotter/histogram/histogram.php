<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Histogram</title>

   
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
    Used for visually inspecting the numerical data and make inference about its distribution.
</p>


<p>&nbsp;</p>

<p id="terminology"><b>Terminology</b></p>

<ul class="linespaced">
    <li>
        <b>Bin:</b> Each individual bar shown on the chart.
    </li>

    <li>
        <b>Left/Right Close:</b> Boundaries of the interval occupied by individual bin, i.e. "[" or "("  
    </li>
    
    <li>
        <b>Frequency:</b> The number of data points in a bin.
    </li>
    
    <li>
        <b>Relative Frequency:</b> The ratio of frequency to the total number of data points.
    </li>
    
    <li>
        <b>Density:</b> The ratio of relative frequency to class width (bin/interval width).
    </li>
</ul>

<p>&nbsp;</p>






<h2 class="head_l2"  id="plottingsimplechart">Plotting Simple Chart</h2>

  
<p>
    There are different strategies that can be followed to plot a histogram. 
    Here, a few possible strategies will be presented.
</p>

<p> &nbsp;</p>




<h3 class="head_l3"  id="Existing_Selection">Existing Selection</h3>
<p>
    The following data set contains 500 random numbers from 
    a standard normal distribution.
</p>

<img src="images/dataselection_workbook.png" alt="">

<p>&nbsp;</p>

<p>
    After making the selection, clicking on Histogram button will display the following chart. 
</p>

<img src="images/fromexistingselection_simplechart.png" alt="">

<p>&nbsp;</p>

<p>The above-shown chart has the following default properties:</p>

<ol class="linespaced">
    <li>
        The number of bins are calculated using Freedman–Diaconis rule.
    </li>

    <li>
        Bins have equal widths.
    </li>

    <li>
        On the vertical axis frequency is shown.
    </li>

    <li>
        The right bound is closed and the left bound is open (except  
        the bin on the very left).
    </li>

</ol>


<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 class="head_l3"  id="Using_Commands">Using Commands</h3>

<p>
   Please see <a href="../../std/funcs/histogram.php">std.histogram</a>.
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    
   
     
     
     
     
     
     
    
    
<h2 class="head_l2"  id="customizechart">Customizing the Chart</h2>

<p>
    To customize the histogram, right-click on any of the bins and 
    then select "Format..." from the context-menu.
</p>

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
    Appearance of the bins can be formatted. The following chart is displayed 
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
