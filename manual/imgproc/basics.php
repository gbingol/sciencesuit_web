<!DOCTYPE html>
<html>

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Color Analysis</title>


<link href="../../css/common.css" rel="stylesheet" type="text/css"/>


    <style>
        .auto-style1 {
            text-decoration: underline;
        }
        .auto-style2 {
            text-decoration: underline;
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


<h1>Essentials</h1>
    


<h2 id="openload">Opening/Loading Images</h2>

<p>Upon running the toolbox, initially the following simple interface will be shown:</p>

<img src="images/initialview_noimage.svg" alt=""/>

<p>
    At the <em>very first run</em>, the left-hand side panel, namely the <em>Directory Viewe</em>r, will only show the root directories. 
    However, as shown below, once a directory is chosen it can be set as default (Fig A), 
    so the next time when the editor starts the focus will be given to that 
    particular directory (Fig B). This provides considerable convenience when opening images.
</p>

<img src="images/directoryviewer_setasdefault_beforeafter.png" alt=""/>

<p>
    Note that except the menu <em>File &rarr; Open Image</em>,
    and the <em>Directory Viewer</em> all other controls are disabled until opening an image. 
    There are two ways of opening an image:</p>
<p>
    &nbsp;</p>


<h3>A) Using the Menu</h3>

<p><b>1)</b> Select File &rarr; Open Image</p>

<img src="images/menu_file_openimage.png" alt=""/>

<p><b>2)</b> An Open Dialog will be shown. It is possible to choose any type of image.</p>

<img src="images/openimagefiledialog.svg" alt=""/>

<p><strong>3)</strong> Selecting an image will load it to the editor.</p>

<img src="images/openimage_showingM206ricekernels.svg" alt=""/>

<p>&nbsp;</p>

<p>
    When an image is loaded, the zoom level is adjusted so that the image fits the frame, 
    therefore, the zoom level can be different than 100%. For smaller images and depending on 
    the screen size, zoom level can be larger than 100% and for larger images it can be smaller than 100%. 
    Once the image is loaded successfully, all controls will be enabled (active). 
</p>


<p>&nbsp;</p>

<h3>B) Using the Directory Viewer</h3>

<p>
    Using Directory Viewer is rather easy. At the directory viewer, locate the image file and double-click it. 
    The image will be opened at a new tab in the current editor.
</p>

<img src="images/basics_editorwithtwotabs_raisinsshown.svg" alt=""/>

<p>&nbsp;</p>
<p>&nbsp;</p>



<h3>Understanding Interface</h3>

<p>
    Since the editor comprised of tabs, which can contain different types of images, therefore, 
    switching between tabs will automatically update the information shown at status bar and the 
    state of the controls (zoom level, illuminant and multi-page selector) as well. 
</p>
<p>
    &nbsp;</p>

<p>
    <span class="auto-style2"><em>The toolbar:</em></span> 
</p>
<p>
    There are two controls: A) Zoom Level and B) Illuminant, for which the choices are 
    shown below in Fig A and Fig B, respectively.
</p>

<img src="images/toolbar_illuminant_zoomlevel.png" alt=""/>

<p>
    Note that, multi-page selection only becomes available when the image contains more than 1 page. 
    In the above figure, 117% fits the image to the frame (as explained above, this zoom level can be 
    different depending on the size of the image) and the default choice of illuminant is D65.
</p>

<p>&nbsp;</p>

<p class="auto-style2">
    <em>The statusbar</em></p>
<p>
    Information on current pixel, the pixel currently under the mouse pointer, and the image are shown:
</p>

<img src="images/statusbar_RGB_Lab_ImgInfo.png" alt=""/>

<p>
    <em>Pixel:</em> Currently, the mouse is on the pixel located as x=542 and y=488. 
    The RGB values and the corrresponding, depending on the choice of illuminant, are shown. 
    Moving the mouse pointer on the image will change the displayed information.
</p>

<p>
    <em>Image:</em> The image’s width x height in pixels, number of channels and its depth in bits are displayed. 
    Please note that, the minimum bit depth that can be sensed is 8 bits per channel. 
</p>



<p>&nbsp;</p>



<p>
    <span class="auto-style1"><em>Note:</em></span> For technical reasons, when a single channel image is loaded, 
    the channel numbers are automatically adjusted to 3 channels. 
    The information at the status bar will still show that the image has indeed single channel; 
    however, the RGB values shown for this image will exactly be the same.
</p>
<p>
    &nbsp;</p>

<p class="auto-style2"><em>Changing Zoom Level</em></p>
<p>
    The zoom level can be changed in 3 different ways:
</p>

<ol>
    <li>By selecting a pre-defined zoom level from the zoom level control.</li>
    <li>By typing a zoom level to the zoom level control and then pressing enter.</li>
    <li>By clicking control (ctrl) button on keyboard and using the mouse wheel.</li>
</ol>


<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- *******************************************Color Spaces ********************* -->



<h2 id="colorspaces">Color Spaces</h2>

<p>
    Currently, 3 color spaces are used, namely, XYZ, sRGB and CIE Lab. The color values are read from each pixel 
    with the assumption that it is in standard RBG space and then converted to XYZ using the well-defined 
    mathematics and then to CIE Lab by taking into consideration the chosen illuminant. Therefore, 
    the choice of illuminant and the degree field of view affects the conversion from RGB to CIE Lab. 
</p>
<p>
    Please note that only 2&deg; observer is currently available.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="analyzingcolor.php">Analyzing Color</a>
    <a href="measuringdistance.php">Measuring Distance</a>
</div>


</body>

</html>
