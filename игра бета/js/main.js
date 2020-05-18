//Главный файл візова функций и действия игры
//функция старта игра
function start(){
	// создаём стартовый блок
   sozdanieStartBlock();
   // создаём таймер блок
    sozdanieTimerBlock();

   //запуск старта игры при нажатии кнопки
    startButton.onclick = nachat;

 
 }
 //функция начало игры
 function nachat() {
 	//статус игры
 	status = "nachat";
 	//удаление стартового блока 
 	udalenieStartBlock();
 	//создать очки
 	sozdanieOchkiBlock();
 	//создать жизни
 	sozdanieLifesBlock();
 	//создать шарик
 	sozdanieBall();
    // запуск таймера игры
 	timerIgra();
  setTimeout(function(){
sozdanieBomb();
 }, 10000);
  
  

 }

start();
//функция конца игры
function gameEnd(){
//статус игры	
status = "close"	
udalenieLifesBlock();
udalenieOchkiBlock();
udalenieinfoBlock();
udalenieIgraPole();
sozdanieKoniesIgra();
}
//таймер игра 
function timerIgra(){
	// вызывать функцию в определённый интервал времени 
var chasy = setInterval(function() {
    timerBlock.innerText = timerBlock.innerText - 1;
    //оператор сброса счётчика
    if(timerBlock.innerText == 0) {
    	//очистка счёта
    	clearInterval(chasy);
    	//конец игры
    	gameEnd();
    }
	}, 1000);
}
