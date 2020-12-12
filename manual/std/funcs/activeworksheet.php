<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>activeworksheet</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
  
</head>





<body>

<?php
    $mainmenuloc = filter_input(INPUT_SERVER, "DOCUMENT_ROOT", FILTER_SANITIZE_STRING)."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>activeworksheet</h1>

<p >Finds the currently active worksheet. </p>

<p class="funcsignature">
    activeworksheet() &rarr; Worksheet 
</p>

<p>The active worksheet will change if the user switches to another worksheet or when a new worksheet is added.</p>

<p>&nbsp;</p>
<p><strong>Example:</strong> </p>

<p class="CodeCommand">
    &gt;&gt;ws=std.activeworksheet() <br />
    &gt;&gt;ws:name() <br />
    Sheet 1 <br />

    <br />

    &gt;&gt;std.appendworksheet() <br />
    &gt;&gt;std.activeworksheet():name() <br />
    Sheet 2
</p>

<p>
    Initially the workbook contains only 1 worksheet, therefore by default it is the active worksheet. 
    We then appended a new worksheet, therefore, the active worksheet changed to the appended worksheet.</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="appendworksheet.php">appendworksheet</a>
    <a href="../classes/worksheet.php">worksheet</a>
    <a href="../classes/range.php">range</a>
</div>


</body>

</html>
