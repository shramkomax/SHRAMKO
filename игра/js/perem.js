//статус игры
var status = "open";

var statusball = "open";
// блок жизней
var lifes = null;
//бдок очков
var points = null;
//количество жизней 
var colichestvoLifes = 5;
//start-block-стартовое поле
var startBlock = null;
//buttonClassic-кнопка старта
var buttonClassic = null;
//buttonArcade-кнопка старта
var buttonArcade = null;
// // таймер блок
var timerBlock = null;
// //i-счёт игры
var ochki = 0;
//игровое поле 
var igraPole = document.querySelector("#game-field");
// //выбераем инфо блок 
var infoBlock = document.querySelector("#info-block");

var timerMedicineSpam = null;

var timerBombSpam = null;

var timerTimerball = null;