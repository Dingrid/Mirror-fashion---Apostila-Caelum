<!DOCTYPE	html>
<html>
		<head>
				<title>Mirror	Fashion</title>
				<meta	charset="utf-8">
                <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital@1&display=swap" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
                <link	rel="stylesheet" href="css/estilos.css">
                <link	rel="stylesheet" href="css/reset.css">
                <meta	name="viewport" content="width=device-width"> <!-- serve para dispostivios moveis, a tela se adapta ao valor de tela fornecido pelo fabricante (device-width) !-->
            
            <!-- para navegador internet explorer antigo que não suporta css3 e htm5 !-->
            <!--[if lt IE 9]>
              <script type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
              <script type="text/javascript" src="//css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
              <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
            <![endif]-->
    </head>
		<body>
			<header class="container">
			     <h1><img	src="img/logo.png" alt="Logo	da	Mirror	Fashion"></h1>
			     <p	class="sacola">Nenhum	item	na	sacola	de	compras </p>
			<nav	class="menu-opcoes">
					<ul>
							<li><a	href="#">Sua	Conta</a></li>
							<li><a	href="#">Lista	de	Desejos</a></li>
							<li><a	href="#">Cartão	Fidelidade</a></li>
							<li><a	href="sobre.php">Sobre </a></li>
							<li><a	href="#">Ajuda</a></li>
					</ul>
			</nav>
            </header>
            <div	class="container	destaque">
			     <section	class="busca">
					   <h2>Busca</h2>
                            <form>
							     <input	type="search">
							     <button>Buscar</button>
					       </form>
                </section>
                <!--	fim	.busca	-->
                <section	class="menu-departamentos">
					<h2>Departamentos</h2>
					<nav>
							<ul>
									<li><a	href="#">Blusas	e	Camisas</a>
                                    <ul>
                                            <li><a	href="#">Manga	curta</a></li>
                                            <li><a	href="#">Manga	comprida</a></li>
                                            <li><a	href="#">Camisa	social</a></li>
                                            <li><a	href="#">Camisa	casual</a></li>
                                    </ul>
                                    </li>
									<li><a	href="#">Calças</a></li>
									<li><a	href="#">Saias</a></li>
									<li><a	href="#">Vestidos</a></li>
									<li><a	href="#">Sapatos</a></li>
									<li><a	href="#">Bolsas	e	Carteiras</a></li>
									<li><a	href="#">Acessórios</a></li>
							</ul>
					</nav>
			     </section>
                <!--	fim	.menu-departamentos	-->
                <section	class="banner-destaque">
					<figure>
							<img	src="img/destaque-home.png" alt="Promoção:	Big	City	Night">
					</figure>
			     </section>
			     <!--	fim	.banner-destaque	-->
                </div>
                <!--	fim	.container	.destaque	-->
            
                <div	class="container	paineis ">
                 <!--	os	paineis	de	novidades	e	mais	vendidos	entrarão	aqui	dentro	-->
                    <section	class="painel	novidades ">
                        <h2>Novidades</h2>
                            <ol>
                                <?php
                                   $conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"WD43");
                                   $dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos ORDER BY data DESC LIMIT 0,12");
                                   while	($produto	=	mysqli_fetch_array($dados)):
                                 ?>
                                 <li>
                                   <a	href="produto.php?id=<?=	$produto['id']	?>">
                                        <figure>
                                            <img	src="img/produtos/miniatura<?=	$produto['id']	?>.png"	alt="<?=	$produto['nome']	?>">
                                            <figcaption><?=	$produto['nome']	?>	por	<?=	$produto['preco']	?></figcaption>
                                        </figure>
                                   </a>
                                 </li>
                                <?php	endwhile;	?>
                            </ol>
                        <button	type="button">Mostrar	mais</button>
                    </section>
                    
                    <section	class="painel	mais-vendidos">
                        <h2>Mais	Vendidos</h2>
                            <ol>
			                      <?php
                                   $conexao	=	mysqli_connect("127.0.0.1",	"root",	"",	"WD43");
                                   $dados	=	mysqli_query($conexao,	"SELECT	*	FROM	produtos ORDER BY vendas ASC LIMIT 0,12");
                                   while	($produto	=	mysqli_fetch_array($dados)):
                                 ?>
                                 <li>
                                   <a	href="produto.php?id=<?=	$produto['id']	?>">
                                        <figure>
                                            <img	src="img/produtos/miniatura<?=	$produto['id']	?>.png"	alt="<?=	$produto['nome']	?>">
                                            <figcaption><?=	$produto['nome']	?>	por	<?=	$produto['preco']	?></figcaption>
                                        </figure>
                                   </a>
                                 </li>
                                <?php	endwhile;	?>
                             
                                
                            </ol>
                        <button	type="button">Mostrar	mais</button>
                    </section>


                </div>
                <!--	fim	.container	.paineis	-->

            <footer>
			<div	class="container">
					<img	src="img/logo-rodape.png" alt="Logo	da	Mirror	Fashion">
					<ul	class="social">
							<li><a	href="http://facebook.com/mirrorfashion">Facebook</a></li>
							<li><a	href="http://twitter.com/mirrorfashion">Twitter</a></li>
							<li><a	href="http://plus.google.com/mirrorfashion">Google+</a></li>
					</ul>
			</div>
            </footer>
            <script	type="text/javascript" src="js/jquery.js"></script> <!--	tem q ser antes de TODOS os js importados	-->
            <script	type="text/javascript" src="js/banner.js"></script>
            <script	type="text/javascript" src="js/home.js"></script>
		</body>
</html>