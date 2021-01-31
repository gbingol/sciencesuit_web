<!DOCTYPE html>
<html>

<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Psychrometry App</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        table.psychrometry
        {
            border-collapse:collapse;
            width:50%;
        }
        
        td
        {
            border:solid 1px;
        }
        
        ol.spaced li
        {
            padding: 10px 0 10px 0;
        }
        
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>

<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>Psychrometry App</h1>

<p>
    Compute thermodynamic properties of humid air. 
</p>

<p>&nbsp;</p>

<img alt="" src="../images/psychrometry.svg">

<p>
    <em>In order to calculate thermodynamic properties of humid air:</em>
</p>

<ol class="linespaced">

    <li> Exactly 3 properties must be selected* (the remaining of the selections are disabled). </li>

    <li> Enter the corresponding values to the selections. </li>
        
    <li> Click <em>"Calculate"</em> button. </li>
</ol>

<p>
    <span style="color: red; font-size: x-large;">&#9432;</span> 
    
    Note that not all combinations are valid to be able to calculate the rest of the properties. 
    For example, if a combination of P, T<sub>dp</sub> and W is selected, 
    the rest of the properties cannot be calculated. Why?
</p>


<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    To be able to calculate properties of another combination, first deselection of 
    at least one of the previously selected properties must be done.
</p>


<p>&nbsp;</p>



<p>
    If <em>File</em> &rarr; <em>Export to Worksheet</em> option is selected, 
    depending on the selected combination a report similar to the following 
    will be prepared on a new worksheet:
</p>


<table class="psychrometry">
    <tr>
        <td colspan="3"><strong>Selected Combination</strong></td>
    </tr>
    <tr>
        <td>Tdb</td>
        <td>20</td>
        <td>&deg;C</td>
    </tr>
    <tr>
        <td>Twb</td>
        <td>12</td>
        <td>&deg;C</td>
    </tr>
    <tr>
        <td>P</td>
        <td>101.325</td>
        <td>kPa</td>
    </tr>
    <tr>
        <td colspan="3">&nbsp;</td>

    </tr>
    <tr>
        <td colspan="3"><strong>Results</strong></td>

    </tr>
    <tr>
        <td>Pws</td>
        <td>2.339</td>
        <td>kPa</td>
    </tr>
    <tr>
        <td>Pw</td>
        <td>0.8823</td>
        <td>kPa</td>
    </tr>
    <tr>
        <td>Tdp</td>
        <td>4.398</td>
        <td>&deg;C</td>
    </tr>
    <tr>
        <td>V</td>
        <td>0.8378</td>
        <td>m3/kg</td>
    </tr>
    <tr>
        <td>W</td>
        <td>0.00546</td>
        <td>kg/kg da</td>
    </tr>
    <tr>
        <td>Ws</td>
        <td>0.01470</td>
        <td>kg/kg da</td>
    </tr>
    <tr>
        <td>H</td>
        <td>33.86</td>
        <td>kJ/kg da</td>
    </tr>
    <tr>
        <td>RH</td>
        <td>37.72</td>
        <td>%</td>
    </tr>
</table>



<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../../std/funcs/psychrometry.php">psychrometry</a>
</div>


</body>

</html>
