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
        
        ul.spaced li, ol.spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;
        }
        
        
        table.dataframe tr:first-child
        {
            font-weight: bold;
        }
        
        table.dataframe td:first-child
        {
            font-style: italic;
        }
        
        
        
        table.dataframe td
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




    
<h2 id="create">Creating a DataFrame</h2>


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
    &gt;&gt;df = std.DataFrame.new{std.toarray{"a", 2, 3}, 
    std.toarray{"abc", 12, "b", 4}, std.toarray{10, 20, 30} } <br>
    
    &gt;&gt;df
    
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>1</td>
            <td>"a"</td>
            <td>"abc"</td>
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
    Few things to notice here are:
</p>

<ol class="spaced">
    <li>Each table entry is an array (therefore satisfying the requirement).</li>
    <li>Arrays are not of same size, therefore when printed out 
        smaller ones are "padded" with <span class="LuaKeyword">nil</span>.
    </li>
    <li>None of the arrays have an explicit table key.</li>
    <li>No explicit column or row header defined, therefore automatically assigned.</li>
    <li>Columns (thus arrays) are printed out in the order they were defined.</li>
</ol>

<p>&nbsp;</p>

<div class="CodeCommand">
    &gt;&gt;df = std.DataFrame.new{std.toarray{"a", 2, 3}, 
    A=std.toarray{"abc", 12, "b", 4}, std.toarray{10, 20, 30} }
    
    <br>
    
    &gt;&gt;df
    
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>1</td>
            <td>2</td>
            <td>A</td>
        </tr>
        <tr>
            <td>1</td>
            <td>"a"</td>
            <td>10</td>
            <td>"abc"</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
            <td>20</td>
            <td>12</td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
            <td>30</td>
            <td>"b"</td>
        </tr>
        <tr>
            <td>4</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
        </tr>
    </table>    
</div>


<p>
    Similar to previous example, notes #1 and #2 are still valid. However:
</p>

<ol>
    <li>One of the arrays has an explicit key, namely <em>A</em>.</li>
    <li>
        Array with explicit key is printed out last, although it was defined 
        in the second place. This is important as when arrays have explicit keys, 
        there is absolutely no guarantee that the order of definition will be 
        preserved when printed out.
    </li>
</ol>


<p>&nbsp;</p>

<p>
    The following example demonstrates the last case clearly. Notice that <em>B</em> 
    is declared as first, <em>A</em> as second and <em>C</em> as third.
</p>


<div class="CodeCommand">
    &gt;&gt;df = std.DataFrame.new{B=std.toarray{"a", 2, 3}, 
    A=std.toarray{"abc", 12, "b", 4}, C=std.toarray{10, 20, 30} }
    
    <br>
    &gt;&gt;df 
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>B</td>
            <td>C</td>
            <td>A</td>
        </tr>
        <tr>
            <td>1</td>
            <td>"a"</td>
            <td>10</td>
            <td>"abc"</td>
        </tr>
        <tr>
            <td>2</td>
            <td>2</td>
            <td>20</td>
            <td>12</td>
        </tr>
        <tr>
            <td>3</td>
            <td>3</td>
            <td>30</td>
            <td>"b"</td>
        </tr>
        <tr>
            <td>4</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
        </tr>
    </table>    
</div>  
    
<p>&nbsp;</p>

<p>
    If you wish to control the header names and the order in which they 
    are printed out, <em>cols</em> key with a table consisting of header names 
    should be used.
</p>

<div class="CodeCommand">
    &gt;&gt;df = std.DataFrame.new{std.toarray{"a", 2, 3}, std.toarray{"abc", 12, "b", 4}, 
    std.toarray{10,20,30}, cols={"A","B","C"} } <br>
    
    &gt;&gt;df
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>A</td>
            <td>B</td>
            <td>C</td>
        </tr>
        <tr>
            <td>1</td>
            <td>"a"</td>
            <td>"abc"</td>
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
    Notice that columns are printed in the order they were labeled in the <em>cols</em> table.
</p>

<p>&nbsp;</p>

<p>
    The following command demonstrates a potpourri of what has been explained so far. Note that,
    there are 2 keys, namely <em>A</em> and <em>B</em> defined to label two arrays and 
    <em>cols</em> table is used to label the unlabeled array with header <em>C</em>. 
    We also use <em>rows</em> table to label the first two row headers explicitly and the 
    remaining is assigned automatically.
</p>

<div class="CodeCommand">
    &gt;&gt;df = std.DataFrame.new{A=std.toarray{"a", 2, 3}, B=std.toarray{"abc", 12, "b", 4}, 
    std.toarray{10, 20, 30}, cols={"C"}, rows={"a", "b"} } <br>
    
    &gt;&gt;df
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
            <td>A</td>
            <td>B</td>
        </tr>
        <tr>
            <td>a</td>
            <td>"a"</td>
            <td>10</td>
            <td>"abc"</td>             
        </tr>
        <tr>
            <td>b</td>
            <td>20</td>
            <td>2</td>
            <td>12</td>   
        </tr>
        <tr>
            <td>1</td>
            <td>30</td>
            <td>3</td>
            <td>"b"</td>   
        </tr>
        <tr>
            <td>2</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
        </tr>
    </table>
</div>

<ul class="spaced">
    <li>
        It is noted that the unlabeled array is labeled with <em>C</em> and printed out 
        as first column, the remaining two arrays, which were labeled with keys, might be 
        printed out in a random order.
    </li>

    <li>
        Finally, note that, in most cases the order of printing will not be a concern,
        however, the assignment of labels to the arrays (aka columns) is rather important 
        when accessing data.
    </li>
</ul>


<p>&nbsp;</p>
<p>&nbsp;</p>


<!-- ------------------------------------------------------------------ -->

<h2 id="accessdata">Accessing Data</h2>
<p>
    By access, it is meant to read from or write to parts of the dataframe. For access, the header
    labels are very important and it is via the header labels that we access the data.
    <br><br>
    
    In this section we will work on the following dataframe:
</p>

  
<table id="accessdata_originaldf" class="dataframe" style="border: green 1px solid;">
<tr>
    <td>&nbsp;</td>
    <td>C</td>
    <td>A</td>
    <td>B</td>
</tr>
<tr>
    <td>a</td>
    <td>"a"</td>
    <td>10</td>
    <td>"abc"</td>             
</tr>
<tr>
    <td>b</td>
    <td>20</td>
    <td>2</td>
    <td>12</td>   
</tr>
<tr>
    <td>1</td>
    <td>30</td>
    <td>3</td>
    <td>"b"</td>   
</tr>
<tr>
    <td>2</td>
    <td>nil</td>
    <td>nil</td>
    <td>4</td>
</tr>
</table>


<p>&nbsp;</p>

<h3 id="columnaccess">1) Column Access</h3>

<p class="CodeCommand">
    &gt;&gt;df("C") <br>
    10 &emsp; 20 &emsp; 30 &emsp;   LINK
</p>

<p>
    The header of the accessed column is <em>C</em> (it is in quotes since it is of type string) and we use 
    <em>df</em> followed by paranthesis (function call access). The returned type is <a href="array.php">array</a> 
    and moreover it is of type LINK. The concept is similar to <a href="matrix.php#Link_Vectors">matrix</a> returning a 
    LINK type <a href="vector.php">vector</a>. Therefore, any changes made to returned array will directly 
    affect the dataframe itself. Let's demonstrate this with a simple example:
</p>

<div class="CodeCommand">
    &gt;&gt;df("C")[3] = 300 <br>
    &gt;&gt;df

    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
            <td>A</td>
            <td>B</td>
        </tr>
        <tr>
            <td>a</td>
            <td>"a"</td>
            <td>10</td>
            <td>"abc"</td>             
        </tr>
        <tr>
            <td>b</td>
            <td>20</td>
            <td>2</td>
            <td>12</td>   
        </tr>
        <tr>
            <td>1</td>
            <td><span style="color: red;">300</span></td>
            <td>3</td>
            <td>"b"</td>   
        </tr>
        <tr>
            <td>2</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
        </tr>
    </table>
    
</div>

<p>&nbsp;</p>

<p>
    Now it should be quite clear that you can use <a href="array.php">array</a> access 
    concept to access individual data points in a dataframe. Using the unmodified dataframe 
    let's show this with the following simple commands:
</p>

<p class="CodeCommand">
    &gt;&gt;df("C")(1)<br>
    10	<br>
    
    <br>
    
    &gt;&gt;df("C")[2] <br>
    20	<br>
    
    <br>
    
    &gt;&gt;df("B")[3] <br>
    b
</p>


<p>&nbsp;</p>

<p>
    In the previous examples, we accessed the column using its header (<em>df("C")</em>), and furthermore, 
    in order to access the individual data point we used the absolute position in the 
    array itself (<em>1, 2 or 3</em>).
    
    <br><br>
    
    This might not always be convenient and we might want to access the data point using a 
    row and column header combinations as shown in the following commands:
</p>

<p class="CodeCommand">
    &gt;&gt;df("a", "A") <br>
    a <br>
    
    <br>
    
    &gt;&gt;df(1, "A") <br>
    3	<br>
    
    <br>
    
    &gt;&gt;df("a", "C") <br>
    10	
</p>

<p>&nbsp;</p>

<p>
    Previously, it was shown that we could assign new values to individual elements firstly 
    accessing the column and then accessing the absolute position in the array. Similar to 
    the previous example, we could also use row-column access as shown below:
</p>

<div class="CodeCommand">
    &gt;&gt;df[ {1, "C"} ] = 300 <br>
    
    <br>
    
    &gt;&gt;df[ {"a", "C"} ] = 100 <br>
    
    <br>
    
    &gt;&gt;df[ {"a", "A"} ] = "A" <br>
    
    <br>
    
    &gt;&gt;df
    
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
            <td>A</td>
            <td>B</td>
        </tr>
        <tr>
            <td>a</td>
            <td><span style="color: red;">100</span></td>
            <td><span style="color: red;">"A"</span></td>
            <td>"abc"</td>             
        </tr>
        <tr>
            <td>b</td>
            <td>20</td>
            <td>2</td>
            <td>12</td>   
        </tr>
        <tr>
            <td>1</td>
            <td><span style="color: red;">300</span></td>
            <td>3</td>
            <td>"b"</td>   
        </tr>
        <tr>
            <td>2</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
        </tr>
    </table>  
</div>


<p>&nbsp;</p>

<h4>CAUTION:</h4>
<p>
    Although we used indexing notation <em>for the dataframe</em>, [], to access the data, the value inside the 
    brackets was of type Lua table. Caution should be exercised when the value is of type string.
</p>

<p class="CodeCommand">
    &gt;&gt;df["C"] <br>
    10 &emsp; 20 &emsp; 30 &emsp;   LINK
</p>

<p>
    It works as expected and the command <span style="background-color: lightgrey">df["C"]</span> 
    is indeed equivalent to <span style="background-color: lightgrey">df("C")</span> as 
    can be seen from the return value. So what is the difference then? To be able to 
    clearly see it, let's rename the column header <em>C</em> to <em>cbind</em>. The name 
    is intentionally chosen to be so as it coincides with one of the member functions 
    (aka metamethods).
</p>

<div class="CodeCommand">
    &gt;&gt;df:rename{ cols={C="cbind"} } <br>
    &gt;&gt;df
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>cbind</td>
            <td>A</td>
            <td>B</td>
        </tr>
        <tr>
            <td>a</td>
            <td>10</td>
            <td>"a"</td>
            <td>"abc"</td>             
        </tr>
        <tr>
            <td>b</td>
            <td>20</td>
            <td>2</td>
            <td>12</td>   
        </tr>
        <tr>
            <td>1</td>
            <td>30</td>
            <td>3</td>
            <td>"b"</td>   
        </tr>
        <tr>
            <td>2</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
        </tr>
    </table>
       
    <br>
    
    
    <span class="LuaComment">--Access via function call style </span> <br>
    &gt;&gt;df("cbind") <br>
    10 &emsp; 20 &emsp; 30 &emsp;  LINK <br>
    
    <br>
    
    <span class="LuaComment">--Access via indexing style </span> <br>
    &gt;&gt;df["cbind"] <br>
    Function's memory address is: 00007FF7A2B8E963 
</div>

<p>
    It is now clearly seen that, indexing style returned a function rather than an array, whereas
    function call style returned an array. The reason for this is that <em>rbind</em> is a member 
    function of dataframe and when there is a call using indexing method, priority is given to 
    metamethod than to the available column headers.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="rowaccess">2) Reading a Row</h3>

<p>
    Unlike column access, row access is read-only as a <em>copy</em> of the row is returned as an array. 
    In the following demonstration we will continue working with the <a href="#accessdata_originaldf">dataframe</a> 
    we had used in the <a href="#columnaccess">previous section</a>.
</p>

<p class="CodeCommand">
    &gt;&gt;df("a", {}) <br>
    10  &emsp;  "a"   &emsp; "abc"    <br>
    
    <br>
    
    &gt;&gt;df(1, {}) <br>
    30  &emsp;  3   &emsp; "b"    <br>
    
    <br>
    
    &gt;&gt;df(2, {}) <br>
    nil  &emsp;  nil &emsp;   4 
</p>

<p>
    Few things to notice:
</p>

<ul class="spaced">
    <li>
        The returned array is not of type LINK. Therefore, any operation 
        on the array does not affect the dataframe itself.
    </li>
    <li>
        If the requested row's position exceeds one of the column's (therefore array's) size, 
        the returned array contains <span class="LuaKeyword">nil</span> value for 
        that particular column's position.
    </li>
    <li>
        Row-read notation is similar to the row-read notation used for <a href="matrix.php">matrix</a>.
    </li>
    
</ul>


<p>&nbsp;</p>
<p>&nbsp;</p>

<!-- ********************************************************************* -->

<h2 id="memberfunc">Member Functions</h2>

<h3 id="cbind">cbind</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="clone">clone</h3>



<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="colnames">colnames</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="dtypes">dtypes</h3>

<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="head">head</h3>

<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="ncols">ncols</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="nrows">nrows</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="rbind">rbind</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="rename">rename</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="rownames">rownames</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="swap">swap</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="summary">summary</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="tail">tail</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3 id="type">type</h3>


<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
    <a href="array.php">Array</a>
    <a href="range.php">Range</a>
</div>
    
</body>
</html>