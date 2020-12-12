<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>tic toc</title>

<link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>

<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>tic,toc</h1>
<p>
    Creates and starts (tic) and then stops and destroys (toc) the timer. 
</p>

<p class="funcsignature">
    tic() <br>
    
    <br>
    
    List of Statements <br>
    
    <br>
    
    toc()
</p>

    
<p>
    The timer is started with the <em>tic()</em> function and is stopped with the <em>toc()</em> 
    function. The <em>toc()</em> function is dynamically created by the <em>tic()</em> function and is destroyed 
    upon calling the <em>toc()</em> function itself. Therefore, you cannot call the <em>toc()</em> 
    function unless you have already called the <em>tic()</em> function. 
</p>

<p>&nbsp;</p>
 

<h3>Example</h3>
<p>
    We would like to find the time elapsed to multiply two matrices 
    each of which is 1000-by-1000.

</p>

<p class="CodeCommand">
    &gt;&gt;m1=std.rand(1000, 1000) <br />
    &gt;&gt;m2=std.rand(1000, 1000) <br />

    <br />

    <span  style="color: green">--start the timer and immediately multiply</span><br>
    &gt;&gt;std.tic(); m=m1*m2; std.toc()  <br />
    <br />
    Elapsed time: 0.350 seconds.
</p>


<p>The above-mentioned time will vary depending on your computational power.</p>
<p>&nbsp;</p>
<p>
    Please note that, once <em>tic()</em> is called the timer starts. Therefore, should you have run the last command in separate 
    lines, until you call <em>toc()</em> the timer would have continued ticking.
</p>

<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="eig.php">eig</a>
    <a href="det.php">det</a>
    <a href="lu.php">lu</a>
    <a href="qr.php">qr</a>
</div>

</body>

</html>
