<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>bisection</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
       
        .auto-style1 {
            color: #0000FF;
        }
        
        .auto-style3 {
            
            color: #800000;
        }
        
        
        table.summary
        {
            width: 60%;
            border: 1px solid;
        }
        
        table.summary td
        {
            text-align: center;
        }
        
        table.summary td:first-child
        {
            text-align: left;
            
            font-style: italic;
        }
        
        
        @media screen and (max-width: 900px)
        {
            table.summary
            {
                width: 100%;
            }
            
            table.summary td
            {
                font-size: small;
            }
        }
        
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

   
</head>





<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>bisection</h1>

<p>Finds the root of an equation of form <em>f(x)=0</em>. </p>

<p class="funcsignature">
    
    bisection (f=, a=, b=) <br>
    
    <br>
    
    bisection{f= , a= , b= , tol=1E-5, maxiter=100 , method=&quot;bf&quot;, modified=false}
    
</p>
    
<p>The function returns <em>root,</em> <em>error </em>and<em> number of iterations</em>.</p>

<p>&nbsp;</p>
    
   
<h3>Arguments:</h3>


<table class="funcarguments">
    <tr>
        <td>f:</td> 
        <td>A unary function &larr; <em>function</em></td>
    </tr>
    
    <tr>
        <td>a, b:</td>  
        <td>The interval where the root lies in &larr; <em>number</em></td>
    </tr>
    
    <tr>
        <td>tol:</td>  
        <td>Minimum tolerance for error &larr; <em>number</em></td>
    </tr>
    
    <tr>
        <td>maxiter:</td>  
        <td>Maximum number of iterations during the search for the root &larr; <em>integer</em></td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>   
        <td>&nbsp;</td>
    </tr>
    
    <tr>
        <td>method:</td> 

        <td>
            <em>"bf"</em> for brute-force (halving) <br /> 
            <em>"rf"</em> for regula falsi (false position) &larr; <em>string</em>
        </td>
    </tr>
    
    <tr>
        <td>&nbsp;</td>  
        <td>&nbsp;</td>
    </tr>
    
    <tr>
        <td>modified:</td>  
        <td><span class="auto-style1">true</span> for modified regula falsi method.</td>
    </tr>
</table>





<p>&nbsp;</p>
<p>&nbsp;</p>





<p>
    Solving the equation for <em>f(x) = x<sup>2</sup>-5 = 0</em>:
</p>

<p class="CodeCommand">
    &gt;&gt;std.bisection{f=function(x) return x^2-5 end, a=0,b=4} <br />
    2.23606	<span class="LuaComment">&emsp;&emsp; --root</span>	<br />
    7.62939e-06	<span class="LuaComment">&emsp; --error</span>     <br />
    19 &emsp;&emsp;&emsp; <span class="LuaComment">--number of iterations</span> <br />

    <br />

    &gt;&gt;std.bisection{f=function(x) return x^2-5 end, a=0,b=4, method="rf"} <br />
    2.23607&emsp; 2.9744e-06&emsp; <span class="auto-style3">12</span>	
</p>


<p>
    Please note that <em>brute force</em> method (bf) required 19 iterations, whereas <em>regula falsi</em> 
    (rf) (false position) required only 12 iterations.
</p>
    



<p>&nbsp;</p>


<p>However, for the function: <em>f(x) = x<sup>10</sup> -1 = 0</em></p>

<p class="CodeCommand">
    &gt;&gt;std.bisection{f=function(x) return x^10-1 end, a=0, b=1.3} <br />
    1 &emsp; 9.91821e-06 &emsp; <span class="auto-style3">17</span>	<br />
    <br />

    &gt;&gt;std.bisection{f=function(x) return x^10-1 end, a=0,b=1.3, method="<mark>rf</mark>"} <br />
    0.999972&emsp; 8.60722e-06&emsp; <span class="auto-style3">48</span>	<br />
    <br />

    &gt;&gt;std.bisection{f=function(x) return x^10-1 end, a=0,b=1.3, method="rf", <mark>modified=true</mark>} <br />
    0.999992&emsp; 7.21011e-06&emsp; <span class="auto-style3">25</span>	
</p>


<p>
    This time it is seen that rf without modification required 48 and with modification 25 iterations, 
    whereas bf required only 17 iterations. Therefore, although in most cases bf will require more 
    iterations than rf, this strictly depends on the nature of the function as evidenced by the above examples.
</p>
    
    



<p>&nbsp;</p>
<p>&nbsp;</p>






<h3>Definition of Error</h3>

<p>The error is defined in  the following way:</p>

<p><em>A) Brute-force (interval-halving):&nbsp;</em></p>
<img src="../images/bisection_bf_errordefinition.PNG" alt=""/>

<p>
    For example, for the function <em>f(x)=x<sup>10</sup>-1</em>, we found the root as 1 
    with an error of 9.91821E-6 after 17 iterations. 
</p>

<p>
    Therefore the error is calculated: &nbsp; Error = (1.3 - 0) / 2<sup>17</sup> = 9.91 &middot; 10 <sup>-6</sup>
</p>




<p>&nbsp;</p>


<p>
    <em>B) Regula falsi (false position):</em> 
    The errror is calculated as the difference between two consecutive iterations: Error=&verbar;X<sub>i+1</sub>-X<sub>i</sub>&verbar; 
</p>




<p>&nbsp;</p>

  


    
<h3>Modified False Position</h3>
<p>
    During the iteration, when either of the bound is used more than twice, the value of the function at 
    that bound is halved and the iteration continues. 
    
    Although there are different strategies, the method suggested by 
    <a href="https://www.amazon.com/Numerical-Methods-Engineers-Steven-Chapra/dp/007339792X/ref=dp_ob_image_bk" 
       target="_blank">Chapra and Canale</a> 
    is used. 
</p>

<div>
    <span><b>Table:</b> Number of iterations required for two different functions</span>
    <br />
    <table class="summary">
        <tr>
            <td>&nbsp;</td>
            <td><em>f(x)=x<sup>10</sup> – 1    (a=0, b=1.3)</em></td>
            <td><em>f(x)=x<sup>2</sup>-5      (a=0, b=4)</em></td>
        </tr>
        <tr>
            <td>False Position</td>
            <td>48</td>
            <td>12</td>
        </tr>
        <tr>
            <td>Modified False Position</td>
            <td>25</td>
            <td>15</td>
        </tr>
    </table>
</div>

    
<p>
    It is seen from the table that for the function <em>f(x)=x</em><sup><em>10</em></sup><em>-1</em>, 
    modification of the false position brings a considerable reduction in number of iterations, 
    whereas for the function <em>f(x)=x</em><sup><em>2</em></sup><em>-5</em>, modification 
    brings a slight disadvantage. Therefore, the selection of the methodology should be based 
    on after having an insight on the function.
</p>


    

<img src="../images/bisection%20x_10-1%20and%20x_2-5.gif" alt=""/>
<p> Notice the plateau between -1 and +1 for x<sup>10</sup>-1 </p>   


   





<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="solve.php">solve</a>
    <a href="newton.php">newton</a>
    <a href="qr.php">qr</a>
</div>

</body>
</html>