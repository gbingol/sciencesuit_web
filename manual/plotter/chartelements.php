<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Chart Elements</title>

   
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





<h1>Chart Elements</h1>



<h2 id="axes">Axes</h2>

<p>
    Charts allow customizing the axes. Here, changing the properties of the 
    horizontal axis of scatter charts will be presented. 
    Similar steps are followed to modify the properties of the vertical axis and a 
    similar rationale holds for other types of charts.
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










<h2 id="gridlines">Gridlines</h2>

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








<h2 id="legend">Legend</h2>

<p>
    Legends are useful to display information about the series. In ScienceSuit, when a chart has more than 1 series,
    legends can be aligned either vertically or horizontally. To change from horizontal alignment to vertical or vice versa,
    simply select "Change Alignment" option. The following figure shows the difference:
</p>

<img src="images/legend_scatter_boxwhisker.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 id="textbox">TextBoxes (Title, labels)</h2>

<p>
    Every chart title, axis label are actually a text box specialized for the particular chart element. 
    However, format options for every text box, unless otherwise mentioned, are the same.
</p>

<p>
    Once the mouse cursor is on a textbox, the shape of the mouse cursor will change
    indicating that an interaction can take place:
</p>

<p>
    <b>A)</b> When dragged with the mouse, the textbox will move to a desired location,

    <br>

    <b>B)</b> When clicked, the textbox will switch to the edit mode and will allow you to type and change the text.
    To close the edit mode, simply click somewhere out of the shown text editor.
</p>



<p>&nbsp;</p>


<p>Right-clicking on a textbox will show the following menu:</p>


<img src="images/seriesname_format.png" alt=""/>

<p>
    The menu shows two options: <br>


    <b>A)</b> "<em>Font...</em>" to be able to change the format of the font.

    <br>

    <b>B)</b> "<em>Delete</em>" to be able to delete the textbox. Once the textbox is deleted,
    its allocated space will be claimed back by the plot area.
</p>





    
<p>
    If you select "Font..." option, the following dialog will be shown:
</p>

<img src="images/formattextboxdialog.png" alt=""/>

<p>
    This will allow to format the font-family, weight, style, size and  color of the particular series' name.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="argand/argand.php">Argand Diagram</a>
    <a href="boxwhisker/boxwhisker.php">Box and Whisker Chart</a>
    <a href="scatter/bubblechart.php">Bubble Chart</a>
    <a href="scatter/scatterchart.php">Scatter Charts</a>
    
    
</div>

</body>

</html>
