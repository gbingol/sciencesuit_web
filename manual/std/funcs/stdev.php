<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Standard Deviation</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <style>
        table.spaced td
        {
            padding-left: 10px;
            padding-right: 10px;
            
            text-align: right;
        }
        
    </style>

</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>stdev</h1>

<p>Computes the standard deviation of an iteratable container.</p>


<p class="funcsignature">
    
    stdev(Container, [choice="s"]) &rarr; number<br>
    
    <br>
    
    stdev(Matrix, [choice="s"], [axes=]) &rarr; Vector
     
</p>
    
<p>
    where <em>choice</em> "s" and "p" are for sample and population, respectively.
</p>


<p>&nbsp;</p>






<h2 id="vector">Vector</h2>

<p class="CodeCommand">
    &gt;&gt;v=std.rand(100) <br />
    &gt;&gt;std.stdev(v) <br />
    0.291
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 id="array">Array</h2>

<p>
    Array contains numeric and non-numeric entries. When computing standard deviation of  
    the entries in an array, only numeric entries are considered. Therefore, along with the result 
    the number of numeric entries considered is also reported.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp; "b" &emsp; 1 &emsp; 2 &emsp; 3.5 <br>
    
    <br>
    
    &gt;&gt;std.stdev(arr) <br>
    1.25831 <br>
    3	<br>
    
    <br>
    
    &gt;&gt;std.stdev(arr, "s") <br>
    1.25831 <br>
    3	<br>
    
    <br>
    
    &gt;&gt;std.stdev(arr, "p") <br>
    1.0274 <br>
    3	
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 id="matrix">Matrix</h2>

<div class="CodeCommand">
    
    &gt;&gt;m <br>
    <table class="spaced">
        <tr>
            <td>14</td>	
            <td>18</td> 
            <td>9</td>
        </tr>
        <tr>
            <td>7</td>	
            <td>14</td> 
            <td>8</td>
        </tr>
        <tr>
            <td>12</td>	
            <td>19</td> 
            <td>16</td>
        </tr>
        <tr>
            <td>8</td>	
            <td>13</td> 
            <td>11</td>
        </tr>
    </table>

    <br>
    
    &gt;&gt;std.stdev(m) <br>
    3.98767 <br>
    
    <br>

    &gt;&gt;std.stdev(m, "s", 0) <br>
    3.30404 &emsp;  2.94392 &emsp;  3.55903 &emsp;  COL <br>
    
    <br>

    &gt;&gt;std.stdev(m, "s", 1) <br>
    4.50925 &emsp;  3.78594 &emsp;  3.51188 &emsp;  2.51661 &emsp;  COL 
    
</div>









<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 id="container">table & other containers </h2>
<p class="CodeCommand">
    &gt;&gt;t={1, 1.5, 2, 2.5, 3} <br>
    
    <br>
    
    &gt;&gt;std.stdev(t) <br>
    0.790569 <br>
    
    <br>

    &gt;&gt;std.stdev(t, "p") <br>
    0.707107	<br>
    
    <br>
    <br>

    &gt;&gt;t2={a=10, b=11, 1, 1.5, 2, 2.5, 3} <br>
    
    <br>

    &gt;&gt;std.stdev(t2) <br>
    4.20742	
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="var.php">var</a>
    <a href="cov.php">cov</a>
</div>

</body>

</html>
