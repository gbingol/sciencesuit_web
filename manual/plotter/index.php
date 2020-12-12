<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Plotter</title>

   
    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        p
        {
            margin-right: 5%;
        }
        
        ol.spaced li
        {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        div.potpourriinfo
        {
            border: 2px dashed maroon;
            margin-right: 60%;
        }
        
        
        @media only screen and (max-width:900px) 
        {
            p
            {
                margin-right: 1%;
            }
            
            
            div.potpourriinfo
            {
                margin-right: 15%;
            }
        }
        
        
         @media only screen and (max-width:600px) 
        {

            div.potpourriinfo
            {
                margin-right: 5%;
                
                font-size: 0.8em;
                
            }
            
           
        }
        
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
   
</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>PLOTTER</h1>

<p>
    Completely interactive and customizable charts.
</p>



<img style="max-height: 75vh; max-width: 90vw;" src="../../mainpage/images/plotter_multiplecharts.svg" alt="">

<p>&nbsp;</p>

<p>
    Different variations of scatter and box-and-whisker plot  
    can be found under the "Home" ribbon page as seen in the following figure. 
</p>

<img src="images/home_ribbonbar.png" alt=""/>


<p>&nbsp;</p>


<div class="potpourriinfo">
    <p>
        <span style="color: red; font-size: x-large;">&#9432;</span> 
        Charts can be plotted:
     </p>

     <ol class="spaced">
         <li>Using commands, </li>
         <li>Using the graphical user interface (GUI),</li>
         <li>A potpourri of commands and GUI. </li>
     </ol>
</div>
 
<p>&nbsp;</p>
<p>&nbsp;</p>



<p><a href="plotwindow.php">Basics of Plot Window</a></p>


<p><a href="scatter/bubblechart.php">Bubble Charts</a></p>

<p><a href="scatter/scatterchart.php">Scatter Charts</a></p>

<p><a href="boxwhisker/boxwhisker.php">Box and Whisker Chart</a> </p>
   
    
    

<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="../std/funcs/scatter.php">std.scatter</a>
    <a href="../std/funcs/boxplot.php">std.boxplot</a>
</div>
    


</body>

</html>
