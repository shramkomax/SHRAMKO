// //Главный файл візова функций и действия игры

// //функция старта игра
function startGame(){
// создаём стартовый блок
  sozdanieStartBlock();
//запуск старта игры при нажатии кнопки
  buttonClassic.onclick = nachatClassic;
  buttonArcade.onclick  = nachatArcade;
}
startGame();


//функция начаnm  Classic
function nachatClassic() {
  //статус игры
  status = "nachat";
  statusball = "classic";
  //удаление стартового блока 
  udalenieStartBlock();
  // создаём таймер блок
  sozdanieTimerBlock();
  //создать очки
  sozdaniePointsBlock();
  //создать жизни
	sozdanieLifesBlock();
  //создать шарик
  sozdanieBall();
  // запуск таймера игры
  timerIgra();
  // запускаем музычку
  startMusic();
}

//функция начать  Arcade
function nachatArcade() {
    //статус игры
  status = "nachat";
  statusball = "arkade";
  //удаление стартового блока 
  udalenieStartBlock();
  // создаём таймер блок
  sozdanieTimerBlock();
  //создать очки
  sozdaniePointsBlock();
  //создать жизни
  sozdanieLifesBlock();
  //создать шарик
  sozdanieBall();
    // запуск таймера игры
  timerIgra();
timerMedicineSpam = setInterval(function() {
sozdanieMedicine();
 }, 13000)
timerBombSpam = setInterval(function() {
sozdanieBomb();
 }, 5000)
timerTimerball = setInterval(function() {
sozdanieTimerball();
 }, 18000)
// запускаем музычку
  startMusic();
}

//функция конца игры
function gameOver(){
 //статус игры	
 status = "close"	
 udalenieLifesBlock();
 udaleniePointsBlock();
 udalenieIgraPole();
 udalenietimerBlock();
 sozdanieendBlock();
 clearInterval(timerMedicineSpam);
 clearInterval(timerBombSpam);
 clearInterval(timerTimerball);
 buttonNewGame.onclick  = nachatNewGame;
 pauseMusic();
}

//функция перезагрузки
function nachatNewGame() {  
location.reload();
  
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
      gameOver(); 
      //sozdanieEndBlock();	
    }
 	}, 1000);
}