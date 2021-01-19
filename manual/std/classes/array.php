<!DOCTYPE HTML>
<html>
<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Class</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
	
    <style>
		
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
        
        
        .rightmargin
        {
            margin-right: 10%;
        }
        
        .spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;
        }
        
        
        
         @media only screen and (max-width:900px) 
        {
            .rightmargin
            {
                margin-right: 1%;
            }
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
<p class="rightmargin">
    Array is a 1D data structure and has the following properties:
</p>

<ol class="spaced">
    <li>
        Can contain numbers (float, integer) and non-numeric 
        (string, <span class="LuaKeyword">nil</span>) values. 
    </li>
    
    <li>
        The <span class="LuaKeyword">nil</span> value is meant 
        to show the absence of a value.
    </li>
    
    <li>
        When an array is part of a <a href="dataframe.php">DataFrame</a>, 
        then its status is called as <em>linked</em>.
    </li>
    
    <li>
        Mathematical operations (+, -, *, /) are defined for arrays.
    </li>
</ol>






<p>&nbsp;</p>
<p>&nbsp;</p>   
    
    





<h2 id="createarray">Creating Array</h2>
    
    
<h3 id="array_new">Array.new</h3>

<p class="funcsignature">
    Array.new(n=, [value=]) &rarr; Array 
</p>
    

<p>
    where <em>n</em> is the size of the array and 
    <em>value</em> is the initial value to be assigned.
</p>
    

<p class="CodeCommand">
    
    &gt;&gt;arr=std.Array.new(3) <br>
    &gt;&gt;arr <br>
    nil &emsp; nil &emsp; nil <br>
    
    
    <br>
    
    
    &gt;&gt;arr=std.Array.new(3, "a") <br />
    &gt;&gt;arr<br />
    "a"&emsp; "a"&emsp; "a" <br />
    
    <br />

    &gt;&gt;arr=std.Array.new(2, 3.14) <br />
    &gt;&gt;arr <br />
    3.14 &emsp; 3.14
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="array_rbinom">Array.rbinom</h3>

<p>
    Generates random sample for the binomial distribution. 
    See also <a href="../funcs/dist_binom.php#rbinom">std.rbinom</a>
</p>

<p class="funcsignature">
    Array.rbinom(n=, size=, prob=) &rarr; Array <br>
    
    <br>
    
    Array.rbinom{n=, size=, prob=} &rarr; Array
</p>
    

<p>
    where <em>n</em> is the size of the array, 
    <em>size</em> is number of independent trials, 
    <em>prob</em> is probability of success on each trial.
</p>

<p class="CodeCommand">
    &gt;&gt;arr=std.Array.rbinom(4, 5, 0.3) <br>
    &gt;&gt;arr <br>
    1 &emsp; 3 &emsp; 2 &emsp; 2 <br>
    
    <br>
    
    &gt;&gt;arr=std.Array.rbinom{n=4, size=5, prob=0.3} <br>
    &gt;&gt;arr <br>
    1 &emsp; 2 &emsp; 1 &emsp; 2 
    
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="array_rnorm">Array.rnorm</h3>

<p>
    Generates random sample for the normal distribution. 
    See also <a href="../funcs/dist_norm.php#rnorm">std.rnorm</a>
</p>

<p class="funcsignature">
    Array.rnorm(n=, mean=, sd=) &rarr; Array <br>
    
    <br>
    
    Array.rnorm{n=, mean=, sd=} &rarr; Array
</p>
    

<p>
    where <em>n</em> is the size of the array, 
    <em>mean</em> is the mean, 
    <em>sd</em> is standard deviation.
</p>

<p class="CodeCommand">
    &gt;&gt;arr=std.Array.rnorm(5, 0, 1) <br>
    &gt;&gt;arr <br>
    0.346302 &emsp; -0.927172 &emsp; -0.982216 &emsp; -0.426793 &emsp; 0.522837   <br> 
    
    <br>
    
    &gt;&gt;arr=std.Array.rnorm{n=5, mean=0, sd=1} <br>
    &gt;&gt;arr <br>
    0.948317 &emsp; -0.645659 &emsp; 0.930765 &emsp; -0.93667 &emsp; -1.27077  
</p>











<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="array_rpois">Array.rpois</h3>

<p>
    Generates random sample for the Poisson distribution. 
    See also <a href="../funcs/dist_pois.php#rpois">std.rpois</a>
</p>

<p class="funcsignature">
    Array.rpois(n=, lambda=) &rarr; Array <br>
    
    <br>
    
    Array.rpois{n=, lambda=} &rarr; Array
</p>
    

<p>
    where <em>n</em> is the size of the array, 
    <em>lambda</em> is the average number of events per interval (event rate).
</p>

<p class="CodeCommand">
    &gt;&gt;arr=std.Array.rpois(5, 3) <br>
    &gt;&gt;arr <br>
    2    6    2    3    5  <br>
    
    <br>
    
    &gt;&gt;arr=std.Array.rpois{n=5, lambda=3} <br>
    &gt;&gt;arr <br>
    2 &emsp; 3 &emsp; 5 &emsp; 7 &emsp; 2    
</p>











<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="array_rt">Array.rt</h3>

<p>
    Generates random sample for the Student t distribution. 
    See also <a href="../funcs/dist_t.php#rt">std.rt</a>
</p>

<p class="funcsignature">
    Array.rt(n=, df=) &rarr; Array <br>
    
    <br>
    
    Array.rt{n=, df=} &rarr; Array
</p>
    

<p>
    where <em>n</em> is the size of the array, 
    <em>df</em> is the degrees of freedom.
</p>

<p class="CodeCommand">
    &gt;&gt;arr=std.Array.rt(5, 10) <br>
    &gt;&gt;arr <br>
    -0.154984 &emsp; 0.680384 &emsp; -0.617251 &emsp; 0.244669 &emsp; -0.876343  <br>  
    
    <br>
    
    &gt;&gt;arr=std.Array.rt{n=5, df=10} <br>
    &gt;&gt;arr <br>
    0.310501 &emsp; 0.415393 &emsp; -0.224671 &emsp; 0.325173 &emsp; -0.523907      
</p>












<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="array_runif">Array.runif</h3>

<p>
    Generates random sample for uniform distribution. 
    See also <a href="../funcs/dist_unif.php#runif">std.runif</a>
</p>

<p class="funcsignature">
    Array.runif(n=, [min=0], [max=1]) &rarr; Array <br>
    
    <br>
    
    Array.runif{n=, [min=0], [max=1]} &rarr; Array
</p>
    

<p>
    where <em>n</em> is the size of the array, 
    <em>min</em> and <em>max</em> are [min, max].
</p>

<p class="CodeCommand">
    &gt;&gt;arr=std.Array.runif{n=5} <br>
    &gt;&gt;arr <br>
    0.882343 &emsp; 0.806082 &emsp; 0.867014 &emsp; 0.670998 &emsp; 0.363004  <br>
    
    <br>
    
    &gt;&gt;arr=std.Array.runif(5) <br>
    &gt;&gt;arr <br>
    0.142298 &emsp; 0.334995 &emsp; 0.546012 &emsp; 0.809353 &emsp; 0.118543  <br>
    
    <br>
    
    &gt;&gt;arr=std.Array.runif(5, 0, 1) <br>
    &gt;&gt;arr <br>
    0.87369 &emsp; 0.570477 &emsp; 0.124015 &emsp; 0.702127 &emsp; 0.958103 <br>
    
    <br>
    
    
    &gt;&gt;arr=std.Array.runif{n=5, min=0, max=1} <br>
    &gt;&gt;arr <br>
    0.871186 &emsp; 0.989612 &emsp; 0.660086 &emsp; 0.377646 &emsp; 0.627643    
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>











<h3>Other ways</h3>

<p>
    In order to create an array from:
</p>
<ul class="spaced">
    <li>
        Data in a Worksheet: <a href="../../workbook/createdatastructures.php">create data structures.</a>. 
    </li>
    
    <li>
        Vector, Matrix, Lua table: <a href="../funcs/toarray.php">std.toarray</a>
    </li>
    
</ul>


<p>
    






<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>    
    
 






<h2>Array Manipulation</h2>


<p>
    Consider the following array, <b>a</b>:&emsp; 
    a = 1&emsp; 2&emsp; 3&emsp; "a"&emsp; "b"
</p>

<p>&nbsp;</p>

<p>
    If you print the array using the command editor:
</p>

<p class="CodeCommand">
    &gt;&gt;a <br />
    1&emsp; 2&emsp; 3&emsp; "a"&emsp; "b"
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
    <span class="auto-style2">10</span>&emsp; 2&emsp; 3&emsp; <span class="auto-style2">"c"</span>&emsp; "b" 

</p>
    







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>









<!-- ************************Arithmetic Operations ********************************* -->

<h2 id="arithmeticops">Arithmetic Operations</h2>

<p>
    It has already been mentioned that an array can contain numbers (float, integer) 
    and non-numeric (string, <span class="LuaKeyword">nil</span>) values. The arithmetic 
    operations require array sizes to be equal. 
    
    <br> <br>
    
    If <em>A</em>, <em>B</em> and <em>C</em> are of type array and <b>op</b> is one of (+, -, *, /), then, 
    array arithmetic is defined as: C<sub>i</sub> = A<sub>i</sub> <b>op</b> B<sub>i</sub> 
</p>



<p>&nbsp;</p>



<p>
    It is seen that the values contained at i<sup>th</sup> position for <em>A</em>, <em>B</em> is the determiner 
    for the outcome of the i<sup>th</sup> position for <em>C</em>. 
    Therefore, the following set of rules are followed:
</p>

<ol class="spaced">
    <li>
        Any operation on <span class="LuaKeyword">nil</span> value, results in a <span class="LuaKeyword">nil</span> value.
    <li>
        string + string = string, (concatenation)
    </li>
    
    <li>
        string <b>op</b> string = <span class="LuaKeyword">nil</span>, where <b>op</b> is (-, *, /)
    </li>
    
    <li>
        string <b>op</b> number = <span class="LuaKeyword">nil</span>, where <b>op</b> is (+, -, *, /)
    </li>
    
    <li>
        number <b>op</b> number = number, where <b>op</b> is (+, -, *, /)
    </li>
    
</ol>

<p>
    Note that, <span style="background-color: lightgoldenrodyellow"> number <b>op</b> number = number</span> 
    can result in one of the following: <b>inf</b>, <b>-inf</b> and <b>NAN</b>.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>





<!-- ************************Member Functions********************************* -->

<h2 id="memberfuncs">Member functions</h2>
    

<h3 id="capacity">capacity</h3>

<p class="funcsignature">
    capacity() &rarr; integer
</p>

<p>Returns the capacity of the array. </p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, 3, "a", "b"} <br />
    &gt;&gt;a <br />
    1&emsp; 2&emsp; 3&emsp; "a"&emsp; "b" <br />

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
    reallocation of the memory to accommodate more elements, thus causing a 
    copying of all of the existing elements.
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>

 







    
<h3 id="clone">clone</h3>

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
    <span class="auto-style2">10</span>&emsp; 2 &emsp; 3 &emsp; "a" &emsp; "b"	

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
    1 &emsp; 2 &emsp; 3 &emsp; "a" &emsp; "b"	<br />

    <br />

    &gt;&gt;b <br />
    10 &emsp; 2 &emsp; 3 &emsp; "a" &emsp; "b"
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="dtypes">dtypes</h3>

<p class="funcsignature">
    dtypes() &rarr; Lua table
</p>

<p>
    Returns the number of float, int, <span class="LuaKeyword">nil</span> and string elements.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp; 2 &emsp; 3 <br>
    
    <br>
    
    &gt;&gt;arr:dtypes() <br>
    string=1 &emsp; number=2 &emsp; nil=0

</p>










<p>&nbsp;</p>
<p>&nbsp;</p>












<h3 id="erase">erase</h3>

<p class="funcsignature">
    erase(pos)
</p>

<p>
    Erases the element at the specified position as long as array will have 
    at least one element at the end of the operation.
</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, 2, 3, "a", "b"} <br />

    <br />

    &gt;&gt;a:erase(4) <br />
    &gt;&gt;a <br />
    1 &emsp; 2 &emsp; 3 &emsp; "b"	<br />

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









<h3 id="insert">insert</h3>

<p class="funcsignature">
    insert(i, elem)
</p>

<p>Inserts a number, 1D Lua table or an array at <em>i<sup>th</sup> </em>position.</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{"a", "b"} <br />
    &gt;&gt;a:insert( 2, {1, <span class="auto-style2">"c"</span>} ) <br />

    <br />

    &gt;&gt;a <br />
    "a"&emsp; <span class="auto-style2">"c"</span> &emsp; 1 &emsp; "b"	<br />

    <br />
    <br />

    &gt;&gt;a=std.toarray{"a", "b"} <br />
    &gt;&gt;a2=std.toarray{<span class="auto-style3">1</span>, "c"} <br />

    <br />

    &gt;&gt;a:insert( 2, a2) <br />
    &gt;&gt;a <br />
    "a"&emsp; <span class="auto-style3">1</span>&emsp; "c" &emsp; "b"	
</p>

<p>
    Note that, when a Lua table is inserted into the array, there is no guarantee 
    that the order of the elements in the table will be preserved when they are inserted to the array. 
    If order of the elements matter, insert elements as an array or individually.
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>










<h3 id="is_linked">is_linked</h3>

<p class="funcsignature">
    is_linked() &rarr; boolean
</p>

<p>
    Returns <span class="LuaKeyword">true</span> if array is linked to a <a href="dataframe.php">DataFrame</a>, 
    otherwise returns <span class="LuaKeyword">false</span>
</p>

<p class="CodeCommand">
    <span class="LuaComment">--Reading a column from a DataFrame</span><br>
    &gt;&gt;arr=df("A") <br>
    &gt;&gt;arr:is_linked() <br>
    <span class="LuaKeyword">true</span> <br>
    
    <br>
    
    &gt;&gt;arr2=arr:clone() <br>
    &gt;&gt;arr2:is_linked() <br>
    <span class="LuaKeyword">false</span>
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="keep_numbers">keep_numbers</h3>

<p class="funcsignature">
    keep_numbers()
</p>

<p>
    Only keep the numbers and discard the others.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp; "b" &emsp; 1 &emsp; 2 &emsp; 3.5 &emsp; <span class="LuaKeyword">nil</span><br>

    <br>
    
    &gt;&gt;arr:keep_numbers() <br>
    
    <br>
    
    &gt;&gt;arr <br>
    1 &emsp; 2 &emsp; 3.5   
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="keep_strings">keep_strings</h3>

<p class="funcsignature">
    keep_strings()
</p>

<p>
    Only keep the strings and discard the others.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp; "b" &emsp; 1 &emsp; 2 &emsp; 3.5 &emsp; <span class="LuaKeyword">nil</span><br>

    <br>
    
    &gt;&gt;arr:keep_strings() <br>
    
    <br>
    
    &gt;&gt;arr <br>
    "a" &emsp; "b"   
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="push_back">push_back</h3>

<p class="funcsignature">
    push_back(elem)
</p>

<p>
    Inserts the <em>elem</em> at the end of the array. The argument <em>elem</em> 
    can be number (float, integer), string or <span class="LuaKeyword">nil</span> value.
</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{"a", "b"} <br />
    &gt;&gt;a:insert(3, "c") <br />
    ERROR: Requested position index exceeds array's size. <br />

    <br />

    &gt;&gt;>a:push_back("c") <br />
    &gt;&gt;a <br />
    "a"&emsp; "b"&emsp; "c"
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="remove_numbers">remove_numbers</h3>

<p class="funcsignature">
    remove_numbers()
</p>
   
<p>
    Removes all the elements of type <em>float</em>.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp;  1  &emsp;  "b"  &emsp;  2  &emsp;  3.14  &emsp;  nil &emsp;   4.5 <br>
    
    <br>
    
    &gt;&gt;arr:remove_numbers() <br>
    &gt;&gt;arr <br>
    "a" &emsp;  "b"  &emsp;  nil
    
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>













<h3 id="remove_nils">remove_nils</h3>

<p class="funcsignature">
    remove_nils()
</p>

<p>
    Removes all the elements of type <em>nil</em>.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp;  1  &emsp;  "b"  &emsp;  2  &emsp;  3.14  &emsp;  nil &emsp;   4.5 <br>
    
    <br>
    
    &gt;&gt;arr:remove_nils() <br>
    &gt;&gt;arr <br>
    a" &emsp;  1  &emsp;  "b"  &emsp;  2  &emsp;  3.14 &emsp;   4.5  
    
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="remove_strings">remove_strings</h3>

<p class="funcsignature">
    remove_strings()
</p>

<p>
    Removes all the elements of type <em>string</em>.
</p>

<p class="CodeCommand">
    &gt;&gt;arr <br>
    "a" &emsp;  1  &emsp;  "b"  &emsp;  2  &emsp;  3.14  &emsp;  nil &emsp;   4.5 <br>
    
    <br>
    
    &gt;&gt;arr:remove_strings() <br>
    &gt;&gt;arr <br>
    1  &emsp;  2  &emsp;  3.14  &emsp;  nil &emsp;   4.5  
    
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>









    
<h3 id="reserve">reserve</h3>

<p class="funcsignature">
    reserve(n)
</p>

<p>
    Requests that the array <em>capacity</em> be at least enough to contain 
    <em>n </em>number of elements. If the parameter <em>n</em> is smaller than 
    the current capacity, calling reserve has no effect.
</p>

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








<h3 id="resize">resize</h3>

<p class="funcsignature">
    resize(n) &rarr; Array
</p>

<p>
    Resizes the array, which is not of type LINK, so that it contains 
    <em>n</em> number of elements. 
    Depending on the requested number, the Array can shrink or expand.
</p>

<p class="CodeCommand">
    &gt;&gt;arr=std.toarray{1, 2, "a", "b"} <br />
    &gt;&gt;a <br />
    1&emsp; 2&emsp; "a"&emsp; "b"	<br />
    &gt;&gt;#a <br />
    4	<br />

    <br />

    &gt;&gt;a:resize(6) <br />
    &gt;&gt;a <br />
    1&emsp; 2&emsp; "a"&emsp; "b"&emsp; 0&emsp; 0	<br />
    
    &gt;&gt;#a <br />
    6	<br />

    <br />

    &gt;&gt;a:resize(3) <br />
    &gt;&gt;a <br />
    1&emsp; 2&emsp; "a"	<br />
    
    &gt;&gt;#a <br />
    3	<br>
    
    
    <br>
    <br>
    
    
    &gt;&gt;arr=df("A") <br>
    &gt;&gt;arr <br>
    "a" &emsp;   2  &emsp;  3 &emsp;   LINK <br>
    
    <br>
    
    &gt;&gt;arr:resize(5) <br>
    <span style="color: red;">[string "return arr:resize(5)"]:1: resize operation is not allowed for linked arrays </span>
    
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>

  





    
<h3 id="shuffle">shuffle </h3>
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
    "a"&emsp; 1&emsp; "b"&emsp; 2
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>
    







    
    
<h3 id="sort">sort</h3>

<p class="funcsignature">
    sort(order=, caseSensitive=<span class="LuaKeyword">true</span>)
</p>

<p>
    Sorts the array either in ascending or descending order and/or case-sensitive or case-insensitive manner. Regardless of 
    case-sensitivity, the numbers are always assumed to be smaller than letters. <br />

    If <em>order</em>="A" then the array is sorted in ascending order, if <em>order</em>="D" 
    then the array is sorted in descending order. The sorting by default is case-sensitive.
</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{2, "c", "a", "d", 1} <br />
    &gt;&gt;a <br />
    2&emsp; "c"&emsp; "a"&emsp; "d"&emsp; 1 <br />

    <br />

    &gt;&gt;a:sort("A") <br />
    &gt;&gt;a <br />
    1&emsp; 2&emsp; "a"&emsp; "c"&emsp; "d" <br />

    <br />

    &gt;&gt;a:sort("D") <br />
    &gt;&gt;a <br />
    "d"&emsp; "c"&emsp; "a"&emsp; 2&emsp; 1

</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="unique">unique</h3>

<p class="funcsignature">
    unique()
</p>

<p>
    Removes the recurring elements so that the array contains only the unique elements. 
    At the end of the operation, the array is resized to only contain unique elements.
</p>

<p class="CodeCommand">
    &gt;&gt;a=std.toarray{1, "<span class="auto-style4">b</span>", "<span class="auto-style5">2</span>", "a", 
    "<span class="auto-style4">b</span>", "<span class="auto-style5">2</span>"} <br />
    
    &gt;&gt;a <br />
    1&emsp; "b"&emsp; 2&emsp; "a"&emsp; "b"&emsp; 2 <br />

    
    <br />

    &gt;&gt;a:unique() <br />

    <br />

    &gt;&gt;a <br />
    1&emsp; 2&emsp; "a"&emsp; "b"	
</p>
    







<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="dataframe.php">DataFrame</a>
    <a href="vector.php">Vector</a> 
</div>
   




</body>
</html>