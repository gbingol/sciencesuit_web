<!DOCTYPE html>
<html translate="no">
    
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">

    <title>qqnorm</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>
    
    
<body>


<?php
   $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
   include $mainmenuloc;
?>
    



<h1>qqnorm</h1>
    
<p>Plots quantile-quantile chart.</p>


<p>&nbsp;</p>



<h3 id="syntax">Syntax</h3> 

<p class="funcsignature">
    
    qqnorm{ <br />
    <br />
    [1]= <br />

    <br />
    

    [<key>name</key>=DefaultName], <br />

    <br />
    

    [<key>title</key>="Q-Q Norm"], <br />

    <br />

    [<key>xlab</key>="Theoretical Quantile"], <br />

    <br />

    [<key>ylab</key>="Data"], <br />

    <br />

    [<key>show=</key><span class="LuaKeyword">true</span>], <br />

    <br />


    [<key>line</key>={ color=DefaultColor, width=2, style="solid"}], <br />
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
        <td>[1]=:</td>
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
        <td>show:</td>
        <td>Whether to show theoretical line or not &larr; <em>boolean</em></td>
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

<h3 id="onlydata" class="head_l3">Only Data</h3>

<p class="CodeCommand">
    &gt;&gt;x=std.rnorm(100) <br>
    &gt;&gt;std.qqnorm{x}
</p>

<img src="../images/qqnorm_onlydata.png" alt="">


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="data_line" class="head_l3">Line Properties</h3>

<p class="CodeCommand">
    &gt;&gt;x=std.rnorm(100) <br>
    &gt;&gt;std.qqnorm{x, line={color="0 102 51", style="dash"}}    
</p>

<img src="../images/qqnorm_data_linedefined.png" alt="">






<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="data_line" class="head_l3">Marker Properties</h3>

<p class="CodeCommand">
    &gt;&gt;x=std.rnorm(100) <br>
    &gt;&gt;std.qqnorm{x, marker={fill="255 255 255", linecolor="0 0 255", type="s", linewidth=2, size=5}}
</p>

<img src="../images/qqnorm_markerdefined.png" alt="">



<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
   <a href="qqplot.php">std.qqplot</a>
   <a href="../../plotter/qqchart/qqchart.php">Q-Q Chart</a>
</div>


</body>

</html>