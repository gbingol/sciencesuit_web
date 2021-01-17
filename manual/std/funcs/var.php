<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Variance</title>


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

<h1>var</h1>
<p>Finds the variance of an iteratable container.</p>

<p class="funcsignature">
    
    var(Container, [choice="s"]) &rarr; number<br>
    
    <br>
    
    var(Matrix, [choice="s"], [axes=]) &rarr; Vector 
</p>
    
<p>
    where <em>choice</em> "s" and "p" are for sample and population, respectively.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="vector">Vector</h2>
<p class="CodeCommand">
    &gt;&gt;v=std.rand(100) <br />
    &gt;&gt;std.var(v) <br />
    0.085 
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 id="array">Array</h2>

<p>
    Array contains numeric and non-numeric entries. When computing variance of  
    the entries in an array, only numeric entries are considered. Therefore, along with the result 
    the number of numeric entries considered is also reported.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp; "b" &emsp; 1 &emsp; 2 &emsp; 3.5 <br>
    
    <br>
    
    &gt;&gt;std.var(arr, "s") <br>
    1.58333 <br>
    3 <br>
    
    <br>
    
    &gt;&gt;std.var(arr) <br>
    1.58333 <br>
    3 <br>
    
    <br>
    
    &gt;&gt;std.var(arr, "p") <br>
    1.05556 <br>
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
    
    &gt;&gt;std.var(m) <br>
    15.9015	<br>
    
    <br>
    
    &gt;&gt;std.var(m, "s", 0) <br>
    10.9167 &emsp;  8.66667 &emsp;  12.6667 &emsp;  COL <br>
    
    <br>
    
    &gt;&gt;std.var(m, "s", 1) <br>
    20.3333 &emsp;  14.3333 &emsp;  12.3333 &emsp;  6.33333  &emsp; COL

</div>







<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 id="container">table & other containers </h2>
<p class="CodeCommand">
    &gt;&gt;t={1, 1.5, 2, 2.5, 3} <br />
    &gt;&gt;std.var(t) <br />
    0.625	<br />

    <br />

    &gt;&gt;std.var(t, "<em>p</em>") <br />
    0.5	
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="cor.php">cor</a>
    <a href="cov.php">cov</a>
    <a href="stdev.php">stdev</a>
</div>

</body>
</html>
