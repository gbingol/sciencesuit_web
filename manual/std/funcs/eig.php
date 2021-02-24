<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eig values/vectors</title>

    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>










<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>
    
    
<h1>eig</h1>
<p>
    Computes eigenvalues and optionally eigenvectors.
</p>



<p class="funcsignature"> 
    eig(m=, ComputeEigenVectors=<span class="LuaKeyword">false</span>) &rarr; Array[/Lua table]  
</p>

<p>
    where parameter <em>m</em> must be a square matrix. The function returns an array of eigenvalues 
    and if parameter <em>ComputeEigenVectors</em> is<span class="LuaKeyword">true</span> then 
    a table containing arrays where the i<sup>th</sup> array of the table corresponds to 
    i<sup>th</sup> eigenvalue.
</p>



<p>&nbsp;</p>



<h3>Notes</h3>

<ul class="linespaced">
    <li>
        Before computing eigenvalues or vectors, the function carries out an 
        internal test on <em>m</em> to see whether <em>m</em> is symmetric or not, 
        and in the case of symmetric matrix, very high performance computation 
        can be performed.
    </li>
    
    <li>
        If parameter <em>m</em> is symmetric, then the eigenvalues and eigenvectors 
        contain only real numbers, otherwise only in the format of complex numbers.
    </li>
</ul>



<p>&nbsp;</p>


<p>
    Let's find both eigenvalues and eigenvectors.
</p>

<p class="CodeCommand">
    &gt;&gt;A=std.tomatrix{ {1,3}, {2,4}} <br>
    
    <br>
    
    &gt;&gt;eval, evec=std.eig(A, <span class="LuaKeyword">true</span>)<br>
    
    <br>
    
    &gt;&gt;eval <br>
    -0.372281 + 0i &emsp;  5.37228 + 0i   <br>
    
    <br>
    
    &gt;&gt;evec <br>
    Array &emsp;  Array <br>
    
    <br>
    
    &gt;&gt;evec[1]<br>
    -0.909377 + 0i   0.415974 + 0i   
</p>


<p>
    It is seen that, the eigenvalues are &lambda;<sub>1</sub>=-0.372281+0i and &lambda;<sub>2</sub>=5.37228+0i 
</p>



<p>&nbsp;</p>




<p>
    Let's take our knowledge further to test whether the results confirm the equation: Ax=&lambda;x
</p>

<p class="CodeCommand">
    <span class="LuaComment">--x=evec[1]</span><br />
    &gt;&gt;A*evec[1] <br>
    0.338544 + 0i &emsp;  -0.154859 + 0i   <br>
    
    <br>
    
    <span class="LuaComment">--&lambda;=eval[1], x=evec[1]</span><br />
    &gt;&gt;eval[1]*evec[1] <br>
    0.338544 + 0i &emsp;  -0.154859 + 0i
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="../classes/vector.php">Vector</a>
    <a href="../classes/array.php">Array</a>
    <a href="lu.php">lu</a>
    <a href="qr.php">qr</a>
    <a href="svd.php">svd</a>
</div>
    
</body>
</html>