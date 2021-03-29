<!DOCTYPE HTML>
<html>
<head>
    <title>heattransfer</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script>
        document.createElement("red");
    </script>
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css">

    <style type="text/css">

        
        table.fluidprops
        {
            border-collapse:collapse;
        }

        table.fluidprops td 
        {
            border-style: solid;
            border-width: 1px;
            text-align: center;
            padding-left:10px;
            padding-right:10px;

        }




        table.fluidprops tr:first-child
        {
            font-weight: bold;
        }


        ol.spaced li
        {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        
        red
        {
            color: red;
        }
    
    </style>

</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>fluid.heattransfer</h1>
<p>Computes <em>heat transfer</em> properties of fluids.</p>

<p class="funcsignature">
    fluid.heattransfer(FluidName=, PropertyTable) &rarr; table<br>

    <br>

    fluid.heattransfer(fluid=, PropertyTable) &rarr; table
</p>


<h3>Parameters:</h3>
<table class="funcarguments">
    <tr>
        <td>FluidName:</td>
        <td>Name of the fluid either ASHRAE or IUPAC &larr; string</td>
    </tr>
    <tr>
        <td>PropertyTable</td>
        <td>Requested properties (<a href="#tablekeys">See below</a>) &larr; Lua Table</td>
    </tr>
    
    <tr>
        <td>fluid:</td>
        <td>
            An abstract fluid object (see <a href="fluid.new.php">fluid.new</a>).
        </td>
    </tr> 
</table>


<p>&nbsp;</p>


<p>
    The advantage of using an abstract fluid object (<em>fluid</em>) as first parameter is that 
    the connection to the database will only be established once and will be kept alive. 
    
    However, please also note that, if instead of fluid name, an abstract fluid object is used as 
    first parameter then the user is responsible to close the database connection.
</p>


<p>&nbsp;</p>


<h4 id="tablekeys">Properties table</h4>
<p> 
    The accepted keys for the parameter <em>PropertyTable</em> are:
</p>


<table class="fluidprops">
    <tr>
        <td>Lua Table Key</td>
        <td>Meaning</td>
        <td>Units</td>
    </tr>

    <tr>
        <td>T</td>
        <td>Temperature</td>
        <td>&deg;C</td>
    </tr>
    <tr>
        <td>cp</td>
        <td>Specific heat capacity</td>
        <td>kJ/kgK</td>
    </tr>
    <tr>
        <td>k</td>
        <td>Thermal conductivity</td>
        <td>W/mK</td>
    </tr>
    <tr>
        <td>rho</td>
        <td>Density</td>
        <td>kg/m<sup>3</sup></td>
    </tr>
    <tr>
        <td>mu</td>
        <td>Viscosity</td>
        <td>Pa &middot; s</td>
    </tr>
    <tr>
        <td>Pr</td>
        <td>Prandtl numbe</td>
        <td>N/A</td>
    </tr>
</table>




<p>&nbsp;</p>
<p>&nbsp;</p>

<h2 id="Examples">Examples</h2>

<h3 id="temperature">Temperature</h3>
<p class="CodeCommand">
    &gt;&gt;std.fluid.heattransfer("water", {T=20}) <br>
    cp=4.182 &emsp;  Pr=7.01 &emsp;  mu=0.001002 &emsp;  rho=998.21 &emsp;  T=20  &emsp; k=0.598
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="rho">Density</h3>
<p class="CodeCommand">
    &gt;&gt;std.fluid.heattransfer("water", {rho=995}) <br>
    cp=4.178 &emsp;  Pr=5.18327 &emsp;  mu=0.000766704  &emsp; rho=995 &emsp;  T=32.0062 &emsp;  k=0.61821
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="cp">Specific Heat Capacity</h3>
<p class="CodeCommand">
    &gt;&gt;std.fluid.heattransfer("air", {cp=1.2}) <br>
    cp=1.2 &emsp;  Pr=0.705 &emsp;  mu=4.97235e-05 &emsp;  rho=0.267312 &emsp;  T=1044.5 &emsp;  k=0.0846529
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="rho">Density</h3>
<p class="CodeCommand">
    &gt;&gt;std.fluid.heattransfer("water", {rho=995}) <br>
    cp=4.178 &emsp;  Pr=5.18327 &emsp;  mu=0.000766704  &emsp; rho=995 &emsp;  T=32.0062 &emsp;  k=0.61821
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>





<h3 id="rangeerror">Possible Range Errors</h3>
<p class="CodeCommand">
    &gt;&gt;std.fluid.heattransfer("water", {k=5}) <br>
    Valid range: [0.427, 0.684] <br>

    <br>

    &gt;&gt;std.fluid.heattransfer("air", {k=5}) <br>
    Valid range: [0.009246, 0.175]
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="fluid.refrigerant.php">std.fluid.refrigerant</a>
    <a href="fluid.psychrometry.php">std.fluid.psychrometry</a>
    <a href="../../apps/repo/fluidproperties.php">Properties of Fluids App</a>
</div>


</body>

</html>