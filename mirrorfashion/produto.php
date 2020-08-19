<?php
$conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
$dados   = mysqli_query($conexao, "SELECT    *    FROM    produtos WHERE	id	=	$_GET[id]");
$produto = mysqli_fetch_array($dados);
?>

    <?php
$cabecalho_css = '<link    rel="stylesheet"    href="css/produto.css">';
?>
       <?php
$cabecalho_title =	$produto['nome'] ;
include("cabecalho.php");
?>

            <div class="produto-black">
    <div class="container">
        <div class="produto">
            <h1><?= $produto['nome'] ?></h1>
            <p>por apenas <?=	$produto['preco']	?></p>
            
          <!-- botao de curtir face e twitter !-->  
		<div	class="fb-like" data-href="http://www.mirrorfashion.net"
			data-send="false" data-layout="box_count"
			data-width="58" data-show-faces="false"></div>
            
            <a	href="https://twitter.com/share"
		class="twitter-share-button" data-count="vertical">Tweet</a>

            <form action="checkout.php" method="post">
                <!-- cor !-->
                <fieldset class="cores">
                    <legend>Escolha a cor:</legend>
                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde">
                        <img src="img/produtos/foto<?=	$produto['id']	?>-verde.png" alt="Produto    na    cor    verde">
                    </label>
                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                        <img src="img/produtos/foto1-rosa.png" alt="Produto    na    cor    rosa">
                    </label>
                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                        <img src="img/produtos/foto1-azul.png" alt="Produto    na    cor    azul">
                    </label>
                </fieldset>

                <!-- tamanho !-->
                <fieldset class="tamanhos">
                    <legend>Escolha o tamanho:</legend>
                    <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
                    <output for="tamanho" name="valortamanho">42</output>

                </fieldset>
                <button class="comprar">Comprar</button>
                <input	type="hidden"	name="id"	value="<?=	$produto['id']	?>">
            </form>
        </div>

        <div class="detalhes">
            <h2>Detalhes    do    produto</h2>
            <p><?=	$produto['descricao']	?></p>
            <table>
                <thead>
                    <tr>
                        <th>Característica</th>
                        <th>Detalhe</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Modelo</td>
                        <td>Cardigã 7845</td>
                    </tr>
                    <tr>
                        <td>Material</td>
                        <td>Algodão e poliester</td>
                    </tr>
                    <tr>
                        <td>Cores</td>
                        <td>Azul, Rosa e Verde</td>
                    </tr>
                    <tr>
                        <td>Lavagem</td>
                        <td>Lavar a mão</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<!-- script do botao de curtir face e twitter!-->

<!--face!-->
<div	id="fb-root"></div>
<script>(function(d,	s,	id) {
			var	js,	fjs	=	d.getElementsByTagName(s)[0];
			if	(d.getElementById(id))	return;
			js	=	d.createElement(s);	js.id	=	id;
			js.src	=	"http://connect.facebook.net/pt_BR/all.js#xfbml=1";
			fjs.parentNode.insertBefore(js,	fjs);
	}(document,	'script',	'facebook-jssdk'));</script>

<!-- twitter!-->
<script>
!function(d,s,id){var	js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.src="http://platform.twitter.com/widgets.js";
fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
</script>
<?php
include("rodape.php");
?>

         <script type="text/javascript" src="js/produto.js"></script>
    </body>

</html>