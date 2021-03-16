<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<title>TOXIN</title>
	<script src="jquery-3.3.1.min.js"></script>


</head>
<body>
	<header>
		<div class="container">
			<div class="header_wrapp">
				<div class="logo">
					<a href="/">
						<img src="image/Group.png" alt="logotype" class="logotype">
						<img src="image/TOXIN.png" alt="brand" class="brand">
					</a>
				</div>
				<nav>
					<ul>
						<li>
							<a href="#">О нас</a>
						</li>
						<li>
							<a href="#">Услуги</a>
						</li>
						<li>
							<a href="#">Вакансии</a>
						</li>
						<li>
							<a href="#">Новости</a>
						</li>
						<li>
							<a href="#">Соглашения</a>
						</li>
					</ul>
				</nav>
				<div class="login_menu">
					<a href="index.php?page=sing_in" class="sing_in">Войти</a>
					<a href="index.php?page=registration" class="sing_up">Зарегистрироваться</a>
				</div>
			</div>
		</div>
	</header>
	

	<?php 

	$page = $_GET['page'];


	if(!isset($page)) {
		require ('templates/main.php');
	} elseif ($page == 'search_room') {
		require ('templates/search_room.php');
	} elseif ($page == 'registration') {
		require ('templates/registration.php');
	} elseif ($page == 'sing_in') {
		require ('templates/sing_in.php');
	}


	?>



	<div class="content_block">
		<div class="container">
			<div class="content_block_wrapp">
				<ul>
					<li class="logo">
						<a href="/">
							<img src="image/Group.png" alt="logotype" class="logotype">
							<img src="image/TOXIN.png" alt="brand" class="brand">
						</a>
					</li>
					<li class="text">Бронирование номеров в лучшем отеле 2019 года по версии ассоциации "Отельные взгляды"<li>
					</ul>
					<ul>
						<li class="heading">Навигация</li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Служба поддержки</a></li>
						<li><a href="#">Услуги</a></li>
					</ul>
					<ul>
						<li class="heading">О нас</li>
						<li><a href="#">О сервисе</a></li>
						<li><a href="#">Наша команда</a></li>
						<li><a href="#">Вакансии</a></li>
						<li><a href="#">Инвесторы</a></li>
					</ul>
					<ul>
						<li class="heading">Служба поддержки</li>
						<li><a href="#">Соглашение</a></li>
						<li><a href="#">Сообщество</a></li>
						<li><a href="#">Связь с нами</a></li>
					</ul>
					<ul>
						<li class="heading">Подписка</li>
						<li class="text">Получаете специальные предложения и новости сервиса</li>
						<li class="search"><input type="text" placeholder="Email"></li>
					</ul>
				</div>
			</div>
		</div>


		<footer>
			<div class="container">
				<div class="footer_wrapp">	
					<p>Copyright &copy; 2018 Toxin отель. Все права защищены.</p>
					<div class="social_block">
						<a href="/"><img src="image/twitter.png" alt=""></a>
						<a href="/"><img src="image/fb.png" alt=""></a>
						<a href="/"><img src="image/inst.png" alt=""></a>
					</div>
				</div>
			</div>
		</footer>
	</body>
	</html>