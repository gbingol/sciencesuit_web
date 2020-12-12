<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Essentials</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        h2
        {
            color: red;
        }
        
        h3
        {
            color:brown;
        }
        
        
        p
        {
            margin-right: 10%;
        }
        
        
        
        ul.spaced li, ol.spaced li
        {
            padding-top: 6px;
            padding-bottom: 6px;
        }
        
        #selectsection
        {
            border: 1px blue solid;
            border-radius: 20px;
        }
        
        
        @media only screen and (max-width:900px) 
        {
            p
            {
                margin-right: 2%;
            }
       
        }
        
        
    </style>

</head>



<body>
    
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<p>&nbsp;</p>

    
<div>
    <span>Jump to:</span>
    <select id="selectsection" onchange="GotoSection();">
        <option selected disabled>Section</option>
        <option value="#directorylist">Directories</option>
        <option value="#runscript">Run Script</option>
        <option value="#autocomplete">Auto-completion</option>
        <option value="#findreplace">Find/Replace</option>
        <option value="#peekdefinition">Peek Definition</option>
        <option value="#externaleditors">External Editors</option>
    </select>
    
    
    <script>
        function GotoSection()
        {
            var Elem=document.getElementById("selectsection");

            var SelIndex=Elem.selectedIndex;



            location.href=Elem.options[SelIndex].value;
        }
    
    </script>
    
    
</div>
    
<p>&nbsp;</p>
    


<h1>Essentials</h1>  
<p>
    A recommended reading to be able to use the script editor correctly and efficiently.
</p>


<p>&nbsp;</p>


<!-- ***************************** MENUS ************************************ -->

<h2 id="menus">Menus</h2>

<p>
    All functionality in the editor can be controlled using menus and as shown below, 
    there are 4 main menus, all of which are populated, enabled/disabled dynamically.
</p>

<p>&nbsp;</p>



<h3 id="filemenu">File Menu</h3>

<img src="images/menu_file.png" alt=""/>

<p>
    <em>New File:</em> To add a new script file to the editor. This adds a new tab.
</p>

<p>
    <em>Open File:</em> An Open Dialog is shown to be able to select a script file (.lua) from a path.
</p>

<p>
    <em>Save:</em> Saves the currently active script file. 
    If the script file has already been saved or there has no changes been yet made, Save menu will be disabled.
</p>

<p>
    <em>Save All:</em> Saves all open scripts which have been changed.
</p>

<p>
    <em>Recent Files:</em> Automatically populated to keep a list of recently opened scripts. 
    Up to 10 recently opened scripts will be displayed.
</p>

<p><em>Preferences:</em> Shows a dialog where settings can be changed.</p>
<p>&nbsp;</p>




<h3 id="editmenu">Edit Menu</h3>

<img src="images/menu_edit.png" alt="" />

<p>
    <em>Undo:</em> If an action (almost all textual changes) that can be undone has been done, then Undo option will be enabled. <br><br>
    <em>Redo:</em> When an action or series of actions are undone, then they can be redone and Redo menu will be enabled.<br><br>

    <em>Cut:</em> Enabled when there is a selection. Moves the selection to clipboard.<br><br>
    <em>Copy:</em> Enabled when there is a selection. Copies the selection to clipboard.<br><br>
    <em>Paste:</em> Enabled when there is a valid item on clipboard that can be pasted to the script.<br><br>

    <em>Find:</em> Shows a dialog to search for a text in the script.<br><br>
    <em>Replace:</em> Shows a dialog to be able replace an occurrence or all occurrences of phrase with another text.<br><br>
</p>


<h3 id="debugmenu">Debug Menu</h3>

<img src="images/menu_debug.png" alt=""/>

<p>
    <em>Start Without Debugging:</em> Runs the current script and is enabled when there is "something" to run.  
    Please note that the name of the menu is intentionally chosen as in the next or the 
    following major release, Debug facilities are planned to be integrated to the editor.
</p>

<p>
    <em>Compile:</em> Compiles the current script into Lua bytecode. Enabled when the script is available from a path.
</p>

<p>&nbsp;</p>


<h3 id="windowmenu">Window Menu</h3>
<p>
    <em>Show Directory List:</em> To be able to view the directory list pane when it has been manually closed.
</p>








<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- ************************************ Directory List ***************************** -->

<h2 id="directorylist">Directory List</h2>

<p>
    The very first time the editor runs, by default the directory list 
    will only show the root directories, similar to the Fig A, shown below.
</p>

<img src="images/dirlist_rootdirectories_foldercontextmenu.png" alt=""/>

<p>
    &nbsp;</p>
<p>
    However, once the directory which contains scripts are located, by right-clicking on the folder 
    it can be "<em>Set as default</em>", as shown in Fig B. Therefore, the next time the editor starts, 
    the directory which was set as default will be shown as focused. This provides convenient access to the scripts. 
    Renaming or deleting a script is not allowed through script editor. If you wish to do so, "<em>Reveal in Explorer</em>" 
    will show the directory in OS’s default explorer window.
</p>

<p>
    Instead of a directory, right-clicking on a file will show the "<em>Reveal in Explorer</em>" menu, 
    which works exactly the same way for the directories such that it will show the file in OS’s default explorer window.
</p>

<img src="images/dirlist_filecontextmenu_revealinexplorer.png" alt=""/>

<p>&nbsp;</p>

<p>
    <em>Double-clicking on a file</em> will perform an action depending 
    on the extension of the file. Following are possible:
</p>

<ul class="spaced">
    <li><em>Lua files:</em> Will be loaded into the editor.</li>

    <li><em>Executable files:</em> No action will be performed and a warning message will be issued.</li>

    <li><em>Other file types:</em> If there is a default program associated in the OS with the particular extension, 
        it will be opened with the default program.</li>
</ul>







<p>&nbsp;</p>
<p>&nbsp;</p>







<!-- ************************************ Run Scripts ************************ -->

<h2 id="runscript">Running Scripts</h2>

<p>
    Once a script is loaded into the editor, either via <em>File &rarr; Open</em> or double-clicking 
    on the directory list, it is possible to run the script using <em>Debug &rarr; Start Without Debugging</em> menu. 
</p>

<p>&nbsp;</p>

<p>Consider the following simple script:</p>

<img src="images/runningscript_simplescript.png" alt=""/>

<p style="font-size: 0.8em;">
    <em>Note:</em> The "*" sign right next to the script name appears when changes has been made 
    to the script and disappears when the script is saved.
</p>

<p>&nbsp;</p>

<p>
    When the script is run, any output from the script will be shown at the output window which will be floating atop the script:
</p>

<p>&nbsp;</p>

<img src="images/runningscript_outputwindow.png" alt=""/>

<p>Output Window shows: </p>
<ol class="spaced">
    <li>Date (year month day) and the time (hour, minute, seconds),</li>

    <li>If available a warning message,</li>

    <li>If available any output (print statements) from the script.</li>
</ol>

<p style="clear:both;">&nbsp;</p>






<p>&nbsp;</p>
<p>&nbsp;</p>








<!-- ******************************* Auto-Complete **************************** -->

<h2 id="autocomplete">Auto-completion Features</h2>

<p>
    ScienceSuit is equipped a <a href="../../std/index.php">std library</a> with several data structures and 
    a huge number of functions. 
    Remembering function names, parameters and the details of the function is not an easy task. 
    Therefore, an auto-completion dialog along with help (seen below) is designed to make scripting or typing commands considerably more convenient.
</p>


<img src="images/autocomplete_suggestions_helppnorm.png" alt="" />

<p>
    As seen above once a composite data type residing in the global environment, such as <a href="../../std/index.php">std</a>, 
    followed by a "." or ":" is typed, the contents will be listed and will be shown with the following signs:
</p>

<ul>
    <li><em>table:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {} </em> </li>
    <li><em>function:&nbsp;&nbsp;&nbsp; f </em> </li>
    <li><em>string:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; s </em> </li>
    <li><em>number:&nbsp;&nbsp;&nbsp; n </em> </li>
</ul>

<p>
    &nbsp;</p>
<p>
    Continuing to type after the auto-complete dialog is shown will filter the contents of the 
    auto-complete dialog to be able to find the exact match. Selecting any of the list item, 
    will show a help if there is one help file associated with the item. 
    Currently, there is help associated with over 160 functions. 
    The help will give a concise information on the function, its syntax and info on parameters and an example.  
</p>


<p>&nbsp;</p>




<p>
    The help files are bundled in a zip container (under datafiles directory). 
    Should you wish to modify or add any help item, you are allowed to do so as long as HTML 4.0 specifications are used.

    It is also seen that the name of the help file must be relative to the 
    <a href="https://www.lua.org/pil/14.html" target="_blank">global environment</a>, namely _G.</p>

<p>
    For example: <a href="../../std/funcs/accumulate.php">accumulate</a> function resides 
    in <a href="../../std/index.php">std library</a> which is in the global environment. 
    Therefore, the name of the help file must be <a><em>std.accumulate</em></a><em>.html</em>. 
    Similarly, <a href="https://www.lua.org/pil/13.html" target="_blank">setmetatable</a> function is 
    directly under global environment, therefore its name is <em>setmetatable.html</em>.
</p>

<img src="images/autocomplete_contexthelp_screenshothelpfiles.png" alt="" />


<p style="clear:both;">&nbsp;</p>
<p>&nbsp;</p>




<!-- ************************************ Find / Replace ****************************** -->
<h2 id="findreplace">Find/Replace</h2>

<p>
    In order to find occurrence(s) of an identifier either go to <em>Edit &rarr; Find</em> or simply click <em>Ctrl+F</em>. This will show the following dialog:
</p>

<img src="images/dlg_find_replace.png" alt=""/>

<p>
    &nbsp;</p>
<p>
    The button on the very left when clicked will switch the dialog to replace mode. 
    As the search phrase being typed in the textbox, the occurrences will be highlighted 
    and the number of occurrences and the location of the current occurrence will be shown as seen in the below figure. 
</p>
<p>&nbsp;</p>


<img src="images/dlg_find_search_showinghighlights_script.png" alt=""/>

<p><em>Search conditions:</em> </p>
<p style="font-size: 0.8em;">
    <em>C:</em>&nbsp;&nbsp;&nbsp;&nbsp; Match the case  <br />
    <em>W:</em>&nbsp;&nbsp;&nbsp; 	Whole words only  <br />
    <em>RE:</em>&nbsp;&nbsp;&nbsp; Regular expression 
</p>


<p style="clear:both;">&nbsp;</p>

<p>
    Firstly noting that only 4 matching conditions are shown in the image, 
    here, "<em>2 of 6</em>" means that in the script file there are 6 entries matching 
    the current phrase and conditions being found and currently the 2<sup>nd</sup> one 
    (for this case, top=1 and bottom=6) is located 
    (please notice the difference between highlighted phrases and the phrase with the rectangle around). 
    The reason the 2nd phrase was located was that it was closer to the caret's current position from a top-down sense. 
    Using the up and down arrow buttons, the previous or the next occurrence can be chosen.
</p>


<p>&nbsp;</p>

<h3>Replace Mode</h3>

<p>
    As mentioned above, once the very left button is clicked the replace mode is shown. 
    Alternatively, <em>Edit &rarr; Replace</em> or <em>Ctrl+R</em> can be used.
</p>

<img src="images/dlg_replace_withreplacephrase.png" alt=""/>

<p>
    &nbsp;</p>
<p>
    Naturally, to be able to replace an occurrence or multiple occurrences of a text, 
    first it must be found in the document. Therefore, initially, 
    the phrase "retEntry" will be found as explained above. Once at least one 
    occurrence of the search text has been found, 
    then the buttons "<em>Replace Current</em>" and “<em>Replace All</em>” will become active. 
</p>

<p>
    For the above figure, "<em>Replace Current</em>" will replace 
    the 1<sup>st</sup> occurrence of "<em>retEntry</em>" with "<em>Entry</em>" 
    whereas "<em>Replace All</em>" will replace all 6 occurrences of "<em>retEntry</em>" with "<em>Entry</em>".
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>





<!-- ************************************ Peek In ************************** -->

<h2 id="peekdefinition">Peeking in Definition of a Function</h2>
<p>
    This is a very handy feature that allows you to peek in a function's code within the editor itself and therefore see its
    implementation and parameters without needing to open the file that contains the function.
</p>

<p>
    Please note the following to be able to correctly use this feature:
</p>

<ol class="spaced">
    <li>
        A selection must be made and the selected text must be an identifier and must qualify as a function.
    </li>
    
    <li>
        The function must be accessible from the <em>global workspace</em>.<br>
        
        <br>
        
        For example, if you would like to "peek in" to the code of <b>std.sum</b>, 
        be aware that <em>sum</em> itself is not accessible from the global workspace 
        since it is in <b>std</b> library which itself is in global workspace. 
        Therefore, while only selecting <em>sum</em> does not qualify for condition #2, 
        but the selection of <b>std.sum</b> does.
    </li>
    
    <li>
        The function must be programmed in Lua (please note that the Lua engine already embeds 
        functions written in C/C++). <br>
        
        <br>
        
        If the function has been programmed  in C/C++, then a pop-up window will still 
        appear with the text <span style="background-color: #CCCCCC">[=C]</span>.
    </li>
</ol>

<p>
    If the selected text qualifies <b>#1</b> and <b>#2</b>, then the context-menu (shown when right clicked) 
    will show <em>"Peek Definition"</em> menu item.
</p>

<p>&nbsp;</p>

<p>
    In the below figure, it is seen that a script file namely <em>"simpledescriptivestat.lua"</em> has already been opened
    and <em>std.mean</em> function has been selected. Please note that, for your convenience  
    double-clicking on <em>std.mean</em> would have selected it as well.
</p>
    
<img src="images/peekinfunc_funcselected.png" alt=""/>


<p>&nbsp;</p>

<p>
    Right-clicking on <em>std.mean</em> will display the context-menu as shown below.
</p>

<img src="images/peekinfunc_contextmenushown.png" alt=""/>


<p>
    Note that since the selection of <em>std.mean</em> qualified <b>#1</b> and <b>#2</b>, context-menu 
    offered the option of <em>"Peek Definition"</em>.
</p>

<p>&nbsp;</p>

<p>
    Choosing <em>"Peek Definition"</em> will show the "peek-in script window" in-place as shown below:
</p>

<img src="images/peekinfunc_peekinscriptwndshown.png" alt=""/>

<p>&nbsp;</p>

<p>
    Now without having the burden of locating and opening the actual file containing the function, namely <em>std.mean</em>, 
    it is possible to see its full-implementation in-place. To close the "peek-in script window" press Esc key. 
    Finally, please note that, the contents of "peek-in script window" is not editable.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>

<!-- ************************************ External Editors ************************** -->

<h2 id="externaleditors">Simultaneously Working with External Editors</h2>

<p>
    Although the script editor's functionality is well satisfactory to work with Lua scripts, 
    every now and then we might need to use some other editors for functionality that might be missing in 
    ScienceSuit’s built-in editor. For example, 
    <a href="https://code.visualstudio.com/" target="_blank">Visual Studio (VS) Code</a> is a great editor 
    and offers many features. 
</p>

<p>
    However, the downside of working with an external editor is that you will not be able to obtain an 
    output since the <a href="../../std/index.php">std library</a> is absent in these editors. 
    Therefore, simultaneously working with them provides significant convenience in many regards.
</p>

<p>
    Consider the following simple script opened with ScienceSuit editor from desktop:
</p>

<img src="images/workingwithexternaleditors_demoscript_changed.png" alt=""/>

<p>
    <em>Without closing the script file</em>, it will also be opened with VS Code as shown below:
</p>

<img src="images/workingwithexternaleditors_demoscript_VSCode_unchanged.png" alt=""/>

<p>&nbsp;</p>
<p><em>Let's do the following:</em></p>

<p>
    <b>1)</b> Change the variable <em>x</em> to 1, so that now it reads: <span class="LuaKeyword">local</span> x=1 as shown below.
</p>

<img src="images/workingwithexternaleditors_demoscript_VSCode_changed.png" alt=""/>

<p>
    &nbsp;</p>
<p>
    <b>2)</b> <em>Save</em> the file in VS Code. Note that, 
    if the file is not saved after making the changes they will not be visible to ScienceSuit.
</p>

<p>
    <b>3)</b> Go back to the script opened in ScienceSuit and you will see that it has already been changed.
</p>

<img src="images/workingwithexternaleditors_demoscript_changed.png" alt=""/>

<p>
    &nbsp;</p>
<p>
    The above-mentioned steps works both ways, such that any changes (insertion, deletion, etc...) 
    made to the script and <em>saved</em> using ScienceSuit editor will be immediately visible to VS Code. 
    This gives the opportunity to harness the power of both editors.
</p>
    

</body>

</html>
