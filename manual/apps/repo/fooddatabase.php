<!DOCTYPE html>
<html>

<head>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>USDA Food Database Search (Offline)</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>

        ol li{
            padding-top:6px;
            padding-bottom:6px;
        }

    </style>
    
    <script src="/jsscripts/siteanalytics.js"></script>


</head>

<body>
<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>

<h1>Food Database Search</h1>
<p>
    Find compositional (macro-components only) data and compute thermo-physical properties of foodstuffs. 
</p>


<p>&nbsp;</p>

<p>
    Please note that the following procedure was followed to prepare the USDANALSR28.db file:
</p>
<ol>
    <li>
        The compositional data released by USDA was downloaded 
        (<a href="https://www.ars.usda.gov/northeast-area/beltsville-md/beltsville-human-nutrition-research-center/nutrient-data-laboratory/docs/usda-national-nutrient-database-for-standard-reference/" target="_blank">previously</a>) <a href="https://ndb.nal.usda.gov/ndb/" target="_blank">
        currently USDA NAL</a> website as an Excel file,
    </li>

    <li>Some of the characters in food names, such as &amp; and , was replaced with empty characters,</li>

    <li>Acronyms such as W/ and WO/ was replaced with with and without, respectively,</li>
	
    <li>Macro-component data (water, CHO, protein, total lipids, ash) was copied from the Excel file into database/USDANALSR28.db SQLite file. </li>
</ol>

<p>&nbsp;</p>


<p>
    The thermophysical properties, specific heat capacity, thermal conductivity, 
    density and thermal diffusivity, calculated using predictive equations based on 
    macrocomponents of the food product at a selected temperature. 
    The app relies on <a href="../../std/classes/food.php">Food class</a> for computations.
</p>


<p>&nbsp;</p>


<p>
    Type your query in the textbox in the "<em>search</em>" tab. 
    In order to initiate a search, at least 3 characters should be typed. 
</p>


<img src="../images/fooddatabase_initialscreen.png" alt="" />

<p>&nbsp;</p>


<p>
    As the text in the search textbox changes, the query is updated and records matching 
    the search text are shown. 
    
    The query can be multiple words, such as "milk" and "nonfat" separated by a space. 
    As you type "milk" first the records having the word "milk" is shown, 
    and then if you continue typing "nonfat", this time an <u><em>intersection</em></u> 
    of the entries having "milk" and "nonfat" are shown. Therefore, it is possible 
    to precisely find and select the entry that fits to the desired query.
</p>
    
<img src="../images/fooddatabase_search.png" alt=""/>

<p>
    If you would like to create a variable of type 
    <a href="../../std/classes/food.php">Food class</a> from your 
    selection, right click and you will see the following dialog appearing. 
    Type the name of the variable and click OK (in the example, the food class variable is named as milk).
</p>



<p>&nbsp;</p>
    
<p>
    Once a selection is made and "<em>Composition and ThermoPhysical Prop</em>" tab is 
    selected, compositional information and thermo-pyhsical properties of the 
    selection at the shown temperature is displayed. As the 
    temperature is changed, the thermo-physical properties are also changed.
</p>



<img src="../images/fooddatabase_thermophysicalprops.png" alt=""/>





<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="foodthermalprocessing.php">Food Thermal Processing</a>
    <a href="../../std/classes/food.php">Food class</a>
</div>
   

</body>

</html>
