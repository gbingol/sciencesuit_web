<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>sample</title>

    <style>
        
        .auto-style1 {
            color: #FF0000;
        }
        
        .auto-style3 {
            color: #0000FF;
            background-color: #DEDEDE;
        }
    </style>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>sample</h1>

<p>Sampling from a set of numbers with or without replacement.</p>

<p class="funcsignature">
    
    sample(x=, size=, replace=false) &rarr; Vector <br />
    
    <br>
    
    sample{x=, size=, replace=false} &rarr; Vector
    
</p>


<h3>Arguments</h3>

<table class="funcarguments">
    <tr>
        <td>x:</td> 
        <td>Sample space &larr; Vector</td>
    </tr>
    <tr>
        <td>size:</td> 
        <td>Number of samples to be drawn &larr; integer</td>
    </tr>
    <tr>
        <td>replace:</td> 
        <td>Whether to allow to put the drawn samples back to sample space &larr; boolean</td>
    </tr>

</table>





<p>&nbsp;</p>
<p>&nbsp;</p>






<p class="CodeCommand">
    &gt;&gt;SampleSpace=std.linspace{a=1, b=10, n=10} <br />
    &gt;&gt;SampleSpace <br />
    1&emsp; 2&emsp;3&emsp; 4&emsp; 5&emsp; 6&emsp; 7&emsp; 8&emsp; 9&emsp; 10&emsp; COL <br />
    
    <br />
    <br>
    &gt;&gt;std.sample(SampleSpace, 4, <span class="auto-style3">true</span>) <br />
    <span class="auto-style1">9</span>&emsp; 8&emsp; 2&emsp; <span class="auto-style1">9</span>&emsp; COL 
</p>


<p>
    It should be noted that when <em>replace=<span class="LuaKeyword">true</span></em>, same sample can be withdrawn more than once. 
</p>




<p>&nbsp;</p>




<p>
    However, if <em>replace=</em><span class="LuaKeyword"><em>false</em></span>, a drawn sample is not put back to the sample space. 
</p>

<p class="CodeCommand">
    &gt;&gt;SampleSpace=std.linspace{a=1, b=10, n=10} <br />
    &gt;&gt;SampleSpace <br />
    1 &emsp; 2 &emsp; 3 &emsp; 4 &emsp; 5 &emsp; 6 &emsp; 
    7 &emsp; 8 &emsp; 9&emsp; 10&emsp; COL <br />
    
    
    <br />

    &gt;&gt;std.sample{x=SampleSpace, size=5, replace=<span class="LuaKeyword">false</span>} <br />
    8&emsp; 9&emsp; 10&emsp; 6&emsp; 4&emsp; COL <br />

    <br />

    &gt;&gt;std.sample{x=SampleSpace, size=5, replace=<span class="LuaKeyword">false</span>} <br />
    6&emsp; 4&emsp; 8&emsp; 10&emsp; 9&emsp; COL <br />

    <br />

    &gt;&gt;std.sample{x=SampleSpace, size=5, replace=<span class="LuaKeyword">false</span>} <br />
    3&emsp; 10&emsp; 7&emsp; 4&emsp; 6&emsp; COL&nbsp;
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="rand.php">rand</a>
    <a href="linspace.php">linspace</a>
    <a href="../classes/vector.php">Vector Class</a>
</div>
 

</body>

</html>
