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
    read_csv(file=, [header=true], [encode=false]) &rarr; DataFrame<br>
    
    <br>
    
    read_csv{ file=, [header=true], [encode=false]} &rarr; DataFrame
</p>

<p>
    where parameter <em>file</em> is of type string, <em>header</em> and 
    <em>encode</em> are of type <span class="LuaKeyword">boolean</span>.
</p>

<details>
    <summary><b>Notes:</b></summary>
    <ul class="linespaced">
        <li>
            If parameter <em>file</em> is specified as empty string, "", then a file dialog will be 
            shown to select the file. Relative paths ("/mydocs/...") are not accepted. While specifying a full path 
            forward-slash ("C:/users/...") must be used as path separator.
        </li>
        <li>
            If parameter <em>header</em> is set as <span class="LuaKeyword">true</span>, then
            the very first row will be considered as header.
        </li>
        
        <li>
            If parameter <em>encode</em> is set as <span class="LuaKeyword">true</span>, then
            non-ASCII characters in the file will be encoded with ASCII characters. 
        </li>
        
    </ul>
</details>
    




<p>&nbsp;</p>
<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;df=std.read_csv{ file="", header=<span class="LuaKeyword">false</span>, encode=<span class="LuaKeyword">true</span> } <br>
</p>

<img src="../images/read_csv_filedialog.png" alt=""/>

<p class="CodeCommand">
    &gt;&gt;type(df) <br>
    DataFrame
</p>


<img src="../images/read_csv_file_emptystr_head_false_encode_false.png" alt=""/>


<img src="../images/read_csv_file_emptystr_head_false_encode_true.png" alt=""/>




<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="../classes/array.php">Array</a>
    <a href="../classes/dataframe.php">DataFrame</a> 
</div>



</body>

</html>

