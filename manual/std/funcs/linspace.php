<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>linspace</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>











<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>


<h1>linspace</h1>

<p>Generates evenly spaced points in a given interval.</p>

<p class="funcsignature">
    
    linspace(a=, b=, n=) &rarr; Vector<br>
    
    <br>
    
    linspace {a=, b=, n=} &rarr; Vector
    
</p>




<p>&nbsp;</p>



<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>a:</td> 
        <td>Lower limit of the interval &larr; number</td>
    </tr>
    <tr>
        <td>b:</td>  
        <td>Upper limit of the interval &larr; number</td>
    </tr>
    <tr>
        <td>n:</td>  
        <td>Number of data points in the interval &larr; integer</td>
    </tr>
</table>





<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.linspace{a=-2, b=2, n=6} <br />
    -2&nbsp;&nbsp;&nbsp; -1.2&nbsp;&nbsp;&nbsp; -0.4&nbsp;&nbsp;&nbsp; 0.4&nbsp;&nbsp;&nbsp; 1.2&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; COL <br />

    <br />

    &gt;&gt;std.linspace(-2, 2, 6) <br />
    -2&nbsp;&nbsp;&nbsp; -1.2&nbsp;&nbsp;&nbsp; -0.4&nbsp;&nbsp;&nbsp; 0.4&nbsp;&nbsp;&nbsp; 1.2&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; COL
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>





<h3>Example</h3>
<p>
    Prove that in the interval of [-&pi;,&pi;] the functions cos(x) and sin(x) are independent.
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.linspace{a=-3.14, b=3.14, n=100} <br />

    <br />

    &gt;&gt;a=std.cos(x) <br />
    &gt;&gt;b=std.sin(x) <br />

    <br />

    &gt;&gt;std.trans(a)*b <br />
    2.17339E-15 <span class="LuaComment">--orthogonal therefore independent</span>
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="sequence.php">sequence</a>
    <a href="../classes/vector.php">Vector</a>
</div>



</body>

</html>
