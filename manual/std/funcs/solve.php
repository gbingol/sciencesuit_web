<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

    <title>solve</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />


    </head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>



<h1>solve</h1>
<p>Function <i>solve</i> is designed to solve a set of linear equations of Ax=b. </p>

<p class="funcsignature">   
    solve (A, b) &rarr; Vector  
</p>

<p>where argument <i>A</i> is a matrix containing the coefficients and <i>b</i> is the right-hand side vector. </p>

<p>&nbsp;</p>

<p>
    <em>Algorithm:</em> The function uses <em>QR algorithm</em> and then forward substitution to solve the given set of linear 
    equations. If the number of rows of the matrix is greater than its column (more equations than unknowns) 
    the function returns the best possible solution by solving A<sup>T</sup>Ax=A<sup>T</sup>b
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>


<p><em>Example:</em> We would like to solve the following set of linear equations.<br>
    x + 2y =5<br>
    2x + 3y =11 </p>

<p>In order to solve the above-given set of equations:</p>


<p style="display:inline-block;vertical-align:top">We form the matrix A=</p>
<table style="display:inline-block" class="matrix">
    <tr>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>2</td>
        <td>3</td>
    </tr>
</table>

<p style="display:inline-block;vertical-align:top">&nbsp; and the vector b=</p>
<table style="display:inline-block" class="matrix">
    <tr>
        <td>5</td>
    </tr>
    <tr>
        <td>11</td>
    </tr>
</table>




<p class="CodeCommand">
    &gt;&gt;std.solve(A, b) <br />
    7&nbsp;&nbsp;&nbsp; -1&nbsp;&nbsp;&nbsp; COL
</p>

<p >which means x=7 and y=-1. </p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="bisection.php">bisection</a>
    <a href="newton.php">newton</a>
    <a href="qr.php">qr</a>
</div>

</body>
</html>