<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Workbook</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>








<body>

    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>




<h1>Workbook</h1>


<p>
    Provides great convenience for many things. With workbook you can: 
</p>


<ol class="linespaced">
    <li>
        Save your data and and load it back.
    </li>

    <li>
        Format your data for visual convenience.
    </li>

    <li>
        Import data from Lua workspace or from files. 
    </li>

    <li>
        Export data to MS Excel or other types of files.
    </li>

    <li>
        Create data structures to use in computations.
    </li>

    <li>
        Easily transfer the results your computations 
        (see 
        <a href="../std/classes/worksheet.php">Worksheet</a> and 
        <a href="../std/classes/range.php">Range</a> classes
        ).
    </li>
</ol>







<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="basics.php">Basics</a>
    <a href="import_export.php">Import / Export</a>
    <a href="createdatastructures.php">Create Data Structures</a>
    <a href="tokenize_converttext.php">Tokenize / Convert Text to Columns</a>
    <a href="datatools_removeduplicates.php">Remove Duplicates</a>
    
    
</div>

</body>

</html>
