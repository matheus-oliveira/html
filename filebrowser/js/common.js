function mouseOver(id)
{
document.getElementById('row_'+id).style.background='#98BBDE';
document.getElementById('name_'+id).style.background='#98BBDE';
document.getElementById('name_'+id).style.border='';
document.getElementById('perms_'+id).style.background='#98BBDE';
document.getElementById('perms_'+id).style.border='';
document.getElementById('owner_'+id).style.background='#98BBDE';
document.getElementById('owner_'+id).style.border='';
document.getElementById('group_'+id).style.background='#98BBDE';
document.getElementById('group_'+id).style.border='';
}
function mouseOut(id)
{
document.getElementById('row_'+id).style.background='#ffffff';
document.getElementById('name_'+id).style.background='#ffffff';
document.getElementById('name_'+id).style.border='hidden';
document.getElementById('perms_'+id).style.background='#ffffff';
document.getElementById('perms_'+id).style.border='hidden';
document.getElementById('owner_'+id).style.background='#ffffff';
document.getElementById('owner_'+id).style.border='hidden';
document.getElementById('group_'+id).style.background='#ffffff';
document.getElementById('group_'+id).style.border='hidden';
}
function selectAll(id)
{
    var x=document.getElementsByName('select_'+id);
    x.length;
    for (i=0;i<x.length;i++)
	{
	    j=i+2;
	    document.getElementById('select_'+id+'_'+j).checked=true;
	}
}
function selectNone(id)
{
    var x=document.getElementsByName('select_'+id);
    x.length;
    for (i=0;i<x.length;i++)
	{
	    j=i+2;
	    document.getElementById('select_'+id+'_'+j).checked=false;
	}
}
