<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Plot Window</title>

   
    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        h2
        {
            color: red;
        }
    </style>
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
   
</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Plot Window</h1>

    
<p>
    Every chart is hosted by a plot window. Therefore, it is essential to understand how plot window works. 
    The basic anatomy of a plot window is shown in the following figure:
</p>

<img src="images/anatomyofplotwindow.png" alt=""/>

<p><b>Chart Icon:</b> Each chart will have a different icon representing the chart type.</p>

<p>
    <b>Title Bar:</b> Besides the ID of the chart, gives information about the width and height of the chart area. 
    The size displayed is the size of the chart if it was exported as an image file          
</p>

<p><b>Chart Area:</b> This is where the chart is plotted and chart elements are placed.</p>

<p><b>Menu Bar:</b> At least 1 series must be present to enable menu items.</p>
    
    <p>&nbsp;</p>

    <h2>A) File Menu</h2>

    <h3>Export As...</h3> 
    
    <p>The chart can be exported as either JPEG or BMP file.</p>
    
    <p>&nbsp;</p>

    <h3>Copy</h3> 
    
    <p>The chart is copied to clipboard (can be pasted, for example, to a Word document). </p>
    
    
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    
    <h2>B) Options Menu</h2>
    
    <h3>Anti-aliasing</h3>
    
    <p>Whether to use "Anti-aliasing" or not depends on the quality expectations.  Using anti-aliasing provides high quality drawing, therefore, high quality chart.</p>
    
    <p>
        However, when anti-aliasing is on, due to subpixel rendering taking place (additional computations) the chart might become less responsive. 
        Therefore, it is highly recommended to turn it on right before exporting or copying to clipboard.
    </p>
    
    <p>&nbsp;</p>
    
    <h3>Show Information</h3>
    
    <p>
        <em>As of v1.8.7</em> "Show Information" option is by default on. 
        When "Show Information" option is on, clicking on elements of a series will show information regarding the particular series as shown below:
    </p>
    
    <img src="images/showinformation_scatter_boxwhisker.png" alt=""/>
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    <h2>Resizing Window</h2>
    
    <p>
        You will notice that during resizing the plot window, the chart is not plotted. The very reason for this is,
        if the chart was re-plotted during resizing, the resizing operation could become an expensive operation and 
        can significantly feel sluggish.Therefore, the chart is only re-plotted at the end of resizing event. 
        Thus, a very smooth and responsive resizing of the window can be experienced.
    </p>
   
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <div class="RelatedLinks">
        <a href="scatter/scatterchart.php">Scatter</a>
        <a href="boxwhisker/boxwhisker.php">Box and Whisker</a>
    </div>
    


</body>

</html>
