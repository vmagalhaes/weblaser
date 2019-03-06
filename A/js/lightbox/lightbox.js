document.getElementsByClassName('abrir').onClick(function() {
	document.getElementById('mostrar').style.display='block';
	document.getElementById('esconder').style.display='block';
});

function ativarLB () {
	document.getElementById('mostrar').style.display='block';
	document.getElementById('esconder').style.display='block';
}

function desativarLB () {
	document.getElementById('mostrar').style.display='none';
	document.getElementById('esconder').style.display='none';
}