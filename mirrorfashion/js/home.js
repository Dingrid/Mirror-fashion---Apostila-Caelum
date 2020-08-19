$('.novidades	button').click(function() { //quando o botão da classe novidades for clicado
	$('.novidades').toggleClass('painel-aberto'); //adiciona a classe painel-aberto(se n existir) em novidades e se existir ela retira
});

$('.mais-vendidos	button').click(function() { //quando o botão da classe mais-vendidos for clicado
	$('.mais-vendidos').toggleClass('painel-aberto'); //adiciona a classe painel-aberto(se n existir) em mais-vendidos e se existir ela retira
});


/* podemos tb usar so esse para os dois
$('.painel	button').click(function() {
	$(this).parent().toggleClass('painel-aberto');
});
*/