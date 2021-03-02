<!DOCTYPE HTML>
<html>
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Range Class</title>
	
    
    <script>
        document.createElement("red");
    </script>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>

        
        .auto-style2 {
            color: #0000FF;
        }
        .auto-style3 {
            color: #FF0000;
        }
        .auto-style4 {
            text-decoration: underline;
        }
        .auto-style5 {
            color: #FF0000;
            background-color: #DEDEDE;
        }
        
        red
        {
            color: red;
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
    

<h1>Range Class</h1>
<p>
    A range is a user specified region within a worksheet. It does not have a reserved internal data storage; 
    only reads from and writes to the specified region by the user. 
</p>

<p> &nbsp;</p>





<h2 id="create_access">Create and Access</h2>




<h3 id="createrange">Creating Range</h3>

<p>
    Unlike Worksheet, where indices (1,1) refers to <em>A1</em>, for a Range, (1,1) refers to the topleft 
    corner of the <em>specified</em> region.
</p>

<p class="CodeCommand">
    <span class="LuaComment">-- (1,1) refers to B1</span> <br>
    &gt;&gt; range=Range.new(&quot;Sheet1!B1:B5&quot;)&nbsp;   <br />

    <br />
    <br>

    <span class="LuaComment">--Create a range from the selection of the user </span><br>
    &gt;&gt; range=ws:selection() 
</p>


<p>&nbsp;</p>


<p>
    <span class="auto-style4"><em>Important note:</em></span> If the Worksheet owning the range(s) is closed, 
    the range(s) becomes invalid.
</p>

<p class="CodeCommand">
    <span class="LuaComment">--Create a range </span> <br />
    &gt;&gt;r=Range.new("Sheet 1!A1:B5") <br />

    <br />

    <span class="LuaComment">--check the range </span> <br />
    &gt;&gt;r <br />
    Sheet 1!A1:B5 <br />

    <br />

    <span class="LuaComment">--close the worksheet manually and check the range </span> <br />
    &gt;&gt;r <br />
    userdata <red>--no more access to the range</red>
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>
    
    



    
<h3 id="accesscells">Accessing cells</h3>

<p>
    You can read from and write to the region specified by the range inside the Worksheet.
</p>

<p class="CodeCommand">
    <span class="LuaComment">--create a range [region is 2x2, from B2 to C3]</span><br />
    &gt;&gt;r=Range.new("Sheet 1!B2:C3") <br />

    <br />
    <span class="LuaComment">--set B2 value as 10</span> <br />
    &gt;&gt;r:set(1, 1, 10) <br />

    <br />

    <span class="LuaComment">--read from B2 </span> <br />
    &gt;&gt;r(1, 1) <br />
    10	<br />

    <br />

    <span class="LuaComment">--set C3 value as "a" </span> <br />
    &gt;&gt;r:set(2, 2, "a") <br />

    <br />

    <span class="LuaComment">--read from C3 </span> <br />
    &gt;&gt;r(2, 2) <br />
    a <br />

    <br />
    <br />

    <span class="LuaComment">--Attempt to write at index (3,3)</span> <br />
    &gt;&gt;r:set(3, 3, "c") <br />
    <red>ERROR:</red>
    Requested row is out of boundaries of the range
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>
    
    








    
<h2 id="memberfuncs">Member functions</h2>


<p>&nbsp;</p>




<h3 id="col">col</h3>
<p class="funcsignature">
    col(i) &rarr; Array
</p>
<p>Returns the i<sup>th</sup> column as an Array object.</p>





<p>&nbsp;</p>
<p>&nbsp;</p>
    
    



<h3 id="coords">coords </h3>
<p class="funcsignature">
    coords() &rarr; Lua table, Lua table
</p>
<p>
    Returns the top-left and bottom-right coordinates, <em>with respect to the worksheet</em>. 
    The Lua table has keys <em>r</em> and <em>c</em> to show the location 
    of <em>row</em> and <em>column</em> as integers, respectively.
</p>
<p class="CodeCommand">
    &gt;&gt;r=Range.new("Sheet 1!B2:C5") <br />

    <br />

    &gt;&gt;t1, t2=r:coords() <br />

    <br />

    &gt;&gt;t1 <br />
    c=2&nbsp;&nbsp;&nbsp; r=2 <br />

    <br />

    &gt;&gt;t2 <br />
    c=3&nbsp;&nbsp;&nbsp; r=5
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>  



<h3 id="get">get</h3>
<p class="funcsignature">
    get(i, j) &rarr; number/string
</p>
<p>
    Returns the element at i<sup>th</sup> row and j<sup>th</sup> column. If <em>range</em> is a 
    Range variable, then instead of <em>range:get(i, j)</em>, <mark>range(i, j)</mark> can be used as well.
</p>
    





<p>&nbsp;</p>
<p>&nbsp;</p>



    
    
<h3 id="parent">parent</h3>
<p class="funcsignature">
    parent() &rarr; Worksheet
</p>
<p>Returns the Worksheet which owns the range.</p>
<p class="CodeCommand">
    &gt;&gt;rng <br>
    Sheet 1!A1:B2 <br>
    
    <br>
   
    &gt;&gt;ws=rng:parent() <br>
    &gt;&gt;ws:name() <br>
    Sheet 1





<p>&nbsp;</p>
<p>&nbsp;</p>




    
<h3 id="select">select </h3>
<p class="funcsignature">
    select()
</p>
<p>Selects the range on the worksheet.</p>

<p class="CodeCommand">
    &gt;&gt;rng <br>
    Sheet 1!A1:B2 <br>
    
    <br>
    
    &gt;&gt;rng:select()
</p>

<img src="../images/classes/range_select.png" alt=""/>

    




<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
<h3 id="set">set</h3>
<p class="funcsignature">
    set(i, j, val)
</p>
<p>
    Sets the value of the cell at i<sup>th</sup> row and j<sup>th</sup> 
    column with the value, <em>val</em>.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>

    
    
<h3 id="sort">sort</h3>
<p class="funcsignature">
    sort(pos, order, casesensitive=<span class="LuaKeyword">false</span>)
</p>

<p>
    Sorts the <em>whole</em> Range according to the selected column position, <em>pos</em>, 
    by given <em>order. </em>If the parameter <em>order</em>="A" or <em>order="D"</em> then 
    the Range is sorted in ascending or descending order, respectively. By default, 
    the sorting is case-sensitive. Note that, numbers are considered to be smaller 
    than letters in a sort order.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>





    
<h3 id="subrange">subrange </h3>
<p class="funcsignature">
    subrange({row=, col=}, nrows=, ncols=) &rarr; Range
</p>
<p>
    Returns a range defined within the current range object. If the defined range exceeds the boundaries of the
    current range, then a <span class="LuaKeyword">nil</span> value is returned.
</p>

<p>
    Arguments <em>row</em> and <em>col</em> are top-left coordinates of the defined range and must be greater than zero and must be 
    within the boundaries of the current range. The top-left coordinates of current range is (1, 1). 
    <em>nrows</em> is the number of rows included in the defined range and
    similarly <em>ncols</em> is the number of columns included in the defined range. If <em>nrows</em>
    or <em>ncols</em> is assigned a negative number, then all the rows or columns of the current range 
    as of the defined top-left coordinate is included in the defined sub-range.
</p>

<p class="CodeCommand">
    <span class="LuaComment"> --rng is the current range object (already has been created) </span><br>
    &gt;&gt;rng <br>
    Sheet 1!B4:D10 <br>

    <br>

    <span class="LuaComment"> --We are <em>defining</em> a range within rng </span><br>
    &gt;&gt;rng:subrange({row=1, col=1}, 2, -1) <br>
    Sheet 1!B4:D5
</p>
    





<p>&nbsp;</p> 
<p>&nbsp;</p> 



   
   
<h3 id="tostring">tostring</h3>
<p class="funcsignature">
    tostring() &rarr; string
</p>
<p>
    Returns information on the selection as string, such as in the first example, 
    range:tostring() will return <em>"Sheet1!B1:B5"</em>.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="worksheet.php">worksheet</a>
    <a href="../../std/funcs/activeworksheet.php">activeworksheet</a>
 </div>


</body>
</html>