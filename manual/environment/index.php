<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Basics of Environment</title>


    <link href="../../css/common.css" rel="stylesheet" type="text/css" />

    <style>
        
        h2{
            color:red;
        }

        h3{
            color:brown;
        }

        ol li{
            padding-top:10px;
            padding-bottom:10px;
        }

        .auto-style9 {
            color: #008000;
        }
        

        .auto-style1 {
            width: 60%;
            text-align:center;
        }

        .auto-style2 {
            font-size: large;
        }

        .LuaKeyword {
            color: #800080;
        }
        .auto-style4 {
            color: #000080;
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 1px;
        }

        .auto-style5 {
            padding: 1px;
            color: #800080;
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
        }
        .auto-style6 {
            border-left-color: #A0A0A0;
            border-right-color: #C0C0C0;
            border-top-color: #A0A0A0;
            border-bottom-color: #C0C0C0;
            padding: 1px;
        }
        
        .auto-style10 {
            text-decoration: underline;
        }

        

        .auto-style8 {
            font-size: small;
        }

        .auto-style4 {
            text-decoration: underline;
        }
        .LuaKeyword {
            color: #0000FF;
        }
        .auto-style2 {
            color: #FF0000;
        }
        .auto-style5 {
            color: #008000;
        }
        .auto-style6 {
            background-color: #FFFF00;
        }
                
        .auto-style10 {
            text-decoration: underline;
        }

        .auto-style11 {
            font-size: small;
        }

        .auto-style12 {
            color: #FF0000;
        }
        
        p.heading1
        {
            font-weight: normal;
           font-size:inherit;
        }
        
        ul.NoDot
        {
            list-style-type: none;
            
            margin-left: -1em;
            
            
        }
        
        ul.NoDot li
        {
            padding-top: 0.8em;
            padding-bottom: 0.8em;
            
            margin-right: 5%;
        }
        
        @media screen and (max-width:900px)
        {
            ul.NoDot
            {
                list-style-type: none;

                margin-left: -1.5em;


            }
            
            ul.NoDot li
            {
                margin-right: 1%;
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


    <!-- ********************************************************************************** -->

<h1>Environment</h1>
<p>
    This section gives concise but essential information on ScienceSuit environment which is essential to 
    correctly use the software. 
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>


<h2 id="Directory_Structure">1) Directory Structure</h2>

<p>
    The directory structure is shown in the following figure: 
</p>

<img src="images/directorystructure.png" alt="" />

<h3>Folders</h3>

<ul class="NoDot">
    <li><b>ScienceSuit: </b>The installation directory.</li>
    <li><b>apps:</b> All apps must be in this folder.</li>
    <li>
        <b>datafiles:</b> Contains databases for fluids, microorganisms. <br />
        The sub-directory <em>scripthelpfiles</em> contains context-based help files. 
    </li>
    
    <li>
        <b>home:</b> User's folder. Any files can be placed in this directory. <br />
        The sub-directory <em>autoload</em> must only contain script files and these files will be loaded 
        according to <a href="#Start_Sequence">startup sequence</a>.
    </li>
    
    <li>
        <b>sys:</b> Belongs to system and contains system files. <em>init.lua</em> and the sub-folder <em>std</em> 
        are essential to run the system correctly. It is highly recommended not to place any scripts in this folder 
        or not to edit any files unless you really know what you are doing.
    </li>
    
    <li>
        <b>temp:</b> Belongs to system and the system uses this folder to create temporary folders/files. 
        <em>Please do not delete this folder</em>. If for some reason any sub-directories remain, 
        these can be deleted as long as there are no instances of ScienceSuit running and you are sure 
        you have already saved everything you wanted (if something goes wrong, the sub-directories 
        can be used to recover your data).
    </li>
</ul>
        

<p>&nbsp;</p>



<h3>Files</h3>

<ul class="NoDot">
    <li>
        <b>History file: </b>The commands run via the command editor are kept in a file, namely 
        <em>history.shist</em>, which is under the <span class="auto-style9">root</span> directory.
    </li>
    
    <li>
        <b>Lock file:</b> When a project is opened, the system creates a <em>lock file</em> (.lock) in the 
        same directory with the same filename as the project file. The lock file is automatically deleted 
        when the project is closed.
    </li>

    <li>
        <b>Log file:</b> When ScienceSuit starts, actions taken by system during start-up are appended to a 
        log file called <em>syslog.log </em>which is under the <span class="auto-style9">home</span> directory.
    </li>
    
    <li>
        <b>Settings file:</b> The <em>global settings</em> are written to / read from the <em>settings.sconfig</em> 
        file which is under the <span class="auto-style9">home</span> directory.
    </li>
</ul>
    


<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="Commit_Save">2) Commit &amp; Save</h2>
<p>
    When you start a new project or open an existing project, a <span class="auto-style10"> 
    <em>snapshot directory</em></span> is created under the <em>temp</em> folder with the 
    same name of the project or as &quot;<em>Unsaved Project</em>&quot; along with the current 
    date appended to the name of the folder. When a project is opened, the snapshot directory 
    contains the unpacked contents of the .<span class="LuaKeyword">sproj</span> file and 
    when a new project is started, it is empty.
</p>

<p>
    Once you <em><b>commit</b></em>, the committed work is written to the snapshot directory rather than 
    directly to the project file. <strong><em>Saving</em></strong> the project is equivalent to re-packing 
    a copy of the snapshot directory as the project file. The generated (re-packed) project file replaces 
    the existing one as you save.&nbsp; The following example gives a clear picture of the process:
</p>

<table class="auto-style1">
    <tr>
        <td>User opens <span class="LuaKeyword">C:\MyProject.sproj</span> file</td>
    </tr>
    <tr>
        <td class="auto-style2">&darr;</td>
    </tr>
    <tr>
        <td>System creates <span class="auto-style4">MyProject --25133209</span> folder under the temp directory and unpacks contents of <span class="auto-style5">MyProject.sproj</span></td>
    </tr>
    <tr>
        <td class="auto-style2">&darr;</td>
    </tr>
    <tr>
        <td style="border-top:1px dashed; border-top-color:red;">User <strong>commits</strong> some work (data is written to <span class="auto-style4">MyProject --25133209</span>)</td>
    </tr>
    <tr>
        <td>&darr;</td>
    </tr>
    <tr>
        <td>User clicks <strong>save</strong></td>
    </tr>
    <tr>
        <td>&darr;</td>
    </tr>
    <tr>
        <td style="border-bottom:1px dashed; border-bottom-color:red;">
            System packs the contents of <span class="auto-style4">MyProject --25133209</span> <br />
            Creates <span class="LuaKeyword">MyProject.sproj</span> under the temp directory <br />
            Replaces <span class="LuaKeyword">C:\MyProject.sproj</span> with <span class="LuaKeyword">temp\MyProject.sproj</span>. <br />
            If replacement is successful, system deletes <span class="LuaKeyword">temp\MyProject.sproj</span> file.</td>
    </tr>
    <tr>
        <td>&darr;</td>
    </tr>
    <tr>
        <td>User closes the project</td>
    </tr>
    <tr>
        <td>&darr;</td>
    </tr>
    <tr>
        <td>System deletes <span class="auto-style4">MyProject --25133209</span> folder</td>
    </tr>
</table>

<p>
    <span class="auto-style11">The sequence in the red-dashed region can be repeated many times during a run.</span>
</p>

<p>&nbsp;</p>


<h3>Why not just save?</h3>


<p>
    You might be wondering why instead of a two step process, only one single step save was not implemented. 
    Among the several some of the advantages of implementing a commit and save mechanism is as follows:
</p>
<ol>
    <li>ScienceSuit is comprised of several modules and commit and save mechanism allows you to save only 
        from the modules you want to include in the final project file. A single save mechanism would have included 
        all actively running modules.
    </li>
    <li>Once committed, the data is never lost and can be recovered even if, for some reason, the system crashes.</li>
    <li>A faster read/save mechanism can be implemented.</li>
</ol>

<p>&nbsp;</p>


<h3>How to commit?</h3>
<p>
    Very simple! For example, in order to commit your work <em>for the workbook</em>, go to Workbook page and 
    click the commit button as shown:
</p>

<img src="images/commitsave_workbook_commitchanges.png" alt="" />

<p>&nbsp;</p>

<p>
    Once a commit has been made, "<em>Unsaved Commits</em>" message will appear at the toolbar. 
    Right-clicking on this part of the toolbar will show the following context menu:
</p>

<img src="images/commitsave_toolbar_showcommitters.png" alt=""/>

<p>&nbsp;</p>
<p>Clicking on the "<em>Show Committers</em>" menu will show the following frame:</p>

<img src="images/commitsave_committersframe.png" alt=""/>


<p>
    Here, you will be able to see from which parts of the framework commits have been made. In this example, 
    only a single commit has been made from Workbook at 19:43:00.
</p>
<p>&nbsp;</p>




<h3>How to save?</h3>
<p>
    In order to save your commits, you can use either the save button at the home ribbon page or the 
    save button that will appear, when there are unsaved commits, at the toolbar as shown below:
</p>

<img src="images/commitsave_saveoptions.png" alt=""/>





<p>&nbsp;</p>
<p>&nbsp;</p>


<h2 id="Open_Existing_or_Start_New_Project">3) Open Existing or Start New Project</h2>

<p>When you start ScienceSuit, the following screen will be displayed:</p>

<img src="images/initialscreen.svg" alt=""/>

<p>
    The screen is conceptually partitioned into three parts: <b>i)</b> The banner, 
    <b>ii)</b> the buttons, <b>iii)</b> Recent Projects.
</p>
<p>
    <span class="auto-style1"><em>The banner:</em></span> Depending on the time of the day a greeting message and 
    the version information is displayed.
</p>

<p><span class="auto-style1"><em>The Buttons:</em></span> New Project and Open Project.</p>

<p>
    <span class="auto-style1"><em>Recent Projects:</em></span> A list of the recent projects. 
    Please note that, before displaying the recent projects, the system checks whether each recent 
    project is still available in its particular location.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<h2 id="Multiple_Instance">4) Concept of Multiple Instance</h2>

<p>
    Until v1.8.6 only a single-instance of ScienceSuit with multiple workbooks could be run. 
    
    However, as of v1.8.6 multiple instances of ScienceSuit can be run at the same time and each instance is 
    considered as a separate project and therefore each instance runs independently. 
</p>


<p class="auto-style8">
    *<b>instance:</b> Running ScienceSuit.exe creates an instance of ScienceSuit. 
    In single-instance environment, when an instance is running, the second was not allowed. 
    However, in multiple instance environment, an instance is created each time ScienceSuit.exe is run.
</p>


<p>&nbsp;</p>



<h3>Independence of Instances</h3>
<ol>
    <li><em>Workbook:</em> Each instance has its own workbook isolated from other instances. 
        For example, an app cannot make selection from other instances' Workbook.</li>

    <li><em>Lua virtual machine:</em> Any variable, function, etc... created in one instance is not available in other instances.</li>

    <li>Anything based on the project itself (settings etc...).</li>
</ol>




<p>&nbsp;</p>


<h3>Shared resources</h3>
<p>The following resources are shared by each instance of ScienceSuit:</p>
<ol>
    <li><em>Global settings:</em> settings.sconfig file is shared by all instances.</li>
    <li><em>History file:</em> Any command-typed and recorded to history file will be read by an 
        instance at the time of instantiation (see <a href="#Start_Sequence">start sequence</a>).
    </li>
    <li><em>Log file:</em> Each instance appends its log to the same log file.</li>
</ol>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h2 id="Reserved_Words">5) Reserved Words</h2>
<p>
    These are the identifiers which you are either prohibited to use or should definitely not use as variable names.
</p>

<p>&nbsp;</p>


<h3>1) Reserved by Lua</h3>
<p>

    The <a href="https://www.lua.org/manual/5.3/manual.html" target="_blank">identifiers reserved by Lua</a> 
    (<span class="auto-style8">please see section 3.1</span>) 
    <span class="auto-style4"><em>cannot</em></span> be used as variable names. 
    The internal Lua engine will issue an error if you do so.

    The reserved identifiers are (<span class="auto-style8">from the </span> 
    <a href="https://www.lua.org/manual/5.3/manual.html" target="_blank"><span class="auto-style8">Lua manual</span></a>): 
</p>

<p style="color:blue;">
    and&nbsp;&nbsp;&nbsp; break&nbsp;&nbsp;&nbsp; do&nbsp;&nbsp;&nbsp; else&nbsp;&nbsp;&nbsp; elseif&nbsp;&nbsp;&nbsp; end&nbsp;&nbsp;&nbsp;
    false&nbsp;&nbsp;&nbsp; for&nbsp;&nbsp;&nbsp; function&nbsp;&nbsp;&nbsp; goto&nbsp;&nbsp;&nbsp; if&nbsp;&nbsp;&nbsp; in <br />
    local&nbsp;&nbsp;&nbsp; nil&nbsp;&nbsp;&nbsp; not&nbsp;&nbsp;&nbsp; or&nbsp;&nbsp;&nbsp; repeat&nbsp;&nbsp;&nbsp; return&nbsp;&nbsp;&nbsp;
    then&nbsp;&nbsp;&nbsp; true&nbsp;&nbsp;&nbsp; until&nbsp;&nbsp;&nbsp; while <br />
</p>

<p>&nbsp;</p>

<p>
    For example, in the following we attempt to use <span class="LuaKeyword">and</span> 
    and <span class="LuaKeyword">if</span> as variable names:
</p>

<p class="CodeCommand">
    &gt;&gt;and=3 <br />
    <span style="color: red;">[string " and=3"]:1: unexpected symbol near 'and'</span> <br />

    <br />

    &gt;&gt;if=2 <br />
    <span style="color: red;">[string " if=2"]:1: unexpected symbol near 'if'</span>
</p>

<p>
    It is clearly seen that, Lua will issue an error should we attempt to use reserved words as variable names.
</p>



<p>&nbsp;</p>


<h3>2) Reserved by ScienceSuit</h3>
<p>
    The identifiers used by ScienceSuit system and <em>should not</em> be used as variable names. These are: std, iup and SYSTEM
</p>



<p class="CodeCommand">
    &gt;&gt;t={1,2,3} <br />
    &gt;&gt;std.sum(t) <br />
    6	<br />

    <br />

    <span class="auto-style5">--Now we are assigning a value to <em>std</em></span> <br />

    &gt;&gt;<span class="auto-style6">std=</span>"Assigning a string value" <br />

    <br />

    <span class="auto-style5">--calling std.sum again</span> <br />

    &gt;&gt;std.sum(t) <br />
    <span class="auto-style12">[string "return std.sum(t)"]:1: attempt to call a nil value (field 'sum')</span>
</p>

<p>&nbsp;</p>
<p>
    Please note that, unlike Lua's reserved names, assigning a value to <em>std</em> is accepted by Lua as expected. However, assigning a value to <em>std</em> has overridden the <em>std library</em> and as of this point <em>std library</em>
    is not available anymore. Therefore, calling <em>std.sum</em> caused an error.
</p>

<p>&nbsp;</p>
<p>
    Considering the reserved words by Lua (1) and ScienceSuit (2), 
    <span class="auto-style4"><em>a simple guideline when declaring variables</em></span> is:
</p>

<ol>
        
    <li>
        When scripting, always declare variables as <span class="LuaKeyword">local</span>. This will prevent hard-to-debug problems. <br />

        <br />
        
        For example, if you accidentally declared a variable as <span class="auto-style8">std=1</span> in any script file, 
        this declaration will affect the whole system as the std library will become unavailable. 
        However, if you declare <span class="auto-style8"><span class="LuaKeyword">local</span> std=1</span>, 
        this will only affect the file it has been declared in. 
        
        <br>
        <br>
        
        However, as shown below, if you declare  <em>std</em> library as <b>const</b> 
        at the beginning of the script file  then the above-mentioned problem is considerably alleviated:
        
        <br>
        <br>
        
        <span style="background-color: #C0C0C0"><span class="LuaKeyword">local</span> std &lt;const&gt; =std</span> <br>
        
        <br>

   
    </li>


    <li>Note that, all variables declared in Command Editor are, by default, <strong>not local</strong>. Therefore, it is available system-wide.</ol>

<p>&nbsp;</p>
<p>&nbsp;</p>


 <!--  *************************************************************************************** -->

<h2 id="Start_Sequence">6) Start Sequence</h2>

<p>
    The following sequence is followed to initiliaze an <a href="#Multiple_Instance">instance</a> of ScienceSuit:
</p>

<p class="heading1">
    Welcome screen is shown, if <em>settings.sconfig</em> file does not exist, it is created.
</p>
    
<p class="heading1">
    Main frame, <a href="../workbook/index.php">Workbook</a> and 
    <a href="../cmdline/index.php">Command Line</a> are loaded.
</p>
    <p class="heading2">
        Command history file (<em>history.shist</em>) is loaded or created.
    </p>


<p class="heading1">
    Default <a href="http://www.lua.org/" target="_blank">Lua</a> libraries are loaded.
</p>


<p class="heading1">Lua engine is prepared</p>
    
    <p class="heading2">
        <em>std</em> library is created.
    </p>
    
    <p class="heading2">
        <em>SYSTEM</em> library is created.
    </p>

    <p class="heading2">
        The functions and classes (such as <a href="../std/classes/vector.php">Vector</a>, 
        <a href="../std/classes/matrix.php">Matrix</a>...) programmed in C++ are loaded.
    </p>


<p class="heading1">
    <em>init.lua</em> file located under <span class="auto-style1"> <em>sys</em></span> directory is loaded.
</p>


<p class="heading1">
    Scripts in <span class="auto-style1"> <em>sys/std</em></span> and all its subfolders are recursively loaded.
</p>

<p class="heading1">
    Scripts in <span class="auto-style1"> <em>apps</em></span> folder are loaded.
</p>

<p class="heading1">
    <a href="https://www.tecgraf.puc-rio.br/iup/" target="_blank">iup</a> library is loaded.
</p>

<p class="heading1">
    <em>init.lua</em> located under <span class="auto-style1"> <em>home</em></span> folder is loaded.
</p>

<p class="heading1">
    Scripts under <span class="auto-style1"> <em>home/autoload</em></span> are loaded.
</p>


<p>&nbsp;</p>

    
</body>

</html>
