<!DOCTYPE HTML>
<html>
<head>
    <title>thermofluid</title>

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


<h1>thermofluid</h1>
<p>Computes <em>thermodynamic</em> properties of fluids.</p>

<p class="funcsignature">
    
    thermofluid(fluid=, Properties=, KeepAlive=<span class="LuaKeyword">false</span>) &rarr; Lua Table  <br>
    
    <br>
    
    thermofluid(fluid=, Properties=, ConnInfo=)  &rarr; Lua Table
</p>

<p>&nbsp;</p>

<h3>Parameters:</h3>
<table class="funcarguments">
    <tr>
        <td>fluid:</td>
        <td>Name of the fluid either ASHRAE or IUPAC &larr; string</td>
    </tr>
    <tr>
        <td>Properties:</td>
        <td>Requested properties (<a href="#tablekeys">See below</a>) &larr; Lua Table</td>
    </tr>
    <tr>
        <td>KeepAlive:</td>
        <td>Keep database connection open (<a href="#keepalive">See below</a>).</td>
    </tr>
    <tr>
        <td>ConnInfo:</td>
        <td>
            Connection info table generated when parameter <em>KeepAlive</em> is <span class="LuaKeyword">true</span>.
        </td>
    </tr> 
</table>


<p>&nbsp;</p>

<h4>Keep Alive</h4>
<div id="keepalive" style="margin-right: 5%;">
    <p>When the function executes, it performs the following steps:</p>
    <ol>
        <li>Creates a database object,</li>
        <li>Connects database object to the database file,</li>
        <li>Queries the "MainTable" to learn about existing tables' ASHRAE and IUPAC names,</li>
        <li>Populates internal data structures with the queried info.</li>
        <li>Perform queries to compute states.</li>
        <li>Closes the database connection.</li>
    </ol>
    
    <p>
        If an application needs to call the function several times, 
        the initialization steps (1-4) might become expensive and might need to be skipped. 
        
        By default the parameter <em>KeepAlive</em> is <span class="LuaKeyword">false</span> which means that after the 5<sup>th</sup> 
        step, the 6<sup>th</sup> step will follow. However, if set to <span class="LuaKeyword">true</span> then 6<sup>th</sup> is skipped
        which means the database connection is kept alive. Furthermore, the function along with the properties of fluid, 
        will add a <em>ConnInfo</em> table to the returned table. 
        
        The <em>ConnInfo</em> table then can be passed as an argument to the function which will then 
        only perform 5<sup>th</sup> step 
        
        (<a href="#ex_keepalive">see the example</a>).
    </p>
</div>


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
<ol class="spaced">
    <li>Single argument: only saturated properties are searched</li>

    <li><em>P,T</em> (compressed, saturated and superheated properties are searched)</li>

    <li><em>P,s </em>(saturated and superheated properties are searched) and <em>T,s</em> (only saturated properties are searched)</li>

    <li><em>P,v and T,v </em>(only saturated properties are searched)</li>

    <li><em>P,h and T,h </em>(only saturated properties are searched)</li>
</ol>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h3>Available Fluids</h3>
<table class="fluidprops">

    <tr >
        <td>ASHRAE</td>
        <td>IUPAC</td>
        <td>TYPE</td>
        <td>N<sub>saturation</sub></td>
        <td>N<sub>superheated</sub></td>
    </tr>
    <tr >
        <td >R12</td>
        <td>Dichlorodifluoromethane</td>
        <td>CFC</td>
        <td>42</td>
        <td>271</td>
    </tr>
    <tr >
        <td >R22</td>
        <td>Chlorodifluoromethane</td>
        <td>HCFC</td>
        <td>35</td>
        <td>155</td>
    </tr>
    <tr >
        <td >R23</td>
        <td>Trifluoromethane </td>
        <td>HFC</td>
        <td>176</td>
        <td>1333</td>
    </tr>
    <tr >
        <td >R32</td>
        <td>Difluoromethane</td>
        <td>HFC</td>
        <td>68</td>
        <td>53</td>
    </tr>
    <tr >
        <td >R125</td>
        <td>Pentafluoroethane</td>
        <td>HFC</td>
        <td>69</td>
        <td>64</td>
    </tr>
    <tr>
        <td >R134A</td>
        <td>1,1,1,2-Tetrafluoroethane</td>
        <td>HFC</td>
        <td>69</td>
        <td>334</td>
    </tr>
    <tr>
        <td >R143A</td>
        <td>1,1,1-Trifluoroethane</td>
        <td>HFC</td>
        <td>66</td>
        <td>63</td>
    </tr>
    <tr>
        <td >R717</td>
        <td>Ammonia</td>
        <td>N/A</td>
        <td>67</td>
        <td>371</td>
    </tr>
    <tr>
        <td >R718</td>
        <td>Water</td>
        <td>N/A</td>
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


<h3>Assumptions</h3>
<p>
    For the <em>compressed state</em>, it is assumed that the properties are equal to saturated liquid's properties. 
    For more on this assumption please see <a href="https://www.amazon.com/Thermodynamics-Engineering-Approach-5th/dp/B003I01E40" target="_blank">
        Cengel &amp; Boles, Thermodynamics: An Engineering Approach</a>
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h2>Examples</h2>

<h3>Saturated Liquid-Vapor</h3>


<p class="CodeCommand">
    &gt;&gt;std.thermofluid("water", {<mark>T</mark>=100}) <br>
    T=100 &nbsp;&nbsp;&nbsp; hg=2676.1 &nbsp;&nbsp;&nbsp; <red>state=0</red> &nbsp;&nbsp;&nbsp; sg=7.3549 &nbsp;&nbsp;&nbsp;
    sf=1.3069 &nbsp;&nbsp;&nbsp; ug=2506.55 &nbsp;&nbsp;&nbsp; uf=418.934 &nbsp;&nbsp;&nbsp; P=101.35 &nbsp;&nbsp;&nbsp;
    vg=1.6729 &nbsp;&nbsp;&nbsp; vf=0.001044 &nbsp;&nbsp;&nbsp; hf=419.04
</p>



<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.thermofluid("water", {<mark>P</mark>=10}) <br>
    P=10 &nbsp;&nbsp;&nbsp; ug=2436.68 &nbsp;&nbsp;&nbsp; vg=14.783 &nbsp;&nbsp;&nbsp; hg=2584.51 &nbsp;&nbsp;&nbsp;
    T=45.7384 &nbsp;&nbsp;&nbsp; hf=191.534 &nbsp;&nbsp;&nbsp; <red>state=0</red> &nbsp;&nbsp;&nbsp; sf=0.648314 &nbsp;&nbsp;&nbsp; 
    vf=0.0010103 &nbsp;&nbsp;&nbsp; uf=191.523 &nbsp;&nbsp;&nbsp; sg=8.15173
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.thermofluid("water", {<mark>hf</mark>=191}) <br>
    hf=191 &nbsp;&nbsp;&nbsp; ug=2436.68 &nbsp;&nbsp;&nbsp; vg=14.8655 &nbsp;&nbsp;&nbsp; hg=2584.29 &nbsp;&nbsp;&nbsp;
    T=45.6106 &nbsp;&nbsp;&nbsp; P=9.92958 &nbsp;&nbsp;&nbsp; <red>state=0</red> &nbsp;&nbsp;&nbsp; sf=0.64665 &nbsp;&nbsp;&nbsp;
    vf=0.00101024 &nbsp;&nbsp;&nbsp; uf=190.99 &nbsp;&nbsp;&nbsp; sg=8.15399
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;std.thermofluid("water", {<mark>sg</mark>=8.15}) <br>
    sg=8.15 &nbsp;&nbsp;&nbsp; vf=0.00101033 &nbsp;&nbsp;&nbsp; P=10.0539 &nbsp;&nbsp;&nbsp; hf=191.942 &nbsp;&nbsp;&nbsp;
    vg=14.7198 &nbsp;&nbsp;&nbsp; <red>state=0</red> &nbsp;&nbsp;&nbsp;hg=2584.69 &nbsp;&nbsp;&nbsp; sf=0.649587 &nbsp;&nbsp;&nbsp;
    ug=2436.7 &nbsp;&nbsp;&nbsp; T=45.8362 &nbsp;&nbsp;&nbsp;uf=191.932
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>




<h3>Superheated vapors </h3>
<p class="CodeCommand">
    &gt;&gt;std.thermofluid("water", {T=150, P=220}) <br>
    <red>state=1</red> &nbsp;&nbsp;&nbsp; h=2767.24 &nbsp;&nbsp;&nbsp; s=7.23916 &nbsp;&nbsp;&nbsp; v=0.89446
</p>




<p> &nbsp;</p>
<p> &nbsp;</p>




<h3>Compressed liquids</h3>
<p class="CodeCommand">
    &gt;&gt;std.thermofluid("water", {T=150, P=500}) <br>
    <red>state=-1</red> &nbsp;&nbsp;&nbsp; h=639.981 &nbsp;&nbsp;&nbsp; s=1.86003 &nbsp;&nbsp;&nbsp; v=0.0010928
</p>




<p> &nbsp;</p>
<p> &nbsp;</p>



<h3 id="ex_keepalive">Keep Alive</h3>
<p class="CodeCommand">
    
    <span class="LuaComment">--The last parameter signals that <em>KeepAlive=true</em></span><br>
    &gt;&gt;tbl=std.thermofluid("water", {P=10}, <span class="LuaKeyword">true</span>) <br>
    &gt;&gt;tbl<br>
    <red>conninfo=table</red> &nbsp;&nbsp;&nbsp; P=10 &nbsp;&nbsp;&nbsp; ug=2436.68 &nbsp;&nbsp;&nbsp; vg=14.783 &nbsp;&nbsp;&nbsp; 
    hg=2584.51 &nbsp;&nbsp;&nbsp; T=45.7384 &nbsp;&nbsp;&nbsp; hf=191.534 &nbsp;&nbsp;&nbsp; state=0 &nbsp;&nbsp;&nbsp; 
    sf=0.648314 &nbsp;&nbsp;&nbsp; vf=0.0010103 &nbsp;&nbsp;&nbsp; uf=191.523 &nbsp;&nbsp;&nbsp; sg=8.15173
    <br>
    <br>
    
    <span class="LuaComment">--Using the "alive" connection</span><br>
    &gt;&gt;tbl=std.thermofluid("water", {T=150, P=500}, <mark>tbl.conninfo</mark>) <br>
    &gt;&gt;tbl <br>
    <red>conninfo=table</red> &nbsp;&nbsp;&nbsp; state=-1&nbsp;&nbsp;&nbsp; h=639.981 &nbsp;&nbsp;&nbsp; 
    s=1.86003 &nbsp;&nbsp;&nbsp; v=0.0010928 <br>
    
    <br>
    <span class="LuaComment">--Verify the connection is "alive"</span> <br>
    &gt;&gt;tbl.conninfo.m_Database <br>
    Connected to: C:\Users\...\datafiles\ThermoFluids.db <br>
    
    <br>
    
    <span class="LuaComment">--It is our responsibility to close the connection when done</span><br>
    &gt;&gt;tbl.conninfo.m_Database:close() <br>
    
    <br>
    
    <span class="LuaComment">--Verifying it is closed</span><br>
    &gt;&gt;tbl.conninfo.m_Database <br>
    You are not connected to a database. <br>
    
    <br>
    
    <span class="LuaComment">--Let's attempt to use the not "alive" connection</span><br>
    &gt;&gt;tbl=std.thermofluid("water", {T=150, P=500}, <mark>tbl.conninfo</mark>) <br>
    <red>WXSQLITE_ERROR[1000]: No Database opened</red>

    
</p>



<p> &nbsp;</p>
<p> &nbsp;</p>



<div class="RelatedLinks">
    <a href="../../apps/repo/thermoproprefrigerants.php">Thermal Properties of Refrigerants App</a>
</div>



<p> &nbsp;</p>

</body>
</html>