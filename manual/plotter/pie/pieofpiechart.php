<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Pie of Pie Chart</title>


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
    
    <script src="/jsscripts/createoutline.js"></script>
    
    
    <script>
        window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
    </script>

</head>






<body>



<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php";
    include $mainmenuloc;
?>




<h1>Pie of Pie Chart</h1>

<p>
    Pie of pie chart is a <a href="piechart.php">pie chart</a> 
    that makes it easier to see small slices of a pie chart at another pie.
</p>



<p>&nbsp;</p>


<h3>Terminology:</h3>

<p>
    This section adds extra definitions on top of 
    pie chart's <a href="piechart.php#terminology">terminology</a>.
</p>


<img id="pieofpie_anatomy" src="images/pieofpie/anatomy.png" alt=""/>


<ul id="terminology" class="linespaced">
        
    <li>
        <b>Independent slice:</b> A slice representing a given data. Except one, 
        all slices are independent.
    </li>
    
    <li>
        <b>Dependent slice:</b> Always the first slice on the left pie. Represents 
        the value of all slices on the right pie.
    </li>
</ul>



<p>&nbsp;</p>





<h2 class="head_l2"  id="plottingsimplechart">Plotting Simple Chart</h2>



<h3 class="head_l3"  id="Existing_Selection">Directly From Existing Selection</h3>
<p>
    Max 3 columns. If group membership is not defined, 
    then only a single pie, assumed to be the left pie, will be shown. 
</p>


<p>&nbsp;</p>


<p>
    Depending on the selection, following are the cases:
</p>

<ol class="linespaced">
    <li>
        <i>Single column</i>: The selection is assumed to be the data part. 
        Each data will be automatically labeled as 1, 2 and so on 
        starting from the top row.
    </li>
    
    <li>
        <i>Two columns</i>: First column is assumed to be the label part, 
        and the second column is evaluated as the data part.
    </li>
    
    <li>
        <i>Three columns</i>: First column is assumed to be the label part, 
        second column is evaluated as the data part and the third column is 
        taken into account as the group membership. 
        
        Only 2 groups can be defined (left pie and right pie). The group with 
        larger sum of the values will be considered as the left pie.
    </li>
</ol>


<p>&nbsp;</p>


<p>
    Let's assume we have the following data pairs: 
    [A, 10], [B, 6], [C, 8], [D, 1], [E, 2].
</p>


<p>&nbsp;</p>

<p>
    Let's assume the data is entered to the worksheet in the following manner:
</p>

<img src="images/pieofpie/datasetinworksheet.png" alt=""/>


<p>&nbsp;</p>

<p>
    If only the data (Column B) is selected, clicking on the pie of pie
    chart button at the ribbon bar will display the following chart.
</p>
    

<img src="images/pieofpie/chart_onlydataselected_legendshown.png" alt=""/>




<p>&nbsp;</p>


<p>
    If labels and data (Column A & B) are selected, clicking on the pie of pie
    chart button at the ribbon bar will display the following chart.
</p>


<img src="images/pieofpie/chart_dataandlabelselected_legendshown.png" alt=""/>



<p>&nbsp;</p>


<p>
    Finally, if labels, data and group are selected, clicking on the pie of pie
    chart button at the ribbon bar will display the following chart.
</p>


<img id="chart_datalabelgroupselected" src="images/pieofpie/chart_datalabelgroupselected_legendshown.png" alt=""/>








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

<img src="images/pieofpie/dlgaddseries.png" alt="" />


<ul class="linespaced">
        
    <li>
        <em>Data:</em> Only numeric data is allowed.
    </li>
    
    <li>
        <em>Label:</em> Label of the each data.
    </li>
    
    <li>
        <em>Group:</em> Group membership of the each data.
    </li>
    
</ul>


<p>
    Once the necessary selections are made and "<em>OK</em>" button is clicked 
    <a href="#chart_datalabelgroupselected">a chart</a> similar to above-shown will be displayed.
</p>




<p>&nbsp;</p>


<h3 class="head_l3"  id="AddVisibleSelection">Adding Visible Selection</h3>


<ol class="linespaced">
    <li> Click on "Pie Chart" button on the "Home" ribbon page to show an empty chart window.</li>

    <li> Right-click and if there is already a selection, the context-menu will offer
        <em>"Add Visible Selection"</em> option.
    </li>
    
    <li>
        If 3 columns were selected and the "Add Visible Selection" menu item is clicked 
        <a href="#chart_datalabelgroupselected">a chart</a> similar to above-shown will be displayed.
    </li>
</ol>


     
    
    
<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 class="head_l3"  id="Using_Commands">Using Commands</h3>

<p>
    For details please see 
    <a href="../../std/funcs/piepie.php">std.piepie</a> function.
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


<img src="images/pieofpie/dlgformat_optionstab.png" alt=""/>

<p>
    <b>Definitions:</b>
</p>

<table>
    <tr>
        <td>Point Explosion:</td>
        <td>Explodes only the current slice.</td>
    </tr>
    <tr>
        <td>Point belongs to:</td>
        <td>
            Changes the group membership to the left or right pie. If the 
            owner of the selected slice has only 1 slice, this option will be disabled.
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
<p>&nbsp;</p>






<h3 class="head_l3"  id="formatting_color">Formatting Line/Fill Color</h3>


<p>
    Please see <a href="piechart.php#formatting_color">pie chart</a>.
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 class="head_l2" id="labels">Labels</h2>

<p>
    Please see <a href="piechart.php#labels">labels section</a> of pie chart.





    
    

<p>&nbsp;</p>
<p>&nbsp;</p>










<div class="RelatedLinks">
    <a href="piechart.php">Pie chart</a>
    <a href="../../std/funcs/piepie.php">std.piepie</a>
</div>




</body>

</html>
