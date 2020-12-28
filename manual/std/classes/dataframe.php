<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataFrame Class</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
	
    <style>
		
       .Links a{
            margin-right:20px;
        }

	    .auto-style1 {
            color: #008080;
        }
        .auto-style2 {
            background-color: #FFFF00;
        }

	    .auto-style3 {
            background-color: #66FFFF;
        }

	    .auto-style4 {
            color: #800080;
        }
        .auto-style5 {
            color: #0000FF;
        }
        
        ul.spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;
        }
        
        table.padded td
        {
            padding: 6px;
        }

    </style>

    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
    
</head>


<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>



<h1>DataFrame</h1>
<p>
    DataFrame (DF) is a 2D data structure composed of columns of <a href="array.php">arrays</a>. 
    Therefore, each column of a DF is an Array and thus shows all properties of an Array. 
</p>


<p>&nbsp;</p>
    
   

<!-- ******************************************************************************* -->
    
<h2>1) Creating a DataFrame</h2>
<p>
    There are various ways to create a DF:
</p>

<ul class="spaced">
    <li>Using DF's new member function.</li>
    <li>Using variable editor</li>
    <li>Via CSV files</li>
</ul>


<p>&nbsp;</p>


<h3>1.1) Using new member function</h3>

<p class="funcsignature">
    DataFrame.new(tbl)
</p>

<p>
    where parameter <em>tbl</em> is a Lua table. The parameter <em>tbl</em> can have keys 
    <em>rows</em> and <em>cols</em> to specify the headers of rows and columns, respectively. 
    The provided userdata must be of type <a href="array.php">array</a>. If an array is provided 
    with an explicit key, then the key will be used as a header for the respective column.
</p>

<p>&nbsp;</p>

<div class="CodeCommand">
    &gt;&gt;df=std.DataFrame.new{std.toarray{"a", 2, 3}, 
    std.toarray{"abcde", 12, "b", 4}, std.toarray{10,20,30}} <br>
    
    &gt;&gt;df
    
    <table class="padded">
        <tr>
            <td>&nbsp;</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>1</td>
            <td>"a"</td>
            <td>"abcde"</td>
            <td>10</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
            <td>12</td>
            <td>20</td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
            <td>"b"</td>
            <td>30</td>
        </tr>
        <tr>
            <td>4</td>
            <td>nil</td>
            <td>4</td>
            <td>nil</td>
        </tr>
    </table>
  
</div>

<p>
    


<p>&nbsp;</p>
<p>
    
</p>
    
    
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="array.php">Array</a>
    <a href="range.php">Range</a>
</div>
    
</body>
</html>