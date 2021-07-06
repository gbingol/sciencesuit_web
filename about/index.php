<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Overview</title>


    


    <link href="../css/common.css" rel="stylesheet" type="text/css" />

    <style type="text/css">

                
        h2
        {
            color:red;
        }


        p
        {
            padding-top:10px;
            padding-bottom:10px;
        }


        ul.space6x li
        {
            padding-top:6px;
            padding-bottom:6px;
        }


        @media only screen and (max-width:900px) 
        {
            table
            {
                width: 80%;
            }

        }



        @media only screen and (max-width:600px) 
        {
            table 
            {
                width: 100%;
            }

        }

      
        .auto-style1 
        {
            font-size: xx-small;
        }

           
    </style>



    

</head>






<body>

<?php include '../mainmenu.php' ?>

<h1> Overview</h1>

<p>
    <em>ScienceSuit</em> is designed and programmed by <a href="gb/index.php">Dr Gokhan Bingol</a>.
    Its design is mainly inspired by 
    <a href="https://products.office.com/en/excel" target="_blank">Excel</a><sup><span class="auto-style1">TM</span></sup> 
    (including <a href="https://docs.microsoft.com/en-us/office/vba/library-reference/concepts/getting-started-with-vba-in-office" target="_blank">VBA</a>) 
        and <a href="https://www.mathworks.com/products/matlab.html" target="_blank">Matlab</a><sup><span class="auto-style1">TM</span></sup> 
        and to some extent by <a href="https://cran.r-project.org/" target="_blank">R</a> and <a href="https://www.minitab.com/" target="_blank">Minitab</a><sup><span class="auto-style1">TM</span></sup>.</p>
    
    <p>
        <em>ScienceSuit</em> is mainly programmed in modern C++ and also embeds 
        <a href="https://www.lua.org/" target="_blank">Lua</a> scripting language. 
        Most of the core functions and data structures are programmed in 
        C++ and the functions and data structures written in Lua are open source. 
        The following well-known and stable libraries are used: 
    </p>

    
    <ul class="linespaced">
        <li><a href="https://opencv.org/" target="_blank">OpenCV</a>,</li>
        <li><a href="http://eigen.tuxfamily.org/" target="_blank">Eigen</a>,</li>
        <li><a href="https://www.boost.org/" target="_blank">Boost</a>,</li>
        <li><a href="https://www.wxwidgets.org/" target="_blank">wxWidgets</a>,</li>
        <li><a href="https://www.tecgraf.puc-rio.br/iup/" target="_blank">IUP</a>.</li>
    </ul>

    





<p>&nbsp;</p>

   





<h2 class="head_l2">Road Map</h2>

<p>
    Since its <a href="../downloads/index.php">first release</a> in <em>Dec, 25 2016</em>, 
    ScienceSuit has come a very long way and has improved considerably in many innumerable ways. 
    
    Thanks to its modular and extensible design, the journey  of R&D of ScienceSuit has no boundaries 
    and therefore a roadmap, even a tentative one, is essential.
</p>



<p>The following is the planned work:</p>
<ul class="linespaced">

    <li>
        Until v2.0 efforts will be dedicated to more <a href="../manual/plotter/index.php">charts</a> (always more...)
    </li>

    <li>
        v2.x, although they can already be easily exported, ability to save-load charts.
    </li>

        
    <li>
        v2.x, considerably more power to <a href="../manual/imgproc/index.php">image processing toolbox</a> .
    </li> 


    <li>
        v2.x a Camera Toolbox for acquiring live images from cameras.
    </li> 



    <li>
        v2.x, Replacement of command-line with a notebook style environment that itself includes a REPL command-line.
    </li>


    <li>
        v2.x, Debugging facilities to <a href="../manual/scripteditor/index.php">script editor</a>.
    </li>

    <li>
        Always more <a href="../manual/apps/index.php">apps</a>.
    </li>
</ul>
    
    




<p>&nbsp;</p>







<h2 class="head_l2">Want new features?</h2>

<p>
    For any purpose-specific features,  
    please contact <a href="mailto:gbingol@sciencesuit.org">gbingol@sciencesuit.org</a> 
</p>






<p>&nbsp;</p>








<h2 class="head_l2">Contribute?</h2>

<p>
    <em>ScienceSuit</em> is comprised of several components and it is appreciated 
    if you would like to pitch in. How? 
    Just check  <a href="https://github.com/gbingol" target="_blank">GitHub</a>
</p>






<p>&nbsp;</p>








<h2 class="head_l2">Found Bugs?</h2>

<p> 
    Please report bugs to <a href="mailto:admin@sciencesuit.org?subject=Bugs">bugs</a>.
</p>








</body>
</html>