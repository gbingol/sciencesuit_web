<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pie of Pie</title>

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
    


<h1>piepie</h1>

<p class="funcsignature">
        piepie{ 
        <br />
          ...  ,   <br />

        <br />

        [<span class="tablekey">title</span>=""], <br />

        <br />

        [<span class="tablekey">labels</span>=DefaultLabels], <br />
        <br />
        
        [<span class="tablekey">groups</span>=], <br />
        <br />

        [<span class="tablekey">lcolors</span>=DefaultColors], <br />
        <br />
        
        [<span class="tablekey">rcolors</span>=DefaultColors], <br />
        <br />
        
        
        [<span class="tablekey">lexplode</span>=0], <br />
        <br />
        
        [<span class="tablekey">rexplode</span>=0], <br />
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
        <td>lcolors:</td>
        <td>Color of individual slices at the left pie &larr; <em>table</em></td>
    </tr>
    
     <tr>
        <td>rcolors:</td>
        <td>If exists, color of individual slices at the right pie &larr; <em>table</em></td>
    </tr>
    
     <tr>
        <td>lexplode:</td>
        <td>Explosion level of left pie &larr; <em>table / integer</em></td>
    </tr>
    
    <tr>
        <td>rexplode:</td>
        <td>If exists, explosion level of right pie &larr; <em>table / integer</em></td>
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
            Notice that the prefix "l" and "r" are used to denote left and right pie, respectively. 
            See <a href="../../plotter/pie/pieofpiechart.php#pieofpie_anatomy">anatomy</a>.
        </li>
        
        <li>
            1) If <em>explode</em> is an integer, then the left and/or right pie is exploded.<br>
            2) If <em>explode</em> is a table of integers, then specified slices are exploded at the left/right pie.
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
    Let's start from simple to advanced use of the std.piepie command and let's declare 
    <b>data</b>, <b>labels</b> and <b>group</b> memberships ahead of time.
</p>

<p class="CodeCommand">
    &gt;&gt;data=std.util.tovector{10, 6, 8, 1, 2} <br>
    &gt;&gt;labels={"A", "B", "C", "D", "E"} <br>
    &gt;&gt;groups={1, 1, 1, 2, 2}
</p>



<p>&nbsp;</p>
 
   





    
<h3 id="onlydata">Only data</h3> 

<p>
    This is the simplest use of the command.
</p>

<p class="CodeCommand">
    &gt;&gt;std.piepie{data} <span class="LuaComment"> -- lets omit the returned windowID </span>
</p>

<img src="../images/piepie_onlydata.png" alt=""/>

<p>
    Notice that the labels are automatically assigned as 1, 2 and so on. 
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
   






    
<h3 id="data_labels">Data / Labels </h3> 
<p>
    Let's use the explicity defined labels.
</p>

<p class="CodeCommand">
    &gt;&gt;std.piepie{data, labels=labels}
</p>


<img src="../images/piepie_labels_datasizematched.png" alt=""/>

<p>
    Notice that number of labels matched number of data points.
</p>



<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.piepie{data, labels={"A"}}
</p>


<img src="../images/piepie_labels_lessthandata.png" alt=""/>


<p>
    Notice that only 1 label provided and the rest is randomly assigned by system.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="data_groups">Data / Groups </h3> 
<p>
    Let's assign group membership by using the pre-defined <em>groups</em> table.
</p>

<p class="CodeCommand">
    &gt;&gt;std.piepie{data, groups=groups}
</p>


<img src="../images/piepie_data_groups.png" alt=""/>







<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="data_explode">Explode </h3> 
<p>
    Let's define explosion level for the <em>left pie</em>. Please note that when there is only 1 pie, it is considered as the left pie.
</p>


<p class="CodeCommand">
    &gt;&gt;std.piepie{data, lexplode = 1}
</p>


<img src="../images/piepie_lexplode_series.png" alt=""/>




<p>&nbsp;</p>


<p>
    Now let's define explosion level for only the <em>first slice</em>.
</p>


<p class="CodeCommand">
    &gt;&gt;std.piepie{data, lexplode = {1} }
</p>


<img src="../images/piepie_lexplode_firstslice.png" alt=""/>

    


<p>&nbsp;</p>


<p>
    Now let's define explosion level for <em>right pie</em>.
</p>


<p class="CodeCommand">
    &gt;&gt;std.piepie{data, rexplode = 1 } <br>
    <span style="color: red;">Cannot explode the right pie</span>
</p>


<p>
    An error message is issued, but why? Because, simply we don't have a right pie. In order to 
    have the right pie, we must define <em>group membership</em>.
</p>

<p>&nbsp;</p>

<p>
    Let's define <em>group membership</em> and explode the first slices of left and right pie.

<p class="CodeCommand">
    &gt;&gt;std.piepie{data, groups=groups, lexplode={2}, rexplode = {1} }
</p>


<img src="../images/piepie_lexplode_rexplode_firstslices.png" alt=""/>
    


    
<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="data_color">Colors </h3> 
<p>
    Let's define arbitrary colors for the first 3 slices at the left pie.
</p>


<p class="CodeCommand">
    &gt;&gt;std.piepie{data, lcolors = {"255 51 153", "153 153 0", "0 153 153"} }
</p>


<img src="../images/piepie_lcolors.png" alt=""/>



<p>&nbsp;</p>


<p>
    Now let's use the same colors but for the first slices at the left pie and for the two slices at the right pie.
</p>


<p class="CodeCommand">
    &gt;&gt;std.piepie{data, groups=groups, lcolors = {"255 51 153"}, rcolors={"153 153 0", "0 153 153"} }
</p>


<img src="../images/piepie_lcolors_rcolors.png" alt=""/>






<p>&nbsp;</p>
<p>&nbsp;</p>











<div class="RelatedLinks">
    <a href="../../plotter/pie/pieofpiechart.php">Pie of Pie Chart</a>
    <a href="pie.php">std.pie</a>
</div>


</body>

</html>
