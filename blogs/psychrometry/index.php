<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>Applications of Psychrometry</title>

<link href="../../../css/common.css" rel="stylesheet">

    <style>

        table td{
            text-align: center;
        }

        h2{
            color:red;
        }

        h3{
            color:darkblue;
        }

    </style>


  <script>

    function LoadDoc(url)
    {
        var xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function()
        {
            if(this.readyState==4 && this.status==200)
                document.getElementById("content").innerHTML = this.responseText;

        };

        xhttp.open("GET",url, true);

        xhttp.send();
    }

 </script>

</head>



<body>


<?php
    $mainmenuloc = $_SERVER["DOCUMENT_ROOT"]."/mainmenu.php";
    include $mainmenuloc;
?>


    <H1>Applications of Psychrometry</H1>

    <table>
        <tr>
            <td>

                <a href="javascript:LoadDoc('mixingofairstreams.html')">Mixing of Air Streams</a>
            </td>
    </table>


    <div id="content">
    </div>


</body>
</html>
