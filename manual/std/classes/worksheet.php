<!DOCTYPE HTML>
<html>
<head>
<title>Worksheet Class</title>

	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>

              
        .auto-style4 {
            text-decoration: underline;
        }
        .auto-style6 {
            color: #800080;
        }

        table.keyvalue{
            border-collapse:collapse;
            
        }

         table.keyvalue tr:first-child{
            font-weight:bold;
            text-align:center;
        }
        

        table.keyvalue td{
            border:solid 1px;
            
            padding:10px 10px 10px 10px;

        }


        .auto-style7 {
            color: #FF0000;
            background-color: #DEDEDE;
        }
        .auto-style8 {
            background-color: #66FF33;
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


<h1>Worksheet Class</h1>

<p>
    A worksheet is a container for data and also hosts <a href="range.php">Range</a> objects. 
</p>

<p>&nbsp;</p>

<h2 id="creating_closing">Creating and Closing</h2>

<p>
    A worksheet is part of the workbook, therefore a statement like the following is <span class="auto-style4">not valid</span>:
</p>

<p class="CodeCommand">
    &gt;&gt; ws=Worksheet.new()
</p>
   
<p>&nbsp;</p>

<p>However, a worksheet in a workbook can be created using the 
    <a href="../../std/funcs/appendworksheet.php">appendworksheet</a> function.
</p>

<p class="CodeCommand">
    &gt;&gt;ws=std.appendworksheet()
</p> 
    
<p>where the variable <em>wb</em> is of type Workbook and <em>ws</em> is of type worksheet.</p>


<p>&nbsp;</p>

<p>When a worksheet is closed:</p>

<ul>
    <li>The action cannot be undone.</li>

    <li>All <a href="range.php">Range</a> objects, created via the <a href="#selection">selection</a> member function or using the 
        GUI will be invalid. This means that there will be no more access to these variables.</li>
</ul>







<p>&nbsp;</p>
<p>&nbsp;</p>
   
    




<h2 id="accessing_data">Accessing Data</h2>
<p>
    Understanding the location of the cells is important when accessing the cell in a worksheet . 
    The <em>topleft</em> cell of the worksheet,<em> A1,</em> 
    is (<em>1,1</em>). Similarly, A2 and B2 are (1,2) and (2,2), respectively. 
</p>



<p>&nbsp;</p>


<h3 id="readfromcells">Reading from Cells </h3>
<p>
    There are two ways the content of a cell can be read: 
</p>

<ol>
    <li>
        <em>Array Access[][]:</em>&emsp; <mark>ws[1][1]</mark> will access the content of A1, 
        where <em>ws</em> is of type worksheet.
    </li>
    <li><em>Function call ():</em>&emsp;&nbsp; <mark>ws(2,2)</mark> will read the content of B2, 
        where <em>ws</em> is of type worksheet.
    </li>

</ol>




<p>&nbsp;</p>



<h4>Example</h4>
<p>Consider the worksheet in the following image:</p>

<img alt="" src="../images/classes/worksheet_readdata.png" alt="" />

<p class="CodeCommand">
     &gt;&gt;wb=std.activeworkbook()&nbsp; <br />
     &gt;&gt;ws=wb:cur() <br />
     &gt;&gt;ws(1,1) <br />
     1  <br />

    <br />

     &gt;&gt;ws[1][1] <br />
    1   <br />

    <br />

    &gt;&gt;ws(2,2)    <br />
    4   <br />

    <br />

    &gt;&gt;ws[2][2]   <br />
    4
</p>
<p>
    where <em>wb</em> is of type workbook and <em>ws</em> is of type worksheet.
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="writingtocells">Writing to Cells</h3>
<p>
    Using the <em>array access</em> we can easily write to a cell. Let's work on the worksheet containing the data from A1 to B2 shown above. 
    After executing the following commands, observe the difference:
</p>
    
<p class="CodeCommand">
    &gt;&gt;ws[1][1]=10 <br />
    
    <br />
    
    &gt;&gt;ws[2][2]=40 <br />
    
    <br />
    
    &gt;&gt;ws[1][3]="C1" <br />
    
    <br />
    
    &gt;&gt;ws[3][1]="A3"
</p>


<img alt="" src="../images/classes/worksheet_writedata.png" />
<p>
    It is seen that with the first command, <mark>A1</mark> is changed from 1 to 10 and with the second command <mark>B2</mark> 
    is changed from 4 to 40. Third and fourth commands have added entries "C1" and "A3" to cells <mark>C1</mark> and 
    <mark>A3</mark>, respectively. 
</p>


<p>&nbsp;</p>


<h3 id="formattedoutput">Formatted Output</h3>
<p>
    Although it was already shown how to write to cells, using this style will use the 
    default formatting available in that particular cell. Therefore, when writing to the cells using the 
    following style gives no control over format if you wish to have.
</p>

<p class="CodeCommand">
    &gt;&gt;ws[1][1]="A1"
</p>

<p>
    In order to use formatted output, instead of string or number, we use a Lua table on the right-hand side. 
    The keys and values are as follows:
</p>


<table class="keyvalue">
    <tr>
        <td>Key</td>
        <td>Value</td>
    </tr>

    <tr>
        <td>value</td>
        <td>
            Sets the value of the cell, either string or number.
        </td>
    </tr>

    <tr>
        <td>fgcolor, bgcolor  (fgcolour, bgcolour)</td>
        <td>
            String in the format of "<em>R G B</em>". R, G and B must be in the range of [0, 255]. 
            fgcolor sets the text color whereas bgcolor sets the background color of the cell.
        </td>
    </tr>

    <tr>
        <td>style</td>
        <td>
            "<em>italic</em>" makes it italic, "normal" makes it non-italic.
        </td>
    </tr>

    <tr>
        <td>weight</td>
        <td>
            "<strong>bold</strong>" makes it italic, "normal" makes it not-bold.
        </td>
    </tr>

    <tr>
        <td>underline</td>
        <td>
            "<span class="auto-style4">single</span>" draws a single underline, &quot;none&quot; removes any underlines.
        </td>
    </tr>

</table>

<p>&nbsp;</p>

<p class="CodeCommand">
   &gt;&gt;ws=std.activeworkbook():cur() <br />

   <br />

   &gt;&gt;ws[1][1]={value="A1", fgcolor="<span class="auto-style7">255 0 0</span>", bgcolor="<span class="auto-style8">0 255 0</span>"} <br />

   <br />

   &gt;&gt;ws[1][2]={value="B1", weight="<strong>bold</strong>"} <br />

   <br />

   &gt;&gt;ws[2][1]={value="A2", style="<em>italic</em>"} <br />

   <br />

   &gt;&gt;ws[2][2]={value="B2", underline="<span class="auto-style4">single</span>"}
</p>

<p>The output of the above shown commands is shown below:</p>

<img src="../images/classes/worksheet_formattedoutput.png" alt="" />

    







<p>&nbsp;</p>
<p>&nbsp;</p>






    
    
 

<h2 id="memberfuncs">3) Member functions</h2>
<p>&nbsp;</p>


<h3 id="connect">connect</h3>

<p class="funcsignature">
    connect( func, func_param1, ... ) 
</p>
    
<p>
    where <em>func</em> is a Lua function to be run when the selection is happening. 
    <em>param<sub>1</sub></em>, <em>param<sub>2</sub></em>,..., <em>param<sub>n</sub></em> are the 
    parameters of the function <em>func</em>.
</p>
    
<p>
    Currently the <em>only event being handled</em> is the event that is happening when user is selecting cells on the worksheet. 
    This is especially useful when you want to change the text of a TextCtrl at the end of user's selection which emulates 
    the selection in MS Excel or LibreOffice Calc. 
</p>

<p class="CodeCommand">
    <span class="LuaKeyword">local function</span> GetVariable(txt) <br />
                &emsp;
                <span class="LuaKeyword">local</span> ws=std.activeworkbook():cur() <br />
                &emsp;
                <span class="LuaKeyword">local</span> range=ws:selection() <br />
                    <br />
                &emsp;
                <span class="LuaKeyword">if</span> (range==nil)  <span class="LuaKeyword">then</span> <br />
                        &emsp;&emsp;&nbsp;
                        <span class="LuaKeyword">return</span> <br />
                &emsp;
                <span class="LuaKeyword">end</span><br />
                <br />
                &emsp;
                txt.value=tostring(range)<br />
                <br />
                &emsp;
                <span class="LuaKeyword">if</span>(OwnerDialog~=nil) <span class="LuaKeyword">then</span><br />
                        &emsp;&emsp;&nbsp;
                        OwnerDialog.topmost="no"<br />
                &emsp;
                <span class="LuaKeyword">end</span><br />
            <br />
        &emsp;
        <span class="LuaKeyword">end</span><br />
    <br />
    <span class="LuaKeyword">function</span> txt:button_cb()<br />
        <br />
                &emsp;
                <span class="LuaKeyword">if</span>(OwnerDialog~=nil) <span class="LuaKeyword">then</span><br />
                        &emsp;&emsp;&nbsp;
                        OwnerDialog.topmost="yes"<br />
                &emsp;
                <span class="LuaKeyword">end</span><br />
            <br />
                &emsp;
                <span class="LuaKeyword">local</span> ws=std.activeworkbook():cur()<br />
                            <br />
                &emsp;
                ws:<mark>connect</mark>(GetVariable, txt)<br />
        <span class="LuaKeyword">end</span>


</p>

<p>
    The above-shown code can easily become rather exhausting when more than one selection-event-aware text control 
    is to be designed. Consider using <span class="auto-style6"> <em>std.gui.gridtext</em></span>, 
    which is designed exactly for this purpose.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="name">name</h3>
<p class="funcsignature"> 
    name() &rarr; string
</p>
<p>Returns the name (title) of the worksheet. For the following image:</p>

<img src="../images/classes/worksheet_formattedoutput.png" alt=""/>

<p class="CodeCommand">
    &gt;&gt;ws:name() <br />
    Sheet 1
</p>
    
   



    
<p>&nbsp;</p>
<p>&nbsp;</p>
    
   




<h3 id="selection">selection</h3>
<p class="funcsignature">
    selection() &rarr; Range  
</p>

<p>Creates a Range class from the current selection. Consider the selection in the following image:</p>

<img alt="" src="../images/classes/worksheet_selection.png" />

<p class="CodeCommand">
    &gt;&gt;rng=ws:selection() <br />
    
    <br />
    
    &gt;&gt;rng <br />
    Sheet 1!B3:C4 <br />
    
    <br />
    
    &gt;&gt;rng(1,1) <br />
    100	
</p>

<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="range.php">Range</a>
    <a href="../../std/funcs/activeworksheet.php">activeworksheet</a>
    <a href="../../std/funcs/appendworksheet.php">appendworksheet</a>
</div>


</body>
</html>