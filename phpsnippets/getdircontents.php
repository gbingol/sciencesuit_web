<?php

  
    if(isset($_GET["dir"]))
    {

        $DirName=$_GET["dir"];
        
        $DirLoc = $_SERVER["DOCUMENT_ROOT"].$DirName; 


                
        $Files=new FilesystemIterator($DirLoc);

        $RetVal="";

        foreach ($Files as $file) 
        {
           $RetVal=$RetVal.$DirName."/".$Files->getFilename().";";
        }

        
        $RetVal = rtrim($RetVal, ";");

        
        
        echo $RetVal;
    }