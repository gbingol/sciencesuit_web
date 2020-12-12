<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>find</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

    
    
    
<h2 id="find">find</h2>

<p>
    Finds the location of the first occurence of an entry in an <a href="../index.php">iteratable container</a>. 
</p>

<p class="funcsignature">  
    find(container=, value=, tol=1E-5) &rarr; integer/nil 
</p>

<p>If successful returns the index of the entry, otherwise nil.</p>
    



<p>&nbsp;</p>
    



<h3>Arguments:</h3>
    
<table class="funcarguments">
    <tr>
        <td>container:</td> 
        <td>An iteratable container</td>
    </tr>

    <tr>
        <td>value:</td> 
        <td>Value being searched</td>
    </tr>

    <tr>
        <td>tol:</td> 
        <td>Tolerance, only used when searched for numeric entries.</td>
    </tr>
</table>
   
    
<p>&nbsp;</p>



<p class="CodeCommand">
    &gt;&gt;t={1, 5, 3, 8, 8, -1} <br />
    &gt;&gt;std.find(t, 8) <br />
    4	<br />
    
    <br />

    &gt;&gt;t={"a","c","d","e"} <br />
    &gt;&gt;std.find(t, "d") <br />
    3	<br />
    
    <br />
    
    &gt;&gt;m2=std.tomatrix{ {1, 2} , {4, 5} , {7, 8} } <br />
    &gt;&gt;std.find(m2, 5) <br />
    4	<br />

    <br />

    &gt;&gt;m2[{4}] <br />
    5	
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>








<!-- *********************************************************************** -->

<h2 id="find_if">find_if</h2>
    
<p>
    Finds the locations of the entries in an <a href="../index.php">iteratable container</a> 
    satisfying a given condition.</p>

<p class="funcsignature">
    find_if(container=, func=) &rarr; Lua table/nil 
</p>

<p>If successful returns the indexes of the entries in a Lua table, otherwise nil.</p>
    


<p>&nbsp;</p>
    


<h3>Arguments:</h3>

<table class="funcarguments">
    <tr>
        <td>container:</td> <td>An iteratable container</td>
    </tr>

    <tr>
        <td>func:</td> <td>A Unary Predicate function</td>
    </tr>

</table>

<p class="CodeCommand">
    &gt;&gt;t={1, 5, 3, 8, 8, -1} <br />

    <br />

    &gt;&gt;std.find_if(t, function(x) return x>3 end) <br />
    2&emsp; 4&emsp; 5	<br />
    
    <br />

    &gt;&gt;std.find_if(t, function(x) return x==5 end) <br />
    2	<br />

    <br />

    &gt;&gt;std.find_if(t, function(x) return x<3 end) <br />
    1&emsp; 6	
</p>
    







<p>&nbsp;</p>
<p>&nbsp;</p>






    
    
<!-- ********************************************************************** -->

<h2 id="findfirst_if">findfirst_if</h2>
    
<p>
    Finds the location of the first entry in an <a href="../index.php">iteratable container</a> 
    satisfying a given condition.
</p>

<p class="funcsignature">    
    find_if(container=, func=) &rarr; integer/nil    
</p>

<p>If successful returns the index of the entry, otherwise nil.</p>
   


<p>&nbsp;</p>
    


<h3>Arguments:</h3>
 
<table class="funcarguments">
    <tr>
        <td>container:</td> <td>An iteratable container</td>
    </tr>

    <tr>
        <td>func:</td> <td>A Unary Predicate function</td>
    </tr>

</table>

    <p>
        &nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;t={1, 5, 3, 8, 8, -1} <br />

    <br />

    &gt;&gt;std.findfirst_if(t, function(x) return x>3 end) <br />
    2&emsp; <br />
    
</p>
    







<p>&nbsp;</p>
<p>&nbsp;</p>
    
   







<!-- *********************************************************************** -->
    
    
<h2 id="find_minmax">find_minmax</h2>
    
<p>
    In an <a href="../index.php">iteratable container</a> finds the locations of the entries with minimum and maximum values.
</p>

<p class="funcsignature">
    find_minmax(container=) → integer, integer
</p>

<p>Returns the indexes of the minimum and maximum entries, respectively.</p>
    

<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;v=std.rand(5) <br />
    &gt;&gt;v <br />
    0.518885&emsp; 0.0746056&emsp; 0.456635&emsp; 0.460327&emsp; 0.784585&emsp; COL <br />

    <br />

    &gt;&gt;std.find_minmax(v) <br />
    2&emsp; 5 <br />
    
    <br />

    &gt;&gt;t={"b", "a", "c", "d"} <br />
    &gt;&gt;std.find_minmax(t) <br />
    2&emsp; 4	

</p>
    

<p>&nbsp;</p>


<p>
    Note that, the entries of the container must be comparable such that operators 
    <em>&gt;</em> and <em>&lt;</em> must be defined on them.
</p>

<p class="CodeCommand">
    &gt;&gt"a" &gt; "b" <br />
    false <br />

    <br />

    &gt;&gt"ac" &gt; "ab" <br />
    true <br />

    <br />

    &gt;&gt; 2 &lt; 5 <br />
    true
</p>
    





<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="accumulate.php">accumulate</a>
    <a href="minmax.php">minmax</a>  
</div>

    

</body> 

</html>
