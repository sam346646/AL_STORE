function show_product(str)
{
    if(str.length==0)
    {
        document.getElementById("suggestion").innerHTML="";
        return;
    }
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("suggestion").innerHTML=this.responseText;
        }
    };
    xhttp.open("GET","functions/get_product.php?s="+str,true);
    xhttp.send();
}
