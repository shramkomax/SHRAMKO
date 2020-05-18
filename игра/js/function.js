 /*==========================
Функции для создания игры
===========================*/

//создание блока старта игры
function sozdanieStartBlock() {
	//создаём блок для <div id="start-block">
     startBlock = document.createElement("div");
        startBlock.id = "start-block";

    //<button id="buttonClassic">Classic</button>
    buttonClassic = document.createElement("button");
        buttonClassic.id = "buttonClassic";
        buttonClassic.innerText = "Classic";
    // <button id="buttonArcade">Arcade</button>
        buttonArcade = document.createElement("button");
        buttonArcade.id = "buttonArcade";
        buttonArcade.innerText = "Arcade";

    //добавляем кнопку в стартовый блок
    startBlock.appendChild(buttonArcade);
    startBlock.appendChild(buttonClassic);    
    //добавлянм стартовый блок в игровое поле 
    igraPole.appendChild(startBlock);       
}

// создоём очки на игровом поле
function sozdaniePointsBlock() {
  //создаём блок очков
    points = document.createElement("div");
 	  points.id = "score-points";
 	  points.innerText = 0;
 	// Добавим элемент очки в игровое поле 
 	  infoBlock.appendChild(points);
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
  infoBlock.appendChild(lifes);
}

//создает таймер
function sozdanieTimerBlock(){
 //заголовок 
  var time = document.createElement("h2");
  time.innerText = "Time: ";
	//сам отчет 
  timerBlock = document.createElement("span");
 	//присвоение id 
 	timerBlock.id = "timer-block";
  //присвоение значения     
 	timerBlock.innerText = "90";
  // вывод span в блок таймера 	    
 	time.appendChild(timerBlock);     
    // вывод на поле таймера
 	infoBlock.appendChild(time);
}

//функция конца игра
function sozdanieendBlock() {
 	// создаем блок конец игра
 	var div = document.createElement("div");
 	  div.id = "end-block";
    buttonNewGame = document.createElement("button");
    buttonNewGame.id = "NewGame";
    buttonNewGame.innerText = "New Game";
 	    //создаём блок заголовка
 	var h2 = document.createElement("h2");
 	  h2.innerText = "Game Over";
	    // Создаём блок h3
 	var h3 = document.createElement("h3");
 	  h3.innerText = "Вы набрали: " + ochki + " очков";
 	//добавляем заголовок h2 h3 
 	div.appendChild(h2);
 	div.appendChild(h3);
  div.appendChild(buttonNewGame);

 	// вывод в игровое поле блока завершение игры 
 	igraPole.appendChild(div);      
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
function udaleniePointsBlock(){
 	//удалить выбраный блок
 	points.remove();
} 

//удаление шариков
function udalenieIgraPole(){
	igraPole.innerText = "";	
} 

function udalenietimerBlock(){
  infoBlock.innerText = " "; 
} 
// запуск музыки
function startMusic() {
document.getElementById("game-music").play();
}
// остановка музыки
function pauseMusic() {
document.getElementById("game-music").pause();
}
