<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complex Class</title>

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


<h1>Complex</h1>
    
<p>
    Constructs complex number in the form of rectangular of polar forms.
</p>


<p>&nbsp;</p>


<h2 id="constructing">Construction</h2>

<h3 id="rectangular">Rectangular form</h3>

<p class="funcsignature">
    std.Complex.new(real=, imag=)
</p>

<p>
    where <em>real</em> is the real part and 
    <em>imag</em> is the imaginary part of the complex number. 
    Both params must be real numbers.
</p>

<p class="CodeCommand">
    &gt;&gt;comp=std.Complex.new(2, 3)<br>

    &gt;&gt;comp <br>
    2 + 3i
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="polarform">Polar form</h3>
<p class="funcsignature">
    std.Complex.new(mag=, theta=)
</p>

<p>
    where parameter <em>mag</em> is the magnitude and 
    <em>theta</em> is the angle in radians. 
    Both params must be real numbers.
</p>

<p class="CodeCommand">
    &gt;&gt;comp=std.Complex.polar(1, math.pi/4) <br>
    
    
    &gt;&gt;comp <br>
    0.707107 + 0.707107i <br>
    
    <br>
    <br>
    
    &gt;&gt;comp=std.Complex.polar(1, -math.pi/4) <br>
    
    
    &gt;&gt;comp <br>
    0.707107 - 0.707107i
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="fromstring">From string</h3>
<p>
    Complex numbers can also be constructed from a string. 
</p>

<p class="funcsignature">
    std.Complex.new(str)
</p>


<p>
    where parameter <em>str</em> must follow the following rules.
</p>
<ol class="linespaced">
    <li>The imaginary part must be defined with the letter <em>i</em>.</li>
    <li>At least the imaginary part must be defined.</li>
    <li>If only imaginary part is defined, then the real part is assumed to be zero</li>
    <li>Real and imaginary parts can be defined in any order</li>
</ol>

<p class="CodeCommand">
    &gt;&gt;c1=std.Complex.new("2+3i")<br>
    &gt;&gt;c1 <br>
    2 + 3i <br>
    
    <br>
    
    &gt;&gt;c2=std.Complex.new("3i+2")<br>
    &gt;&gt;c2 <br>
    2 + 3i <br>
    
    <br>
    
    
    &gt;&gt;c3=std.Complex.new("3i") <br>
    &gt;&gt;c3 <br>
    0 + 3i <br>
    
    <br>
    
        
    &gt;&gt;c4=std.Complex.new("2") <br>
    <span style="color: red;">Expected format "a+bi" or "a-bi"</span>
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>










<h2 id="arithmeticops">Arithmetic Operations</h2>

<p>
    Following rules are defined:
</p>

<ol class="linespaced">
    <li>Complex <b>op</b> Complex = Complex</li>
    <li>Complex <b>op</b> RealNumber = Complex</li>
    <li>RealNumber <b>op</b> Complex = Complex</li>
</ol>

<p>
    where <b>op</b> is (+, -, *, /, ^).
</p>

<p class="CodeCommand">
    &gt;&gt;c1 <br>
    2 + 3i <br>
    
    <br>
    
    &gt;&gt;c2 <br>
    3 + 4i <br>
    
    <br>
    
    &gt;&gt;c1 + c2 <br>
    5 + 7i <br>
    
    <br>
    
    &gt;&gt;c1 - c2 <br>
    -1 - i <br>
    
    <br>
    
    &gt;&gt;c1*c2 <br>
    -6 + 17i <br>
    
    <br>
    
    &gt;&gt;c1/c2 <br>
    0.72 + 0.04i <br>
    
    <br>
    
    &gt;&gt;c1^c2 <br>
    -0.204553 + 0.896623i
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 id="memberfuncs">Member Functions</h2>

<h3 id="arg">arg</h3>

<p>
    Calculates the phase angle in radians. The returned value is in [-&pi; , &pi;].
</p>

<p class="funcsignature">
    arg() &rarr; real number
</p>

<p class="CodeCommand">    
    &gt;&gt;c1=std.Complex.new(1, 1) <br>
    &gt;&gt;c1:arg() <br>
    0.785398 <br>
    
    <br>
    
    &gt;&gt;c2=std.Complex.new(-1, 0) <br>
    &gt;&gt;c2:arg() <br>
    3.14159
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="conj">conj</h3>
<p>
    Calculates the complex conjugate.
</p>

<p class="funcsignature">
    conj() &rarr; Complex
</p>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(1, 1) <br>
    &gt;&gt;c:conj() <br>
    1 - i
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="imag">imag</h3>

<p>
    Returns the imaginary part of the complex number.
</p>

<p class="funcsignature">
    imag() &rarr; real number
</p>

<p class="CodeCommand">
    &gt;&gt;c1=std.Complex.new(3, 4) <br>
    &gt;&gt;c1:imag() <br>
    4 <br>

    <br>
    
    &gt;&gt;c2=std.Complex.polar(1, math.pi/4) <br>
    &gt;&gt;c2:imag() <br>
    0.707107
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="norm">norm</h3>

<p>
    Returns the squared magnitude 
    (also known as <a href="https://mathworld.wolfram.com/AbsoluteSquare.html" target="_blank">absolute square</a>.
    Compare with <a href="../funcs/abs.php">std.abs</a>.
</p>

<p class="funcsignature">
    norm() &rarr; real number
</p>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>

    <br>

    &gt;&gt;c:norm() <br>
    25 <br>

    <br>

    &gt;&gt;std.abs(c) <br>
    5
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="real">real</h3>

<p>
    Returns the real part of the complex number.
</p>

<p class="funcsignature">
    real() &rarr; real number
</p>

<p class="CodeCommand">
    &gt;&gt;c=std.Complex.new(3, 4) <br>
    &gt;&gt;c:real() <br>
    3
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="array.php">Array</a>
    <a href="../funcs/polyroots.php">polyroots</a>
</div>


</body>
</html>
