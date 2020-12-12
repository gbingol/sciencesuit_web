<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>trapz</title>

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

<h1>trapz</h1>
<p>Computes the integration of a 1D function or a set of discreet data.</p>

<p class="funcsignature">
    
    trapz(vec_x=, vec_y=) &rarr; number<br>
    
    <br />
    
    trapz(f=, a=, b=) &rarr; number<br>
    
    <br />
    
    trapz{f= , a= , b= , inter=100 } &rarr; number
    
</p>

<h3>Arguments</h3>
    
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
    <tr>
        <td><em>vec_x, vec_y:</em></td>
        <td>Vectors</td>
    </tr>
</table>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3>Example #1</h3>

<p>
    We will find the area underneath f(x)=x<sup>2</sup> in the interval of [0,3] <em>by generating data points</em> and then integrating.
</p>

<p class="CodeCommand">
    &gt;&gt;x=std.linspace(0, 3) <br />
    &gt;&gt;y=x^2 <br />
    <br />
    &gt;&gt;std.trapz(x, y) <br />
    9.00046
</p> 

<p>&nbsp;</p>




<h3>Example #2</h3>
<p>
    We will find the area underneath f(x)=x<sup>2</sup> in the interval of [0,3].
</p>


    <p class="CodeCommand">
        &gt;&gt;std.trapz(<span class="auto-style2">function</span>(x) <span class="auto-style2">return</span> x^2 <span class="auto-style2">end</span>, 0, 3) <br />
        9.00045 <br />
        <br />
        &gt;&gt;std.trapz{f=<span class="auto-style2">function</span>(x) <span class="auto-style2">return</span> x^2 <span class="auto-style2">end</span>, a=0, b=3, inter=50} <br />
        9.0018 
    </p>


<p>Please note that the exact value is 9. Compare the last two commands based on the choice of the argument <em>inter</em>.</p>


<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
    <a href="cumsum.php">cumsum</a>
    <a href="cumtrapz.php">cumtrapz</a>
    <a href="simpson.php">simpson</a>
</div>


</body>

</html>
