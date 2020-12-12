<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Food Thermal Processing</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css">

    <style>

        table
        {
            border-collapse:collapse;
            text-align:center;
        }
        
        tr:first-child
        {
            font-weight: bold;
        }
        
        td
        {
            border:solid 1px;
            padding-left:0.8em;
            padding-right:0.8em;
        }

        @media only screen and (max-width:900px) 
        {
            table
            {
                width:80%;
            }
        }



        @media only screen and (max-width:600px) 
        {
            table
            {
                width:60%;
            }
        }

    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>



<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"] . "/mainmenu.php";
    include $mainmenuloc;
?>

<h1>Thermal Processing</h1>

<p>
    The app is designed to aid in thermal processing calculations of 
    foods (calculating F<sub>0</sub> value) subjected to different time and temperature 
    combinations.
</p>


<p>&nbsp;</p>

<p>
    For the thermal processing we will use the following 
    time-temperature profile: 
</p>

<table>
    <tr>
        <td>Time (min)</td>
        <td>Temperature (&deg;C)</td>
    </tr>
    <tr>
        <td>0</td>
        <td>2</td>
    </tr>
    <tr>
        <td>1</td>
        <td>30</td>
    </tr>
    <tr>
        <td>2</td>
        <td>55</td>
    </tr>
    <tr>
        <td>3</td>
        <td>76</td>
    </tr>
    <tr>
        <td>4</td>
        <td>50</td>
    </tr>
    <tr>
        <td>5</td>
        <td>25</td>
    </tr>
    <tr>
        <td>6</td>
        <td>2</td>
    </tr>
</table>

<p>&nbsp;</p>

<p>
    Here, the usage of app will be demonstrated by creating a 
    <a href="../../std/classes/food.php">Food</a> variable and subjecting that 
    food variable to thermal processing. However, this step can be skipped. 

</p>


<p>
    &nbsp;</p>
<p>
    Create a variable of type <em>Food </em>which can be done either using command editor 
    or using the <a href="fooddatabase.php">Food Database app</a>. 
    Here, command editor will be used.
</p>

<p class="CodeCommand">
    &gt;&gt;milk=Food.new{water=88.13, protein=3.15, CHO=4.80, lipid=3.25, ash=0.67}
</p>

<p>&nbsp;</p>

<p>
    Once the app is run and the variable name is entered in the text box where it says "<em>Variable:</em>" 
        and "<em>Show Organisms</em>" button is clicked, possible organisms in the food are listed, as shown in the following figure.
</p>


<img src="../images/thermalprocessing_microorganism.png" alt="">


<p>&nbsp;</p>
<p>
    By using the Microorganism database (located in databases folder), organisms which can 
    grow at the temperature, pH and water activity of the food, namely the variable <em>milk</em>, 
    are listed. 
</p>

<p>
    Due to D- and z-values of organisms being dependent on the food media as well, it can be noticed 
    that in the list of <em>"Possible Organisms in the Food"</em> some of the organisms are listed more 
    than once. 
    
    Clicking on each of them will change the value in the <em>"Food Media:</em>" textbox and correspondingly 
    the D- and z-values as well. 
</p>

<p>&nbsp;</p>
<p>
    Please note that D(time), D(temperature) and z-values do not require a specific unit; 
    however, these units must be consistent with the time-Temperature data. In the following figure, the “<em>Thermal Process Calc</em>” tab is shown:
</p>


<img src="../images/thermalprocessing_processcalc.png" alt="">


<p>&nbsp;</p>

<p>
    Once calculate the data is selected and <em>Calculate</em> button is clicked, a 
    report similar to the following will be prepared on a new worksheet.
</p>

<table>
    <tr>
        <td>t (min)</td>
        <td>T&deg;C</td>
        <td>LR</td>
        <td>D-val</td>
        <td>&sum; Log Red</td>
        <td>F-val</td>
    </tr>
    <tr>
        <td>0</td>
        <td>2</td>
        <td>0.00</td>
        <td>NR</td>
        <td>0.00</td>
        <td>0.00</td>
    </tr>
    <tr>
        <td>1</td>
        <td>30</td>
        <td>0.00</td>
        <td>NR</td>
        <td>0.00</td>
        <td>0.00</td>
    </tr>
    <tr>
        <td>2</td>
        <td>55</td>
        <td>0.00</td>
        <td>16.5</td>
        <td>0.00</td>
        <td>0.00</td>
    </tr>
    <tr>
        <td>3</td>
        <td>76</td>
        <td>2.31</td>
        <td>0.00</td>
        <td>4.93</td>
        <td>1.16</td>
    </tr>
    <tr>
        <td>4</td>
        <td>50</td>
        <td>0.00</td>
        <td>133</td>
        <td>6.66</td>
        <td>2.31</td>
    </tr>
    <tr>
        <td>5</td>
        <td>25</td>
        <td>0.00</td>
        <td>NR </td>
        <td>6.66</td>
        <td>2.31</td>
    </tr>
    <tr>
        <td>6</td>
        <td>2</td>
        <td>0.00</td>
        <td>NR</td>
        <td>6.66</td>
        <td>2.31</td>
    </tr>
</table>

<p>*NR: Not reported.</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="../../std/classes/food.php">Food</a>
    <a href="../../std/classes/database.php">Database</a>
</div>

        
    </body>

</html>
