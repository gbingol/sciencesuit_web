<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Essentials</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        
        ol li
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        
        

    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>








<body>

    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Select_OutlineFromTagName.bind(null, "H2"), false);
</script>
    



<h1>Basics</h1>



<h2 class="head_l2" id=save_open>Saving / Opening</h2>

<p>
    The data in a workbook can be saved into the project file, namely <em>sproj</em>, 
    using the <a href="../environment/index.php">commit</a> button.
    Once the project is saved, any work committed from the workbook will be saved as well. 
    In order to load the project file, just open it from recents or locate it on the drive.
</p>


<p>&nbsp;</p>

<h2 class="head_l2" id="Formatting_Cells">Formatting Cells</h2>
<p>
    Data in a worksheet can be formatted and the formatted 
    data can be transferred to MS Excel. The formatting panels are shown below:
</p>
	

<img alt="" src="images/formatcells.png">

<p>Following are the possible formatting options:</p>

<ol>
    <li>
        <b>Font:</b> Family, size, color, style (italic), decoration 
        (underline) and weight (bold).
    </li>
    
    <li>
        <b>Color:</b> Background color
    </li>
    
    <li>
        <b>Alignment:</b> Vertical (bottom, center, top) and 
        horizontal (left, center, right)
    </li>
</ol>


<p>
    As you move the cursor to different cells, the panel will automatically be updated with the format of the active cell. 
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 class="head_l2" id="Selection_of_Cells">Selection of Cells</h2>
<p>
    Once a data range is selected, the dimension of the selection and some essential measures of the data 
    is immediately shown to the user at the status bar. 
</p>

<img alt="" src="images/selectionshowingstatistics.png">








<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 class="head_l2" id="Copy_Paste">Copy/Paste</h2>
<p>
    Although, within a Worksheet, the selection can be moved/copied to another location using the mouse, 
    the selected data set in the worksheet can also be carried to a different location or to a different worksheet using 
    copy-cut/paste options. Regardless of the dimension of the data, if "<em>Copy/Cut</em>" is selected, 3 different 
    formats are loaded to OS's clipboard:
</p>


<ol>
    <li><em>HTML Code: </em>Which provides convenience to embed in an HTML page.</li>
    
    <li><em>XML Code:</em> When the data is pasted ScienceSuit parses the XML code and 
    formats the data accordingly.
    </li>
    
    <li><em>Text Code:</em> Tab separated format.</li>
</ol>


<p>
    Besides the "regular" <em>copy</em> command, Workbook also supports copying a range as 
    bitmap using "<em>Copy As Image</em>" as shown in the following figure:
</p>


<img alt="" src="images/copy_options.png">



<p>
    Copying a range such as shown (Fig A) in the following figures will produce an image 
    similar to Fig B. It is seen that the format and alignments are preserved.
</p>



<div style="display:table; content:''">
    <div style="float:left; padding-right:20px">
        <img alt="" src="images/copyasimage_range.png" >
        <p style="text-align:center"><b>Fig A</b></p>
    </div>

    <div style="float:left; padding-left:20px">
        <img alt="" src="images/copyasimage.png">
        <p style="text-align:center"><b>Fig B</b></p>
    </div>
</div>
	
<p style="clear:left">&nbsp;</p>

<p>
    Upon using the "<em>copy</em>" command, there are 3 paste options as seen in the following figure:
</p>

<img alt="" src="images/pasteoptions.png">
<ol>
    <li>Directly clicking the <em>Paste</em> button will paste values and format</li>
    
    <li>Selecting "<em>Paste Values</em>" will only paste the values.</li>
    
    <li>
        Selecting "<em>Paste Format</em>" will only paste the format. Therefore, any 
        value entered in the pasted region's cell will have the similar format 
        from where it was copied.
    </li>
</ol>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 class="head_l2" id="Adding_Deleting_Rows_Columns">Inserting/Deleting Rows and Columns</h2>

<p>
    By default, a Worksheet contains 1000 rows and 100 columns. In order to 
    insert or delete rows or columns, at least 1 row or 1 column must be selected. 
    Right-clicking with the mouse will show the following menu:
</p>

<img alt="" src="images/adddeleterowscols.png">

<p>
    For example, if <em>n</em> rows are selected, then <em>n</em> rows will 
    be inserted or deleted. Similar rational holds for columns as well.
</p>
    



    




<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="import_export.php">Import / Export</a>
    <a href="createdatastructures.php">Create Data Structures</a>
    <a href="tokenize_converttext.php">Tokenize / Convert Text to Columns</a>
    <a href="datatools_removeduplicates.php">Remove Duplicates</a>
 
</div>

</body>

</html>
