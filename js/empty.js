$(function()
{
	$('input[type="submit"]').on('click',function(e)
	{
		if($("#name").val()=="" || $("#pwd").val()=="")
		{
			$("#name").addClass("border border-danger");
			$("#pwd").addClass("border border-danger");
			$(".error").html("Minden mező kitöltése kötelező!");
			e.preventDefault();
		}
	});
});