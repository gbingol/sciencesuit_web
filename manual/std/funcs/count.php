<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>count</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        table.spaced td
        {
            text-align: right;
            
            
            padding-left: 10px;
            padding-right: 10px;
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
    window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
</script>
    

<h1>count</h1>
<p>
    Counts the number of unique occurrences of entries in an Array or number of entries within an interval in a Vector.
</p>

<p class="funcsignature">
    
    count(Array) &rarr; 2D table <br>
    
    <br>
    
    count(Vector, [breaks="FD"],  [right=true]) &rarr; 2D Lua table<br>

    <br>

    count { Container, [breaks="FD"],  [right=true] } &rarr; 2D Lua table
        
    
</p>



<p>&nbsp;</p>


<h3 id="arguments">Arguments:</h3>
<table border="1" class="funcarguments">
    <tr>
        <td>Container:</td>
        <td>Array or Vector</td>
    </tr>
    
    <tr>
        <td>breaks:</td>
        <td>
            <em>integer:</em> A number greater than 0.<br>
            <em>table:</em> Break points must be within (min, max).<br>
            <em>string:</em> "FD" for Freedman–Diaconis, "Sturges" or "Rice"
        
        </td>
    </tr>
    
    <tr>
        <td>right:</td>
        <td><span class="LuaKeyword">true</span>: x&leq;b , <span class="LuaKeyword">false</span>: x&lt;b</td>
    </tr>
</table>





<!-- ******************************* Array ********************************* -->


<p>&nbsp;</p>


<h2 id="array">Array</h2>

<p class="CodeCommand">
    &gt;&gt;arr <br>
   "A"&emsp;"B"&emsp;"C"&emsp;2&emsp;1 &emsp;"A"&emsp;1&emsp;"B" <br>	
   
   <br>
   
    &gt;&gt;t=std.count(arr) <br>
    &gt;&gt;t <br>
    table&emsp;table&emsp;table&emsp;table&emsp;table <br>
    
    <br>
    
    <span class="LuaKeyword">for</span> i=1,#t <span class="LuaKeyword">do</span> <br>
    &emsp;print(t[i][1]," ", t[i][2]) <br>
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    
    1&emsp;2 <br>
    2&emsp;1 <br>
    A&emsp;2 <br>
    B&emsp;2 <br>
    C&emsp;1	
</p>

<p>&nbsp;</p>

<p>
    If entries of array are floating number, no comparisons are made whether two floating numbers are equal, 
    i.e., &vert; num1-num2 &vert; &lt; tolerance.
</p>

<div class="CodeCommand">
    &gt;&gt;arr2 <br>
    1.1 &emsp; 1.2 &emsp;1.3 &emsp;1.2 &emsp; 1.21 <br>
    
    <br>
    
    &gt;&gt;t2=std.count(arr2) <br>
    
    <br>
    
    <span class="LuaKeyword">for</span> i=1,#t2 <span class="LuaKeyword">do</span>  <br>
    &emsp;print(t2[i][1]," ", t2[i][2]) <br>
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    
    <table class="spaced">
        <tr>
            <td>1.1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1.2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>1.21</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1.3</td>
            <td>1</td>
        </tr>
    </table>
</div>





<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- ********************************** Vector ************************************ -->

<h2 id="vector">Vector</h2>
<p>
    Unlike Array where counts are performed based on number of unique elements, in Vectors 
    counts are performed <em>in an interval</em>. 
    If the interval is defined between numbers <em>a</em> and <em>b</em>, then:
</p>

<ol>
    <li>
        <em>Right-close:</em> 
        <span class="LuaKeyword">true</span>: x&leq;b , <span class="LuaKeyword">false</span>: x&lt;b
    </li>
</ol>



<p>&nbsp;</p>

<p>
    Below, let's initially demonstrate the differences between different methods, 
    i.e., Freedman–Diaconis and Sturges.
</p>

<div class="CodeCommand">
    &gt;&gt;v=std.rnorm(100) <br>
    
    <br>
    
    <span style="color: green">--"FD" is default</span> <br>
    &gt;&gt;t=std.count(v)<br>
    
    <br>
    
    <span class="LuaKeyword">for</span> i=1,#t <span class="LuaKeyword">do</span> <br>
    &emsp;print(t[i][1], " ", t[i][2], " ", t[i][3]) <br>
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    
    <table class="spaced">
        <tr>
            <td>-3.02854</td>
            <td>-2.42314</td>
            <td>1</td>
        </tr>
        <tr>
            <td>-2.42314</td>
            <td>-1.81774</td>
            <td>5</td>
        </tr>
        <tr>
            <td>-1.81774</td><td>-1.21234</td><td>9</td>
        </tr>
        <tr>
            <td>-1.21234</td>
            <td>-0.606934</td>
            <td>22</td>
        </tr>
        <tr>
            <td>-0.606934</td>
            <td>-0.00153288</td>
            <td>19</td>
        </tr>
        <tr>
            <td>-0.00153288</td>
            <td>0.603869</td>
            <td>20</td>
        </tr>
        <tr>
            <td>0.603869</td>
            <td>1.20927</td>
            <td>13</td>
        </tr>
        <tr>
            <td>1.20927</td>
            <td>1.81467</td>
            <td>11</td>
        </tr>
    </table>
  
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    &gt;&gt;v=std.rnorm(100) <br>
    &gt;&gt;t=std.count(v, "Sturges") <br>

    
    <br>
    
    <span class="LuaKeyword">for</span> i=1,#t <span class="LuaKeyword">do</span> <br>
    &emsp;print(t[i][1], " ", t[i][2], " ", t[i][3]) <br>
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    
    <table class="spaced">
        <tr>
            <td>-2.74052</td>
            <td>-2.01711</td>
            <td>3</td>
        </tr>
        <tr>
            <td>-2.01711</td>
            <td>-1.29371</td>
            <td>9</td>
        </tr>
        <tr>
            <td>-1.29371</td>
            <td>-0.570311</td>
            <td>17</td>
        </tr>
        <tr>
            <td>-0.570311</td>
            <td>0.15309</td>
            <td>30</td>
        </tr>
        <tr>
            <td>0.15309</td>
            <td>0.876492</td>
            <td>23</td>
        </tr>
        <tr>
            <td>0.876492</td>
            <td>1.59989</td>
            <td>12</td>
        </tr>
        <tr>
            <td>1.59989</td>
            <td>2.32329</td>
            <td>5</td>
        </tr>
        <tr>
            <td>2.32329</td>
            <td>3.0467</td>
            <td>1</td>
        </tr>
    </table>   
</div>
    


<p>&nbsp;</p>
<p>&nbsp;</p>


<p>
    Let's specify breaks either as number of breaks or as interval points.
</p>

<div class="CodeCommand">   
    <span style="color: green">--<em>number</em> of breaks</span> <br>
    
    &gt;&gt;t=std.count(v, 3) <br>
    
    <br>
    
    <span class="LuaKeyword">for</span> i=1,#t <span class="LuaKeyword">do</span> <br>
    &emsp;print(t[i][1], " ", t[i][2], " ", t[i][3]) <br>
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    
    <table class="spaced">
        <tr>
            <td>-3.02854</td>
            <td>-1.81774</td>
            <td>6</td>
        </tr>
        <tr>
            <td>-1.81774</td>
            <td>-0.606934</td>
            <td>31</td>
        </tr>
        <tr>
            <td>-0.606934</td>
            <td>0.603869</td>
            <td>39</td>
        </tr>
        <tr>
            <td>0.603869</td>
            <td>1.81467</td>
            <td>24</td>
        </tr>
    </table>
    
    
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    
    
    &gt;&gt; v=std.rnorm(100) <br>    
    &gt;&gt;t=std.count( v, {-2, 0, 2} ) <br>
    
    <br>
    
    <span class="LuaKeyword">for</span> i=1,#t <span class="LuaKeyword">do</span> <br>
    &emsp;print(t[i][1], " ", t[i][2], " ", t[i][3]) <br>
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    
    <table class="spaced">
        <tr>
            <td>a</td>
            <td>b</td>
            <td>N</td>
        </tr>

        <tr>
            <td>-2.38453</td>
            <td>-2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>-2</td>
            <td>0</td>
            <td>47</td>
        </tr>

        <tr>
            <td>0</td>
            <td>2</td>
            <td>48</td>
        </tr>

        <tr>
            <td>2</td>
            <td>2.57279</td>
            <td>3</td>
        </tr>
    </table>

</div>


<p>&nbsp;</p>
<p>&nbsp;</p>


<p>
    Finally, let's use the function with named arguments.
</p>


<div class="CodeCommand"> 
    &gt;&gt;t=std.count{ v, breaks={-2, 0, 2} } <br>
    
    <br>
    
    <span class="LuaKeyword">for</span> i=1,#t <span class="LuaKeyword">do</span> <br>
    &emsp;print(t[i][1], " ", t[i][2], " ", t[i][3]) <br>
    <span class="LuaKeyword">end</span> <br>
    
    <br>
    
    <table class="spaced">
        <tr>
            <td>a</td>
            <td>b</td>
            <td>N</td>
        </tr>

        <tr>
            <td>-2.38453</td>
            <td>-2</td>
            <td>2</td>
        </tr>
        <tr>
            <td>-2</td>
            <td>0</td>
            <td>47</td>
        </tr>

        <tr>
            <td>0</td>
            <td>2</td>
            <td>48</td>
        </tr>

        <tr>
            <td>2</td>
            <td>2.57279</td>
            <td>3</td>
        </tr>
    </table>
    
</div>





<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="../../plotter/histogram/histogram.php">histogram</a>
    <a href="histogram.php">std.histogram</a>
</div>


</body>

</html>
