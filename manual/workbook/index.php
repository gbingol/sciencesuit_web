<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Essentials of Workbook</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        
        ol li
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        
        #selectsection
        {
            border: 1px blue solid;
            border-radius: 20px;
        }
        

    </style>
    
    
    <script src="/jsscripts/siteanalytics.js"></script>
    
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
        <option value="#basics">Basics</option>
        <option value="#createdatastructures">Create Data Structure</option>
        <option value="#tokenizingtext">Tokenizing Text</option>
        <option value="#converttexttocolumns">Convert Text to Columns</option>
        <option value="#importfromworkspace">Import from Workspace</option>
        <option value="#importexportexternalresources">Import/Export Resources</option>
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
    Workbook is very useful to store, format and manipulate data. The workbook can contain several worksheets 
    and each worksheet can contain several <a href="../std/classes/range.php">ranges</a>. 
    Except the deletion of a worksheet, the workbook supports undo/redo for all  operations.
</p>



<p>&nbsp;</p>
<p>&nbsp;</p>





<!--*********************************** BASICS *********************************** -->

<h2 id="basics">1) Basics</h2>

<h3 >A) Saving / Opening:</h3>

<p>
    The data in a workbook can be saved into the project file, namely <em>sproj</em>, 
    using the <a href="../environment/index.php">commit</a> button.
    Once the project is saved, any work committed from the workbook will be saved as well. 
    In order to load the project file, just open it from recents or locate it on the drive.
</p>


<p>&nbsp;</p>

<h3 id="Formatting_Cells">B) Formatting Cells</h3>
<p>
    Data in a worksheet can be formatted and the formatted 
    data can be transferred to MS Excel. The formatting panels are shown below:
</p>
	

<img alt="" src="images/formatcells.png">

<p>Following are the possible formatting options:</p>

<ol>
    <li>
        <b>Font:</b> Family, size, color, style (italic), decoration 
        (underline) and weight (bold).
    </li>
    
    <li>
        <b>Color:</b> Background color
    </li>
    
    <li>
        <b>Alignment:</b> Vertical (bottom, center, top) and 
        horizontal (left, center, right)
    </li>
</ol>
	
<p>As you move the cursor to different cells, the panel will automatically be updated with the format of the active cell. </p>

<p>&nbsp;</p>


<h3 id="Selection_of_Cells">C)Selection of Cells</h3>
<p>
    Once a data range is selected, the dimension of the selection and some essential measures of the data 
    is immediately shown to the user at the status bar. 
</p>

<img alt="" src="images/selectionshowingstatistics.png">

<p>&nbsp;</p>
	
    
<p>
    Depending on dimension of the selection selection (compare Fig A with B) 
    clicking the right button of the mouse will show a menu to allow the user to 
    create variables (such as <a href="../std/classes/vector.php">Vector</a>, 
    <a href="../std/classes/matrix.php">Matrix</a>, 
    <a href="../std/classes/array.php">Array</a>, 
    <a href="../std/classes/range.php">Range</a>) which can be manipulated by command editor. 
    This feature brings a significant convenience when working with data sets 
    (<a href="../workbook/createdatastructures.php">for more details</a>).
</p>

<img alt="" src="images/createdatastructure.png">

<p>&nbsp;</p>
	

<h3 id="Copy_Paste">D) Copy/Paste</h3>
<p>
    Although, within a Worksheet, the selection can be moved/copied to another location using the mouse, 
    the selected data set in the worksheet can also be carried to a different location or to a different worksheet using 
    copy-cut/paste options. Regardless of the dimension of the data, if "<em>Copy/Cut</em>" is selected, 3 different 
    formats are loaded to OS's clipboard:
</p>


<ol>
    <li><em>HTML Code: </em>Which provides convenience to embed in an HTML page.</li>
    
    <li><em>XML Code:</em> When the data is pasted ScienceSuit parses the XML code and 
    formats the data accordingly.
    </li>
    
    <li><em>Text Code:</em> Tab separated format.</li>
</ol>


<p>
    Besides the "regular" <em>copy</em> command, Workbook also supports copying a range as 
    bitmap using "<em>Copy As Image</em>" as shown in the following figure:
</p>


<img alt="" src="images/copy_options.png">


<p>
    Copying a range such as shown (Fig A) in the following figures will produce an image 
    similar to Fig B. It is seen that the format and alignments are preserved.
</p>

<div style="display:table; content:''">
    <div style="float:left; padding-right:20px">
        <img alt="" src="images/copyasimage_range.png" >
        <p style="text-align:center"><b>Fig A</b></p>
    </div>

    <div style="float:left; padding-left:20px">
        <img alt="" src="images/copyasimage.png">
        <p style="text-align:center"><b>Fig B</b></p>
    </div>
</div>
	
<p style="clear:left">&nbsp;</p>

<p>
    Upon using the "<em>copy</em>" command, there are 3 paste options as seen in the following figure:
</p>

<img alt="" src="images/pasteoptions.png">
<ol>
    <li>Directly clicking the <em>Paste</em> button will paste values and format</li>
    
    <li>Selecting "<em>Paste Values</em>" will only paste the values.</li>
    
    <li>
        Selecting "<em>Paste Format</em>" will only paste the format. Therefore, any 
        value entered in the pasted region's cell will have the similar format 
        from where it was copied.
    </li>
</ol>


<p>&nbsp;</p>

<h3 id="Adding_Deleting_Rows_Columns">E) Inserting/Deleting Rows and Columns</h3>

<p>
    By default, a Worksheet contains 1000 rows and 100 columns. In order to 
    insert or delete rows or columns, at least 1 row or 1 column must be selected. 
    Right-clicking with the mouse will show the following menu:
</p>

<img alt="" src="images/adddeleterowscols.png">

<p>
    For example, if <em>n</em> rows are selected, then <em>n</em> rows will 
    be inserted or deleted. Similar rational holds for columns as well.
</p>
    



    
<p>&nbsp;</p>
<p>&nbsp;</p>






<!-- *********************************CREATE DATA STRUCTURES *********************************** -->


<h2 id="createdatastructures">2) Creating Data Structures</h2>

<p>
    Although it is very straightforward to create an empty <a href="../std/classes/matrix.php">Matrix</a>,
    <a href="../std/classes/vector.php">Vector</a> and <a href="../std/classes/range.php">Range</a> using command line most of 
    the time you will need to deal with data already entered to a spreadsheet, say Excel. 
    The following steps will show you how to create a Vector, the rationale 
    is the same for Matrix and Range. 
</p>


<ol>
    <li>Copy and paste the data to a worksheet in ScienceSuit.</li>
	
    <li>
        Select data part of "<em>Group 1</em>" and right-click. You should see the following:<br>
        <img style="vertical-align:top" alt="" src="images/createvector_selectinsciencesuit.jpg" />
    </li>
	
    <li>
        Once you click on "Create Vector Variable" the following input box will 
        popup. Enter the variable name as shown, here the variable is <em>v1</em>.<br />
        <img alt="" src="images/createvector_entervariablename.jpg" />
    </li>

    <li>You are ready to use <em>v1</em> as a vector variable.</li>
</ol>


<p>&nbsp;</p>

<p>
    The steps for creating a <a href="../std/classes/matrix.php">Matrix</a> or a 
    <a href="../std/classes/range.php">Range</a> is exactly the same as creating a 
    <a href="../std/classes/vector.php">Vector</a>. However, needless to say, 
    but for the <em>Matrix</em> data structure both the number of rows and columns selected 
    must be greater than 1 in order to see the "<em>Create Matrix Variable</em>" option.
</p>
    




<p>&nbsp;</p>
<p>&nbsp;</p>
    




<!-- *********************************** TOKENIZING TEXT *********************************** -->


<h2 id="tokenizingtext">3) Tokenizing Text</h2>

<p>
    Every now and then we need to separate (tokenize) data in a text to be able to use the particular data entries separately. 
    However, in a text the data is combined by many delimiters, such as tab, comma etc. 
</p>
<p>
    For example, observe the data that is in a text file (such as Notepad) shown in the following figure. 
    Here, if we would like to have, and most of the time it is indeed useful to have, "<em>student</em>" 
    and "<em>score</em>" in different columns in a worksheet, then we need to tokenize the text. 
    Please also note that, in the following figure the data is mostly separated by tab characters 
    except "A,B" which is separated by comma:
</p>

<img src="images/import_txt_datainnotepad.png" alt=""/>

<p>&nbsp;</p>
<p>
    In cases, where text needs to be tokenized, ScienceSuit will show a wizard as shown below. 
    Each line in the text will be written in a row, such as first line to row 1, second line to row 2 and so on. 
</p>


<img src="images/import_txt_delimitertab.png" alt=""/>
<p>
    <em>"Tokenize the Whole Text Using Delimiter"</em>: The selected delimiter will be used to tokenize the whole text file. 

    If a different delimiter is selected, then the text will be separated based on the newly selected delimiter 
    and the outlook of the grid will also change.
</p>


<p>&nbsp;</p>
<p>
    In the above figure, although the initial outlook looks fine, we observe that "A,B", which is separated by comma, 
    is not separated as the <em>main</em> tokenizer is the <em>"tab"</em>. 
    If we change the main delimiter from <em>tab</em> to <em>comma</em> 
    then we will have the following outlook:
</p>


<img src="images/import_txt_delimitercomma.png"  alt=""/>
<p>
    Note that, although this time "A,B" is separated well, the rest of the text is not well separated at all.
</p>


<p>&nbsp;</p>
<p>
    <em>>Note:</em>For convenience of visualization, 
    when data is separated by tab characters and the main delimiter is different than the 
    <em>tab</em>, the tab characters in the text are replaced by space characters. 
    Otherwise we would have seen the entry, the second row, "1 18" as "118" 
    which would have made it difficult to make any inferences.</p>

<p>&nbsp;</p>
<p>&nbsp;</p>

<p>
    Let's go back to the initial selection and select the delimiter as "<em>tab</em>" 
    and select the cell containing the text "A,B" and then right-click. 
    As shown in the following figure, a menu will pop-up:
</p>

    
   

<img src="images/import_txt_delimitertab_contextmenushown.png" alt=""/>

<p>
    If we select the <em>comma</em> option for this particular cell, 
    then the content of the cell will be separated by using comma and each separated text will 
    be inserted starting as of the selected cell's column's position. 
</p>


<p>The idea can be applied to any cell containing text. Therefore, we have full control over the text. </p>
  

<p style="clear:both">&nbsp;</p>
<p>After separating using <em>comma</em>, we will have the following:</p>

<img src="images/import_txt_fullytokenized.png" alt="" />

<p>&nbsp;</p>
<p>
    Once the <em>OK</em> button is clicked, a new Worksheet will be added with the name "<em>data.txt</em>" 
    as shown in the following figure:
</p>

<img src="images/import_txt_dataimportedtoScienceSuit.png" alt=""/>





<p>&nbsp;</p>
<p>&nbsp;</p>






    
<!-- *********************************** CONVERT TEXT TO COLUMNS *********************************** -->

<h2 id="converttexttocolumns">4) Convert Text to Columns</h2>

<p>
    It is used when you have text in the rows of a column and you wish to separate the text to multiple columns. 
    For example, say, you have the following rows of text in a worksheet:
</p>

<img src="images/text_to_columns_unseparatedtext.png" alt=""/>
<p>
    To be able to separate the above shown text into columns:
</p>



<p><b>1)</b> Select the rows you wish to tokenize and click on the "Text to Columns" button in the Workbook page as shown below:</p>

<img src="images/text_to_columns_selectionmade_buttonclicked.png" alt=""/>
    


<p>&nbsp;</p>

<p><b>2)</b> This will show the following wizard (please see the <a href="#tokenizingtext">Tokenizing Text</a> for more information)</p>

<img src="images/text_to_columns_tokenizetextwizard.png" alt="" />


<p>&nbsp;</p>


<p><b>3)</b> After tokenizing the way you wish, it will be converted to multiple columns, possibly, as shown below:</p>

<img src="images/text_to_columns_datainmultiplecolumnsaftertokenizing.png" alt="" />
<p>
    <em>Note:</em> Initially the selection was tokenized using the <em>comma</em> delimiter 
    and then the cell <em>A3</em> was selected and was tokenized using 
    <em>equal sign</em> delimiter.
</p>


<p>&nbsp;</p>


<p>
    Finally, please note that, before converting the text to multiple columns, 
    if you already have data, say in <em>B1</em>, then a confirmation would be required, as shown below, 
    before overwriting the existing data.
</p>

<img src="images/text_to_column_overwritingdata_confirmationdlg.png" alt=""/>


<p>
    If confirmed, the data in cell <em>B1</em> will be overwritten, otherwise, the operation will be canceled.
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>
    






<!-- *****************************************IMPORT FROM WORKSPACE ************************************ -->
    
<h2 id="importfromworkspace">5) Import Data from Workspace</h2>

<p>
    It might sometimes be needed that after performing some calculations the variable holding the data should be saved or visualized in Workbook 
    or exported to some other file. Importing the variable from workspace to the worksheet also enables analyzing the variable(s) using the apps. 
</p>

<p>
    Although this could have been done using some scripting and the functions provided by std library, 
    it is not convenient to do so every time. Clicking import button shows two options as shown in the following figure:
</p>

<img src="images/import_clickingbutton_optionsshown.png" alt=""/>

<p>&nbsp;</p>
<p>After selecting the "<em>From Workspace</em>", the following dialog is shown:</p>

<img src="images/import_workspace_variablenamedialog.png" alt=""/>

<p>
    The variable name must be <em>relative to the global table</em>. For example consider the following table declaration:
</p>

<p class="CodeCommand">
    &gt;&gt;var1={a=1, b=2, 3}
</p>

<p>
    If you would like to import contents of <em>var1</em>, then the variable name entered should be <em>var1</em>.
</p>

<p>&nbsp;</p>
<p>
    However, in the following case, var2 is a table inside another table, namely tbl:
</p>

<p class="CodeCommand">
    &gt;&gt;tbl={} <br />
    &gt;&gt;tbl.var2={x=1, y=2, z=3}
</p>

<p>if you would like to import contents of <em>var2</em>, then the variable name entered should be <em>tbl.var2</em>.</p>
<p>&nbsp;</p>

<p><em>Notes:</em></p>

<ol>
    <li>
        The variable types that can be imported are Lua tables and userdata. Import tool handles tables and userdata differently.
    </li>

    <li>
        The depth of the import goes only single level. For example, if you have a variable such as 
        <em>level1={a=1, b=2, level2={x=3, y=4}}</em>, the import tool will not import 
        contents of <em>level2</em> and will mark its as a "table".
        
        However, contents of <em>level1</em> will be imported as shown in the following figure:

        <br />
        <br />

        <img src="images/import_workspace_levelofimport.png" alt=""/>

        <br />

        Note that, contents of <em>level2</em> is just shown as "table". 

        If you would like to import contents of <em>level2</em>, then you would have entered the variable name as l<em>evel1.level2</em>
    </li>
</ol>

<p>&nbsp;</p>


<h3>A) <a name="Lua_Tables">Lua Tables</a></h3>

<h4>A.1) Simple tables</h4>

<p>
    By simple tables, it is meant that, tables without any metamethod. For example:
</p>

<p class="CodeCommand">
    &gt;&gt;simple={a=1, b=2, c="a string", 3, 4}
</p>

<p>The table, namely simple, will be imported as shown in the following figure:</p>

<img src="images/import_workspace_simpletable.png" alt="" />

<table>
    <tr>
        <td><em>Column A:</em></td>
        <td>The keys of the table</td>
    </tr>

    <tr>
        <td><em>Column B:</em></td>
        <td>Corresponding values to the keys.</td>
    </tr>

    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
     <tr>
         <td colspan="2">Note that the numbers 3 and 4 in the table, do not have explicit keys, but keys have been assigned to these values automatically.</td>
     </tr>


</table>

<p>&nbsp;</p>

<h4>A.2) Tables with metamethods</h4>
<p>
    When a table have metamethods, there are two types of scenarios that can happen:
</p>
<p>
    &nbsp;</p>

<p>
    <b>Case 1:</b> <em>__tostring() function not implemented:</em>
</p>
<p>
    Consider the following table, namely <em>tbl</em>, implemented as follows:
</p>

<p class="CodeCommand">
    &gt;&gt;tbl={a=1, b=2} <br />
    &gt;&gt;meta={} <br />
    &gt;&gt;setmetatable(tbl, meta) <br />

    <br />

    &gt;&gt;function meta:__name() return "justtable" end
</p>

<p>
    Here, we can see that the table, namely <em>tbl</em>, has a metatable, 
    namely meta and has implemented a single metamethod, namely <em>__name()</em>.
</p>

<p>
    However, since <em>__tostring()</em> metamethod is not implemented, if we attempt to import the table, <em>tbl</em>, 
    an error message will be issued and nothing will be imported.
</p>

 <p>&nbsp;</p>

<p>
    <strong>Case 2:</strong> <em>__tostring() function implemented:</em>
</p>
<p>
    Behind the scenes, the <a href="../std/classes/food.php">Food data structure</a> 
    is actually a Lua table with many metamethods. 
    
    If we create a Food variable, namely <em>food</em>, 
    as shown below (for brevity only 2 metamethods is shown):
</p>

<p class="CodeCommand">
     &gt;&gt;food=std.Food.new{CHO=80, water=20} <br />

    <br />

     &gt;&gt;getmetatable(food) <br />
    __tostring=function <br />
    __name=function
</p>

<p>
    and notice that the <em>__tostring</em> metamethod is implemented. Therefore, if we import the variable
    <em>food</em>, it will be imported as shown in the following figure:
</p>

<img src="images/import_workspace_table_withmetamethod.png" alt=""/>

<p>
    <b>Note:</b> If <em>__tostring()</em> metamethod uses "\n" for 
    to separate the lines then each line will be written on a row as shown in the figure. 
</p>


<p>&nbsp;</p>


<h3 id="Userdata">B) Userdata</h3>
<p>
    Two <a href="../std/index.php">userdata</a> types, namely 
    <em><a href="../std/classes/vector.php">Vector</a></em> and 
    <em><a href="../std/classes/matrix.php">Matrix</a></em> are handled specially. 
    
    For the other userdata types, if the userdata implements 
    <em>__tostring()</em> metamethod, the string returned by the 
    <em>__tostring()</em> will be imported. 
    Otherwise, an error will be issued.
</p>

<p>
   For example, behind the scenes Workbook data structure is actually of type userdata with metamethods implemented. 
   If we create a variable, namely <em>wb</em>, of type Workbook:
</p>

<p class="CodeCommand">
   &gt;&gt;wb=std.activeworkbook() <br />
   &gt;&gt;getmetatable(wb) 
</p>

<p>
    and then import the variable, namely <em>wb</em>, it will be imported as shown in the following figure:
</p>

<img src="images/import_workspace_userdata_workbook.png" alt=""/>





<p>&nbsp;</p>



<h4 id="Vector">B.1) Vector</h4>
<p>
   Only the Vectors with a size less than 100 000 elements can be imported. When the elements of the vector are imported to the workbook, 
   contents of the vector will be written to cells in a row-fashion, for example, 
   first 100 elements to column A, second 100 elements to column B and so on. 
</p>

<p class="CodeCommand">
   &gt;&gt;vector=std.rand(10)
</p>

<img src="images/import_workspace_userdata_vector.png" alt=""/>


<p>&nbsp;</p>

<p>
   Now consider another Vector, again namely <em>vector</em>, which has 325 elements (bigger than the previous):
</p>

<p class="CodeCommand">
   &gt;&gt;vector=std.rand(325)
</p>

<p>
   As seen below (please note that only part of the image is shown and the rows from 10 to 101 is not shown), 
   when imported an extra information is printed on the worksheet. </p>

<img src="images/import_workspace_userdata_largevector.png" alt=""/>




<p>&nbsp;</p>
<p>&nbsp;</p>

<h4 id="Matrix">B.2) Matrix</h4>

<p>
   Only Matrix with number of rows&le;1000 and number of columns&le;100 can be imported. Unlike Vector, there is no special pattern to import a matrix.
</p>

<p class="CodeCommand">
   &gt;&gt;matrix = std.rand(4, 3)
</p>

<p>
   When imported, the variable, namely matrix, will be imported as shown below:
</p>

<img src="images/import_workspace_userdata_matrix.png" alt=""/>



<p>&nbsp;</p>
<p>&nbsp;</p>




<!-- ******************* IMPORT/EXPORT FROM EXTERNAL RESOURCES ************************* -->

<h2 id="importexportexternalresources">6) Import/Export Data from/to External Resources</h2>


<p>
   Data files can come in different formats and it is essential to be able to import to/export from ScienceSuit workbook. 
   The import and export functionality is located under "Workbook" Ribbon Page.
</p>

<img src="images/import_export.png" alt=""/>



<p>&nbsp;</p>


<h3 id="importing_data">A) Importing Data</h3>
<p>
   When data is imported, ScienceSuit will add new worksheet(s) to the active workbook. 
   If there is already an existing worksheet with the same name, 
   the current date will be appended to the imported worksheet's name.
</p>

<p>In order to import a file, on the Workbook ribbon page, click Import button. This will show the following dialog box:</p>

<img src="images/importdialog.png" alt=""/>

<p>As shown in the following image, currently there are 3 types of files that can be imported:</p>

<img src="images/importdialog_filetypes.png" alt=""/>

<p>&nbsp;</p>

<h4>A.1) ScienceSuit Workbook</h4>

<p>
    The difference between opening and importing ScienceSuit workbook is when imported the imported Workbook's worksheets 
    will be added to the current active Workbook. However, when opened, a new workbook will be opened.</p>

<p>
    <em>Tip:</em> If you want to work only with a single workbook at a time, 
    instead of opening a workbook, importing it will be more convenient.
</p>

<p>&nbsp;</p>

<h4>A.2) CSV Files</h4>

<p>
   CSV files are among the portable file formats among different software and operating systems. 
   For example, if you have data in Excel as shown in the following figure (notice the existence of non-ASCII character, &mu;) :</p>

<img src="images/import_CSV_datainExcel.png" alt=""/>

<p>
    If it is exported as UTF-8 supported CSV  file using Excel (filename is <em>Book1.csv</em>), then it can be 
    imported using ScienceSuit as seen in the following figure:
</p>

<img src="images/import_CSV_datainScienceSuit.png" alt=""/>

<p>
    Notice that the Worksheet name is automatically assigned as the filename, <em>Book1.csv</em>.
</p>

<p>&nbsp;</p>

<h4>A.3) Text Files</h4>

<p>
    Similar to CSV files, text files are among the portable file formats among different 
    software and operating systems. For example, data in a text file (such as Notepad) 
    is shown in the following figure 
    (note that the data is mostly separated by tab characters except "A,B" which is separated by comma):
</p>

<img src="images/import_txt_datainnotepad.png" alt=""/>

<p>
    Unlike CSV files, in which separation is well-defined with a single delimiter, 
    in text files, the data can be separated by many delimiters, such as tab, comma etc. 
   Therefore, when you import a text file, initially an import text wizard is 
   shown (please see <a href="#tokenizingtext">tokenizing text</a> for more details). 
   Once the text is tokenized, a new Worksheet will be added with the 
   name "<em>data.txt</em>" as shown in the following figure:
</p>

<img src="images/import_txt_dataimportedtoScienceSuit.png" alt=""/>




<p>&nbsp;</p>






<h3 id="exporting_data">B) Exporting Data</h3>


<p>&nbsp;</p>


<h4>B.1) Text Files</h4>
<p>
   When data is exported from the active worksheet, the relative positions of the cells are preserved; 
   however, the absolute position is not. Therefore, a more compact text file is obtained.
</p>

<p>
   For example, consider the layout in the following worksheet:
</p>


<img src="images/export_txt_layoutinScienceSuit.png" alt=""/>

<p>After exporting <em>Sheet 1</em> as text file and opening it with Notepad, the following layout will be observed:</p>


<img src="images/export_txt_layoutinnotepad.png" alt=""/>

<p>
   Note that, although the relative positions of the cells are preserved, the absolute positions are not. 
   For example, B4 is placed directly at the first column in the notepad.
</p>




<p>&nbsp;</p>



<h4>B.2) CSV Files</h4>
<p>
   Similar to text files, when data is exported as CSV, the relative positions of the cells are preserved; 
   however, the absolute positions are not. 
   Should the absolute positions be preserved, a single data point in a worksheet might have caused large file size when exported. 
</p>


<p>Consider the following layout of cells in ScienceSuit:</p>

<img src="images/export_csv_layoutinScienceSuit.png" alt=""/>


<p>Exporting Sheet 1 as CSV file and then importing the CSV file using Excel, will lead to the following layout:</p>

<img src="images/export_csv_layoutinExcel.png" alt=""/>



<p>&nbsp;</p>
<p>&nbsp;</p>





<div class="RelatedLinks">
    <a href="datatools_removeduplicates.php">Remove Duplicates</a>
    <a href="../std/classes/worksheet.php">Worksheet Class</a>
    <a href="../std/classes/range.php">Range Class</a>
</div>

</body>

</html>
