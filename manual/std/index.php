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
function ShowFuncClass(StdLibURL, Dir, DivID, RowDivisor)
{
    var  ScreenWidth= screen.width;
    
    
    var NROWS = 15/RowDivisor;
    if (ScreenWidth <= 600)
        NROWS = 45/RowDivisor;

    else if (ScreenWidth <= 900)
        NROWS = 30/RowDivisor;

	
        var HTMLText="<table class='functionlist'><tr><td>";

        var count=0;
        var nfunctions=StdLibURL.length;

        for(i=0; i<nfunctions; i++)
        {
            var FuncName = StdLibURL[i][0];
            var SecondEntry = StdLibURL[i][1];

            //second entry in main array in null
            if(SecondEntry == null) 
            {
                                
                var FileURL = Dir + FuncName.toLowerCase() + ".php"; 
                
                HTMLText = HTMLText + "<a href="+ FileURL + ">"+ FuncName + "</a><br>";

                count++;
            }
            
            //second entry is an Array, so it is a library under std
            else if(Array.isArray(SecondEntry))
            {
                var Library = SecondEntry;
                
                for(j=0; j<Library.length; ++j)
                {
                    
                    var FileURL = Dir + FuncName.toLowerCase()+ "." + Library[j] + ".php"; 
                    
                    var URLName=FuncName.toLowerCase()+ "." + Library[j];

                    HTMLText = HTMLText + "<a href="+ FileURL + ">"+ URLName + "</a><br>";

                    count++;
                    
                    
                    if(count === NROWS)
                    { 
                        HTMLText=HTMLText + "</td><td>";

                        count=0;
                    }
                }
            }
            
            //link is explicity specified
            else if(typeof SecondEntry =='string')
            {
                var FileURL = Dir + SecondEntry;
                
                HTMLText = HTMLText + "<a href="+ FileURL+ ">"+ FuncName + "</a><br>";

                count++;
            }

            
        
            if(count === NROWS)
            { 
                HTMLText=HTMLText + "</td><td>";

                count=0;
            }
        }


        HTMLText=HTMLText + "</td></tr>";
        HTMLText=HTMLText + "</table>";
        
        document.getElementById(DivID).innerHTML = HTMLText;
}


window.addEventListener("load", function()
{
    ShowFuncClass(StdLibClasses, "./classes/", "datastructs", 15);
    
    ShowFuncClass(StdLibFunctions, "./funcs/", "functions", 1);
});


window.addEventListener("resize", function()
{
    ShowFuncClass(StdLibClasses, "./classes/", "datastructs", 15);
    
    ShowFuncClass(StdLibFunctions, "./funcs/", "functions", 1);
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
