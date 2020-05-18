/*==========================
Функции для создания игры
===========================*/

//создание блока старта игры
function sozdanieStartBlock() {
	//создаём блок для <div id="start-block">
     startBlock = document.createElement("div");
        startBlock.id = "start-block";

    //кнопка старта <button id="start-button">Start</button>
    startButton = document.createElement("button");
        startButton.id = "start-button";
        startButton.innerText = "Start";
    //добавляем кнопку в стартовый блок
    startBlock.appendChild(startButton);  
    //добавлянм стартовый блок в игровое поле 
    igraPole.appendChild(startBlock);     
}


//создоём очки на игровом поле
function sozdanieOchkiBlock() {
	//создаём блок очков
    stars = document.createElement("div");
	stars.id = "stars";
	stars.innerText = 0;
	// Добавим элемент очки в игровое поле 
	igraPole.appendChild(stars);
}
//функция создания жизней
function sozdanieLifesBlock(){
	// переменная поля жизней
	 lifes = document.createElement("div");	
	// присвоение ид блока жизней блоку lifes
     lifes.id = "lifes";
//Текущее количество жизней
var tekucheeColichestvoLifes = 0;
//запуск цыкла для создания жизней 
while(tekucheeColichestvoLifes < colichestvoLifes){
	// создание жизней
	var span = document.createElement("span");
	// вывод span в блок жизней
	lifes.appendChild(span);
	//условие завершения цыкла
tekucheeColichestvoLifes = tekucheeColichestvoLifes + 1;
   }
	// вывод на рабочее поле 	
    igraPole.appendChild(lifes);
}

//создает таймер
function sozdanieTimerBlock(){
	//заголовок 
	var h2 = document.createElement("h2");
	    h2.innerText = "Время: ";
	    //сам отчет 
	timerBlock = document.createElement("span");
	//присвоение id 
	    timerBlock.id = "timer"; 
	//присвоение значения     
	    timerBlock.innerText = "30";
// вывод span в блок таймера 	    
	h2.appendChild(timerBlock);     
// вывод на поле таймера
	infoBlock.appendChild(h2);
}

//создание шарика 
function sozdanieBall() {
	//создаём болк div шарика
  var ball = document.createElement("div");
   //направление вылета шарика 
   var napravlenie = random(2); //1-left 2-right
//чередовка вылета шарика
   if(napravlenie == 1) {
   	ball.className = "ball left";
   } else {
   	ball.className = "ball right";
   }
//при навидении на шарик выполн функция 
ball.onmousemove = function(){
	//проверка на 1 клик на шарик 
	if (ball.className != "ball ojidaet-udaleniya"){
	//увел счёт игры
	ochki = ochki + 1;
	stars.innerText = ochki;
//прозрачность шарика
ball.style.opacity = "0";
//функция задержки создания шариков
setTimeout(function(){
	// удаляем шарик
ball.remove();

var sushestvuetBall = document.querySelector(".ball");
if(sushestvuetBall == null){
//сколько шариков хочу сделать
var colichestvoBall = random(3);
//текущее количество шариков
var tekucheeColichestvoBall = 0;
while(tekucheeColichestvoBall < colichestvoBall) {
// создаём шарик
sozdanieBall();
tekucheeColichestvoBall = tekucheeColichestvoBall + 1;
   }
}
 }, 200);	

	}
ball.className = "ball ojidaet-udaleniya"		
}
//функция перемещения шарика рандомно с задержкой 0,2 сек
setTimeout(function(){
  ball.style.top = random(300) + "px";
  ball.style.left = random(550) + "px";

}, 200)
//функция подения шарика 
setTimeout(function(){
	//задержка шарика на 1 месте
	ball.style.transition = "all 0s";
	//интервал падения шарика
	var timerBall = setInterval(function(){
		//скорость и вертикать падения
		ball.style.top = ball.offsetTop + 2 + "px";
		//удаление шарика при выходе из игрового поля
		if(ball.offsetTop > 450) {
			//удаление шарика
			ball.remove();
			//создать шарика 
			sozdanieBall();
			//отнятие жизни при выходе из поля шарика
			colichestvoLifes = colichestvoLifes - 1;
			//если жизни кончились ига тоже коньчилась
			if(colichestvoLifes == 0){
				gameEnd();
			}
            //удаление блока жизней
			udalenieLifesBlock();
			//создание блока жизней
			sozdanieLifesBlock();
			//удаление таймера
			clearInterval(timerBall); 
		}
	}, 10)
}, 1000);
//убераем возможность появления шариков на конечной заставке 
if(status != "close"){
 // Добавление элемента шарик в игровое поле 
 igraPole.appendChild(ball);	
}
}
//получить случайное число 
function random(max) {
	//Сулучайное чтсло от 0 до max
  var sluchaynoeCislo = 1 + Math.random() * (max + 1);
  //округляем до целого числа
  sluchaynoeCislo = Math.floor(sluchaynoeCislo);
  //return - вернуть результат 
  return sluchaynoeCislo;
}


//функция конца игра
function sozdanieKoniesIgra() {
	// создаем блок конец игра
	var div = document.createElement("div");
	    div.id = "koniec-igra";
	    //создаём блок заголовка
	var h2 = document.createElement("h2");
	    h2.innerText = "Игра окончена";
	    // Создаём блок h3
	var h3 = document.createElement("h3");
	    h3.innerText = "Вы набрали: " + ochki + " очков";
	//добавляем заголовок h2 h3 
	div.appendChild(h2);
	div.appendChild(h3);
	// вывод в игровое поле блока завершение игры 
	igraPole.appendChild(div);      

}
/*=============================
Удаление элементов
==============================*/
//удаление старт блока 
function udalenieStartBlock() { 
       //удалить выбраный блок
       startBlock.remove();
}
//удаление жизней
function udalenieLifesBlock(){
	 //удалить выбраный блок
	lifes.remove();
}
//удаление очков
function udalenieOchkiBlock(){
	 //удалить выбраный блок
	stars.remove();
} 
//удаление шариков
function udalenieIgraPole(){
	igraPole.innerText = "";	
} 
// удаляем таймер блок
function udalenieinfoBlock(){
	//удалить выбраный блок
	infoBlock.remove();
}


// ====================================================
// функция создания бомб
function sozdanieBomb(){
var bomb = document.createElement("div");
bomb.className = "bomb";
bomb.onmousemove = function(){

//проверка на 1 клик на шарик 
	if (bomb.className != "bomb ojidaet-udaleniya"){
//прозрачность шарика
bomb.style.opacity = "0";
//функция задержки создания шариков
setTimeout(function(){
	// удаляем шарик
bomb.remove();
//отнятие жизни при выходе из поля шарика
			colichestvoLifes = colichestvoLifes - 1;
			//если жизни кончились ига тоже коньчилась
			if(colichestvoLifes == 0){
				gameEnd();
			}
            //удаление блока жизней
			udalenieLifesBlock();
			//создание блока жизней
			sozdanieLifesBlock();
var sushestvuetBomb = document.querySelector(".bomb");
if(sushestvuetBomb == null){
//сколько шариков хочу сделать
var colichestvoBomb = 1;
//текущее количество шариков
var tekucheeColichestvoBomb = 0;
while(tekucheeColichestvoBomb < colichestvoBomb) {
// создаём шарик
sozdanieBomb();
tekucheeColichestvoBomb = tekucheeColichestvoBomb + 1;
   }
}
 }, 200);	

	}
bomb.className = "bomb ojidaet-udaleniya"		
}
//функция перемещения шарика рандомно с задержкой 0,2 сек
setTimeout(function(){
  bomb.style.top = random(300) + "px";
  bomb.style.left = random(550) + "px";

}, 200)
//функция подения шарика 
setTimeout(function(){
	//задержка шарика на 1 месте
	bomb.style.transition = "all 0s";
	//интервал падения шарика
	var timerBomb = setInterval(function(){
		//скорость и вертикать падения
		bomb.style.top = bomb.offsetTop + 2 + "px";
		//удаление шарика при выходе из игрового поля
		if(bomb.offsetTop > 450) {
			//удаление шарика
			bomb.remove();
			//создать шарика 
			sozdanieBomb();
			//удаление таймера
			clearInterval(timerBomb); 
		}
	}, 10)
}, 1000);
//убераем возможность появления шариков на конечной заставке 
if(status != "close"){
 // Добавление элемента шарик в игровое поле 
 igraPole.appendChild(bomb);	
}
}
