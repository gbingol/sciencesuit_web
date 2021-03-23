<!DOCTYPE HTML>
<html>
<head>
    <title>Matrix Class</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <script>
        document.createElement("red");
    </script>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css">
    <style>


        .auto-style2 {
            background-color: #DEDEDE;
        }

        .auto-style3 {
            text-align: left;
        }
        .auto-style4 {

            font-weight: bold;
        }

        .auto-style5 {
            background-color: #FFFF00;
        }

        .auto-style6 {
            color: #FF0000;
        }

        .auto-style7 {
            color: #0000FF;
            background-color: #DEDEDE;
        }
        
        ol.spaced10px li
        {
            padding-bottom: 10px;
            padding-top: 10px;
        }
        
        table.padded td
        {
            padding-left: 10px;
            padding-right: 10px;
            
            text-align: right;
        }
        
        table.padded td:last-child{
            color: #0000FF;
        }
        
        
        red{
            color: red;
        }
        
     

    </style>
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    

</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"] . "/mainmenu.php";
    include $mainmenuloc;
?>


    
<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
</script> 
    


<h1 >Matrix</h1>

<p>&nbsp;</p>



<p>
    Similar to <i><a href="vector.php">Vector</a></i> data structure that is specialized to manage 1D numeric data, <i>Matrix</i> 
    is also very flexible but to work with 2D numeric data. The following are the possible cases 
    to access (read/write) the elements of a matrix:
</p>

<ol class="linespaced">
    <li>Accessing single values</li>
    <li>Accessing multiple values</li>
</ol>



<p>&nbsp;</p>


<h2 class="head_l2"  id="access_elements">Access Elements</h2>

<h3 class="head_l3" >Accessing to single values</h3>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {3, 4, 5} , {6 , 7, 8} }<br>
    &gt;&gt;m<br>
    1&emsp; 2&emsp; 3<br>
    3&emsp; 4&emsp; 5<br>
    6&emsp; 7&emsp;8<br>

    <br>

    &gt;&gt;m[1][1]=10<br>
    &gt;&gt;m[{2}]=20<br>

    <br />

    &gt;&gt;m<br>
    10&emsp; 20&emsp;3<br>
    3&emsp;&nbsp;&nbsp; 4&emsp;&nbsp;&nbsp; 5<br>6&emsp;&nbsp;&nbsp; 7&emsp;&nbsp;&nbsp; 8
</p>

<p>
    <i>Command (<mark>m[1][1]=10</mark>)</i>: We access the matrix using <i> m[row][column]</i> access style. 
    Here we changed the first row and first column from 1 to 10.
</p>


<p id="linear_indexing">
    <i>Command (<mark>m[{2}]=20</mark>)</i>: We accessed the matrix using the <i><u>linear_indexing</u></i> concept. 
    The linear indexing for the (3x3) matrix, <i>m</i>, ranges from 1 to 9, where index 1 is equal to m[1][1] and 
    index 9 is equal to m[3][3].
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;m[2][3] or &gt;&gt;m(2,3)<br>
    5 <br>
    <br>
    &gt;&gt;m[{7}] <br>
    6
</p>

<p >
    One can quickly notice that the call <mark>m[2][3]</mark> is equivalent to
    <mark>m(2,3)</mark>. Similar to Vector, Matrix also supports reading both with index, 
    <i>[][]</i>, and function call, <i>()</i>, styles.
</p>




<p >&nbsp; </p>
<p >&nbsp; </p>



<h3 class="head_l3" >Accessing to multiple values</h3>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    &gt;&gt;m<br>
    1&emsp; 2&emsp; 3<br>
    4&emsp; 5&emsp; 6<br>
    7&emsp; 8&emsp; 9<br>

    <br>
    &gt;&gt;m[{1, 3, 5}]<br>
    1&emsp; 3&emsp; 5&emsp; COL<br>

    <br>
    &gt;&gt;m({1, 3, 5})<br>
    1&emsp; 3&emsp; 5&emsp; COL
</p>

<p >&nbsp;</p>

<p >
    It is seen that if the return value is a single number then the return type is number; however, if it is more than a 
    single value and 1D, then the return type is Vector.</p>

<p class="CodeCommand">
    &gt;&gt;m[ {from=3, to=5} ] = {30, 40, 50, 60}<br>
    &gt;&gt;m<br>
    1&emsp;&emsp;&nbsp;2&emsp; 30<br>
    40&emsp; 50 &emsp; 6<br>
    7 &emsp;&emsp; 8 &emsp; 9
</p>


<p >
    Here using <i>linear indexing</i> we request 
    that elements 3, 4 and 5 be equal to 30, 40 and 50. Since we request only 3 
    elements to be changed, the 4<sup>th</sup> element on the right-hand side, 
    number 60, was ignored. Following is another case.</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>

    <br />

    &gt;&gt;m[ {from=3, to=5} ] = {30, 40}<br>

    <br>

    &gt;&gt;m<br>
    1&emsp;&nbsp; 2 &emsp; <mark>30</mark><br>
    <mark>40</mark>&nbsp;&nbsp; 5&emsp;&nbsp; 6<br>
    7&emsp;&nbsp; 8&emsp;&nbsp; 9
</p>

<p>
    This time we have requested 3 elements on the left-hand side to be changed but only provided 2 numbers 
    on the right-hand side. Therefore, only 2 elements were changed.
</p>


<p>&nbsp;</p>



<p>
    In the following example, notice the use of keyword <i>by</i>:
</p>

<p class="CodeCommand">&gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    <br>&gt;&gt;m[ {from=3, to=9, by=4} ] = {30, 70, 90}<br>
    &gt;&gt;m<br>
    1&emsp;&nbsp; 2&emsp; <mark>30</mark><br>
    4&emsp;&nbsp; 5&emsp; 6<br>
    <mark>70</mark>&nbsp;&nbsp; 8&emsp; 9</p>



<p>&nbsp;</p>


<p>The following is doable as well:</p>

<p class="CodeCommand">&gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    <br>
    &gt;&gt;m[ {} ]={10, 20, 30, 40}<br>
    &gt;&gt;m<br>
    <span style="background-color: yellow"> 10&emsp; 20&emsp;30</span><br>
    <mark>40</mark>&emsp; 5&emsp;&emsp; 6<br>
    7&emsp;&nbsp;&nbsp; 8&emsp;&emsp; 9
</p>



<p>&nbsp;</p>
        

<p>
    On the right-hand side we can also use a Vector. The following example demonstrates this:
</p>

<p class="CodeCommand">&gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    &gt;&gt;v=std.util.tovector{10, 20, 30}<br>
    
    <br>
    
    &gt;&gt;m[{}] = v<br>
    &gt;&gt;m<br>
    <span style="background-color: yellow">10&emsp; 20&emsp; 30 </span><br>
    4&emsp;&nbsp;&nbsp; 5&emsp;&emsp; 6<br>
    7&emsp;&nbsp;&nbsp; 8&emsp;&emsp; 9
</p>



<p>&nbsp;</p>
        
<p>To change all the elements of a matrix to a single value:</p>
        
        
        
<p class="CodeCommand">&gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    
    <br>
    
    &gt;&gt;m[{}] = 10<br>
    &gt;&gt;m<br>
    10 &emsp;10 &emsp;10<br>
    10 &emsp;10 &emsp;10<br>
    10&emsp; 10&emsp; 10
</p>


<p>&nbsp;</p>


<p>
    To read a <i>single-column or a row</i>, the following syntax can be used:
</p>



<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    
    <br>
    
    &gt;&gt;m({}, 1) <br>
    <span class="LuaComment">- read the first column</span><br>
    1&emsp; 4&emsp; 7&emsp; COL<br>
    
    <br>
    
    <span class="LuaComment">- read the first row</span><br>
    &gt;&gt;m(1, {})<br>
    1&emsp; 2&emsp; 3&emsp; ROW
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>  





<h3 class="head_l3"  id="Link_Vectors">Link Vectors</h3>
<p>
    Internally a matrix is composed of vectors. Therefore, it is highly efficient to read a row in the following way:
</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    
    <br>
    
    &gt;&gt;m[1]<br>
    1&emsp; 2&emsp; 3&emsp; LINK
</p>


<p>
    However, although it can be noticed that the return type is a <i>Vector</i>, it is 
    neither <i>row</i> nor a <i>column</i> vector, but a <i>link</i> vector. 
    A <i>link</i> vector shares the same memory space with the row of a matrix and as mentioned 
    above this is due to the fact that <i>Matrix</i> is made up of <i>Vectors</i>. 
</p>


<p>&nbsp;</p>


<p>
    The following example is illustrative what could happen if caution is not exercised when working with link vectors.
</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>

    <br>

    &gt;&gt;v=m[1]<br>
    &gt;&gt;v[1]=10<br>

    <br />

    &gt;&gt;m<br>
    <mark>10</mark>&emsp; 2&emsp;&nbsp; 3<br>
    4&emsp;&nbsp;&nbsp; 5&emsp;&nbsp; 6<br>
    7&emsp;&nbsp;&nbsp; 8&emsp;&nbsp; 9
</p>

<p>In the above example:</p>
<ol class="linespaced">
    <li>Initially a link vector, namely <em>v</em>, is created using <mark>v=m[1]</mark> </li>
    <li>The first element of the <i>link</i> <i>Vector</i> is set to 10 by <mark>v[1]=10</mark>.</li>
</ol>

<p> 
    We notice that the <em>first element of the first row</em> of the matrix was also changed.
</p>


<p>&nbsp;</p>
        
<p>
    Question arises, what happens if <em>v</em> is garbage collected by Lua 
    (such as <mark>v=nil</mark> or when it is out of scope):
</p>

<p class="CodeCommand">
    <span class="LuaComment">--Continuing from the previous example</span> <br>
   >&gt;&gt;v=<span class="LuaKeyword">nil</span><br>
   
   <br>
   
    &gt;&gt;m<br>
    10&emsp; 2&emsp; 3<br>
    4&emsp;&nbsp;&nbsp; 5&emsp; 6<br>
    7&emsp;&nbsp;&nbsp; 8&emsp; 9
</p>

<p>
    It is seen that the matrix remains intact. Internally, when link vectors are destroyed, 
    the memory shared by the vector is not deleted, therefore the matrix is not affected.
</p>



<p>&nbsp;</p>

<h2 class="head_l2"  id="Mathematical_Operations">Mathematical Operations</h2>

<p>
    Matrix structure supports essential arithmetic operations: Let <i>m<sub>1</sub>, m<sub>2</sub></i> and 
    <i>m<sub>3</sub></i> denote matrix of same size, and <i>a</i> an arbitrary number.
</p>


<ol>
    <li>
        <u>Addition:</u> m<sub>1</sub> + m<sub>2</sub> = m<sub>3</sub>; m<sub>1</sub> + a = a + m<sub>1</sub> = m<sub>2</sub>
    </li>
    <li>
        <u>Subtraction:</u> m<sub>1</sub> - m<sub>2</sub>=m<sub>3</sub>; m<sub>1</sub> -a = m<sub>2</sub>; a - m<sub>1</sub> = m<sub>4</sub>
    </li>
    <li>
        <u>Multiplication:</u> m<sub>1</sub> * m<sub>2</sub>=m<sub>3</sub>; m<sub>1</sub> * a = a * m<sub>1</sub> = m<sub>3</sub>
    </li>
</ol>


<p >
    Besides the arithmetic operators, Matrix also supports <i>__pairs</i> and <i> next</i> methods, 
    therefore is an <a href="../index.php">iteratable container</a>.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 class="head_l2"  id="Member_Functions">Member Functions</h2>

<p>&nbsp;</p>

<h3 class="head_l3"  id="append">append</h3>
<p class="funcsignature">
    append (elem, align)
</p>

<p>
    Appends a vector or a Lua table to the matrix (please see <i>insert</i>). 
    The parameters:
    <i>elem:</i> Either a Vector or a Lua table. 
    <i>align:</i>Alignment of the inserted element, either "row" or "col".
</p>

<div class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    &gt;&gt;m<br>
    1&emsp; 2&emsp; 3<br>
    4&emsp; 5&emsp; 6<br>
    7&emsp; 8&emsp; 9<br>
    
    <br>
    &gt;&gt;m:append( {10, 20, 30}, "row") <br>
    &gt;&gt;m:append( {11, 12, 13, 14}, "col")<br>
    
    <table class="padded">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>11</td>
        </tr>
        <tr>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>12</td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>13</td>
        </tr>
        <tr>
            <td>10</td>
            <td>20</td>
            <td>30</td>
            <td>14</td>
        </tr>
    </table>
    
     
</div>


<p>&nbsp;</p>
 <p>
     Appending a <i>vector</i> is as same as appending a Lua table:
 </p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    &gt;&gt;v=std.util.tovector{10, 20, 30}<br>
    
    <br>
    
    &gt;&gt;m:append(v, "row")<br>
    &gt;&gt;m<br>
    1&emsp;&emsp; 2&emsp;&nbsp; 3<br>
    4&emsp;&emsp; 5&emsp;&nbsp; 6<br>
    7&emsp;&emsp; 8&emsp;&nbsp; 9 <br>
    <span style="color: red;">10&emsp; 20&emsp; 30
</p>





<p >&nbsp;</p>
<p >&nbsp;</p>




<h3 class="head_l3"  id="clone">clone</h3>
<p class="funcsignature">
    clone() &rarr; Matrix
</p>

<p>
    Makes an exact copy of the existing matrix. Notice the difference in the following commands.
</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    <br>
    
    <span class="LuaComment">-- array access via linear indexing (return type is vector)</span><br>
    &gt;&gt;m1=m[{}] <br>
    &gt;&gt;m1<br>
    1&emsp; 2&emsp; 3&emsp; 4&emsp; 
    5&emsp; 6&emsp; 7&emsp; 8&emsp; 9&emsp; COL<br>
    
    <br>
    
    <span class="LuaComment">-- function call access via two empty Lua tables (return type is matrix) </span><br>
    &gt;&gt;m2=m({},{}) <br>
    
    &gt;&gt;m2<br>
    1&emsp; 2&emsp; 3<br>
    4&emsp; 5&emsp; 6<br>
    7&emsp; 8&emsp; 9<br>
    
    <br>
    
    <span class="LuaComment">-- direct call of the clone member function equivalent to m({},{})</span><br>
    &gt;&gt;m3=m:clone()<br>
    &gt;&gt;m3<br>
    1&emsp; 2&emsp; 3<br>
    4&emsp; 5&emsp; 6<br>
    7&emsp; 8&emsp; 9
</p>





<p >&nbsp;</p>
<p >&nbsp;</p>




<h3 class="head_l3"  id="delc">delc</h3>
<p class="funcsignature">
    delc(pos=)
</p>
    

<p>
    Deletes a column at the specified position, if the matrix will have at least 2 columns after the deletion. 
    Otherwise an error message is returned.
</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    
    <br>
    &gt;&gt;m:delc(2)<br>
    &gt;&gt;m<br>
    
    1&emsp; 3<br>
    4&emsp; 6<br>
    7&emsp; 9
</p>




<p >&nbsp;</p>
<p >&nbsp;</p>



<h3 class="head_l3"  id="delr">delr</h3>
<p class="funcsignature">
    delr(pos=)
</p>

<p>
    Deletes a row at the specified position, if the matrix will have at least 2 rows after the deletion. 
    Otherwise an error message is returned.
</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    
    <br>
    
    &gt;&gt;m:delr(2)<br>
    &gt;&gt;m<br>
    1&emsp;&nbsp; 2&emsp;&nbsp; 3<br>
    7&emsp;&nbsp; 8&emsp;&nbsp; 9
</p>


<p >Alternatively, <mark>m[2]=nil</mark> would have given the same result.</p>





<p >&nbsp;</p>
<p >&nbsp;</p>




<h3 class="head_l3"  id="equal">equal</h3>
<p class="funcsignature">
    equal(arg, [tol=1E-5]) &rarr; Matrix
</p>

<p>
    Tests whether the elements of the Matrix is equal to a number (m<sub>ij</sub>==a) 
    or elements of the Matrix is equal to the elements of another Matrix (m1<i>ij</i>==m2<i>ij</i>). 
    The equality test is done using a predefined tolerance, which is 1E-5. 
    The tolerance level can be specified by the user.
</p>

<p class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {1.1, 2.1, 3.1} , {7, 8, 9} }<br>
    &gt;&gt;m<br>
    1&emsp;&emsp;&nbsp;&nbsp; 2&emsp;&emsp;&nbsp;&nbsp; 3<br>
    1.1&emsp;&nbsp; 2.1&emsp;&nbsp; 3.1<br>
    7&emsp;&emsp;&nbsp;&nbsp; 8&emsp;&emsp;&nbsp;&nbsp; 9<br>

    <br>
    &gt;&gt;m:equal(3)<font color="#127622">--default tolerance level</font><br />
    0&emsp; 0&emsp; 1<br>
    0&emsp; 0&emsp; 0<br>
    0&emsp; 0&emsp; 0<br>

    <br>
    &gt;&gt;m:equal(3, 0.11)<font color="#127622">--tolerance level is set to 0.11</font><br />
    0&emsp;&nbsp; 0&emsp;&nbsp; 1<br>
    0&emsp;&nbsp; 0&emsp;&nbsp; 1<br>
    0&emsp;&nbsp; 0&emsp;&nbsp; 0<br>

    <br>

    <br>
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>
    &gt;&gt;m2=std.util.tomatrix{ {1, 2, 3} , {1.1, 2.1, 3.1} , {7, 8, 9} }<br>

    <br>

    &gt;&gt;m:equal(m2)<br>
    1&emsp; 1&emsp; 1<br>
    0&emsp; 0&emsp; 0<br>
    1&emsp; 1&emsp; 1
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3"  id="greater">greater</h3>
<p class="funcsignature">
    greater(arg) &rarr; Matrix
</p>
<p>
    Works the same way as member function equal, except there is no <i>tolerance</i> defined. 
    Tests for the &gt; operator.
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 class="head_l3"  id="greater_equal">greater_equal</h3>
<p class="funcsignature">
    greater_equal(arg, tol=1E-5) &rarr; Matrix
</p>
<p>
    The function first tests for equality of the element with the given tolerance as detailed in the equal member function, 
    if this test fails then tests whether it is greater. Tests for the &gt;= operator.
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3"  id="insert">insert</h3>
<p class="funcsignature">
    insert (elem, pos, align)
</p>

<p>
    Inserts a vector or a Lua table to the matrix (please see <em>append</em>). The parameters:
</p>

<table class="funcarguments">
    <tr>
        <td>elem:</td>
        <td>Either a Vector or a Lua table.</td>
    </tr>
    <tr>
        <td>pos:</td>
        <td>A valid position starting from 1.</td>
    </tr>
    <tr>
        <td>align:</td>
        <td>Alignment of the inserted element, either "row" or "col".</td>
    </tr>
</table>

<p>&nbsp;</p>

<div class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3} , {4, 5, 6} , {7, 8, 9} }<br>

    <br>
    &gt;&gt;m:insert( {10, 20, 30}, 2, "col")<br>
    &gt;&gt;m<br>
    1&emsp;<red>10</red>&emsp;2&emsp; 3<br>
    4&emsp;<red>20 </red>&emsp; 5&emsp; 6<br>
    7&emsp;<red>30</red>&emsp; 8&emsp; 9<br>

    <br>
    &gt;&gt;m:insert({11, 12, 13, 14}, 1, "row")<br>
    &gt;&gt;m<br>
    <red> 11&emsp; 12&emsp; 13&emsp; 14</red><br>
    1&emsp;&nbsp;&nbsp; 10&emsp; 2&emsp;&emsp;3<br>
    4&emsp;&nbsp;&nbsp; 20&emsp; 5&emsp;&emsp;6<br>
    7&emsp;&nbsp;&nbsp; 30&emsp; 8&emsp;&emsp;9

</div>

<p>&nbsp;</p>
<p>The syntax of inserting a Vector to the matrix is same as inserting a Lua table.</p>

<div class="CodeCommand">
    &gt;&gt;m=std.util.tomatrix{ {1, 2, 3}, {4, 5, 6} , {7, 8, 9 } }<br>
    &gt;&gt;v=std.util.util.tovector{10, 20, 30}<br>

    <br>

    &gt;&gt;m:insert(v, 3, "col")<br>
    &gt;&gt;m<br>1&emsp; 2&emsp;<red>10</red>&emsp; 3<br>
    4&emsp; 5&emsp;<red>20</red>&emsp; 6<br>
    7&emsp; 8&emsp;<red>30</red>&emsp; 9
</div>

        
        
<p>&nbsp;</p>    
<p>&nbsp;</p>





<h3 class="head_l3"  id="less">less</h3>
<p class="funcsignature">
    less(arg) &rarr; Matrix
</p>
<p>
    Works the same way as member function equal, except there is no <i>tolerance</i> defined. Tests for the &lt; operator.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 class="head_l3"  id="less_equal">less_equal</h3>
<p class="funcsignature">
    less_equal(arg, tol=1E-5) &rarr; Matrix
</p>
<p>
    The function first tests for equality of the element with the given tolerance as described in the equal member function, 
    if this test fails then tests whether it is smaller. Tests for the &lt;= operator.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3"  id="ncols">ncols</h3>
<p class="funcsignature">
    ncols() &rarr; integer
</p>

<p>
    Returns the number of columns.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3"  id="nrows">nrows</h3>
<p class="funcsignature">
    nrows() &rarr; integer
</p>

<p>
    Returns the number of rows.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3"  id="sort">sort</h3>
<p class="funcsignature">
    sort(pos, order)
</p>

<p>Sorts the matrix by given column position.</p>

<table class="funcarguments">
    <tr>
        <td>pos:</td>
        <td>Column number according to which the matrix will be sorted.</td>
    </tr>
    <tr>
        <td>order:</td>
        <td>Sort order, either "A" or "D" for ascending and descending sorts.</td>
    </tr>
</table>


<p class="CodeCommand">
    &gt;&gt;m=std.floor( std.rand(3, 3)*10 ) <br>
    &gt;&gt;m<br>
    6&emsp;&nbsp; 7&emsp;&nbsp; 2<br>
    5&emsp;&nbsp; 8&emsp;&nbsp; 9<br>
    6&emsp;&nbsp; 9&emsp;&nbsp; 6<br>

    <br>
    &gt;&gt;m:sort(1, "D")<br>
    &gt;&gt;m<br>6&emsp;&nbsp; 7&emsp;&nbsp; 2<br>
    6&emsp;&nbsp; 9&emsp;&nbsp; 6<br>
    5&emsp;&nbsp; 8&emsp;&nbsp; 9
</p>

<p >&nbsp;</p>


<div class="RelatedLinks">
    <a href="vector.php">Vector Class</a>
    <a href="array.php">Array Class</a>
</div>
        
</body>
</html>