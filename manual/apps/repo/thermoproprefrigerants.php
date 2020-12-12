<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Thermodynamic Properties of Refrigerants</title>
    

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


<h1>Thermodynamic Properties of Refrigerants</h1>

<p>
    Compute thermodynamic properties of different fluids.
</p>


<p>&nbsp;</p>

<p>
    The <em>Temperature</em> and/or <em>Pressure</em> must be selected before proceeding with computations.
</p>


<img src="../images/thermodynamicpropoffluids_init.png" alt=""/>


<p>&nbsp;</p>

<p>
    If either <em>temperature</em> or <em>pressure</em> is selected, then the <em>FLUID STATE</em> is saturated and 
    therefore, the saturated table of the selected fluid is used to compute the properties. 
    Since the fluid is at saturated state, it is seen that both saturated liquid and saturated vapor states are calculated.
</p>


<img src="../images/thermodynamicpropoffluids_saturated.png" alt=""/>


<p>&nbsp;</p>

<p>
    If <span class="auto-style1">both</span> <em>temperature</em> and <em>pressure</em> are selected, then the 
    <em>FLUID STATE</em> is unknown as it can be either compressed or superheated.</p>


<img src="../images/thermodynamicpropoffluids_unknown.png" alt="" />
<p>
    <em>Note:</em> Although the state can also be saturated, this only happens when the saturation pressure and temperature is 
    exactly equal to the entered values for pressure and temperature, respectively. Therefore, it is recommended 
    to check the saturation temperature or pressure before proceeding with selection of both properties.
</p>


<p>&nbsp;</p>

<p>
    If the <em>FLUID STATE</em> is superheated, then the properties are computed using the superheated table of the selected fluid.
</p>

<img src="../images/thermodynamicpropoffluids_superheated.png" alt="" />



<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
    <a href="../../std/funcs/thermofluid.php">std.thermofluid</a>
    <a href="psychrometry.php">Psychrometry App</a>
</div>

</body>

</html>
