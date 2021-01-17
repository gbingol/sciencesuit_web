<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>median</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>








<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>median</h1>

<p>
    Computes the median of an <a href="../index.php">iteratable container</a>.
</p>



<p class="funcsignature">   
    median(container) &rarr; number   
</p>



<p>&nbsp;</p>


<div class="CodeCommand">
    &gt;&gt;t={3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;std.median(t) <br />
    3.5 <br />

    
    
    <br />

    
    
    &gt;&gt;t={a=3, b=5, c=2, d=1, e=7, f=4} <br />
    &gt;&gt;std.median(t) <br />
    3.5	<br />

    
    
    
    
    <br />
    <br />

    
    
    
    &gt;&gt;v=std.tovector{3, 5, 2, 1, 7, 4} <br />
    &gt;&gt;v <br />
    3 &emsp; 5 &emsp; 2 &emsp; 1 &emsp; 7 &emsp; 4 &emsp; COL <br />
    <br />
    &gt;&gt;std.median(v) <br />
    3.5 <br />

    
    
    
    <br />
    <br />
    
    
    

    &gt;&gt;m  
    
    <table class="matrix">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
        </tr>
    </table>
    
    <br>

    &gt;&gt;std.median(m) <br />
    5	
</div>







<p>&nbsp;</p>
<p>&nbsp;</p>




    

<div class="RelatedLinks">
    <a href="quantile.php">quantile</a>
    <a href="minmax.php#min">min</a>
    <a href="mean.php">mean</a>
    <a href="minmax.php#max">max</a>
</div>

</body>

</html>
