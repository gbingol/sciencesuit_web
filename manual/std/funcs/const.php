<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Constants Library</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />


    <style>
        .auto-style3 {
            color: #FF0000;
            background-color: #DEDEDE;
        }
        .auto-style4 {
            background-color: #CCCCCC;
        }
        .auto-style5 {
            text-decoration: underline;
        }
    </style>

    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>






<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>const </h1>

<p>
    <em>std.const</em> is a library for constants used by many scripts.
</p>




<p>&nbsp;</p>






<h2 id="tolerance">tolerance</h2>

<p>
    It is of type number and has a value of 10<sup>-5</sup>. It is mostly used when testing if two numbers are equal, such as 
    |num<sub>1</sub>-num<sub>2</sub>|&lt;tolerance.</p>

<p class="CodeCommand">
    &gt;&gt;std.const.tolerance <br />
    1e-05
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
    
<h2 id="exedir">exedir</h2>
<p>
    Returns the <span class="auto-style5"><em>full path</em></span> of the folder containing 
    <em>sciencesuit.exe</em> file as string. This is rather useful to work with relative paths 
    <em>within the sciencesuit folder</em> instead of working with full paths referrals. 
</p>

<p>
    For example, say you have placed an image, namely <em>myimage.png</em>, in the home folder 
    which is directly under the sciencesuit folder. Now you can refer to the image by 
    <span class="auto-style4">std.const.exedir..&quot;/home/myimage.png</span>&quot;. 
    Later on if you move sciencesuit folder to another location on the OS, the path will still 
    work correctly.
</p>

<p>
    In cases, where ScienceSuit is installed in a path with non-ASCII characters, the path will be encoded.
    For example, if you have installed ScienceSuit in a fantasy directory such as 
    C:\熊\αρκούδα\медведь\Bjørn, when you run following command:</p>
<p class="CodeCommand">
    &gt;&gt;std.const.exedir <br />
    C:\ç†Š\Î±ÏÎºÎ¿ÏÎ´Î±\Ð¼ÐµÐ´Ð²ÐµÐ´ÑŒ\BjÃ¸rn\    
</p>

<p>
    It is seen that, system has encoded the path as it contains non-ASCII characters. 
</p>
   
    




<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
    

<h2 id="color">color</h2>
<p>
    It is defined for convenience and provides most of the commonly used colors as string in the 
    format of "R G B";. For example, red color has the value of "255 0 0". These constants are 
    especially useful when using formatted output to Worksheet using the 
    <a href="../classes/worksheet.php">Worksheet class</a>.
</p>

<p class="CodeCommand">
    &gt;&gt;ws=std.activeworksheet() <br />
    &gt;&gt;ws[1][1]={value="A1", fgcolor=std.const.color.<span class="auto-style3">red</span>}
</p>

<img src="../images/const/color_formattedoutputtoworksheet.png" alt="" />





<p>&nbsp;</p>
<p>&nbsp;</p>

    




<h2 id="fillstyle">fillstyle</h2>
<p>
    Fill style requested by functions take an integer value to perform the required style. These constants provides
    convenience when a fill style is needed.
</p>

<p>
    The constants are as follows:<br>
    {solid=100, transparent=106, bdiaghatch=111, crossdiaghatch=112, fdiaghatch=113, crosshatch=114, horizhatch=115, verthatch=116}
</p>

<p>
    The following image shows the difference between a <em>solid</em> and a <em>crossdiaghatch</em> fill:
</p>

<img src="../images/const/fillstyle_solidvscrossdiag.png" alt="">






<p>&nbsp;</p>
<p>&nbsp;</p>





<h2 id="linestyle">linestyle</h2>
<p>
    Similar to fill style, line style requested by functions take an integer value to perform the required style. These constants provides
    convenience when a line style is needed.
</p>

<p>
    The constants are as follows:<br>
    {solid=100, dot=101, longdash=102, shortdash=103, dotdash=104, transparent=106}
</p>
        
    



<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
    
    
    
<h2 id="font">font</h2>
<p>
    Provides convenience when using formatted output to Worksheet using the 
    <a href="../classes/worksheet.php">Worksheet class</a>. The available 
    keys and values are:
</p>

<p class="CodeCommand">
    &gt;&gt;std.const.font 

    <br />

    style_normal=normal <br />
    style_italic=italic <br />

    <br />

    weight_normal=normal <br />
    weight_bold=bold <br />

    <br />

    underline_none=none <br />
    underline_single=single <br />

    <br />

    &gt;&gt;type(std.const.font.style_italic) <br />
    string
</p>


<p>&nbsp;</p>

<p class="CodeCommand">
    &gt;&gt;ws=std.activeworksheet() <br />

    <br />

    &gt;&gt;ws[1][1]={value="A1", italic=std.const.font.<em>style_italic</em>} <br />
    &gt;&gt;ws[2][1]={value="A2", weight=std.const.font.<strong>weight_bold</strong>} <br />
</p>

<img src="../images/const/font_formattedoutputtoworksheet.png" alt="" />




</body>

</html>
