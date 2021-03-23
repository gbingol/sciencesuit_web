<!DOCTYPE html>
<html>
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>argand</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

    <script src="/jsscripts/matrixtotable.js"></script>
  
</head>
    
    
<body>
    


<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    


<h1>argand</h1>
    
<p>Plots argand diagram.</p>

<p class="funcsignature">
    
        argand{ <br />

        <br>

        Array, <br />

        <br />
        

        [<key>name</key>=DefaultName], <br />

        <br />
        

        [<key>title</key>=""], <br />

        <br />

        [<key>xlab</key>=""], <br />

        <br />

        [<key>ylab</key>=""], <br />

        <br />
        

        [<key>marker</key>={type="c", size=4,  fill=DefaultColor, linewidth=1, linecolor=DefaultColor}], <br />
        <br />

        [<key>line</key>={ color=DefaultColor, [width=1], style="solid"}], <br />
        <br />
        
        [<key>hwnd</key>=<span class="LuaKeyword">nil</span>], <br />
        <br />
        
        } &rarr; window handle (light userdata)
</p>

<p>
    The functions returns the window handle of the plot window.
</p>



<p> &nbsp;</p>




<p> 
    <span style="text-decoration: underline;"> <em>Note on Terminology:</em></span> 
    The word Default in the arguments is used to denote that the so-called value is 
    assigned/computed by the system until a new value is assigned.
</p>



<p>&nbsp;</p>




<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>Array:</td>
        <td>An array containing at least 1 real or complex number &larr; <em>Array</em></td>
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
        <td>Label of real-axis &larr; <em>string</em></td>
    </tr>

    <tr>
        <td>ylab:</td>
        <td>Label of imaginary-axis &larr; <em>string</em></td>
    </tr>

    <tr>
        <td>hwnd:</td>
        <td>The handle of a window. If <span class="LuaKeyword">nil</span> 
            then the chart is displayed on a new plot window &larr; Light userdata
        </td>
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
    
</table>








<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="examples">EXAMPLES</h2>
<p>
    Let's start from simple to advanced use of the argand command. The data array will be 
    roots of the polynomial <em>x<sup>4</sup> + 1 </em>
</p>

<p class="CodeCommand">
    &gt;&gt;roots=std.polyroots(std.util.tovector{1, 0, 0, 0, 1}) <br>
</p>


<p>&nbsp;</p>



<h3 id="onlydata">Define only data</h3>

<p>
    This is the simplest use of the command. Only the data is provided, 
    and the rest of the properties are provided (computed) by the system.
</p>

<p class="CodeCommand">
    &gt;&gt;std.argand{roots}
</p>


<img src="../images/argand_markerdefaultproperties.png" alt="">





<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="data_marker_name_label_title">Customized marker with title, name and labels</h3>
<p>
    In the following command, we will customize the marker, give a name to the series, 
    add axes labels and add a chart title. The command is slightly long but easier to 
    understand.
</p>


<p class="CodeCommand">
    &gt;&gt;std.argand{roots, <em>marker</em> = {fill = std.const.color.salmon_dark, size = 6, linecolor = std.const.color.blue}, 
    <em>name</em>="roots", <em>title</em>="roots of x^4+1", <em>xlab</em> = "real", <em>ylab</em> = "imaginary"}
</p>

<img src="../images/argand_marker_name_labels.png" alt="">







<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="modulusline">Modulus line</h3>
<p>
    In order to show the modulus line, we have to define the line property.
</p>


<p class="CodeCommand">
    &gt;&gt;std.argand{roots, <em>line</em>={width=1, color=std.const.color.chocolate}, 
    xlab="real", ylab="imaginary", title="roots of x^4+1"}
</p>

<img src="../images/argand_modulusline.png" alt="">


<p>&nbsp;</p>

<p>
    If all of the line properties should be computed by system, the following command is a 
    valid command to show modulus line.
</p>

<p class="CodeCommand">
    &gt;&gt;std.argand{roots, line={} }
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../../plotter/argand/argand.php">Argand diagram</a>
    <a href="../classes/complex.php">Complex</a>
    <a href="scatter.php">std.scatter</a>
    <a href="boxplot.php">std.boxplot</a>
</div>

</body>

</html>