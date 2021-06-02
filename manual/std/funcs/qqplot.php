<!DOCTYPE html>
<html translate="no">
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">

    <title>qqplot</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    




<body>


<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>
    



<h1>qqplot</h1>

<p>Plots quantile-quantile chart using two datasets.</p>


<p>&nbsp;</p>



<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
    
    qqnorm{ <br />
    <br />
    x = ,<br />

    <br />


    y = ,<br />

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

    
    [<key>hwnd</key>=<span class="LuaKeyword">nil</span>], <br />
    <br />
    
    } &rarr; window handle (light userdata)
</p>



<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>x, y=</td>
        <td>Data &larr; <em>Vector/Array</em></td>
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
        <td>hwnd:</td>
        <td>Window handle &larr; Light userdata
        </td>
    </tr>
</table>






<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 id="examples" class="head_l2">Examples</h2>

<p>
    For the examples, the following data set used:
</p>

<p>
    <span style="font-size: small;">
        treatment = [24, 33,43,43,43,44,46,49,49,52,53,54,56,57,57,58,59,61,62,67,71] <br>
        control = [10,17,19,20,26,28,33,37,37,41,42,42,42,43,46,48,53,54,55,55,60,62,85]   
    </span>
</p>

<p>
    <span style="color: red; font-size: x-large;">&#9432;</span> 
    Notice that <em>treatment</em> and <em>control</em> have sizes of 
    21 and 23, respectively.
</p>


<p>&nbsp;</p>

<p>
    <a href="../../workbook/createdatastructures.php">Create two vectors</a>, namely 
    <em>treatment</em> and <em>control</em>.
</p>


<p>&nbsp;</p>


<h3 id="onlydata" class="head_l3">Only Data</h3>

<p class="CodeCommand">
    &gt;&gt;std.qqplot{x=control, y=treatment, xlab="control", ylab="treatment"}
</p>

<img src="../images/qqplot_data_xlab_ylab.png" alt="">






<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="data_line" class="head_l3">Marker Properties</h3>

<p class="CodeCommand">
    &gt;&gt;std.qqplot{x=control, y=treatment, xlab="control", ylab="treatment", 
    marker={fill="255 255 255", linecolor="0 0 255", type="s", linewidth=2, size=5}}
</p>

<img src="../images/qqplot_data_xlab_ylab_marker.png" alt="">



<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
   <a href="qqnorm.php">std.qqnorm</a>
   <a href="../../plotter/qqchart/qqchart.php">Q-Q Chart</a>
</div>


</body>

</html>