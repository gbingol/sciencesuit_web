<!DOCTYPE HTML>
<html>
<head>
		
    <title>null</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        table{
            text-align:right;
        }
        td{
            padding-left:10px;
            padding-right:10px;
        }
    </style>
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>











<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

    
    
<h1>null</h1>

<p>
    Computes the null space of a given matrix using svd decomposition.
</p>

<p class="funcsignature">    
    null (A) &rarr; nil / Matrix 
</p>

<p>
    <em>A</em> must be of type matrix. If <em>exists</em>, the function returns 
    a matrix containing the nullspace vectors.
</p>



<p>&nbsp;</p>



<p>
    In the following example, no null space exists for the matrix:
</p>



<div class="CodeCommand">
    &gt;&gt;m <br />
    <table>
        <tr>
            <td>1</td> 
            <td> 2</td>
        </tr>

        <tr>
            <td>2</td> 
            <td>3 </td>
        </tr>
    </table>

    <br />

    &gt;&gt;std.null(m) <br />
    <span class="LuaKeyword">nil</span>

</div>

 




<p>&nbsp;</p>
<p>&nbsp;</p>





<p>
    However, in the following example, the null space does exist for the matrix:
</p>

<div class="CodeCommand">
    &gt;&gt;m <br />
    
    <table>
        <tr>
            <td>1</td> <td> 2</td>
            <td> 3</td>
        </tr>

        <tr>
            <td>2</td> <td>3 </td>
            <td>5</td>
        </tr>
    </table>

    
    
    <br />

    
    
    &gt;&gt;A=std.null(m) <br />
    &gt;&gt;A <br />
    
    <table>
        <tr>
            <td>0.57735</td>
        </tr>
        <tr>
            <td>-0.57735</td>
        </tr>
        <tr>
            <td> 0.57735</td>
        </tr>
    </table>

    
    
    <br />

    
    
    &gt;&gt;type(A) <br />
    Matrix <br />

    
    
    <br />

    
    
    &gt;&gt;m*A <br />
     <table>
        <tr><td>0.00000</td></tr>
        <tr><td>0.00000</td></tr>
    </table>

</div>










<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="svd.php">svd</a>
</div>


</body>
</html>