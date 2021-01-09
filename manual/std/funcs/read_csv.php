<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		
    <title>read_csv</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
       .spaced li
       {
           padding-top: 6px;
           padding-bottom: 6px;
       }
    </style>
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>read_csv</h1>

<p>
    Reads a CSV file and creates a <a href="../classes/dataframe.php">DataFrame</a>.
</p>

<p class="funcsignature">
    read_csv(path=, [HasHeader=true], [UseEncoding=false]) &rarr; DataFrame<br>
    
    <br>
    
    read_csv{ path=, [HasHeader=true], [UseEncoding=false]} &rarr; DataFrame
</p>

<p>
    where parameter <em>path</em> is of type string, <em>HasHeader</em> and 
    <em>UseEncoding</em> are of type <span class="LuaKeyword">boolean</span>.
</p>

<details>
    <summary><b>Notes:</b></summary>
    <ul class="spaced">
        <li>
            If parameter <em>path</em> is specified as empty string, "", then a file dialog will be 
            shown to select the file. Relative paths are not accepted. While specifying a full path 
            forward-slash must be used as path separator.
        </li>
        <li>
            If parameter <em>HasHeader</em> is set as <span class="LuaKeyword">true</span>, then
            the very first row will be considered as header.
        </li>
        
        <li>
            If parameter <em>UseEncoding</em> is set as <span class="LuaKeyword">true</span>, then
            non-ASCII characters in the file will be encoded with ASCII characters. 
        </li>
        
    </ul>
</details>
    





<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">

</div>

</body>

</html>

