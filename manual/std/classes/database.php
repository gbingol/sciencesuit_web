<!DOCTYPE html>
<html>
<head>
    
    
    <title>Database Class</title>

	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <style> 
	
        .auto-style1 {
           
            color: #0000FF;
        }

        .auto-style2 {
            background-color: #FFFF00;
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




<h1>Database Class</h1>



<p>
    It is used for connecting to databases (currently only SQLite) and running SQL queries. 
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>



<h2 class="head_l2"  id="create_connect_query">Create &rarr; Connect &rarr; Query</h2>
<p>
    In order to create a database class, run the following command:
</p>

<p class="CodeCommand">
    &gt;&gt;db=Database.new() <br />
    &gt;&gt;db <br />
    You are not connected to a database.
</p>

<p>
    At this stage, an empty database structure is created; however, in order to run SQL queries, a connection must be opened:
</p>

<p class="CodeCommand">
    &gt;&gt;db:open()
</p>
    
<img src="../images/classes/database_open_noargs.png" alt="" />
    
<p>
    After the selection of a database file, if we query the state of the database object:
</p>

<p class="CodeCommand">
     &gt;&gt;db <br />
    Connected to: C:\Users\gbingol\sciencesuit\_runtime\databases\ThermoFluids.db
</p>
   
<p>&nbsp;</p>

<p>
    Now that, a connection has been established, queries can be run. 
    Let's query, which tables are available in the connected SQLite database:
</p>
<p class="CodeCommand">
    &gt;&gt;db:tables() <br />
    MainTable&emsp; S_R12&emsp; SH_R12&emsp; S_R718&emsp; S_R22&emsp; S_R23&emsp; S_R32&emsp; S_R125&emsp; S_R134A&emsp; S_R143A&emsp; SH_R718&emsp; SH_R22&emsp; SH_R23&emsp; SH_R134A&emsp; S_R717&emsp; SH_R32&emsp; SH_R125&emsp; SH_R143A&emsp; SH_R717	
</p>

<p>&nbsp;</p>
    
    
    
<p>
    Since the available table names are already known, we are ready to query the fields in a table:
</p>
<p class="CodeCommand">
    &gt;&gt;db:fields("S_R12") <br />
    T&emsp; P&emsp; vf&emsp; vg&emsp; hf&emsp; hg&emsp; sf&emsp; sg
</p>


<p>&nbsp;</p>
    
    
<p>Now that we know the table names and fields in a table, we can run different types of SQL queries:</p>
<p class="CodeCommand">
    &gt;&gt;tbl,nrow=db:sql("Select <span class="auto-style1">hf</span> from <span class="auto-style1">S_R12</span> where hf>140") <br />
    &gt;&gt;tbl <br />
    140.068&emsp; 148.076&emsp; 157.085&emsp; 168.059&emsp; 174.92	

</p>









<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    
    
    
<h2 class="head_l2"  id="memberfuncs">Member functions</h2>




<h3 class="head_l3"  id="close">close</h3>

<p class="funcsignature">
    close()
</p>

<p>
    Closes the existing connection to the database.
</p>

<p class="CodeCommand">
    &gt;&gt;db:open()   <br />
    &gt;&gt;db          <br />
    Connected to: C:\Users\gbingol\sciencesuit\_runtime\databases\ThermoFluids.db    <br />
    
    <br />
    
    &gt;&gt;db:close()  <br />
    &gt;&gt;db   <br />
    You are not connected to a database.
</p>
    




<p>&nbsp;</p>
<p>&nbsp;</p>




<h3 class="head_l3"  id="columns">columns</h3>
<p class="funcsignature">
    columns(str=)
</p>

<p>An alias for the member function <em>fields</em>.</p>





<p>&nbsp;</p>
<p>&nbsp;</p>



<h3 class="head_l3"  id="fields">fields</h3>
<p class="funcsignature">
    fields(str=) &rarr; table
</p>

<p>
    Returns a Lua table containing the names of the fields (column) existing in the table specified with 
    the argument <em>str</em>.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>
    



    
<h3 class="head_l3"  id="open">open</h3>
<p class="funcsignature">
    open([path=])
</p>
<p>
    Opens, therefore connects to, the database at the specified <em>path</em>. If the <em>path</em> is not specified, then an 
    Open Dialog is shown to select the database file.
</p>






<p>&nbsp;</p>
<p>&nbsp;</p>
    
    




<h3 class="head_l3"  id="sql">sql</h3>
<p class="funcsignature">
    sql(query=) &rarr; Table, integer, integer
</p>

<p>
    Runs an SQL <em>query. </em>The returned table, a Lua table, contains the result of the query as type <em>string</em> and 
    the two integers are number of rows and columns of the returned Lua table. If the query returns more than 1 columns 
    then the table will be a 2D Lua table, whereas if the query returns a single column, the query will be a 1D Lua table.
</p>


<h4>A query that returns 1D Lua table:</h4>

<p class="CodeCommand">
    &gt;&gt;tbl,nrow, ncol=db:sql("Select <span class="auto-style1">hf</span> from <span class="auto-style1">S_R12</span> where <span class="auto-style1">hf</span>>140") <br />
    &gt;&gt;tbl <br />
    140.068&emsp; 148.076&emsp; 157.085&emsp; 168.059&emsp; 174.92	<br />
    &gt;&gt;nrow <br />
    5 <br />
    &gt;&gt;ncol <br />
    1
</p>
   

<p>&nbsp;</p>

<h4>A query that returns 2D Lua table:</h4>


<p class="CodeCommand">
   &gt;&gt;tbl,nrow, ncol=db:sql("Select <span class="auto-style2">*</span> from S_R12")
    <br />
   &gt;&gt;tbl <br />
    table	table	table	table	table	table	table	table	... <br />	
   &gt;&gt;type(tbl[1])<br />
   table        <br />
   &gt;&gt;nrow     <br />
   42	<br />
   &gt;&gt;ncol     <br />
   8	
</p>





<p>&nbsp;</p>
<p>&nbsp;</p>
    
   



<h3 class="head_l3"  id="tables">tables</h3>
<p class="funcsignature">
    tables() &rarr; table
</p>

<p>
    Returns a Lua table containing the names of the existing tables in the database.
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>



<div class="RelatedLinks">
    <a href="worksheet.php">Worksheet Class</a>
    <a href="range.php">Range Class</a>
</div>

</body>
</html>