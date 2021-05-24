<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Import/Export</title>

    <link href="../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style>
        
        ol li
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        div.potpourriinfo
        {
            border: 2px dashed maroon;
            margin-right: 30%;
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





<script src="/jsscripts/createoutline.js"></script>
<script>
    window.addEventListener("load", MakeElement_Details_FromOutline.bind(null, ["H2", "H3", "H4"]), false);
</script>
    






<h1>Import / Export</h1>

    
<h2 class="head_l2" id="importfromworkspace">Import from Workspace</h2>

<p>
    It might sometimes be needed that after performing some calculations the variable holding the data 
    should be saved or visualized in Workbook or exported to some other file. 
    Importing the variable from workspace to the worksheet also enables analyzing the variable(s) using the apps. 
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

<p>
    if you would like to import contents of <em>var2</em>, then the variable name entered should be <em>tbl.var2</em>.
</p>


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
<p>&nbsp;</p>









<h3 class="head_l3" id="Lua_Tables">Lua Tables</h3>

<h4 class="head_l4">Simple tables</h4>

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
         <td colspan="2">
         Note that the numbers 3 and 4 in the table, do not have explicit keys, 
         but keys have been assigned to these values automatically.
         </td>
     </tr>


</table>






<p>&nbsp;</p>
<p>&nbsp;</p>





<h4 class="head_l4" id="tblwithmetamethods">Tables with metamethods</h4>
<p>
    When a table have metamethods, there are two types of scenarios that can happen:
</p>



<p>&nbsp;</p>


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
<p>&nbsp;</p>







<h3 class="head_l3" id="Userdata">Userdata</h3>
<p>
    Three <a href="../std/index.php">userdata</a> types, namely 
    <em><a href="../std/classes/vector.php">Vector</a></em>, 
    <em><a href="../std/classes/matrix.php">Matrix</a></em> and 
    <em><a href="../std/classes/dataframe.php">DataFrame</a></em>
    are handled specially. 
    
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
<p>&nbsp;</p>




<h4 class="head_l4" id="Vector">Vector</h4>
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






<h4 class="head_l4" id="Matrix">Matrix</h4>

<p>
   Only Matrix with number of rows&le;1000 and number of columns&le;100 can be imported. Unlike Vector, 
   there is no special pattern to import a matrix.
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






<h4 class="head_l4" id="dataframe">DataFrame</h4>
<p>
    The following command let's us choose a CSV file and then reads it into a dataframe.
</p>
<p class="CodeCommand">
    &gt;&gt;df = std.read_csv{file=""}
</p>

<p>&nbsp;</p>

<p>
    When imported:
</p>

<img src="images/import_workspace_userdata_dataframe.png" alt="">




<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>













<!-- ******************* IMPORT FROM EXTERNAL RESOURCES ************************* -->

<h2 class="head_l2" id="importexternalresources">Import Data from External Resources</h2>


<p>
   Data files can come in different formats and it is essential to be able to import to ScienceSuit workbook. 
   The import and export functionality is located under "Workbook" Ribbon Page.
</p>

<img src="images/import_export.png" alt=""/>



<p>&nbsp;</p>


<p>
   When data is imported, ScienceSuit will add new worksheet(s) to the active workbook. 
   If there is already an existing worksheet with the same name, 
   the current date will be appended to the imported worksheet's name.
</p>

<p>
    In order to import a file, on the Workbook ribbon page, click Import button. 
    This will show the following dialog box:
</p>

<img src="images/importdialog.png" alt=""/>

<p>As shown in the following image, currently there are 3 types of files that can be imported:</p>

<img src="images/importdialog_filetypes.png" alt=""/>






<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 class="head_l3" id="import_sciencesuitwb">ScienceSuit Workbook</h3>

<p>
    The difference between opening and importing ScienceSuit workbook is when imported the imported Workbook's worksheets 
    will be added to the current active Workbook. However, when opened, a new workbook will be opened.</p>

<p>
    <em>Tip:</em> If you want to work only with a single workbook at a time, 
    instead of opening a workbook, importing it will be more convenient.
</p>









<p>&nbsp;</p>
<p>&nbsp;</p>






<h3 class="head_l3" id="import_csvfiles">CSV Files</h3>

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
<p>&nbsp;</p>







<h3 class="head_l3" id="import_textfiles">Text Files</h3>

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
   shown (please see <a href="tokenize_converttext.php">tokenizing text</a> for more details). 
   Once the text is tokenized, a new Worksheet will be added with the 
   name "<em>data.txt</em>" as shown in the following figure:
</p>

<img src="images/import_txt_dataimportedtoScienceSuit.png" alt=""/>













<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>














<h2 class="head_l2" id="exportexternalresources">Export Data</h2>


<p>
   Data files can come in different formats and it might be essential to be able to export data from ScienceSuit workbook. 
   The import and export functionality is located under "Workbook" Ribbon Page.
</p>

<img src="images/import_export.png" alt=""/>

<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3" id="export_textfiles">Text Files</h3>
<p>
   When data is exported from the active worksheet, the relative positions of the cells are preserved; 
   however, the absolute position is not. Therefore, a more compact text file is obtained.
</p>

<p>
   For example, consider the layout in the following worksheet:
</p>


<img src="images/export_txt_layoutinScienceSuit.png" alt=""/>

<p>
    After exporting <em>Sheet 1</em> as text file and opening it with Notepad, 
    the following layout will be observed:
</p>


<img src="images/export_txt_layoutinnotepad.png" alt=""/>

<p>
   Note that, although the relative positions of the cells are preserved, the absolute positions are not. 
   For example, B4 is placed directly at the first column in the notepad.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 class="head_l3" id="export_csvfiles">CSV Files</h3>
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



<h2 class="head_l2" id="export_excel_oleautomation">Export to Excel</h2>
<p>
    Either the current worksheet or the whole ScienceSuit workbook can be exported to 
    either a new MS Excel workbook or to an existing workbook. 
</p>


<div class="potpourriinfo">
    <p>
        <span style="color: red; font-size: x-large;">&#9432;</span> 
        A few things to note to use this functionality correctly:
     </p>
    <ol>
        <li>
            Relies on 
            <a href="https://en.wikipedia.org/wiki/OLE_Automation" target="_blank">OLE Automation</a>; 
            therefore, MS Excel must already have been properly installed.
        </li>
        <li>
            Exporting to a <em>new</em> MS Excel workbook should always work as expected.   
        </li>

        <li>
            Exporting to an <em>existing</em> MS Excel workbook requires understanding of the following info for troubleshooting purposes. 

            <br><br>
            
            The export process either creates a new or connects to an existing instance of MS Excel 
            (<a href="https://answers.microsoft.com/en-us/msoffice/forum/msoffice_excel-mso_win10-mso_2016/
            what-are-excel-instances-and-why-is-this-important/20c39a6f-0857-4033-b713-18bf72e91d8b#:~:
            text=Each%20iteration%20of%20Excel.exe,running%20in%20the%20same%20instance." target="_blank">more info on Excel instances</a>).
            
            If an instance is created by the export functionality, MS Excel itself might create a separate 
            instance when you open a new document either through Explorer or via Excel itself. 

            <br><br>

            To summarize: separate instances do not communicate with each other and 
            therefore if ScienceSuit has already created an instance instead of 
            connecting to an existing one, it will not be able to export to an existing 
            MS Excel workbook running on a separate instance of MS Excel.
        </li>
    </ol>
</div>


<p>&nbsp;</p>

<p>
    The menu to export to MS Excel is under the 
    Workbook ribbon page and shown below:
</p>

<img src="images/export_xls_ribbonbutton.png" alt="">

<p>
    Once clicked, a dialog similar to the following will be shown:
</p>

<img src="images/export_xls_dialogshown.png" alt="">

<p>In the above-shown dialog, the following might change:</p>

<ol class="linespaced">
    <li>
        The name of the active worksheet will be displayed, 
        which currently is <em>"microwave heating"</em>. 
    </li>

    <li>
        <em>Before</em> clicking on the "Export to Excel" ribbon button, 
        <em>"C:\Users\gbing\Desktop\r2 trials.xlsx"</em> 
        was already open (therefore an instance of MS Excel was already running) 
        and therefore listed.
    </li>

</ol>

<p>&nbsp;</p>

<p>
    The rest of the process is fairly self-explanatory, such that,
    selecting the the active worksheet and "Existing Workbook" will 
    export the active worksheet to the selected MS Excel workbook, 
    or among the possible options another one would be to export the whole ScienceSuit workbook 
    to a new MS Excel workbook.
</p>







<p>&nbsp;</p>
<p>&nbsp;</p>






<div class="RelatedLinks">
    <a href="basics.php">Basics</a>
    <a href="createdatastructures.php">Create Data Structures</a>
    <a href="tokenize_converttext.php">Tokenize / Convert Text to Columns</a>
    <a href="datatools_removeduplicates.php">Remove Duplicates</a>
</div>

</body>

</html>
