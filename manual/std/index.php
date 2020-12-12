<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>std library</title> 

<link href="../../css/common.css" rel="stylesheet" type="text/css">


    <style>

        table.functionlist
        {
            width: 70%;
        }
         
        
        table.functionlist td
        {
            padding-left:10px;
            padding-right:10px;

            padding-bottom: 10px;

            vertical-align:text-top;
        }
        
        
        table.datastruct
        {
            border: none;
            
        }
        
        table.datastruct td
        {
            padding: 6px;
           
            
            text-align: center;
        }
        
        table.datastruct td:first-child
        {
            border-right: 1px green dashed;
            
            text-align: left;
            
            
        }
        
        table.datastruct tr:first-child
        {
            font-weight: bold;
            
            font-size: large;
            
            color: green;
        }
        
        h2
        {
            color: red;
        }
        
        p
        {
            padding-bottom: 10px;
            padding-top: 10px;
            
            margin-right: 5%;
        }
        
        
        
        
        
        
        @media only screen and (max-width:900px) {
            :root {
                --screenmaxwidth: 900;
            }
            
            table.functionlist
            {
                width: 100%;
            }
        }

        @media only screen and (max-width:600px) {
            :root {
                --screenmaxwidth: 600;
            }
        }
        

    </style>


    <script src="/jsscripts/stdliblist.js"></script>
    
    
    
    
<script>
 
function ShowFuncClass(functype)
{
    var NROWS = 15;

    var  MaxScreenWidth= getComputedStyle(document.documentElement).getPropertyValue('--screenmaxwidth')

 

    if (MaxScreenWidth == 600)
        NROWS = 40;

    else if (MaxScreenWidth == 900)
        NROWS = 30;

	
        var HTMLText="<table class='functionlist'><tr><td>";

        var count=0;
        var nfunctions=StdLibFunctions.length;

        for(i=0;i<nfunctions;i++)
        {
            var FuncName=StdLibFunctions[i][0];
            var linkName=StdLibFunctions[i][2];

            if(linkName==null) 
                linkName=FuncName+".php"; 

            if(functype!=null)
            {
                if(StdLibFunctions[i][1]==functype) 
                    HTMLText=HTMLText+"<a href=./funcs/"+linkName+ ">"+FuncName+"</a><br>";
                else 
                    continue;
            }
            else 
                HTMLText=HTMLText+"<a href=./funcs/"+linkName+ ">"+FuncName+"</a><br>";



            count++;


            if(count==NROWS)
            { 
                HTMLText=HTMLText+"</td><td>";

                count=0;
            }
        }


        HTMLText=HTMLText+"</td></tr>";
        HTMLText=HTMLText+"</table>";
        
        document.getElementById("ScienceSuitFunctionsClasses").innerHTML=HTMLText;
}


window.addEventListener("load", function()
{
    var url=new URL(window.location.href);
    var functype = url.searchParams.get("type");

    if (functype === null)
        ShowFuncClass();
    else
        ShowFuncClass("" + functype);
});


</script> 

    <script src="/jsscripts/siteanalytics.js"></script>

</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
    
    include "../../phpsnippets/collapsiblepane.php";
?>

    
<h1>std Library</h1>

<p>
    Numerous functions and several data structures (or interchangebly referred as classes) are in 
    <em>std</em> library to help you to be able to handle various tasks quickly and with minimal effort.
</p>

<p>&nbsp;</p>



<h2 id="datastructs">Class List</h2>
<table class="datastruct" >
    <tr>
        <td>General purpose</td>
        <td>Purpose-specific</td>
    </tr>
    <tr>
        <td><a href="classes/array.php">Array</a></td>
        <td><a href="classes/food.php">Food</a></td>
    </tr>
    
    <tr>
        <td><a href="classes/database.php">Database</a></td>
        <td></td>
    </tr>
    
    <tr>
        <td><a href="classes/matrix.php">Matrix</a></td>
        <td></td>
    </tr>
    
    <tr>
        <td><a href="classes/range.php">Range</a></td>
        <td></td>
    </tr>
    
    <tr>
        <td><a href="classes/vector.php">Vector</a></td>
        <td></td>
    </tr>
    
    <tr>
        <td><a href="classes/worksheet.php">Worksheet</a></td>
        <td></td>
    </tr>
    
</table>


<p>&nbsp;</p>


<h2 id="functions">Function List</h2>
<div id="ScienceSuitFunctionsClasses">
</div>


<p>&nbsp;</p>





<h3>Become more efficient:</h3>


<button type="button" class="collapsiblepane">1) Concept of iterators</button>
<div class="content" id="iteratorscontainers">
    
</div>


<button type="button" class="collapsiblepane">2) Function syntax</button>
<div class="content" id="noteonsyntax">
    
</div>




<button type="button" class="collapsiblepane">3) Lua overloads</button>
<div class="content" id="luaoverload">
    
</div>


<button type="button" class="collapsiblepane">4) Statistical distributions</button>
<div class="content" id="distributiontips">
    
</div>


<script>
    Toggle_LoadContent_CollapsiblePane();
</script>

</body>
</html>
