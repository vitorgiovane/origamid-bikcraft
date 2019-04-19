<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Bikcraft - Custom bicycles</title>
	<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

	<meta property="og:type" content="website" />
	<meta property="og:title" content="Bikcraft - Bicicletas Personalizadas" />
	<meta property="og:description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte." />
	<meta property="og:url" content="http://bikcraft.com" />
	<meta property="og:image" content="http://bikcraft.com/img/og-image.png" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="favicon.ico">

	<link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">
	<script src="js/libs/modernizr.custom.45655.js"></script>
</head>

<body>

	<header class="header">
		<div class="container">
			<a href="index.html" class="grid-4">
				<img src="img/bikcraft.png" alt="Bikcraft">
			</a>
			<nav class="grid-12 header_menu">
				<ul>
					<li><a href="sobre.html">Sobre</a></li>
					<li><a href="produtos.html">Produtos</a></li>
					<li><a href="portfolio.html">Portfólio</a></li>
					<li><a href="contato.html">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<section class="introducao">
		<div class="container">
			<h1>Bicicletas Feitas a Mão</h1>
			<blockquote class="quote-externo">
				<p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
				<cite>WILLIAM MORRIS</cite>
			</blockquote>
			<a href="produtos.html" class="btn">Orçamento</a>
		</div>
	</section>

	<section class="produtos container animar">
		<h2 class="subtitulo">Produtos</h2>
		<ul class="produtos_lista">

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="img/produtos/passeio.png" alt="Bikcraft Passeio">
				</div>
				<h3>Passeio</h3>
				<p>Muito melhor do que passear pela orla a vidros fechados.</p>
			</li>

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="img/produtos/esporte.png" alt="Bikcraft Esporte">
				</div>
				<h3>Esporte</h3>
				<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
			</li>

			<li class="grid-1-3">
				<div class="produtos_icone">
					<img src="img/produtos/retro.png" alt="Bikcraft Retrô">
				</div>
				<h3>Retrô</h3>
				<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
			</li>

		</ul>

		<div class="call">
			<p>clique aqui e veja os detalhes dos produtos</p>
			<a href="produtos.html" class="btn btn-preto">Produtos</a>
		</div>

	</section>
	<!-- Fecha Produtos -->

	<section class="portfolio">
		<div class="container">
			<h2 class="subtitulo">Portfólio</h2>
			<div class="portfolio_lista">
				<div class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retrô"></div>
				<div class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
				<div class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
			</div>
			<div class="call">
				<p>conheça mais o nosso portfólio</p>
				<a href="portfolio.html" class="btn">Portfólio</a>
			</div>
		</div>
	</section>

	<section class="qualidade container">
		<h2 class="subtitulo">Qualidade</h2>
		<img src="img/bikcraft-qualidade.png" alt="Bikcraft">
		<ul class="qualidade_lista">
			<li class="grid-1-3">
				<h3>Durabilidade</h3>
				<p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
			</li>
			<li class="grid-1-3">
				<h3>Design</h3>
				<p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
			</li>
			<li class="grid-1-3">
				<h3>Sustentabilidade</h3>
				<p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
			</li>
		</ul>
		<div class="call">
			<p>conheça mais a nossa história</p>
			<a href="sobre.html" class="btn btn-preto">Sobre</a>
		</div>
	</section>

	<div class="quebra">
		<blockquote class="quote-externo container">
			<p>“o verdadeiro segredo da felicidade está em ter um genuíno interesse por todos os detalhes da vida cotidiana.”</p>
			<cite>WILLIAM MORRIS</cite>
		</blockquote>
	</div>

	<footer>
		<div class="footer">
			<div class="container">

				<div class="grid-8 footer_historia">
					<h3>Nossa História</h3>
					<p>Quando iniciamos a Bikcraft queriamos apenas um produto que adoraríamos utilizar. Eramos apaixonados por pedalar e também por fazer as coisas com as nossas próprias mãos. Assim surgiu um sonho na garagem da nossa casa.</p>
				</div>

				<div class="grid-4 footer_contato">
					<h3>Contato</h3>
					<ul>
						<li>- 21 9999-9999</li>
						<li>- contato@bikcraft.com</li>
						<li>- Botafago - RJ</li>
					</ul>
				</div>

				<div class="grid-4 footer_redes">
					<h3>Contato</h3>
					<ul>
						<li><a href="http://facebook.com" target="_blank"><img src="img/redes-sociais/facebook.png" alt="Facebook Bikcraft"></a></li>
						<li><a href="http://instagram.com" target="_blank"><img src="img/redes-sociais/instagram.png" alt="Instagram Bikcraft"></a></li>
						<li><a href="http://twitter.com" target="_blank"><img src="img/redes-sociais/twitter.png" alt="Twitter Bikcraft"></a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="copy">
			<div class="container">
				<p class="grid-16">Bikcraft 2015 - Alguns direitos reservados.</p>
			</div>
		</div>
	</footer>

	<!-- JavaScript -->
	<script src="js/libs/jquery-1.11.2.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	<!-- JavaScript -->

	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-60088262-1', 'auto');
		ga('send', 'pageview');
	</script>

</body>

</html>