var puntos = 0 ;
var teclaPrecionada;
var codigo; 
var deltaRender = 0;
var contadorArray = 0; 

var teclas={
	UP:38,
	DOWN:40,
	LEFT:37,
	RIGHT:39,

	
};

var posX = new Array(90);
var posY = new Array(90);

for (var i = posX.length - 1; i >= 0; i--) {
	contadorArray = contadorArray + 10;
	posX[i] = contadorArray;
}

contadorArray = 0;

for (var i = posY.length - 1; i >= 0; i--) {
	contadorArray = contadorArray + 10;
	posY[i] = contadorArray;
}


var tablero;

var fondo = {
	fondoURL : "../../assets/img/img juegos/serpiente/fondo serpiente.png"
};

var mario = {
	marioURL :"../../assets/img/img juegos/serpiente/cabesa.png",
	posx : 0,
	posy : 0, 
	velocidad : 20
};

var mario2 = {
	marioURL :"../../assets/img/img juegos/serpiente/serpiente1.png",
	posx : 430,
	posy : 230, 
	velocidad : 5
};

var mario3 = {
	marioURL :"../../assets/img/img juegos/serpiente/serpiente2.png",
	posx : 430,
	posy : 230, 
	velocidad : 5
};

var mario4 = {
	marioURL :"../../assets/img/img juegos/serpiente/serpiente3.png",
	posx : 430,
	posy : 230, 
	velocidad : 5
};

var punto1 = {
	puntoURL :"../../assets/img/img juegos/serpiente/punto1.png",
	posx : null,
	posy : null, 
};

var punto2 = {
	puntoURL :"../../assets/img/img juegos/serpiente/punto2.png",
};

var punto3 = {
	puntoURL :"../../assets/img/img juegos/serpiente/punto3.png",
};


function inicio() {
	var canvas = document.getElementById('canvas');
	tablero = canvas.getContext('2d');

	//numAleatorioMonedas(); 
	fondo.imagen = new Image();
	fondo.imagen.src = fondo.fondoURL;
	//fondo.imagen.onload = dibujarFondo;

	punto1.imagen = new Image();
	punto1.imagen.src = punto1.puntoURL;

	punto2.imagen = new Image();
	punto2.imagen.src = punto2.puntoURL;

	punto3.imagen = new Image();
	punto3.imagen.src = punto3.puntoURL;

	mario2.imagen = new Image();
	mario2.imagen.src = mario2.marioURL;

	mario3.imagen = new Image();
	mario3.imagen.src = mario3.marioURL;

	mario4.imagen = new Image();
	mario4.imagen.src = mario4.marioURL;

	mario.imagen = new Image();
	mario.imagen.src = mario.marioURL;
	mario.imagen.onload = dibujar;

}

function numeroAleatorio(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}

function dibujarPunto(tiempo) {

	if(punto1.posx == null && punto1.posy == null){
		punto1.posx = numeroAleatorio(0,860);
		punto1.posy = numeroAleatorio(0,460);
	}


	deltaRender++;

	if (deltaRender <= 1) {
		tablero.drawImage(punto1.imagen,punto1.posx,punto1.posy);
	}else if(deltaRender <= 2 && deltaRender > 1){
		tablero.drawImage(punto2.imagen,punto1.posx,punto1.posy);
	}else if(deltaRender <= 3 && deltaRender > 2){
		tablero.drawImage(punto3.imagen,punto1.posx,punto1.posy);
	}else if(deltaRender <= 4 && deltaRender > 3){
		tablero.drawImage(punto2.imagen,punto1.posx,punto1.posy);
		deltaRender = 0;
	}

	console.log(deltaRender);
		
}

function detectarTeclado() {	

	if(codigo == teclas.RIGHT){
		mario.posx = mario.posx + mario.velocidad;
		if (mario.posx > 860) {
			mario.posx = 0;
		}
		
	}

	if(codigo == teclas.LEFT){
		mario.posx = mario.posx - mario.velocidad;
		if (mario.posx < 0) {
			mario.posx = 860;
		}
    }

    if(codigo == teclas.UP){
		mario.posy = mario.posy - mario.velocidad;
		if (mario.posy < 0) {
			mario.posy = 460;
		}
    }

    if(codigo == teclas.DOWN){
		mario.posy = mario.posy + mario.velocidad;
		if(mario.posy > 460){
			mario.posy = 0;
		}
    }

}

function detectarDireccion(evento) {
	codigo = evento.keyCode;
}

function dibujarSerpiente() {
	tablero.drawImage(mario.imagen,mario.posx,mario.posy);	
}

function dibujar() {

	tablero.clearRect(0,0,900,500);

	tablero.drawImage(fondo.imagen,0,0);

	if(codigo == null){
		mario.posx = mario.posx + mario.velocidad;
		if (mario.posx > 880) {
			mario.posx = 0;
		}
	}

	document.addEventListener("keydown", detectarDireccion);
	detectarTeclado();
	
    dibujarSerpiente();

    dibujarPunto(deltaRender);	

    setTimeout(dibujar, 100);
}

 