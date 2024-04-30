function collectInfo(btn) {
	// Coleta informações do Card.
	var idTemporada = btn.parentNode.firstElementChild.innerHTML;
	var nome = btn.previousElementSibling.previousElementSibling.innerHTML;
	var ep = btn.parentNode.nextElementSibling.firstElementChild.innerHTML;
	var totalEp = btn.parentNode.nextElementSibling.lastElementChild.innerHTML;

	// Define as variáveis.
	var temporada = document.getElementById("idTemporada");
	var tituloModal = document.getElementById("tituloModal");
	var epModal = document.getElementById("epModal");
	var totalEpModal = document.getElementById("totalEpModal");
	// Modifica as informações do Modal.
	temporada.value = idTemporada;
	tituloModal.innerHTML = nome;
	epModal.value = ep;
	epModal.max = totalEp;
	totalEpModal.value = totalEp;
}
function mensagem(msg, tipo) {
	var cor = 'alert-'+tipo;
	var alerta = document.getElementById("mensagem");

	alerta.classList.add("alert");
	alerta.classList.add(cor);
	alerta.innerHTML = msg;
}
function contar(what) {
	var qtdd = document.querySelectorAll(what).length;
	document.getElementById('notificacao').innerHTML = qtdd;
}