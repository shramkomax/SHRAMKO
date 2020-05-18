
var siteURL = "http://shop-master.local/";

var btnShowMore = document.querySelector("#show-more");
if(btnShowMore){
	btnShowMore.onclick = function() {
		var currentPageInput = document.querySelector("#current-page");
		var ajax = new XMLHttpRequest();
			ajax.open("GET", siteURL + "modules/products/get-more.php?page=" + currentPageInput.value, false);
			ajax.send();

		currentPageInput.value = +currentPageInput.value + 1;	

		if(ajax.response == "")	{
			btnShowMore.style.display = "none";
		}
		var productsBlock = document.querySelector("#products");
			productsBlock.innerHTML = productsBlock.innerHTML + ajax.response;
			
	}
}	
//Добавить товар в корзину 
function addToBasket(btn) {

	/*
		1 Сделать аякс запрос на добавление в корзине 
		2 Пролучить данные о добавление в корзину 
		3 Обновить информацию о корзине 
	*/	

	var ajax = new XMLHttpRequest();
		ajax.open("POST", siteURL + "/modules/basket/add-basket.php", false);
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send("id=" + btn.dataset.id);
		
	var response = JSON.parse(ajax.response);

	var btnGoBasket	= document.querySelector("#go-basket span");
		btnGoBasket.innerText = response.count;

}

// Удаление товара с корзины

function deleteProductBasket(obj, id) {
	var ajax = new XMLHttpRequest();
	ajax.open("POST", siteURL + "/modules/basket/delete-basket.php", false);
	ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	ajax.send("id=" + id);

	alert("Product deleted");
	var response = JSON.parse(ajax.response);
	//Удалить строку с товаром 
	obj.parentNode.parentNode.remove();
	var btnBasket	= document.querySelector("#go-basket span");
	btnBasket.innerText = response.count;

}	


function chengBasket(obj, id , cost) {
	var ajax = new XMLHttpRequest();
	ajax.open("POST", siteURL + "/modules/basket/chengbasket.php", false);
	ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	ajax.send("id=" + id + "&value=" + obj.value);
	var response = JSON.parse(ajax.response);
	var btnBasket	= document.querySelector("#go-basket span");
	btnBasket.innerText = response.count;
	console.log(obj.value);

	var input = document.querySelector("#cost_"+id);
	input.innerText = obj.value * cost;
	
}	

