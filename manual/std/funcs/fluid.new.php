<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>New Fluid</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>fluid.new</h1>
<p>
    Creates a new abstract fluid which can then be passed to other functions as parameter in the fluid library.
</p>

<p class="funcsignature">
      fluid.new(Name=, Type=) &rarr; table
</p>

<p>
      where parameter <em>Name</em> must be the name of a fluid that exists in the datafiles/Fluids.db database, 
      and parameter <em>Type</em> must be either "R" for refrigerants, or "H" for heat transfer.
</p>

<p>&nbsp;</p>

<p class="CodeCommand">
      &gt;&gt;fl = std.fluid.new("water", "R") <br>

      <br>

      &gt;&gt;type(fl) <br>
      table <br>

      <br>

      &gt;&gt;fl <br>
      SuperHeatedTable = SH_R718  <span class="LuaComment">--Name of the superheated table</span><br>
      OrderedTable = S_R718  <span class="LuaComment">--Name of the ordered table (saturated table)</span><br>
      Database = Database <span class="LuaComment">--The database from which the data will be pulled out</span><br>
      FluidName = water   <span class="LuaComment">--For internal use</span><br>
      Type = Fluid  <span class="LuaComment">--For internal use</span><br>

      <br>


      &gt;&gt;fl.Database <br>
      Connected to: C:\...\sciencesuit\64Bit\datafiles\Fluids.db
</p>




<p>&nbsp;</p>
<p>&nbsp;</p>


<div class="RelatedLinks">
      <a href="fluid.psychrometry.php">std.fluid.psychrometry</a>
      <a href="fluid.refrigerant.php">std.fluid.refrigerant</a>
      <a href="fluid.heattransfer.php">std.fluid.heattransfer</a>
</div>


</body>

</html>