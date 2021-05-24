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
    


<h1>boxplot</h1>

<p class="funcsignature">
        histogram{ 
       

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
        <td>Any number of variable &larr; <em>Vector/Array</em></td>
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




<h2 id="examples">EXAMPLES</h2>






    
<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="../../plotter/histogram/histogram.php">Histogram chart</a>
    <a href="boxplot.php">boxplot</a>
    <a href="scatter.php">scatter</a>
</div>


</body>

</html>
