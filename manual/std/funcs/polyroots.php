<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>polyroots</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <script src="/jsscripts/siteanalytics.js"></script>
    
    
</head>


<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    
    
 

<h1>polyroots</h1>
    
<p>
    Finds all the roots (real, complex) of a polynomial in the form of a<sub>n</sub>x<sup>n</sup> + ... + a<sub>0</sub>.
</p>

<p class="funcsignature">
    polyroots(vec=) &rarr; real number(s) / Array
</p>

<p>
    where parameter <em>vec</em> must be a vector containing the coefficients of the polynom and the function returns either 
    real number(s) or an Array of real/complex numbers.
</p>



<p>&nbsp;</p>



<details>
    <summary>Note on algorithm:</summary>

    <p>
        The applied algorithm depends on the order (<em>n</em>) of the polynomial.
    </p>

    <ol>
        <li>n=1, directly solving the simple equation.</li>
        <li>n=2 and n=3, application of the well-known equations to find the roots.</li>
        <li>
            n>3, forms <a href="https://en.wikipedia.org/wiki/Companion_matrix" target="_blank">companion matrix</a> 
            and returns eigen values as roots.
        </li>
    </ol>


</details>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="degree_1">n=1</h3>

<p>
    The return type will be a real number.
</p>

<p>
    Working on the simple equation: 2x - 5 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{2, -5} <br>
    &gt;&gt;std.polyroots(v) <br>
    2.5
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="degree_2">n=2</h3>
<p>
    The return value will be an array containing real/complex numbers.
</p>

<p>&nbsp;</p>

<p>
    Polynom with real roots: 2x<sup>2</sup> - x - 10 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{2, -1, -10} <br>
    &gt;&gt;std.polyroots(v) <br>
    2.5 &emsp; -2
</p>


<p>&nbsp;</p>


<p>
    Polynom with complex roots: x<sup>2</sup> + 1 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 0, 1} <br>
    &gt;&gt;std.polyroots(v) <br>
    i &emsp;  -i   
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="degree_3">n=3</h3>
<p>
    The return value will be an array containing real/complex numbers.
</p>

<p>&nbsp;</p>

<p>
    Polynom with real and complex roots: 2x<sup>3</sup> - 5x<sup>2</sup> + 2x - 5 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{2, -5, 2, -5} <br>
    &gt;&gt;std.polyroots(v) <br>
    2.5 &emsp; i &emsp; -i
</p>


<p>&nbsp;</p>


<p>
    Polynom with only real roots: x<sup>3</sup> - 6x<sup>2</sup> + 11x - 6 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, -6, 11, -6} <br>
    &gt;&gt;std.polyroots(v) <br>
    1 &emsp; 3 &emsp; 2   
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="degree_4">n=4</h3>
<p>
    The return value will be an array containing complex numbers.
</p>

<p>&nbsp;</p>

<p>
    Polynom containing only complex roots: x<sup>4</sup> + 1 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 0, 0, 0, 1} <br>
    &gt;&gt;std.polyroots(v) <br>
    -0.707107 + 0.707107i &emsp; -0.707107 - 0.707107i &emsp;  0.707107 + 0.707107i &emsp;  0.707107 - 0.707107i
</p>


<p>&nbsp;</p>

<p>
    Polynom containing real and complex roots: 2x<sup>4</sup> + x<sup>2</sup> - 1 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{2, 0, 1, 0, -1} <br>
    &gt;&gt;std.polyroots(v) <br>
    1.27202i &emsp;  - 1.27202i &emsp;  0.786151  &emsp; -0.786151  
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="bisection.php">bisection</a>
    <a href="muller.php">muller</a>
    <a href="newton.php">newton</a>
</div>

</body>
</html>
