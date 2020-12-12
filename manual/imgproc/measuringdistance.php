<!DOCTYPE html>
<html>

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Measuring the Distance</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>



<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

  

<h2>Distance Between Two Points</h2>

<p>It is rather easy to find the distance between two points:</p>

<p><b>1) </b>Open an image using the Image Processing Toolbox.</p>
    
<p>&nbsp;</p>		

<p>
    <b>2)</b> From the <em>Select</em> menu, select <em>Ruler</em>.
</p>
    
<img src="images/measuringdistance_rulerselected.png" alt=""/>

<p>&nbsp;</p>
    
<p>
    <b>3)</b> Adjust the zoom level for a comfortable drawing.
</p>

    <p>&nbsp;</p>
    
    
<p>
    <b>4) </b>Start drawing with the ruler. 
    As you draw the distance will be reported in pixels. 
    The following equation is used to calculate distance between points (x<sub>1</sub>, y<sub>1</sub>) and (x<sub>2</sub>, y<sub>2</sub>):
</p>

<img src="images/measuringdistance_equationfordistance.png" alt=""/>

<p>
    Note that unless either y<sub>2</sub>=y<sub>1</sub> or x<sub>2</sub>=x<sub>1</sub>, the distance reported will not be reported as an integer number.
</p>

<img src="images/measuringdistance_distanceshown.png" alt=""/>

<p>
    Note that, for the above-shown image, the zoom level was 525%.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="basics.php">Basics</a> 
    <a href="analyzingcolor.php">Analyzing Color</a>
</div>
		
</body>

</html>
