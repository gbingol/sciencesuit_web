<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>meshgrid</title>

    <link href="../../../css/common.css" rel="stylesheet" type="text/css" />

    <style>

        table.Bordered
        {
            border-collapse:collapse;
            border:solid 1px;
            text-align:center;
        }

        table.Bordered td{
            border:solid 1px;
        }

        table.Bordered td:nth-child(2n+1)
        {
            background-color:lightyellow;
        }

        table.Bordered td:nth-child(2n)
        {
            background-color:lightcyan;
        }


        table
        {
            text-align:right;
        }
        
        
        td
        {
            padding-left:10px;
            padding-right:10px;
        }

    </style>

    
    
    <script src="/jsscripts/siteanalytics.js"></script>

</head>







<body>
<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php"; 
    include $mainmenuloc;
?>


<h1>meshgrid</h1>

<p>Creates 2 dimensional grid coordinates.</p>



<p class="funcsignature">  
    meshgrid(x, y) &rarr; Matrix, Matrix  
</p>

<p>
    where arguments <em>x</em> and <em>y</em> must be of type Vector.
</p>



<p>&nbsp;</p>



<div class="CodeCommand">
    &gt;&gt;x=std.util.tovector{1, 2, 3} <br />
    &gt;&gt;y=std.util.tovector{1, 2, 3, 4, 5}  <br />
    <br />

    &gt;&gt;X,Y=std.meshgrid(x, y) <br />
    &gt;&gt;X   <br />
    <table>
        <tr>
            <td>1</td> 
            <td>2</td> 
            <td>3</td>
        </tr>
        <tr>
            <td>1</td> 
            <td>2</td> 
            <td>3</td>
        </tr>
        <tr>
            <td>1</td> 
            <td>2</td> 
            <td>3</td>
        </tr>
        <tr>
            <td>1</td> 
            <td>2</td> 
            <td>3</td>
        </tr>
        <tr>
            <td>1</td> 
            <td>2</td> 
            <td>3</td>
        </tr>
    </table>

    
    
    <br />

    &gt;&gt;Y <br />
    
    <table>
        <tr>
            <td>1</td> 
            <td>1</td> 
            <td>1</td>
        </tr>
        <tr>
            <td>2</td> 
            <td>2</td> 
            <td>2</td>
        </tr>
        <tr>
            <td>3</td> 
            <td>3</td> 
            <td>3</td>
        </tr>
        <tr>
            <td>4</td> 
            <td>4</td> 
            <td>4</td>
        </tr>
        <tr>
            <td>5</td> 
            <td>5</td> 
            <td>5</td>
        </tr>
    </table>

</div> 
    



<p>&nbsp;</p>




<div style="display: flex; align-items: center;">
    <p>Conceptually, the grid will be similar to: &nbsp;</p>

    <table class="Bordered">
            <tr>
                <td>1,1</td> 
                <td>2,1</td> 
                <td>3,1</td>
            </tr>
            <tr>
                <td>1,2</td> 
                <td>2,2</td> 
                <td>3,2</td>
            </tr>
            <tr>
                <td>1,3</td> 
                <td>2,3</td> 
                <td>3,3</td>
            </tr>
            <tr>
                <td>1,4</td> 
                <td>2,4</td> 
                <td>3,4</td>
            </tr>
            <tr>
                <td>1,5</td> 
                <td>2,5</td> 
                <td>3,5</td>
            </tr>
    </table>
</div>




<p>&nbsp;</p>
<p>&nbsp;</p>
    
    
    


<h3>Example</h3>
<p>
    Find the approximate volume under the surface z=x<sup>2</sup>+y<sup>2</sup> over 
    the region D defined by 1&le;x&le;3 and 1&le;y&le;5. 
</p>
 

<div style="display: flex; align-items: center;">
    <p>The exact solution is: &nbsp;</p>
    <img src="../images/meshgrid_doubleintegral_analyticsol.png" alt=""/>
</div>



<p>Solving using code:</p>

<p class="CodeCommand">
    &gt;&gt;x=std.sequence(1, 3, 0.01) <br />
    &gt;&gt;y=std.sequence(1, 5, 0.01)  <br />
    <br />
    &gt;&gt;X, Y=std.meshgrid(x, y) <br />
    <br />
    &gt;&gt;Z=std.pow(X, 2)+std.pow(Y, 2) <br />
    <br />
    &gt;&gt;std.sum(Z)*0.01*0.01 <br />
    118.295	
</p>

<p>note that the approach in the above code is to sum up the volume of square cuboids whose base area is 0.01x0.01 and height is Z.</p>





<p>&nbsp;</p>
<p>&nbsp;</p>







<div class="RelatedLinks">
    <a href="../classes/matrix.php">Matrix</a>
    <a href="../classes/vector.php">Vector</a>
</div>


</body>

</html>
