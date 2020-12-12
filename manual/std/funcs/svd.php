<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Singular Value Decomposition</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
    .matrix {
        position: relative;
    }

    .matrix {
        position: relative;
    }
    .matrix td {
        padding: 5px;    
        text-align: center;
    }
    .matrix td {
        padding: 5px;    
        text-align: center;
    }
    .auto-style2 {
            color: #0000FF;
    }
    .auto-style3 {
            color: #000000;
    }
    .auto-style4 {
            color: #008000;
    }
    </style>

</head>

<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>svd</h1>

<p>Finds svd decomposition of a given matrix</p>
<p class="funcsignature">
    
    svd(A) &rarr; Matrix, Matrix, Matrix
    
</p>

<p>
    <em>A</em> must be of type matrix, either square or 
rectangular. The function returns 3 matrices.</p>


<p>&nbsp;</p>

<p style="float:left; padding:6px;"><em>Example: </em>Find svd decomposition of matrix A=</p>

<table class="matrix">
    <tr>
        <td>2</td>
        <td>4</td>
    </tr>
    <tr>
        <td>1</td>
        <td>3</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
    </tr>
</table>

<p class="CodeCommand">
    u,s,v=std.svd(A)<br>
    
    &gt;&gt;u <span class="auto-style4">-- unitary matrix (UU<sup>T</sup>=I)</span><br>
    &gt;&gt;s <span class="auto-style4">-- rectangular diagonal matrix (5.46 and 0.36 are singular values)</span><br />
    &gt;&gt;v <span class="auto-style4">-- unitary matrix (VV<sup>T</sup>=I)</span><br>
</p>


<p style="float:left; padding:6px;">The output will be:</p>
<table style="position:relative; top:-10px; left: 0px; width: 80%;">
	<tr>
            <td style="width: 257px">

<p style="float:left; padding:6px;">u=</p>
<table class="matrix">
	<tr>
		<td>0.817416</td>
		<td>0.576048</td>
		<td>0</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>0.576048</td>
		<td>-0.817416</td>
		<td>0</td>
		<td>0</td>
	</tr>
	<tr>
		<td>0</td>
		<td>0</td>
		<td>1</td>
		<td>0</td>
	</tr>
	<tr>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>1</td>
	</tr>
</table>

		</td>
		<td style="width: 246px">

<p style="float:left; padding:6px;">s=</p>
<table class="matrix">
	<tr>
		<td>5.46499</td>
		<td>0</td>
	</tr>
	<tr>
		<td>0</td>
		<td>0.365966</td>
	</tr>
	<tr>
		<td>0</td>
		<td>0</td>
	</tr>
	<tr>
		<td>0</td>
		<td>0</td>
	</tr>
</table>

		</td>
		<td style="width: 246px">

			<p style="float:left; padding:6px;">v=</p>
			<table class="matrix">
				<tr>
					<td>0.404554</td>
					<td>0.914514</td>
				</tr>
				<tr>
					<td>0.914514</td>
					<td>-0.404554</td>
				</tr>
				</table>

		</td>

	</tr>
</table>

<p>&nbsp;</p>

<div class="RelatedLinks">
    <a href="lu.php">lu</a>
    <a href="eig.php">eig</a>
    <a href="qr.php">qr</a>
</div>

</body>

</html>
