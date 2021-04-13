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
    



<h1>Tokenize/Convert Text</h1>




<h2 class="head_l2" id="tokenizingtext">Tokenizing Text</h2>

<p>
    Every now and then we need to separate (tokenize) data in a text to be able to use the particular data entries separately. 
    However, in a text the data is combined by many delimiters, such as tab, comma etc. 
</p>
<p>
    For example, observe the data that is in a text file (such as Notepad) shown in the following figure. 
    Here, if we would like to have, and most of the time it is indeed useful to have, "<em>student</em>" 
    and "<em>score</em>" in different columns in a worksheet, then we need to tokenize the text. 
    Please also note that, in the following figure the data is mostly separated by tab characters 
    except "A,B" which is separated by comma:
</p>

<img src="images/import_txt_datainnotepad.png" alt=""/>

<p>&nbsp;</p>
<p>
    In cases, where text needs to be tokenized, ScienceSuit will show a wizard as shown below. 
    Each line in the text will be written in a row, such as first line to row 1, second line to row 2 and so on. 
</p>


<img src="images/import_txt_delimitertab.png" alt=""/>
<p>
    <em>"Tokenize the Whole Text Using Delimiter"</em>: The selected delimiter will be used to tokenize the whole text file. 

    If a different delimiter is selected, then the text will be separated based on the newly selected delimiter 
    and the outlook of the grid will also change.
</p>


<p>&nbsp;</p>
<p>
    In the above figure, although the initial outlook looks fine, we observe that "A,B", which is separated by comma, 
    is not separated as the <em>main</em> tokenizer is the <em>"tab"</em>. 
    If we change the main delimiter from <em>tab</em> to <em>comma</em> 
    then we will have the following outlook:
</p>


<img src="images/import_txt_delimitercomma.png"  alt=""/>
<p>
    Note that, although this time "A,B" is separated well, the rest of the text is not well separated at all.
</p>


<p>&nbsp;</p>


<p>
    <em>>Note:</em>For convenience of visualization, 
    when data is separated by tab characters and the main delimiter is different than the 
    <em>tab</em>, the tab characters in the text are replaced by space characters. 
    Otherwise we would have seen the entry, the second row, "1 18" as "118" 
    which would have made it difficult to make any inferences.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<p>
    Let's go back to the initial selection and select the delimiter as "<em>tab</em>" 
    and select the cell containing the text "A,B" and then right-click. 
    As shown in the following figure, a menu will pop-up:
</p>

    
   

<img src="images/import_txt_delimitertab_contextmenushown.png" alt=""/>

<p>
    If we select the <em>comma</em> option for this particular cell, 
    then the content of the cell will be separated by using comma and each separated text will 
    be inserted starting as of the selected cell's column's position. 
</p>


<p>The idea can be applied to any cell containing text. Therefore, we have full control over the text. </p>
  

<p>&nbsp;</p>


<p>After separating using <em>comma</em>, we will have the following:</p>

<img src="images/import_txt_fullytokenized.png" alt="" />


<p>&nbsp;</p>


<p>
    Once the <em>OK</em> button is clicked, a new Worksheet will be added with the name "<em>data.txt</em>" 
    as shown in the following figure:
</p>

<img src="images/import_txt_dataimportedtoScienceSuit.png" alt=""/>












<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>












<h2 class="head_l2" id="converttexttocolumns">Convert Text to Columns</h2>

<p>
    It is used when you have text in the rows of a column and you wish to separate the text to multiple columns. 
    For example, say, you have the following rows of text in a worksheet:
</p>

<img src="images/text_to_columns_unseparatedtext.png" alt=""/>
<p>
    To be able to separate the above shown text into columns:
</p>



<p><b>1)</b> Select the rows you wish to tokenize and click on the "Text to Columns" button in the Workbook page as shown below:</p>

<img src="images/text_to_columns_selectionmade_buttonclicked.png" alt=""/>
    


<p>&nbsp;</p>

<p><b>2)</b> This will show the following wizard (please see the <a href="#tokenizingtext">Tokenizing Text</a> for more information)</p>

<img src="images/text_to_columns_tokenizetextwizard.png" alt="" />


<p>&nbsp;</p>


<p><b>3)</b> After tokenizing the way you wish, it will be converted to multiple columns, possibly, as shown below:</p>

<img src="images/text_to_columns_datainmultiplecolumnsaftertokenizing.png" alt="" />
<p>
    <em>Note:</em> Initially the selection was tokenized using the <em>comma</em> delimiter 
    and then the cell <em>A3</em> was selected and was tokenized using 
    <em>equal sign</em> delimiter.
</p>


<p>&nbsp;</p>


<p>
    Finally, please note that, before converting the text to multiple columns, 
    if you already have data, say in <em>B1</em>, then a confirmation would be required, as shown below, 
    before overwriting the existing data.
</p>

<img src="images/text_to_column_overwritingdata_confirmationdlg.png" alt=""/>


<p>
    If confirmed, the data in cell <em>B1</em> will be overwritten, otherwise, the operation will be canceled.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="basics.php">Basics</a>
    <a href="import_export.php">Import / Export</a>
    <a href="createdatastructures.php">Create Data Structures</a>
    <a href="datatools_removeduplicates.php">Remove Duplicates</a>
</div>

</body>

</html>
