
function Toggle(id)
{
    if (document.getElementById(id).style.display == 'none')
    {
        document.getElementById(id).style.display='block';
    }
    else
    {
        document.getElementById(id).style.display = 'none';
    }
}




//FetchUrl: Url of the html document to be fetched 
//DivId: Id of the div wherein fetched html document contents will be shown
function LoadDoc(FetchUrl, DivId)
{
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState<4)
            document.getElementById(DivId).innerHTML = "<span style=\"color: blue;\">Please wait...</span>";
        
        if(this.readyState==4 && this.status==200)
            document.getElementById(DivId).innerHTML = this.responseText;

    };

    xhttp.open("GET",FetchUrl, true);

    xhttp.send();
}
