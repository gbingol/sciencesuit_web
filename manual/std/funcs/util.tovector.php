<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Convert to Vector</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .auto-style1 {
            color: #008080;
            background-color: #DEDEDE;
        }
    </style>

</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>tovector</h1>
<p>
    Converts a given iteratable container to a <a href="../classes/vector.php">Vector</a> data type.

</p>

<p class="funcsignature">
    tovector(container=) &rarr; nil / Vector, integer 
</p>


<p>
    Please note that Vector can only contain numeric values. Therefore, if the parameter <i>container</i> 
    contains non-numeric entries, they are skipped. The function reports the number of non-numeric entries 
    it has encountered if it can successfully create a Vector.
</p>

<p>&nbsp;</p>




<h3>Lua Table</h3>
<p class="CodeCommand">
    <span class="auto-style1">--table contains 3 numeric and 2 non-numeric entries </span> <br />
    &gt;&gt;t={1, 2, "a", 3, "b"} <br />

    <br />

    &gt;&gt;std.tovector(t) <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; COL <br />
    2	
</p>



<p>&nbsp;</p>





<h3><a href="../classes/matrix.php">Matrix</a></h3>
<p class="CodeCommand">
    &gt;&gt;m=std.tomatrix{ {1, 2} , {3, 4} } <br />
    &gt;&gt;m <br />
       1&nbsp;&nbsp;&nbsp; 2 <br />
       3&nbsp;&nbsp;&nbsp; 4 <br />

    <br />

    &gt;&gt;std.tovector(m) <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; 4&nbsp;&nbsp;&nbsp; COL <br />
    0	
</p>


<p>&nbsp;</p>




<h3><a href="../classes/range.php">Range</a></h3>

<img src="../images/tovector_range.png" alt=""/>

<p class="CodeCommand">
    &gt;&gt;std.tovector(rng) <br>
    1 &nbsp;&nbsp;&nbsp;  2 &nbsp;&nbsp;&nbsp;  3 &nbsp;&nbsp;&nbsp;  COL <br>
    3	
</p>


<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="toarray.php">std.toarray</a>
    <a href="tomatrix.php">std.tomatrix</a>
</div>


</body>

</html>
