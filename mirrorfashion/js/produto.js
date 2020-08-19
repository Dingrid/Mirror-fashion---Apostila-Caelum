var	inputTamanho =	document.querySelector('[name=tamanho]');
var	outputTamanho	=	document.querySelector('[name=valortamanho]');

function	mostraTamanho(){
    outputTamanho.value	=	inputTamanho.value;
    outputTamanho.textContent	=	event.target.value; //para o IE10
	}

/*não estamos executando a funcao (ja que nao tem os parenteses), apenas mostrando qualo nome da funcao que devera ser executada quando o usuario clicar */
	inputTamanho.oninput	=	mostraTamanho;
    inputTamanho.onchange	=	mostraTamanho; //para o IE10