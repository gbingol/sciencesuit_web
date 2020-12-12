<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>rand</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        td{
            padding-left:10px;
            padding-right:10px;
        }
        .auto-style1 {
            text-decoration: underline;
            font-style:italic;
        }
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>rand</h1>

<p>
    Generates uniformly distributed random numbers in the range of (0,1).
</p>

<p class="funcsignature">
    rand(n, [m=]) &rarr; Vector / Matrix
</p>


<p>
    if argument <em>m</em> is not provided then returns a <em>Vector</em>, otherwise returns a <em>Matrix</em>.
</p>



<p>&nbsp;</p>



<h4>Implementation</h4>
<p>
    Uses <a href="dist_unif.php#runif">std.runif</a> to 
    generate the random numbers.
</p>
 



<p>&nbsp;</p>



<div class="CodeCommand">
    &gt;&gt;std.rand(3) <br />
    <table>
        <tr>
            <td>0.374314</td> 
            <td>0.35598</td> 
            <td>0.987739</td> 
            <td>COL</td>
        </tr>
    </table>

    <br />
    <br />


    &gt;&gt;std.rand(2, 2) <br />
    <table>
        <tr>
            <td>0.51407</td> 
            <td>0.19277</td>
        </tr>
        <tr>
            <td>0.36960</td> 
            <td>0.10645</td>
        </tr>
    </table>

</div>






<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="dist_unif.php#runif">runif</a>
    <a href="dist_binom.php#rbinom">rbinom</a>
    <a href="dist_chisq.php#rchisq">rchisq</a>
    <a href="dist_f.php#rf">rf</a>
    <a href="dist_norm.php#rnorm">rnorm</a>
    <a href="dist_pois.php#rpois">rpois</a>
    <a href="dist_t.php#rt">rt</a>

</div>




</body>

</html>
