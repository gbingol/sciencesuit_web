<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">

        .Links a{
                margin-right:20px;
            }
		
        .auto-style1 {
	        color: #00B050;
        }
        .auto-style2 {
	        font-style: italic;
	        text-decoration: underline;
        }
        .auto-style3 {
	        text-decoration: underline;
        }
    </style>


    <title>newton</title>
   
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-MML-AM_CHTML'></script>
	<script>
	MathJax.Hub.Config({
	  displayAlign: "left",
	});
	</script>

</head>

<body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>



<h1>newton</h1>

<p>Designed to solve single or set of non-linear equations. </p>
<h2><strong>Syntax</strong></h2>
<p><strong>1)</strong> solve (f, x0)<br>
2<strong>)</strong> solve (t, x0)<br></p>
<h2><strong>Explanation</strong></h2>
<p><strong>1)</strong> The argument <i>x0</i> which is a number is the
initial guess.The function uses Newton-Raphson method to find the root of <em>f</em>.
<br><strong>2)</strong> The argument <i>t</i> is a lua table containing the functions and <i>x0</i>
is a vector for initial guess. The function uses the Newton method to solve the 
given set of 
non-linear equations.<br></p>
<h2>Examples</h2>
<p><i><u>Example #1:</u></i> We would like to solve the equation
x<sup>2</sup>=sin(x)<br><br>
<font color="#0070c0">function </font>f(x)
<font color="#0070c0">return </font>x^2-sin(x) <font color="#0070c0">end</font><br>
std.newton(f,0) <font color="#00b050">-- Our
initial guess of the root (solution) is 0</font></p>
<p><span class="auto-style3"><em>Output:</em></span> 0 as the root and 0 as the error. If you change
initial guess to 1, then the function will print 0.8767 as the
root and 8.64E-08 as the error.</p>
<p>&nbsp;</p>
<p><span class="auto-style2">Example #2:</span> We would like to solve x, y and z which satisfy
the following equations:</p>
<p>1.<span style="font-variant: normal"> </span>x<sup>2</sup>-y<sup>2</sup>=16<br>
2.<span style="font-variant: normal"> </span>x<sup>3</sup>-y<sup>2</sup>+z<sup>3</sup>=117<br>
3.<span style="font-variant: normal"> </span>&ndash;x<sup>2</sup>+y<sup>2</sup>+10z<sup>2</sup>=-6</p>

<p>In order to solve this set of equations, it is easier to open the
script notebook and type the equations as follows:</p>
<p style="margin-bottom: 0pt"><font color="#0070c0">function
</font>f1(x,y,z) <font color="#0070c0">return </font>x^2-y^2-16 <font color="#0070c0">end</font><br>
<font color="#0070c0">function </font>f2(x,y,z) <font color="#0070c0">return </font>x^3-y^2+z^3-117
<font color="#0070c0">end</font><br>
<font color="#0070c0">function </font>f3(x,y,z) <font color="#0070c0">return </font>-x^2+y^2+10*z^2+6
<font color="#0070c0">end</font><br>
ftable={}<font color="#00b050"> --create an empty lua table</font> <br>
ftable ={f1,f2,f3}<font color="#00b050">--a lua table containing the functions</font><br>
v0= std.totable {1,10,1} <font color="#00b050">--initial guess as a vector</font><br>
print(std.newton(ftable,v0)) -- <span class="auto-style1">This will print as 5 3 1, where x=5, y=3 and z=1</span></p>
<p style="margin-bottom: 0pt">&nbsp;</p>

<p ><a href="bisection.php">bisection</a>&nbsp;&nbsp;&nbsp; <a href="solve.php">
solve</a></p>
</body>
</html>