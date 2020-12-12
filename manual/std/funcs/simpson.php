<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Simpson</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style type="text/css">

        .auto-style1 {
            width: 50%;
            border-collapse: collapse;
        }
        .auto-style2 {
            color: #0000FF;
        }
    </style>

</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>simpson</h1>
<p>
    Computes the integration of a 1D function using 
    <a href="https://en.wikipedia.org/wiki/Simpson's_rule" target="_blank">Simpson's rule</a>.
</p>

<p class="funcsignature">
    
    simpson(f=, a=, b=) &rarr; number <br />
    
    <br>
    
    simpson{f= , a= , b= , inter= 100} &rarr; number
    
</p>

<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td><em>f</em></td>
        <td>A unary function, <em>f(x)</em></td>
    </tr>
    <tr>
        <td><em>a,b:</em></td>
        <td>Limits of the integral</td>
    </tr>
    <tr>
        <td><em>inter:</em></td>
        <td>Number of intervals in the limits [a,b]. Default value is 100</td>
    </tr>
    </table>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
    
    
<em>Example:</em> We will find the area underneath f(x)=x<sup>2</sup> in the interval of [0,3].
</p>

<p class="CodeCommand">
    &gt;&gt;std.simpson(<span class="auto-style2">function</span>(x) <span class="auto-style2">return</span> x^2 <span class="auto-style2">end</span>, 0, 3) <br />
    9	<br />
    <br />
    &gt;&gt;std.simpson{<em>f</em>=<span class="auto-style2">function</span>(x) <span class="auto-style2">return</span> x^2 <span class="auto-style2">end</span>, <em>a</em>=0, <em>b</em>=3, <em>inter</em>=20} <br />
    9	
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="cumsum.php">cumsum</a>
    <a href="cumtrapz.php">cumtrapz</a>
    <a href="trapz.php">trapz</a>
</div>


</body>

</html>
