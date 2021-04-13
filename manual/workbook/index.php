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
    It is very useful to save/load, format and manipulate data. You can also create 
    several data structures directly from the data in the workbook.
</p>



<p>
    Furthermore, ScienceSuit allows you not only enter or manipulate data in the workbook manually but also through
    its scripting facilities. By using  <a href="../std/classes/worksheet.php">Worksheet Class</a> and 
    the <a href="../std/classes/range.php">Range Class</a>, you can transfer the results of your computation 
    (formatted/unformatted) easily to the workbook.
</p>






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
