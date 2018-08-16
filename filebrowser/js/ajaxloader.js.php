 <?php
	/**
	 * Ajaxloader JAVA SCRIPT
	 * @author Ahmed Zamouche (medzam [at] gmail [dot] com)
	 * @link http://www.zammed.co.cc
	 * @since 27/August/2008
	 * @version 1
	 * @todo See help
	 */

    $ajaxloader="function ajaxloader(url,id,confirmation,actionName)
	{

	if (confirmation)
	{
	      var r=confirm('".DO_YOU_REALY_WANT_TO."'+actionName+'?');
	      if (r==false)
		{
		  return;
		}
	  
	  if(actionName=='".DELETE_."')
		{
		var urlFilestoDelete='';
		var j=0;
		var k=0;
		var x=document.getElementsByName('select_'+id);
		 x.length;
		  for (i=0;i<x.length;i++)
		      {
			   j=i+2;
			  if(document.getElementById('select_'+id+'_'+j).checked)
			      {
				urlFilestoDelete=urlFilestoDelete+'&fileToDelete_'+k+'='+document.getElementById('name_'+id+'_'+j).value;
				k++;
			      }
		      }
		  url=url+urlFilestoDelete;
		}
	    
	}


        if (actionName=='".COPY."')
	{
		var urlFilestoCopy='';
		var j=0;
		var k=0;
		var x=document.getElementsByName('select_'+id);
		 x.length;
		  for (i=0;i<x.length;i++)
		      {
			   j=i+2;
			  if(document.getElementById('select_'+id+'_'+j).checked)
			      {
				urlFilestoCopy=urlFilestoCopy+'&fileToCopy_'+k+'='+document.getElementById('name_'+id+'_'+j).value;
				k++;
			      }
		      }
		  url=url+urlFilestoCopy;
	}
	if (actionName=='".CUT."')
	{
		var urlFilestoCut='';
		var j=0;
		var k=0;
		var x=document.getElementsByName('select_'+id);
		 x.length;
		  for (i=0;i<x.length;i++)
		      {
			   j=i+2;
			  if(document.getElementById('select_'+id+'_'+j).checked)
			      {
				urlFilestoCut=urlFilestoCut+'&fileToCut_'+k+'='+document.getElementById('name_'+id+'_'+j).value;
				k++;
			      }
		      }
		  url=url+urlFilestoCut;
	}
	
	if (actionName=='".NEW_SYMBOLIC_LINK."')
	{
		var urlnewSymLink='';
		var j=0;
		var k=0;
		var x=document.getElementsByName('select_'+id);
		 x.length;
		  for (i=0;i<x.length;i++)
		      {
			   j=i+2;
			  if(document.getElementById('select_'+id+'_'+j).checked)
			      {
				urlnewSymLink=urlnewSymLink+'&Targetfile_'+k+'='+document.getElementById('name_'+id+'_'+j).value;
				k++;
			      }
		      }
		  url=url+urlnewSymLink;
	}

      url=url+'&EV='+document.getElementById('errors_".$this->container."').style.visibility;
      url=url+'&CV='+document.getElementById('clipboard_".$this->container."').style.visibility;

		if (document.getElementById) {
			var x = (window.ActiveXObject) ? new ActiveXObject(\"Microsoft.XMLHTTP\") : new XMLHttpRequest();
			}
			if (x)
				{
			x.onreadystatechange = function()
					{
				if (x.readyState == 4 && x.status == 200)
						{
						el1 = document.getElementById(id);
						el1.style.opacity=1;
						el1.disabled=false;
						el1.innerHTML = x.responseText;
						el2  = document.getElementById('status_'+id);
						el2.style.color='green';
						el2.innerHTML='".PAGE_LOADED_SUCCESSFULLY."';
					}
				if (x.readyState == 4 && x.status != 200)
						{
						el1 = document.getElementById(id);
						el1.style.opacity=1;
						el1.disabled=false;
						el2  = document.getElementById('status_'+id);
						el2.style.color='red';
						el2.innerHTML='".ERROR_PLEASE_TRY_AGAIN."';

						
					}
				if (x.readyState != 4)
						{
						el1 = document.getElementById(id);
						el1.style.opacity=0.5;
						el1.disabled=true;
						el2  = document.getElementById('status_'+id);
						el2.style.color='blue';
						el2.innerHTML=\"".LOADING."<img src=\\\"icons/progress_bar.gif\\\"/>\";
					}
					}
				x.open(\"GET\", url, true);
				x.send(null);
				}
	    }";
?>
