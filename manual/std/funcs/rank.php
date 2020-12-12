<!DOCTYPE HTML>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    <title>rank</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        td
        {
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


<h1>rank</h1>

<p>
    Computes the rank of a given matrix using <a href="svd.php">svd</a> decomposition.
</p>

<p class="funcsignature">
    rank (A) &rarr; integer
</p>


<p><em>A</em> must be of type matrix. </p>



<p>&nbsp;</p>



<div class="CodeCommand">
    &gt;&gt;m
    
    <table>
        <tr>
            <td >1</td> 
            <td>2</td>
        </tr>
        <tr>
            <td>2</td> 
            <td>3</td>
        </tr>
    </table>

    <br />

    &gt;&gt;std.rank(m) <br />
    2	<br />

    <br />
    <br />

    &gt;&gt;A <br />
    <table>
        <tr>
            <td>1</td> 
            <td>2</td> 
            <td>3</td>
        </tr>
        <tr>
            <td>2</td> 
            <td>3</td> 
            <td>5</td>
        </tr>
    </table>

    <br />

    &gt;&gt;std.rank(A) <br />
    2

</div>
    





<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="null.php">null</a>
    <a href="svd.php">svd</a>
    <a href="../classes/matrix.php">Matrix Class</a>
</div>


</body>
</html>