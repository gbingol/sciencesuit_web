<style>

    .desktopmenubar 
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: green;
        width:100%;
        
      

    }

    .VersionInfo
    {
        float: right; 
        
        margin-top: 12px; 
        
        height: inherit; 
        
        background-color: maroon; 
        color: white;
        
        cursor: pointer;
    }


    li.singlemenu 
    {
        display: inline-block;
    }

    
    li.singlemenu a, .dropbutton 
    {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    

    li.singlemenu a:hover, .dropdownmenu:hover .dropbutton 
    {
        background-color: red;
    }

    
    li.dropdownmenu 
    {
        display: inline-block;
    }

    
    .drop_menuitems 
    {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

    
    .drop_menuitems  a 
    {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    
    .drop_menuitems  a:hover 
    {
        background-color: #f1f1f1
    }

    
    .dropdownmenu:hover .drop_menuitems {
        display: block;
    }

    
    #mobilemenu
    {
        display: none;
    }

    
    .mobilemenubar
    {
        display: none;
    }



    @media only screen and (max-width:900px) 
    {

        #desktopmenu
        {
            display:none;
        }

        #mobilemenu
        {

            display: block;
        }

        .mobilemenubar
        {
            display: block;

            position: relative;
            width: 100%;
            height: 40px;

            background-color: darkgreen;       

        }


        .mobilemenubar span
        {
            vertical-align: middle;

            line-height: 40px;

            font-size: 25px;

            color: whitesmoke;
        }

        
        
        
        .mobileoverlay 
        {
            width: 100%;
            height: 0%;

            position: fixed;
            z-index: 10;
            top: 0;
            left: 0;

            background-color: rgba(0,100,0, 0.9);

            overflow-x: hidden;

            transition: 0.5s;
        }

        
        .overlay-content 
        {
          position: relative;   
          top: 10%;

          margin-top: 10%;

          width: 100%;

          text-align: center; 
        }

        .mobileoverlay a 
        {
          padding: 8px;

          text-decoration: none;

          font-size: 20px;

          color: white;

          display: block;

          transition: 0.3s;
        }

        .mobileoverlay a:hover, .mobileoverlay a:focus 
        {
          color: #f1f1f1;
        }

        .mobileoverlay .closebtn 
        {
            position: fixed;

            font-size: 40px;

            top: 15px;

            right: 35px;

            display: none;
            
            z-index: 100;
        }
        
        
        .mobileoverlay .VersionInfo
        {
            float: none; 
            margin-top: auto; 
            height: auto; 


            cursor: inherit;

            color: wheat;


            position: sticky;

            font-size: 18px;
            font-style: italic;

            top:0px;


            background-color: maroon;
        } 
       
    }


</style>





<div id="desktopmenu" style="position: relative; z-index:100;">
       
    <ul class="desktopmenubar">
        
        <li class="VersionInfo" onclick="javascript:location.href='/downloads'"></li>

        <li class="singlemenu">
            <a class="active" href="/index.php">Home</a> 
        </li>


        <li class="dropdownmenu"> 
            <a class="dropbutton" href="#">Manual</a>

            <div class="drop_menuitems">
                <a href="/manual/apps/index.php">Apps</a>
                <a href="/manual/plotter/index.php">Plotter</a>
                <a href="/manual/workbook/index.php">Workbook</a>
                <a href="/manual/imgproc/index.php">Image Processing</a>
                <a href="/manual/cmdline/index.php">Command Editor</a>
                <a href="/manual/scripteditor/index.php">Script Editor</a>
                <a href="/manual/std/index.php"><em>std</em> Library</a>
                <a href="/manual/environment/index.php">Environment</a>
            </div>

        </li>


        <li class="singlemenu">
             <a href="/downloads">Download</a>
        </li>


        <li class="dropdownmenu">
             <a class="dropbutton" href="#">About</a>

            <div class="drop_menuitems">
                <a href="/about/">Overview</a>
                <a href="/about/roadmap.php">Road Map</a>
                <a href="/about/gb/">Developer</a>
            </div>

        </li>

    </ul>
    
</div>


<script>
    window.addEventListener("load",function()
    {
    
        var VersionInfo="v1.9.2 (Feb 02, 2021)";

        var Elems=document.getElementsByClassName("VersionInfo");

        for(var i=0;i<Elems.length;++i)
            Elems[i].innerHTML=VersionInfo;
    });
   
</script>








<div class="mobilemenubar">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
    <span class="fa fa-home" style="cursor:pointer; float: left; margin-right: 5px;" onclick="GoHome()"></span>
    
    <span style="cursor:pointer; float: right; margin-right: 5px;" onclick="openNav()">&#9776;</span>
    
    <span style="padding-left:25%;"><em>ScienceSuit</em></span>
</div>




<div id="mobilemenu" class="mobileoverlay">
   
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
    <span class="VersionInfo"></span>
    
    <div class="overlay-content">
        <a href="/manual/apps/index.php">Apps</a>
        <a href="/manual/plotter/index.php">Plotter</a>
        <a href="/manual/workbook/index.php">Workbook</a>
        <a href="/manual/imgproc/index.php">Image Processing</a>
        <a href="/manual/scripteditor/index.php">Script Editor</a>
        <a href="/manual/cmdline/index.php">Command Editor</a>
        <a href="/manual/std/index.php"><em>std</em> Library</a>


        <a href="/about/">Overview</a>
        <a href="/about/roadmap.php">Road Map</a>
        <a href="/about/gb/">Developer</a>

    </div>
    
    
    
    
    <script>

      

        function GoHome()
        {
            location.href="/index.php";
        }

        function StopScroll() 
        {
            window.scrollTo(0, 0);
        }


        function openNav() 
        {
            window.addEventListener('scroll', StopScroll);


            document.getElementsByClassName("mobileoverlay")[0].style.height = "100%";
            
            document.getElementsByClassName("closebtn")[0].style.display = "block";
          

        }

        function closeNav() 
        {
 
            window.removeEventListener('scroll', StopScroll);
            
            document.getElementById("mobilemenu").style.height = "0%";
            
            document.getElementsByClassName("closebtn")[0].style.display = "none";
            
        }
        
        
        
    
    </script>
    
    
    

    


</div>