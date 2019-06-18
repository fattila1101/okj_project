$(function()
{
	$("#select").on("change",function()
	{
		$.ajax({
				url: 'process.php',
				type: 'post',
				data: 
				{
					category: $("#select").val()
				},
				success: function (data) 
				{
					$("#content").html(data);
				}
			});
	});
});