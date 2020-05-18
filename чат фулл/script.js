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

// //Открыть мод окно вход 
// var btnOpenExit = document.querySelector("#open-exit");
// btnOpenExit.onclick = function() {
// 	var exitModal = document.querySelector("#exit-modal");
//         exitModal.style.display = "block";

// }
// //Закрыть мод окно вход 
// var exitModalCloseBtn = document.querySelector("#exit-modal .close");
// exitModalCloseBtn.onclick = function() {
// 	var exitModal = document.querySelector("#exit-modal");
//         exitModal.style.display = "none";

// }

/*
1 Вынести все контакты в отдельный файл 
2 jS Добавить события на кнопку добавить друзья 
3 JS Отправить запрос на сервер 
4 Если запрос успешно высести контакты 

*/


function add(element) {
	var friend_list = document.querySelector("#friend_list");
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
	friend_list.innerHTML = ajax.response;
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


