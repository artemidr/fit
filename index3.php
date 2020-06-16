<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclick_client.php';
$client = new KClickClient('http://194.67.87.40/api.php?', 'fjf1zpx64pzgb8wyj1hq6tycxrmzcd6k');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html lang="ru-RU" >
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>BARRIO — Клуб фитнеса и танцев в Вологде +7 8172 50-60-38 — Ещё один сайт на WordPress</title>

<!-- This site is optimized with the Yoast SEO plugin v12.1 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="https://barriofit.site/">
<meta property="og:locale" content="ru_RU">
<meta property="og:type" content="website">
<meta property="og:url" content="https://barriofit.site/">
<meta property="og:site_name" content="BARRIO - Клуб фитнеса и танцев в Вологде +7 8172 50-60-38">
<meta name="twitter:card" content="summary_large_image">

<!-- / Yoast SEO plugin. -->

<link rel="dns-prefetch" href="https://s.w.org/">
<link rel="alternate" type="application/rss+xml" title="BARRIO - Клуб фитнеса и танцев в Вологде +7 8172 50-60-38 » Лента" >
<link rel="alternate" type="application/rss+xml" title="BARRIO - Клуб фитнеса и танцев в Вологде +7 8172 50-60-38 » Лента комментариев" >
		
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel="stylesheet" id="wp-block-library-css" href="style.min.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-block-library-theme-css" href="theme.min.css" type="text/css" media="all">
<link rel="stylesheet" id="twentynineteen-style-css" href="style.css" type="text/css" media="all">
<link rel="stylesheet" id="twentynineteen-print-style-css" href="print.css" type="text/css" media="print">
<link rel="https://api.w.org/" >
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="../wlwmanifest.xml"> 
<meta name="generator" content="WordPress 5.2.5">
<link rel="shortlink" href="https://barriofit.site/">
<link rel="alternate" type="application/json+oembed" >
<link rel="alternate" type="text/xml+oembed" >
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		




<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title></title>
<link rel="stylesheet" href="app.min.css">

<!--Favicon-->
<link href="favicon.ico" rel="icon" type="image/x-icon">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">

<style type="text/css">
	p, ul {
		margin-bottom: 15px;

	}

	ul, ol, li {
		padding: 0px;
		margin-left: 10px;
	}

	a
	{
		color: #111;
	}
	
	.dance {
		/*height: 90% !important;*/
	}
	
</style>





</head>

<body class="home page-template page-template-template-mainpage page-template-template-mainpage-php page page-id-5 wp-embed-responsive singular image-filters-enabled">

<section class="main">
	<header class="header header--fix">
		<div class="wrapper">
			<div class="header__content">
				<a href="" class="header__logo">
					<img src="logo.png" alt="Barrio">
				</a>
				<div class="header__navigation">
					
										<div class="header__contacts">
						<a href="tel:88172506038" class="header__contacts-phone">
							+7 8172 <strong>50-60-38</strong>						</a>
						<div class="header__contacts-address">ул. Благовещенская, 53</div>
					</div>
					<ul class="header__social">
						<li class="header__social-item">
							<a href="https://vk.com/barrio35" target="_blank" class="header__social-link">
								<img src="vk.svg" alt="">
							</a>
						</li>
						<li class="header__social-item">
							<a href="https://www.youtube.com/channel/UCGaeBhjEzBaAC0zfBktW9xg" target="_blank" class="header__social-link">
								<img src="yb.svg" alt="">
							</a>
						</li>
						<li class="header__social-item">
							<a href="https://www.instagram.com/barrio_35/" target="_blank" class="header__social-link">
								<img src="in.svg" alt="">
							</a>
						</li>
					</ul>
					<div class="burger">
						<div class="burger__item"></div>
					</div>
				</div>
			</div>
		</div>
	</header>	
	<div class="wrapper">
		<div class="main__content">
			<div class="main__container scroll">
				<div class="main__title">Клуб фитнеса и танцев с уникальной атмосферой и опытными наставниками</div>
				<!--<div class="main__text">Забронируйте для себя пробное занятие или безлимитную клубную карту на неделю занятий
				</div>-->
				<a href="#directions" class="button main--button">Посмотреть направления</a>
			</div>
		</div>
	</div>
	<iframe class="main__video" src="index_2.html" frameborder="0" allowfullscreen=""></iframe>
</section>
<section class="directions" id="directions">
	<div class="wrapper">
		<div class="directions__content content">
			<div class="title">Наши направления</div>
			<div class="title__description">
				<p>Выберите танцевальное или фитнес направление для себя под любые цели: похудеть, подтянуть фигуру, развить гибкость и многое другое</p>
			</div>
			<div class="directions__items">
									<div class="directions__item">
						<a  class="directions__item-body">
							<img src="gibkost.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Гибкое тело</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">СР и ВС 19:30 (Анна Елина)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="sila.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Фитнес-интенсив</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ВТ и ПТ 19:30 (Анна Елина)</div>
																
										<div class="directions__item-name">СР и ВС 20:30 (Анна Елина)</div>
																
										<div class="directions__item-name">ПН и ЧТ 18:30 (Дарья Александрова)</div>
																
										<div class="directions__item-name">СБ 11:00 (Дарья Александрова)</div>
																
										<div class="directions__item-name">ВС 16:30  (Анна Елина)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="spor4-1-1568x1044.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Калланетика</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ПН и ЧТ 17:30 (Дарья Александрова)</div>
																
										<div class="directions__item-name">ПН и ЧТ 19:30 (Дарья Александрова)</div>
																
										<div class="directions__item-name">СБ 10:00 (Дарья Александрова)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="yoga.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Йога</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ВТ и ПТ 09:00 (Анна Елина)</div>
																
										<div class="directions__item-name">ВС 17:30 (Анна Елина)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="pilates.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Пилатес</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ВТ и ПТ 18:30 (Анна Елина)</div>
																
										<div class="directions__item-name">ВТ и ПТ 20:30 (Анна Елина)</div>
																
										<div class="directions__item-name">СБ 12:00 (Дарья Александрова)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="spina.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Здоровая спина</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ВТ и ПТ 17:30 (Анна Елина)</div>
																
										<div class="directions__item-name">СР и ВС 18:30 (Анна Елина)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="dyql2ye1.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Ягодицы + пресс</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ПН и ЧТ 17:15 (Лена Ткаченко)</div>
																
										<div class="directions__item-name">ПН и ЧТ 19:00 (Лена Ткаченко)</div>
																
										<div class="directions__item-name">ПН и ЧТ 20:30 (Дарья Александрова)</div>
																
										<div class="directions__item-name">ВТ и ПТ 13:00 (Дарья Александрова)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="zhz.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Женский стиль: сальса, бачата</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ПН и ЧТ 18:00 (Лена Ткаченко)</div>
																
										<div class="directions__item-name">СР и ВС 19:00 (Елена Талашова)</div>
																
										<div class="directions__item-name">СР и ВС 20:00 (Елена Талашова)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
										<div class="directions__item">
						<a  class="directions__item-body">
							<img src="55_mini.jpg" alt="" class="directions__item-image">
							<div class="directions__item-description">
								<div class="directions__item-title">Леди стиль Латина 55+</div>
								<div class="directions__item-teachers">Расписание:</div>
																
										<div class="directions__item-name">ВС 18:00 (Елена Талашова)</div>
																
								<!--<div class="directions__item-teachers">Преподаватели:</div>
								<div class="directions__item-name">Анна Елина</div>-->
								<div class="directions__item-more">Подробнее</div>
							</div>
						</a>
					</div>
								</div>
		</div>
	</div>
</section>

<section class="callback" style="background-image: url(&quot;bg-2-1.jpg&quot;);">
	<div class="wrapper">
		<div class="callback__content content">
			<div class="callback__container">
				<div class="callback__description">
					<div class="callback__description-title">Не знаете с чего начать?</div>
					<div class="callback__description-text">
						<p><strong>Попробуйте любое направление за 100₽ —</strong><br>
Выберите направление для себя, проконсультируйтесь с заботливым менеджером и приходите попробовать!</p>
					</div>
										<div class="callback__description-price">
						Стоимость пробного занятия:
						<div class="callback__description-price-number">100₽</div>
					</div>
									</div>
				<form action="https://barriofit.site/" class="callback__form" id="dance__form" method="post">
					<input type="hidden" name="hidden_data" id="hidden_data" value="Форма на главной странице">
					<input type="hidden" name="targetID" id="targetID" value="HOMEPAGE_FORM">
					<div class="callback__form-title">Забронируйте себе место в группе</div>
					<div class="callback__form-text">Менеджер перезвонит вам и запишет на занятия</div>
					<input type="text" class="callback__form-input" id="dance__form-input--name" placeholder="Ваше имя" value="">
					<input type="text" class="callback__form-input" id="dance__form-input--phone" placeholder="+7 (___) ___-__-__" value="">
					<button class="button callback__form--button">Позвоните мне</button>
					<div class="callback__form-description">Нажимая на кнопку, вы даете согласие на обработку персональных
						данных и соглашаетесь c <a target="_blank" href="https://drive.google.com/file/d/0B0Z_v5ZxQ-gQU0dxaTd3RmNKa2M/view">политикой
							конфиденциальности</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<section class="teachers" id="teachers">
	<div class="wrapper">
		<div class="teachers__content content">
			<div class="title">Наши тренеры</div>
			<div class="title__description"><p>Команда профессиональных инструкторов-единомышленников, увлеченных своей работой!</p>
</div>
			<div class="teachers__items">
									<div class="teachers__item">
						<a  class="teachers__item-body">
							<img src="mari.jpg" alt="" class="teachers__item-image">
							<div class="teachers__item-description">
								<div class="teachers__item-name">Мари Шевелева</div>
								<div class="teachers__item-title">ЖЕНСКИЙ СТИЛЬ: САЛЬСА, БАЧАТА, КИЗОМБА, РЕГГЕТОН</div>
								<div class="teachers__item-text">«На занятиях я люблю сочетать яркость и веселье с методичностью и строгостью. Для меня самое важное - научить вас выражать себя, исходя из своей ЖЕНСКОЙ природы, быть грациозной, пластичной и ведомой!»
								</div>
								<div class="teachers__item-more">Подробнее</div>
							</div>
						</a>
					</div>
									<div class="teachers__item">
						<a  class="teachers__item-body">
							<img src="talashova.jpg" alt="" class="teachers__item-image">
							<div class="teachers__item-description">
								<div class="teachers__item-name">Елена Талашова</div>
								<div class="teachers__item-title">ЖЕНСКИЙ СТИЛЬ: САЛЬСА, БАЧАТА, ЛЕДИ СТИЛЬ 55+</div>
								<div class="teachers__item-text">«На занятиях, я раскрою все грани вашей привлекательности и женственности. Мы разберем все тонкости сальсы и бачаты и, конечно же, весело и продуктивно проведем время!»
								</div>
								<div class="teachers__item-more">Подробнее</div>
							</div>
						</a>
					</div>
									<div class="teachers__item">
						<a  class="teachers__item-body">
							<img src="elina.jpg" alt="" class="teachers__item-image">
							<div class="teachers__item-description">
								<div class="teachers__item-name">Анна Елина</div>
								<div class="teachers__item-title">ПИЛАТЕС, ЙОГА, ФИТНЕС-ИНТЕНСИВ, ЗДОРОВАЯ СПИНА, ГИБКОЕ ТЕЛО</div>
								<div class="teachers__item-text">«Если клиент пришел ко мне, значит я буду максимально вкладывать в него свои способности, знания и желание для достижения результата»
								</div>
								<div class="teachers__item-more">Подробнее</div>
							</div>
						</a>
					</div>
									<div class="teachers__item">
						<a  class="teachers__item-body">
							<img src="tkachenko.jpg" alt="" class="teachers__item-image">
							<div class="teachers__item-description">
								<div class="teachers__item-name">Елена Ткаченко</div>
								<div class="teachers__item-title">ЖЕНСКИЙ СТИЛЬ: САЛЬСА, БАЧАТА,  ЯГОДИЦЫ+ПРЕСС</div>
								<div class="teachers__item-text">«В самом начале Вам не будет легко, но упорство и терпение дают необычайные результаты. Ваши движения станут грациознее, а тело пластичнее. Выносливость и подтянутые мышцы - приятный бонус для себя любимой:)»
								</div>
								<div class="teachers__item-more">Подробнее</div>
							</div>
						</a>
					</div>
									<div class="teachers__item">
						<a  class="teachers__item-body">
							<img src="h6JIFWdvHAA.jpg" alt="" class="teachers__item-image">
							<div class="teachers__item-description">
								<div class="teachers__item-name">Дарья Александрова</div>
								<div class="teachers__item-title">ФИТНЕС-ИНТЕНСИВ, КАЛЛАНЕТИКА, ЯГОДИЦЫ+ПРЕСС, ПИЛАТЕС</div>
								<div class="teachers__item-text">«Провожу тренировки с заботой о клиенте. Самая важная работа - это работа над собой! Под моим наставничеством стройность придёт вместе с системностью и не заставит себя ждать! »
								</div>
								<div class="teachers__item-more">Подробнее</div>
							</div>
						</a>
					</div>
													<div class="teachers__item">
						<div class="teachers__item-body">
							<img src="comanda.jpg" alt="" class="teachers__item-image">
							<div class="teachers__item-description">
								<div class="teachers__item-name">Стань частью сильной команды</div>
								<div class="teachers__item-text"><p>Нам всегда нужны талантливые инструкторы, которые горят своим делом и готовы воплощать самые смелые идеи. Хочешь к нам? </p>
<p><strong>Пиши!</strong> <a href="mailto:danza35@ya.ru">danza35@ya.ru</a><br><strong>Звони!</strong> <a href="tel:88172506038">50-60-38</a></p>
								</div>
							</div>
						</div>
					</div>
							</div>
		</div>
	</div>
</section>
<section class="timetable" id="timetable">
	<div class="wrapper">
		<div class="timetable__content">
			<div class="timetable__tabs">
				<div class="title">Расписание</div>
				<div class="timetable__tabs-items">
					<div class="timetable__tabs-item is-active" data-open="timetable__tabs-content--light">Светлый зал</div>
					<div class="timetable__tabs-item" data-open="timetable__tabs-content--dark">Темный зал</div>
				</div>
				
								
				
				<div class="timetable__tabs-contents">
					
					<!-- Расписание на дневное время хранится в файле timetable_time_archive.php Светлый зал вставлять сюда -->
					<!-- Светлый. Дневное время -->
					<div class="timetable__tabs-content timetable__tabs-content--light is-active">
						
						<div class="timetable__times"> 
							
																<div class="timetable__time timetable__time--strong">09:00</div>
																		<div class="timetable__time">09:30</div>
																		<div class="timetable__time timetable__time--strong">10:00</div>
																		<div class="timetable__time">10:30</div>
																		<div class="timetable__time timetable__time--strong">11:00</div>
																		<div class="timetable__time">11:30</div>
																		<div class="timetable__time timetable__time--strong">12:00</div>
																		<div class="timetable__time">12:30</div>
																		<div class="timetable__time timetable__time--strong">13:00</div>
																		<div class="timetable__time">13:30</div>
																		<div class="timetable__time timetable__time--strong">14:00</div>
																		<div class="timetable__time">14:30</div>
																		<div class="timetable__time timetable__time--strong">15:00</div>
																		<div class="timetable__time">15:30</div>
																		<div class="timetable__time timetable__time--strong">16:00</div>
																		<div class="timetable__time">16:30</div>
																		<div class="timetable__time timetable__time--strong">17:00</div>
																		<div class="timetable__time">17:30</div>
																		<div class="timetable__time timetable__time--strong">18:00</div>
																		<div class="timetable__time">18:30</div>
																		<div class="timetable__time timetable__time--strong">19:00</div>
																		<div class="timetable__time">19:30</div>
																		<div class="timetable__time timetable__time--strong">20:00</div>
																		<div class="timetable__time">20:30</div>
															</div>
						<div class="timetable__table">
							<div class="timetable__table-tabs">
								<div class="timetable__table-tab is-active" data-open="monday--light">
									<div class="timetable__table-tab-title">ПН</div>
								</div>
								<div class="timetable__table-tab" data-open="tuesday--light">
									<div class="timetable__table-tab-title">ВТ</div>
								</div>
								<div class="timetable__table-tab" data-open="wednesday--light">
									<div class="timetable__table-tab-title">СР</div>
								</div>
								<div class="timetable__table-tab" data-open="thursday--light">
									<div class="timetable__table-tab-title">ЧТ</div>
								</div>
								<div class="timetable__table-tab" data-open="friday--light">
									<div class="timetable__table-tab-title">ПТ</div>
								</div>
								<div class="timetable__table-tab" data-open="saturday--light">
									<div class="timetable__table-tab-title">СБ</div>
								</div>
								<div class="timetable__table-tab" data-open="sunday--воlight">
									<div class="timetable__table-tab-title">ВС</div>
								</div>
							</div>
							<div class="timetable__columns">
								<!--
										<div class="timetable__cell-container timetable__cell-container--green"> 
											<div class="timetable__cell-time">18:00</div>
											<div class="timetable__cell-name">Женский стиль</div>
											<div class="timetable__cell-teacher">Елена Ткаченко</div>
										</div>
										
										timetable__cell-container--middle на 30 минут
							-->
							
								<div class="timetable__column monday--light is-active"> <!--Понедельник-->
									
																			<div class="timetable__cell 0900">
																					</div>
																				<div class="timetable__cell 1000">
																					</div>
																				<div class="timetable__cell 1100">
																					</div>
																				<div class="timetable__cell 1200">
																					</div>
																				<div class="timetable__cell 1300">
																					</div>
																				<div class="timetable__cell 1400">
																					</div>
																				<div class="timetable__cell 1500">
																					</div>
																				<div class="timetable__cell 1600">
																					</div>
																				<div class="timetable__cell 1700">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">17:30</div>
															<div class="timetable__cell-name">Калланетика</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">18:30</div>
															<div class="timetable__cell-name">Фитнес-интенсив</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">19:30</div>
															<div class="timetable__cell-name">Калланетика</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">20:30</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																			
									
									
								</div>
								<div class="timetable__column tuesday--light"> <!--Вторник-->
									
																			<div class="timetable__cell 0900">
																									<div class="timetable__cell-container " style="background-color: #d4e157"> 
															<div class="timetable__cell-time">09:00</div>
															<div class="timetable__cell-name">Йога</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1000">
																					</div>
																				<div class="timetable__cell 1100">
																					</div>
																				<div class="timetable__cell 1200">
																					</div>
																				<div class="timetable__cell 1300">
																									<div class="timetable__cell-container " style="background-color: #ffca28"> 
															<div class="timetable__cell-time">13:00</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1400">
																					</div>
																				<div class="timetable__cell 1500">
																					</div>
																				<div class="timetable__cell 1600">
																					</div>
																				<div class="timetable__cell 1700">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">17:30</div>
															<div class="timetable__cell-name">Здоровая спина</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">18:30</div>
															<div class="timetable__cell-name">Пилатес</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">19:30</div>
															<div class="timetable__cell-name">Фитнес-интенсив</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">20:30</div>
															<div class="timetable__cell-name">Пилатес</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																			
								</div>
								<div class="timetable__column wednesday--light"> <!--Среда-->
																			<div class="timetable__cell 0900">
																					</div>
																				<div class="timetable__cell 1000">
																					</div>
																				<div class="timetable__cell 1100">
																					</div>
																				<div class="timetable__cell 1200">
																					</div>
																				<div class="timetable__cell 1300">
																					</div>
																				<div class="timetable__cell 1400">
																					</div>
																				<div class="timetable__cell 1500">
																					</div>
																				<div class="timetable__cell 1600">
																					</div>
																				<div class="timetable__cell 1700">
																					</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">18:30</div>
															<div class="timetable__cell-name">Здоровая спина</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">19:30</div>
															<div class="timetable__cell-name">Гибкое тело</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">20:30</div>
															<div class="timetable__cell-name">Фитнес-интенсив</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column thursday--light"> <!--Четверг-->
																			<div class="timetable__cell 0900">
																					</div>
																				<div class="timetable__cell 1000">
																					</div>
																				<div class="timetable__cell 1100">
																					</div>
																				<div class="timetable__cell 1200">
																					</div>
																				<div class="timetable__cell 1300">
																					</div>
																				<div class="timetable__cell 1400">
																					</div>
																				<div class="timetable__cell 1500">
																					</div>
																				<div class="timetable__cell 1600">
																					</div>
																				<div class="timetable__cell 1700">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">17:30</div>
															<div class="timetable__cell-name">Калланетика</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">18:30</div>
															<div class="timetable__cell-name">Фитнес-интенсив</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">19:30</div>
															<div class="timetable__cell-name">Калланетика</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">20:30</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column friday--light"> <!--Пятница-->
																			<div class="timetable__cell 0900">
																									<div class="timetable__cell-container " style="background-color: #d4e157"> 
															<div class="timetable__cell-time">09:00</div>
															<div class="timetable__cell-name">Йога</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1000">
																					</div>
																				<div class="timetable__cell 1100">
																					</div>
																				<div class="timetable__cell 1200">
																					</div>
																				<div class="timetable__cell 1300">
																									<div class="timetable__cell-container " style="background-color: #ffca28"> 
															<div class="timetable__cell-time">13:00</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1400">
																					</div>
																				<div class="timetable__cell 1500">
																					</div>
																				<div class="timetable__cell 1600">
																					</div>
																				<div class="timetable__cell 1700">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">17:30</div>
															<div class="timetable__cell-name">Здоровая спина</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">18:30</div>
															<div class="timetable__cell-name">Пилатес</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">19:30</div>
															<div class="timetable__cell-name">Фитнес-интенсив</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">20:30</div>
															<div class="timetable__cell-name">Пилатес</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column saturday--light"> <!--Суббота-->
																			<div class="timetable__cell 0900">
																					</div>
																				<div class="timetable__cell 1000">
																									<div class="timetable__cell-container " style="background-color: #d4e157"> 
															<div class="timetable__cell-time">10:00</div>
															<div class="timetable__cell-name">Калланетика</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1100">
																									<div class="timetable__cell-container " style="background-color: #ffca28"> 
															<div class="timetable__cell-time">11:00</div>
															<div class="timetable__cell-name">Фитнес-интенсив</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1200">
																									<div class="timetable__cell-container " style="background-color: #d4e157"> 
															<div class="timetable__cell-time">12:00</div>
															<div class="timetable__cell-name">Пилатес</div>
																															<div class="timetable__cell-teacher">Дарья Александрова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1300">
																					</div>
																				<div class="timetable__cell 1400">
																					</div>
																				<div class="timetable__cell 1500">
																					</div>
																				<div class="timetable__cell 1600">
																					</div>
																				<div class="timetable__cell 1700">
																					</div>
																				<div class="timetable__cell 1800">
																					</div>
																				<div class="timetable__cell 1900">
																					</div>
																				<div class="timetable__cell 2000">
																					</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column sunday--light"> <!--Воскресенье-->
																			<div class="timetable__cell 0900">
																					</div>
																				<div class="timetable__cell 1000">
																					</div>
																				<div class="timetable__cell 1100">
																					</div>
																				<div class="timetable__cell 1200">
																					</div>
																				<div class="timetable__cell 1300">
																					</div>
																				<div class="timetable__cell 1400">
																					</div>
																				<div class="timetable__cell 1500">
																					</div>
																				<div class="timetable__cell 1600">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">16:30</div>
															<div class="timetable__cell-name">Фитнес-интенсив (группа выходного дня)</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1700">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">17:30</div>
															<div class="timetable__cell-name">Йога (группа выходного дня)</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">18:30</div>
															<div class="timetable__cell-name">Здоровая спина</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #d4e157"> 
															<div class="timetable__cell-time">19:30</div>
															<div class="timetable__cell-name">Гибкое тело</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container timetable__cell-container--middle" style="background-color: #ffca28"> 
															<div class="timetable__cell-time">20:30</div>
															<div class="timetable__cell-name">Фитнес-интенсив</div>
																															<div class="timetable__cell-teacher">Анна Елина</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
							</div>
						</div>
					</div>
					
					
					<!-- Расписание на дневное время хранится в файле timetable_time_archive.php Темный зал вставлять сюда -->
					
					<!-- Темный. Вечернее время -->
					<div class="timetable__tabs-content timetable__tabs-content--dark">
						<div class="timetable__times">
																<div class="timetable__time timetable__time--strong">17:00</div>
																		<div class="timetable__time">17:30</div>
																		<div class="timetable__time timetable__time--strong">18:00</div>
																		<div class="timetable__time">18:30</div>
																		<div class="timetable__time timetable__time--strong">19:00</div>
																		<div class="timetable__time">19:30</div>
																		<div class="timetable__time timetable__time--strong">20:00</div>
																		<div class="timetable__time">20:30</div>
															</div>
						<div class="timetable__table">
							<div class="timetable__table-tabs">
								<div class="timetable__table-tab is-active" data-open="monday--dark">
									<div class="timetable__table-tab-title">ПН</div>
								</div>
								<div class="timetable__table-tab" data-open="tuesday--dark">
									<div class="timetable__table-tab-title">ВТ</div>
								</div>
								<div class="timetable__table-tab" data-open="wednesday--dark">
									<div class="timetable__table-tab-title">СР</div>
								</div>
								<div class="timetable__table-tab" data-open="thursday--dark">
									<div class="timetable__table-tab-title">ЧТ</div>
								</div>
								<div class="timetable__table-tab" data-open="friday--dark">
									<div class="timetable__table-tab-title">ПТ</div>
								</div>
								<div class="timetable__table-tab" data-open="saturday--dark">
									<div class="timetable__table-tab-title">СБ</div>
								</div>
								<div class="timetable__table-tab" data-open="sunday--dark">
									<div class="timetable__table-tab-title">ВС</div>
								</div>
							</div>
							<div class="timetable__columns">
								<div class="timetable__column is-active monday--dark"> <!-- Понедельник -->
																			<div class="timetable__cell 1700">
																									<div class="timetable__cell-container " style="background-color: #ffca28"> 
															<div class="timetable__cell-time">17:15</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Елена Ткаченко</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container " style="background-color: #d6a2e5"> 
															<div class="timetable__cell-time">18:00</div>
															<div class="timetable__cell-name">Женский стиль: сальса, бачата</div>
																															<div class="timetable__cell-teacher">Елена Ткаченко</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container " style="background-color: #ffca28"> 
															<div class="timetable__cell-time">19:00</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Елена Ткаченко</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																					</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column tuesday--dark">  <!-- Вторник -->
																			<div class="timetable__cell 1700">
																					</div>
																				<div class="timetable__cell 1800">
																					</div>
																				<div class="timetable__cell 1900">
																					</div>
																				<div class="timetable__cell 2000">
																					</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column wednesday--dark">  <!-- Среда -->
																			<div class="timetable__cell 1700">
																					</div>
																				<div class="timetable__cell 1800">
																					</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container " style="background-color: #d6a2e5"> 
															<div class="timetable__cell-time">19:00</div>
															<div class="timetable__cell-name">Женский стиль: сальса, бачата</div>
																															<div class="timetable__cell-teacher">Елена Талашова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container " style="background-color: #d6a2e5"> 
															<div class="timetable__cell-time">20:00</div>
															<div class="timetable__cell-name">Женский стиль: сальса, бачата</div>
																															<div class="timetable__cell-teacher">Елена Талашова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column thursday--dark">  <!-- Четверг -->
																			<div class="timetable__cell 1700">
																									<div class="timetable__cell-container " style="background-color: #ffca28"> 
															<div class="timetable__cell-time">17:15</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Елена Ткаченко</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container " style="background-color: #d6a2e5"> 
															<div class="timetable__cell-time">18:00</div>
															<div class="timetable__cell-name">Женский стиль: сальса, бачата</div>
																															<div class="timetable__cell-teacher">Елена Ткаченко</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container " style="background-color: #ffca28"> 
															<div class="timetable__cell-time">19:00</div>
															<div class="timetable__cell-name">Ягодицы + пресс</div>
																															<div class="timetable__cell-teacher">Елена Ткаченко</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																					</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column friday--dark">  <!-- Пятница -->
																			<div class="timetable__cell 1700">
																					</div>
																				<div class="timetable__cell 1800">
																					</div>
																				<div class="timetable__cell 1900">
																					</div>
																				<div class="timetable__cell 2000">
																					</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column saturday--dark">  <!-- Суббота -->
																			<div class="timetable__cell 1700">
																					</div>
																				<div class="timetable__cell 1800">
																					</div>
																				<div class="timetable__cell 1900">
																					</div>
																				<div class="timetable__cell 2000">
																					</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
								<div class="timetable__column sunday--dark">  <!-- Воскресенье -->
																			<div class="timetable__cell 1700">
																					</div>
																				<div class="timetable__cell 1800">
																									<div class="timetable__cell-container " style="background-color: #d6a2e5"> 
															<div class="timetable__cell-time">18:00</div>
															<div class="timetable__cell-name">Леди стиль Латина 55+</div>
																															<div class="timetable__cell-teacher">Елена Талашова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 1900">
																									<div class="timetable__cell-container " style="background-color: #d6a2e5"> 
															<div class="timetable__cell-time">19:00</div>
															<div class="timetable__cell-name">Женский стиль: сальса, бачата</div>
																															<div class="timetable__cell-teacher">Елена Талашова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2000">
																									<div class="timetable__cell-container " style="background-color: #d6a2e5"> 
															<div class="timetable__cell-time">20:00</div>
															<div class="timetable__cell-name">Женский стиль: сальса, бачата</div>
																															<div class="timetable__cell-teacher">Елена Талашова</div>
																														
														</div>
																								</div>
																				<div class="timetable__cell 2100">
																					</div>
																		</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="cards" id="cards">
	<div class="wrapper">
		<div class="cards__content content">
			<div class="title" style="text-align: left">Клубные карты</div>
			<div class="title__description" style="text-align: left; margin: 20px 0px;">
				<p>Для постоянных клиентов мы делаем приятные скидки.<br>
Для новых клиентов есть удобные абонементы для выбора направлений</p>
			</div>
			<div class="cards__table">
				<div class="cards__items">
					<div class="cards__item">
						<div class="cards__item-title">Клубная карта</div>
					</div>
					<div class="cards__item">
						<div class="cards__item-title">Стоимость</div>
					</div>
					<div class="cards__item">
						<div class="cards__item-title">Стоимость со скидкой</div>
					</div>
				</div>
										<div class="cards__items ">
							<div class="cards__item">
								<div class="cards__item-name">Первое посещение клуба</div>
								<div class="cards__item-description">Для новых клиентов</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">100₽</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price"></div>
							</div>
						</div>
												<div class="cards__items ">
							<div class="cards__item">
								<div class="cards__item-name">Разработка индивидуального плана здорового питания</div>
								<div class="cards__item-description">Питайтесь правильно и худейте каждый день!</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">1000₽</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price"></div>
							</div>
						</div>
												<div class="cards__items ">
							<div class="cards__item">
								<div class="cards__item-name">На 4 посещения</div>
								<div class="cards__item-description">Действует 2 недели</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">1200₽</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">1100₽</div>
							</div>
						</div>
												<div class="cards__items cards__items--yellow">
							<div class="cards__item">
								<div class="cards__item-name">На 8 посещений</div>
								<div class="cards__item-description">Действует 4 недели в 1 группу</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">2000₽</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">1800₽</div>
							</div>
						</div>
												<div class="cards__items ">
							<div class="cards__item">
								<div class="cards__item-name">На 12 посещений</div>
								<div class="cards__item-description"><!-- wp:paragraph -->
<p>Действует 4 недели в 2 группы</p>
<!-- /wp:paragraph --></div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">2700₽</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">2500₽</div>
							</div>
						</div>
												<div class="cards__items ">
							<div class="cards__item">
								<div class="cards__item-name">На 16 посещений</div>
								<div class="cards__item-description"><!-- wp:paragraph -->
<p>Действует 4 недели в 2 группы</p>
<!-- /wp:paragraph --></div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">3400₽</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">3200₽</div>
							</div>
						</div>
												<div class="cards__items ">
							<div class="cards__item">
								<div class="cards__item-name">Разовое посещение</div>
								<div class="cards__item-description"><!-- wp:paragraph -->
<p>1 день</p>
<!-- /wp:paragraph --></div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price">350₽</div>
							</div>
							<div class="cards__item">
								<div class="cards__item-price"></div>
							</div>
						</div>
									</div>
			<div class="cards__description">
				<strong>Условия получения скидки:</strong>
				— При покупке первой клубной карты в день первого посещения или при покупке новой клубной карты не позднее даты окончания текущей карты<br>— Приобретенная карта начинает действовать сразу же после предыдущей карты<br>			</div>
			<div class="cards__buttons">
				<!--<a href="#" class="button cards__buttons--button">Узнать о наличии мест в группах</a>-->
				<a href="https://drive.google.com/open?id=1oVb49klKQMKezXLuC5oktsDVrb0IzkSmj03hA_LVjd8" target="_blank" class="cards__buttons-button">Правила покупки клубных карт</a>
			</div>
		</div>
	</div>
</section>
<section class="advantages" style="background-image: url(&quot;bg-3-1.jpg&quot;)">
	<div class="wrapper">
		<div class="advantages__content">
			<div class="title">Мы любим заботиться о вас</div>
			<div class="advantages__items">
								<div class="advantages__item">
					<img src="ico1-1.png" alt="" class="advantages__item-icon">
					<div class="advantages__item-title">Удобные красивые залы</div>
					<div class="advantages__item-text">
						В центре города, с теплыми полами и кондиционерами					</div>
				</div>
								<div class="advantages__item">
					<img src="ico2-1.png" alt="" class="advantages__item-icon">
					<div class="advantages__item-title">Комфортные раздевалки</div>
					<div class="advantages__item-text">
						С индивидуальными шкафчиками и душевыми					</div>
				</div>
								<div class="advantages__item">
					<img src="ico3-1.png" alt="" class="advantages__item-icon">
					<div class="advantages__item-title">Хороший сервис</div>
					<div class="advantages__item-text">
						Бесплатная питьевая вода и быстрый Wi-Fi					</div>
				</div>
							</div>
		</div>
	</div>
</section>
<section class="meet">
	<div class="wrapper">
		<div class="meet__content content">
			<div class="title">Давайте знакомиться</div>
			<div class="title__description">Посмотрите короткое видео о нас			</div>
			<iframe class="meet__video" src="index_3.html" frameborder="0" allowfullscreen=""></iframe>
		</div>
	</div>
</section>
<section class="gallery">
	<div class="wrapper">
		<div class="gallery__content content">
			<div class="title">А вот как мы тусим:</div>
		</div>
	</div>
	<div class="gallery__items">
				<a href="../1-1.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="1-1.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../2.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="2.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../3.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="3.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../4.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="4.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../5.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="5.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../6.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="6.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../7.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="7.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../8.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="8.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../9.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="9.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../10.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="10.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../11.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="11.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../12.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="12.jpg" class="gallery__item-image" alt="">
		</a>
				<div class="gallery__item-hidden">
				<a href="../13.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="13.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../14.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="14.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../15.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="15.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../16.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="16.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../17.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="17.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../18.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="18.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../19.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="19.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../20.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="20.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../21.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="21.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../22.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="22.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../23.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="23.jpg" class="gallery__item-image" alt="">
		</a>
				<a href="../24.jpg" class="gallery__item" data-lightbox="example-1">
			<img src="24.jpg" class="gallery__item-image" alt="">
		</a>
				
		</div>
	</div>
	<button class="gallery__button">Показать еще фото</button>
</section>
<section class="feedback">
	<div class="wrapper">
		<div class="feedback__content content">
			<div class="title">Наши клиенты о нас</div>
			<div class="feedback__items">
								<div class="feedback__item feedback__item--left">
					<div class="feedback__item-inner">
						<img src="f1-1.jpg" class="feedback__item-photo" alt="">
					</div>
					<div class="feedback__item-container">
						<div class="feedback__item-name">Лана Баринова</div>
						<div class="feedback__item-full">Полный отзыв в
							<a href="https://vk.com/topic-73621030_35306644?post=1170" target="_blank" class="feedback__item-full-link">ВК</a>
							<div class="feedback__item-comment">
								Я больше года хожу в BARRIO и круче места в городе, я не знаю!!! В студии настолько погружаешся в кубинскую культуру и танцы, что забываешь обо всем на свете и не хочется уходить оттуда... наикрутейшие преподы не дадут вам скучать на занятиях и вне их! В студии есть много танцевальных направлении, которые вы сможете выбрать по душе. Какое бы направление, вы, не выбрали, преподаватели помогут вам раскрыть свою женственность и грациозность... привести свое тело в порядок и мысли тоже. Я, Благодарю студию BARRIO за возможность танцевать!!! Я Люблю Вас!							</div>
						</div>
					</div>
				</div>
								<div class="feedback__item feedback__item--right">
					<div class="feedback__item-inner">
						<img src="KWNQXMQlUBM.jpg" class="feedback__item-photo" alt="">
					</div>
					<div class="feedback__item-container">
						<div class="feedback__item-name">Екатерина Ципилёва</div>
						<div class="feedback__item-full">Полный отзыв в
							<a href="https://vk.com/topic-73621030_35306644?post=1172" target="_blank" class="feedback__item-full-link">ВК</a>
							<div class="feedback__item-comment">
								Ура! Я нашла свое направление! Ни пилатес, ни железки в зале не дают такого наслаждения как растяжка. Я с нетерпением жду понедельники и четверги, после тренировок чувствую приятную усталость, мягкость и гибкость в теле. Я мечтаю сесть на шпагат, довести до идеала мостик, а еще на берегу моря слушать волны в позе лебедя. Спасибо Наташе Новожиловой за помощь в воплощении моей мечты. А арт-клуб BARRIO - самое красивое, уютное и доброжелательное место в городе. Подумываю заняться еще танцами Всем девушкам советую развивать в себе женские качества растяжка, танцы! Вперед!!!							</div>
						</div>
					</div>
				</div>
								<div class="feedback__item feedback__item--left">
					<div class="feedback__item-inner">
						<img src="faFbqE9E48.jpg" class="feedback__item-photo" alt="">
					</div>
					<div class="feedback__item-container">
						<div class="feedback__item-name">Ann Pavlova</div>
						<div class="feedback__item-full">Полный отзыв в
							<a href="https://vk.com/topic-73621030_35306644?post=1169" target="_blank" class="feedback__item-full-link">ВК</a>
							<div class="feedback__item-comment">
								Очень давно хотела попробовать себя в таких направлениях как сальса и бачата! Пришла в Баррио на первое пробное занятие к Елене Талашовой! И что вы думаете? Когда занятие закончилось, у меня было полное ощущение, что прошло всего 5 минут!!! Я настолько погрузилась в танцы, абстрагировалась от внешнего мира, мыслей о работе и прочих тяготящих мозг и нервную систему вещах, что не заметила, как и занятие уже прошло и, не задумываясь, сразу купила абонемент! Уроки танцев у Елены не просто раскрепощают, но еще и расслабляют эмоционально! Как уже многие выше подметили, огромное ощущение легкости после занятия, лёгкости физической и эмоциональной! Дорогие друзья, кто еще сомневается - не сомневайтесь!!!))) На первых занятиях я чувствовала себя бревном, к 7 занятию я уже чувствую большой прогресс! Вы научитесь не только танцевать, но и сможете расслабиться эмоционально , что очень немаловажно при нынешнем быстром и напряженном темпе нашей жизни							</div>
						</div>
					</div>
				</div>
								<div class="feedback__item feedback__item--right">
					<div class="feedback__item-inner">
						<img src="an_DfHMvWwU.jpg" class="feedback__item-photo" alt="">
					</div>
					<div class="feedback__item-container">
						<div class="feedback__item-name">Римма Петрова</div>
						<div class="feedback__item-full">Полный отзыв в
							<a href="https://vk.com/topic-73621030_35306644?post=1178" target="_blank" class="feedback__item-full-link">ВК</a>
							<div class="feedback__item-comment">
								Я неоднократно пыталась найти место, где могла бы вновь ощутить летнюю беззаботность и безоблачность – но раз за разом меня преследовали неудачи, грозовое небо сгущалось надо мной, ни зумба, ни веселенький фитнес не могли развеселить меня. Я чувствовала приближение старости. Пока не случилось чудное – через пять с лишним лет я совершенно случайно нашла тлф клуба Barrio и приятный мужской голос из трубки сообщил мне, что, взяв с собой кроссовки и форму, я могу прийти к Мари на занятия Lady style. Первое занятие было незабываемым! Мари очаровывает с первых же секунд, увлекает за собой в солнце и воздух Кубы. Мари творит магию, клубящуюся вокруг нее в чувственном, полном жизни и энергии танце. Как педагог Мари вызывает чувство только искреннего восхищения, а как человек просто завораживает)) Мари умеет раскрепостить зажатых женщин северного провинциального города Мари умеет вести за собой – и за ней хочется идти) Мари обладает удивительно милым и лукавым чувством юмора)) Наверное, было бы логично вылепить фигурку Мари и соорудить алтарь ее имени – но все никак не доходят руки (( через две недели отпуск – займусь :D							</div>
						</div>
					</div>
				</div>
								<div class="feedback__item feedback__item--left">
					<div class="feedback__item-inner">
						<img src="syQVe88tts.jpg" class="feedback__item-photo" alt="">
					</div>
					<div class="feedback__item-container">
						<div class="feedback__item-name">Людмила Рубцова</div>
						<div class="feedback__item-full">Полный отзыв в
							<a href="https://vk.com/topic-73621030_35306644?post=1176" target="_blank" class="feedback__item-full-link">ВК</a>
							<div class="feedback__item-comment">
								Хожу на женский стиль к Мари всего каких-то три месяца. У нее затанцует любое дерево)) Занятия зажигательные, проходит час, а кажется минут десять. В тоже время Мари достаточно строгая, внимательно и относится к проработке всех деталей и "фишечек", что для девочек в танцах очень важно). А вообще Barrio клевое атмосферное место.							</div>
						</div>
					</div>
				</div>
							</div>
			<a href="https://vk.com/topic-73621030_35306644" target="_blank" class="feedback__button">Посмотреть все отзывы в ВК</a>
		</div>
	</div>
</section>


<section class="contacts" id="link_contacts">
	<div class="wrapper">
		<div class="contacts__content content">
			<div class="contacts__items">
								<div class="contacts__item">
										<div class="contacts__item-title">Клуб фитнеса и танцев BARRIO</div>
															<div class="contacts__item-text">
						<p>Вологда <br> ул. Благовещенская, 53</p>
					</div>
										
				</div>
								<div class="contacts__item">
										<div class="contacts__item-title">Контакты:</div>
																<p><a href="tel:88172506038" class="contacts__item-text">+7 8172 50-60-38</a><br>
					<a href="mailto:danza35@ya.ru" class="contacts__item-text contacts__item-text--link">danza35@ya.ru</a></p>
<div class="contacts__item-social">
						<a href="https://vk.com/barrio35" target="_blank" class="contacts__item-social-link"><br>
							<img src="vk-black.svg" alt=""><br>
						</a><br>
						<a href="https://www.youtube.com/channel/UCGaeBhjEzBaAC0zfBktW9xg" target="_blank" class="contacts__item-social-link"><br>
							<img src="yb-black.svg" alt=""><br>
						</a><br>
						<a href="https://www.instagram.com/barrio_35/" target="_blank" class="contacts__item-social-link"><br>
							<img src="in-black.svg" alt=""><br>
						</a>
					</div>
						
										
				</div>
								<div class="contacts__item">
															<div class="contacts__item-text">
						<p>Мы находимся в самом центре Вологды. Рядом с нами удобная парковка!</p>
					</div>
										
				</div>
							</div>
		</div>
	</div>
</section>








	
	


<iframe name="ym-native-frame" title="ym-native-frame" frameborder="0" aria-hidden="true" style="opacity: 0 !important; width: 0px !important; height: 0px !important; position: absolute !important; left: 100% !important; bottom: 100% !important; border: 0px !important;" src="index_1.html"></iframe><div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div><div id="lightbox" class="lightbox" style="display: none;"><div class="lb-outerContainer"><div class="lb-container"><img class="lb-image" src="2daeaa8b5f19f0bc209d976c02bd6acb51b00b0a.gif"><div class="lb-nav"><a class="lb-prev" href=""></a><a class="lb-next" href=""></a></div><div class="lb-loader"><a class="lb-cancel"></a></div></div></div><div class="lb-dataContainer"><div class="lb-data"><div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div><ym-measure class="ym-viewport" style="display: block; top: 0px; right: 0px; bottom: 0px; left: 0px; position: fixed; transform: translate(0px, -100%); transform-origin: 0px 0px;"></ym-measure><ym-measure class="ym-zoom" style="bottom: 100%; position: fixed; width: 100vw;"></ym-measure></body>
</html>