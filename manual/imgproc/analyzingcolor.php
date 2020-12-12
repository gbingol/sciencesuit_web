<!DOCTYPE html>
<html>

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Analyzing Color</title>

<link href="../../css/common.css" rel="stylesheet" type="text/css" />


    <style>
        .auto-style1 {
            text-decoration: underline;
        }
        .auto-style2 {
            width: 80%;
            border-collapse: collapse;
            border:1px solid;
        }
        .auto-style3 {
            text-align: center;
        }
        .auto-style4 {
            color: #FF0000;
        }
    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>
    

</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Analyzing Color</h1>

<p>
    As the mouse is moved on the image, the color (in sRGB and CIE Lab) and location of each pixel 
    is reported in the status bar as explained above. Although this approach gives a good insight 
    on the color variations; however, for many applications it is not a satisfactory approach and 
    mostly the average color values of an area are of interest to us. 
</p>

<p>
    As shown below, there are currently 4 shapes that can be chosen to 
    be drawn to analyze the color of an <em>area</em>.
</p>

<img src="images/menu_select.png" alt=""/>

<p>&nbsp;</p>


<p>
    Once a shape is selected, the mouse pointer will change shape and the shape can 
    only be drawn on the image. Let’s select the rectangle and draw a rectangle on the image:
</p>


<img src="images/ricekernel_rectangledrawn_contextmenu.png" alt=""/>



<p>&nbsp;</p>


<p><b>A)</b> A rectangle is drawn. </p>

<p> 
    <b>B)</b> The rectangle is selected after it has been drawn. Once a shape is selected resize handles 
    (the circles that are shown on the top-left and bottom-right corners) will be shown. 
    At this stage, the shape can be moved around or by using the resize handles can be resized.
</p>

<p> <b>C)</b> Right-clicking on the shape will show the context-menu.</p>


<p>&nbsp;</p>

<p><span class="auto-style1"><em>"Delete Shape" Menu</em></span> </p>
<p> 
    As the name of the menu is already self-explanatory, choosing this option will delete the shape. 
</p>


<p>&nbsp;</p>
<p><span class="auto-style1"><em>"Properties…" Menu</em></span> </p>

    
<img src="images/dlg_rectangleproperties.png" alt="" />

<p><em>Font:</em> Only available for the ruler shape.</p>

<p><em>Line Color:</em> Changes the color of the shape’s boundaries.</p>

<p><em>Line Thickness:</em> Changes the thickness of the shape&#39;s boundaries.</p>
    

<p style="clear:both;">&nbsp;</p>

<p>
    Note that as you change the color or thickness, the changes will be shown immediately. 
    Therefore, to accept the changes made, click "OK" otherwise click "Cancel".
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<h2 id="Quickly_Getting_the_Essential_Statistics">Quickly Getting the Essential Statistics</h2>

<p>
    Selecting "Color Statistics to Worksheet" Menu option will prepare a report similar to the following. 
    The report will be shown on a <a href="../std/classes/worksheet.php">Worksheet</a> whose title 
    will be the current time (hours + minutes + seconds).
</p>
    
    <p>&nbsp;</p>
    
    
<table cellpadding="5" class="auto-style2">
    <tr>
        <td>File:</td>
        <td colspan="4">C:\...\M206Scanned1200dpi.tif</td>

    </tr>
    <tr>
        <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
        <td>Shape:</td>
        <td colspan="4">Rectangle</td>
    </tr>
    <tr>
        <td>Illuminant:</td>
        <td colspan="4">D65</td>
    </tr>
    <tr>
        <td>Area:</td>
        <td colspan="4">1715 pixels</td>
    </tr>
    <tr>
        <td colspan="5">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td class="auto-style3"><strong>Min</strong></td>
        <td class="auto-style3"><strong>Mean</strong></td>
        <td class="auto-style3"><strong>Max</strong></td>
        <td class="auto-style3"><strong>Stdev</strong></td>
    </tr>
    <tr>
        <td><strong><em>R</em></strong></td>
        <td class="auto-style3">119</td>
        <td class="auto-style3">199</td>
        <td class="auto-style3">254</td>
        <td class="auto-style3">34</td>
    </tr>
    <tr>
        <td><strong><em>G</em></strong></td>
        <td class="auto-style3">37</td>
        <td class="auto-style3">147</td>
        <td class="auto-style3">205</td>
        <td class="auto-style3">39</td>
    </tr>
    <tr>
        <td><strong><em>B</em></strong></td>
        <td class="auto-style3">0</td>
        <td class="auto-style3">21</td>
        <td class="auto-style3">87</td>
        <td class="auto-style3">25</td>
    </tr>
    <tr>
        <td><strong><em>L</em></strong></td>
        <td class="auto-style3">27.4</td>
        <td class="auto-style3">64.1</td>
        <td class="auto-style3">84.6</td>
        <td class="auto-style3">13.7</td>
    </tr>
    <tr>
        <td><strong><em>a</em></strong></td>
        <td class="auto-style3">1.029</td>
        <td class="auto-style3">10.015</td>
        <td class="auto-style3">34.391</td>
        <td class="auto-style3">6.047</td>
    </tr>
    <tr>
        <td><strong><em>b</em></strong></td>
        <td class="auto-style3">39.03</td>
        <td class="auto-style3">64.56</td>
        <td class="auto-style3">78.28</td>
        <td class="auto-style3">7.87</td>
    </tr>
</table>

<p>&nbsp;</p>

<p>
    The report initially gives information about the selections: 
    the full path of the image file, the shape that originated the report and the illuminant.
</p>

<p>
    Furthermore, the area is reported as pixel counts. Please note that, the counted pixels are the ones 
    considered to be <em>within</em> the shape, excluding the boundaries of the shape.
</p>

<p>
    Finally, the minimum, average, maximum color values for the considered pixels in 
    CIE Lab and sRGB spaces are report as well as the standard deviation of all considered pixels.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="Going_Beyond">Going Beyond</h2>

<p>
    Although the statistics shown by selecting the "Color Statistics to Worksheet" menu is 
    satisfactory for many applications, sometimes further investigation can be necessary. 
    Therefore, to be able to utilize the power of the framework, color values can 
    be exported to workspace following the below steps:
</p>

<p><b>1)</b> After selecting the "Color Values to Workspace" menu option, following dialog will be shown:</p>


<img src="images/dlg_createluavariable.png" alt="" />

<p>Enter a variable name (Here the variable name is arbitrarily chosen as var). </p>

<p><em>Note:</em> The variable will be in the global Lua table and will be of type Lua table.</p>


<p>&nbsp;</p>

<p><b>2)</b> Go to command editor and type the variable name, <span class="auto-style4">var</span>.</p>

<p class="CodeCommand">
    &gt;&gt;type(var) <br />
    table <br />

    <br />

    &gt;&gt;var <br />
    a=Vector  <br />
    b=Vector  <br />
    shape=Rectangle  <br />
    illuminant=D65  <br />
    L=Vector  <br />
    area=1715  <br />
    G=Vector  <br />
    R=Vector  <br />
    B=Vector  <br />
</p>

<p>
    It is seen that the variable, namely var, is of type Lua table and contains 
    information on shape, illuminant, area and the color values in CIE Lab and sRGB spaces. 
    Each dimension of the color space is represented by a <a href="../std/classes/vector.php">Vector</a> data structure. 
    Now by using the <a href="../std/index.php">std library</a> or the <a href="../plotter/index.php">plotter</a> 
    many more investigations can easily be performed.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="demo_ttest">Simple Demo: Comparison Using t-test</h3>

<p>
    Let's simply demonstrate why exporting color values to workspace gives considerable flexibility and opportunities in analysis.
</p>

<p>
    Suppose using a digital camera we acquired an image, say of raisins, 
    after they were subjected to some processing and would like to compare whether 
    the two raisins' color values are similar. Please notice that the idea presented 
    here can easily be extended to many more other applications.
</p>



<p>&nbsp;</p>

    
<img src="images/coloranalysis_goingbeyond_tworaisins_ellipse.png" alt="" />

<p>Variable names for the raisins: </p>

<p>
    On the left:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <em>rsn1 </em> <br />
    On the right:&nbsp;&nbsp;&nbsp;&nbsp; <em>rsn2</em> 
</p>
    

<p>&nbsp;</p>

<p>Let's take a look at the variables:</p>

<p class="CodeCommand">
    &gt;&gt;type(rsn1) <br />
    table <br />

    <br />

    &gt;&gt;type(rsn2) <br />
    table
</p>

    
<p>&nbsp;</p>
    
    
<p>Now, let's compare the L-values using the <a href="../std/funcs/test_t.php">std.test_t</a> function.</p>

<p class="CodeCommand">
    &gt;&gt;pval, tbl=std.test_t{x=rsn1.L, y=rsn2.L} <br />

    <br />

    &gt;&gt;pval <br />
    1.25e-38
</p>

<p>
    It is seen that the p-value strongly suggests that the raisins' L-values are 
    significantly different. The rationale can be quickly extended to other color 
    values or different tests as well.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="basics.php">Basics</a> 
    <a href="measuringdistance.php">Measuring Distance</a>
</div>

</body>

</html>
