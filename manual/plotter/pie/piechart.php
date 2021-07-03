<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pie Chart</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>



         tr,td{
            border:solid 1px;
            text-align:left;
            padding-bottom:10px;
            padding-top:10px;
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
                width: 95%;
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



<h1>Pie Chart</h1>

<p>
   Pie charts are a convenient way to visualize numerical proportions of a set of data.
</p>



<p>&nbsp;</p>


<h3>Terminology:</h3>

<ul id="terminology" class="linespaced">
    <li>
        <b>Slice:</b> A circular sector 
        (<a href="https://en.wikipedia.org/wiki/Circular_sector" target="_blank">more info</a>).
    </li>
    
    <li>
        <b>Pie:</b> A disk made of collection of slices.
    </li>
    
    <li>
        <b>First slice:</b> The slice representing the first data point. 
        
    </li>
    
    <li>
        <b>Ray:</b> Starts out from the center point of a slice
        and passes through the point at its mid-arc.
    </li>
    
    <li>
        <b>Angle:</b> For a particular slice, the angle of its ray. 
        Note that, the angle of first slice is 0&deg;.
    </li>
    
    <li>
        <b>Explosion:</b> Translation of a slice in the direction of its ray.
    </li>
</ul>



<p>&nbsp;</p>





<h2 class="head_l2"  id="plottingsimplechart">Plotting Simple Chart</h2>



<h3 class="head_l3"  id="Existing_Selection">Directly From Existing Selection</h3>
<p>
    Max 2 columns. Furthermore, depending on the 
    number of columns selected, the following assumption will be made:
</p>

<ol class="linespaced">
    <li>
        <i>Single column</i>: The selection is assumed to be the data part. 
        Each data will be automatically labeled as 1, 2 and so on 
        starting from the top row.
    </li>
    
    <li>
        <i>Two columns</i>: First column is evaluated as the label part, 
        and the second column is evaluated as the data part.
    </li>
</ol>


<p>&nbsp;</p>


<p>
    Let's assume we have the following data pairs: 
    [A, 10], [B, 6], [C, 8]
</p>


<p>&nbsp;</p>

<p>
    Let's assume the data is entered to the worksheet in the following manner:
</p>

<img src="images/pie/datasetinworksheet.png" alt=""/>


<p>&nbsp;</p>

<p>
    If we select Column A and B at the same time and click on the pie 
    chart button at the ribbon bar, the following chart will be displayed.
</p>
    

<img id="chartwithlegend" src="images/pie/chartwithlegend.png" alt=""/>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 class="head_l3"  id="New_Selection">Add New Series</h3>

<p id="addnewseries">
    
</p>

<img src="images/emptychartwindow.png" alt=""/>

<p> At this stage, all menus are disabled. The only option available is to right-click and then
    select the "<em>Add New Series</em>" menu. 
    
    Selecting "<em>Add New Series</em>" will show the following dialog:
</p>

<img src="images/dlgaddseries.png" alt="" />


<ul class="linespaced">
        
    <li>
        <em>Data:</em> Only numeric data is allowed.
    </li>
    
    <li>
        <em>Label:</em> Label of the each data.
    </li>
</ul>


<p>
    Once the necessary selections are made and "<em>OK</em>" button is clicked 
    <a href="#chartwithlegend">a chart similar to above-shown</a> will be displayed.
</p>




<p>&nbsp;</p>


<h3 class="head_l3"  id="AddVisibleSelection">Adding Visible Selection</h3>


<ol class="linespaced">
    <li> Click on "Pie Chart" button on the "Home" ribbon page to show an empty chart window.</li>

    <li> Right-click and if there is already a selection, the context-menu will offer
        <em>"Add Visible Selection"</em> option.
    </li>
    
    <li>
        Once the "Add Visible Selection" menu item is clicked 
        <a href="#chartwithlegend">a chart similar to above-shown</a> will be displayed.
    </li>
</ol>


     
    

    
<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 class="head_l3"  id="Using_Commands">Using Commands</h3>

<p>
    For details please see 
    <a href="../../std/funcs/pie.php">std.pie</a> function.
</p>












<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>










<h2 class="head_l2"  id="customizechart">Customizing the Chart</h2>

<h3 class="head_l3"  id="changing_appearance">Changing Appearance</h3>

<p>
    <b>1)</b> Right-click on the slice to be formatted and select format menu item. 
    Once the options tab is selected, following will be shown:
</p>


<img src="images/pie/dlgformat_optionstab.png" alt=""/>

<p>
    <b>Definitions:</b>
</p>

<table>
    <tr>
        <td>Point Explosion:</td>
        <td>Explodes only the current slice.</td>
    </tr>
    <tr>
        <td>Angle of first slice:</td>
        <td>
            Changes the angle (in degrees) of first slice to the chosen angle
            (the whole pie is rotated)
            .
        </td>
    </tr>
    <tr>
        <td>Pie Explosion:</td>
        <td>
            Explodes the whole pie. Choosing this option will override 
            the value of "Point Explosion".
        </td>
    </tr>
</table>


<p>&nbsp;</p>

<p>
    The following chart is obtained by using the following settings: <br>
    <em>Point Explosion</em>: 3,<br>
    <em>Angle of first slice</em>: 45&deg; <br>
    <em>Pie Explosion</em>: 1.
</p>


<img src="images/pie/chart_exploded_rotated.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 class="head_l3"  id="formatting_color">Formatting Line/Fill Color</h3>


<p>
    <b>1)</b> Right-click on the slice to be formatted.
</p>


<p>
    <b>2) </b>Select the <em>Format</em> option. 
    This will show the following dialog with properties adjusted for the selected slice.
</p>

<img src="images/dlgformat_linefilltab.png" alt=""/>


<p>&nbsp;</p>


<p>
    The following chart demonstrates the modified line and fill colors 
    of the selected slice.
</p>

<img src="images/pie/chart_singlesliceformatted.png" alt=""/>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 class="head_l2" id="labels">Labels</h2>

<h3 class="head_l3"  id="adding_labels">Adding</h3>

<p>
    <b>1)</b> Right-click anywhere on the pie and select "Add Labels".
</p>


<p>
    <b>2)</b> Labels showing the value (data) of each slice will be added as shown below.
</p>

<img src="images/pie/chart_labels_valueshown.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 class="head_l3"  id="formatting_labels">Formatting</h3>

<p>
    <b>1)</b> Right-click on any of the labels and select "Options...".
</p>

<p>
    <b>2)</b> The following dialog with 2 pages (Font Properties, Options) will be shown.
</p>

<img src="images/dlgformattextbox_optionstab.png" alt=""/>

<p>
    Please note that any modification to the font will only be applied to the 
    current label. "Font properties" tab is 
    explained in detail <a href="../chartelements.php#textbox">here</a>.
</p>


<p>&nbsp;</p>


<p>
    The options tab is self-explanatory:
</p>

<ol class="linespaced">
    <li>
        <em>Label:</em> Shows the label of the data.
    </li>
    
    <li>
        <em>Value:</em> Shows the data.
    </li>
    
    <li>
        <em>Percentage:</em> Shows the percentage of the data.
    </li>
</ol>



<img src="images/pie/chart_labels_labelpercentageshown.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 class="head_l3"  id="deleting_labels">Deleting</h3>

<p>
    Right-click on any of the labels and select "Delete Labels". This will delete 
    <em>all</em> the labels.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>










<div class="RelatedLinks">
    <a href="pieofpiechart.php">Pie of Pie</a>
    <a href="../../std/funcs/pie.php">std.pie</a>
</div>




</body>

</html>
