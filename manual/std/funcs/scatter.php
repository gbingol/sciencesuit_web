<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>scatter</title>
    
    
    <script>
        document.createElement("key");
        document.createElement("blue");
    </script>

    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    <style>
        key {
            color: #CC3300;
        }
       
        blue {
            color: #0000FF;
        }
        
        ol.spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;
        }
        
    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>


<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>scatter</h1>

<p class="funcsignature">
    
        scatter{ <br />
        <br />
        x=, y=, <br />

        <br />
        

        [<key>name</key>=DefaultName], <br />

        <br />
        

        [<key>title</key>=""], <br />

        <br />

        [<key>xlab</key>=""], <br />

        <br />

        [<key>ylab</key>=""], <br />

        <br />
        
        
        [<key>bubble</key>={size=, color=DefaultColor, mode="A", scale=100}], <br />
        <br />
        

        [<key>marker</key>={type="c", size=4,  fill=DefaultColor, linewidth=1, linecolor=DefaultColor}], <br />
        <br />

        [<key>line</key>={ color=DefaultColor, width=1, style="solid", smooth=false}], <br />
        <br />

        [<key>trendline</key>={ type="linear", degree=2, intercept=AutoCompute, name=DefaultName, color=DefaultColor, width=1, style="dash"}] <br />
        <br />
        
        [<key>hwnd</key>=<span class="LuaKeyword">nil</span>], <br />
        <br />
        
        } &rarr; window handle (light userdata)
</p>

<p>
    The functions returns the window handle of the plot window.
</p>



<p> &nbsp;</p>




<p> <span style="text-decoration: underline;"> <em>Note on Terminology:</em></span> 
    The word Default in the arguments is used to denote that the so-called value is assigned/computed by the system until a new value is assigned.
</p>



<p>&nbsp;</p>




<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>x, y:</td>
        <td>x- and y-data &larr; <em>Vector</em></td>
    </tr>
    
    
    <tr>
        <td>name:</td>
        <td>Name of the series &larr; <em>string</em></td>
    </tr>

    <tr>
        <td>title:</td>
        <td>Title of the chart &larr; <em>string</em></td>
    </tr>

    <tr>
        <td>xlab:</td>
        <td>Label of x-axis &larr; <em>string</em></td>
    </tr>

    <tr>
        <td>ylab:</td>
        <td>Label of y-axis &larr; <em>string</em></td>
    </tr>
    
     <tr>
        <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="2">Bubble Properties</td>
    </tr>
    
    <tr>
        <td>size:</td>
        <td>bubble size data &larr; <em>Vector</em></td>
    </tr>
    
    <tr>
        <td>color:</td>
        <td>bubble color &larr; <em>string</em></td>
    </tr>
    
    <tr>
        <td>mode:</td>
        <td>Mode of sizing, "A" for area based and "W" for diameter based &larr; <em>string</em></td>
    </tr>
    
    <tr>
        <td>scale:</td>
        <td>size scale (0, 200] &larr; <em>integer</em></td>
    </tr>
    

    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="2">Marker Properties</td>
    </tr>

    <tr>
        <td>type:</td>
        <td>"<em>c</em>", "<em>t</em>", "<em>s</em>" or "<em>x</em>" 
            for circle, triangle, square or X shaped, respectively &larr; string
        </td>
    </tr>

    <tr>
        <td>size:</td>
        <td>size of the marker &larr; integer</td>
    </tr>

    <tr>
        <td>fill:</td>
        <td>fill color, in the form of “R G B”  &larr; string</td>
    </tr>

    <tr>
        <td>linewidth:</td>
        <td>width of the line forming the boundary of the marker &larr; integer</td>
    </tr>

    <tr>
        <td>linecolor:</td>
        <td>color of the line, in the form of "R G B", forming the boundary &larr; string</td>
    </tr>

    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>

    <tr>
        <td colspan="2">Line Properties</td>
    </tr>

    <tr>
        <td>width:</td>
        <td>width of the line &larr; integer</td>
    </tr>

    <tr>
        <td>color:</td>
        <td>color of the line, in the form of "R G B" &larr; string</td>
    </tr>

    <tr>
        <td>style:</td>
        <td>"<em>solid</em>", "<em>dash</em>" or "<em>dot</em>" &larr; string</td>
    </tr>

    <tr>
        <td>smooth:</td>
        <td>Spline algorithm is applied to smooth the line &larr; boolean</td>
    </tr>
    
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
        <td colspan="2">Trendline Properties</td>
    </tr>
    
    <tr>
        <td>type:</td>
        <td>
            "<em>exp</em>", "<em>linear</em>", "<em>log</em>", "<em>poly</em>" and "<em>pow</em>" 
            for exponential, linear, logarithmic, polynomial and power fitting, respectively. &larr; string
        </td>
    </tr>
    
    <tr>
        <td>degree:</td>
        <td>If type="poly", then the degree of the polynomial &larr; integer</td>
    </tr>
    
    <tr>
        <td>intercept:</td>
        <td>The desired intercept of the trendline &larr; number</td>
    </tr>
    
    <tr>
        <td>color:</td>
        <td>color of the trendline, in the form of "R G B" &larr; string</td>
    </tr>
    
    <tr>
        <td>width:</td>
        <td>width of the trendline &larr; integer</td>
    </tr>
    
    <tr>
        <td>style:</td>
        <td>"<em>solid</em>", "<em>dash</em>" or "<em>dot</em>" &larr; string</td>
    </tr>
    
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
        <td>hwnd:</td>
        <td>The handle of a window. If <span class="LuaKeyword">nil</span> 
            then the chart is displayed on a new plot window &larr; Light userdata
        </td>
    </tr>
</table>


<p>&nbsp;</p>


<h3>Notes:</h3>
<ol class="linespaced">
    <li>
        The data series (x, y) must be represented either by a <em>marker</em> or by a <em>line</em> or by both.  
        If neither a <em>marker</em> nor a <em>line</em> is defined then a <em>marker</em> with default values will be shown. 
    </li>

    <li>
        Once a data series is represented either by a <em>marker</em> or by a <em>line</em> or by both 
        then a <em>trendline</em> can be shown.
    </li>
    
    <li>
        If <em>bubble</em> is defined, then the <em>size</em> must be defined. Otherwise, an error will
        be issued.
    </li>
    
    
</ol>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h2>EXAMPLES</h2>
<p>
    Let's start from simple to advanced use of the scatter command and 
    let's stick to the same x and y data (arbitrarily chosen) and 
    declare them beforehand as x and y are not optional. 
</p>



<p class="CodeCommand">
    &gt;&gt;x=std.tovector{1, 2, 3, 4} <br />
    &gt;&gt;y=std.tovector{1, 3, 7, 14}
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="onlydata">Define only data</h3>

<p>
    This is the simplest use of the command. The <em>x-</em> and <em>y-data</em> are provided, 
    and the rest of the properties are provided by the system.
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x=x, y=y} <span style="color:green"> -- lets omit the returned windowID </span>
</p>


<img alt="" src="../images/scatter_markerdefaultproperties.png" />
<p>
    The name of the series is automatically assigned as "<em>Series 1</em>" and since neither marker nor line is defined, 
    by default the system will show a present x, y data pair by a marker with default values.
</p>
    
      


    
    
<p>&nbsp;</p>
<p>&nbsp;</p>







<h3>Define name and marker properties</h3>
<p>
    The marker properties can be fully customized.
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x=x, y=y, <key>name</key>="xy data", <key>marker</key>={type="t", size=7, fill="255 0 0", linecolor="0 0 255", linewidth=2}} 
</p>

    
<img src="../images/scatter_markerpropertieschanged.png" alt=""/>
<p>
    Here, the <em>name</em> of the series is defined as &quot;xy data&quot;, and the marker <em>type</em> is chosen to be triangle. 
    Marker will be <em>fill</em>ed with red color and the boundary of the marker will be 
    <blue>blue</blue> with a thickness of 2 pixels. 
    Note that had we not defined the <em>linecolor</em> and <em>linewidth</em>, 
    it would have assumed the fill color (red color).&nbsp;
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="onlyline">Define only line</h3>
<p>
    Our objective is to show the data <em>only</em> with connected lines.
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x=x, y=y, <key>line</key>={color="255 0 0", width=2}}
</p>
        

    
    
<img src="../images/scatter_line.png" alt="" />
<p>
    Please note that in the command we defined the line properties but have not defined the marker at all. <br />

    Since a property, such as line is already defined, the system will omit the marker and will present the data only with lines.

</p>


<p>&nbsp;</p>

<p>
    In the above figure the existence of multiple lines and their connections are apparently noticeable 
    rather than observing a smooth "single" curve. If we want a smooth curve:
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x=x, y=y, <key>line</key>={color="255 0 0", width=2, <em>smooth</em>=<span class="LuaKeyword">true</span>}}
</p>

 <img alt="" src="../images/scatter_smoothline.png" />

 
 
 
 
 

<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="markerline">Define marker and line</h3>
<p>
    Our goal is to show the data with both lines and markers.
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x=x, y=y, <key>marker</key>={type="s", size=6, fill="255 0 0"}, <key>line</key>={width=2}}
</p>

<img src="../images/scatter_line_marker.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="trendline">Adding Trendlines</h3>
<p>
    The simplest way of adding trendline is just by defining the trendline property remembering that 
    if we neither define marker nor line, by default marker will be shown.
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x=x, y=y, <key>trendline</key>={type="poly", degree=3, color="255 0 0", intercept=-10}}
</p>

    
<img src="../images/scatter_marker_trendline_poly3degree.png" alt=""/>
<p>
    A 3<sup>rd</sup> degree polynomial trendline with a red color is shown and note that the 
    marker color and properties are assigned by the system since we have not explicitly defined 
    the marker properties.
</p>
   






<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="bubble">Bubble Charts</h3>
<p>
    In order to add a bubble chart, the <em>size</em> property must be defined.
    Consider the following data set 
    <span style="font-size: small;"> (data extracted from 
    <a href="https://developers.google.com/chart/interactive/docs/gallery/bubblechart" target="_blank"> Google Charts</a>
    )
    </span>
    :
</p>

<p style="font-size: small;">
    Life expectancy=[80.66, 79.84, 78.6, 72.73,80.05, 72.49, 68.09, 81.55, 68.6, 78.09] <br>
    
    Fertility rate=[1.67, 1.36,  1.84, 2.78, 2, 1.7, 4.77, 2.96, 1.54, 2.05] <br>
    
    Population=[33739900, 81902307, 5523095, 79716203, 61801570, 73137148, 31090763, 7485600, 141850000, 307007000]
    
</p>

<p>
    Assuming the vector variables <em>life</em>, <em>fertil</em> and <em>pop</em> represents 
    life expectancy, fertility rate and population respectively, then the following command:
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x = life, y = fertil, bubble = {size = pop} } 
</p>


<img src="../images/scatter_bubblechart.png" alt=""/>
    

<p>&nbsp;</p>

<p>
    Now, let's change the color and scale all bubbles it to 70% of its would-be sizes:
</p>

<p class="CodeCommand">
    &gt;&gt;std.scatter{x = life, y = fertil, bubble = { size = pop, color = "255 0 0", scale = 70 } } 
</p>

<img src="../images/scatter_bubblechart_scale_color.png" alt=""/>



<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="boxplot.php">boxplot</a>
    <a href="plotlayout.php">plotlayout</a>
    <a href="plothwnd.php">plothwnd</a>
    <a href="plot.php">plot</a>
</div>


</body>

</html>
