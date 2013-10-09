$(document).on("ready",inicio);
function inicio()
{
	// Aqui va el codio
	$(".btn-articulo").on("click",transicion);

}
function transicion()
{
	//obetos javas cript o JSON
	var cambiosCSS =
	{
		margin:"0",
		padding:"0",
		width:"0"
	};
	$("#bizquierda").css(cambiosCSS);
}