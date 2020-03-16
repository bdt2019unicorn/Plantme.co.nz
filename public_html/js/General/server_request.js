function AjaxRequest(type,url, data={})
{
	var ajax = null; 
	$.ajax 
	(
		{
			type: type, 
			url: url, 
			data: data, 
			processData: false,
			contentType: false,
			async: false, 
			success: function(success)
			{
				ajax = success; 
			}, 
			error: function(error)
			{
				ajax = error; 
			}
		}
	); 
	return ajax; 
}


function SubmitForm(form, url)
{
    if(form.checkValidity()===false)
    {
        alert("Some field validation is missing, please try again"); 
        return; 
    }
    var form_data = new FormData(form); 
    let script = AjaxRequest("post",url, form_data);
    eval(script); 
}