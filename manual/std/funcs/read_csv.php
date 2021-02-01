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



<p>&nbsp;</p>


<h3>Notes:</h3>
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

    




<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    Below is the screenshot of the csv file that we are going to read:
</p>

<img id="asciicompliant" src="../images/read_csv_file_csvfileallascii.png" alt=""/>

<p>
    Before reading the file, following are worth noting:
</p>

<ul class="linespaced">
    <li>
        Except one, there are headers for each column (such as Time, Center etc...)
    </li>
    
    <li>
        There is one column (Column D) with no data at all.
    </li>
    
    <li>
        All of the characters in the file are <a href="http://www.asciitable.com/" target="_blank">ASCII compliant</a>.
    </li>
</ul>



<p>&nbsp;</p>



<p class="CodeCommand">
        &gt;&gt;df=std.read_csv{ file="", header=<span class="LuaKeyword">true</span>} 
</p>



<p>&nbsp;</p>


<p>
    In the command above, the <em>file</em> path has not been specified therefore
    a file dialog is shown as shown below. 
    
    Furthermore, <em>header</em> is set to
    <span class="LuaKeyword">true</span>, thus first row will be considered as 
    header.
</p>


<img src="../images/read_csv_file_filedialog_datacsv.png" alt=""/>

<p>
    Once any CSV file is selected, the file will be read it into the variable, namely <em>df</em> in this case.
</p>



<p>&nbsp;</p>



<p>
    Let's see the content of <em>df</em> by running the following command:
</p>


<p class="CodeCommand">
        &gt;&gt;df
</p>

<img src="../images/read_csv_file_datacsv_outputincmdwindow.png" alt=""/>


<p>&nbsp;</p>


<p>
    Note the following in the above output:
</p>


<ul class="linespaced">
    <li>
        Except one column, all headers are read as shown in the CSV file.
    </li>
    
    <li>
        The column with no header has been assigned a header by the system.
    </li>
    
    <li>
        The columns with less data are padded with <span class="LuaKeyword">nil</span> to match the 
        column with the largest data size.
    </li>
    
     <li>
        Each row is automatically assigned a label.
    </li>
</ul>






<p>&nbsp;</p>
<p>&nbsp;</p>

<details>
    <summary><b>Tricky Basics</b></summary>
    
    <p>
        The CSV file will not always be ASCII compliant as shown in <a href="#asciicompliant">above figure</a>. 
        Consider the following file, which has non-ASCII characters (in this case some Turkish characters).
    </p>
    
    
    <img src="../images/read_csv_file_trickybasics_csvfile_sciencesuitimported.png" alt=""/>

    <p class="CodeCommand">
        &gt;&gt;df=std.read_csv{ file="", header=<span class="LuaKeyword">false</span>, encode=<span class="LuaKeyword">true</span> } <br>
    </p>

    <p>
        Selecting a different file, namely trickybasics.csv, will load it to variable <em>df</em>.
    </p>
    
    <img src="../images/read_csv_file_trickybasics_filedialog.png" alt=""/>
    
    <p>&nbsp;</p>



</details>


<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="../classes/array.php">Array</a>
    <a href="../classes/dataframe.php">DataFrame</a> 
</div>



</body>

</html>

