﻿<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Difference/Differential</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
       
      
        td
        {
            padding-left:10px;
            padding-right:10px;
        }

        table
        {
            border-collapse: collapse;
            text-align:right;
        }

        tr:nth-child(2n+1)
        {
            background-color:lightcyan;
        }

        tr:first-child
        {
            font-weight:bold;
            background-color:whitesmoke;
        }

        tr:nth-child(even)
        {
            background-color:lightyellow;
        }

        </style>
        
        
        
        <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>diff</h1>
<p>
    Computes the first order difference of a given vector or differential of 
    two vectors with respect to the first argument. 
</p>

<p class="funcsignature"> 
    diff(x=, y=nil) &rarr; Vector 
</p>

<p>&nbsp;</p>


<h3>Arguments:</h3>

<p>
    <em>x,y:</em>&nbsp;&nbsp;&nbsp; Vectors
</p>

<ul>
    <li>
        If only one argument is provided then the function returns a Vector whose elements are the 
        differences (x<sub>i+1</sub>-x<sub>i</sub>) of the given vector.
    </li>
    
    <li>
        If two arguments are provided, then the function returns a Vector whose elements are the 
        derivative (dy/dx) of the given two vectors, <em>x</em> and <em>y; </em>therefore 
        the order of vectors are important. At the end points the function uses 
        <em>forward and backward difference</em>s and elsewhere the derivative is 
        computed using <em>central differences</em>.
    </li>
</ul>
    




<p>&nbsp;</p>
<p>&nbsp;</p>



<p class="CodeCommand">
    &gt;&gt;v=std.tovector{1, 1, 3, 2, 5, 7, 9} <br />
    &gt;&gt;v <br />
    1&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 5&nbsp;&nbsp;&nbsp; 7&nbsp;&nbsp;&nbsp; 9&nbsp;&nbsp;&nbsp; COL <br />
    <br />
    &gt;&gt;std.diff(v) <br />
    0&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; -1&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; COL

</p>


<p>&nbsp;</p>
<p>&nbsp;</p>



<h3>Example</h3>
    
<p>
    In drying operations, the drying can proceed either in constant 
    or in falling drying period. In order to clearly see the trend, it is advised to 
    plot <em>t</em> vs <em>dW/dt</em>, where the latter one is the derivative of weight with respect 
    to time. The following data is collected during a dehydration operation:
</p>


<table>
    <tr>
        <td>Time (t)</td>  
        <td>Weight (W)</td>
    </tr>
    
    <tr>
        <td>0</td> 	
        <td>24.00</td>
    </tr>
    
    <tr>
        <td>10</td> 
        <td>17.40</td>
    </tr>
    <tr>
        <td>20</td>  
        <td>12.90</td>
    </tr>
    <tr>
        <td>30</td>  
        <td>9.70</td>
    </tr>
    <tr>
        <td>40</td>  
        <td>7.80</td>
    </tr>
    <tr>
        <td>50</td>  
        <td>6.20</td>
    </tr>
    <tr>
        <td>60</td>  
        <td>5.20</td>
    </tr>
    <tr>
        <td>70</td>  
        <td>4.50</td>
    </tr>
    <tr>
        <td>80</td>  
        <td>3.90</td>
    </tr>
    <tr>
        <td>90</td>  
        <td>3.50</td>
    </tr>
</table>

    

<p> &nbsp;</p>


<p>
    Copy and paste the data to a worksheet and create two vector variables, namely <em>time</em> and <em>weight</em> (see 
    <a href="../../workbook/index.php#createdatastructures">how to create vectors</a>).
</p>

<p class="CodeCommand">
    &gt;&gt;dw_dt=std.diff(time,weight) <br />

    <br />

    &gt;&gt;dw_dt <br />
    -0.66&nbsp;&nbsp;&nbsp; -0.555&nbsp;&nbsp;&nbsp; -0.385&nbsp;&nbsp;&nbsp; -0.255&nbsp;&nbsp;&nbsp; -0.175&nbsp;&nbsp;&nbsp; -0.13&nbsp;&nbsp;&nbsp; -0.085&nbsp;&nbsp;&nbsp; -0.065&nbsp;&nbsp;&nbsp; -0.05&nbsp;&nbsp;&nbsp; -0.04&nbsp;&nbsp;&nbsp; COL
</p>
    




<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="mean.php">mean</a>
    <a href="sum.php">sum</a>
    <a href="../classes/vector.php">Vector</a>
</div>

</body>
</html>
