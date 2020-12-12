
<style>
.collapsiblepane 
{
    margin-bottom: 6px;
    
    background-color: blanchedalmond;

    cursor: pointer;
    padding: 10px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;

}

.activeone, .collapsiblepane:hover 
{
    background-color: darkgray;
}

.content 
{
  padding: 0 18px;
  display: none;
  overflow: hidden; 
}


.collapsiblepane:after {
    content: '\002B';
    color: white;
    font-weight: bold;

    float: right;
    margin-left: 5px;
}

.collapsiblepane.activeone:after {
    content: "\2212";
}

</style>


<script>
    <?php include $_SERVER["DOCUMENT_ROOT"]."/jsscripts/common.js";?>
</script>

<script>

    /*
     * Note that this uses LoadDoc which is defined in common.js
     */

    function Toggle_LoadContent_CollapsiblePane()
    {
        var Elems=document.getElementsByClassName("collapsiblepane");

        for (var i = 0; i < Elems.length; i++) 
        {

            Elems[i].addEventListener("click", function() 
            {

                this.classList.toggle("activeone");
                var content = this.nextElementSibling;

                if(content.id!="")
                    LoadDoc(content.id+'.html',content.id)

                if (content.style.display === "block") 
                    content.style.display = "none";
                else 
                    content.style.display = "block";

            });
        }
    }
</script>