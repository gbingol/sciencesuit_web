<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inverse</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        table td
        {
            text-align: right;
            
            padding-right: 6px;
            
            padding-left: 6px;
        }
    </style>
    

    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>inv</h1>
<p>Computes the inverse of a matrix</p>

<p class="funcsignature"> 
    inv(A) &rarr; Matrix   
</p>

<p>where <em>A</em> must be a square matrix.</p>



<p>&nbsp;</p>




<div class="CodeCommand">
    <p>
        &gt;&gt;m=std.tomatrix{ {1,3,2}, {4,5,6}, {7,8,9}} <br />
        &gt;&gt;m  <br />
        1&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; 2  <br />
        4&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 6  <br />
        7&nbsp;&nbsp;&nbsp; 8&nbsp;&nbsp;&nbsp; 9  <br />
    </p>
    

    <br />

    &gt;&gt;m_inv=std.inv(m)  <br />
    &gt;&gt;m_inv  <br />

    <table>
        <tr>
            <td>-0.333333</td> 
            <td>-1.22222</td> 
            <td>0.888889</td>
        </tr>
        <tr>
            <td>0.666667</td> 
            <td>-0.555556</td> 
            <td>0.222222</td>
        </tr>
        <tr>
            <td>-0.333333</td> 
            <td>1.44444</td> 
            <td>-0.777778</td></tr>
    </table>
        
    
    <p>&nbsp;</p>

    
    &gt;&gt;m*m_inv    <br />
    <table>
        <tr>
            <td>1</td> 
            <td>0</td> 
            <td>-2.2e-16</td>
        </tr>
        <tr>
            <td>0</td> 
            <td>1</td> 
            <td>-8.8e-16</td></tr>
        <tr>
            <td>0</td> 
            <td>-1.7e-15</td> 
            <td>1</td>
        </tr>
    </table>

</div>

<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="det.php">det</a>
</div>
    


</body>

</html>
