<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>
        document.createElement("red");
    </script>

    <title>Command Prompt</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    <style>
       
        
        p
        {
            margin-right: 10%;
        }
        
        ul.spaced li
        {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        red
        {
            color: red;
        }
        
        img
        {
            padding-bottom:12px; 
            padding-top:10px;
        }
        
        ol.spaced10px li
        {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        
        
    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
</head>



<body>
    
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>

<h1>Command Prompt</h1>

<p>
    The powerful REPL (read-eval-print loop) feature allows you to do many computations conveniently 
    and is rather useful to isolate and test parts of a larger script. 
    
    <br>
    <br>
    
    In ScienceSuit command prompt goes further and has an integrated scripting window 
    for tasks which require a few lines of coding but which does not necessarily require the use of 
    a fully featured script editor. 
    The built-in scripting is a very handy feature and makes working with command prompt a breeze.
</p>



<p>
    Furthermore, the command prompt offers smart bracketing and to help you visually manage brackets, 
    it highlights the pairing brackets in green and indicates the lone-brackets (non-pairing) as red as shown below:
</p>

<img src="images/bracket_highlighting.png" alt=""/>


<p>&nbsp;</p>
<p>&nbsp;</p>

<h2 id="auto_completion">1) Auto-completion</h2>
<p>
    The intelli-sense feature of command prompt suggests functions or classes and filters the list as the user continues typing. 
</p>

<img src="images/autocompletion_showinghelp.png" alt="" />

<p>
    As seen above once a composite data such as std, followed by a "." or ":" is typed, 
    the contents will be listed and will be shown with the following signs: 
</p>

<ul class="linespaced">
    <li>Tables: <b>{}</b></li>
    <li>function: <b>f</b></li>
    <li>string: <b>s</b></li>
    <li>number: <b>n</b></li>
</ul>

<p>&nbsp;</p>
<p>
    Continuing to type after the auto-complete dialog is shown will filter the contents of the             
    auto-complete dialog to be able to find the exact match. Selecting any of 
    the list item, will show a help if there is one help file associated with the item. 
    Currently, there is help associated with over 200 functions/member functions.
</p>

<p>&nbsp;</p>

<p>
    As seen below, the intelli-sense feature also recognizes the type of the variable and offers the code-completion accordingly.
</p>

<img src="images/autocomplete_intellisense.png" alt="" />







<p>&nbsp;</p>
<p>&nbsp;</p>





<h2 id="history">2) History</h2>

<p>
    At the very first session a history file, namely<em>history.shist</em>, is created and upon properly exiting ScienceSuit the commands 
    are recorded to the history file. You can edit the history file using any text editor.
</p>

<p>&nbsp;</p>

<h3>Walking in history</h3>
<p>
    Using the <b>up</b> and <b>down</b> arrow keys it is possible to walk through the history. 
    For example: if n<sup>th</sup> command is the last executed one,
    then <em>up key</em> will go in the direction of (n-1)<sup>th</sup>, (n-2)<sup>th</sup>,..., (n-k)<sup>th</sup> 
    whereas then the <em>down key</em> will go in the direction of (n-k+1)<sup>th</sup>, (n-k+2)<sup>th</sup>,...,n<sup>th</sup>.
</p>

<p>&nbsp;</p>

<p>
    Although the above-mentioned way is very convenient for accessing the "latest" commands, 
    if you wish to go through many commands, using up and down arrow keys can become cumbersome. 
    However, ScienceSuit provides an easier way to do this: 
    click <b>Ctrl+Up</b> or <b>Ctrl+Down</b> keys. 
    This will show the following list:
</p>
    
<img src="images/history_listbox.png" alt=""/>


<p>
    It is now possible to scroll up and down and thereby locate the command easily. Once the command
    is located, then pressing the enter key will print the selected command to the command prompt and 
    close the drop-down list.
</p>

<p>&nbsp;</p>

<p>
    If you have large number of commands in the history file, then you might not need to see all of them 
    and therefore want to limit the number of entries loaded to drop-down list. To limit the number of 
    entries, just type the number of entries you would like to see before clicking <b>Ctrl+Up</b> or <b>Ctrl+Down</b> key.
    The number must be an integer &ge; 5. In the below-shown example, for demo purposes the number has been chosen as 5.
</p>

<img src="images/history_listbox_maxentries.png" alt=""/>






<p>&nbsp;</p>
<p>&nbsp;</p>







<h2 id="scripting">3) Built-in scripting</h2>
<p>
    More of than not, you might need a few lines to be able solve a problem or define a function which requires a few lines or 
    write a loop to print out some results. Although the latter cases can be done on a single line, the readability and comfort of working
    can easily become unsatisfactory. The command prompt's built-in scripting gives you the comfort of writing multiple lines as you
    would do in a script editor and have the ability to view the results immediately on the command prompt.
    
    <br>
    <br>
    To <mark>switch to script</mark> mode, press <b>Shift+Enter</b>. A script window will be activated as shown-below:
</p>


<img src="images/scriptingwindow.png" alt=""/>

<p>
    As shown in the above-image, besides auto-completion, the built-in scripting supports many operations 
    similar to a script editor. However, please note the following:
</p>

<ol class="spaced10px">
    <li>Unlike command prompt, the contents of the script window are not recorded to the history file.</li>
    <li>Any variable declared as <span class="LuaKeyword">local</span> is not accessible outside the script window.</li>
</ol>


<p>&nbsp;</p>

<p>
    To <mark>execute</mark> the script, press <b>Shift+Enter</b> again. This will execute the script and print any possible 
    output (including any possible errors) to the command prompt as shown below:
</p>

<img src="images/scriptingwindow_showingoutput.png" alt=""/>

<p>
    A couple things to note from the above-shown figure:<br>
    <b>1)</b> The first couple lines of the script is shown as an image on the command prompt to 
    indicate that the output is originated from a script.<br>
    <b>2)</b> The <span class="LuaKeyword">local</span> variable <em>q</em> is not visible to outside of the script window.
</p>

<p>&nbsp;</p>

<p>
    At any time, if you wish to start a <em>new</em> script session, press <b>Shift+Enter</b>. However, if you would like to 
    continue with the <em>previous</em> session, press <b>Ctrl+Enter</b>. At any time, if you wish to close the script 
    window without executing the contents, press <b>Esc</b> key.
</p>

<p>&nbsp;</p>

<p>
    Say, you have started typing a command at the command prompt and realized that you would like to switch to the scripting
    mode. Pressing <b>Shift+Enter</b> will start a <em>new</em> script session with the command on the line. In the following 
    example, we being with writing a <span class="LuaKeyword">for</span> loop on the command prompt 
    but realized that a few more lines is needed.
</p>

<img src="images/scriptingwindow_startnewsession_withacommand.png" alt=""/>


<p>&nbsp;</p>

<p>
    Alternatively, instead of starting a new script session with the command, if you wish to <em>append</em> the command 
    to the previous script session press <b>Ctrl+Enter</b>.
</p>

<p>&nbsp;</p>


<h3>Script history</h3>
<p>
    As mentioned above, the script history is not recorded to the history file and therefore not kept permanently. 
    However, the script history is kept in memory and therefore you can access the history 
    using <b>Ctrl + Up</b> and <b>Ctrl + Down</b> keys. 
    
    <br>
    
    Similar to command prompt history, if n<sup>th</sup> script is the last executed one,
    then <em>Ctrl + Up key</em> will go in the direction of (n-1)<sup>th</sup>, (n-2)<sup>th</sup>,..., (n-k)<sup>th</sup> 
    whereas then the <em>Ctrl + Down key</em> will go in the direction of (n-k+1)<sup>th</sup>, (n-k+2)<sup>th</sup>,...,n<sup>th</sup>.
</p>

<p>&nbsp;</p>

<p>
    Finally, using <b>Ctrl + S</b> it is possible to save script history if you wish to do so. Below it is seen that
    two sessions of script have been executed and the third session is still in edit mode.
</p>

<img src="images/scriptwindow_history.png" alt=""/>

<p>
    If we use <b>Ctrl + S</b>, then a save dialog will appear as shown below:
</p>

<img src="images/scriptwindow_history_savedialog.png" alt=""/>


<p>&nbsp;</p>

<p>
    Once the script history is saved to a text file, it will look similar to the following 
    (note that 3<sup>rd</sup> session is also saved):
</p>

<img src="images/scriptwindow_history_textfile.png" alt=""/>


<p>&nbsp;</p>
<p>&nbsp;</p>




<h2 id="variable_scope">4) Variable scope</h2>

<p>
    The variables created via command-line are directly placed in the global table. 
    Therefore, if a variable is created using the keyword local, that variable will not be accessible anymore.
</p>

<p class="CodeCommand">
    &gt;&gt;a=3 <br />
    &gt;&gt;<span class="LuaKeyword">local</span> b=2 <br />
    &gt;&gt;c=a+b <br />
    [string "c=a+b"]:1: attempt to perform arithmetic on a nil value (global '<span class="auto-style2">b</span>')
</p>

<p>&nbsp;</p>
<p>
    By printing out the variables, we can easily see why the error was thrown.
</p>

<p class="CodeCommand">
    &gt;&gt;a <br />
    3	<br />

    <br />

    &gt;&gt;<red>b</red> <br />
    <span class="LuaKeyword">nil</span>
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>




<div class="RelatedLinks">
    <a href="../scripteditor/index.php">Script Editor</a>
    <a href="../../apps/index.php">Apps</a>
</div>

</body>

</html>
