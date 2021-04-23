<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polynomial Class</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
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


<h1>Polynomial</h1>
    
<p>
    A class to work with polynomials, which is 
    in the form of a<sub>n</sub>x<sup>n</sup> +  a<sub>n-1</sub>x<sup>n-1</sup> + ... + a<sub>0</sub>
</p>


<p>&nbsp;</p>


<h2 class="head_l2" id="constructing">Construction</h2>

<p class="funcsignature">
    std.Polynomial.new(param)
</p>

<p>
    where <em>param</em> can be of type real number, 
    <a href="vector.php">Vector</a> or Lua table containing only real numbers.
</p>


<details>
    <summary>Notes</summary>
    <ol class="linespaced">
        <li>
            When only real number is used, then a zero degree polynomial is constructed.
        </li>

        <li>
            When Lua table is used, all entries of the table must be valid real numbers.
        </li>

        <li>
            If order of polynomial is greater than 0 and 
            &mid;a<sub>n</sub>&mid; &lt; 10<sup>-12</sup>, then 
            a<sub>n</sub> is removed, therefore 
            a<sub>n-1</sub> becomes a<sub>n</sub>.
        </li>
    </ol>
</details>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;p1=std.Polynomial.new(0) <br>
    &gt;&gt;p1 <br>
    0 <br>

    <br>

    &gt;&gt;p2=std.Polynomial.new(1) <br>
    &gt;&gt;p2 <br>
    1 <br>

    <br>
    <br>

    &gt;&gt;p3=std.Polynomial.new{1, 2} <br>
    &gt;&gt;p3 <br>
    x + 2 <br>

    <br>

    &gt;&gt;p4=std.Polynomial.new{1, 2, 3} <br>
    &gt;&gt;p4 <br>
    x^2 + 2x + 3 <br>

    <br>
    <br>
    
    &gt;&gt;vec=std.util.tovector{1, 2, 3} <br>
    &gt;&gt;p5=std.Polynomial.new(vec) <br>
    &gt;&gt;p5 <br>
    x^2 + 2x + 3

</p>











<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>










<h2 class="head_l2" id="arithmeticops">Arithmetic Operations</h2>

<p>
    Following rules are defined:
</p>

<ol class="linespaced">
    <li>
        Polynomial <b>op</b> Polynomial = Polynomial <br>

        (uses <a href="https://www.boost.org/doc/libs/1_76_0/libs/math/doc/html/math_toolkit/polynomials.html"
        target="_blank">boost library</a>)
    </li>
    <li>Real number <b>op</b> Polynomial = Polynomial.</li>
    <li>Polynomial <b>op</b> Real number = Polynomial</li>
</ol>

<p>
    where <b>op</b> is (+, -, *, /, ^).
</p>

<p class="CodeCommand">
    &gt;&gt;p1=std.Polynomial.new{1, 2, 3} <br>
    &gt;&gt;p2=std.Polynomial.new{2, 3} <br>

    <br>

    &gt;&gt;p1 <br>
    x^2 + 2x + 3 <br>

    <br>

    &gt;&gt;p2 <br>
    2x + 3 <br>

    <br>
    <br>

    &gt;&gt;p1+p2 <br>
    x^2 + 4x + 6 <br>

    <br>
    <br>

    &gt;&gt;p1-p2 <br>
    x^2 <br>

    <br>
    <br>

    &gt;&gt;p1*p2 <br>
    2x^3 + 7x^2 + 12x + 9 <br>

    <br>
    <br>

    &gt;&gt;p1/p2 <br>
    0.5x + 0.25
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 class="head_l2" id="memberfuncs">Member Functions</h2>

<h3 class="head_l3" id="coeffs">coeffs</h3>

<p>
    Returns the coefficients.
</p>

<p class="funcsignature">
    coeffs() &rarr; real number / Vector
</p>

<p class="CodeCommand">    
    
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 class="head_l3" id="clone">clone</h3>
<p>
    Makes an exact copy.
</p>

<p class="funcsignature">
    clone() &rarr; Polynomial
</p>

<p class="CodeCommand">
    
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 class="head_l3" id="degree">degree</h3>

<p>
    Returns the degree of the polynomial.
</p>

<p class="funcsignature">
    degree() &rarr; integer
</p>

<p class="CodeCommand">
    
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 class="head_l3" id="deriv">deriv</h3>

<p>
    Returns the m<sup>th</sup> order derivative. 
</p>

<p class="funcsignature">
    deriv(m=1) &rarr; Polynomial <br>

    <br>

    deriv{m=1} &rarr; Polynomial
</p>

<p class="CodeCommand">
    
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 class="head_l3" id="integ">integ</h3>

<p>
    Returns the m<sup>th</sup> order integral.
</p>

<p class="funcsignature">
    integ(m=1, [constants=]) &rarr; Polynomial <br>

    <br>

    integ{m=1, [constants=]} &rarr; Polynomial <br>
</p>

<p class="CodeCommand">
   
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 class="head_l3" id="roots">roots</h3>

<p>
    Finds the roots of the polynomial.
</p>

<p class="funcsignature">
    
</p>

<p class="CodeCommand">
   
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="array.php">Array</a>
    <a href="../funcs/polyroots.php">polyroots</a>
</div>


</body>
</html>
