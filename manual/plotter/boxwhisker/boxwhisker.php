<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Box and Whisker Chart</title>

   
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

    
<h1>Box and Whisker Chart</h1>

<p>&nbsp;</p>

<p>
    Box and whisker charts are rather useful to display the five-number summary of data 
    which are the minimum, first quartile, median, third quartile, and maximum. 
    ScienceSuit also goes beyond to show the mean marker and when possible the mean line. 
    Before proceeding with the details of plotting, let's quickly delve into 
    the terminology and anatomy of this type of chart as we will use the 
    terminology throughout this manual. Below is the anatomy of a box and whisker chart.
</p>

<img src="images/anatomy.png" alt=""/>

<p>&nbsp;</p>

<p>Some definitions:</p>

<ul class="linespaced">
    <li>
        <b>IQR:</b> Interquartile range (R<sub>3</sub> - R<sub>1</sub>).
    </li>
    
    <li>
        <b>Outlier points:</b> Any data point greater than 
        R<sub>3</sub>+1.5 &times; IQR or smaller than R<sub>1</sub> - 1.5 &times; IQR.
    </li>
    
    <li><b>Inner points:</b> Any data point that is not an outlier point.</li>
</ul>

<p>&nbsp;</p>

<p>
    Although the above box and whisker anatomy figure displays all parts of the chart, 
    based on the data set, the outlook might be slightly different and chart might
     also not execute all the tasks. Possible scenarios would be:
</p>

<ol class="linespaced">
    <li> 
        When requested, the chart always displays the mean marker, however, 
        the mean line will only be shown when it lies within the box.
    </li>
    
    <li>
        If there is at least one outlier point on the lower-end 
        (R<sub>1</sub> - 1.5 &times; IQR), the whisker on that end will not be displayed. 
        Similarly, if there is at least one outlier point on the 
        upper-end (R<sub>3</sub>+1.5 &times; IQR), the corresponding whisker will not be displayed.
    </li>
    
</ol>







<p>&nbsp;</p>
<p> &nbsp;</p>







<!-- ---------------------------------- Plot Simple Chart ---------------------------------  -->

<h2 id="plottingsimplechart">Plotting Simple Chart</h2>

  
<p>
    There are different strategies that can be followed to plot a box and whisker chart. 
    Here, a few possible strategies will be presented.
</p>

<p> &nbsp;</p>




<h3 id="Existing_Selection">Existing Selection</h3>
<p>
    Let's assume you have the following two data sets, namely 
    <b>A</b> and <b>B</b>, where A=[ 2, 1, 3, 6, 4] and B=[7, 7, 8, 4, 2]
</p>


<p><b>1)</b> Enter the data to a worksheet. </p>

<p><b>2)</b> Select the data as shown in the following figure:</p>

<img src="images/dataselection_workbook.png" alt=""/>

<p>
    <b>3)</b> Click on &quot;<em>Box and Whisker</em>&quot; button located at "Home" page.
</p>

<p>Done! A chart, similar to the following, will be shown.</p>

<img src="images/fromexistingselection_simplechart.png" alt=""/>

<p>&nbsp;</p>

<p>
    If you click on any part of the series, essential information regarding 
    the series will be shown as shown below:
</p>

<img src="images/seriesinfoshown.png" alt=""/>

<p>
    Here, besides the series name, which is <em>"B"</em> in this case, essential 
    statistical measures are also shown for the particular series.  Furthermore, information
    regarding the whether particular series was generated by a selection, if so, 
    <a href="../../std/classes/range.php">range</a> information is displayed, 
    or was generated via commands and if so "... generated by 
    <a href="../../std/funcs/boxplot.php">std.boxplot</a>" information would have been shown.
</p>

<p>&nbsp;</p>

<p id="fliporientation"> 
    In the above-shown charts, the series were aligned horizontally in the chart. 
    It is possible to align series in vertical direction as well. Just right-click 
    on the chart and select <em>"Flip Orientation"</em> option. If the series were aligned 
    horizontally they will be changed to align vertically, or vice versa.
</p>

<img src="images/verticalstackgrowth.png" alt=""/>





<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="Using_Commands">Using Commands</h3>

<p>
    Depending on the nature of the process, it can be significantly more convenient to generate 
    data points using commands and to plot them on the fly than using the above-described steps. 
</p>


<p class="CodeCommand">
    &gt;&gt;style=std.const.linestyle.dot <br>
    
    <br>
    
    &gt;&gt;x=std.util.tovector{2, 1, 3, 6, 4} <br>

    <br>

    &gt;&gt;std.boxplot{x, line={color="255 0 0", style=style, width=3}} <br>
    Light userdata: 00000229B528AA30
</p>
    
<p>
    The above-commands will produce the following chart. For more details, 
    please see <a href="../../std/funcs/boxplot.php">std.boxplot</a> command.
</p>

<img src="images/simplechart_usingcommands.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>
    






<h3 id="New_Selection">Add Selection as New Series</h3>

<p>
    The steps described for <a href="#Existing_Selection">existing selection</a> immediately plots the chart on a new plot window.  
    However, when the chart window is already shown a new selection can be added to the already existing plot window.  
    Click on "Box and Whisker" button located on the "Home" ribbon page to show an empty chart window as shown below:
</p>

<img src="images/emptychartwindow.png" alt=""/>

<p> 
    At this stage, as can be seen from the figure all menus are disabled. 
    The only option available is to right-click anywhere on the chart. If there is no selection available 
    in the current worksheet then context-menu will only offer "<em>Add New Series</em>" option as shown below:
</p>

<img src="images/contextmenu_onlyaddnewseries.png" alt=""/>

<p>
    However, if there was a selection in the current worksheet then context-menu would offer the following options:
</p>

<img src="images/contextmenu_addnew_addvisible.png" alt=""/>

    <p>&nbsp;</p>
    
    <h4 id="addvisibleselection">Add Visible Selection</h4>
<p>
    Let's demonstrate the second case, which is the simplest and fastest way to add series to the existing chart window. 
    Just select the <em>"Add Visible Selection"</em> option, and as shown below the chart will be plotted with the selected data series.
</p>

<img src="images/newseriesusingaddvisibleselection.png" alt=""/>

<p>&nbsp;</p>

<h4>Add New Series</h4>
<p>
    If "<em>Add New Series</em>" option is used, a dialog box, shown below, will be shown to make selection:
</p>

<img src="images/addseries_noselection.png" alt=""/>


<p>&nbsp;</p>

<p>
    Here, the series name can be entered and data can be selected from the workbook. Please note that 
    the selection can only include 1 column of data at a time. 
</p>

<img src="images/addseries_selectionmade.png" alt=""/>


<p>&nbsp;</p>

<p>
    Once "OK" button is clicked, the series will be plotted on the chart.
</p>

<img src="images/addseries_chartsingleseriesplotted.png" alt=""/>
    









<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    
   
     
     
     
     
     
     
    
    
     
     
    
<h2 id="updatedeleteseries">Updating and Deleting Series</h2>


<h3 id="Updating_Series">Updating Series</h3>

    
<p>
        Sometimes we might need to change the name or the data of a series. Although we can delete the series and then add new series 
        it is mostly more convenient and faster to directly update the series itself. 
        To update a series, right-click on any part of the series and select "Update" as shown in the following figure:
</p>

<img id="updateseriescontextmenu" src="images/contextmenu_updateseries.png" alt=""/>

<p>
    The following dialog will be shown:
</p>

<img src="images/updateseriesdialog.png" alt=""/>

<p>
    It can be seen from the above figure that it is possible to change the series name and its data. However, to be able to change the data, 
    the series must have been plotted via a selection. The data of the series generated by commands cannot be updated; 
    however, its name can be changed.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="Deleting_Series">Deleting Series</h3>

<p>
When there are more than one series on the same plot window you will have 
the option to delete any of them should you wish to do so.
</p>

<p>
<b>1)</b> As seen in the <a href="#updateseriescontextmenu">figure</a> 
right-clicking on a series will show a context menu which might offer the 
delete option.
</p>


<p> <b>2)</b> Simply select the <em>Delete</em> option.</p>








<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>










    
<h2 id="customizechart">Customizing the Chart</h2>


<h3 id="Formatting_Series">Formatting Series</h3>


<p>Right-clicking on the series to be formatted will show the following dialog :</p>

<h4 id="optionstab">Options Tab</h4>

<img src="images/formatseriesdlg_optionstab.png" alt=""/>

<p>
    Although the options are self-explanatory, let's quickly go through:
</p>

<ul class="linespaced">
    <li><em>Show Inner Points:</em> Shows points which are not outliers.</li>
    <li><em>Show Outlier Points:</em> If there are outlier points, they will be shown.</li>
    <li><em>Show Mean Marker:</em> The mean value will be shown with a marker.</li>
    <li><em>Show Mean Line:</em> If the mean line lies in the box, it will be shown.</li>
</ul>


<p>&nbsp;</p>


<h4 id="linetab">Line Tab</h4>

<p>
    Lines make up the whiskers and the boundaries of the box. Its style, color and width can be changed. 
    Selecting the <em>line</em> tab will show the following dialog.
</p>

<img src="images/formatseriesdlg_linetab.png" alt=""/>


<p>&nbsp;</p>

    <h4 id="filltab">Fill Tab</h4>

<p>
    By fill it is meant the area within the box, excluding the boundaries. Its style and color can be changed. 
    Selecting the <em>fill</em> tab will show the following dialog.
</p>
    
<img src="images/formatseriesdlg_filltab.png" alt=""/>

    
    
    
    
    
<p>&nbsp;</p>
<p>&nbsp;</p>

  

    
    
    
    
<h3  id="Axis_Options">Axis Options</h3>

<p>
    Should you wish to, the chart allows changing the boundaries of its axis.
</p>

<p><b>1)</b> Right-click on the axis and select "<em>Format Axis...</em>"</p>


<p>&nbsp;</p>
<p>
    <b>2)</b> For the the <a href="#updateseriescontextmenu">chart seen</a>, the following dialog will be shown:
</p>

<img src="images/axisproperties_originalbounds.png" alt=""/>

<p>
    The bounds (minimum, maximum) are shown. Modifying the bounds, such that <br>
    <em>Bounds</em> &rarr; Minimum: 1&nbsp;&nbsp;&nbsp; Maximum: 8  <br>
    will modify the chart as follows:
</p>

<img src="images/axisproperties_chart_boundsmodified.png" alt=""/>

<p>
    If you had a large number of data and <em>Show Inner Points</em> option was on, re-scaling the axis would 
    "filter" the data to contain only the points between the newly chosen scale.
</p>


<p>&nbsp;</p>
<p>If you right-click on the horizontal axis again and select the "<em>Format Axis...</em>", the dialog will be shown as follows:</p>

<img src="images/axisproperties_resetbuttonsactive.png" alt=""/>

<p>
    It is seen that the "<em>Reset</em>" buttons are active and if any of the "<em>Reset</em>" button is clicked 
    the bounds will be reset to its value that had been calculated automatically, i.e., 0 for minimum and 9 for maximum.
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="contextmenuopts">Context-Menu Options</h3>

<p>
    Two different context-menu will be shown: <b>i)</b> Series, <b>ii)</b> Chart.
</p>

<h4 id="contextmenu_series">Series</h4>

<p>
    To be able to access the series options, just right-click on the particular series and the context-menu 
    will offer the necessary options as shown below:
</p>

<img src="images/contextmenu_series.png" alt=""/> 

<p>
    Except <em>Display Name</em> option, in sections <a href="#customizechart">customizing the chart</a> and <a href="#updatedeleteseries">update/delete series</a> 
    we covered the menu options. Display name is self-explanatory and simply displays the name of the series as shown below:
</p>

<img src="images/contextmenu_displayname_chartunformattedtext.png" alt=""/>

<p id="formattextbox">
    Right-clicking on the name will show the following options for textbox, which is extensively covered <a href="../chartelements.php#textbox">here</a>.
</p>

<img src="images/seriesname_format.png" alt=""/>

<p>&nbsp;</p>
<p>&nbsp;</p>

 <h4 id="contextmenu_chart">Chart</h4>
    
<p>
    To be able to access the chart options, just right-click on any area (not containing any chart element) on the chart and the context-menu 
    will offer the necessary options as shown below:
</p>

<img src="images/contextmenu_chart.png" alt=""/>

<ul class="space10px">
    <li><em>Add New Series</em> and <em>Add Visible Selection</em> options are already covered in <a href="#New_Selection">new selection</a> section.</li>
    <li><em>Flip Orientation</em> option is covered <a href="#fliporientation">here</a></li>
    <li><em>Add Chart Title:</em> A title on the top part of the chart will be shown.</li>
    <li><em>Add Legend:</em> A legend will be shown.</li>
</ul>


<p>&nbsp;</p>

<p>
    If you add a chart title and <em>left-click</em> on the title you will be able to edit the title and if you 
    <em>right-click</em> on the title, the following options will be displayed:
</p>

<img src="images/charttitle_contextmenuoptions.png" alt=""/>

<p>
    The "Font..." options displayed are covered in <a href="../chartelements.php#textbox">chart elements page</a>.
</p>

<p>&nbsp;</p>

<p>
    If you click on <em>"Add Legend"</em> and right-click on the legend, the following options, which are discussed 
    <a href="../chartelements.php#legend">here</a>, will be shown:
</p>

<img src="images/legend_contextmenu.png" alt=""/>






<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
  








    
<h2 id="plotmultipleseries">Plotting Multiple Series</h2>

<p>There are different ways to plot multiple series on the same plot window. Here, the most common approaches will be presented.</p>
<p>&nbsp;</p>



<h3 id="plotmultiple_selection">Selection</h3>

<p>
    This has already been discussed in the <a href="#Existing_Selection">first section</a>. 
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="plotmultiple_onlycmds">Using Only Commands</h3>

<p>
    If there is already a plot window and the handle, <em>hwnd</em>, is known:
</p>


<p class="CodeCommand">
    &gt;&gt;x=std.util.tovector{2, 1, 3, 6, 4} <br/>
    &gt;&gt;y=std.util.tovector{7, 7, 8, 4, 2} <br/>

    <br/>

    <span style="color: green">--Creates a plot window, handle <em>hwnd</em>, with series <b>x</b></span> <br/>
    &gt;&gt;hwnd=std.boxplot{x} <br/>

    <br/>

    <span style="color: green">--Adds series <b>y</b> on the plot window with handle <em>hwnd</em></span> <br/>
    &gt;&gt;std.boxplot{y, hwnd=hwnd}
</p>



<p>&nbsp;</p>

<p>
    Same as above command sequences; however, creates multiple series using a single-command:
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.util.tovector{2, 1, 3, 6, 4} <br/>
    &gt;&gt;y=std.util.tovector{7, 7, 8, 4, 2} <br/>

    <br/>

    &gt;&gt;std.boxplot{x,y}
</p>

<img src="images/fromexistingselection_simplechart.png" alt=""/>





<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="plotmultiple_selection_cmd">Selection & Command</h3>
<p>
    If there is already a plot window with series on it, 
    you can use <a href="../../std/funcs/plothwnd.php">std.plothwnd</a> to 
    obtain the <em>window handle, hwnd</em> and then use 
    <a href="../../std/funcs/boxplot.php">std.boxplot</a> to add series on 
    the plot window. 
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
   <a href="../scatter/scatterchart.php">Scatter chart</a>
   <a href="../../std/funcs/boxplot.php">std.boxplot</a>
   <a href="../../std/funcs/scatter.php">std.scatter</a>
</div>

  



</html>
