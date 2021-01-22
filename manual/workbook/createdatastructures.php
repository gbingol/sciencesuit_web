<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Data Structures</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
    <style>
        .spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;
        }
    </style>
    
</head>




<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

    
    
<h1>Create Data Structures</h1>

<p>
    Creating a data structure from an existing data can offer significant flexibilities 
    when processing via command-line/scripting. Therefore, ScienceSuit offers a tool to 
    turn your existing data into a data structure rather easily.
</p>



<p>&nbsp;</p>

<p>
    Assuming the data is already in a worksheet, just select the region of interest 
    and then right-click. From the context-menu select "Create Variable..." option 
    as shown below:
</p>

<img src="images/createvariable_wscontextmenu.png" alt=""/>



<p>&nbsp;</p>


<p>
    The following dialog will be shown:
</p>

<img src="images/createvariable_maindialog.png" alt=""/>


<ul class="spaced">
    <li>
        <em>Name of the Variable:</em> 
        The name of the variable that will be created in the global workspace.
    </li>
    
    <li>
        <em>Select Type:</em> 
        A list will be proposed depending on the selection made. 
        
        If only a single column is selected, then Array, Range or Vector can be created. 
        If more than a single column is selected then DataFrame, Matrix or Range can be created.
    </li>
    
</ul>






<p>&nbsp;</p>
<p>&nbsp;</p>



<!-- ************************** Array ***************************** -->

<h2 id="array">Array</h2>
<p>
    Assume the following selection is made on a worksheet:
</p>

<img src="images/createvariable_array_selection.png" alt=""/>

<p>&nbsp;</p>

<p>
    Selecting the type Array from <em>Select Type</em> dropdown menu 
    will show the following options:
</p>

<img src="images/createvariable_array_maindialog.png" alt=""/>

<ul class="spaced">
    <li>
        <em>Encode Unrecognized Characters:</em> 
        If the characters are not recognized, they will be encoded.
    </li>
    
    <li>
        <em>Treat Empty Cell:</em> 
        If there are empty cells in the selection, they will either be considered 
        as <span class="LuaKeyword">nil</span> or as empty string ("").
    </li>
    
</ul>



<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- ************************** Vector ***************************** -->

<h2 id="vector">Vector</h2>







<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- ************************** DataFrame ***************************** -->

<h2 id="dataframe">DataFrame</h2>




<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- ************************** Matrix ***************************** -->

<h2 id="matrix">Matrix</h2>







<p>&nbsp;</p>
<p>&nbsp;</p>








<div class="RelatedLinks">
    <a href="../std/classes/array.php">Array</a>
    <a href="../std/classes/vector.php">Vector</a>
    <a href="../std/classes/dataframe.php">DataFrame</a>
    <a href="../std/classes/matrix.php">Matrix</a>
</div>

</body>

</html>
