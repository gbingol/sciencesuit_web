<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>boxplot</title>

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

<h1>boxplot</h1>

<p class="funcsignature">
        boxplot{ 
        <br />
          ...  ,   <br />

        <br />

        [<span class="tablekey">name</span>=DefaultName], <br />

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

<p>&nbsp;</p>


<p>
    The functions returns the window handle of the plot window.
</p>


<p>&nbsp;</p>

<p> 
    <span class="italicunderlined"> <em>Note on Terminology:</em></span> 
    The word Default in the arguments is used to denote that the so-called value is 
    assigned/computed by the system until a new value is assigned.
</p>
    

<p>&nbsp;</p>
<p>
    <span class="italicunderlined">
    <strong>Arguments:</strong></span>
</p>
    
    
    
<table class="funcarguments">
    <tr>
        <td>... :</td>
        <td>Any number of variable &larr; <em>Vector</em></td>
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
<p>&nbsp;</p>




<h2>EXAMPLES</h2>
<p>
    Let's start from simple to advanced use of the boxplot command and let's stick to 
    the same <b>x</b> and <b>y</b> vectors (arbitrarily chosen) and 
    declare them beforehand. 
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.tovector{2, 1, 3, 6, 4} <br />
    &gt;&gt;y=std.tovector{7, 7, 8, 4, 2}
</p>

<p>&nbsp;</p>
 
   




<!-- *************************************************************************************** -->
    
<h3 id="onlydata">A) Only data is provided</h3> 

<p>
    This is the simplest use of the command. Two vectors, namely <b>x</b> and <b>y</b> are provided.
</p>

<p class="CodeCommand">
    &gt;&gt;std.boxplot{x, y} <span style="color:green"> -- lets omit the returned windowID </span>
</p>

<img src="../images/boxplot_onlydata.png" alt=""/>

<p>
    The name of the series are automatically assigned as "<em>Series 1</em>" and "<em>Series 2</em>" and 
    since neither fill nor line is defined, the system assigned the computed values.
</p>






<p >&nbsp;</p>
<p>&nbsp;</p>
    
    
   




<!-- *************************************************************************************** -->
    
<h3 id="fillprops">B) Defining fill properties</h3> 
<p>
    If we define the fill properties, they will be applied to the any number of vectors we define. For example:
</p>

<p class="CodeCommand">
    &gt;&gt;std.boxplot{x, y, fill = {color = "0 0 255"} }
</p>


<img src="../images/boxplot_xysamefillcolor.png" alt=""/>

<p>
    Here, it is clearly seen that both series have the same fill color, since the fill color has been explicitly defined in the command. 
    There are a few choices to overcome this situation:
</p>

<ol>
    <li>Only defining the style and letting the system assign colors.</li>
    <li>Letting system assign line properties, thus the boundaries of the box will have different colors.</li>
    <li>For precise control, using the <span class="tablekey"><em>hwnd</em></span> property and running the boxplot command twice.</li>
</ol>


<p>&nbsp;</p>

<p>
    Let's demonstrate the last case:
</p>

<p class="CodeCommand">
    <span style="color: green">--Let's define some styles</span> <br>
    &gt;&gt;solid=std.const.fillstyle.solid <br>
    &gt;&gt;dhatch=std.const.fillstyle.fdiaghatch <br>

    <br>


    &gt;&gt;hwnd = std.boxplot{<b>x</b>, fill = {color="0 255 255", style=solid} } <br>
    &gt;&gt;std.boxplot{<b>y</b>, <span class="tablekey">fill</span> = {color="0 0 255", style=dhatch}, <span class="tablekey">hwnd</span>=hwnd}
</p>

<img src="../images/boxplot_xydifferentfillcolor.png" alt=""/>

<p>
    Please note that, the above-mentioned rationale also applies to <span class="tablekey">name</span> property as well, such that 
    if we define the name, it will be applied to all of the defined vectors.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>

    



<!-- *************************************************************************************** -->
    
<h3 id="lineprops">C) Defining line properties</h3> 
<p>
   Similar to fill properties, if we define the line properties, they will be applied to the any number of vectors we define. For example,
   the following commands produces a chart with fill color and style automatically assigned whereas line styles are custom defined.
</p>

<p class="CodeCommand">
    &gt;&gt;solid=std.const.linestyle.solid <br>
    &gt;&gt;std.boxplot{x, <span class="tablekey">line</span> = {color="0 255 0", style=solid, width=3} }
</p>

<img src="../images/boxplot_linestyledefined.png" alt=""/>
    
    





    
<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="plotlayout.php">plotlayout</a>
    <a href="plothwnd.php">plothwnd</a>
    <a href="scatter.php">scatter</a>
</div>


</body>

</html>
