$(document).ready(function()
{
	$("#btnPossuiConta").click(function()
	{
		$("#divAcessar").removeClass("d-none");
		$("#divRegistrar").addClass("d-none");
	});
	$("#btnSemConta").click(function()
	{
		$("#divRegistrar").removeClass("d-none");
		$("#divAcessar").addClass("d-none");
	});
})