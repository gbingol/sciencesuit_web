<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>diag</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>





<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>
    
    
    
<h1>diag</h1>
<p>
    Finds the diagonal entries of a matrix.
</p>

<p class="funcsignature">
    
    diag(m=) &rarr; Vector
    
</p>

<p>
    where argument <em>m</em> is a matrix, square or rectangular.
</p>


<p>&nbsp;</p>



<div class="CodeCommand">
    &gt;&gt;m=std.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} } <br />
    &gt;&gt;m <br />
    <table class="matrix">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>

    </table>
    <br />
    &gt;&gt;std.diag(m) <br />
    1&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 9&nbsp;&nbsp;&nbsp; COL <br />

   <br />
    <br />

    &gt;&gt;m2=std.tomatrix{ {1, 2} , {4, 5} , {7, 8} } <br />
    &gt;&gt;m2 <br />
       <table class="matrix">
        <tr>
            <td>1</td>
            <td>2</td>

        </tr>
        <tr>
            <td>4</td>
            <td>5</td>

        </tr>
        <tr>
            <td>7</td>
            <td>8</td>

        </tr>

    </table>
    <br />
    &gt;&gt;std.diag(m2) <br />
    1&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; COL <br />

    <br />
    <br />

    &gt;&gt;m3=std.tomatrix{ {1, 2, 3} , {4, 5, 6} }
    <table class="matrix">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
    </table>
    <br />
    &gt;&gt;std.diag(m3)<br />
    1&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; COL
</div>


    
<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="../classes/vector.php">Vector</a>

    <a href="diff.php">diff</a>
    <a href="trans.php">trans</a>
    <a href="svd.php">svd</a>
</div>
    
</body>
</html>