<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pie</title>

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
    


<h1>pie</h1>

<p class="funcsignature">
        pie{ 
        <br />
          ...  ,   <br />

        <br />

        [<span class="tablekey">title</span>=""], <br />

        <br />

        [<span class="tablekey">labels</span>=DefaultLabels], <br />
        <br />

        [<span class="tablekey">colors</span>=DefaultColors], <br />
        <br />
        
        
        [<span class="tablekey">explode</span>=0], <br />
        <br />
        
        [<span class="tablekey">startangle</span>=0], <br />
        <br />
        
        [<span class="tablekey">legend</span>=<span class="LuaKeyword">true</span>], <br />
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
        <td>Data of individual slices &larr; <em>Vector/Array</em></td>
    </tr>

    
    <tr>
        <td>title:</td>
        <td>Title of the chart &larr; <em>string</em></td>
    </tr>
    
    <tr>
        <td>labels:</td>
        <td>Label of individual slices &larr; <em>table</em></td>
    </tr>
    
    <tr>
        <td>colors:</td>
        <td>Color of individual slices &larr; <em>table</em></td>
    </tr>
    
     <tr>
        <td>explode:</td>
        <td>Explosion level &larr; <em>table / integer</em></td>
    </tr>
    
    <tr>
        <td>startangle:</td>
        <td>Start angle of first slice &larr; <em>integer</em></td>
    </tr>
    
    <tr>
        <td>legend:</td>
        <td>Whether to show legend or not &larr; <em>boolean</em></td>
    </tr>
    
    <tr>
        <td>hwnd:</td>
        <td>The handle of a window. If <span class="LuaKeyword">nil</span> 
            then the chart is displayed on a new plot window &larr; Light userdata
        </td>
    </tr>
</table>



<p>&nbsp;</p>


<details>
    <summary>Notes</summary>
    
    <ul class="linespaced">
        <li>
            1) If <em>explode</em> is an integer, then the pie is exploded.<br>
            2) If <em>explode</em> is a table of integers, then specified slices are exploded.
        </li>
        
        <li>
            1) If no <em>labels</em> are provided, then the labeling will be done using 1, 2, and so on. <br>
            2) If insufficient number of <em>labels</em> are provided, unassigned data points will be assigned random labels.<br>
            3) If more <em>labels</em> are provided than the number of data, excess labels will be discarded.
        </li>

        <li>
            1) If no <em>color</em> is provided, coloring will be done automatically. <br>
            2) If insufficient <em>color</em> is provided, automatic colors will be used for remaining slices.<br>
            3) If more <em>colors</em> are provided than the number of data points, excess colors will be discarded.
        </li>
    </ul>
</details>      


<p>&nbsp;</p>
<p>&nbsp;</p>




<h2 id="examples">EXAMPLES</h2>
<p>
    Let's start from simple to advanced use of the pie command and let's stick to 
    the same <b>data</b>.
</p>

<p class="CodeCommand">
    &gt;&gt;data=std.util.tovector{10, 6, 8}
</p>



<p>&nbsp;</p>
 
   





    
<h3 id="onlydata">Only data</h3> 

<p>
    This is the simplest use of the command.
</p>

<p class="CodeCommand">
    &gt;&gt;std.pie{data} <span class="LuaComment"> -- lets omit the returned windowID </span>
</p>

<img src="../images/pie_onlydata.png" alt=""/>

<p>
    Notice that the labels are automatically assigned as 1, 2 and 3. 
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
   






    
<h3 id="data_labels">Data / Labels </h3> 
<p>
    Let's explicity define the labels.
</p>

<p class="CodeCommand">
    &gt;&gt;std.pie{data, labels={"A", "B", "C"}}
</p>


<img src="../images/pie_labels_datasizematched.png" alt=""/>

<p>
    Notice that number of labels matched number of data points.
</p>



<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.pie{data, labels={"A"}}
</p>


<img src="../images/pie_labels_lessthandata.png" alt=""/>


<p>
    Notice that only 1 label provided and the rest is randomly assigned by system.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="data_explode">Explode </h3> 
<p>
    Let's define explosion level for the <em>whole pie</em>.
</p>


<p class="CodeCommand">
    &gt;&gt;std.pie{data, explode = 1}
</p>


<img src="../images/pie_explode_series.png" alt=""/>



<p>&nbsp;</p>


<p>
    Now let's define explosion level for only the <em>first slice</em>.
</p>


<p class="CodeCommand">
    &gt;&gt;std.pie{data, explode = {1} }
</p>


<img src="../images/pie_explode_firstslice.png" alt=""/>

    






    
<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="data_color">Colors </h3> 
<p>
    Let's define arbitrary colors for each slice.
</p>


<p class="CodeCommand">
    &gt;&gt;std.pie{data, colors = {"255 51 153", "153 153 0", "0 153 153"} }
</p>


<img src="../images/pie_colors.png" alt=""/>









<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="data_color_startangle">Angle of first slice </h3> 
<p>
    Let's set the angle of first slice to 45&deg;.
</p>


<p class="CodeCommand">
    &gt;&gt;std.pie{data, startangle=45, colors = {"255 51 153", "153 153 0", "0 153 153"} }
</p>


<img src="../images/pie_colors_startangle.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../../plotter/pie/piechart.php">Pie Chart</a>
    <a href="piepie.php">std.piepie</a>
</div>


</body>

</html>
