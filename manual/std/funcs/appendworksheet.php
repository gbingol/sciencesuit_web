<!DOCTYPE HTML>
<html>
<head>
<title>appendworksheet</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
        
    <script src="/jsscripts/siteanalytics.js"></script>
</head>




<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>



<h1>appendworksheet</h1>
<p >Appends a new worksheet. </p>

<p class="funcsignature">
    appendworksheet(name=&quot;&quot;, row=1000, col=100) &rarr; Worksheet
</p>

<p>
    returns the appended worksheet. If argument <em>name</em> is not provided, then the name of the worksheet 
    is assigned automatically. Note that worksheets in a workbook must have a unique name.
</p>
    

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;ws=std.appendworksheet("new ws") <br />
    &gt;&gt;ws:name() <br />
    new ws
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="activeworksheet.php">activeworksheet</a>
    <a href="../classes/worksheet.php">Worksheet</a>
</div>
   


</body>
</html>