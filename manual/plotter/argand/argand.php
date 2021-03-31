<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Argand Diagram</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>



         tr,td{
            border:solid 1px;
            text-align:left;
            margin-bottom:10px;
            margin-top:10px;
        }

        table
        {
            width: 60%;
            border-collapse:collapse;
        }



        td:first-child
        {
            font-style:italic;
            white-space:nowrap;
        }

        .spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;

            margin-left: -6px;
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






<body>



<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php";
    include $mainmenuloc;
?>




<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
</script>



<h1>Argand Diagram</h1>

<p>
    Argand diagram is a plot of complex numbers as points and helps to visualize complex numbers.
</p>






<p>&nbsp;</p>





<h2 class="head_l2"  id="plottingsimplechart">Simple Diagram</h2>


<p>
    There are different strategies that can be followed to plot argand diagram.
    Here, a few possible strategies will be presented.
</p>



<p>&nbsp;</p>


<h3 class="head_l3"  id="Existing_Selection">Existing Selection</h3>

<p>
    Let's assume you have the following set of complex numbers: [2i, 3-i, 4+3i, 5]
</p>

<ol class="linespaced">
    <li> Enter the data to a worksheet. </li>

    <img src="images/simpleplot_datainwb.png" alt="">

    <li> Select the data as shown in the following figure:</li>

    <li> Click on any of the <em>"Argand Diagram"</em> button to plot the chart.</li>
</ol>


<p> Done! A chart window will be shown with the data points.</p>

<img src="images/simpleplot_markersshown.png" alt="" />





<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 class="head_l3"  id="Using_Commands">Using Commands</h3>

<p>
    Let's assume that we are investigating the roots of the polynom: <em>x<sup>4</sup> + 1 = 0 </em>
</p>

<p>
    First we will find the roots of the polynom using <a href="../../std/funcs/polyroots.php">std.polyroots</a> 
    function and then visualization will be done via <a href="../../std/funcs/argand.php">std.argand</a> function.
</p>

<p class="CodeCommand">
    &gt;&gt;poly=std.util.tovector{1, 0, 0, 0, 1} <br>
    &gt;&gt;roots=std.polyroots(poly) <br />

    <br />

    &gt;&gt;std.argand(roots) <br />
</p>


<img src="images/simpleplot_usingonlycommand.png" alt="" />







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 class="head_l3"  id="New_Selection">Add Selection as New Series</h3>

<p id="addnewseries">
    The steps described for <a href="#Existing_Selection">existing selection</a>
    immediately plots the chart on a new plot window.  However, when the chart window
    is already shown a new selection can be added to the already existing plot window.
    Without making any selection click "Argand Diagram" button on the "Home" ribbon page 
    to show an empty chart window as shown below:
</p>

<img src="images/emptychartwindow.png" alt=""/>

<p> At this stage, all menus are disabled. The only option available is to right-click and then
    select the "<em>Add New Series</em>" menu. 
    Selecting "<em>Add New Series</em>" will show the following dialog:
</p>



<img src="images/dlgaddseries.png" alt=""/>

<ul class="linespaced">

    <li>
        <em>Name:</em> Name of the series. This field cannot be blank.
    </li>

    <li>
        <em>Data:</em> The range where complex data is located.
    </li>
</ul>



<p>
    Once "<em>OK</em>" button is clicked with the above-shown options, the chart window will be displayed.
</p>


<p>&nbsp;</p>

<p id="addvisibleselection">
    The following is doable as well:
</p>

<ol class="linespaced">
    <li>  Without making any selection click "Argand Diagram" button on the "Home" ribbon page 
        to show an empty chart.
    </li>

    <li> Right-click and if there is already a selection, the context-menu will offer
        <em>"Add Visible Selection"</em> option.
    </li>

</ol>


<img src="images/menu_addvisibleselection.png" alt=""/>


<ol class="linespaced" start="3">
   <li> Click on the <em>"Add Visible Selection"</em> and if there is a valid selection,
       a chart will be displayed.
   </li>
</ol>








<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 class="head_l2"  id="updatedeleteseries">Updating and Deleting Series</h2>


<h3 class="head_l3"  id="Updating_Series">Updating Series</h3>

<p>
    Updating a series simply means that changing its name and its data. However, in order to change the data,
    the series must be plotted via a selection. The data of the series generated by commands cannot be updated.
</p>

<p>
    For example, in the following figure, the series was generated by a selection, therefore it is possible to change
    both its data and name.
</p>

<img src="images/dlgupdatingseries.png" alt=""/>

<p>&nbsp;</p>

<p>
    However, if the series was generated via a command then only the name can be changed as shown in the following figure.
</p>

<img src="images/dlgupdatingseries_datadisabled.png" alt=""/>





<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3"  id="Deleting_Series">Deleting Series</h3>

<p>
    When there are more than one series on the same plot window you will have the option to delete any of them should you wish to do so.
</p>

<p>
    <b>1)</b> Right-click on the series to be deleted (this will also select the series).
</p>

<img src="images/deletingseries.png" alt="" />

<p> <b>2)</b> Simply select the <em>Delete</em> option.</p>







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 class="head_l2"  id="customizechart">Customizing the Chart</h2>


<h3 class="head_l3"  id="Formatting_Series">Formatting Series</h3>


<p><b>1)</b> Right-click on the series to be formatted (this will also select the series).</p>

<img src="images/formatseries_seriesrightclick_popupmenu.png" alt=""/>

<p><b>2) </b>Select the <em>Format</em> option. This will show the following dialog.</p>


<img  src="images/formatseries_dlgformat_showingbothpages.png" alt=""/>
<p>
    The Format dialog has two pages to be able to format <em>Line</em> and <em>Markers</em>.
    By default series are shown by only markers unless "Show Modulus Line" is checked.
</p>



<p>&nbsp;</p>

<p><em>Line Page</em></p>
<table>
    <tr>
        <td>Color:</td>
        <td>Color of the line</td>
    </tr>
    <tr>
        <td>Thickness:</td>
        <td>Thickness of the line (in pixels), with a minimum value of 1.</td>
    </tr>

    <tr>
        <td>Show Modulus Line:</td>
        <td>
            Shows the modulus line (0,0) to (real, imaginary). Therefore, the axis are rescaled 
            and each axis crosses through (0,0).
        </td>
    </tr>

    <tr>
        <td>Show Absolute Value:</td>
        <td>
           Shows the absolute value (magnitude) of the particular point on its modulus line.
        </td>
    </tr>
    
</table>

<p>
    For example, the the following figure <em>Modulus Line</em> and <em>Absolute Values</em> are shown.
</p>

<img src="images/modulusline_absolutevalue_shown.png" alt="">


<p>&nbsp;</p>

<p><em>Marker Page</em></p>
<table>
    <tr>
        <td>Marker Type:</td>
        <td>Shape of the marker to be displayed. Currently, circle, square triangular and x-shaped markers exist.</td>
    </tr>
    <tr>
        <td>Size:</td>
        <td>Size of the marker. For example, for a circle, it is the radius of the circle in terms of pixels.</td>
    </tr>
    <tr>
        <td>Line Color:</td>
        <td>Color of the line that forms the boundaries of the shape.</td>
    </tr>
    <tr>
        <td>Line Thickness:</td>
        <td>Thickness of the line (in pixels) that forms the boundaries of the shape.
            Note that, line thickness upper limit is bound by the size of the shape.</td>
    </tr>
    <tr>
        <td>Fill Color:</td>
        <td>Interior of the shape, excluding the boundaries.</td>
    </tr>
</table>


<p>
    Each time a property is changed, the effects will immediately be seen on the chart.
    Therefore, it is very convenient to format the chart to a desired style.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 class="head_l3"  id="Axis_Options">Axis Options</h3>

<p>
    The plotter allows changing axis options (real or imaginary). It 
    is presented in detail <a href="../chartelements.php#axes">axes options</a>.
</p>
    




<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 class="head_l3"  id="Menu_Options">Context-Menu Options</h3>

 <p>
     Two different context-menu will be shown: <b>i)</b> Series, <b>ii)</b> Chart.
</p>

<h4 class="head_l4"  id="menuoptions_series">Series</h4>

<p>
    To be able to access the series options, just right-click on the particular series and the context-menu
    will offer the necessary options as shown below:
</p>

<img src="images/contextmenu_series.png" alt=""/>

<p>
    <a href="#Updating_Series">Updating</a>,
    <a href="#Formatting_Series">formatting</a> and
    <a href="#Deleting_Series">deleting</a> series
    have already been presented.
</p>




<p>&nbsp;</p>



<h4 class="head_l4"  id="menuoptions_chart">Chart</h4>

<p>
    To be able to access the rest of the options, just right-click on the chart and the context-menu
    will offer the necessary options as shown below:
</p>

<img src="images/contextmenu_plotarea.png" alt="" />

<p>
    <a href="#addnewseries">Add New Series</a> and
    <a href="#addvisibleselection">Add Visible Selection</a>
    have already been presented in detail.
</p>

<p>
    In order to format:
</p>

<ol class="linespaced">
    <li>
        <a href="../chartelements.php#gridlines" >Gridlines</a>
    </li>

    <li>
        <a href="../chartelements.php#textbox">Title, real and imaginary axis labels</a>
    </li>
</ol>










<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>









<h2 class="head_l2"  id="plotmultipleseries">Plotting Multiple Series</h2>

<p>
    There are different ways to plot multiple series on the same plot window.
    Here, the most common approaches will be presented.
</p>



<h3 class="head_l3"  id="Using_Only_Commands">Using Commands</h3>

<p>
    In order to plot multiple series using only commands, you can use <em>hwnd</em>
    property of <a href="../../std/funcs/argand.php">std.argand</a> command. 

    <br>
    
    Note that if an argand diagram is already shown its window handle 
    can also be obtained using <a href="../../std/funcs/plot.hwnd.php">std.plot.hwnd</a> 
    command.
</p>


<p>&nbsp;</p>

<p>
    In the following demo, one series comes from a selection and the other 
    comes from the roots of a polynomial.
</p>

<p>First, assume you have made the following selection in a worksheet: </p>

<img src="images/simpleplot_datainwb.png" alt="">

<p>
    From the selection <a href="../../workbook/createdatastructures.php#array">create an array</a> 
    and name it as <em>arr</em>.
</p>



<p>
    Secondly, obtain the roots of the polynom: <em>x<sup>4</sup> + 1 = 0 </em> as shown in 
    <a href="#Using_Commands">above-section</a>.
</p>


<p class="CodeCommand">
    &gt;&gt;poly=std.util.tovector{1, 0, 0, 0, 1} <br>
    &gt;&gt;roots=std.polyroots(poly) <br>
    
    <br>
    
    &gt;&gt;hwnd=std.argand{arr} <br>
    &gt;&gt;std.argand{roots, hwnd=hwnd}
</p>

<p>
    The following chart with two series (green and red) will be obtained. 
</p>

<img id="chart_multipleseries" src="images/multipleseries_usingcommands.png" alt="">






<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 class="head_l3"  id="Selection_Command">Selection & Command</h3>
<p>
    Whether the chart window is generated via a selection or through a command,
    after then either selection or command can be used to add another series on the generated chart window.
</p>

<p>
    <b>1)</b> Obtain a chart first using commands:
</p>

<p class="CodeCommand">
    &gt;&gt;poly=std.util.tovector{1, 0, 0, 0, 1} <br>
    &gt;&gt;roots=std.polyroots(poly) <br>
    
    <br>

    &gt;&gt;std.argand{roots}
</p>




<p>
    <b>2)</b> After clicking "<em>Add New Series</em>", Add Series dialog will appear.
    As described in <a href="#plottingsimplechart">how to plot a simple chart</a>
    make the necessary selections.
</p>




<p>
    <b>3)</b> Click "<em>OK</em>" button and a new series will be added to the  
     <a href="#chart_multipleseries">chart</a>.
</p>



<p>&nbsp;</p>

<p>
    Please note that, it is also possible to use <em>"Add Visible Selection"</em> option,
    to add another series to an existing chart.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="../scatter/scatterchart.php">Scatter Chart</a>
    <a href="../scatter/bubblechart.php">Bubble Chart</a>
    <a href="../boxwhisker/boxwhisker.php">Box and Whisker</a>
    <a href="../../std/funcs/scatter.php">std.scatter</a>
    <a href="../../std/funcs/boxplot.php">std.boxplot</a>
    <a href="../../std/funcs/argand.php">std.argand</a>
</div>




</body>

</html>
