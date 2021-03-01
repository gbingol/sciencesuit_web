function MakeElement_Select_OutlineFromH2H3Tags()
{
    var MainBody = document.body;

    var H1Node=document.getElementsByTagName("h1")[0];

    var h2NodeList = document.getElementsByTagName("h2");


    //Create and append select list
    var selectList = document.createElement("select");
    selectList.style.setProperty("border", "1px blue solid");
    selectList.style.setProperty("border-radius","20px");

    selectList.id = "selectsection";

    selectList.addEventListener("change", function()
    {
        var Elem=document.getElementById("selectsection");

        var SelIndex=Elem.selectedIndex;

        location.href=Elem.options[SelIndex].value;
    });

    MainBody.insertBefore(selectList, H1Node.nextSibling);


    var option = document.createElement("option");
    option.text = "Section";
    option.selected = true;
    option.disabled=true;

   selectList.appendChild(option);


    for(var i=0; i<h2NodeList.length; ++i)
    {
        var H2HeadingLetter = String.fromCharCode(65 + i);
        
        var h2Node = h2NodeList[i];

        var option = document.createElement("option");

        var ElemId = h2Node.id;

        if(ElemId!="")
        {
            option.value = "#"+ ElemId;
            option.text = H2HeadingLetter + ") " + h2Node.innerHTML;
            option.style.setProperty("background", "lightgreen");

            selectList.appendChild(option);
        }


        var NextSibling=h2Node.nextElementSibling;

        var k=1;
        while(NextSibling)
        {
            var H3HeadingNumber=""+ k;
            var TagName=NextSibling.nodeName.toUpperCase();

            if(TagName==="H2")
                break;

            if(TagName!=="H3")
            {
                NextSibling=NextSibling.nextElementSibling;

                continue;
            }




            var option = document.createElement("option");

            var ElemId= NextSibling.id;

            if(ElemId==="")
            {
                NextSibling=NextSibling.nextElementSibling;

                continue;
            }

            option.value = "#"+ ElemId;
            option.text = H3HeadingNumber + ". " + NextSibling.innerHTML;


            selectList.appendChild(option);

            NextSibling=NextSibling.nextElementSibling;
            
            k++;
        }
     }



    var Label=document.createElement("span");
    Label.innerHTML="Jump to: ";

    MainBody.insertBefore(Label, H1Node.nextSibling);
}






function MakeElement_Details_OutlineFromH2H3Tags()
{
    var MainBody = document.body;

    var H1Node=document.getElementsByTagName("h1")[0];

    var h2NodeList = document.getElementsByTagName("h2");


    //Create and append select list
    var ElemDetails = document.createElement("details");
    
    ElemDetails.addEventListener("toggle",function()
    {
        if(ElemDetails.hasAttribute("open"))
            ElemSummary.innerHTML="Close document outline";
        else
            ElemSummary.innerHTML="Show document outline";
    });
    
    

    MainBody.insertBefore(ElemDetails, H1Node.nextSibling);


    var ElemSummary = document.createElement("summary");
    ElemSummary.innerHTML="Show document outline";

   ElemDetails.appendChild(ElemSummary);



    var H2Counter=0;
    for(var i=0; i<h2NodeList.length; ++i)
    {
        var H2HeadingLetter = String.fromCharCode(65 + H2Counter);
        
        var h2Node = h2NodeList[i];

        
        var ElemId = h2Node.id;

        if(ElemId!=="")
        {
            var anchor = document.createElement("a");
            
            anchor.href= "#"+ ElemId;
            anchor.innerText = H2HeadingLetter + ") " + h2Node.innerHTML;
            
            ElemDetails.appendChild(anchor);
        
            var BreakElem=document.createElement("br");
        
            ElemDetails.appendChild(BreakElem);
            
            H2Counter++;
        }

        

        var NextSibling=h2Node.nextElementSibling;

        var H3Counter=1;
        
        while(NextSibling)
        {
            var H3HeadingNumber=""+ H3Counter;
            
            var TagName=NextSibling.nodeName.toUpperCase();

            if(TagName==="H2")
                break;

            if(TagName!=="H3")
            {
                NextSibling=NextSibling.nextElementSibling;

                continue;
            }




            var anchor = document.createElement("a");

            var ElemId= NextSibling.id;

            if(ElemId==="")
            {
                NextSibling=NextSibling.nextElementSibling;

                continue;
            }
            
         
            anchor.href = "#"+ ElemId;
            anchor.innerText = H3HeadingNumber + ". " + NextSibling.innerHTML;
            anchor.style.setProperty("margin-left", "20px");
            

            ElemDetails.appendChild(anchor);

            var BreakElem=document.createElement("br");
        
            ElemDetails.appendChild(BreakElem);
            

            NextSibling=NextSibling.nextElementSibling;
            
            H3Counter++;
        }
        
         var ParagraphElem=document.createElement("p");
        
        ElemDetails.appendChild(ParagraphElem);
     }

}



window.addEventListener("load", MakeElement_Details_OutlineFromH2H3Tags);


