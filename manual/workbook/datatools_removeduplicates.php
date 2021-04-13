<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Remove Duplicates</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    
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

    
    
<h1>Remove Duplicates</h1>

<p>
    It is sometimes useful to remove multiple entries in the rows of a single or multiple columns. 
    At the end of the operation only unique rows remain. Although the meaning of duplicate is intuitive, 
    it is useful to solidify it with a couple examples cases.
</p>


<p>&nbsp;</p>






<!-- ************************** Single Column ***************************** -->

<h2 class="head_l2" id="Single_column">Single column</h2>

<p>
    This is the simplest and most intuitive case. In the following image, notice that #1 is duplicated.
</p>

<img src="images/removeduplicates_singlecolumn_beforeremoval.png" alt="" />


<p>&nbsp;</p>


<p>
    Clicking on "Remove Duplicates" button will remove the duplicates in the selected column. 
    After removal an information message will be displayed as shown:
</p>

<img src="images/removeduplicates_informationmessage.png" alt=""/>

<p>&nbsp;</p>


<p>As seen below, #1 is removed as it was duplicated.</p>

<img src="images/removeduplicates_singlecolumn_aftermoval.png" alt=""/>

    








<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- ****************************** Multiple Columns *********************** -->

<h2 class="head_l2" id="Multiple_columns">Multiple columns</h2>

<p>
    Here, the idea will be demonstrated with 2 columns; however, the same idea is applicable 
    to any number of selected columns.
    
    In the figure below, two columns have been selected and we would like to remove the duplicates.
</p>

<img src="images/removeduplicates_multiplecolumns_beforeremoval.png" alt=""/>

<p style="font-size: small;">Notice that we have 3 A's in the first column.</p>

<p>&nbsp;</p>


<p>After removal of duplicates, the remaining rows are shown below:</p>

<img src="images/removeduplicates_multiplecolumns_afterremoval.png" alt=""/>

<p>&nbsp;</p>


<p>
    Although initially we had 3 A's, only 1 A has been removed and 2 A's remained. 
    Had we selected the first column only 2 A's would have been removed. 
    However, by selecting two columns we pair the consecutive cells, 
    therefore, the data in first row is considered as (A,1) and in the fifth row as (A, 10). 
    Since the data pairs (A, 1) and (A, 10) are different, it was not considered as a duplicate. 
    The rationale is extensible to n-tuples.</p>

<p>&nbsp;</p>

<p>
    <span style="text-decoration: underline;"><em>Pitfall:</em></span> 
    When comparisons are made, the values in the cells are considered as strings.
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
    <a href="basics.php">Basics</a>
    <a href="import_export.php">Import / Export</a>
    <a href="createdatastructures.php">Create Data Structures</a>
    <a href="tokenize_converttext.php">Tokenize / Convert Text to Columns</a>
</div>

</body>

</html>
