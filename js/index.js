const newGame = document.querySelector("#newGame");

newGame.addEventListener("click", new_game);

const screen =document.querySelector("#screen");
var screenContents= screen.children;
var screenContentsGrand = screenContents.children; 

function new_game(){
	for(let i=0; i<screenContents.length;i++){
		screenContents[i].style.display ="none";
		screenContentsGrand[i].style.display ="none";
	}

}