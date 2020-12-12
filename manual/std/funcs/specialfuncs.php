<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <title>Special functions</title>
    
    <style type="text/css">
        .auto-style1 {
            color: #008080;
        }
        
        h2
        {
            color: red;
        }
        
        
    </style>
</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Special Functions</h1>




<h2 id="besselj">besselj</h2>

<p>Computes the cylindrical Bessel function of the first kind.</p>

<p class="funcsignature">
    
    besselj(number=, order=) &rarr; number <br>
    
    <br>
    
    besselj(container=, order=) &rarr; container

</p>

<p>
  where <i>container</i> can be a number or an iteratable container 
  and <i>order</i> is the order of the Bessel function
</p>

<h3>Example:</h3>
<p class="CodeCommand">
      &gt;&gt;t={0, 0.5, 1, 1.5, 2} <br>

      <br>

      &gt;&gt;std.besselj(t, 0) <br>
      1 &nbsp;&nbsp; 0.93847 &nbsp;&nbsp;	0.765198 &nbsp;&nbsp; 0.511828 &nbsp;&nbsp; 0.223891	<br>

      <br>

      &gt;&gt;std.besselj(t,1) <br>
      0 &nbsp;&nbsp; 0.242268 &nbsp;&nbsp; 0.440051 &nbsp;&nbsp; 0.557937 &nbsp;&nbsp; 0.576725	
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>



<h2 id="beta">beta</h2>
<p>Computes the beta function.</p>

<p class="funcsignature">
    
    beta(number=, y=) &rarr; number <br>
    
    <br>
    
    beta(container=, y=) &rarr; container
</p>

<br>

<img src="../images/special_beta.png" alt=""/>



<p class="CodeCommand">
    &gt;&gt;std.beta(3, 4) <br />
    0.0166667 <br />

    <br />

    &gt;&gt;t={1, 2, 3} <br />
    &gt;&gt;std.beta(t, 4) <br />
    0.25&nbsp;&nbsp;&nbsp; 0.05&nbsp;&nbsp;&nbsp; 0.0166667
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>





<h2 id="gamma">gamma</h2>
    <p>Computes the gamma function.</p>
    
<p class="funcsignature">
    
    gamma(number=) &rarr; number <br>
    
    <br>
    
    gamma(container=) &rarr; container
</p>

<br>

<img src="../images/special_gamma.png" alt=""/>


<p class="CodeCommand">
    &gt;&gt;std.gamma(4) <span class="auto-style1">--(=3!)</span> <br />
    6 <br />

    <br />

    &gt;&gt;t={1, 2, 3, 4} <br />
    &gt;&gt;std.gamma(t) <br />
    1&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 6
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="gammaln">gammaln</h2>
    
<p>Natural logarithm of the gamma function. </p>

<p class="funcsignature">
    
    gammaln(number=) &rarr; number <br>
    
    <br>
    
    gammaln(container=) &rarr; container
</p>


<p class="CodeCommand">
    &gt;&gt;std.gamma(200)  <br />
    inf <br />

    <br />

    &gt;&gt;std.gammaln(200)  <br />
    857.934
</p>


</body>

</html>
