<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Psychrometric Properties of Humid Air</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
	
    <style>
        td
        {
            border: solid 1px;
            text-align: center;
            padding-left:10px;
            padding-right:10px;
        }

        table
        {
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



    </style>

   
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>psychrometry</h1>
<p>
    Computes the thermodynamic properties of humid air.
</p>

<p class="funcsignature">  
    psychrometry (tbl) &rarr; Lua Table  
</p>

<p>
    argument <i>tbl</i> is a Lua table which must contain 3 properties of humid air and the function returns a lua table 
    with properties of humid air. For more, please see the 
    <a href="http://learning.sciencesuit.org/psychrometry/index.html" target="_blank">recipe used in psychrometry function</a>.
</p>
    



<p>&nbsp;</p>




<p>The properties of humid air are:</p>

<table>
    <tr>
        <td>Property</td>
        <td>Units</td>
        <td>Lua table key</td>
    </tr>
    <tr>
        <td >Pressure</td>
        <td >kPa</td>
        <td>P</td>
    </tr>
    <tr >
        <td>Dry-bulb temperature</td>
        <td> &deg;C </td>
        <td>Tdb</td>
    </tr>
    <tr>
        <td>Wet-bulb temperature</td>
        <td>&deg;C</td>
        <td>Twb</td>
    </tr>
    <tr>
        <td>Dew-point temperature</td>
        <td>&deg;C</td>
        <td>Tdp</td>
    </tr>
    <tr>
        <td>Absolute humidity</td>
        <td>kg/kg dry air</td>
        <td>W</td>
    </tr>
    <tr>
        <td>Relative humidity</td>
        <td>%</td>
        <td>RH</td>
    </tr>
    <tr>
        <td>Specific volume</td>
        <td>m<sup>3</sup>/kg dry air</td>
        <td>V</td>
    </tr>
    <tr>
        <td>Enthalpy</td>
        <td>kJ/kg dry air</td>
        <td>H</td>
    </tr>
</table>







<p>&nbsp;</p>
<p>&nbsp;</p>





<p class="CodeCommand">
    &gt;&gt;std.psychrometry{P=101.3, Tdb=50, RH=40} <br />
    P=101.3 kPa <br>
    Tdb=50 C <br>
    Twb=36 C <br>
    Tdp=32.6632 C <br>
    H=132.628 kJ/kg da<br>
    RH=40 %<br>
    W=0.0318873 kg/kg da <br>
    V=0.962661 m3/kg da <br>

    <br />

    Misc properties: <br>
    Pw=4.94012 kPa <br>
    Pws=12.3503 kPa (saturation) <br>
    Ws=0.0863594 kg/kg da (saturation)
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="../../apps/repo/psychrometry.php">Psychrometry App</a>
    <a href="../../apps/repo/thermoproprefrigerants.php">Thermodynamic Properties App</a>
    <a href="thermofluid.php">std.thermfluid</a>
</div>


</body>
</html>