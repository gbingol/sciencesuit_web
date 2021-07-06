<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>layout</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>








<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>layout</h1>

<p>
    Generates a 2D Lua table of window handles which point to the different blocks of the same plot window.
</p>

<p class="funcsignature">
    plot.layout(row=, column=, [Show =<span class="LuaKeyword">false</span>]) &rarr; 2D Lua table of window handles (light userdata)
</p>



<p>&nbsp;</p>


<p>
    <em>Note:</em> The function is used to draw multiple charts on the same plot window.
</p>




<p>&nbsp;</p>


<h2>Examples</h2>


<h3>Using Only Commands</h3>

<p class="CodeCommand">
    <span class="LuaComment">--generate 2x2 matrix of window handles </span> <br />
    &gt;&gt;t=std.plot.layout(2,2)  <br />

     <br />

    <span class="LuaComment">--vector of x values </span> <br />
    &gt;&gt;x=std.sequence(-4,4,0.1);  <br />

     <br />

    <span class="LuaComment">--(1,1) cos(x) </span> <br />
    &gt;&gt;std.scatter{x=x, y=std.cos(x), hwnd=t[1][1]}  <br />
    Light userdata: 000001F4895E28A0  <br />

     <br />

    <span class="LuaComment">(1,2) --sin(x) </span> <br />
    &gt;&gt;std.scatter{x=x, y=std.sin(x), hwnd=t[1][2]}  <br />
    Light userdata: 000001F4895E28A0  <br />

     <br />

    <span class="LuaComment">--(2,1) normal distribution </span> <br />
    &gt;&gt;std.scatter{x=x, y=std.dnorm(x), hwnd=t[2][1]}  <br />
    Light userdata: 000001F4895E28A0  <br />

     <br />

    <span class="LuaComment">--(2,2) t-distribution </span> <br />
    &gt;&gt;std.scatter{x=x, y=std.dt(x,5), hwnd=t[2][2]}  <br />
    Light userdata: 000001F4895E28A0
</p>


<img src="../images/plotlayout-2x2.svg" alt="" />



<p>&nbsp;</p>




<p>
    As of this point calling the plotting function, i.e., <a href="scatter.php">std.scatter</a>, 
    with any of the window handles, will add new series to the particular chart. 
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3>Using Clicks</h3>
<p>
    To be able to use "clicks", we first need to generate the layout and show it.
</p>

<p class="CodeCommand">
    <span class="LuaComment">--generate 2x1 matrix of window handles </span> <br />
    &gt;&gt;t=std.plot.layout(2, 1, <span class="LuaKeyword">true</span>) 
</p>

<p>&nbsp;</p>

<p>
    After running the command, as shown below, 
    the multi-chart frame will be visible without any charts.
</p>

<img src="../images/plotlayout-2x1.png" alt=""/>


<p>&nbsp;</p>

<p>
    It is seen in above-shown figure that there are 2 containers, boundaries of which are shown, for accommodating different types of charts. 
    Right-clicking on any of the container, will show the following menu:
</p>

<img src="../images/plotlayout-2x1_convertcontextmenu.png" alt=""/>


<p>&nbsp;</p>

<p>
    Selecting any of <em>"Convert to ..."</em> menu, will convert the respective container to the selected chart. For example,
    if we convert the container located at (1,1) to a scatter chart and then right-click on it again, the following menu
    options will be shown:
</p>


<img src="../images/plotlayout-2x1_scatter_contextmenu.png" alt=""/>


<p>&nbsp;</p>

<p>
    Now, for container (1, 1) it is possible to add series by following the steps described for the
    <a href="../../plotter/scatter/scatterchart.php#New_Selection">scatter chart</a>.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<p class="rightmargined">
    <span style="color: red; font-size: x-large;">&#9432;</span> 
    It is also possible to follow a potpourri of steps described above such that
    start with commands and continue with clicks or vice versa.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="argand.php">argand</a>
    <a href="boxplot.php">boxplot</a>
    <a href="histogram.php">histogram</a>
    <a href="pie.php">pie</a>
    <a href="piepie.php">piepie</a>
    <a href="qqnorm.php">qqnorm</a>
    <a href="qqplot.php">qqplot</a>
    <a href="scatter.php">scatter</a>
</div>




</body>

</html>
