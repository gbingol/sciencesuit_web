<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>eig</title>

    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
      
        ul.spaced li{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
    </style>
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>










<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>
    
    
<h1>eig</h1>
<p>
    Computes the eigenvalues and eigenvectors.
</p>



<p class="funcsignature"> 
    eig(m=, ComputeEigenVectors=<span class="LuaKeyword">false</span>) &rarr; Matrix/Vector   
</p>

<p>
    Argument <em>m</em> must be a square matrix. The function also carries out an internal test on <em>m</em> 
    to see whether <em>m</em> is symmetric or not, and in the case of symmetric matrix, 
    very high performance computation can be performed. 
</p>



<p>&nbsp;</p>



<h3>Notes</h3>


<p>If m is symmetric:</p>
<ul class="spaced" style="margin-top: -12px;">
    <li>
        The function returns a Vector of eigenvalues.
    </li>
    
    <li>
        if <em>ComputeEigenVectors=</em><span class="LuaKeyword">true</span>, the function returns 
        a Vector and a Matrix: eigenvalues and eigenvectors.
    </li>
</ul>



<p>If m is NOT symmetric:</p>
<ul class="spaced" style="margin-top: -12px;">
    
    <li>
        The function returns a matrix of eigenvalues.The eigenvalues matrix is n by 2, 
        where the first column is the real and second column is the imaginary part of the eigenvalues.
    </li>
    
    <li>
        if <em>ComputeEigenVectors=</em><span class="LuaKeyword">true</span>, the function returns 2 matrices: 
        eigenvalues and eigenvectors. 
        
        <br>
        
        The eigenvalues matrix  is n by 2, where the first column is the real and second column is the imaginary part of the eigenvalues. <br> 
        The eigenvectors matrix is n by 2n, where m(n,1) and m(n,2) is the real and the imaginary part of the 
        eigenvector for the first eigenvalue and so on .
    </li>
       
</ul>





<p>&nbsp;</p>


<p>Initially, only the <em>eigenvalues </em>are found:</p>

<p class="CodeCommand">
    &gt;&gt;m=std.tomatrix{ {1,3}, {2,4}} <br />
    &gt;&gt;m       <br />
    1&nbsp;&nbsp;&nbsp; 3   <br />
    2&nbsp;&nbsp;&nbsp; 4   <br />

    <br />
    &gt;&gt;std.eig(m) <br />
    -0.372281&nbsp;&nbsp;&nbsp; 0       <br />
    5.37228&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0

</p>


<p>
    It is seen that, the eigenvalues are &lambda;<sub>1</sub>=-0.372281+0i and &lambda;<sub>2</sub>=5.37228+0i 
</p>



<p>&nbsp;</p>





<p>Now, let's find <em>eigenvectors</em>:</p>

<p class="CodeCommand">

    &gt;&gt;m1,m2=std.eig(m, <span class="LuaKeyword">true</span>) <br />
    &gt;&gt;m1  <br />
    -0.372281&nbsp;&nbsp;&nbsp; 0  <br />
    5.37228&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;      0  <br />

    <br />

    &gt;&gt;m2 <br />
    -0.909377&nbsp;&nbsp;&nbsp; 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -0.565767&nbsp;&nbsp;&nbsp; 0  <br />
    0.415974&nbsp;&nbsp;&nbsp;&nbsp; 0&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -0.824565&nbsp;&nbsp;&nbsp; 0  <br />

</p>



<p>&nbsp;</p>


<p>
    Now that we know how to interpret the results of <em>m1</em>, how are we going to interpret the result, 
    especially <em>m2 </em>? Remember: Ax=&lambda;x
</p>

<p class="CodeCommand">
    
    <span class="LuaComment">--eigenvector corresponding to &lambda;<sub>1</sub>=-0.372281</span><br />
    &gt;&gt;v=std.tovector{-0.909377, 0.415974} <br>
    
    
    <br />
    
    
    &gt;&gt;m*v <span class="LuaComment">&nbsp;-Ax</span><br />
    0.33854&nbsp;&nbsp;&nbsp; -0.15485&nbsp;&nbsp;&nbsp; COL  <br />

    <br />

    &gt;&gt;v*-0.372281  <span class="LuaComment">-- &lambda;x </span>  <br />
    0.33854&nbsp;&nbsp;&nbsp; -0.15485&nbsp;&nbsp;&nbsp; COL

</p>






<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="../classes/vector.php">Vector</a>
    <a href="lu.php">lu</a>
    <a href="qr.php">qr</a>
    <a href="svd.php">svd</a>
</div>
    
</body>
</html>