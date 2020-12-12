<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>size</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

</head>

<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>

<h1>size</h1>
<p>Finds the size of the given container</p>

<p class="funcsignature">
    size(container) &rarr; integer(s)
</p>
    <p>&nbsp;</p>

<h3>Argument: </h3>
<p><em>container</em> can be the following options:</p>
<table class="funcarguments">
    <tr>
        <td>Matrix:</td> 
        <td>Number of rows and columns </td>
    </tr>
    <tr>
        <td>Range:</td> 
        <td>Number of rows and columns</td>
    </tr>
    <tr>
        <td>Vector:</td> 
        <td>Length</td>
    </tr>
    <tr>
        <td>Worksheet:</td> 
        <td>Number of rows and columns</td>
    </tr>
    
</table>


<p>&nbsp;</p>

<p><span style="color: red;">Pitfall</span>: Please note that the in-built operator for length, #, returns only a single integer. For example, for a 3 by 4 matrix 
    # operator will return 12, whereas <em>std.size</em> will return number of rows and number of columns.
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<p class="CodeCommand">
    
    &gt;&gt;range=Range.new("Sheet 1!A1:B5") <br />
    &gt;&gt;std.size(range) <br />
    5&nbsp;&nbsp;&nbsp; 2 <br />

    <br />

    &gt;&gt;m=std.rand(3,4) <br />
    &gt;&gt;std.size(m) <br />
    3&nbsp;&nbsp;&nbsp; 4 <br />

    <br />

    &gt;&gt;v=std.rand(4) <br />
    &gt;&gt;std.size(v) <br />
    4	
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="../classes/vector.php">Vector</a>
    <a href="../classes/range.php">Range</a>
    <a href="../classes/workbook.php">Workbook</a>
    <a href="../classes/worksheet.php">Worksheet</a>
</div>


</body>

</html>
