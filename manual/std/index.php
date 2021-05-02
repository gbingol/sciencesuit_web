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
        }
        
        
       
        p
        {
            padding-bottom: 10px;
            padding-top: 10px;
            
            margin-right: 5%;
        }
        
        
        
        
        
        
        @media only screen and (max-width:900px) 
        { 
            table.functionlist
            {
                width: 100%;
            }
        }

 
        

    </style>


    <?php
        $FileSize=filesize($_SERVER["DOCUMENT_ROOT"]."/jsscripts/stdliblist.js");
        
        echo "<script src=\"/jsscripts/stdliblist.js?v=".$FileSize."\"></script>";
    ?>
    
    
    
    
<script>

var count=0;

function ToHTMLTableEntry(LibURL, Dir, NROWS, LibName)
{

    let HTMLText = "";

    let nfunctions=LibURL.length;

    for(let i=0; i < nfunctions; i++)
    {
        let FuncName = LibURL[i][0];
        let SecondEntry = LibURL[i][1];

        if(LibName!=null)
            FuncName = LibName + "." + FuncName;

        //second entry in main array in null
        if(SecondEntry == null) 
        {
            let FileURL = Dir + FuncName.toLowerCase() + ".php";
            
            HTMLText = HTMLText + "<a href="+ FileURL + ">"+ FuncName + "</a><br>" + "\n";

            count++;
        }
         //link is explicity specified
         else if(typeof SecondEntry =='string')
        {   
            let FileURL = "";
            
            if(LibName == null)
                FileURL = Dir + SecondEntry;
            else
                FileURL = Dir + LibName + "." + SecondEntry;
            
            HTMLText = HTMLText + "<a href="+ FileURL+ ">"+ FuncName + "</a><br>" + "\n";

            count++;
        }

        else if(Array.isArray(SecondEntry))
            HTMLText = HTMLText + ToHTMLTableEntry(SecondEntry, Dir, NROWS, FuncName);


            
        if(count === NROWS)
        { 
            HTMLText=HTMLText + "</td><td>" + "\n";

            count=0;
        }
    }


    return HTMLText;
}




function ShowFuncClass(StdLibURL, Dir, DivID, IsClass)
{
    var  ScreenWidth= screen.width;
    
    count=0;

    let nfunctions = GetNumberOfFunctions(IsClass);
    
    let NROWS = Math.floor(nfunctions / 10) + 1;
    
    if (ScreenWidth <= 900)
        NROWS = Math.floor(nfunctions / 5) + 1;

    if (ScreenWidth <= 600)
        NROWS = Math.floor(nfunctions / 3) + 1;

	
    var HTMLText="<table class='functionlist'><tr><td>" + "\n";


    HTMLText=HTMLText + ToHTMLTableEntry(StdLibURL, Dir, NROWS) + "\n";


    HTMLText=HTMLText + "</td></tr>";
    HTMLText=HTMLText + "</table>";
    
    document.getElementById(DivID).innerHTML = HTMLText;
}




window.addEventListener("load", function()
{
    ShowFuncClass(StdLibClasses, "./classes/", "datastructs", true);
    
    ShowFuncClass(StdLibFunctions, "./funcs/", "functions", false);
});


window.addEventListener("resize", function()
{
    ShowFuncClass(StdLibClasses, "./classes/", "datastructs", true);
    
    ShowFuncClass(StdLibFunctions, "./funcs/", "functions", false);
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



<h2>Class List</h2>
<div id="datastructs" >
</div>


<p>&nbsp;</p>


<h2>Function List</h2>
<div id="functions">
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
