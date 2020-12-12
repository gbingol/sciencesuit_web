<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>plothwnd</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        .auto-style1 {
            text-decoration: underline;
        }
        .auto-style2 {
            color: #008080;
            background-color: #DEDEDE;
        }
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

    
    
    
<h1>plothwnd</h1>
<p>
    Obtains a handle to the selected plot window. 
    Argument <em>WindowID</em> is the ID of the plot window.
</p>

<p class="funcsignature">
    
    plothwnd(WindowID) &rarr; window handle (light userdata)
    
</p>




<p>&nbsp;</p>


<h3>Note</h3>
<p>
    A window handle can be used with other plotting functions to add new series or new charts to the selected plot window. 
    However, to the naked eye the functions returns a value comprised of alpha-numeric characters and you cannot directly 
    use these characters as is. 
    
    The returned value must be assigned to a new variable, 
    which will then become of type <a href="https://www.lua.org/pil/28.5.html" target="_blank">light userdata</a>, 
    and this variable (pointing to the window handle) can be used with other plotting functions.
</p>




<p>&nbsp;</p>



<h3>Example</h3>
<p>
    Assuming that there is already a plot window with ID:1,
</p>


<p class="CodeCommand">
    &gt;&gt;std.plothwnd(1) <br />
    Light userdata: 0000028B9A6348F0
</p>


<p>&nbsp;</p>


<p>
    If we were to use 0000028B9A6348F0 directly with another function, the system would have issued an error. 
    However, the following is doable:
</p>


<p class="CodeCommand">
    &gt;&gt;<span class="auto-style2">hwnd</span>=std.plothwnd(1) <br />
     &gt;&gt;std.scatter{x=x, y=std.cos(x), hwnd=hwnd} <br />
    Light userdata: 0000028B9A6348F0
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="boxplot.php">boxplot</a>
    <a href="plotlayout.php">plotlayout</a>
    <a href="scatter.php">scatter</a>
    <a href="plot.php">plot</a>
</div>


</body>

</html>
