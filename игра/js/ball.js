//Создание шариков, бомбочек и т.д.

//создание шарика 
function sozdanieBall() {

  //создаём болк div шарика
  var ball = document.createElement("div");
    //направление вылета шарика 
    var napravlenie = random(2); //1-left 2-right
  //чередовка вылета шарика
   if(napravlenie == 1) {
      ball.className = "ball left";
   }  else {
        ball.className = "ball right";
      }

  //при навидении на шарик выполн функция 
  ball.onmousemove = function(){

    //проверка на 1 клик на шарик 
    if (ball.className != "ball ojidaet-udaleniya"){
      //увел счёт игры
      ochki = ochki + 1;
      points.innerText = ochki;

      if (statusball == "classic"){
        pluseOchki();
      }
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
          gameOver();
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

// функция создания бомб
function sozdanieBomb(){

  //создание обекта бомба 
  var bomb = document.createElement("div");
  //присвоения класса бомбы
  bomb.className = "bomb";
  //функция клика на бомбу
  bomb.onmousemove = function(){

    //проверка на 1 клик на бомбу 
    if (bomb.className != "bomb ojidaet-udaleniya"){
      //прозрачность бомб
      bomb.style.opacity = "0";
      //функция задержки создания бомбу

      setTimeout(function(){
        // удаляем бомбу
        bomb.remove();
        //отнятие жизни при клике на бомбу
        colichestvoLifes = colichestvoLifes - 1;

        //если жизни кончились ига тоже коньчилась
          if(colichestvoLifes == 0){
            gameOver();

          }

            //удаление блока жизней
        udalenieLifesBlock();
        //создание блока жизней
        sozdanieLifesBlock();
        
      }, 200);  

    }
  bomb.className = "bomb ojidaet-udaleniya"   
  }

  //функция перемещения бомб рандомно с задержкой 0,2 сек
  setTimeout(function(){
      bomb.style.top = random(300) + "px";
      bomb.style.left = random(550) + "px";

  }, 200)

  //функция подения бомб 
  setTimeout(function(){
    //задержка бомб на 1 месте
    bomb.style.transition = "all 0s";
    //интервал падения бомб

    var timerBomb = setInterval(function(){

      //скорость и вертикать падения
      bomb.style.top = bomb.offsetTop + 2 + "px";
      //удаление бомб при выходе из игрового поля
      
      if(bomb.offsetTop > 450) {
        //удаление бомб
        bomb.remove(); 
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

// функция создания Таблеток 
function sozdanieMedicine(){

  //создание обекта Таблетка  
  var medicine = document.createElement("div");
  //присвоения класса Таблетка
  medicine.className = "medicine";
  //функция клика на Таблетка
  medicine.onmousemove = function(){

    //проверка на 1 клик на Таблетка
    if (medicine.className != "medicine ojidaet-udaleniya"){
      //прозрачность Таблетка
      medicine.style.opacity = "0";
      //функция задержки создания Таблетка

      setTimeout(function(){
        // удаляем Таблетка
        medicine.remove();
        //отнятие жизни при клике на Таблетка
        colichestvoLifes = colichestvoLifes + 1;

        //если жизни кончились ига тоже коньчилась
          if(colichestvoLifes == 0){
            gameOver();

          }

            //удаление блока жизней
        udalenieLifesBlock();
        //создание блока жизней
        sozdanieLifesBlock();
        //переменная количества Таблетка      

      }, 200);  

    }
  medicine.className = "medicine ojidaet-udaleniya"   
  }

  //функция перемещения Таблетка рандомно с задержкой 0,2 сек
  setTimeout(function(){
      medicine.style.top = random(300) + "px";
      medicine.style.left = random(550) + "px";

  }, 200)

  //функция подения Таблетка 
  setTimeout(function(){
    //задержка Таблетка на 1 месте
    medicine.style.transition = "all 0s";
    //интервал падения Таблетка

    var timerMedicine = setInterval(function(){

      //скорость и вертикать падения
      medicine.style.top = medicine.offsetTop + 2 + "px";
      //удаление Таблетка при выходе из игрового поля
      
      if(medicine.offsetTop > 450) {
        //удаление Таблетка
        medicine.remove();
        //удаление таймера
        clearInterval(timerMedicine); 
      }
    }, 10)
  }, 1000);
  //убераем возможность появления шариков на конечной заставке 
  
  if(status != "close"){
    // Добавление элемента шарик в игровое поле 
    igraPole.appendChild(medicine); 
  }
}

// функция создания Таймерболл
function sozdanieTimerball(){

  //создание обекта бомба 
  var timerball = document.createElement("div");
  //присвоения класса бомбы
  timerball.className = "timerball";
  //функция клика на бомбу
  timerball.onmousemove = function(){

    //проверка на 1 клик на бомбу 
    if (timerball.className != "timerball ojidaet-udaleniya"){
      //прозрачность бомб
      timerball.style.opacity = "0";
      //функция задержки создания бомбу
      setTimeout(function(){
        // удаляем бомбу
        timerball.remove();

        var time = Number(timerBlock.innerText);
            timerBlock.innerText = time + 20;

      }, 200);  

    }
  timerball.className = "timerball ojidaet-udaleniya"   
  }

  //функция перемещения шарика рандомно с задержкой 0,2 сек
  setTimeout(function(){
      timerball.style.top = random(300) + "px";
      timerball.style.left = random(550) + "px";

  }, 200)

  //функция подения шарика 
  setTimeout(function(){
    //задержка шарика на 1 месте
    timerball.style.transition = "all 0s";
    //интервал падения шарика

    var timerTimerball = setInterval(function(){

      //скорость и вертикать падения
      timerball.style.top = timerball.offsetTop + 2 + "px";
      //удаление шарика при выходе из игрового поля
      
      if(timerball.offsetTop > 450) {
        //удаление шарика
        timerball.remove();
        //удаление таймера
        clearInterval(timerTimerball); 
      }
    }, 10)
  }, 1000);
  //убераем возможность появления шариков на конечной заставке 
  
  if(status != "close"){
    // Добавление элемента шарик в игровое поле 
    igraPole.appendChild(timerball);  
  }
}

function pluseOchki(){
  if(ochki %25 == 0 && ochki != 0){
    var time = Number(timerBlock.innerText);
     timerBlock.innerText = time + 27;
  }     
}
   
