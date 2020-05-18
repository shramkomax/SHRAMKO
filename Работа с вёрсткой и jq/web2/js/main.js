/*
1 Сверстать слайдер done
2 Сделать переключение фото в лево вправо 
3 Сделать переключение фото по клику на нижнюю 
4 При клике на большую картинку увеличивать в полный розмер 

*/

var images = [
	"1.jpg",
	"2.jpg",
	"3.jpg",
	"4.jpg",
	"5.jpg",
	"6.jpg",
	"7.jpg",
	"8.jpg",
	"9.jpg"
];
// Путь к картинке слайдера 
var path = "img/imag/";

var currentImage = 0;
//Первая картинка 
$("#main-slider img")
	.attr("src", path + images[currentImage]);
//клик по правой стрелке 
$("#main-slider .next").click(function() {
	currentImage++;
	//убераем у всех елементов класс актив 
	$('#slides ul li').removeClass('active');
	// нв элементе по которому кликнули добавляем класс актив 
	$('[data-id='+ currentImage +']').addClass('active');
	if(currentImage >= images.length) {
		currentImage = 0;
	}
	$("#main-slider img")
	.attr("src", path + images[currentImage]);
	var i = 0;

	if(currentImage == 0) {
	 	$('[data-id='+ 0 +']').addClass('active');
	 }
});
//клик по левой стрелке 
$("#main-slider .pref").click(function() {
	currentImage--;
	//убераем у всех елементов класс актив 
	$('#slides ul li').removeClass('active');
	// нв элементе по которому кликнули добавляем класс актив 
	$('[data-id='+ currentImage +']').addClass('active');
	if(currentImage < 0) {
		currentImage = images.length - 1;
	}
	$("#main-slider img")
	.attr("src", path + images[currentImage]);
	var i = images.length - 1;
	if(currentImage == i) {
		console.log(i);
	 	$('[data-id='+ i +']').addClass('active');
	 }

});

// Создание карточек 
for(var i = 0; i < images.length; i++) {
	// добавляем элеменнт в блок с мини картинками 
	$('#slides ul').append("<li data-id='" + i + "'>" +
		 "<img src='" + 
			path + images[i] + 
		 "'></li>");
	// если первая картинка добавляем класс актив 
	 if(i == 0) {
	 	$('#slides ul li').addClass('active');
	 }
}
// делаем клик по слайдам 
$('#slides ul li').click(function(e){
	//убераем у всех елементов класс актив 
	$('#slides ul li').removeClass('active');
	// нв элементе по которому кликнули добавляем класс актив 
	$(this).addClass('active');
	//получаем ид элемента по которому клткнули 
	var id = this.dataset.id;
	//меняем картинку в слайде 
	$("#main-slider img")
	.attr("src", path + images[id]);

});

$("#main-slider img").click(function(){
	$('#opacity').css({'display': 'block'});
	$('#full-image')
			.css({'display': 'block'})
			.append('<img src="' + $(this).attr('src') + '">');

});

$('#opacity').click(function() {
	$('#opacity').css({'display':'none'});
	$('#full-image').css({'display':'none'}).empty();
});	