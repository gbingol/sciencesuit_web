<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        <title>Tokenizer</title>
        
        <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
        
	
    <style>
            td{
                    border: solid 1px;
            text-align: center;
            padding-left:10px;
            padding-right:10px;
            }

            table{
                    border-collapse: collapse;
            }

        tr:nth-child(2n+1){
            background-color:lightcyan;
        }

        tr:first-child{
            font-weight:bold;
            background-color:whitesmoke;
        }

        tr:nth-child(even)
        {
            background-color:lightyellow;
        }



        .auto-style1 {
            color: #0000FF;
        }



        .auto-style2 {
            background-color: #FFFF99;
        }



        .auto-style3 {
            background-color: #00FFFF;
        }

    
    
    </style>

</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>util.tokenize</h1>
<p>
    A powerful function to perform lexical analysis on a given piece of Lua code or some string literal.
</p>

<p class="funcsignature">
    tokenize (str=, ShowWhiteSpace=<span class="auto-style1">true</span>) &rarr; Lua Tables (tokens, token positions, token types)
</p>

<p>where argument <em>str</em> is the string to be tokenized.</p>
    <p>&nbsp;</p>
    <p><strong>Token Types</strong></p>
    
<table>
    <tr>
        <td>Token type</td>
        <td>Description</td>
    </tr>
    <tr>
        <td >num</td>
        <td >Any valid number</td>
    </tr>
    <tr >
        <td>name</td>
        <td> identifiers, variables</td>
    </tr>
    <tr>
        <td>unop</td>
        <td>Unary operators (~ and ~=)</td>
    </tr>
    <tr>
        <td>binop</td>
        <td>Binary operators</td>
    </tr>
    <tr>
        <td>vararg</td>
        <td>Variable arguments</td>
    </tr>
    <tr>
        <td>fieldsep</td>
        <td>Field separator ( <span class="auto-style1">;</span> and <span class="auto-style1">,</span> )</td>
    </tr>
    <tr>
        <td>lbl</td>
        <td>Label</td>
    </tr>
    <tr>
        <td>brkt</td>
        <td>Brackets</td>
    </tr>
    <tr>
        <td>punc</td>
        <td>Punctuation</td>
    </tr>
    <tr>
        <td>kword</td>
        <td>Keyword</td>
    </tr>
    <tr>
        <td>rword</td>
        <td>Reserved word</td>
    </tr>
    <tr>
        <td>asgnt</td>
        <td>Assignment</td>
    </tr>
    <tr>
        <td>nl</td>
        <td>Newline</td>
    </tr>
    <tr>
        <td>str</td>
        <td>String</td>
    </tr>
    <tr>
        <td>scmt</td>
        <td>Lua line comment</td>
    </tr>
    <tr>
        <td>wspc</td>
        <td>Whitespace</td>
    </tr>
</table>


<p>&nbsp;</p>


<h3>Examples</h3>
<p class="CodeCommand">
    &gt;&gt;std.util.tokenize("pi=3.14") 
    <br />
    pi&emsp; =&emsp; 3.14	<br />
    1&emsp; 3&emsp; 4	<br />
    name&emsp; asgnt&emsp; num <br />	
</p>

<p>
    <em>1</em><sup><em>st</em></sup><em> table:</em> Contains the actual tokens, which are&nbsp; <mark>pi</mark>, <mark>=</mark> 
    and <mark>3.14</mark>.
</p>

<p>
    <em>2</em><sup><em>nd</em></sup><em> table:</em> Contains the starting character position of each corresponding token, for example, 
    <mark>pi</mark> starts at 1st character whereas <mark>3.14</mark> starts at 4th character.
</p>

<p>
    <em>3<sup>rd</sup> table:</em> Contains the type of the tokens, for example <span class="auto-style2">pi</span> is of type <span class="auto-style2">name</span> whereas <span class="auto-style3">3.14</span> is type <span class="auto-style3">num</span>.
</p>


<p>&nbsp;</p>
<p>If whitespace characters (&#39; &#39; and &#39;\t&#39;) are of interest:</p>

<p class="CodeCommand">
    &gt;&gt;str="<span class="LuaKeyword">if</span>(a==3) <span class="auto-style1">then</span> b=5E-3 <span class="auto-style1">end</span>" <br />
    <br />
    &gt;&gt;std.tokenize(str) <br />
    <span class="LuaKeyword">if</span>&emsp; (&emsp; a&emsp; ==&emsp; 3&emsp; )&emsp; <span class="auto-style1">then</span>&emsp; b&emsp; =&emsp; 5E-3&emsp; <span class="auto-style1">end</span>    <br />	

    <br />

    1&emsp; 3&emsp; 4&emsp; 5&emsp; 7&emsp; 8&emsp; 9&emsp; 10&emsp; 14&emsp; 15&emsp; 16&emsp; 17&emsp; 21&emsp; 22	 <br />

    <br />

    rword&emsp; brkt&emsp; name&emsp; binop&emsp; num&emsp; brkt&emsp; wspc&emsp; rword&emsp; wspc&emsp; name&emsp; asgnt&emsp; num&emsp; wspc&emsp; rword	<br />
</p>

<p>&nbsp;</p>

<p>If whitespace characters are not of interest:</p>

<p class="CodeCommand">
    &gt;&gt;str="<span class="LuaKeyword">if</span>(a==3) <span class="auto-style1">then</span> b=5E-3 <span class="auto-style1">end</span>" <br />

    <br />

    &gt;&gt;std.util.tokenize(str, <span class="auto-style1">false</span>) <br />
    <span class="LuaKeyword">if</span>&emsp; (&emsp; a&emsp; ==&emsp; 3&emsp; )&emsp; <span class="auto-style1">then</span>&emsp; b&emsp; =&emsp; 5E-3&emsp; <span class="auto-style1">end</span>&nbsp;	<br />

    <br />

    1&emsp; 3&emsp; 4&emsp; 5&emsp; 7&emsp; 8&emsp; 10&emsp; 15&emsp; 16&emsp; 17&emsp; 22	<br />

    <br />

    rword&emsp; brkt&emsp; name&nbs&p;&nbsp;&nbsp; binop&emsp; num&emsp; brkt&emsp; rword&emsp; name&emsp; asgnt&emsp; num&emsp; rword

</p>
    


<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="activeworksheet.php">activeworksheet</a>
    <a href="tovector.php">tovector</a>
</div>


</body>
</html>