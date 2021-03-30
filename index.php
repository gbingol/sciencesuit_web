<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    
    <title>Welcome to ScienceSuit</title>

    
    
    <script src="jsscripts/siteanalytics.js"></script> 
    
    <script src="jsscripts/struct/circularlist.js"></script>
    <script src="jsscripts/common.js"></script>

    
    
    <link href="css/common.css" rel="stylesheet" type="text/css" />
    <link href="css/contentpanel.css" rel="stylesheet" type="text/css" />

    
    
    
    <style>


        p
        {
            font-size:1.2em;
            
            margin-left:10px;
            
            margin-right: 10%;
        }
        
        p.FirstLetter:first-letter
        {
            font-size: 1.5em;
            
            font-style: italic;
            
            font-weight: bold;
        }
                
        ol.spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;
        }
        
        
        .flex-container 
        {
            display: flex;
            flex-wrap: wrap;
            
        }
        
        .flex-container  div
        {
            padding-left: 10%;
            padding-right: 20%;
            
            background-color: #f1f1f1;
        }
        
      
        
        #mobiledownloadlink
        {
            display: none;
        }
        
        
        
        #mobileheader
        {
            display: none;
            
        }
        
        #desktopheader
        {
            display: block;
            
            font-size: 1.5em;
        }
        
        
        

        
        @media only screen and (max-width:900px) 
        {
            #desktopheader
            {
                display: none;
            }
            
             #mobileheader
            {
                display: block;
                
                font-size: 1.3em;
            }
            
            .flex-container  div
            {
                padding-left: 2%;
                padding-right: 5%;
            }
            
            p
            {
                
                margin-right: 2%;
            }
            
                      
            
            #mobiledownloadlink
            {
                display: block;
            }
            
           
        }
        

        </style>
        
        <script>
                    
            function GetFileList(DirFullPath)
            {
                var retArr="";
                
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                        retArr = this.responseText;
                    
                };
                
                xmlhttp.open("GET", "/phpsnippets/getdircontents.php?dir=" + DirFullPath, false);
                
                xmlhttp.send();
                
                
                
                return retArr.split(";");
            }
            
            
            
            
            var AppList=null;
            var PlotList=null;
            var WorkbookList=null;
            var ImgProcList=null;
            var CmdEditorList=null;
            var ScriptEditorList=null;
            
            window.addEventListener("load", function()
            {
          
                AppList=new CircularList(GetFileList("/mainpage/panelcontents/apps"));          
                AppList.randomizePosition();
                
                
                PlotList=new CircularList(GetFileList("/mainpage/panelcontents/plotter")); 
                
                
                WorkbookList=new CircularList(GetFileList("/mainpage/panelcontents/workbook"));
                
                
                ImgProcList=new CircularList(GetFileList("/mainpage/panelcontents/imgproc"));
                
                
                CmdEditorList=new CircularList(GetFileList("/mainpage/panelcontents/cmdeditor"));
                CmdEditorList.randomizePosition();
                
                
                ScriptEditorList=new CircularList(GetFileList("/mainpage/panelcontents/scripteditor"));
                
            });
            
            
            
            
            
            function OnArrowClicked(List, direction, DivName)
            {
                if(List!=null)
                {
                    if(direction==="l")
                        LoadDoc(List.prev(),DivName);

                    else if(direction==="r")
                        LoadDoc(List.next(),DivName);
                }
            }
            
            
            
            function OnAppArrowClicked(direction)
            {   
                OnArrowClicked(AppList, direction, "VariableAppContent");
            }
            
            
            function OnPlotArrowClicked(direction)
            {
                OnArrowClicked(PlotList, direction, "VariablePlotContent");
            }
            
            
            function OnWorkbookArrowClicked(direction)
            {   
                OnArrowClicked(WorkbookList, direction,"VariableWorkbookContent");
            }
            
            function OnImgProcArrowClicked(direction)
            {   
                OnArrowClicked(ImgProcList, direction,"VariableImgProcContent");
            }
            
            
            function OnCmdEditorArrowClicked(direction)
            {   
                OnArrowClicked(CmdEditorList, direction,"VariableCmdEditorContent");
            }
            
            
            function OnScriptEditorArrowClicked(direction)
            {
                OnArrowClicked(ScriptEditorList, direction,"VariableScriptEditorContent");
            }
      
            
        </script>

</head>
    







<body>


<?php include 'mainmenu.php' ?>

    
    
    
<!-- will only be shown on desktop platforms -->
<p class="FirstLetter" id="desktopheader">
    <em>ScienceSuit</em> is a feature-rich, high-performance computing environment aimed mainly at process engineers. 
</p>



<!-- will only be shown on mobile platforms -->
<p class="FirstLetter" id="mobileheader">
    A feature-rich, high-performance computing environment aimed mainly at process engineers. 
</p>






<p>&nbsp;</p>







<!-- ***************************** Apps *********************************** -->

<div class="ContentPanel">
    
    <div class="ContentHeader" >
        <span onclick="OnAppArrowClicked('l')" class="arrow leftarrow">&nbsp;&laquo;</span>
        
        <span class="ContentTitle" onclick="window.location.href='manual/apps/index.php'" >Apps</span>
        
        <span onclick="OnAppArrowClicked('r')" class="arrow rightarrow">&nbsp;&raquo;</span>
    </div>
    
    
    
    <div id="VariableAppContent" class="VariableContent">
         <p class="FirstLetter">
            Use one of the built-in or build your own to get the job done.
        </p>
        
        <img alt="" src="manual/apps/images/ribbonpage_app.svg">
    </div>
         
</div>










<p>&nbsp;</p>
<p>&nbsp;</p>










<!-- ********************************** Plotter ********************************** -->

<div class="ContentPanel">
    
    <div class="ContentHeader" >
        <span onclick="OnPlotArrowClicked('l')" class="arrow leftarrow">&nbsp;&laquo;</span>
        
        <span class="ContentTitle" onclick="window.location.href='manual/plotter/index.php'">Plotter</span>
        
        <span onclick="OnPlotArrowClicked('r')" class="arrow rightarrow">&nbsp;&raquo;</span>
    </div>
    
    
    
    <div id="VariablePlotContent" class="VariableContent">
        <p class="FirstLetter">
            Plot, interact, format and export charts.
        </p>
        
        <img alt="" src="mainpage/images/plotter_multiplecharts.svg">
    </div>
</div>










<p>&nbsp;</p>
<p>&nbsp;</p>











<!-- ********************************** Workbook ******************************* -->

<div class="ContentPanel">
    
    <div class="ContentHeader">
        <span onclick="OnWorkbookArrowClicked('l')" class="arrow leftarrow">&nbsp;&laquo;</span>
        
        <span class="ContentTitle" onclick="window.location.href='manual/workbook/index.php'">Workbook</span>
        
        <span onclick="OnWorkbookArrowClicked('r')" class="arrow rightarrow">&nbsp;&raquo;</span>
    </div>
    
    
    
    <div id="VariableWorkbookContent" class="VariableContent">
        <p class="FirstLetter">
            Save, load and manipulate data. 
        </p>
        
        <img alt="" src="mainpage/images/workbook_ribbon_ws.svg"> 
    </div>

</div>









<p>&nbsp;</p>
<p>&nbsp;</p>











<!-- ****************************** Image Processing ******************************** -->

<div class="ContentPanel">
    
    <div class="ContentHeader">
        <span onclick="OnImgProcArrowClicked('l')" class="arrow leftarrow">&nbsp;&laquo;</span>
        
        <span class="ContentTitle" onclick="window.location.href='manual/imgproc/index.php'">Image Processing</span>
        
        <span onclick="OnImgProcArrowClicked('r')" class="arrow rightarrow">&nbsp;&raquo;</span>
    </div>
    
    
    <div id="VariableImgProcContent" class="VariableContent">
        <p class="FirstLetter"> 
            Simple yet powerful for numerous analysis.
        </p>
        
        <img alt="" src="mainpage/images/imageprocessing.svg">
    </div>
</div>









<p>&nbsp;</p>
<p>&nbsp;</p>










<!-- ****************************** Command Editor ****************************** -->

<div class="ContentPanel">
    <div class="ContentHeader">
        <span onclick="OnCmdEditorArrowClicked('l')" class="arrow leftarrow">&nbsp;&laquo;</span>
        
        <span class="ContentTitle" onclick="window.location.href='manual/cmdline/index.php'">Command Prompt</span>
        
        <span onclick="OnCmdEditorArrowClicked('r')" class="arrow rightarrow">&nbsp;&raquo;</span>
    </div>
   

    <div id="VariableCmdEditorContent" class="VariableContent">
         <p class="FirstLetter">
            Powerful for so many tasks: Transform, analyze and model. 
        </p>
        
        <img alt="" src="mainpage/images/commandeditor.svg">
    </div>


</div>









<p>&nbsp;</p>
<p>&nbsp;</p>










<!-- ****************************** Script Editor ****************************** -->


<div class="ContentPanel">
    
    <div class="ContentHeader">
        <span onclick="OnScriptEditorArrowClicked('l')" class="arrow leftarrow">&nbsp;&laquo;</span>
        
        <span class="ContentTitle" onclick="window.location.href='manual/scripteditor/index.php'">Script Editor</span>
        
        <span onclick="OnScriptEditorArrowClicked('r')" class="arrow rightarrow">&nbsp;&raquo;</span>
    </div>
    
    
    
    <div id="VariableScriptEditorContent" class="VariableContent">
        <p class="FirstLetter">
            Further and detail your ideas. 
        </p>
        
        <img alt="" src="mainpage/images/scripteditor.svg">
    </div>

</div>









<p>&nbsp;</p>
<p>&nbsp;</p>









<!-- ****************************** std Library  ****************************** -->


<div class="ContentPanel">
    
    <div class="ContentHeader" >
        <span class="ContentTitle" onclick="window.location.href='manual/std/index.php'"><em>std</em> Library</span>
        
        <span class="RightHeaderContent" style="font-size: small;">
            <input id="SearchTextBox" type="text" style="border-radius: 20px;" value="Search..." onmousedown="SearchText_OnMouseDown();" onkeyup="OnSearchTextBoxChange();" >
        </span>
    </div>
    
    
    <div id="VariableStdLibraryContent" class="VariableContent">
        <p class="FirstLetter">
            Quickly and with minimal effort prototype your ideas.
        </p>


        <p class="CodeCommand">
            <span class="LuaComment"><em>--psychrometric properties of humid air </em></span> <br />
            &gt;&gt;std.fluid.psychrometry{P=100, Tdb=25, RH=60} <br />
            P=100 kPa&emsp; Tdb=25 C&emsp; Twb=19.241 C&emsp; 
            Tdp=16.064 C &emsp; H=55.698 kJ/kg da&emsp; RH=60 %&emsp; 
            W=0.012 kg/kg da &emsp; V=0.872 m3/kg da

            <br />
            <br />
            <br />

            <span class="LuaComment"><em>--solving non-linear equations </em></span> <br />
            &gt;&gt;std.brentq {f=<span class="LuaKeyword">function</span>(x) 
                <span class="LuaKeyword">return</span> x^2-5 
                <span class="LuaKeyword">end,</span> a=0, b=4} <br>
            2.23607 &emsp; 7 <br>

            <br />
            <br />

            <em><span class="LuaComment">--statistical tests </span></em> <br />
            &gt;&gt;pval, tbl=std.test_t{x=treatment, y=control, varequal=false} <br>

            <br>

            &gt;&gt;pval <br>
            0.0265149 <br>

            <br>

            &gt;&gt;tbl <br>
            tcritical=2.31089 &emsp; CI_lower=1.22637 &emsp; CI_upper=18.6825 &emsp; df=37 ... 
        </p>
    
    </div>

</div>







<script src="/jsscripts/stdliblist.js"></script>

<script>
    
    var OriginalTextStdLibrary=document.getElementById("VariableStdLibraryContent").innerHTML;
    
    var InitialTextValue=document.getElementById("SearchTextBox").value;
    
    
    function PerformSearch(Text, Library, LibraryName, Dir, UCase)
    {
        var Result = "";
        
        for(var i=0; i < Library.length; ++i)
        {
           var SecondEntry = Library[i][1];
           
           var EntryName =" ";
           
           if(Array.isArray(SecondEntry))
               Result += PerformSearch(Text, SecondEntry, Library[i][0], Dir, UCase);
           
           if(LibraryName !=="")
               EntryName = LibraryName+ "." + Library[i][0].toLowerCase();
           else
               EntryName = Library[i][0].toLowerCase();
           
           EntryName.trim();
           
           
           var EntryURL ="";
           
           if(typeof SecondEntry === 'string' )
               EntryURL = Dir + SecondEntry;
           else
               EntryURL = Dir + EntryName + ".php";
           
          
           //Dont print library name as a link, such as util.php 
           if(EntryName.includes(Text) && Array.isArray(SecondEntry) === false)
           {
               if(UCase === true)
                   EntryName = EntryName.charAt(0).toUpperCase() + EntryName.substr(1);
               
                Result=Result + "<a href="+ EntryURL + ">" + EntryName + "</a><br><br>";
           }
        }
        
        return Result;
    }
    
    
    
    function OnSearchTextBoxChange()
    {
       var CurText=document.getElementById("SearchTextBox").value.toLowerCase();
       
       if(CurText==="")
       {
          document.getElementById("VariableStdLibraryContent").innerHTML=OriginalTextStdLibrary; 
          
          return;
       }
       
       var Result="";
       
       Result += PerformSearch(CurText, StdLibClasses, "", "/manual/std/classes/", true );
       
       Result += PerformSearch(CurText, StdLibFunctions, "" ,"/manual/std/funcs/", false );
       
     
       
       document.getElementById("VariableStdLibraryContent").innerHTML=Result;
    }
    
    
    function SearchText_OnMouseDown()
    {
        var CurText=document.getElementById("SearchTextBox").value;
        
        if(CurText===InitialTextValue)
            document.getElementById("SearchTextBox").value="";
    }
    
</script>








<p>&nbsp;</p>
<p>&nbsp;</p>










<h2>How to start?</h2>
<p class="FirstLetter">
    Understanding the <a href="manual/environment/index.php">environment</a> will give you better insight about the framework.
    Then, depending whether coding is your strong suit or not, you might choose a pathway to take your knowledge further.
</p>


<div class="flex-container">
    
    <div>
    <p style="text-align:center;"><b>Coders</b></p>
    <ol class="spaced">
        <li><a href="manual/scripteditor/index.php">Script Editor</a></li>
        <li><a href="manual/cmdline/index.php">Command Editor</a></li>
        <li><a href="manual/std/index.php">std library</a></li>
        <li><a href="manual/workbook/index.php">Workbook</a></li>
        <li><a href="manual/plotter/index.php">Plotter</a></li>
        <li><a href="manual/apps/index.php">Apps</a></li>

    </ol>
    </div>


    <div>
    <p style="text-align:center;"><b>Clickers</b></p>
    <ol class="spaced">
        <li><a href="manual/workbook/index.php">Workbook</a></li>
        <li><a href="manual/plotter/index.php">Plotter</a></li>
        <li><a href="manual/apps/index.php">Apps</a></li>
        <li><a href="manual/std/index.php">std library</a></li>
        <li><a href="manual/cmdline/index.php">Command Editor</a></li>
        <li><a href="https://www.lua.org/pil/contents.html" target="_blank">Learn Lua</a></li>
    </ol>

    </div>
</div>








<p>&nbsp;</p>
<p>&nbsp;</p>








<div id="mobiledownloadlink" style="font-size:0.8em;">
    Note that ScienceSuit is a desktop application. However, if you wish to download it to your mobile device then 
    click (<a href="downloads/index.php">download</a>).
    
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>







<div>
<img style="vertical-align: middle;" src="mainpage/images/github.png" alt=""/>
<span>
    Contribute or follow on 
    <a href="https://github.com/gbingol" target="_blank">GitHub</a>.
</span>
</div>








<p style="clear: left;">&nbsp;</p>
<p>&nbsp;</p>







<p id="SecureConnection" style="text-align: center"></p>

<script>
    if(window.location.protocol=="http:")
        document.getElementById("SecureConnection").innerHTML="Visit at: https://www.sciencesuit.org";
</script>








<p>&nbsp;</p>
<p>&nbsp;</p>






<img style="float: right;" src="mainpage/email_admin.png" alt=""/>





</body>
</html>
