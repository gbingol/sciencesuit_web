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
    Represents 1D polynomials, which is in the form of 
    a<sub>n</sub>x<sup>n</sup> +  a<sub>n-1</sub>x<sup>n-1</sup> + ... + a<sub>0</sub>
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
    <li>Polynomial <b>op</b> Polynomial = Polynomial</li>
    <li>Real number <b>op</b> Polynomial = Polynomial</li>
    <li>Polynomial <b>op</b> Real number = Polynomial</li>
</ol>

<p>
    where <b>op</b> is (+, -, *, /).
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
    0.5x + 0.25 <br>

    <br>
    <br>

    &gt;&gt;p2/p1 <br>
    <span style="color: red;">Degree of dividend is smaller than divisor.</span>

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
    &gt;&gt;p1=std.Polynomial.new{1, 2, 3} <br>
    &gt;&gt;p1 <br>
    x^2 + 2x + 3 <br>

    <br>

    &gt;&gt;p1:coeffs() <br>
    1 &emsp; 2 &emsp; 3  &emsp; COL <br>

    <br>
    <br>
    
    &gt;&gt;p2=std.Polynomial.new{1} <br>
    &gt;&gt;p2 <br>
    1 <br>

    <br>

    &gt;&gt;p2:coeffs() <br>
    1
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
    &gt;&gt;p0=std.Polynomial.new{1} <br>
    &gt;&gt;p0 <br>
    1 <br>

    <br>

    &gt;&gt;p0:degree() <br>
    0


    <br>
    <br>
    <br>

    &gt;&gt;p1=std.Polynomial.new{1, 2} <br>
    &gt;&gt;p1 <br>
    x + 2 <br>

    <br>

    &gt;&gt;p1:degree() <br>
    1 <br>

    <br>
    <br>
    <br>


    &gt;&gt;p2=std.Polynomial.new{1, 2, 3}  <br>
    &gt;&gt;p2  <br>
    x^2 + 2x + 3  <br>

    <br>

    &gt;&gt;p2:degree()
    2
</p>












<p>&nbsp;</p>
<p>&nbsp;</p>












<h3 class="head_l3" id="deriv">deriv</h3>

<p>
    Returns the m<sup>th</sup> order derivative. 
</p>

<p class="funcsignature">
    deriv(m=1) &rarr; Polynomial 
</p>

<p>
    where parameter <em>m</em> is the order of derivative and must be &ge;1 
</p>



<p class="CodeCommand">
    &gt;&gt;p=std.Polynomial.new{1, 2, 3, 4} <br>
    &gt;&gt;p <br>
    x^3 + 2x^2 + 3x + 4 <br>

    <br>

    &gt;&gt;p:deriv() <br>
    3x^2 + 4x + 3 <br>

    <br>

    &gt;&gt;p:deriv(2) <br>
    6x + 4 <br>

    <br>

    &gt;&gt;p:deriv(3) <br>
    6 <br>

    <br>

    &gt;&gt;p:deriv(4) <br>
    0 <br>

    <br>

    &gt;&gt;p:deriv(5) <br>
    0
</p>















<p>&nbsp;</p>
<p>&nbsp;</p>














<h3 class="head_l3" id="div">div</h3>

<p>
    Returns quotient and remainder. 
</p>

<p class="funcsignature">
    div(p=) &rarr; Polynomial , Polynomial
</p>

<p>
    where parameter <em>p</em> is the divisor and returns quotient and remainder in the respective order.
</p>

<p class="CodeCommand">
    &gt;&gt;p1=std.Polynomial.new{1, 0, 2} <br>
    &gt;&gt;p2=std.Polynomial.new{1, 2} <br>

    <br>

    &gt;&gt;p1 <br>
    x^2 + 2 <br>

    <br>

    &gt;&gt;p2 <br>
    x + 2 <br>

    <br>
    <br>

    &gt;&gt;p1/p2 <br>
    x - 2 <br>

    <br>
    <br>

    &gt;&gt;p1:div(p2) <br>
    x - 2 <br>
    6
</p>


<p>
    Please notice the difference between <em>p1/p2</em> and <em>p1:div(p2)</em>. Please also note that 
    <em>p1/p2</em> and <em>p1:div(p2)</em> have the same performance.
</p>












<p>&nbsp;</p>
<p>&nbsp;</p>












<h3 class="head_l3" id="eval">eval</h3>

<p>
    Evaluates the polynomial.
</p>

<p class="funcsignature">
    eval (param=) &rarr; type(param)
</p>

<p>
    where parameter <em>param</em> can be real or complex number, 
    Lua table (all entries must be valid real numbers) or Vector.
</p>


<p>&nbsp;</p>


<details>
    <summary>Note on algorithm:</summary>
    <p>
        The function uses 
        <a href="https://en.wikipedia.org/wiki/Horner's_method" target="_blank">Horner's method</a> 
        to evaluate the polynom.
    </p>
</details>


<p>&nbsp;</p>



<p class="CodeCommand">
    &gt;&gt;p=std.Polynomial.new{1, 0, 2} <br>
    &gt;&gt;p <br>
    x^2 + 2 <br>

    <br>

    &gt;&gt;p:eval(3) <br>
    11 <br>

    <br>

    &gt;&gt;p:eval{1, 2, 3} <br>
    3 &emsp; 6 &emsp; 11 <br>

    <br>

    &gt;&gt;p:eval(std.util.tovector{1, 2, 3}) <br>
    3 &emsp; 6 &emsp; 11 &emsp; COL <br>

    <br>

    &gt;&gt;p:eval(std.Complex.new(1,1)) <br>
    2 + 2i
</p>


<p>&nbsp;</p>

<p>
    Please note that instead of p:eval(param), it is also possible to use p(param).
</p>

<p class="CodeCommand">
    &gt;&gt;p(3) <br>
    11 <br>

    <br>

    &gt;&gt;p{1, 2, 3} <br>
    3 &emsp; 6 &emsp; 11 <br>

    <br>

    &gt;&gt;p(std.util.tovector{1, 2, 3}) <br>
    3 &emsp; 6 &emsp; 11 &emsp; COL <br>

    <br>

    &gt;&gt;p(std.Complex.new(1,1)) <br>
    2 + 2i
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>










<h3 class="head_l3" id="integ">integ</h3>

<p>
    Returns the m<sup>th</sup> order integral.
</p>

<p class="funcsignature">
    integ([m=1], [k=0.0, ...]) &rarr; Polynomial <br>

    <br>

    integ{[m=1], [k=0.0, ...]} &rarr; Polynomial <br>
</p>

<p>
    where parameter <em>m</em> is the order of integration 
    and <em>k</em> is the integration constant(s) which is/are by default 0.0. <br>

    <br>

    Parameter <em>k</em> can be real number, Lua table (all entries real numbers) or a
    Vector. When provided if the order of integration and the number of integration constants 
    does not match, constants are padded with zeros.
</p>


<p class="CodeCommand">
    &gt;&gt;p=std.Polynomial.new{1, 0, 2} <br>
    &gt;&gt;p <br>
    x^2 + 2 <br>

    <br>

    &gt;&gt;p:integ() <br>
    0.333333x^3 + 2x <br>

    <br>

    &gt;&gt;p:integ(1, 5) <br>
    0.333333x^3 + 2x + 5 <br>

    <br>

    <span class="LuaComment">Integration constants are all zeros</span><br>
    &gt;&gt;p:integ(2) <br>
    0.0833333x^4 + x^2 <br>

    <br>

    <span class="LuaComment">Integration constants are all different than zeros</span><br>
    &gt;&gt;p:integ(2, {3, 5}) <br>
    0.0833333x^4 + x^2 + 3x + 5 <br>

    <br>

    <span class="LuaComment">Integration constants are padded with zeros</span><br>
    &gt;&gt;p:integ(2, {3}) <br>
    0.0833333x^4 + x^2 + 3x
</p>


<p>
    Please notice the difference in the last three commands where when integration constants are all zeros, 
    when integration constants are all different than zeros and when order of integration is greater than 
    the provided number of integration constants. All these scenarios yielded different polynomials.
</p>


<p>&nbsp;</p>


<p>
    It is also possible to work with named arguments:
</p>

<p class="CodeCommand">
    &gt;&gt;p:integ{} <br>
    0.333333x^3 + 2x <br>

    <br>

    &gt;&gt;p:integ{m=1, k=5} <br>
    0.333333x^3 + 2x + 5 <br>

    <br>

    &gt;&gt;p:integ{m=2} <br>
    0.0833333x^4 + x^2 <br>

    <br>

    &gt;&gt;p:integ{m=2, k={3, 5} } <br>
    0.0833333x^4 + x^2 + 3x + 5 <br>

    <br>

    &gt;&gt;p:integ{m=2, k={3} } <br>
    0.0833333x^4 + x^2 + 3x
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 class="head_l3" id="roots">roots</h3>

<p>
    Finds all the roots (real, complex).
</p>

<p class="funcsignature">
    roots() &rarr; real number / Array
</p>

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




<h4 id="degree_1">n=1</h4>

<p>
    The return type will be a real number.
</p>

<p>
    Working on the simple equation: 2x - 5 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;p=std.Polynom.new{2, -5} <br>
    &gt;&gt;p:roots() <br>
    2.5
</p>




<p>&nbsp;</p>





<h4 id="degree_2">n=2</h4>
<p>
    The return value will be an array containing real/complex numbers.
</p>

<p>&nbsp;</p>

<p>
    Polynom with real roots: 2x<sup>2</sup> - x - 10 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;p=std.Polynom.new{2, -1, -10} <br>
    &gt;&gt;p:yroots() <br>
    2.5 &emsp; -2
</p>


<p>&nbsp;</p>


<p>
    Polynom with complex roots: x<sup>2</sup> + 1 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;p=std.Polynom.new{1, 0, 1} <br>
    &gt;&gt;p:roots() <br>
    i &emsp;  -i   
</p>





<p>&nbsp;</p>






<h4 id="degree_3">n=3</h4>
<p>
    The return value will be an array containing real/complex numbers.
</p>

<p>&nbsp;</p>

<p>
    Polynom with real and complex roots: 2x<sup>3</sup> - 5x<sup>2</sup> + 2x - 5 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;p=std.Polynom.new{2, -5, 2, -5} <br>
    &gt;&gt;p:roots() <br>
    2.5 &emsp; i &emsp; -i
</p>


<p>&nbsp;</p>


<p>
    Polynom with only real roots: x<sup>3</sup> - 6x<sup>2</sup> + 11x - 6 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;p=std.Polynom.new{1, -6, 11, -6} <br>
    &gt;&gt;p:roots() <br>
    1 &emsp; 3 &emsp; 2   
</p>






<p>&nbsp;</p>





<h4 id="degree_4">n=4</h4>
<p>
    The return value will be an array containing complex numbers.
</p>

<p>&nbsp;</p>

<p>
    Polynom with only complex roots: x<sup>4</sup> + 1 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;p=std.Polynom.new{1, 0, 0, 0, 1} <br>
    &gt;&gt;p:roots() <br>
    -0.707107 + 0.707107i &emsp; -0.707107 - 0.707107i &emsp;  0.707107 + 0.707107i &emsp;  0.707107 - 0.707107i
</p>


<p>&nbsp;</p>

<p>
    Polynom with real and complex roots: 2x<sup>4</sup> + x<sup>2</sup> - 1 = 0
</p>

<p class="CodeCommand">
    &gt;&gt;p=std.Polynom.new{2, 0, 1, 0, -1} <br>
    &gt;&gt;p:roots() <br>
    1.27202i &emsp;  - 1.27202i &emsp;  0.786151  &emsp; -0.786151  
</p>











<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="array.php">Array</a>
    <a href="complex.php">Complex</a>
    <a href="../funcs/polyfit.php">polyfit</a>
</div>


</body>
</html>
