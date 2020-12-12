<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>QR Decomposition</title>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>

        td
        {
            padding-left: 10px; 
            padding-right: 10px; 
            text-align: right;
        }
    </style>
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>qr</h1>

<p>Finds QR decomposition of a matrix</p>

<p class="funcsignature">
    qr(A) &rarr; Matrix, Matrix
</p>

<p>
    where<em> A</em> must be of type matrix, either square or rectangular. The function returns two matrices, 
    <em>q</em> and <em>r</em>, where <em>q</em> is an orthonormal matrix.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="CodeCommand">

    &gt;&gt;A    

    <table>
        <tr>
            <td>1</td>
            <td>3</td>
        </tr>
        <tr>
            <td>2</td>
            <td>4</td>
        </tr>
    </table>

    <br />

    &gt;&gt;q, r=std.qr(A) <br />

     <br />

    &gt;&gt;q
    <table>
        <tr>
            <td>-0.44721</td>
            <td>-0.89443</td>
        </tr>
        <tr>
            <td>-0.89443</td>
            <td>0.44721</td>
        </tr>
    </table>

    <br />

    &gt;&gt;r <br />
    
    <table>
        <tr>
            <td>-2.23607</td>
            <td>-4.91935</td>
        </tr>
        <tr>
            <td>0</td>
            <td>-0.89443</td>
        </tr>
    </table>


</div>





<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="lu.php">lu</a>
    <a href="svd.php">svd</a>
</div>


</body>

</html>
