<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Plotter</title>

   
    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        p
        {
            margin-right: 5%;
        }
        
        ol.spaced li
        {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        div.potpourriinfo
        {
            border: 2px dashed maroon;
            margin-right: 60%;
        }
        
        
        @media only screen and (max-width:900px) 
        {
            p
            {
                margin-right: 1%;
            }
            
            
            div.potpourriinfo
            {
                margin-right: 15%;
            }
        }
        
        
         @media only screen and (max-width:600px) 
        {

            div.potpourriinfo
            {
                margin-right: 5%;
                
                font-size: 0.8em;
                
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


<h1>PLOTTER</h1>

<p>
    Completely interactive and customizable charts.
</p>



<img style="max-height: 75vh; max-width: 90vw;" src="images/home_ribbonbar.svg" alt=""/>

<p>&nbsp;</p>



<h3>Available charts</h3>

<ol class="linespaced">
    <li>
        <a href="argand/argand.php">Argand Diagram</a>
        ( <a href="../std/funcs/argand.php">std.argand</a> )
    </li>

    <li>
        <a href="boxwhisker/boxwhisker.php">Box and Whisker Chart</a>
        ( <a href="../std/funcs/boxplot.php">std.boxplot</a> )
    </li>

    <li>
        <a href="scatter/bubblechart.php">Bubble Chart</a>
        (  <a href="../std/funcs/scatter.php">std.scatter</a> )
    </li>

     <li>
        <a href="histogram/histogram.php">Histogram</a>
        ( <a href="../std/funcs/histogram.php">std.histogram</a> )
    </li>

     <li>
        <a href="qqchart/qqchart.php">Q-Q Plot</a>
        ( <a href="../std/funcs/qqnorm.php">std.qqnorm</a> , 
        <a href="../std/funcs/qqplot.php">std.qqplot</a> )
    </li> 

    <li>
        <a href="scatter/scatterchart.php">Scatter Charts</a>
        ( <a href="../std/funcs/scatter.php">std.scatter</a> )
    </li>

</ol>





<p>&nbsp;</p>






<h3>Chart Elements</h3>

<ul class="linespaced">
    <li>
        <a href="plotwindow.php">Plot Window</a>
    </li>

    <li>
        <a href="chartelements.php">Axes, Titles, Labels, Gridlines...</a>
    </li>

</ul>






<p>&nbsp;</p>








<div class="potpourriinfo">
    <p>
        <span style="color: red; font-size: x-large;">&#9432;</span> 
        Charts can be plotted:
     </p>

     <ol class="linespaced">
         <li>Using commands, </li>
         <li>Using the graphical user interface (GUI),</li>
         <li>A potpourri of commands and GUI. </li>
     </ol>
</div>





<p>&nbsp;</p>
<p>&nbsp;</p>





<h3>Multiple Charts/Series</h3>

<ul class="linespaced">
    <li>
        It is also possible to plot several charts on the same plot window, please see 
        <a href="../std/funcs/plot.layout.php">std.plot.layout</a>. 
    </li>

    <li>
        Multiple series can be plotted on the same chart. 
        For more info please see <a href="multi_series.php">multiple series</a>.
    </li>
</ul>  


</body>

</html>
