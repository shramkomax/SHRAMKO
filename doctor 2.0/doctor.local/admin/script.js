// Открыть мод окно контактов
var btnOpenContact = document.querySelector("#open-content");
btnOpenContact.onclick = function() {
	var contentsModal = document.querySelector("#contents-modal");
        contentsModal.style.display = "block";

}
//Зактыть модальное окно контактов 
var contentsModalCloseBtn = document.querySelector("#contents-modal .close");
	contentsModalCloseBtn.onclick = function() {
var contentsModal = document.querySelector("#contents-modal");
		contentsModal.style.display = "none";
}


function add(element) {
	var user_list = document.querySelector("#user_list");
	console.dir(element);
	var ssylka = element.dataset.ssylka;
	// Создать обект для отправки http запроса 
	var ajax = new XMLHttpRequest();
	//  Открываем ссылку передавая метод запроса и саму ссылку
		ajax.open("GET", ssylka, false);
		// отправляем запрос
		ajax.send();
	console.dir(ajax);
	// меняем контент в блоке френд лист 
	user_list.innerHTML = ajax.response;
}

var poisk = document.querySelector("#poisk");

poisk.onsubmit = function(e) {
	e.preventDefault();
	var text = poisk.querySelector("input");

	var dannie =  "poisk-text=" + text.value;

	var ajax = new XMLHttpRequest();
		ajax.open("POST", poisk.action, false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(dannie);
	console.dir(ajax);	
	var spis1 = document.querySelector("#spis1");
		spis1.innerHTML = ajax.response;
}

var form = document.querySelector("#form");

form.onsubmit = function(sobitye) {
	sobitye.preventDefault();
	var ot = form.querySelector("input[name='user_ot']");
	var komu = form.querySelector("input[name='user_pol']");
	var text = form.querySelector("textarea");

	var dannie = "otpravka=1" +
					"&user_ot=" + ot.value +
					"&user_pol=" + komu.value +
					"&text=" + text.value;

	var ajax = new XMLHttpRequest();
		ajax.open("POST", form.action, false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(dannie);
	console.dir(ajax);	
	var spisokSoobsheniy = document.querySelector("#spisok-soobsheniy");
		spisokSoobsheniy.innerHTML = ajax.response;
}


