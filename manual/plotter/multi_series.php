<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Multiple Series</title>

   
    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
      
    
    <script src="/jsscripts/siteanalytics.js"></script>
   
</head>




<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>



<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Select_OutlineFromTagName.bind(null, "H2"), false);
</script>





<h1>Multiple Series</h1>

<p>
    There are different ways to plot multiple series on the same plot window.
    Here, the most common approaches will be presented using the scatter chart 
    as an example. The approach is similar for other chart types.
</p>


<p>&nbsp;</p>


<p>
      <span style="color: red; font-size: x-large;">&#9432;</span> 
      Multiple series can only be plotted if the chart type allows!
</p>


<p>&nbsp;</p>



<h2 class="head_l2"  id="Selection">Selection</h2>

<p>Assume you have made the following selection in a worksheet: </p>


<img src="scatter/images/multipleseries_time-temperature_data.png" alt=""/>

<p>
    Note that, when more than 2 columns are selected, the first column is assumed to be the x-component and the second,
    third and nth columns are assumed to be the y-components of the data sets. Therefore, the data sets are
    made of [x, y<sub>1</sub>], [x,y<sub>2</sub>]… and each data set generates a different series.
</p>



<p>&nbsp;</p>

<p>
    After the selection, once any of the any scatter plot button is clicked a chart comprised of two series
    will be displayed as shown below:
</p>

<img src="scatter/images/multipleseries_viaselection.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 class="head_l2"  id="Using_Only_Commands">Using Only Commands</h2>

<p>
    In order to plot multiple series using only commands, you can use <em>hwnd</em>
    property of <a href="../std/funcs/scatter.php">std.scatter</a> command.
    Suppose you want to plot F- and normal distribution on the same plot window.
    The command sequence that will generate the chart with multiple series:
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.sequence(0, 4, 0.1) <br />
    &gt;&gt;y=std.df{x=x, df1=3, df2=5} <br />

    <br />

    &gt;&gt;hwnd=std.scatter{x=x, y=y, name="f dist"} <br />

    <br />

    &gt;&gt;std.scatter{x=x, y=std.dnorm(x), name="normal dist", hwnd=hwnd}

</p>

<img src="scatter/images/multipleseries_viaonlycommands.png" alt=""/>








<p>&nbsp;</p>
<p>&nbsp;</p>









<h2 class="head_l2"  id="Selection_Command">Selection & Command</h2>
<p>
    Whether the chart window is generated via a selection or through a command,
    after then either selection or command can be used to add another series on the generated chart window.
</p>

<p>
    <b>1)</b> Obtain a chart first using commands:
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.util.tovector{0, 1, 2, 3} <br />
    &gt;&gt;y=x^2 <br />

    <br />

    &gt;&gt;std.plot(x, y, "y=x^2") <br />
    1
</p>


<img src="scatter/images/multipleseries_mixedmode_command.png" alt=""/>

<p> &nbsp;</p>


<p>
    <b>2)</b> After clicking "<em>Add New Series</em>", Add Series dialog will appear.
</p>

<img src="scatter/images/multipleseries_mixedmode_addseries.png" alt=""/>

<p>&nbsp;</p>

<p>
    <b>3)</b> Click "<em>OK</em>" button and a new series will be added to the same plot window as shown below.
</p>

<img src="scatter/images/multipleseries_mixedmode_plotwindow_2series.png" alt=""/>

<p>&nbsp;</p>

<p>
    Please note that, it is also possible to use "Add Visible Selection" option,
    to add another series to an existing chart.
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="argand/argand.php">Argand Diagram</a>
    <a href="boxwhisker/boxwhisker.php">Box and Whisker Chart</a>
    <a href="scatter/bubblechart.php">Bubble Chart</a>
    <a href="histogram/histogram.php">Histogram</a>
    <a href="qqchart/qqchart.php">Q-Q Plot</a>
    <a href="scatter/scatterchart.php">Scatter Charts</a>
</div>


</body>

</html>