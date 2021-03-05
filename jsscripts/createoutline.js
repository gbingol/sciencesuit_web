function MakeElement_Select_OutlineFromTagName(TagName)
{
       
    var MainBody = document.body;

    var H1Node=document.getElementsByTagName("h1")[0];
    
    //Create and append select list
    var selectList = document.createElement("select");
    selectList.style.setProperty("border", "1px blue solid");
    selectList.style.setProperty("border-radius","20px");

    selectList.style.setProperty("margin-top", "2em");

    selectList.id = "selectsection";

    selectList.addEventListener("change", function()
    {
        var Elem=document.getElementById("selectsection");

        var SelIndex=Elem.selectedIndex;

        location.href=Elem.options[SelIndex].value;
    });

    MainBody.insertBefore(selectList, H1Node);


    var SectionOption = document.createElement("option");
    SectionOption.text = "Section";
    SectionOption.selected = true;
    SectionOption.disabled=true;

   selectList.appendChild(SectionOption);
    
    
    var NextSibling=H1Node.nextElementSibling;
    
    while(NextSibling)
    {
       if(NextSibling.nodeName.toUpperCase() !== TagName.toUpperCase())
       {
           NextSibling = NextSibling.nextElementSibling;
           
           continue;
       }

        var option = document.createElement("option");

        var ElemId = NextSibling.id;

        if(ElemId!=="")
        {
            option.value = "#"+ ElemId;
            option.text = NextSibling.innerHTML;

            selectList.appendChild(option);
        }
        
        
        NextSibling = NextSibling.nextElementSibling;
    }



    var Label=document.createElement("span");
    Label.innerHTML="<em>Jump to:</em> ";

    MainBody.insertBefore(Label, selectList);
}






function MakeElement_Details_FromOutline(TagNames)
{
    var MainBody = document.body;

    var H1Node=document.getElementsByTagName("h1")[0];
    
    /*
        Paragraph element right after outline <details> </details>
     */
    var PElement = null;

    
    //Create and append select list
    var ElemDetails = document.createElement("details");
    
    ElemDetails.addEventListener("toggle",function(e)
    {
        if(ElemDetails.hasAttribute("open"))
        {
            ElemSummary.innerHTML="<em>Close outline</em>";
            
            //leave a clear separation with the next following element by inserting an empty paragraph after </details>

            PElement = document.createElement("p");
            PElement.innerHTML="&nbsp;";

            ElemDetails.parentNode.insertBefore(PElement, ElemDetails.nextSibling);
        }
        else
        {
            ElemSummary.innerHTML="<em>Show outline</em>";
            
            ElemDetails.parentNode.removeChild(PElement);
        }
    });


   
    
    
    ElemDetails.style.setProperty("margin-bottom", "20px");
    ElemDetails.style.setProperty("margin-top", "10px");
    ElemDetails.style.setProperty("background-color", "lightcyan");

    var  ScreenWidth= screen.width;

    if(ScreenWidth<=900)
        ElemDetails.style.setProperty("width", "auto");
    else
        ElemDetails.style.setProperty("width", "fit-content");

    MainBody.insertBefore(ElemDetails, H1Node);


    var ElemSummary = document.createElement("summary");
    ElemSummary.innerHTML="<em>Show outline</em>";

   ElemDetails.appendChild(ElemSummary);


   ElemSummary.addEventListener("mouseover", function(e)
   {
       e.target.style.cursor="pointer";
   });
   
   
   var Occurences= new Array(TagNames.length);
   Occurences.fill(0);

    var NextSibling=H1Node.nextElementSibling;
    
    while(NextSibling)
    {
        
        
                
        var ElemId = NextSibling.id;
        
        if(ElemId.trim() === "")
        {
            NextSibling = NextSibling.nextElementSibling;
            
            continue;
        }
        
        
        
        var NodeName = NextSibling.nodeName.toUpperCase();
        
        const CurIndex = TagNames.findIndex(element => element.toUpperCase() === NodeName);
        
        
        if(CurIndex === -1)
        {
            NextSibling = NextSibling.nextElementSibling;
            
            continue;
        }
         
        
        Occurences[CurIndex] = Occurences[CurIndex] + 1;
        
        
        
        var HeadingNumber = " " + Occurences[CurIndex];
        
        var MarginLeft = "" + (CurIndex*20)+"px";

        
        var anchor = document.createElement("a");

        anchor.href = "#"+ ElemId;
        anchor.innerHTML = HeadingNumber + ". " + NextSibling.innerHTML;
        anchor.style.setProperty("margin-left", MarginLeft);
        
        
        var CanAddEmptyParagraph = CurIndex === 0; //new <h2> so leave a empty paragraph
        
        /*
            If the page is not following a hierarchy, 
            say we hit <h3> before <h2> -> Occurences[0]=0 whereas Occurences[1]>0
            still leave a gap by adding empty paragraph
         */
        CanAddEmptyParagraph = CanAddEmptyParagraph || (CurIndex > 0 && Occurences[CurIndex - 1] === 0);
        
        if( CanAddEmptyParagraph )
        {
            var ParagraphElement = document.createElement("p");
            
            ElemDetails.appendChild(ParagraphElement);
        }
            

        ElemDetails.appendChild(anchor);

        var BreakElem=document.createElement("br");
        
        ElemDetails.appendChild(BreakElem);
            
        
        
        /*
         * if not last index, set lower headings (i.e., h2>h3) to zero
         * if we find h2, we want h3 and h4 to restart indexing
         * similarly if we find h3, h4 must restart
         */
        
        var LastIndex = Occurences.length - 1;
        
        if(LastIndex - CurIndex > 0)
        {
            for(var i=CurIndex+1; i<Occurences.length; ++i)
                Occurences[i]=0;
        }
        
        
         NextSibling = NextSibling.nextElementSibling;
        
    }//while(NextSibling)
    

}



