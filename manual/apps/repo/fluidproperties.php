<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Properties of Fluids</title>
    

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        .auto-style1 
        {
            text-decoration: underline;
        }
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>Properties of Fluids</h1>

<p>
    Compute thermodynamic and heat transfer properties of different fluids. The 
    app is comprised of 3 tabs:
</p>

<ol class="linespaced">
    <li><a href="#saturated">Saturated Properties</a></li>

    <li><a href="#superheated">Superheated Properties</a></li>

    <li><a href="#heattransfer">Heat Transfer Properties</a></li>
</ol>





<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="saturated">Saturated Properties</h3>

<p>
    Properties of refrigerants at saturated state are computed.
</p>


<p>
    In order to calculate the saturated properties, the fluid type and exactly one 
    property must be selected. Then all other properties will be computed. In the below 
    figure temperature is selected and the rest is computed.
</p>

<img src="../images/fluidprops_saturated_temperature.png" alt="">


<p>&nbsp;</p>


<p>
    Similarly, in the following, enthalpy of vapor is selected (temperature will be automatically unchecked) 
    and the rest of the properties are computed.
</p>

<img src="../images/fluidprops_saturated_hg.png" alt="">







<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 id="superheated">Superheated Properties</h3>

<p>
    Properties of refrigerants at superheated state are computed. 

    In order to calculate the superheated properties, the fluid type and exactly two properties 
    must be selected. By default, <em>pressure</em> is always selected, therefore only one more selection can be made. 
    Once a total of two properties are selected, the rest of the properties are computed only if 
    the computation falls in the superheated state with the givens. Otherwise an error/suggestion 
    will be issued.
</p>

<p>
    Below, the combination of pressure-temperature is shown.
</p>

<img src="../images/fluidprops_superheated_PT.png" alt="pressure-temperature">


<p>&nbsp;</p>

<p>
    The combination of pressure-enthalpy is shown below.
</p>

<img src="../images/fluidprops_superheated_PH.png" alt="pressure-enthalpy">








<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>







<h3 id="heattransfer">Heat Transfer Properties</h3>

<p>
    Heat transfer properties of fluids are computed. 

    In order to compute the properties, the fluid type and exactly one 
    property must be selected. Then the rest can be computed. Below, temperature 
    is selected and all other heat transfer properties are calculated.
</p>

<img src="../images/fluidprops_heattransfer_temperature.png" alt="temperature">


<p>&nbsp;</p>

<p>
    Similarly, in the below figure, Prandtl is selected all the rest of the properties 
    corresponding to the Prandtl number are computed:
</p>

<img src="../images/fluidprops_heattransfer_pr.png" alt="Prandtl">






<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../../std/funcs/fluid.refrigerant.php">std.fluid.refrigerant</a>
    <a href="psychrometry.php">Psychrometry App</a>
</div>

</body>

</html>
