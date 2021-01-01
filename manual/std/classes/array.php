<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Class</title>

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

    </style>

    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
    
</head>


<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>



<h1>Array</h1>
<p>
    Array can contain both numeric (float, integer) and non-numeric 
    (string, <span class="LuaKeyword">nil</span>) values. When an
    array is part of a <a href="dataframe.php">DataFrame</a>, then its status is called as <em>linked</em>.
</p>
<p>&nbsp;</p>
    
    
    
<h3>Creating an Array</h3>
    
    
<p class="CodeCommand">
    &gt;&gt;arr1=Array.new(3, &quot;a&quot;) <br />
    &gt;&gt;arr1 <br />
    "a"&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "a" <br />
    <br />

    &gt;&gt;arr2=Array.new(2, 3.14) <br />
    &gt;&gt;arr2 <br />
    3.14&nbsp;&nbsp;&nbsp; 3.14	<br />

    <br />
    &gt;&gt;arr3=std.toarray{1,2,"a","b"} <br />
    &gt;&gt;arr3 <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"
</p>


<p>&nbsp;</p>
<p>
    In order to create an array from data, you can use either <em>toarray</em> function 
    or <a href="../../workbook/index.php#createdatastructures">use the interface</a>. 
    When interface is used to create an array, if a string can be converted to a valid number, 
    then it will be stored as type number, otherwise as type string. 
</p>
    
    
<p>&nbsp;</p>

<p>
    It should be noted that, unlike the <a href="vector.php">Vector</a> data type, 
    there is <em>no algebra defined for arrays</em>. 
</p>
    

<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
<h3>Array Manipulation</h3>


<p>
    Consider the following array, <b>a</b>:&nbsp;&nbsp;&nbsp;&nbsp; 
    a = 1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"
</p>

<p>&nbsp;</p>

<p>
    If you print the array using the command editor:
</p>

<p class="CodeCommand">
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; &quot;a&quot;&nbsp;&nbsp;&nbsp; &quot;b&quot;
</p>
   
<p>
    It is seen that string values are printed using double quotient.
</p>
    
<p>&nbsp;</p>

<p> To read an entry from the array:</p>

<p class="CodeCommand">
    &gt;&gt;a[1] or &gt;&gt;a(1) <br />
    10 <br />

    <br />

    &gt;&gt;type(a[1]) <br />
    number <br />

    <br />

    &gt;&gt;type(a[4]) <br />
    string
</p>

<p>&nbsp;</p>

<p>To change an entry:</p>

<p  class="CodeCommand">
    &gt;&gt;a[1]=10 <span class="auto-style1">--a[1] will be numeric </span> <br />

    <br />

    &gt;&gt;a[4]="c" <span class="auto-style1">--a[4] will be a string</span> <br />

    <br />

    &gt;&gt;a <br />
    <span class="auto-style2">10</span>&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; <span class="auto-style2">"c"</span>&nbsp;&nbsp;&nbsp; "b" 

</p>
    
<p>&nbsp;</p>
<p>&nbsp;</p>





<!-- *************************************************************************** -->

<h2>Member functions</h2>
<p>&nbsp;</p>
    
    



<h3>capacity</h3>
<p class="funcsignature">
    capacity() &rarr; integer
</p>
<p>Returns the capacity of the array. </p>
<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, 3, "a", "b"} <br />
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b" <br />

    <br />

    &gt;&gt;a:capacity() <br />
    6	<br />

    <br />

    <span class="LuaComment">-- size</span> <br>
    &gt;&gt;#a  <br />
    5	
</p>
<p>
    <em>Note:</em> Capacity is important as nearing the limit of capacity will cause 
    reallocation of the memory to accomodate more elements, thus causing the copying of the existing elements.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>

    
    
<h3>clone</h3>
<p class="funcsignature">
    clone() &rarr; Array
</p>
<p>Makes a deep copy of the array. Note that, the assignment operator such as 
    arr1=arr2 makes a shallow copy and arr1 and arr2 refers to the same data.
</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, 3, "a", "b"} <br />

    <br />

    &gt;&gt;b=a <br />
    &gt;&gt;b[1]=10 <br />

    <br />

    &gt;&gt;a <br />
    <span class="auto-style2">10</span>&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"	

</p>

<p>&nbsp;</p>

<p>However, if we had used clone() function:</p>
<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, 3, "a", "b"} <br />
    &gt;&gt;b=a:clone() <br />

    <br />

    &gt;&gt;b[1]=10 <br />

    <br />

    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"	<br />

    <br />

    &gt;&gt;b <br />
    10&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"
</p>






<p>&nbsp;</p>



<h3>erase</h3>
<p class="funcsignature">
    erase(pos)
</p>
<p>Erases the element at the specified position as long as array will have at least one element at the end of the operation.</p>
<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, 3, "a", "b"} <br />

    <br />

    &gt;&gt;a:erase(4) <br />
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 3&nbsp;&nbsp;&nbsp; "b"	<br />

    <br />

    &gt;&gt;a=std.toarray{"a", "b"} <br />
    &gt;&gt;a:erase(1) <br />
    &gt;&gt;a <br />
    "b"	 <br />

    <br />

    &gt;&gt;a:erase(1) <br />
    ERROR: An array must have at least one element.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<h3>insert</h3>
<p class="funcsignature">
    insert(i, elem)
</p>
<p>Inserts a number, 1D Lua table or an array at <em>i<sup>th</sup> </em>position.</p>
<p class="CodeCommand">
    &gt;&gt;a=std.toarray{"a", "b"} <br />
    &gt;&gt;a:insert( 2, {1, <span class="auto-style2">"c"</span>} ) <br />

    <br />

    &gt;&gt;a <br />
    "a"&nbsp;&nbsp;&nbsp; <span class="auto-style2">"c"</span>&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; "b"	<br />

    <br />
    <br />

    &gt;&gt;a=std.toarray{"a", "b"} <br />
    &gt;&gt;a2=std.toarray{<span class="auto-style3">1</span>, "c"} <br />

    <br />

    &gt;&gt;a:insert( 2, a2) <br />
    &gt;&gt;a <br />
    "a"&nbsp;&nbsp;&nbsp; <span class="auto-style3">1</span>&nbsp;&nbsp;&nbsp; "c"&nbsp;&nbsp;&nbsp; "b"	
</p>
<p>
    Note that, when a Lua table is inserted into the array, there is no guarantee 
    that the order of the elements in the table will be preserved when they are inserted to the array. 
    If order of the elements matter, insert elements as an array or individually.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>


<h3>push_back</h3>
<p class="funcsignature">
    push_back(elem)
</p>
<p>Inserts the <em>elem</em> at the end of the array. The argument <em>elem</em> can be either number or string.</p>
<p class="CodeCommand">
    &gt;&gt;a=std.toarray{"a", "b"} <br />
    &gt;&gt;a:insert(3, "c") <br />
    ERROR: Requested position index exceeds array's size. <br />

    <br />

    &gt;&gt;>a:push_back("c") <br />
    &gt;&gt;a <br />
    "a"&nbsp;&nbsp;&nbsp; "b"&nbsp;&nbsp;&nbsp; "c"
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
<h3>reserve</h3>
<p class="funcsignature">
    reserve(n)
</p>
<p>Requests that the array <em>capacity</em> be at least enough to contain 
    <em>n </em>number of elements. If the parameter <em>n</em> is smaller than 
    the current capacity, calling reserve has no effect.</p>
<p class="CodeCommand">
    &gt;&gt;arr=std.toarray{1, 2, "a", "b"} <br />
    &gt;&gt;arr:capacity() <br />
    4	<br />

    <br />

    &gt;&gt;arr:reserve(3) <br />
    &gt;&gt;arr:capacity() <br />
    4	<br />

    <br />

    &gt;&gt;arr:reserve(10) <br />
    &gt;&gt;arr:capacity() <br />
    10	<br />

    <br />
    &gt;&gt;#arr <br />
    4
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<h3>resize</h3>
<p class="funcsignature">
    resize(n) &rarr; Array
</p>
<p>
    Resizes the container so that it contains <em>n</em> number of elements. 
    Depending on the requested number, the Array can shrink or expand.
</p>
<p class="CodeCommand">
    &gt;&gt;arr=std.toarray{1, 2, "a", "b"} <br />
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"	<br />
    &gt;&gt;#a <br />
    4	<br />

    <br />

    &gt;&gt;a:resize(6) <br />
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"&nbsp;&nbsp;&nbsp; 0&nbsp;&nbsp;&nbsp; 0	<br />
    &gt;&gt;#a <br />
    6	<br />

    <br />

    &gt;&gt;a:resize(3) <br />
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"	<br />
    &gt;&gt;#a <br />
    3	
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>

    
    
<h3>shuffle </h3>
<p class="funcsignature">
    shuffle()
</p>
<p>Shuffles the order of the elements in the Array.</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, "a", "b"} <br />
    <br />
    &gt;&gt;a:shuffle() <br />
    <br />
    &gt;&gt;a <br />
    "a"&nbsp;&nbsp;&nbsp; 1&nbsp;&nbsp;&nbsp; "b"&nbsp;&nbsp;&nbsp; 2
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>

    
    
    
<h3>slice</h3>
<p class="funcsignature">
    slice(index) &rarr; Array, Array
</p>
<p>Slices the array into 2 arrays as of the requested <em>index </em>and returns 2 arrays<em>.</em> 
    The original array itself is not affected.
</p>
<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, "a", "b"} <br />
    &gt;&gt;a1, a2=a:slice(2) <br />
    <br />
    &gt;&gt;a1 <br />
    1&nbsp;&nbsp;&nbsp; 2	<br />

    <br />

    &gt;&gt;a2 <br />
    "a"&nbsp;&nbsp;&nbsp; "b"	<br />

    <br />

    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
    
<h3>sort</h3>
<p class="funcsignature">
    sort(order=, caseSensitive=<span class="LuaKeyword">true</span>)
</p>

<p>
    Sorts the array either in ascending or descending order and/or case-sensitive or case-insensitive manner. Regardless of 
    case-sensitivity, the numbers are always assumed to be smaller than letters. <br />

    If <em>order</em>=&quot;A&quot; then the array is sorted in ascending order, if <em>order</em>="D" 
    then the array is sorted in descending order. The sorting by default is case-sensitive.
    </p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{2, "c", "a", "d", 1} <br />
    &gt;&gt;a <br />
    2&nbsp;&nbsp;&nbsp; "c"&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "d"&nbsp;&nbsp;&nbsp; 1 <br />

    <br />

    &gt;&gt;a:sort("A") <br />
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "c"&nbsp;&nbsp;&nbsp; "d" <br />

    <br />

    &gt;&gt;a:sort("D") <br />
    &gt;&gt;a <br />
    "d"&nbsp;&nbsp;&nbsp; "c"&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; 1

</p>



<p>&nbsp;</p>
<p>&nbsp;</p>


<h3>unique</h3>
<p class="funcsignature">
    unique()
</p>
<p>
    Removes the recurring elements so that the array contains only the unique elements. 
    At the end of the operation, the array is resized to only contain unique elements.
</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, "<span class="auto-style4">b</span>", "<span class="auto-style5">2</span>", "a", "<span class="auto-style4">b</span>", "<span class="auto-style5">2</span>"} <br />
    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; "b"&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"&nbsp;&nbsp;&nbsp; 2 <br />

    <br />

    &gt;&gt;a:unique() <br />

    <br />

    &gt;&gt;a <br />
    1&nbsp;&nbsp;&nbsp; 2&nbsp;&nbsp;&nbsp; "a"&nbsp;&nbsp;&nbsp; "b"	
</p>
    



<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="dataframe.php">DataFrame</a>
    
</div>
    
</body>
</html>