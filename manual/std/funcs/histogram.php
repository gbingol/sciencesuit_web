<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>histogram</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        span.tablekey {
            color: #CC3300;
        }
        
        span.italicunderlined
        {
            font-style: italic;
            text-decoration: underline;
        }
        
        ol li
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        
        
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>







<body>
    
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    

<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
</script>    
    


<h1>histogram</h1>

<p class="funcsignature">
        histogram{ 
            <br />
        <span class="tablekey">[1]</span>=  ,   <br />

        <br />

        [<span class="tablekey">mode</span>="f"], <br />

        <br />

        [<span class="tablekey">cumulative</span>=<span class="LuaKeyword">false</span>], <br />

        <br />

        [<span class="tablekey">breaks</span> = DefaultValue], <br />

        <br />

        [<span class="tablekey">title</span>=""], <br />

        <br />

        [<span class="tablekey">fill</span>={color=DefaultColor, style=DefaultStyle}], <br />
        <br />

        [<span class="tablekey">line</span>={ color=DefaultColor, width=1, style=DefaultStyle}], <br />
        <br />
        
        [<span class="tablekey">hwnd</span>=<span class="LuaKeyword">nil</span>], <br />
        <br />

        } &rarr; window handle (light userdata)
</p>


<p>
    returns the window handle of the plot window.
</p>


<p>&nbsp;</p>

<p> 
    <span class="italicunderlined"> <em>Note on Terminology:</em></span> 
    The word Default in the arguments is used to denote that the so-called value is 
    assigned/computed by the system unless a new value is assigned.
</p>
    

<p>&nbsp;</p>
<p>
    <span class="italicunderlined">
    <strong>Arguments:</strong></span>
</p>
    
    
    
<table class="funcarguments">
    <tr>
        <td>[1]= :</td>
        <td>A variable &larr; <em>Vector/Array</em></td>
    </tr>

    <tr>
        <td>mode :</td>
        <td>"d", "f" or "r" for density, frequency and relative frequency, respectively.</td>
    </tr>

    <tr>
        <td>cumulative :</td>
        <td>whether distribution is cumulative or not &larr; <em>boolean</em></td>
    </tr>

    <tr>
        <td>breaks :</td>
        <td>Number of breaks or the break points &larr; <em>integer/Vector</em></td>
    </tr>

    <tr>
        <td>title:</td>
        <td>Title of the chart &larr; <em>string</em></td>
    </tr>

    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>

    
    
    <tr>
        <td colspan="2">Fill Properties</td>
    </tr>

    <tr>
        <td>color:</td>
        <td>In the form of “R G B”  &larr; string</td>
    </tr>

    <tr>
        <td>style:</td>
        <td>By default it is solid (=100, see <a href="const.php#fillstyle">std.const.fillstyle</a>). &larr; integer</td>
    </tr>


    <tr>
        <td  colspan="2">&nbsp;</td>
    </tr>

    <tr>
        <td  colspan="2">Line Properties</td>
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
        <td>By default it is solid (=100, see <a href="const.php#linestyle">std.const.linestyle</a>). &larr; integer</td>
    </tr>
    
     <tr>
        <td  colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td>hwnd:</td>
        <td>The handle of a window. If <span class="LuaKeyword">nil</span> 
            then the chart is displayed on a new plot window &larr; Light userdata
        </td>
    </tr>
</table>


<p>&nbsp;</p>

<p>
    Note that in Lua terminology, a table data structure can have entries with explicit or implicit keys. <br>
    The notation <span style="background-color: lightgray;">[1]</span> 
    denotes a keyless entry (with an implicit key) in the first position at the table; i.e. 
    <span style="background-color: lightgray;">std.histogram{ x }</span> is equivalent to 
    <span style="background-color: lightgray;">std.histogram{ [1] = x }</span>
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>




<h2 class="head_l2" id="examples">EXAMPLES</h2>

<p>
    For all examples, the following random variable, 
    generated from a standard normal distribution, is used.
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.rnorm(500)
</p>




<p>&nbsp;</p>




<h3 class="head_l3" id="onlydata">Only data</h3>

<p>
    Only data is provided and all other properties are provided by the system.
</p>

<p class="CodeCommand">
    &gt;&gt;std.histogram{x}
</p>

<img src="../images/histogram_onlydata.png" alt="">


<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 class="head_l3" id="mode_cumulative">Distribution Mode</h3>

<p>
    Distribution mode is set to "relative frequency" and cumulative mode is true.
</p>


<p class="CodeCommand">
    &gt;&gt;std.histogram{x, mode="r", cumulative=<span class="LuaKeyword">true</span>}
</p>

<img src="../images/histogram_mode_cumulative.png" alt="">


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 class="head_l3" id="fill_line">Fill/Line Properties</h3>

<p>
    Data, as well as, fill and line properties are provided. 
</p>


<p class="CodeCommand">
    &gt;&gt;std.histogram{x, fill={color="255 0 0"}, line={color="0 255 0", width=2}}
</p>

<img src="../images/histogram_fill_line.png" alt="">

    
<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="../../plotter/histogram/histogram.php">Histogram chart</a>
    <a href="boxplot.php">std.boxplot</a>
    <a href="scatter.php">std.scatter</a>
</div>


</body>

</html>
