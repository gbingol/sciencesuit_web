<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    <title>lu decomposition</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        table.spaced{
            text-align:right;
        }
        table.spaced td{
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>









<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>lu</h1>
<p>Finds LU decomposition of a given matrix</p>

<p class="funcsignature">   
    lu(A, method="lu")    
</p>


<p>&nbsp;</p>




<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>A:</td>  
        <td>Square or rectangular matrix</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>method:</td> 
        <td>
            <em>"lup"</em>; returns l, u and permutation matrix. <br />
            <em>"lupq"</em>; returns l, u and two permutation matrices.
        </td>
    </tr>
</table>
    
<p>&nbsp;</p>
<p>&nbsp;</p>



<p>For a square matrix:</p>

<div class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {10, -7, 0}, {-3, 2, 6} , {5, -1, 5} } <br>
    &gt;&gt; m  <br>

    <table class="spaced">
        <tr>
            <td>10</td>
            <td>-7</td>
            <td>0</td>
        </tr>
        <tr>
            <td>-3</td>
            <td>2</td>
            <td>6</td>
        </tr>
        <tr>
            <td>5</td>
            <td>-1</td>
            <td>5</td>
        </tr>
    </table>

    <br />


    &gt;&gt;l,u=std.lu(m) <br />
    &gt;&gt;l <br />
    <table class="spaced">
        <tr>
            <td>1</td>
            <td>0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>-0.3</td>
            <td>-0.04</td>
            <td>1</td>
        </tr>
        <tr>
            <td>0.5</td>
            <td>1</td>
            <td>0</td>
        </tr>
    </table>

    <br />

    &gt;&gt;u  <br />
    <table class="spaced">
        <tr>
            <td>10</td>
            <td>-7&nbsp;</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0</td>
            <td>2.5</td>
            <td>5</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>6.2</td>
        </tr>
    </table>
</div>






<p>&nbsp;</p>
<p>&nbsp;</p>







<p>For a rectangular matrix:</p>
<div class="CodeCommand">
    &gt;&gt;m  <br />

    <table class="spaced">
        <tr>
            <td>2</td>
            <td>4</td>
            <td>-1</td>
            <td>5</td>
            <td>-2</td>
        </tr>
        <tr>
            <td>-4</td>
            <td>-5</td>
            <td>3</td>
            <td>-8</td>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>-5</td>
            <td>-4</td>
            <td>1</td>
            <td>8</td>
        </tr>
        <tr>
            <td>-6</td>
            <td>0</td>
            <td>7</td>
            <td>-3</td>
            <td>1</td>
        </tr>
    </table>

    <br />

    &gt;&gt;l,u=std.lu(m)  <br />
    &gt;&gt;l  <br />

    <table class="spaced">
        <tr>
            <td>-0.62500</td>
            <td>-0.16923</td>
            <td>0.04250</td>
            <td>1.00000</td>
        </tr>
        <tr>
            <td>1.00000</td>
            <td>0.00000</td> 
            <td>0.00000</td>
            <td>0.00000</td>
        </tr>
        <tr>
            <td>-0.12500</td>
            <td>1.00000</td>
            <td>0.00000</td>
            <td>0.00000 </td>
        </tr>
        <tr>
            <td>0.37500</td>
            <td>0.07692</td>
            <td>1.00000</td>
            <td>0.00000</td>
        </tr>
    </table>

    <br />

    &gt;&gt;u  <br />
    <table class="spaced">
        <tr>
            <td>-4.00000</td>
            <td>-5.00000</td>
            <td>3.00000</td>
            <td>-8.00000</td>
            <td>1.00000</td>
        </tr>
        <tr>
            <td>1.50000</td>
            <td>-5.62500</td>
            <td>-3.62500</td>
            <td>0.00000</td>
            <td>8.12500</td>
        </tr>
        <tr>
            <td>-4.61538</td>
            <td>2.30769</td>
            <td>6.15385</td>
            <td>0.00000</td>
            <td>0.00000</td>
        </tr>
        <tr>
            <td>-0.05000</td>
            <td>-0.17500</td>
            <td>0.00000</td>
            <td>0.00000</td>
            <td>0.00000</td>
        </tr>
    </table>

    <br />

    &gt;&gt;l*u <br />

    <table class="spaced">
        <tr>
            <td>2</td>
            <td>4</td>
            <td>-1</td>
            <td>5</td>
            <td>-2</td>
        </tr>
        <tr>
            <td>-4</td>
            <td>-5</td>
            <td>3</td>
            <td>-8</td>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>-5</td>
            <td>-4</td>
            <td>1</td>
            <td>8</td>
        </tr>
        <tr>
            <td>-6</td>
            <td>0</td>
            <td>7</td>
            <td>-3</td>
            <td>1</td>
        </tr>
    </table>
</div>








<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="qr.php">qr</a>
    <a href="svd.php">svd</a>
</div>


</body>

</html>
