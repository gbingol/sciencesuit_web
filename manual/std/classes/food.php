<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Class</title>


    <link href="../../../css/common.css" rel="stylesheet" type="text/css">

    <style type="text/css">

    .auto-style8 
    {
        color: #0000FF;
    }
    .auto-style9 {

        color: #127622;
    }
        .auto-style10 {
        color: #FF0000;
    }
        .auto-style11 {
        background-color: #FFFF00;
    }

    
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


    
<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
</script>
    
    

<h1>Food Class</h1>


<p>
    Food in ScienceSuit is assumed to be composed of macronutrients, ash and salt: 
</p>

<ul class="linespaced">
    <li>Water,</li>
    <li>Carbohydrate (CHO),</li>
    <li>Protein, </li>
    <li>Lipid (Oil/Fat),</li>
    <li>Ash</li>
    <li>Salt.</li>
</ul>


<h2 id="create">Create Food variable</h2>

<p>In order to create a variable of type Food, we run the following command:</p>

<p class="CodeCommand">
    &gt;&gt;myfood = std.Food.new{Water=30, CHO=70} <br>

    <br />

    &gt;&gt; myfood<br>
    Weight (unit weight)=1.00<br>
    Temperature (C)=20.00 <br />
    Water (%)=30.00 <br>
    CHO (%)=70.00 <br>
    Aw=0.751 <br>
    pH=6.00
</p>

<p style="margin-right: 5%" >
    This command creates a food material and assigns it to variable <em>myfood</em>. The keys for 
    Lua table are water, CHO, protein, lipid or oil or fat, ash and salt and are case-insensitive.
    The variable <em>myfood</em> has the following properties: Its temperature is 20 &deg;C and pH is 6 by 
    default (unless changed, it remains as 6.0). Its weight is 1 unit and 30% of it is water and 70% is carbohydrate 
    (please note that if the total percentage in the above command-line was not 100, it 
    would have been adjusted to 100). 
</p>

<p>&nbsp;</p>

<p style="margin-right: 5%">
    Please note that in the following example, although the sum of percentages in <em>myfood2</em> 
    is not equal to 100%, it will be automatically adjusted to 100% and therefore 
    the percentages of water and carbohydrate in  <em>myfood</em> and  <em>myfood2</em> are same.
</p>

<p class="CodeCommand">
    &gt;&gt;myfood2 = std.Food.new{Water=15, CHO=35} <br>

    <br />

    &gt;&gt;myfood2 <br>
    Weight (unit weight)=1.00 <br>
    Temperature (C)=20.00 <br>
    Water (%)=30.00 <br>
    CHO (%)=70.00 <br>
    Aw=0.751 <br>
    pH=6.00
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>













<h2 id="mathops">Mathematical Operations</h2>

<p>
    Food data structure supports some arithmetic operations: 
    Let f<sub>1</sub>, f<sub>2</sub> and f<sub>3</sub> denote <em>Food</em> and <em>a</em> and <em>b</em> an arbitrary numbers.
</p>

<ol class="linespaced">
    <li>
        <em>Addition</em>: f<sub>1</sub>+f<sub>2</sub>=f<sub>3</sub>&nbsp;&nbsp;&nbsp;&nbsp; 
        a*f<sub>1</sub>+b*f<sub>2</sub>=f<sub>3</sub>
    </li> 
    <li>
        <em>Subtraction:</em> f<sub>1</sub>-f<sub>2</sub>=f<sub>3</sub>
    </li>
    <li>
        <em>Multiplication:</em> a*f<sub>1</sub> =b*f<sub>1</sub> = f<sub>1</sub>*a = f<sub>1</sub>
    </li>
</ol>


<p>&nbsp;</p>

<p>
    <strong>A) Addition:</strong> Addition operation can be considered as the unit operation of mixing of food materials. 
    The data structure allows mixing of different food materials at different temperatures. 
    Mass and energy balances are performed automatically.
</p>


<p>Following equation is used for energy balance:</p>
<img src="../images/classes/food_energybalance.png" alt=""/>



<p>&nbsp;</p>
<p>
    Here one can quickly notice that Cp<sub>mix</sub> and T<sub>mix</sub> are unknown and furthermore 
    <em>Cp</em><sub><em>mix</em></sub><em>=f(T</em><sub><em>mix</em></sub>). Knowing that specific heat capacity of 
    foods hardly changes within a specific temperature range (a phase change is not considered), the following equation was used: 
</p>

<img src="../images/classes/food_energybalance_averagecp.png" alt=""/>

<p>&nbsp;</p>


<h3 id="addition">Addition</h3>

<p>Let's create two food materials:</p>

<p class="CodeCommand">
    &gt;&gt; f1 = std.Food.new{Water=30, CHO=70}<br>

    <br />

    &gt;&gt;f2 = std.Food.new{oil=40, protein=60}
</p>

<p>&nbsp;</p>
    <p>Say, we would like to mix equal proportions of <em>f</em><sub>1</sub> and <em>f</em><sub>2</sub>:</p>

<p class="CodeCommand">
    &gt;&gt;f3 = f1 + f2 <br>

    <br />

    &gt;&gt;f3 <br>
    Weight (unit weight)=2.00 <br>
    Temperature (C)=20.00 <br>
    Water (%)=15.00 <br>
    Protein (%)=30.00 <br>
    CHO (%)=35.00 <br>
    Lipid (%)=20.00 <br>
    Aw=0.334 <br>
    pH=6.00
</p>

<p>
    Here, the addition operation yielded a new food material and as expected the new food material <em>f</em><sub>3</sub> is composed of water, protein, carbohydrate and lipid. 
    Its weight is 2 units (please see member function <a href="#normalize">normalize()</a> and its temperature is 20&deg;C.
</p>

<p>&nbsp;</p>

<p>Instead of equal proportions, say we want to mix 20% <em>f</em><sub>1</sub> and 80% <em>f</em><sub>2</sub>:</p>

<p class="CodeCommand">
    &gt;&gt;f4 = 0.2*f1 + 0.8*f2 <br>
    &gt;&gt;f4 <br>
    Weight (unit weight)=1.00 <br>
    Temperature (C)=20.00 <br>
    Water (%)=6.00 <br>
    Protein (%)=48.00 <br>
    CHO (%)=14.00 <br>
    Lipid (%)=32.00 <br>
    Aw=0.085 <br>
    pH=6.00
</p>

<p>
    It should be noticed that although <em>f</em><sub>1</sub> and <em>f</em><sub>2</sub> are mixed, we have 
    named the variable as <em>f</em><sub>4</sub> instead of <em>f</em><sub>3</sub>. This is due to the fact that 
    two food materials are considered to be equivalent if they contain the same amount of each macro-components. 
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 id="subtraction">Subtraction</h3>
<p>
    Subtraction can be considered as the unit operation evaporation or extraction. 
    Therefore, it is only allowed to subtract <em>f</em><sub>2</sub> from <em>f</em><sub>1</sub>, if and only if, 
    <em>f</em><sub>2</sub> is at the same temperature with <em>f</em><sub>1</sub> and contains exactly the same, 
    but to a lesser amount of, macro-components.
</p>


<p >
    In the following example our goal is to make a powder out of milk. We know that we need to remove water 
    from the milk to achieve this goal. Therefore, we create two food materials, namely milk and water.
</p>

<p class="CodeCommand">
    &gt;&gt;milk = std.Food.new{water=88.13, protein=3.15, CHO=4.80, lipid=3.25, ash=0.67} <br>

    <br />

    &gt;&gt;water = std.Food.new{water=100} <br>

    <br />

    &gt;&gt;powder = milk - 0.87*water <br>

    <br />

    &gt;&gt;powder <br>
    Weight (unit weight)=0.13 <br>
    Temperature (C)=20.00 <br>
    Water (%)=8.69 <br>
    Protein (%)=24.23 <br>
    CHO (%)=36.92 <br>
    Lipid (%)=25.00 <br>
    Ash (%)=5.15<br>
    Aw=0.192<br>
    pH=6.00
</p>

<p>&nbsp;</p>



<p>A few things should be noted here:</p>
<ol class="linespaced">
    <li>
        We obtain a new food material, namely <em>powder</em>, of weight 0.13 units since we have subtracted 0.87 units 
        of <em>water</em> from 1 unit of milk. If you were to use the variable <em>powder</em>	as is, its weight 
        will be 0.13 units in any operation, therefore, please see 
        the member function <em>normalize</em> to prevent pitfalls.
    </li>

    <li> 
    Had we run a command such as <mark>powder=milk - water</mark>, 
    it would not have been successful as 1 unit of <em>milk</em> does not have 1 unit of <em>water</em>.
    </li>
    <li>
        The obtained food material, namely powder, has higher percentage of lipid, protein, 
    CHO and ash but a lower percentage of water, as expected.
    </li>
</ol>


<p>&nbsp;</p>

<h3 id="multiplication">Multiplication</h3>

<p>
    Unlike addition or subtraction, which yielded new food materials, multiplication 
    does not yield a new food material. It only changes the weight of the food material. This is necessary 
    to be able to perform addition or subtraction operations:
</p>

<p>Taking the previous example: </p>
<p class="CodeCommand">
    &gt;&gt;f4 = 0.2*f1 + 0.8*f2
</p>

<p>
    To be able to perform this addition, behind the scenes Lua first creates a temporary food material from 
    <mark>0.2*f1</mark>, say <mark>temp1</mark>, and then another temporary food material from <mark>0.8*f2</mark>, 
    say <mark>temp2</mark>. <mark>f<sub>4</sub></mark> is actually <mark>f<sub>4</sub>=temp<sub>1</sub>+temp<sub>2</sub></mark>
</p>










<p>&nbsp;</p>
<p>&nbsp;</p>








<h2 id="memberfuncs">Member Functions</h2>

<p>&nbsp;</p>

<h3 id="aw">aw (Water Activity)</h3>
<p class="funcsignature">
    aw() &rarr; number <br>
    
    <br>
    
    aw(arg=)  <br>
    
</p>
<p>
    Calculates the water activity of the food material. Argument arg can be either a nil value, 
    a valid number or a function which returns a valid number. 
    Solute is defined as: Solute=CHO+lipid+protein+ash+salt.
</p>

<p>The following assumptions were made:</p>

<ol class="linespaced">
    <li>%Water &lt; 0.00001 &#8594; a<sub>w</sub>=0.01</li>
    <li>%Solute &lt;1 &#8594; a<sub>w</sub>=0.99</li>
</ol>

<p>For non-electrolyte solutions (% salt &lt;0.00001):</p>

<ol class="linespaced">
    <li>%water &gt;99.0 &#8594; a<sub>w</sub>=0.98</li>
    <li>%CHO&gt;98 and all others &lt;1% &#8594; a<sub>w</sub>=0.70</li>
    <li>% water (1,5) &amp; %CHO&gt;5 &#8594; a<sub>w</sub>=<a href="https://onlinelibrary.wiley.com/doi/pdf/10.1002/9780470376454.app3" target="_blank">MoneyBorn</a> equation</li>
    <li>%water &gt;5 &amp; %CHO&gt;5 &#8594; a<sub>w</sub>=<a href="https://onlinelibrary.wiley.com/doi/pdf/10.1002/9780470376454.app3" target="_blank">Norrish</a> equation	</li>
</ol>

<p>
    For both MoneyBorn and Norrish equation, the amount of fructose was considered as the 
    amount of CHO. For Norrish equation amounts of glycerol and alanine were 
    considered to be equal to amounts of lipid and protein, respectively. 
</p>

<p>&nbsp;</p>

<p>
    If the argument <i>arg</i> is provided as an acceptable valid number, then the 
    above-mentioned calculations are skipped and the provided value is used thereafter:
</p>

<p class="CodeCommand">
    &gt;&gt;milk = std.Food.new{water=88.13, protein=3.15, CHO=4.80, lipid=3.25, ash=0.67}<br>

    <br />

    &gt;&gt;milk<br>
    Aw=0.920 <span class="auto-style9">--value computed using above-mentioned assumptions</span> <br>

    <br />

    &gt;&gt;milk:aw(0.95) <span class="auto-style9">--explicitly setting the value</span> <br>

    <br />

    &gt;&gt;milk <br>
    Aw=0.950 <br>

    <br />

    &gt;&gt;milk:aw() <span class="auto-style9">--calling the water activity returns the set value</span> <br>
    0.95
</p>

<p>&nbsp;</p>


<p>
    If a different function is better suited to compute the water activity of a specific food material, then the 
    argument <i>arg</i> must be of type function. When such a function is provided, ScienceSuit uses the provided 
    function to calculate the water activity. The provided function must be in the following format: 
</p>

<p class="CodeCommand">
    <span class="LuaKeyword">function</span> ComputeAw (myfood)
</p>

<p>
    Here, the function name <i>ComputeAw</i> is arbitrarily chosen for the example. 
    The argument, <i>myfood</i>, whose name is also arbitrarily chosen, is the food 
    material that calls the member function, to calculate aw. Therefore, <i>
    ComputeAw</i> has access to all of the properties of the calling food material.
</p>

<p>&nbsp;</p>

<p>Let's first define a rather simple function which will compute the water activity:</p>

<p class="CodeCommand">
    <span class="LuaKeyword">function</span> ComputeAw(myfood) <br>
        &nbsp;&nbsp;&nbsp; <span class="LuaKeyword">if</span>(myfood:get().water&gt;85) <span class="LuaKeyword">then</span> <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="LuaKeyword">return</span> 0.95 <br>
        &nbsp;&nbsp;&nbsp; <span class="LuaKeyword">end</span> <br>
    <span class="LuaKeyword">end</span>
</p>

<p>&nbsp;</p>

<p>Let's define a food variable, namely milk, and use the above function to calculate water activity:</p>


<p class="CodeCommand">
    &gt;&gt;milk = std.Food.new{water=88.13, protein=3.15, CHO=4.80, lipid=3.25, ash=0.67}<br>

    <br />
    
    <span class="LuaComment">--returns the value computed using system's assumptions</span> <br>
    &gt;&gt;milk:aw() <br>
    0.92<br>
    
    <br>
    
    <span class="LuaComment">--explicitly setting the value using ComputeAw function </span> <br>
    &gt;&gt;milk:aw(ComputeAw)  <br>

    <br />

    
    <span class="LuaComment">--calling the water activity returns the value set by ComputeAw function</span><br>
    &gt;&gt;milk:aw()  <br>
    0.95
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="cp">cp (Specific Heat Capacity)</h3>
<p class="funcsignature">
    cp() &rarr; number <br>
    
    <br>
    cp(arg=) 
    
</p>
<p> 
    Returns the specific heat capacity (kJ/kgK) of the food material. The following predictive equation is used to 
    calculate specific heat capacity:
</p>



<p>
    If a different function or value is better suited to compute the specific heat 
    capacity of a specific food material, then the argument <i>arg</i> needs to be 
    provided (see member function <i><a href="#aw">aw</a>()</i> for more info).
</p>

<img src="../images/classes/food_cp.png" alt=""/>








<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="get">get</h3>
<p class="funcsignature">
    get() &rarr; Lua Table
</p>

<p>Returns a Lua table containing the macronutrients, ash and salt.</p>

<p>&nbsp;</p>


<p class="CodeCommand">
    &gt;&gt;milk = std.Food.new{water=88.13, protein=3.15, CHO=4.80, lipid=3.25, ash=0.67} <br>

    <br />

    &gt;&gt;tbl=milk:get() <br>

    <br />

    &gt;&gt;type(tbl)<br>table
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="k">k (Thermal Conductivity)</h3>
<p class="funcsignature">
    k() &rarr; number <br>
    
    <br>
    
    k(arg=)
    
</p>
    
<p>
    If argument <i>arg</i> is not provided then returns the thermal conductivity (W/mK) of the food material. 
    The following predictive equations is used to calculate thermal conductivity:
</p>

<img src="../images/classes/food_k.png" alt=""/>


    
<p>
    If a different function or value is better suited to compute the thermal 
    conductivity of a specific food material, then the argument <i>arg</i> needs to 
    be provided (see member function <i><a href="#aw">aw</a>()</i> for more info).
</p>
    




<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="normalize">normalize</h3>
<p class="funcsignature">
    normalize()
</p>

<p> 
    Only sets the weight to 1.0. However, this is a rather important function as the food 
    material that is a result of an addition or a subtraction operation can have a 
    weight different than 1.0 as shown in the following example:
</p>


<p class="CodeCommand">
    &gt;&gt;milk = std.Food.new{water=88.13, protein=3.15, CHO=4.80, lipid=3.25, ash=0.67} <br>
    &gt;&gt;water = std.Food.new{water=100}<br>

    <br>

    &gt;&gt;powder = milk - 0.87*water <br>
    &gt;&gt;powder <br>
    Weight (unit weight)=<span class="auto-style10">0.13</span>
</p>



<p>
    If you were to use the variable <i>powder</i> as is in another mathematical operation, its weight would be considered as 0.13 units. 
    As an example, in a mixing operation where you, say, mix milk and powder: 
    Mathematically we would express the mixing operation as an addition and it might be expected that the variable <i>mymix</i> 
    has a weight of 2.0 units. However, its weight is equal to 1.13 units, since <i>powder</i> is a <i>mathematical result</i> of an 
    addition operation. To be able to use it <i>conceptually</i> as an independent food material, it needs to be normalized, 
    prior to any mathematical operation.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>











<h3 id="ph">ph</h3>
<p class="funcsignature">
    ph() &rarr; number <br>
    
    <br>
    
    ph(arg=)
</p>

<p> 
    By default the pH is 6.0 and no predictive equations are currently provided to calculate otherwise. 
</p>

<p> 
    If argument <i>arg</i> is provided as a number in the range of (0-14) then sets the pH value of the food material. If
    <i>arg</i> is not provided the function returns the pH value. 
</p>


<p>
    If a different function or value is better suited to compute the pH of a specific 
    food material, then the argument <i>arg</i> needs to be provided (see member function <i><a href="#aw">aw()</a></i> for more info).
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>









<h3 id="rho">rho (Density)</h3>
<p class="funcsignature">
    rho() &rarr; number <br>
    
    <br>
    
    rho(arg=)
</p>

<p>
    If argument <i>func</i> is not provided then returns the density (kg/m<sup>3</sup>) of the food material. The 
    following predictive equations are used to calculate density:
</p>

<img src="../images/classes/food_rho.png" alt=""/>


<p>
    If a different value or a function is better suited to compute the density of a 
    specific food material, then the argument <i>arg</i> needs to be provided (see member function 
    <i><a href="#aw">aw</a>()</i> for more info).
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<h3 id="T">T (Temperature)</h3>
<p class="funcsignature">
    T() &rarr; number <br>
    
    <br>
    
    T(num=)
</p>
<p>
    If argument <em>num</em> is provided as a number then the function sets the temperature value of the food 
    material. If <em>num</em> is not provided the function returns the temperature of the food material.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="../../apps/repo/fooddatabase.php">Food Database App</a>
    <a href="../../apps/repo/foodthermalprocessing.php">Food Thermal Processing App</a>
</div>



</body>
</html>