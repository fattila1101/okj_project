$(function()
{
	$('input[type="submit"]').on('click',function(e)
	{
		if($("#name").val()=="" && $("#pwd").val()=="")
		{
			$("#name").addClass("border border-danger");
			$("#pwd").addClass("border border-danger");
			$(".error").html("Minden mező kitöltése kötelező!");
			e.preventDefault();
		}
		else if($("#name").val()=="" && $("#pwd").val()!="")
		{
			$("#name").addClass("border border-danger");
			$("#pwd").removeClass("border border-danger");
			$(".error").html("Név mező kitöltése kötelező!");
			e.preventDefault();
		}
		else if($("#name").val()!="" && $("#pwd").val()=="")
		{
			$("#name").removeClass("border border-danger");
			$("#pwd").addClass("border border-danger");
			$(".error").html("Jelszó mező kitöltése kötelező!");
			e.preventDefault();
		}
	});
});