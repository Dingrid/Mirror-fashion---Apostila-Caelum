
//ESSE CÓDIGO TROCA O BANNER PRINCIPAL DE 4 EM 4 SEGUNDOS
var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
var bannerAtual = 0;

function trocaBanner() {
	bannerAtual = (bannerAtual + 1) % 2;
	document.querySelector('.banner-destaque img').src = banners[bannerAtual]; /*seleciona a img do banner-destaque e coloca um  arquivo lá */
}
setInterval(trocaBanner,	4000);
