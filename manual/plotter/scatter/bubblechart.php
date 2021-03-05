<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Bubble Chart</title>

   
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
       
               
         tr,td
         {
            border:solid 1px;
            
            text-align:left;
            
            padding-bottom:10px;
            padding-top:10px;
            
            padding-left: 10px;
        }

        table{
            width: 60%;
            border-collapse:collapse;
        }

        

        td:first-child
        {
            font-style:italic;
            white-space:nowrap;
            
            padding-left: 0px;
            
            padding-right: 10px;
           
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



    
<h1>Bubble Chart</h1>

<p>
    Bubble chart is a scatter chart with 3<sup>rd</sup> dimension added. However,
    unlike scatter charts, in general bubble charts do not have connecting lines 
    associated with the series.
</p>












<h2 id="plottingsimplechart">Plotting Simple Chart</h2>

  
<p>
    There are different strategies that can be followed to plot a chart. 
    Here, a few possible strategies will be presented.
</p>







<h3 id="Existing_Selection">Existing Selection</h3>

<p>
    Let's assume you have the following data in a worksheet:
</p>

<img src="images/bubble/life_fertil_population_data.png" alt=""/>

<ol class="linespaced">
    
    <li> Select the data as shown in the following figure:</li>

    <li> Click on bubble chart under the <em>"Scatter Plots"</em> panel.</li>
</ol>


<p> Done! A chart window will be shown with the data points.</p>


<img src="images/bubble/bubblechart_fertil_lifeexpect.png" alt=""/>


<p>&nbsp;</p>

<p>
    If "Show Information" is checked, then clicking on any of the data point will 
    show the associated information as follows:
</p>

<img src="images/bubble/showinformation.png" alt=""/>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="Using_Commands">Using Commands</h3>
<p>
    Bubble charts can also be created using scripting. For detailed information 
    please see <a href="../../std/funcs/scatter.php">std.scatter</a> function.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="New_Selection">Add Selection as New Series</h3>



<img src="images/emptychartwindow.png" alt=""/>

<p> At this stage, all menus are disabled. The only option available is to right-click and then 
    select the "<em>Add New Series</em>" menu.
</p>

<img src="images/bubble/addnewbubbleseries_contextmenu.png" alt=""/>

<p>Selecting "<em>Add New Bubble Series</em>" will show the following dialog:</p>


<img src="images/bubble/dlgaddnewseries.png" alt=""/>

<ul class="linespaced">

    <li>
        <em>Name:</em> Name of the series. This field cannot be blank.
    </li>

    <li>
        <em>Horizontal, Vertical and Size Data:</em>
        The range where data for horizontal and vertical axes are located 
        as well as the data for the bubble size. 
    </li>
</ul>


<p>&nbsp;</p>


<img src="images/bubble/bubblechart_titlesnotshown.png" alt=""/>

<p> Once the "<em>OK</em>" button is clicked with the above-shown options, the chart window will be displayed.</p>


<p>&nbsp;</p>

<p id="addvisibleselection">
    The following is doable as well:
</p>

<ol class="linespaced">
    <li> Click on the bubble chart button on the "Home" ribbon page to show an empty chart window.</li>

    <li> Right-click and if there is already a selection, the context-menu will offer 
        <em>"Add Visible Selection"</em> option.
    </li>

</ol>

<img src="images/bubble/addvisibleselection_contextmenu.png" alt=""/>
  
<ol class="linespaced" start="3">
   <li> 
       Click on the <em>"Add Visible Selection As Bubble"</em> and 
       if there is a valid selection, a chart will be displayed.
   </li>
</ol>
 










<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>












<h2 id="updatedeleteseries">Updating and Deleting Series</h2>


<h3 id="Updating_Series">Updating Series</h3>

<p>
    Similar to scatter chart, updating a series simply means that changing its name and its data. 
    However, in order to change the data, the series must be plotted via a selection. 
    The data of the series generated by commands cannot be updated. 
</p>

<p>
    For example, in the following figure, the series was generated by a selection, therefore it is possible to change
    both its data and name. However, if the series was generated via a command then only the name can be changed.
</p>


<img src="images/bubble/dlgupdateseries.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="Deleting_Series">Deleting Series</h3>

<p>
    When there are more than one series on the same plot window you will have the 
    option to delete any of them should you wish to do so.
</p>

<p>
    <b>1)</b> Right-click on the series to be deleted (this will also select the series).
</p>

<img src="images/bubble/deleteseries_contextmenu.png" alt=""/>

<p> <b>2)</b> Simply select the <em>Delete</em> option.</p>
    
    







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>












     
<h2 id="customizechart">Customizing the Chart</h2>


<h3 id="Formatting_Series">Formatting Series</h3>


<p><b>1)</b> Right-click on the series to be formatted (this will also select the series).</p>

<img src="images/bubble/format_contextmenu.png" alt=""/>

<p><b>2) </b>Select the <em>Format</em> option. This will show the following dialog.</p>


<img src="images/bubble/dlgformat.png" alt=""/>

<p>
    The color, scale and the representation of the size can be changed.
</p>

<table>
    <tr>
        <td>color:</td>
        <td>
            Color of the bubble. Note that, the lightness of the color 
            will be calculated based on the bubble size. The bigger the size the 
            lighter the bubble will be.
        </td>
        
    </tr>
        
    <tr>
        <td>scale:</td>
        <td>
            The relative scale of the all bubbles to the initial assigned scale. 
            Changing the scale will scale all the bubbles in the same manner 
            such that the relative size to each other remains the same.
        </td>
        
    </tr>
    
    <tr>
        <td>size:</td>
        <td>
            The size can be represented either as area or as diameter (width) of 
            the bubbles. By default, the area of the bubbles will represent the relativeness
            of the data.
            
            <br>
            
            <br>
            
            <em>For example:</em> Consider the data values of 1.0 and 2.0 represented by 
            diameter. Since the diameter of the latter is twice the diameter 
            of the former, this will cause the area to be 4 times larger which can be visually misleading.
        </td>
    </tr>
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="Axis_Options">Axis Options</h3>

<p>
    The plotter allows changing axis options (horizontal or vertical). For detailed information 
    please see <a href="scatterchart.php#Axis_Options">scatter chart axis options</a>.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>
   




<h3 id="Menu_Options">Context-Menu Options</h3>

 <p>
    For detailed information please see <a href="scatterchart.php#Menu_Options">scatter chart menu options</a>.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
    







    


<h2 id="plotmultipleseries">Plotting Multiple Series</h2>

<p>
    The rationale to plot multiple series is the same with the scatter chart. Please read
    the section on how to <a href="scatterchart.php#plotmultipleseries">plot multiple series</a>.
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>










<h2 id="trendlines">Trendlines</h2>
<p>
    The method of adding trendlines is the same with the scatter chart. Please read
    the section on how to <a href="scatterchart.php#trendlines">add trendlines</a>.








<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="../boxwhisker/boxwhisker.php">Box and Whisker Chart</a>
    <a href="scatterchart.php">Scatter Charts</a>
    <a href="../../std/funcs/scatter.php">std.scatter</a>
    <a href="../../std/funcs/boxplot.php">std.boxplot</a>
</div>

</body>

</html>
