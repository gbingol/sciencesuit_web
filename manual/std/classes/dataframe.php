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
    
    
<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_OutlineFromH2H3Tags);
</script>


    
<script>
    function PrintOrigTable()
    {
        var elem=document.getElementById("accessdata_originaldf");
        document.write("<table class=\"dataframe\">");
        document.write(elem.innerHTML);
        document.write("</table>");
    }
</script>



<h1>DataFrame</h1>
<p>
    DataFrame (DF) is a 2D data structure comprised of a data section and rows and columns labels. 
    The data section is composed of columns of <a href="array.php">arrays</a> and therefore, when accessed, 
    each column shows all properties of an array. 
</p>


<p>&nbsp;</p>
    

<h3>Terminology</h3>

<p>
    <b>Label:</b> A string or an integer number used as a header of an individual column or a row. 
    <em>Note</em> that the words header and label are interchangeably used and has the 
    same meaning unless otherwise stated.
</p>

   

<p>&nbsp;</p>
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
    &gt;&gt;df = std.DataFrame.new{std.util.toarray{"a", 2, 3}, 
    std.util.toarray{"abc", 12, "b", 4}, std.util.toarray{10, 20, 30} } <br>
    
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

<ol class="linespaced">
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
    &gt;&gt;df = std.DataFrame.new{std.util.toarray{"a", 2, 3}, 
    A=std.util.toarray{"abc", 12, "b", 4}, std.util.toarray{10, 20, 30} }
    
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
    &gt;&gt;df = std.DataFrame.new{B=std.util.toarray{"a", 2, 3}, 
    A=std.util.toarray{"abc", 12, "b", 4}, C=std.util.toarray{10, 20, 30} }
    
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
    &gt;&gt;df = std.DataFrame.new{std.util.toarray{"a", 2, 3}, std.util.toarray{"abc", 12, "b", 4}, 
    std.util.toarray{10,20,30}, cols={"A","B","C"} } <br>
    
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
    &gt;&gt;df = std.DataFrame.new{A=std.util.toarray{"a", 2, 3}, B=std.util.toarray{"abc", 12, "b", 4}, 
    std.util.toarray{10, 20, 30}, cols={"C"}, rows={"a", "b"} } <br>
    
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
</div>

<ul class="linespaced">
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


<!-- ******************************************************* -->

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


<p>&nbsp;</p>


<h3 id="columnaccess">Column Access</h3>

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

<h3 id="rowaccess">Reading a Row</h3>

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
    A few things to notice:
</p>

<ul class="linespaced">
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

<p class="funcsignature">
    cbind(arg, [label=])
</p>

<p>
    Adds a given argument as a column with the specified label. The argument, <em>arg</em>, can be 
    of type Lua table, <a href="array.php">array</a> or <a href="vector.php">vector</a>.
    If the parameter <em>label</em> is not provided, a label is automatically assigned.
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    
    <script>PrintOrigTable();</script>
           
    <br>
    
    
    <span class="LuaComment">--Adding a Lua table</span><br>
    &gt;&gt;df:cbind( {1, "a", 2, "b", 3}, "TBL")
    
    <table  class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
            <td>A</td>
            <td>B</td>
            <td>TBL</td>
        </tr>
        <tr>
            <td>a</td>
            <td>10</td>
            <td>"a"</td>
            <td>"abc"</td>   
            <td>1</td>
        </tr>
        <tr>
            <td>b</td>
            <td>20</td>
            <td>2</td>
            <td>12</td>  
            <td>"a"</td>
        </tr>
        <tr>
            <td>1</td>
            <td>30</td>
            <td>3</td>
            <td>"b"</td>   
            <td>2</td>
        </tr>
        <tr>
            <td>2</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
            <td>"b"</td>
        </tr>
        <tr>
            <td>3</td>
            <td>nil</td>
            <td>nil</td>
            <td>nil</td>
            <td>3</td>
        </tr>
    </table>
    
    <br>
    
    
    <span class="LuaComment">--Adding an Array</span><br>
    &gt;&gt;arr=std.util.toarray{"A", "B", 1, 2} <br>
    &gt;&gt;df:cbind(arr, "ARRAY") <br>
    &gt;&gt;df 
    
    <table  class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
            <td>A</td>
            <td>B</td>
            <td>TBL</td>
            <td>ARRAY</td>
        </tr>
        <tr>
            <td>a</td>
            <td>10</td>
            <td>"a"</td> 
            <td>"abc"</td>   
            <td>1</td>
            <td>"A"</td>
        </tr>
        <tr>
            <td>b</td>
            <td>20</td>
            <td>2</td>
            <td>12</td>  
            <td>"a"</td>
            <td>"B"</td>
        </tr>
        <tr>
            <td>1</td>
            <td>30</td>
            <td>3</td>
            <td>"b"</td>   
            <td>2</td>
            <td>1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>nil</td>
            <td>nil</td>
            <td>4</td>
            <td>"b"</td>
            <td>2</td>
        </tr>
        <tr>
            <td>3</td>
            <td>nil</td>
            <td>nil</td>
            <td>nil</td>
            <td>3</td>
            <td>nil</td>
        </tr>
    </table>
   
</div>










<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="clone">clone</h3>

<p class="funcsignature">
    clone() &rarr; DataFrame
</p>

<p>
    Creates an exact copy of the current dataframe. 
    Note that it is also possible to use the equivalent
    <span style="background-color: lightgray">df({}, {})</span> command.
</p>

<p class="CodeCommand">
    df2=df:clone() <br>
    
    <br>
    <span class="LuaComment">--Following is also equivalent</span><br>
    df2=df({}, {})
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="colnames">colnames</h3>
<p class="funcsignature">
    colnames() &rarr; Lua Table
</p>

<p>
    Returns the column labels in the order they would appear when printed out. The function is especially useful 
    when accessing to data as column names can be long and/or with unknown number of spaces or could have been 
    encoded which could then easily become a pain to write the exact column name.
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;cnames=df:colnames() <br>
    &gt;&gt;cnames <br>
    C &emsp; A &emsp; B	<br>
    
    <br>
    
    &gt;&gt;df( cnames[1] ) <br>
    10 &emsp; 20 &emsp; 30 &emsp; LINK
</div>









<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="dtypes">dtypes</h3>

<p class="funcsignature">
    dtypes() &rarr; string
</p>

<p>
    returns information about the data types about each individual column.
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;df:dtypes() <br>
    Breakdown of each column: <br>
    A [3] : number: 2, string: 1  <br>
    B [4] : number: 2, string: 2  <br>
    C [3] : number: 3 
</div>



<p>
    The numbers in brackets shows the number of elements in each column and information next to it is already 
    self-explanatory, i.e., column <em>A</em> has 2 elements of type integer and 1 element of type string. 
</p>

<p>&nbsp;</p>

<p>
    In some cases, you might need to know the actual breakdown of the number of datatypes each column has. There is 
    no need to parse the string, just remembering that each column is an <a href="array.php">array</a>:
</p>

<p class="CodeCommand">
    <span class="LuaComment">--arr is of type array</span><br>
    &gt;&gt;arr=df("A") <br>
    
    <br>
    
    <span class="LuaComment">--returned type is Lua table</span><br>
    &gt;&gt;arr:dtypes() <br>
    number=2 &emsp; string=1 &emsp; nil=0
</p>











<p>&nbsp;</p>
<p>&nbsp;</p>










<h3 id="head">head</h3>

<p class="funcsignature">
    head(n=)
</p>

<p>
    where the parameter <em>n</em> is a positive integer. The function prints the requested number 
    of <em>n</em> rows starting from the beginning. 
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;df:head(2) 
    <table  class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
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
       
    </table>
</div>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="ncols">ncols</h3>
<p class="funcsignature">
    ncols() &rarr; integer
</p>

<p>
    The function returns the number of columns that make up the data section of 
    the dataframe.
</p>

<div class="CodeCommand">
    &gt;&gt;df
    
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;df:ncols() <br>
    3
</div>









<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="nrows">nrows</h3>

<p class="funcsignature">
    nrows() &rarr; integer
</p>

<p>
    The function returns the maximum number of rows that make up the data section of 
    the dataframe.
</p>

<div class="CodeCommand">
    &gt;&gt;df
    
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;df:nrows() <br>
    4
</div>








<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="rbind">rbind</h3>

<p class="funcsignature">
    rbind(arg, [label=])
</p>

<p>
    Similar to <a href="#cbind">cbind</a> adds a given argument as a row with the specified label. 
    The argument, <em>arg</em>, can be of type Lua table, 
    <a href="array.php">array</a> or <a href="vector.php">vector</a>.
    If the parameter <em>label</em> is not provided, a label is automatically assigned.
</p>

<div class="CodeCommand">
    &gt;&gt;df = std.DataFrame.new{std.util.toarray{10, 20, 30}, std.util.toarray{"a", 2, 3}, 
     std.util.toarray{"abc", 12, "b", 4},  cols={"C","A","B"}, rows={"a", "b"} } <br>
    &gt;&gt;df <br> 
    
    <script>PrintOrigTable();</script>
           
    <br>
    
    &gt;&gt;df:rbind({"X","Y","Z"}) <br>
    &gt;&gt;df <br>
    
    <table class="dataframe">       
        <tr>
            <td></td>
            <td>C</td>
            <td>B</td>
            <td>A</td>
        </tr>
        <tr>
            <td>a</td>
            <td>10</td>
            <td>"abc"</td>
            <td>"a"</td>
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
            <td>"X"</td>
            <td>"Y"</td>
            <td>4</td>
        </tr>
        <tr>
            <td>4</td>
            <td>nil</td>
            <td>nil</td>
            <td>"Z"</td>
        </tr>   
    </table>
</div>

<p>
    Few things to note:
</p>

<ul class="linespaced">
    <li>
        Unlike adding columns (<a href="#cbind">cbind</a>), 
        when adding rows the order of columns is important. 
        Therefore, to be able to control the order in which columns appear, 
        <em>cols</em> table has been explicitly defined.
    </li>
    <li>
        Although the table {"X", "Y", "Z"} was supposed to be the last row, when printed out the last row 
        looks different than expected. Remember that, shorter columns are "padded" with 
        <span class="LuaKeyword">nil</span> in the existence of columns with larger 
        sizes. Therefore, for example, for column <em>C</em>, the entry "X" in the table now replaced the 
        <span class="LuaKeyword">nil</span> in the column thus appearing in the row with label 2.
    </li>
    
</ul>







<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="rename">rename</h3>

<p class="funcsignature">
    rename{cols={OldLabel=NewLabel, ...}, rows={OldLabel=NewLabel},... }
</p>

<p>
    Renames the column and/or row labels with the new labels. The function 
    issues an error, if one of the labels to be renamed does not already exist.
</p>

<div class="CodeCommand">
    &gt;&gt;df     
    <script>PrintOrigTable();</script>
           
    <br>
    
    &gt;&gt;df:rename{ rows={a="A", [1]=10}, cols={C="X", A="Y"} } <br>
    
    <table class="dataframe">
        <tr>
            <td></td>
            <td>X</td>
            <td>Y</td>
            <td>B</td>
        </tr>
        <tr>
            <td>A</td>
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
            <td>10</td>
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

    &gt;&gt;df("A", "X") <br>
    10	<br>
    
    <br>
    
    &gt;&gt;df(10, "B") <br>
    b
</div>


<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="rownames">rownames</h3>

<p class="funcsignature">
    rownames() &rarr; Lua Table
</p>

<p>
    Returns the row labels in the order they would appear when printed out. The function is especially useful 
    when accessing to data as row names can be long and/or with unknown number of spaces or could have been 
    encoded.
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;rnames=df:rownames() <br>
    &gt;&gt;rnames <br>
    a &emsp; b &emsp; 1 &emsp; 2 <br>
    
    <br>
    
    &gt;&gt;df(rnames[2], {}) <br>
    20 &emsp; 12 &emsp; 2    
</div>







<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="swap">swap</h3>

<p class="funcsignature">
    swap(Label1, Label2)
</p>

<p>
    Only applicable to columns. Swaps the column <em>Label1</em> with <em>Label2</em>.
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;df("a", "C") <br>
    10 <br>
    
    <br>
    
    &gt;&gt;df:swap("C", "B") <br>
    &gt;&gt;df
    
    <table class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>B</td>
            <td>A</td>
            <td>C</td>
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
    
    &gt;&gt;df("a", "C") <br>
    abc
    
    
</div>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="summary">summary</h3>

<p class="funcsignature">
    summary() &rarr; string
</p>

<p>
    Prints out a basic statistical summary (min, max, mean, median) of each column if possible.
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;df:summary() <br>
    Breakdown of each column: <br>
    A: Min: 2, Max: 3, Mean: 2.5, Median: 2.5 <br>
    B: Min: 4, Max: 12, Mean: 8, Median: 8 <br>
    C: Min: 10, Max: 30, Mean: 20, Median: 20
    
</div>






<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="tail">tail</h3>

<p class="funcsignature">
    tail(n=)
</p>

<p>
    where <em>n</em> is an integer (negative or positive). If n>0, then 
    the function prints the requested number of <em>n</em> rows starting from the end, 
    and if n &lt; 0 then the function prints all rows starting from 
    <em>(n+1)</em><sup>th</sup> row from the beginning. 
</p>

<div class="CodeCommand">
    &gt;&gt;df 
    <script>PrintOrigTable();</script>
    
    <br>
    
    &gt;&gt;df:tail(2) 
    <table  class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
            <td>A</td>
            <td>B</td>
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
    
    &gt;&gt;df:tail(-1) <br>
    <table  class="dataframe">
        <tr>
            <td>&nbsp;</td>
            <td>C</td>
            <td>A</td>
            <td>B</td>
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



<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 id="type">type</h3>

<p class="funcsignature">
    type() &rarr; string
</p>

<p>
    This member function serves for the <a href="../index.php">overloaded Lua function</a> <em>type</em> to work correctly.
</p>

<p class="CodeCommand">
    &gt;&gt;df:type() <br>
    DataFrame <br>
    
    <br>
    
    &gt;&gt;type(df) <br>
    DataFrame
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
    <a href="array.php">Array</a>
    <a href="range.php">Range</a>
    <a href="../funcs/read_csv.php">read_csv</a>
</div>
    
</body>
</html>