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


<h1>Chart Elements</h1>

<h2 id="textbox">Text Boxes</h2>

<p>
    Every chart title, axis label are actually a text box specialized for the particular chart element. 
    However, format options for every text box, unless otherwise mentioned, are the same:
</p>

 <img src="images/seriesname_format.png" alt=""/>
    
<p>
    If you select "Font..." option, the following dialog will be shown:
</p>

<img src="images/formattextboxdialog.png" alt=""/>

<p>
    This will allow to format the font-family, weight, style, size and  color of the particular series' name.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="legend">Legend</h2>

<p>
    Legends are useful to display information about the series. In ScienceSuit, when a chart has more than 1 series,
    legends can be aligned either vertically or horizontally. To change from horizontal alignment to vertical or vice versa,
    simply select "Change Alignment" option. The following figure shows the difference:
</p>

<img src="images/legend_scatter_boxwhisker.png" alt=""/>




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






<div class="RelatedLinks">
    <a href="scatter/scatterchart.php">Scatter</a>
    <a href="boxwhisker/boxwhisker.php">Box and Whisker</a>
</div>

</body>

</html>
