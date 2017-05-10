<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width , initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Portfólio</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
	<style>
		/**{*/
		/*background-color: rgba(0,0,0,0.1);*/
		/*}*/
		.navbar {
			margin-bottom: 0;
			border-radius: 0;
			background-color: #616161;
			z-index: 1;
		}

		footer {
			background-color: #f2f2f2;
			padding: 25px;
		}
	</style>
</head>
<body>
<!--Menu de navegação INICIO-->
<nav class="nav navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<!--botao toggle de navegação mobile-->
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavbar">
				<!--3 icon-bar para formar o toggle de menu-->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Portfolio</a>
		</div>
		<!--menu nav com collapse quando mobile(sm) tablet-->
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo BASE_URL; ?>">Home <span class="glyphicon glyphicon-home"></span></a>
				</li>
				<li><a href="#">About</a></li>
				<li><a href="<?php echo BASE_URL; ?>/gallery/index/">Gallery</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
			<!--			<ul class="nav navbar navbar-right">-->
			<!--				<li><a href="#"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>-->
			<!--			</ul>-->
		</div>

	</div>
</nav>
<!--Menu de navegação FIM-->

<!--jumbotron!!!!!!!!-->
<div class="jumbotron">
	<div class="container text-center">
		<h1>My Portfolio</h1>
		<p>Some text that represents "Me"...</p>
	</div>
</div>

<!--painel de imagens-->
<?php $this->loadViewInTemplate($viewName, $viewData); ?>
<!-- fim painel de imagens -->
<!--Footer-->
<footer class="container-fluid text-center">
	<p>Footer text</p>
</footer>

</body>
</html>