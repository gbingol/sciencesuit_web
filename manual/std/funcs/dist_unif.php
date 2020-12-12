<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Uniform Distribution</title>

    
    <link href="../../../css/common.css" rel="stylesheet">

    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>
        
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"] . "/mainmenu.php";
    include $mainmenuloc;
?>


<h1>Uniform Dist</h1>

<img src="../images/dist_unif_mainequation.png" alt=""/>

<p>&nbsp;</p>


<h3>Arguments</h3>

<table class="funcarguments">
    <tr>
        <td>x:</td>
        <td>Quantile, <em> &larr; number / Vector</em></td>
    </tr>

    <tr>
        <td>p:</td>
        <td>Cumulative probability <em> &larr; number / Vector</em></td>
    </tr>

    <tr>
        <td>q:</td>
        <td>Quantile, <em> &larr; number / Vector</em></td>
    </tr>

    <tr>
        <td>min, max:</td>
        <td>Lower and upper limits of the distribution &larr; <em>number</em></td>
    </tr>

</table>








<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- ********************************************************************* -->


<h2 id="dunif">dunif</h2>

<p>Computes the density. </p>

<p class="funcsignature">
    dunif(x, min=0, max=1) &rarr; number/Vector<br>
    
    <br>
    
    dunif{x=, min=0, max=1} &rarr; number/Vector
    
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.dunif{x=0.3} <br>
    1	<br>

    <br />

    &gt;&gt;std.dunif{x=2, min=1, max=4} <br>
    0.333333	<br>
    
    <br>
    
    &gt;&gt;vec=std.tovector{1,2,3} <br>
    
    &gt;&gt;std.dunif{x=vec, min=1, max=5} <br>
    0.25&nbsp;&nbsp;&nbsp; 0.25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0.25&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; COL
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>









<!-- ********************************************************************* -->


<h2 id="punif">punif</h2>
<p>Computes the lower tail area (probability). </p>

<p class="funcsignature">
    
    punif(q=,min=0, max=1) &rarr; number/Vector <br>
    
    <br>
    
    punif{q=, min=0, max=1} &rarr; number/Vector
    
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.punif{q=0.4} <br />
    0.4	 <br />

    <br />

    &gt;&gt;std.punif{q=1, min=-1, max=3} <br />
    0.5	<br />

    <br />

    &gt;&gt;std.punif{q=std.tovector{0, 1, 2}, min=-1, max=3} <br />
    0.25&nbsp;&nbsp;&nbsp; 0.5&nbsp;&nbsp;&nbsp; 0.75&nbsp;&nbsp;&nbsp; COL <br />

    <br />

    &gt;&gt;std.punif(std.tovector{0,1}, -2, 2) <br />
    0.5&nbsp;&nbsp;&nbsp; 0.75&nbsp;&nbsp;&nbsp; COL
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>








<!-- ********************************************************************* -->


<h2 id="qunif">qunif</h2>
<p>Computes the lower tail quantile </p>

<p class="funcsignature">
    
    qunif (p=,min=0, max=1) &rarr; number/Vector<br>
    
    <br>
    
    qunif {p=, min=0, max=1} &rarr; number/Vector
    
</p>
<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.qunif{p=0.5} <br />
    0.5	<br />

    <br />

    &gt;&gt;std.qunif{p=0.5, min=1, max=5} <br />
    3	<br />

    <br />
    <br />

    &gt;&gt;std.qunif{p=std.tovector{0, 0.25, 0.50, 0.75}, min=1, max=5} <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />

    <br />

    &gt;&gt;std.qunif(std.tovector{0, 0.25, 0.50, 0.75}, 1, 5) <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- ********************************************************************* -->



<h2 id="runif">runif</h2>

<p>Generates uniformly distributed random numbers.</p>

<p class="funcsignature">
    
    runif(n=, min=0, max=1) &rarr; number/Vector <br>
    
    <br>
    
    runif{n=, min=0, max=1} &rarr; number/Vector
    
</p>
<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;std.runif(1) <br />
    0.235931	<br />

    <br />

    &gt;&gt;std.runif(3) <br />
    0.920477&nbsp;&nbsp;&nbsp; 0.586343&nbsp;&nbsp;&nbsp; 0.109749&nbsp;&nbsp;&nbsp; COL  <br />

    <br />
    <br />

    &gt;&gt;std.runif{n=1, min=0, max=3} <br />
    1.97154	<br />

    <br />

    &gt;&gt;std.runif{n=4, min=0, max=3} <br />
    2.8323&nbsp;&nbsp;&nbsp; 1.42823&nbsp;&nbsp;&nbsp; 2.77613&nbsp;&nbsp;&nbsp; 1.99111&nbsp;&nbsp;&nbsp; COL
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="dist_binom.php">Binomial Dist</a>
    <a href="dist_pois.php">Poisson Dist</a>
    <a href="dist_wilcox_signrank.php">Wilcoxon Dist</a>
</div>
    

</body>

</html>
