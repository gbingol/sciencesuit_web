<!DOCTYPE HTML>
<html>
<head>
<title>Vector Class</title>
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script>
        document.createElement("red");
    </script>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css">

    <style>
        .auto-style4 
        {
            text-align: left;
        }


        .auto-style5 
        {
            color: #FF0000;
        }

        red
        {
            color: red;
        }

    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>

    
</head>





<body >
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


    
<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_OutlineFromH2H3Tags);
</script>



<h1>Vector</h1>

<p>
    Vectors in ScienceSuit is extremely flexible to work with. You can read from or change 
    elements of a vector in several ways. For accessing the elements of a vector the following are the possible cases:
</p>



<h2 id="elemaccess">Accessing Elements</h2>

<ol class="linespaced">
    <li>Accessing to single values</li>
    <li>Accessing to multiple values</li>
</ol>



<p> 
    The first case is fairly simple; however, the 2<sup>nd</sup> one requires attention.
</p>


<p>&nbsp;</p>

<p> 
    Let's start working with the following vector, <strong>v</strong>: 
    v = 1&emsp; 2&emsp; 3&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10
</p>


<h3 id="access_singlevalues">Case 1: Accessing to single values</h3>


<p>To change a single entry in the vector:</p>
<p class="CodeCommand">
    &gt;&gt;v[1]=11<br>
    &gt;&gt;v<br>
    <red>11</red>&emsp; 2&emsp; 3&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10
</p>



<p>To read a single entry from the vector:</p>
<p class="CodeCommand">
    &gt;&gt;v[1] &emsp; or&emsp; &gt;&gt;v(1)<br>
    11
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>


<h3 id="access_multiplevalues">Case 2: Accessing to multiple values</h3>

<p>Changing the 2<sup>nd</sup> and the 3<sup>rd</sup> entries in the vector to number 20:</p>


<p class="CodeCommand">
    &gt;&gt;v[{2, 3}] = 20<br>
    11&emsp;<red>20&emsp; 20</red>&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10
</p>

<p>&nbsp;</p>

<p>To change all entries to 30:</p>
<p class="CodeCommand">
    &gt;&gt;v[{}] = 30<br>
    30&emsp; 30&emsp; 30&emsp; 30&emsp; 30&emsp; 
    30&emsp; 30&emsp; 30&emsp; 30&emsp; 30
</p>

<p>&nbsp;</p>

<p>
    Following command changes entries <em>starting from 8</em><sup><em>th</em></sup> element to 10:
</p>

<p class="CodeCommand">
    &gt;&gt;v[ { from=8} ] = 10<br>
    30&emsp; 30&emsp; 30&emsp; 30&emsp; 30&emsp; 
    30&emsp; 30&emsp; <red>10&emsp; 10&emsp; 10</red>
</p>

<p>&nbsp;</p>


<p>
    To change entries starting <em>from 2</em><sup><em>nd</em></sup> element <em>to 4</em><sup><em>th</em></sup> element to 20:
</p>

<p class="CodeCommand">
    &gt;&gt;v[ {from=2, to=4} ] = 20<br>
    &gt;&gt;v<br>
    30&emsp; <red>20&emsp; 20&emsp; 20</red>&emsp; 30&emsp; 
    30&emsp; 30&emsp; 10&emsp; 10&emsp; 10
</p>

<p>&nbsp;</p>


<p>
    To change entries <em>from 1</em><sup><em>st </em></sup>element <em>to 10</em><sup><em>th</em></sup><em> 
    </em>element changing <em>by every 2</em><sup><em>nd</em></sup> element to 40:
</p>

<p class="CodeCommand">
    &gt;&gt;v[ {from=1, to=10, by=2} ] = 40<br>
    &gt;&gt;v<br>
    <red>40</red>&emsp; 20&emsp;<red>40</red>&emsp; 20&emsp; 
    <red>40</red>&emsp; 30&emsp; <red>40</red>&emsp; 10&emsp;
    <red>40</red>&emsp; 10 
</p>

<p>&nbsp;</p>



<p>
    Let v = 1&emsp; 2 &emsp;3 &emsp;4 &emsp;5 &emsp;
    6 &emsp;7 &emsp;8 &emsp;9 &emsp;10
</p>

<p>
    Changing 1<sup>st</sup> and 2<sup>nd</sup> elements to 20 and 30, respectively:
</p>
<p class="CodeCommand">
    &gt;&gt;v[ {1, 2} ] = {10, 20}<br>
    &gt;&gt;v<br>
    <red>10</red>&emsp; <red>20</red>&emsp; 3&emsp; 4&emsp; 
    5&emsp; 6&emsp; 7&emsp; 8&emsp; 9&emsp; 10 
</p>

<p>&nbsp;</p>

<p> 
    In the following 2 commands, the number of indices are different than the number of values to be assigned. 
    In such cases, the number of assignment that occurs is the minimum of number of indices and values, 
    i.e. if there are 3 indices and 2 values then only the first 2 indices will be assigned to the 2 values. 
</p>
<p class="CodeCommand">
    &gt;&gt;v[{1, 2, 3}] = {100, 200} <br>
    &gt;&gt;v<br>
    <red>100&emsp; 200</red>&emsp; 3&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10 <br>
    
    <br>
    
    &gt;&gt;v[{1, 2}] = {1, 2, 100}<br>
    &gt;&gt;v <br>
    <red>1&emsp; 2</red>&emsp; 3&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10 
</p>



<p>&nbsp;</p>


<p>
    In a similar fashion, in the following example we request all elements to be changed; 
    however, provide only 3 values. Therefore, only the first 3 entries have been changed.
</p>

<p class="CodeCommand">
    &gt;&gt;v[{}] = {11, 12,13}<br>
    &gt;&gt;v <br>
    <red>11&emsp; 12&emsp; 13</red>&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10 
</p>


<p>&nbsp;</p>


<p>
    Let's provide 3 values on the right-hand side and request to change to the 3<sup>rd</sup> 
    element (including the 3<sup>rd</sup>).
</p>


<p class="CodeCommand">
    &gt;&gt;v[{to=3}] = {1, 2, 3}<br>
    &gt;&gt;v <br>
    <red>1&emsp; 2&emsp; 3</red>&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10
</p>


<p>&nbsp;</p>


<p>
    In the following command, we want to change 3 entries starting from 5<sup>th</sup> element, 
    namely 5<sup>th</sup>, 6<sup>th</sup> and 7<sup>th</sup> entries, but provide 4 values on the right-hand side: 
</p>

<p class="CodeCommand">
    &gt;&gt;v[{from=5, to=7}] = {50, 60, 70, 80}<br>
    &gt;&gt;v<br>
    1&emsp; 2&emsp; 3&emsp; 4&emsp; 
    <red>50&emsp; 60&emsp; 70</red>
    &emsp; 8&emsp; 9&emsp; 10 
</p>


<p>&nbsp;</p>


<p>
    Similar to the previous one, in the following command, we want to change 3 entries; 
    however, this time starting from 7<sup>th</sup> element, namely 7<sup>th</sup>, 
    6<sup>th</sup> and 5<sup>th</sup> entries:
</p>

<p class="CodeCommand">
    <span class="LuaComment">-- note the order of the assignment, v[7]=7...<br></span>
    &gt;&gt;v[{from=7, to=5}] = {7, 6, 5} <br>
    &gt;&gt;v<br>
    1&emsp; 2&emsp; 3&emsp; 4&emsp; <red>5&emsp; 
    6&emsp; 7</red>&emsp; 8&emsp; 9&emsp; 10
</p>


<p>&nbsp;</p>


<p>
    Thus far we provided multiple values using a Lua table. However, we can also use a Vector on the right-hand side. 
    The way assignments work is same as the previous examples. Please note that in the following example 
    the vectors <em>v</em> and <em>a</em> have different sizes.
</p>


<p>
    v = [1 2 3 4 5 6 7 8 9 10]&emsp;&emsp;&nbsp; a = [10 20 30 40 50] 
</p>

<p class="CodeCommand">
    &gt;&gt;v[{1, 2}] = a<br>
    &gt;&gt;v  <br>
    <red>10&emsp; 20</red>&emsp; 3&emsp; 4&emsp; 5&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10<br>
    
    <br>
    &gt;&gt;v[{}] = a<br>
    
    <br>
    
    &gt;&gt;v <br>
    <red>10 &emsp; 20 &emsp;30&emsp; 40&emsp; 50</red>&emsp; 
    6&emsp; 7&emsp; 8&emsp; 9&emsp; 10
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>



<h2 id="arithmeticops">Arithmetic Operations</h2>
<p>
    Vector class supports essential arithmetic operations: Let <em>v<sub>1</sub></em>,<em>v<sub>2</sub></em>
    and <em>v<sub>3</sub></em> denote vectors of same size, <em>m</em> a matrix and <em>a</em> an arbitrary number.
</p>


<ol class="linespaced">
    <li>
        <u>Addition:</u> v<sub>1</sub> + v<sub>2</sub> = v<sub>3</sub> ;
        v<sub>1</sub> + a = a + v<sub>1</sub> = v<sub>2</sub>
    </li>
    
    <li>
        <u>Subtraction:</u> v<sub>1</sub> - v<sub>2</sub> = v<sub>3</sub> ; 
        v<sub>1</sub> - a = v<sub>2</sub> ; a - v<sub>1</sub> = v<sub>3</sub>
    </li>
    
    <li>
        <u>Multiplication:</u> v<sub>1</sub> * v<sub>2</sub> = v<sub>3</sub> ; 
        v<sub>1</sub> * a = a * v<sub>1</sub> = v<sub>2</sub>
    </li>
    
    <li>
        <u>Division:</u> v<sub>1</sub> / v<sub>2</sub> = v<sub>3</sub> ; 
        v<sub>1</sub> / a = v<sub>2</sub> ; a / v<sub>1</sub> = v<sub>3</sub>
    </li>
    <li>
        <u>Exponentiation:</u> v<sub>1</sub>^a = v<sub>2</sub> ; 
        a^v<sub>1</sub> = v<sub>3</sub>
    </li>
</ol>


<h3>Note</h3>
<p>
    Since a vector can have two shapes, namely column and row, during multiplication the order matters. 
    A <em>row*column=number</em>, whereas a <em>column*row=matrix</em>. 
    If both vectors are of same shape, then the return vector is an element-wise multiplication of both vectors.
</p>

<p>
    Vector data type also supports <em>__pairs</em> and <em>next</em> methods, therefore 
    is an <a href="../index.php">iteratable container</a>.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>













<h2 id="Member_Functions">Member Functions</h2>

<p>&nbsp;</p>



<h3 id="clone">clone</h3>
<p class="funcsignature">
    clone() &rarr; Vector
</p>
<p>
    Makes a deep copy of the vector itself. The following two commands are equivalent:
</p>

<p class="CodeCommand">
    &gt;&gt;v1=v:clone()<br>
    
    <br>
    
    &gt;&gt;v1=v({})
</p>

<p>
    Both will make a deep copy of <em>v</em> and assign the result to <em>v<sub>1</sub></em>.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="capacity">capacity</h3>
<p class="funcsignature">
    capacity() &rarr; integer
</p>
<p>
    Shows the current capacity of the vector. This is different than member function <em>size</em>. 
    Capacity shows how much memory is allocated for the Vector before it 
    automatically resizes (therefore allocates new memory space).
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="equal">equal</h3>
<p class="funcsignature">
    equal(arg, tol=1E-5) &rarr; Vector
</p>

<p>
    Tests whether the elements of the Vector is equal to a number (v<sub>i</sub>==a) 
    or elements of the Vector is equal to the elements of another 
    Vector (v1<sub><em>i</em></sub>==v2<sub><em>i</em></sub>). 
    The equality test is done using a predefined tolerance, which is 1E-5. 
    The tolerance level can be specified by the user.
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3.1, 3, 5, 5}<br>
    &gt;&gt;v<br>
    1&emsp; 2&emsp; 3.1&emsp; 3&emsp; 5&emsp; 5&emsp; COL
</p>

<p>&nbsp;</p>

<p>
    To obtain the elements in the vector that is equal to 3 using the default tolerance level, in other words 
    ScienceSuit performs the following check: &vert; v<sub>i</sub> - 3.0&vert; &le;10<sup>-5</sup> 
</p>


<p class="CodeCommand">
    &gt;&gt;v:equal(3)<br />
    3 
</p>

<p>Since only one element satisfied the condition, the return value is that element's value, a number.</p>

<p>&nbsp;</p>

<p>In the following command, we arbitrarily set the tolerance level to 0.2:</p>

<p class="CodeCommand">
    &gt;&gt;v:equal(3, 0.2)<br>
    3.1&emsp; 3&emsp; COL
</p>

<p>
    Now, it is seen that more than 1 element satisfied the condition due to a greater 
    tolerance value, therefore, the return value is a vector containing the elements 
    satisfying the condition.
</p>

<p>&nbsp;</p>

<p>If we want to test whether elements of the two vectors are equal with default tolerance level:</p>

<p class="CodeCommand">
    &gt;&gt;v1=std.util.tovector{1, 2, 3.1, 3, 5, 5}<br>
    &gt;&gt;v2=std.util.tovector{1, 2, 3, 3, 4, 5}<br>
    <br>
    &gt;&gt;v1:equal(v2)<br>
    1&emsp; 1&emsp; 0&emsp; 
    <red>1</red> &emsp; 0 &emsp; <red>1</red> &emsp; COL
</p>

<p>
    Note that if <em>v1</em> and <em>v2</em> were of different sizes, then an error would have been thrown.
</p>

<p>&nbsp;</p>

<p>If we were to set the tolerance level to 0.2:</p>

<p class="CodeCommand">
    &gt;&gt;v1:equal(v2, 0.2)<br>
    1&emsp; 1&emsp; <red>1</red>&emsp; 1&emsp; 0&emsp; 1&emsp; COL
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="greater">greater</h3>
<p class="funcsignature">
    greater(arg=) &rarr; Vector
</p>

<p>
    Works the same way as member function equal, except there is no tolerance defined. Tests for &gt; operator.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="greater_equal">greater_equal</h3>
<p class="funcsignature">
    greater_equal(arg=) &rarr; Vector
</p>
<p>
    Works the same way as member function equal, except there is no tolerance defined. 
    Tests for &ge; operator.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="insert">insert</h3>
<p class="funcsignature">
    insert(pos, elem)
</p>
<p>
    A number or another vector is inserted to the specified position.
</p>

<p>To insert <em>number</em> 10 to the 1<sup>st</sup> position in the vector:</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3}<br>
    &gt;&gt;v:insert(1, 10)<br>
    &gt;&gt;v<br>
    
    <red>10</red>&emsp;1&emsp; 2&emsp; 3&emsp; COL
</p>

<p>&nbsp;</p>

<p>To be able to insert another <em>vector</em> in to a specified position:</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3}<br>
    &gt;&gt;v2=std.util.tovector{10, 20, 30}<br>
    
    <br>
    
    &gt;&gt;v:insert(1, v2)<br>
    &gt;&gt;v<br>
   10&emsp; 20&emsp; 30&emsp; 1&emsp; 2&emsp; 3&emsp; COL
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="less">less</h3>
<p class="funcsignature">
    less(arg=) &rarr; Vector
<p>
    
<p>
    Works the same way as member function equal, except there is no tolerance defined. Tests for the &lt; operator.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="less_equal">less_equal</h3>
<p class="funcsignature">
    less_equal(arg=) &rarr; Vector
<p>
<p>
    Works the same way as member function equal, except there is no tolerance defined. Tests for the &le; operator.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="push_back">push_back</h3>
<p class="funcsignature">
    push_back(arg=)
</p>

<p> 
    Adds an element to the end of the vector. Let <em>v</em>= [1 &emsp;2&emsp; 3] and 
    <em>v<sub>1</sub></em>=[100 &emsp; 200]
</p>

<p>To add a single number at the end of the vector:</p>

<p class="CodeCommand">
    &gt;&gt;v:push_back(4)<br>
    &gt;&gt;v<br>
    1&emsp; 2&emsp; 3&emsp; <red>4</red>
</p>

<p>&nbsp;</p>

<p>
    To append a Lua table (made up of only numbers) to the previously changed vector:
</p>

<p class="CodeCommand">
    &gt;&gt;t={10, 20, 30}<br>

    <br>
    
    &gt;&gt;v:push_back(t)<br>
    
    <br>
    
    &gt;&gt;v<br>
    1&emsp; 2&emsp; 3&emsp;4&emsp; 
    <red>10&emsp; 20&emsp; 30 </red>
</p>

<p>&nbsp;</p>

<p>To append another vector to the previously modified vector:</p>

<p class="CodeCommand">
    &gt;&gt;v:push_back(v1)<br>
    &gt;&gt;v<br>
    1&emsp; 2&emsp; 3&emsp; 4&emsp; 
    10&emsp; 20&emsp; 30&emsp;
    <red>100&emsp; 200 </red>
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>










<h3 id="reserve">reserve</h3>
<p class="funcsignature">
    reserve(num=)
</p>

<p>
    Reserves memory for the vector to be used. If any operation, such as <em> push_back</em>, 
    that changes the number of elements in the vector is greater than the current <em>capacity</em> 
    then the <em>Vector</em> will automatically reallocate new memory and copy the elements to the new 
    location. The default is 1000.
</p>

<p class="CodeCommand">
    &gt;&gt;v:capacity()<br>
    1000 
</p>

<p>&nbsp;</p>

<p>
    In the following command, we attempt to reserve number of elements less than the current capacity:
</p>

<p class="CodeCommand">
    &gt;&gt;v:reserve(500)<br>
    &gt;&gt;v:capacity()<br>
    1000 
</p>

<p>&nbsp;</p>

<p>
    It is seen that the command was not successful since the capacity of the vector is still 1000. 
    However, if we attempt to reserve number of elements greater than the current capacity, the command will succeed:
</p>


<p class="CodeCommand">
    &gt;&gt;v:reserve(5000) <br>
    &gt;&gt;v:capacity() <br>
    5000
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>












<h3 id="resize">resize</h3>
<p class="funcsignature">
    resize(num=)
</p>

<p>
    Changes the size of the vector. If the requested new size is less than the current size, elements 
    from the end will be deleted. However, if the requested new size is greater than 
    the current size 0 will be appended. 
</p>

<p>Let <em>v=10 20 30</em></p>

<p>
    The original vector v is of size 3. The following command resizes the vector to 2, 
    therefore, the last entry of the vector, number 30, is deleted:
</p>

<p class="CodeCommand">
    &gt;&gt;v:resize(2)<br>
    10&emsp; 20 
</p>

<p>&nbsp;</p>

<p>
    Now the size of the vector is 2. If we resize the vector to 4, 0s will be appended:
</p>

<p class="CodeCommand">
    &gt;&gt;v:resize(4)<br>
    10&emsp; 20&emsp;0&emsp; 0 
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>












<h3 id="reverse">reverse</h3>
<p class="funcsignature">
    reverse()
</p>

<p>
    Reverses the order of elements.
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3, 4, 5}<br>
    &gt;&gt;v:reverse()<br>&gt;&gt;
    v<br>5&emsp; 4&emsp; 3&emsp; 2&emsp; 1&emsp; COL
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="shape">shape</h3>
<p class="funcsignature">
    shape() &rarr; string
</p>

<p>
    Returns the shape of the Vector. There are 3 different shapes, 
    namely <em>col</em>, <em>row</em> and <em>lnk</em>. The <em>lnk</em> 
    shape becomes only when referred from a Matrix data structure. The default shape for
    Vector is <em>col</em>.
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3}<br>
    &gt;&gt;v:shape()<br> 
    col
</p>

<p>&nbsp;</p>

<p>
    If we take the transpose of the vector, the shape changes to a row vector as evidenced by the following commands:
</p>
<p class="CodeCommand">
    &gt;&gt;v2=std.trans(v)<br>
    &gt;&gt;v2:shape()<br> 
    row
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>












<h3 id="shuffle">shuffle</h3>
<p class="funcsignature">
    shuffle()
<p>
    
<p>
    <em>Randomly</em> shuffles the positions of the elements in the vector.
</p>

<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3, 4, 5} <br>
    &gt;&gt;v:shuffle()<br>
    4&emsp; 1&emsp; 5&emsp; 2&emsp; 3 
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="slice">slice</h3>
<p class="funcsignature">
    slice(pos=) &rarr; Vector, Vector
</p>

<p>
    Slices the vector into two from the given position. The original vector is not affected.
</p>


<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1, 2, 3, 4, 5}<br>
    &gt;&gt;v1,v2=v:slice(3)<br>
    
    <br>
    
    &gt;&gt;v1<br>
    1&emsp; 2&emsp; 3&emsp; COL<br>

    <br>
    
    &gt;&gt;v2<br>
    4&emsp; 5&emsp; COL
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="sort">sort</h3>
<p class="funcsignature">
    sort(order=)
</p>

<p>
    The order can be either <em>"A"</em> or <em>"D</em> for ascending and descending order sorts, respectively.
</p>


<p class="CodeCommand">
    &gt;&gt;v=std.util.tovector{1,5,2,7,4}<br>
    &gt;&gt;v<br>
    1&emsp; 5&emsp; 2&emsp; 7&emsp; 4&emsp; COL
</p>


<p class="CodeCommand">
    &gt;&gt;v:sort(&quot;A&quot;)<br>
    &gt;&gt;v<br>1&emsp; 2&emsp; 4&emsp; 5&emsp; 7&emsp; COL
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="matrix.php">Matrix</a>
    <a href="range.php">Range</a>
    <a href="array.php">Array</a>
</div>

 


</body>
</html>