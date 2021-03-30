<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>fluid range</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>









<body>

<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>fluid.range</h1>
<p>
    Returns the [min, max] range of the particular property of a fluid.
</p>


<p class="funcsignature">
      fluid.range(Fluid=, TableName=, PropertyName=) &rarr; table
</p>

<p>
      where parameter <em>Fluid</em> is the abstract fluid object, <em>TableName</em> is 
      the name of the table where the property resides in and <em>PropertyName</em> is the 
      name of the property that is being queried.
</p>


<p>&nbsp;</p>


<p class="CodeCommand">
      &gt;&gt;fl=std.fluid.new("water", "R") <br>

      <br>

      &gt;&gt;std.fluid.range(fl, fl.OrderedTable, "P") <br>
      0.6113 &emsp; 22090 <br>

      <br>

      &gt;&gt;std.fluid.range(fl, fl.OrderedTable, "vg") <br>
      0.003155 &emsp;   206.14 <br>

      <br>

      &gt;&gt;std.fluid.range(fl, fl.SuperHeatedTable, "P") <br>
      10 &emsp;  60000
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