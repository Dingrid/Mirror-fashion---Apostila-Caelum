<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados   = mysqli_query($conexao, "SELECT    *    FROM    produtos WHERE	id	=	$_POST[id]");
$produto = mysqli_fetch_array($dados); //transforma a selecao em um array
?>
<!doctype	html>
<html>
<head>
					<meta	charset="UTF-8">
					<title><?=	$produto['nome']	?></title>
					<meta	name="viewport" content="width=device-width">
</head>
<body>
					<h1>Ótima	escolha!</h1>
					<p>Obrigado	por	comprar	na	Mirror	Fashion!
					Preencha	seus	dados	para	efetivar	a	compra.</p>
    
    <h2>Sua	compra</h2>
<dl>
					<dt>Cor</dt>
					<dd><?=	$_POST['cor']	?></dd>
					<dt>Tamanho</dt>
					<dd><?=	$_POST['tamanho']	?></dd>
                    <dt>Produto</dt>
                    <dd><?=	$produto['nome']	?></dd>
                    <dt>Preço</dt>
                    <dd><?=	$produto['preco']	?></dd>
</dl>
    	
</body>
</html>