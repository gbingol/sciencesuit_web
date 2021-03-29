<!DOCTYPE HTML>
<html>
<head>
    <title>refrigerant</title>

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


<h1>fluid.refrigerant</h1>
<p>Computes <em>thermodynamic</em> properties of refrigerants.</p>


<p class="funcsignature">
    
    fluid.refrigerant(FluidName=, Properties=) &rarr; table  <br>
    
    <br>
    
    fluid.refrigerant(fluid=, Properties=)  &rarr; table
</p>


<p>&nbsp;</p>


<h3>Parameters:</h3>
<table class="funcarguments">
    <tr>
        <td>FluidName:</td>
        <td>Name of the fluid either ASHRAE or IUPAC &larr; string</td>
    </tr>
    <tr>
        <td>Properties:</td>
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
    The accepted keys for the parameter <em>Properties</em> are:
</p>


<table class="fluidprops">
    <tr>
        <td>Lua Table Key</td>
        <td>Meaning</td>
        <td>Units</td>
    </tr>
    <tr>
        <td>P</td>
        <td>Pressure</td>
        <td>kPa</td>
    </tr>
    <tr>
        <td>T</td>
        <td>Temperature</td>
        <td>&deg;C</td>
    </tr>
    <tr>
        <td>s, s<sub>f</sub>, s<sub>g</sub></td>
        <td>Entropy</td>
        <td>kJ/kgK</td>
    </tr>
    <tr>
        <td>h, h<sub>f</sub>, h<sub>g</sub></td>
        <td>Enthalpy</td>
        <td>kJ/kg</td>
    </tr>
    <tr>
        <td>v, v<sub>f</sub>, v<sub>g</sub></td>
        <td>Specific Volume</td>
        <td>m<sup>3</sup>/kg</td>
    </tr>
</table>


<p >Possible combinations for the argument <em>tbl</em> are:</p>
<ol class="linespaced">
    <li>Single argument: only saturated properties are searched</li>

    <li><em>P,T</em> (superheated properties are searched)</li>

    <li><em>P,s </em>(superheated properties are searched)</li>

    <li><em>P,v</em> (superheated properties are searched)</li>

    <li><em>P,h</em>(superheated properties are searched)</li>
</ol>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3>Available Fluids</h3>
<table class="fluidprops">

    <tr >
        <td>ASHRAE</td>
        <td>IUPAC</td>
        <td>N<sub>saturation</sub></td>
        <td>N<sub>superheated</sub></td>
    </tr>
    <tr >
        <td >R12</td>
        <td>Dichlorodifluoromethane</td>
        <td>42</td>
        <td>271</td>
    </tr>
    <tr >
        <td >R22</td>
        <td>Chlorodifluoromethane</td>
        <td>35</td>
        <td>155</td>
    </tr>
    <tr >
        <td >R23</td>
        <td>Trifluoromethane </td>
        <td>176</td>
        <td>1333</td>
    </tr>
    <tr >
        <td >R32</td>
        <td>Difluoromethane</td>
        <td>68</td>
        <td>53</td>
    </tr>
    <tr >
        <td >R125</td>
        <td>Pentafluoroethane</td>
        <td>69</td>
        <td>64</td>
    </tr>
    <tr>
        <td >R134A</td>
        <td>1,1,1,2-Tetrafluoroethane</td>
        <td>69</td>
        <td>334</td>
    </tr>
    <tr>
        <td >R143A</td>
        <td>1,1,1-Trifluoroethane</td>
        <td>66</td>
        <td>63</td>
    </tr>
    <tr>
        <td >R717</td>
        <td>Ammonia</td>
        <td>67</td>
        <td>371</td>
    </tr>
    <tr>
        <td >R718</td>
        <td>Water</td>
        <td>71</td>
        <td>569</td>
    </tr>
</table>

<p>&nbsp;</p>
 

<p>
    Please note that, although the number of data entries for each <em>saturated</em> and <em>superheated</em> states is well satisfactory, 
    it should be noted that the more the experimental points the more accurate the results will be. For example, 
    for saturated state if the properties at T=85&deg;C is requested, the properties, say at 80&deg; and 90&deg;C will 
    be found from the database and then linear interpolation will be performed to compute the properties at 85&deg;C. 
</p>
    


<p>&nbsp;</p>
<p>&nbsp;</p>




<h2>Examples</h2>

<h3>Saturated Liquid-Vapor</h3>


<p class="CodeCommand">
    &gt;&gt;std.fluid.refrigerant("water", {<mark>T</mark>=100}) <br>
    T=100 &emsp; hg=2676.1 &emsp;  sg=7.3549 &emsp;
    sf=1.3069 &emsp; ug=2506.55 &emsp; uf=418.934 &emsp; P=101.35 &emsp;
    vg=1.6729 &emsp; vf=0.001044 &emsp; hf=419.04
</p>



<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.fluid.refrigerant("water", {<mark>P</mark>=10}) <br>
    P=10 &emsp; ug=2436.68 &emsp; vg=14.783 &emsp; hg=2584.51 &emsp;
    T=45.7384 &emsp; hf=191.534 &emsp;  sf=0.648314 &emsp; 
    vf=0.0010103 &emsp; uf=191.523 &emsp; sg=8.15173
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.fluid.refrigerant("water", {<mark>hf</mark>=191}) <br>
    hf=191 &emsp; ug=2436.68 &emsp; vg=14.8655 &emsp; hg=2584.29 &emsp;
    T=45.6106 &emsp; P=9.92958 &emsp;  sf=0.64665 &emsp;
    vf=0.00101024 &emsp; uf=190.99 &emsp; sg=8.15399
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.fluid.refrigerant("water", {<mark>sg</mark>=8.15}) <br>
    sg=8.15 &emsp; vf=0.00101033 &emsp; P=10.0539 &emsp; hf=191.942 &emsp;
    vg=14.7198 &emsp; hg=2584.69 &emsp; sf=0.649587 &emsp;
    ug=2436.7 &emsp; T=45.8362 &emsp;uf=191.932
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<h3>Superheated vapors </h3>
<p class="CodeCommand">
    &gt;&gt;std.fluid.refrigerant("water", {T=150, P=220}) <br>
    h=2767.24 &emsp; s=7.23916 &emsp; v=0.89446
</p>




<p> &nbsp;</p>
<p> &nbsp;</p>




<div class="RelatedLinks">
    <a href="fluid.heattransfer.php">std.fluid.heattransfer</a>
    <a href="fluid.psychrometry.php">std.fluid.psychrometry</a>
    <a href="../../apps/repo/fluidproperties.php">Properties of Fluids App</a>
</div>




</body>
</html>