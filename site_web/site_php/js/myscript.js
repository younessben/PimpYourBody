function init(id)
{
	document.getElementById(id).className="current";

}
function clearMenuBoutique()
{

	document.getElementById("liMachines").className="";
	document.getElementById("liPL").className="";
	document.getElementById("liCA").className="";

}

function menuBoutique(id,title)
{
	clearMenuBoutique();
	document.getElementById(id).className="active";

	//document.getElementById("divTitle").getElementsByTagName("h2").innerHTML='1';

	var query = document.querySelector('#divTitle h2');
	
	query.innerHTML='<span class="color-1">Nos</span> '+ title;


}


function clearMenuMonCompte()
{
    
    document.getElementById("liPerformances").className="";
	document.getElementById("liProgres").className="";
	document.getElementById("liCommandes").className="";
	document.getElementById("liInfos").className="";
}

function menuMonCompte(id,title)
{
	clearMenuMonCompte();
	document.getElementById(id).className="active";

	//document.getElementById("divTitle").getElementsByTagName("h2").innerHTML='1';

	var query = document.querySelector('#divTitle h2');
	
	query.innerHTML='<span class="color-1">Mes</span> '+ title;
    /*if(id=="liProgres")
    {
        $(document).ready(function() {
        $("#divContent").load("progres.inc.php");
        });

    }
    else if(id=="liPerformances")
    {
        $(document).ready(function() {
        $("#divContent").load("performances.inc.php");
        });

    }*/
            
    
    
    


}