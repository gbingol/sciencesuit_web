<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>sequence</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>sequence</h1>
<p>
    Generates a vector of numbers at a given range with a given increment/decrement.
</p>

<p class="funcsignature">
    
    sequence(from=, to=, by=1) &rarr; Vector<br /> 
  
    <br>
    
    sequence{from=, to=, by=1} &rarr; Vector     
</p>




<h3>Arguments:</h3>
<table class="funcarguments">
    <tr>
        <td>from:</td> 
        <td>Left end of the sequence &larr; number</td>
    </tr>

    <tr>
        <td>to:</td> 
        <td>Right end of the sequence &larr; number</td>
    </tr>

    <tr>
        <td>by:</td> 
        <td>Increment/decrement &larr; number</td>
    </tr>
</table>





<p>&nbsp;</p>
<p>&nbsp;</p>





<p class="CodeCommand">
    &gt;&gt;std.sequence{from=1, to=5} <br />
    1&emsp; 2&emsp; 3&emsp; 4&emsp; 5&emsp; COL <br />
    
    <br />
    
    &gt;&gt;std.sequence{from=3, to=11, by=3} <br />
    3&emsp; 6&emsp; 9&emsp; COL <br />
    
    <br />
    
    &gt;&gt;std.sequence(1.5, 6.5, 2.3) <br />
    1.5&emsp; 3.8&emsp; 6.1&emsp; COL <br />
    
    <br />
    
    &gt;&gt;std.sequence{from=5, to=1, by=-1} <br />
    5&emsp; 4&emsp; 3&emsp; 2&emsp; 1&emsp; COL
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="linspace.php">linspace</a>
    <a href="../classes/vector.php">Vector</a>
</div>

</body>

</html>
