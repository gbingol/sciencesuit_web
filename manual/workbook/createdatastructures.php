<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Create Data Structures</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
    <style>
        table.dataframe tr:first-child
        {
            font-weight: bold;
        }
        
        table.dataframe td:first-child
        {
            font-style: italic;
        }
        
        
        
        table td
        {
            padding: 6px;
        }
        
        
        table.raligned td
        {
            text-align: right;
            
            padding: 10px;
        }
        
    </style>
        
    
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


<ul class="linespaced">
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

<h2 class="head_l2" id="array">Array</h2>
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

<ul class="linespaced">
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

<p>
    A combination of possible selections and outputs are as follows:
</p>


<p class="CodeCommand">
    <span class="LuaComment">--Encoding selected, Empty Cell: nil</span><br>
    &gt;&gt;arr <br>
    1 &emsp; 2 &emsp; nil &emsp; "cat" &emsp; "kaÄŸÄ±t" <br>
    
    <br>
    
    <span class="LuaComment">--Encoding not selected, Empty Cell: nil</span><br>
    &gt;&gt;arr2 <br>
    1 &emsp; 2 &emsp; nil &emsp; "cat" &emsp; "" <br>
    
    <br>
    
    <span class="LuaComment">--Encoding selected, Empty Cell: Emptry string</span><br>
    &gt;&gt;arr3 <br>
    1 &emsp; 2 &emsp; "" &emsp; "cat" &emsp; "kaÄŸÄ±t" <br> 
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- ************************** Vector ***************************** -->

<h2 class="head_l2" id="vector">Vector</h2>
<p>
    Assume the following selection is made on a worksheet:
</p>

<img src="images/createvariable_vector_selection.png" alt=""/>

<p>&nbsp;</p>

<p>
    Selecting the type Vector from <em>Select Type</em> dropdown menu 
    will show the following options:
</p>

<img src="images/createvariable_vector_maindialog.png" alt=""/>

<ul class="linespaced">
    <li>
        <em>Treat String or Empty Cell:</em> 
        When a string or an empty cell encountered, the action to be taken. Either a zero value 
        or the lowest numeric value of a floating point can be assigned or it can be skipped.
    </li>
</ul>



<p>&nbsp;</p>

<p>
    A combination of possible selections and outputs are as follows:
</p>


<p class="CodeCommand">
    <span class="LuaComment">--Treat String or Empty Cell: 0.0</span><br>
    &gt;&gt;v <br>
    0 &emsp; 0 &emsp; 1 &emsp; 2 &emsp; 3 &emsp; 4 &emsp; 5 &emsp; 6 &emsp; COL <br>
    
    <br>
    
    <span class="LuaComment">--Treat String or Empty Cell: Skip</span><br>
    &gt;&gt;v <br>
    0 &emsp; 1 &emsp; 2 &emsp; 3 &emsp; 4 &emsp; 5 &emsp; 6 &emsp; COL <br>
    
    <br>

    <span class="LuaComment">--Treat String or Empty Cell: 0.0</span><br>
    &gt;&gt;v <br>
    -1.79769e+308 &emsp; 0 &emsp; 1 &emsp; 2 &emsp; 3 &emsp; 4 &emsp; 5 &emsp; 6 &emsp; COL 
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- ************************** DataFrame ***************************** -->

<h2 class="head_l2" id="dataframe">DataFrame</h2>

<p>
    Assume the following selection is made on a worksheet:
</p>

<img src="images/createvariable_dataframe_selection.png" alt=""/>

<p>&nbsp;</p>

<p>
    Selecting the type DataFrame from <em>Select Type</em> dropdown menu 
    will show the following options:
</p>

<img src="images/createvariable_dataframe_maindialog.png" alt=""/>

<ul class="linespaced">
    <li>
        <em>First Row is Header:</em> 
       The very first row is used in the column header part of the dataframe. 
       Otherwise, column headers will be assigned by the system.
    </li>
    
    <li>
        <em>Encode Unrecognized Characters:</em> 
        If the characters are not recognized, they will be encoded.
    </li>
    
    <li>
        <em>Treat Empty Cell:</em> 
        Empty cells will be considered as either <span class="LuaKeyword">nil</span> 
        or as empty string ("").
    </li>
        
    
</ul>



<p>&nbsp;</p>

<p>
    Here only <em>First Row is Header</em> option will be demonstrated as 
    other options are already as same as <a href="#array">array</a>.
</p>


<div class="CodeCommand">
    <span class="LuaComment">--First Row is Header: Checked</span><br>
    &gt;&gt; df 
    
    <table class="dataframe">
        <tr>
            <td></td>
            <td>Name</td>
            <td>Q1</td>
            <td>Q2</td>
            <td>Q3</td>
        </tr>
        <tr>
            <td>1</td>
            <td>"Student A"</td>
            <td>10</td>
            <td>7</td>
            <td>8</td>
        </tr>
        <tr>
            <td>2</td>
            <td>"Student B"</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <tr>
            <td>3</td>
            <td>"Student C"</td>
            <td>9</td>
            <td>6</td>
            <td>7</td>
        </tr>
    </table>
    
    <br>
    <br>
    
    <span class="LuaComment">--First Row is Header: NOT Checked</span><br>
    &gt;&gt; df2 

    <table class="dataframe">
        <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>1</td>
            <td>"Name"</td>
            <td>"Q1"</td>
            <td>"Q2"</td>
            <td>"Q3"</td>
        </tr>
        <tr>
            <td>2</td>
            <td>"Student A"</td>
            <td>10</td>
            <td>7</td>
            <td>8</td>
        </tr>
        <tr>
            <td>3</td>
            <td>"Student B"</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
        </tr>
        <tr>
            <td>4</td>
            <td>"Student C"</td>
            <td>9</td>
            <td>6</td>
            <td>7</td>
        </tr>
    </table>
    
</div>




<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- ************************** Matrix ***************************** -->

<h2 class="head_l2" id="matrix">Matrix</h2>
<p>
    Assume the following selection is made on a worksheet:
</p>

<img src="images/createvariable_matrix_selection.png" alt=""/>

<p>&nbsp;</p>

<p>
    Selecting the type Matrix from <em>Select Type</em> dropdown menu 
    will show the following options:
</p>

<img src="images/createvariable_matrix_maindialog.png" alt=""/>

<ul class="linespaced">
    <li>
        <em>Treat String or Empty Cell:</em> 
        When a string or an empty cell encountered, the action to be taken. Either a zero value 
        or the lowest numeric value of a floating point can be assigned.
    </li>
</ul>



<p>&nbsp;</p>

<p>
    A combination of possible selections and outputs are as follows:
</p>


<div class="CodeCommand">
    <span class="LuaComment">--Treat String or Empty Cell: 0.0</span><br>
    &gt;&gt;m 
    <table>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>0</td>
            <td>5</td>
        </tr>
        <tr>
            <td>0</td>
            <td>6</td>
            <td>7</td>
        </tr>
    </table>
    
    <br>
    <br>
    
    <span class="LuaComment">--Treat String or Empty Cell: Lowest Floating Value</span><br>
    &gt;&gt;m2
    <table class="raligned">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>4</td>
            <td>-1.79769e+308</td>
            <td>5</td>
        </tr>
        <tr>
            <td>-1.79769e+308</td>
            <td>6</td>
            <td>7</td>
        </tr>
    </table>
    
        
</div>








<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- ************************** Range ***************************** -->

<h2 class="head_l2" id="range">Range</h2>
<p>
    Assume the following selection is made on a worksheet:
</p>

<img src="images/createvariable_range_selection.png" alt=""/>

<p>&nbsp;</p>

<p>
    Selecting the type Range from <em>Select Type</em> dropdown menu 
    will show the following options:
</p>

<img src="images/createvariable_range_maindialog.png" alt=""/>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;rng<br>
    df!A1:C4
</p>





    
    
<p>&nbsp;</p>
<p>&nbsp;</p>


    



<div class="RelatedLinks">
    <a href="../std/classes/array.php">Array</a>
    <a href="../std/classes/vector.php">Vector</a>
    <a href="../std/classes/dataframe.php">DataFrame</a>
    <a href="../std/classes/matrix.php">Matrix</a>
    <a href="../std/classes/range.php">Range</a>
</div>

</body>

</html>
