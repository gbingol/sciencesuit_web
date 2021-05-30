<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Apps</title>

<script src="../../jsscripts/common.js"></script>

<script src="/jsscripts/siteanalytics.js"></script>

<script>
function ShowApps(AppCategory)
{
	var NROWS=10;
	var Apps=[
	
	//STAT
	["ANOVA - Single Factor","stat","anova_singlefactor.php"],
	["ANOVA - Two Factor","stat","anova_twofactor.php"],
	["Descriptive Statistics","stat","descriptivestatistics.php"], 
        ["F test","stat","test_f.php"],
	["Linear Regression","stat","linearregression.php"],
        ["t-test - 1 sample","stat","test_t_1sample.php"],
        ["t-test - 2 sample","stat","test_t_2sample.php"],
        ["t-test - Paired","stat","test_t_paired.php"],
	["z-test","stat","test_z.php"],
        ["Sign Test","stat","test_sign.php"],


	//ENGINEERING
	["Food Database", "engineering", "fooddatabase.php"], 
	["Psychrometry", "engineering", "psychrometry.php"],
	["Thermal Processing of Foods", "engineering", "foodthermalprocessing.php"], 
        ["Properties of Fluids", "engineering", "fluidproperties.php"],
	];
	

	var HTMLText="<table width=80%><tr><td style=vertical-align:top>";
		
    var count = 0;
    var nApps = Apps.length; Apps.length
	
    for(i=0;i<nApps;i++)
    {
        var AppDesc=Apps[i][0];
        var Address=Apps[i][2];
        var CurAppCategory=Apps[i][1];

        if(Address==null) 
             Address=FuncName+".php"; 

        if(AppCategory!=null) //display a particular category
        {
            NROWS=5;

            if(CurAppCategory==AppCategory)
            { 
                HTMLText=HTMLText+"<p><a href=./repo/"+Address+ ">"+AppDesc+"</a></p>";
                count++;
            }
            else 
                continue;
        }


        else //display all
        { 
            NROWS=10;

            if(CurAppCategory!=PrevAppCategory && i>0) // i=0 PrevAppCategory=null 
            {
                HTMLText=HTMLText+"</td><td style=vertical-align:top>";
                count=0;
            }

            count++;	
            HTMLText=HTMLText+"<p><a href=./repo/"+Address+ ">"+AppDesc+"</a></p>";
        }



        if(count==NROWS)
        { 
            HTMLText=HTMLText+"</td><td style=vertical-align:top>";
            count=0;
        }

        var PrevAppCategory=CurAppCategory;
    }

    HTMLText=HTMLText+"</td></tr></table>";
    
    document.getElementById("ScienceSuitFunctionsClasses").innerHTML=HTMLText;
}


window.addEventListener("load",function()
{
	var url=new URL(window.location.href);
	var functype = url.searchParams.get("type");
	if(functype===null) 
            ShowApps();
	else 
            ShowApps(""+functype);
                    
});

</script> 

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        p
        {
            margin-right: 5%;
        }
        
        #intro
        {
            padding-bottom: 10px;
        }
        
        #intro:first-letter
        {
            font-size: 1.5em;
        }
     
                
    </style>


</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
    
    include "../../phpsnippets/collapsiblepane.php"
?>

<h1>Apps</h1>

<p id="intro">
    Most of us like to get the job done simply by "clicking". Therefore, <em>ScienceSuit</em> is equipped 
    with many built-in apps ranging from data analysis to process engineering. 
</p>

<img src="images/ribbonpage_app.svg" alt="" />
	

<p>&nbsp;</p>
<p>&nbsp;</p>




<div  id="ScienceSuitFunctionsClasses">
    
</div>

 
<p>&nbsp;</p>
 
 
 <p>
    <span style="color: red; font-size: x-large;">&#9432;</span> 
    Did you know that, it is possible to build your own apps 
    and make them part of the framework.
 </p>


<p>&nbsp;</p>

<h2>Go Beyond!</h2>

<button type="button" class="collapsiblepane">1) Developing an App</button>
<div class="content" id="developinganapp">
    
</div>


<button type="button" class="collapsiblepane">2) Making your App part of the Framework</button>
<div class="content" id="addtoribboninterface">
    
</div>


<script>
    Toggle_LoadContent_CollapsiblePane();
</script>





</body>

</html>
