<!DOCTYPE html>
<html>
<head>
<meta content="en-us" http-equiv="Content-Language">

<style type="text/css">
.auto-style2 {
	text-align: left;
	vertical-align: top;
	white-space: normal;
}
.auto-style3 {
	text-align: left;
	color: #FF0000;
}
.auto-style5 {
	border-collapse: collapse;
	border-width: 0px;
}
.auto-style7 {
	text-align: center;
	border-style: solid;
	border-width: 1px;
}
.auto-style8 {
	text-align: left;
}
.auto-style9 {
	text-align: left;
	font-size: medium;
	color: #FF0000;
}
.auto-style10 {
	color: #007700;
}
</style>

</head>
<body>
<script src="/jsscripts/Toggle.js"></script>

<?php
	$mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
	include $mainmenuloc;
?>


<h2>Particle Technology Applications</h2>
<P>The <a href="../../manual/functions/thermfluid.php">ThermoFluid </a>class in 
ScienceSuit is very powerful to simulate most engineering operations involving 
fluids. Here simulation of two common operations are 
demonstrated. Click on the links to see the related simulation.</P>
<P><A href="javascript:showDiv('multipleparticle', 'particletech');">Multiple Particle Settling</A>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<A href="javascript:showDiv('fluidization','particletech');">Fluidization</A></P>

<!-- Start of Multiple Particle -->

<div class="particletech" id="multipleparticle">

<img src="../psychrometry/heatingwithhumidification.GIF" width="455" height="192" alt="heatingwithhumidification.GIF (14556 bytes)">
<p class="auto-style2">Particles with Sauter-mean diameter D<sub>p</sub> (&micro;m) and 
density of &rho;<sub>p</sub> 
(kg/m<sup>3</sup>) settle in water at T<sub>fluid</sub>&deg;C. The volume fraction of particles is 
V<sub>p</sub>% in a container of internal 
diameter D<sub>vessel </sub>(cm). Calculate the absolute velocity of the 
particles and fluid. </p>
	<p class="auto-style3"><em>The code:</em></p>

	<div class="auto-style2">

<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;Tin,&nbsp;Texit=</span><span style="color: #007F7F;">10</span><span style="color: #000000;">,&nbsp;</span><span style="color: #007F7F;">20</span><span style="color: #007700;">--C</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;RHin,&nbsp;RHexit=</span><span style="color: #007F7F;">70</span><span style="color: #000000;">,&nbsp;</span><span style="color: #007F7F;">60</span><span style="color: #007700;">--%</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;Vin=</span><span style="color: #007F7F;">35</span><span style="color: #007700;">--m3/min</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;Tsteam=</span><span style="color: #007F7F;">100</span><span style="color: #007700;">--C</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;Ptotal=</span><span style="color: #007F7F;">95</span><span style="color: #007700;">--kPa</span><br/> 
<br/> 
<span style="color: #007700;">--Just a very simple input check</span><br/> 
<span style="font-weight: bold; color: #00007F;">if</span><span style="color: #000000;">((Texit-Tin)<</span><span style="color: #007F7F;">5</span><span style="color: #000000;">)&nbsp;</span><span style="font-weight: bold; color: #00007F;">then</span><span style="color: #000000;">&nbsp;</span><span style="color: #000080;">error</span><span style="color: #000000;">(</span><span style="color: #7F007F;">"The difference between inlet and outlet temperatures must be at least 5C"</span><span style="color: #000000;">,&nbsp;ERRORLEVEL)&nbsp;</span><span style="font-weight: bold; color: #00007F;">end</span><br/> 
<span style="font-weight: bold; color: #00007F;">if</span><span style="color: #000000;">((Tsteam-Tin)<</span><span style="color: #007F7F;">10</span><span style="color: #000000;">)&nbsp;</span><span style="font-weight: bold; color: #00007F;">then</span><span style="color: #000000;">&nbsp;</span><span style="color: #000080;">error</span><span style="color: #000000;">(</span><span style="color: #7F007F;">"The difference between steam and inlet temperatures must be at least 10C"</span><span style="color: #000000;">,&nbsp;ERRORLEVEL)&nbsp;</span><span style="font-weight: bold; color: #00007F;">end</span><br/> 
<br/> 
<span style="color: #007700;">--state 1 is the state of air at inlet</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;state1=psychrometry{P=Ptotal,&nbsp;RH=RHin,&nbsp;Tdb=Tin}&nbsp;</span><span style="color: #007700;">-- psychrometric properties at inlet</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;w1=state1.W&nbsp;</span><span style="color: #007700;">-- absolute humidity (kg/kg da)</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;h1=state1.H&nbsp;</span><span style="color: #007700;">-- enthalpy (kJ/kg)</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;v1=state1.V&nbsp;</span><span style="color: #007700;">-- specific volume (m3/kg da)</span><br/> 
<br/> 
<span style="color: #007700;">-- Calculate mass flow rate of air</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;m=Vin/v1&nbsp;</span><span style="color: #007700;">-- kg da/min</span><br/> 
<br/> 
<span style="color: #007700;">--state 2 is the state of air after heating</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;w2=w1&nbsp;</span><span style="color: #007700;">-- absolute humidity is preserved</span><br/> 
<br/> 
<span style="color: #007700;">--state 3 is the state of air after humidification</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;state3=psychrometry{P=Ptotal,&nbsp;RH=RHexit,&nbsp;Tdb=Texit}&nbsp;</span><span style="color: #007700;">-- psychrometric properties at outlet</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;w3=state3.W&nbsp;</span><span style="color: #007700;">-- absolute humidity (kg/kg da)</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;h3=state3.H&nbsp;</span><span style="color: #007700;">-- enthalpy (kJ/kg)</span><br/> 
<br/> 
<span style="color: #007700;">--Energy balance on humidifier section to find enthalpy at state 2</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;fluid=Fluid.new(</span><span style="color: #7F007F;">"water"</span><span style="color: #000000;">)</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;steam_props=fluid:get{T=Tsteam}</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;hsteam=steam_props.hg</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;msteam=m*(w3-w2)&nbsp;</span><span style="color: #007700;">-- kg of injected steam</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;h2=(m*h3-msteam*hsteam)/m</span><br/> 
<br/> 
<span style="color: #007700;">--The rate of heat transfer in the heating section</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;Q=m*(h2-h1)</span><br/> 
<br/> 
<span style="color: #000000; ">print(</span><span style="color: #7F007F;">"Amount of water added to air (kg):"</span><span style="color: #000000;">..</span><span style="color: #000080;">tostring</span><span style="color: #000000;">(msteam))</span><br/> 
<span style="color: #000000; ">print(</span><span style="color: #7F007F;">"The rate of heat transfer in the heating section (kJ):"</span><span style="color: #000000;">..</span><span style="color: #000080;">tostring</span><span style="color: #000000;">(Q))<br>
		<p>&nbsp;</p>
		<p>Now let's run a simulation to see how much energy is required for 
		different values of input and output temperatures. For a more thorough 
		simulation, all of the variables can be test; however, to demonstrate 
		the concept of simulation, we will only test the following values:</p>
		<table class="auto-style5" style="width: 30%">
			<tr>
				<td class="auto-style7" style="height: 21px"><strong>T<sub>inlet</sub> (&deg;C)</strong></td>
				<td class="auto-style7" style="height: 21px"><strong>T<sub>exit</sub> (&deg;C)</strong></td>
				<td class="auto-style7" style="height: 21px"><strong>&Delta;T (&deg;C)</strong></td>
			</tr>
			<tr>
				<td class="auto-style7">10</td>
				<td class="auto-style7">20</td>
				<td class="auto-style7">10</td>
			</tr>
			<tr>
				<td class="auto-style7">30</td>
				<td class="auto-style7">40</td>
				<td class="auto-style7">10</td>
			</tr>
			<tr>
				<td class="auto-style7">10</td>
				<td class="auto-style7">30</td>
				<td class="auto-style7">20</td>
			</tr>
			<tr>
				<td class="auto-style7">20</td>
				<td class="auto-style7">40</td>
				<td class="auto-style7">20</td>
			</tr>
			<tr>
				<td class="auto-style7">30</td>
				<td class="auto-style7">50</td>
				<td class="auto-style7">20</td>
			</tr>
			<tr>
				<td class="auto-style7">10</td>
				<td class="auto-style7">40</td>
				<td class="auto-style7">30</td>
			</tr>
			<tr>
				<td class="auto-style7">20</td>
				<td class="auto-style7">50</td>
				<td class="auto-style7">30</td>
			</tr>
			<tr>
				<td class="auto-style7">30</td>
				<td class="auto-style7">60</td>
				<td class="auto-style7">30</td>
			</tr>
			<tr>
				<td class="auto-style7">10</td>
				<td class="auto-style7">50</td>
				<td class="auto-style7">40</td>
			</tr>
			<tr>
				<td class="auto-style7">20</td>
				<td class="auto-style7">40</td>
				<td class="auto-style7">40</td>
			</tr>
		</table>
		</span></div>

<p class="auto-style2">First of all we note that calculating all these 
combinations with 
hand would not only be cumbersome but also very much error-prone as well. The 
results of the simulation is shown in the following figure. </p>
	<table style="width: 100%">
		<tr>
			<td class="auto-style2">
			<img alt="" height="269" src="../psychrometry/heatingwithhumidification-simulationresults1.png" width="448" style="float: left"></td>
			<td style="padding-left:5%; vertical-align:top; text-align:left">Here we clearly see that as the &Delta;T increases 
			the energy expenditure also increases and a linear relationship 
			exists. However, we also note that for the same temperature 
			difference, heating the input temperature results in a lower energy 
			requirement.</td>
		</tr>
	</table>

</div><!-- End of Heating with humidification -->



<!-- Start of Fluidization -->

<div class="particletech" id="fluidization" style="display:none">
<img src="../psychrometry/adiabatic%20mixing%20of%20airstreams.gif" width="339" height="284">
   
<p class="auto-style8">Air leaving the cooling section of an air conditioning system at T<sub>1</sub>&deg;C 
and RH<sub>1</sub> % relative humidity at a rate of V<sub>1</sub> (m<sup>3</sup>/min)
is mixed adiabatically with outside air at T<sub>2</sub>&deg;C and RH<sub>2</sub> % relative humidity at a 
rate of V<sub>2</sub> (m<sup>3</sup>/min).&nbsp; Assuming that the mixing process occurs at a pressure of P(atm), 
determine the relative humidity, the dry-bulb temperature, and the volume flow rate of the mixture.</p>
<p class="auto-style9"><strong><em>The code:</em></strong></p>
	<div class="auto-style8">
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;T1,&nbsp;T2=</span><span style="color: #007F7F;">14</span><span style="color: #000000;">,&nbsp;</span><span style="color: #007F7F;">32</span><span style="color: #007700;">--C</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;RH1,&nbsp;RH2=</span><span style="color: #007F7F;">100</span><span style="color: #000000;">,&nbsp;</span><span style="color: #007F7F;">60</span><span style="color: #007700;">--%</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;V1,&nbsp;V2=</span><span style="color: #007F7F;">50</span><span style="color: #000000;">,&nbsp;</span><span style="color: #007F7F;">20</span><span style="color: #007700;">--m3/min</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;Ptotal=</span><span style="color: #007F7F;">101.3</span><span style="color: #007700;">-- kPa</span><br/> 
<br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;state1=psychrometry{Tdb=T1,&nbsp;RH=RH1,&nbsp;P=Ptotal}&nbsp;</span><span style="color: #007700;">-- First inlet stream's 
		properties</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;state2=psychrometry{Tdb=T2,&nbsp;RH=RH2,&nbsp;P=Ptotal}&nbsp;</span><span style="color: #007700;">-- Second inlet stream's 
		properties</span><br/> 
<br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;v1,&nbsp;v2=state1.V,&nbsp;state2.V&nbsp;</span><span style="color: #007700;">-- m3/kg da</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;w1,&nbsp;w2=state1.W,&nbsp;state2.W&nbsp;</span><span style="color: #007700;">-- kg/ kg da</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;h1,&nbsp;h2=state1.H,&nbsp;state2.H&nbsp;</span><span style="color: #007700;">-- kJ/kg da</span><br/> 
<br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;ma1,&nbsp;ma2=V1/v1,&nbsp;V2/v2&nbsp;</span><span style="color: #007700;">--kg da</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;ma3=ma1+ma2&nbsp;</span><span style="color: #007700;">--kg da<br></span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;mwater=w2*ma2+w1*ma1&nbsp;</span><span style="color: #007700;">-- amount of water vapor in the exit stream</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;w3=mwater/ma3&nbsp;</span><span style="color: #007700;">-- absolute humidity of exiting air</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;E3=h2*ma2+h1*ma1&nbsp;</span><span style="color: #007700;">-- enthalpy of exiting air, kJ</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;h3=E3/ma3&nbsp;</span><span style="color: #007700;">-- enthalpy of exiting air, kJ/kg da</span><br/> 
<br/> 
<span style="color: #007700;">--Now that we know at least 3 properties of the exiting air, we can compute the rest</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;state3=psychrometry{P=Ptotal,&nbsp;W=w3,&nbsp;H=h3}</span><br/> 
		<br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;V3=state3.V*ma3 
<span style="color: #007700;">&nbsp;&nbsp;&nbsp; --Volumetric flow rate of exiting air</span></span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;RH3=state3.RH 
<span style="color: #007700;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --</span></span><span class="auto-style10"> 
		relative humidity</span><br/> 
<span style="font-weight: bold; color: #00007F;">local</span><span style="color: #000000;">&nbsp;T3=state3.Tdb 
<span style="color: #007700;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --</span></span><span class="auto-style10"> 
		Dry bulb temperature</span><br/> 
<br/> 
<span style="color: #000000; ">print(</span><span style="color: #7F007F;">"Volumetric flow rate of mixture (m3/kg da):"</span><span style="color: #000000;">..</span><span style="color: #000080;">tostring</span><span style="color: #000000;">(V3))</span><br/> 
<span style="color: #000000; ">print(</span><span style="color: #7F007F;">"Relative humidity of mixture (%):"</span><span style="color: #000000;">..</span><span style="color: #000080;">tostring</span><span style="color: #000000;">(RH3))</span><br/> 
<span style="color: #000000; ">print(</span><span style="color: #7F007F;">"Temperature of mixture (C):"</span><span style="color: #000000;">..</span><span style="color: #000080;">tostring</span><span style="color: #000000;">(T3))</span><br/> 
	</div>
<p class="auto-style8">Since the above-listed code is meant for demonstration 
purposes, no sanity check controls were placed to avoid cluttering of the code. 
Here, one could wish to investigate the effect of relative humidities of inlet 
air on the relative humidity of exit air. Here are the simulation results:</p>
	
	<table style="width: 100%">
		<tr>
			<td class="auto-style2">
			<img alt="" src="../psychrometry/airmixing-simulation1.png" ></td>
			<td style="padding-left:5%; vertical-align:top; text-align:left">Here we see that increasing relative humidity of 
	either inlet stream while keeping the other constant, increases the relative 
	humidity of exit air linearly. For the careful eyes, it is also noticed that 
	we could have run the simulation for RH2 up to 75% relative humidity level, 
	why?</td>
		</tr>
	</table>

</div><!-- End of Adiabatic Mixing -->



</body>

</html>
