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

<p>&nbsp;</p>

<p>
    Histograms are rather useful to visually inspect the numerical data .
</p>

<img src="images/anatomy.png" alt=""/>

<p>&nbsp;</p>

<p>Terminology:</p>

<ul class="linespaced">
    <li>
        <b>Bin:</b>
    </li>

    <li>
        <b>Left/Right Close:</b>
    </li>
    
    <li>
        <b>Frequency:</b>
    </li>
    
    <li>
        <b>Relative Frequency:</b>
    </li>
    
    <li>
        <b>Density:</b>
    </li>
</ul>

<p>&nbsp;</p>





<!-- ---------------------------------- Plot Simple Chart ---------------------------------  -->

<h2 class="head_l2"  id="plottingsimplechart">Plotting Simple Chart</h2>

  
<p>
    There are different strategies that can be followed to plot a histogram. 
    Here, a few possible strategies will be presented.
</p>

<p> &nbsp;</p>




<h3 class="head_l3"  id="Existing_Selection">Existing Selection</h3>
<p>
    Let's assume you have the following data set
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 class="head_l3"  id="Using_Commands">Using Commands</h3>

<p>
    Depending on the nature of the process, it can be significantly more convenient to generate 
    data points using commands and to plot them on the fly than using the above-described steps. 
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    
   
     
     
     
     
     
     
    
    
<h2 class="head_l2"  id="customizechart">Customizing the Chart</h2>


<h3 class="head_l3"  id="Formatting_Series">Formatting Series</h3>


<p>Right-clicking on the series to be formatted will show the following dialog :</p>

<h4 class="head_l4"  id="optionstab">Options Tab</h4>







<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="../../std/funcs/histogram.php">std.histogram</a>
    <a href="../argand/argand.php">Argand Diagram</a>
    <a href="../boxwhisker/boxwhisker.php">Box-Whisker Chart</a>
    <a href="../scatter/scatterchart.php">Scatter Charts</a>
</div>

  



</html>
