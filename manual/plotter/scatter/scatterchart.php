<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Scatter Chart</title>


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



<h1>Scatter Chart</h1>

<p>
    Scatter charts are very useful to show the relationship between different sets of values.
</p>






<p>&nbsp;</p>



<!-- #region -->

<h2 id="plottingsimplechart">Plotting Simple Chart</h2>


<p>
    There are different strategies that can be followed to plot a chart.
    Here, a few possible strategies will be presented.
</p>



<p>&nbsp;</p>


<h3 id="Existing_Selection">Existing Selection</h3>

<p>
    Let's assume you have the following time and temperature data:
</p>

<img src="images/howtoplot_time-temperature_data-includingheaders.png" alt=""/>

<ol class="linespaced">
    <li> Enter the data to a worksheet. </li>

    <li> Select the data as shown in the following figure:</li>

    <li> Click on any of the <em>"Scatter Plots"</em> button to plot the chart.</li>
</ol>


<p> Done! A chart window will be shown with the data points.</p>

<img src="images/howtoplot_simplechart_viadirectselection.png" alt="" />

<p>&nbsp;</p>

<p>
    Please note that the name of the series will be "temperature". However, if
    the selection has not included the headers, a name would be assigned automatically,
    which in this case would be <em>"Series 1"</em>.

</p>



<p>&nbsp;</p>

<p>
    Furthermore, if you click on any of the marker, information about the data point will be shown as shown below:
</p>

<img src="images/showmarkerinformation.png" alt=""/>

<p>
    Here, <em>"temperature"</em> is the series name,  <em>x</em> and <em>y</em> are values corresponding to the
    horizontal and the vertical axis, respectively.

    Moreover, we see that, this particular series was generated by a selection such that x-data has come from
    <em>"ThermalProc! A1:A8"</em> and y-data from <em>"ThermalProc! B1:B8"</em>.

    If the series was generated via commands,
    <em>"... generated by <a href="../../std/funcs/scatter.php">std.scatter</a>"</em>
    information would have been shown.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="Using_Commands">Using Commands</h3>

<p>
    Depending on the nature of the process, it can be significantly more convenient to generate
    data points using commands and to plot them on the fly than using the above-described steps.
</p>

<p>
    Suppose you are to inspect the plot F-distribution for degrees of freedom of 3 and 5.
    Using commands this can be achieved quickly by typing the following commands:
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.sequence(0, 4, 0.1) <br />
    &gt;&gt;y=std.df{x=x, df1=3, df2=5} <br />

    <br />

    &gt;&gt;std.scatter(x,y) <br />
</p>


<img src="images/howtoplot_simplechart_viausingcommands.png" alt="" />







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="New_Selection">Add Selection as New Series</h3>

<p id="addnewseries">
    The steps described for <a href="#Existing_Selection">existing selection</a>
    immediately plots the chart on a new plot window.  However, when the chart window
    is already shown a new selection can be added to the already existing plot window.
   Click any of the plot buttons on the "Home" ribbon page to show an empty chart window as shown below:
</p>

<img src="images/emptychartwindow.png" alt=""/>

<p> At this stage, all menus are disabled. The only option available is to right-click and then
    select the "<em>Add New Series</em>" menu.
</p>

<img src="images/howtoplot_simplechart_emptychartwindow_addnewseries.png" alt="" />

<p>
    Selecting "<em>Add New Series</em>" will show the following dialog:
</p>


<img src="images/dlgaddseries.png" alt=""/>

<ul class="linespaced">

    <li>
        <em>Type:</em> The type of the series to be plotted. Note that on the same chart, different type of series can be plotted.
    </li>

    <li>
        <em>Name:</em> Name of the series. This field cannot be blank.
    </li>

    <li>
        <em>X and Y Data:</em> The range where X- and Y-data are located.
    </li>
</ul>


<p>&nbsp;</p>


<img src="images/howtoplot_simplechart_viadlgaddseries.png" alt="" />

<p>
    Once the "<em>OK</em>" button is clicked with the above-shown options, the chart window will be displayed.
</p>


<p>&nbsp;</p>

<p id="addvisibleselection">
    The following is doable as well:
</p>

<ol class="linespaced">
    <li> Click any of the plot buttons on the "Home" ribbon page to show an empty chart window.</li>

    <li> Right-click and if there is already a selection, the context-menu will offer
        <em>"Add Visible Selection"</em> option.
    </li>

</ol>


    <img src="images/menu_addvisibleselection.png" alt=""/>
<ol class="linespaced" start="3">
   <li> Click on the <em>"Add Visible Selection As Scatter"</em> and if there is a valid selection,
       a chart will be displayed.
   </li>
</ol>

 <!-- #endregion -->







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 id="updatedeleteseries">Updating and Deleting Series</h2>


<h3 id="Updating_Series">Updating Series</h3>

<p>
   Updating a series simply means that changing its name and its data. However, in order to change the data,
    the series must be plotted via a selection. The data of the series generated by commands cannot be updated.
</p>

<p>
    For example, in the following figure, the series was generated by a selection, therefore it is possible to change
    both its data and name. However, if the series was generated via a command then only the name can be changed.
</p>

<img src="images/scatter_updatingseries.png" alt=""/>


<p>  &nbsp;</p>
<p> &nbsp;</p>


<h3 id="Deleting_Series">Deleting Series</h3>

<p>
    When there are more than one series on the same plot window you will have the option to delete any of them should you wish to do so.
</p>

<p>
    <b>1)</b> Right-click on the series to be deleted (this will also select the series).
</p>

<img src="images/basics_deletingseries.png" alt="" />

<p> <b>2)</b> Simply select the <em>Delete</em> option.</p>







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 id="customizechart">Customizing the Chart</h2>


<h3 id="Formatting_Series">Formatting Series</h3>


<p><b>1)</b> Right-click on the series to be formatted (this will also select the series).</p>

<img src="images/formatseries_seriesrightclick_popupmenu.png" alt=""/>

<p><b>2) </b>Select the <em>Format</em> option. This will show the following dialog.</p>


<img  src="images/formatseries_dlgformat_showingbothpages.png" alt=""/>
<p>
    The Format dialog has two pages to be able to format <em>Line</em> and <em>Markers</em>.
    If a series has only markers, then all but the line thickness will be disabled. Similar rationale holds for Markers.
</p>



<p>&nbsp;</p>

<p><em>Line Properties:</em></p>
<table>
    <tr>
        <td>Color:</td>
        <td>Color of the line</td>
    </tr>
    <tr>
        <td>Thickness:</td>
        <td>Thickness of the line (in pixels). If thickness of the line is 0, then the line will disappear and all
            controls except the line thickness will be disabled.</td>
    </tr>
    <tr>
        <td>Smooth line:</td>
        <td>When the thickness of the line is greater than zero, straight lines will connect each data point.
            If a smooth line is desired, "Smooth lines" should be checked. </td>
    </tr>
</table>


<p>&nbsp;</p>

<p><em>Marker Properties:</em></p>
<table>
    <tr>
        <td>Marker Type:</td>
        <td>Shape of the marker to be displayed. Currently, circle, square and triangular markers exist.</td>
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








<h3 id="Changing_Chart_Type">Changing Chart Type</h3>

<p>Switching between different scatter chart types is rather convenient too:</p>

<ul>
    <li> Setting line thickness to zero will make lines disappear and setting it greater than zero will make lines appear. </li>
    <li> Checking “Smooth line” option, will apply smoothing algorithm to the existing lines.</li>
    <li> Setting marker thickness to zero will make markers disappear and setting it greater than zero will make markers appear.</li>
</ul>

<p>Please note that, it is not possible to set line thickness and marker size to zero at the same time.
    The rationale for this is that a series must be represented at any time either by a marker or a line or both.
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="Axis_Options">Axis Options</h3>

<p>
    The plotter allows changing axis options (horizontal or vertical). Here,
    changing the properties of the horizontal axis will be presented. Similar
    steps are followed to modify the properties of the vertical axis.
</p>

<p><b>1)</b> Right-click on the horizontal axis and select "<em>Format Horizontal Axis...</em>"</p>

<img src="images/axisoptions_popupmenu_formathorizontalaxis.png" alt="" />

<p>&nbsp;</p>
<p><b>2)</b> A dialog similar to the following will be shown (note that minimum value has already been changed to 0):</p>


<img src="images/axisoptions_dlg_horizontalaxisprop.png" alt=""/>
<p>The bounds (minimum, maximum), major unit and the value at which horizontal axis crosses vertical axis are shown. </p>



<p>&nbsp;</p>

<p>
    <em>Let's modify as follows:</em>
</p>

<p>
    <em>Bounds:</em> Minimum: 2&nbsp;&nbsp;&nbsp; Maximum: 5 <br>
    <em>Major:</em> 0.5
</p>


<img src="images/axisoptions_chart_afterchanginghoraxis.png" alt=""/>

<p>It is seen that the data is "filtered" to contain only the points between the newly chosen scale.</p>


<p>&nbsp;</p>
<p>If you right-click on the horizontal axis again and select the "<em>Format Horizontal Axis...</em>", the dialog will be shown as follows:</p>


<img src="images/axisoptions_dlg_horizontalaxisprop_resetbtn.png" alt=""/>
<p>
    It is seen that, the "<em>Reset</em>" buttons are now active for properties which have been manually changed.
    Clicking on the "<em>Reset</em>" button will reset the bound to its value that had been calculated automatically.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="Menu_Options">Context-Menu Options</h3>

 <p>
     Two different context-menu will be shown: <b>i)</b> Series, <b>ii)</b> Chart.
</p>

<h4 id="menuoptions_series">Series</h4>

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
    <a href="#trendlines">Adding trendlines</a> is presented in the next section.
</p>




<p>&nbsp;</p>



<h4 id="menuoptions_chart">Chart</h4>

<p>
    To be able to access the rest of the options, just right-click on the chart and the context-menu
    will offer the necessary options as shown below:
</p>

<img src="images/contextmenu.png" alt="" />

<p>
    <a href="#addnewseries">Add New Series</a> and
    <a href="#addvisibleselection">Add Visible Selection</a>
    have already been presented in detail.
</p>

 <p>&nbsp;</p>

<p>
    For example, to format the horizontal gridlines, just select
    <em>"Format Horizontal Gridlines..."</em> option and a dialog will be shown
</p>

<img src="images/formathorizontalgridlinedialog.png" alt=""/>

<p><em>Color:</em> Color of the gridlines.</p>

<p>
    <em>Thickness:</em> If thickness if equal to zero, then the gridlines will not be displayed,
    otherwise, it changes the thickness of the gridline.
</p>

<p><em>Style:</em> Solid, dotted or long-dashed lines.</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






<p>
    By using the context-menu, it is also possible to add <em>chart title</em>,
    <em>vertical and horizontal axes titles</em> and <em>legend</em> as shown below:
</p>

<img src="images/elementsmenu_initial_titlesshown.png" alt=""/>

<p>
    Once the mouse cursor is on a title, the shape of the mouse cursor will change
    indicating that an interaction can take place:
</p>

<p>
    <b>A)</b> When dragged with the mouse, the title will move to a desired location,

    <br>

    <b>B)</b> When clicked, the title will switch to the edit mode and will allow you to type and change the text.
    To close the edit mode, simply click somewhere out of the shown text editor.
</p>



<p>&nbsp;</p>


<p>Right-clicking on a title will show the following menu:</p>


<img src="images/charttitle_popupmenuoptions.png" alt=""/>

<p>
    The menu shows two options: <br>

    <b>A)</b> "<em>Font...</em>" to be able to change the format of the font,
    covered <a href="../chartelements.php#textbox">here</a>.

    <br>

    <b>B)</b> "<em>Delete</em>" to be able to delete the title. Once the title is deleted,
    its allocated space will be claimed back by the plot area.
</p>


<p>&nbsp;</p>
<p>After some minor formatting and changing the initial default titles:</p>

<img src="images/elementsmenu_formattedchart.png" alt=""/>

<p>&nbsp;</p>


<p>
    Right-clicking on the legend will show the following context-menu,
    details of which is covered <a href="../chartelements.php#legend">here</a>.
</p>

<img src="images/legend_contextmenu.png" alt=""/>






<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>













<h2 id="plotmultipleseries">Plotting Multiple Series</h2>

<p>
    There are different ways to plot multiple series on the same plot window.
    Here, the most common approaches will be presented.
</p>


<p>&nbsp;</p>



<h3 id="Selection">Selection</h3>

<p>Assume you have made the following selection in a worksheet: </p>


<img src="images/multipleseries_time-temperature_data.png" alt=""/>

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

<img src="images/multipleseries_viaselection.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="Using_Only_Commands">Using Only Commands</h3>

<p>
    In order to plot multiple series using only commands, you can use <em>hwnd</em>
    property of <a href="../../std/funcs/scatter.php">std.scatter</a> command.
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

<img src="images/multipleseries_viaonlycommands.png" alt=""/>








<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="Selection_Command">Selection & Command</h3>
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


<img src="images/multipleseries_mixedmode_command.png" alt=""/>

<p> &nbsp;</p>


<p>
    <b>2)</b> After clicking "<em>Add New Series</em>", Add Series dialog will appear.
    As described in <a href="#plottingsimplechart">how to plot a simple chart</a>
    make the necessary selections.
</p>

<img src="images/multipleseries_mixedmode_addseries.png" alt=""/>

<p>&nbsp;</p>

<p>
    <b>3)</b> Click "<em>OK</em>" button and a new series will be added to the same plot window as shown below.
</p>

<img src="images/multipleseries_mixedmode_plotwindow_2series.png" alt=""/>

<p>&nbsp;</p>

<p>
    Please note that, it is also possible to use "Add Visible Selection" option,
    to add another series to an existing chart.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>











<h2 id="trendlines">Trendlines</h2>

<p>
    A trendline is a line of best fit to the data. It can be very helpful when analyzing data as
    it can be used to forecast future values based on current values and can be used for interpolation
    within the current values. The available trendlines are:
</p>

<ol>
    <li><em>Exponential:</em> y = a&middot;exp(b&middot;x)</li>
    <li><em>Linear:</em> y = a&middot;x + b</li>
    <li><em>Logarithmic:</em> y = a&middot;ln(x) + b</li>
    <li><em>Polynomial:</em> y = a<sub>n</sub>&middot;x<sup>n</sup> + a<sub>n-1</sub>x<sup>n-1</sup> + ... + a<sub>0</sub></li>
    <li><em>Power:</em> y = a&middot;x<sup>n</sup></li>
</ol>

<p>
    When possible, the intercept can be set to a custom value. Based on the selected trendline,
    the R<sup>2</sup> (goodness of fit) and equation can be displayed on the chart.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="Adding_Trendlines">Adding Trendlines</h3>

<p><b>1)</b> Right-click on a series and select the "<em>Add Trendline...</em>" menu item.</p>

<img src="images/trendlines_addtrendlinemenu.png" alt="" />
<p> &nbsp;</p>
<p><b>2)</b> As shown below, a trendline (shown with blue color), by default linear trendline, will be added to chart.</p>



<img src="images/trendlines_addtrendline_chartwithlineartrendline.png" alt="" />

<p>
    Please note that a series can only have 1 trendline. Therefore, upon adding a trendline,
    right clicking the series will not offer the "<em>Add Trendline...</em>" option until the existing trendline is deleted.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="Changing_Trendline_Type">Changing Trendline Type</h3>

<p>
    <b>1)</b> Right click on the trendline (or on the series) and select "Format trendline..." as shown below.</p>


<p><b>2)</b> This will show the following dialog:</p>



<img src="images/trendlines_formattrendlinedlg_trendlinetype.png" alt=""/>



<p>Note that:</p>
<ol>
<li>The "<em>Trendline Type</em>" page shows the current trendline type and if any other options applied on the trendline.</li>

<li>
    For the data set: <b>x</b> = [0, 1, 2, 3, 4, 5, 6] and <b>y</b> = [75, 105, 125, 140, 135, 120, 100]
    which generated the series, only exponential, linear and polynomial type trendlines can be
    chosen and logarithmic and power cannot be, therefore they were automatically disabled.</li>

<li>
    If <em>polynomial trendline</em> is chosen, the degree of the polynomial can be minimum 2 and maximum 7.
    However, the maximum degree also depends on the number of data points available.</li>

</ol>


<p>&nbsp;</p>



<p>Below, a polynomial trendline with degree 2 is shown (blue colors)</p>

<img src="images/trendlines_polynomial%20trendline_noinfoshown.png" alt="" />







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="Changing_Line_Properties">Changing Line Properties</h3>

<p><b>1)</b> Right click on the trendline and select "<em>Format trendline...</em>".</p>

<p><b>2)</b> From the "<em>Format Trendline</em>" dialog, select the "<em>Line Properties</em>" tab as shown below:</p>


<img src="images/trendlines_formattrendlinedlg_lineproperties.png" alt="" />

<p>
    Note that, initially, the <em>Line Properties</em> page will show the properties of the current trendline.
    Color, thickness and style of the trendline can be changed.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="Displaying_R2_and_Equation">Displaying R2 and Equation</h3>

<p>
    <b>1)</b> Right click on the trendline and select "<em>Format trendline...</em>".
    The Format Trendline dialog will be shown.
</p>

<img src="images/trendlines_formattrendlinedlg_trendlinetype_r2_equationchecked.png" alt=""/>

<p>&nbsp;</p>
<p>
    <b>2)</b> Check the boxes for "Display Equation on Chart" and "Display R-squared Value on Chart".
    As you check or uncheck the boxes, the related information will be displayed on the chart as seen below:
</p>

<img src="images/trendlines_chart_r2_equation_noformat.png" alt=""/>



<p>&nbsp;</p>



<h3>Changing the format of the displayed info</h3>

<p><b>1)</b> Right click on the textbox and select "Font..." menu item.</p>

<img src="images/trendline_rightclickontextbox.png" alt=""/>

<p>&nbsp;</p>
<p><b>2)</b> Following dialog will be shown:</p>

<img src="images/formattextboxdialog.png" alt="" />

<p>&nbsp;</p>
<p><b>3)</b> After some minor formatting:</p>

<img src="images/trendlines_chart_r2_equation_formatted.png" alt=""/>

<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="Changing_Intercept">Changing Intercept</h3>

<p>
    A trendline equation is the best fit for the data set under consideration. However, every now and then,
    we might want to change the intercept. If available, then the intercept can be manually entered.
    For the equation shown at the previous section, if we change the intercept from 74.2857,
    which was calculated, to a manual value of 60, then the equation and most likely
    the R2 will also be changed.
</p>



<img src="images/trendlines_interceptchanged.png" alt=""/>

<p>Notice that the intercept, y(0)=60 and R2 changed from 0.992 to 0.905.</p>



<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="Exporting_the_Equation"> Exporting the Equation</h3>

<p>
    In the previous sections, the equation was just shown on the chart. However, we did not use the equation as a function,
    say for example for interpolation or for forecasting. In order to use the equation as a function:</p>

<p><b>1)</b> Right-clicking on the trendline will show the following menu:</p>

<img src="images/trendlines_contextmenu_exportequationasluafunction.png" alt=""/>

<p>&nbsp;</p>
<p><b>2)</b> Select "Export Equation as Lua Function" and type a valid function name as shown below:</p>


<img src="images/trendlines_luafunctionnamedialog.png" alt=""/>

<p>
    Here, arbitrarily the function name is chosen as <em>func</em>. Note that the name <em>func</em>
    conforms with Lua standards and does not exist in the global table.
</p>


<p>&nbsp;</p>


<p><b>3)</b> Switch to command editor:</p>

<p class="CodeCommand">
    &gt;&gt;type(func) <br />
    table <br />

    <br />

    &gt;&gt;func <br />
    y = -6.65179x^2+46.0268*x+60 <br />

    <br />

    <span class="auto-style1">--interpolation</span> <br />
    &gt;&gt;func(1.1) <br />
    102.581	 <br />

    <br />

    <span class="auto-style1">--forecasting </span> <br />
    &gt;&gt;func(7) <br />
    56.2499

</p>

<p>&nbsp;</p>

<p>As a technical detail, please note that, func itself is a Lua table with metamethods
    <em>__tostring</em> and <em>__call</em> implemented as evidenced below:
</p>

<p class="CodeCommand">
    &gt;&gt;getmetatable(func) <br />
    __tostring=function <br />
    __call=function
</p>


<p>
    Therefore, it was possible use the exported table, namely <em>func</em>, to print the equation of the
    trendline and also as a function.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="bubblechart.php">Bubble Chart</a>
    <a href="../boxwhisker/boxwhisker.php">Box and Whisker</a>
    <a href="../../std/funcs/scatter.php">std.scatter</a>
    <a href="../../std/funcs/boxplot.php">std.boxplot</a>
</div>




</body>

</html>
