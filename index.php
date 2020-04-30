<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
	
	<title>Портативная клавиатура</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=480">

	<meta name="description" content="Лидер продаж! Тачпад беспроводная клавиатура 2.4 ГГц USB для Android TV Box/ПК/Smart TV Беспроводная клавиатура и мышь с сенсорной панелью">

	<link rel="shortcut icon" href="images/bayrix.png" type="image/x-icon">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/AvenirNextCyr.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

	<!--[if lt IE 9]>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<![endif]-->
<!-- Facebook Pixel Code -->
<!-- End Facebook Pixel Code -->



</head>
<body>
			<div class="main_wrapper">

			<!-- header 1 -->

			<header class="offer_section offer1">
			<div class="title_block">
				<h1 class="main_title">Full touchpad</h1>
				<p class="subtitle">Портативная мини-клавиатура</p>
			</div>
			<img class="offer_image" src="images/offer__image.jpg" alt="Full touchpad">
			<div content="height=60" class="price_block clearfix">
				<div class="price_item old">
					<div class="text">Обычная цена:</div>
					<div class="value">2500грн</div>
				</div>
				<div class="discount_block">
					<div class="text">акция</div>
					<div class="value">-65%</div>
				</div>
				<div class="price_item new">
					<div class="text">Цена сегодня:</div>
					<div class="value">875грн</div>
				</div>
			</div>
			<ul class="features">
			<h5>
				<li>Поддержка жестов</li>
				<li>Многофункцио- нальность</li>
				<li>Bluetooth-подключение</li>
				<li>Литийионная батарея</li>
				<li>Ультра тонкий дизайн</li>
				<li>Легкий вес</li>
				<li>Альтернатива джойстике</li>
			</h5>
			</ul>
			<div class="timer_block clearfix">
				<p>До конца акции осталось:</p>
				<div class="timer clearfix">
					<div class="timer_item">
						<div class="count hours"></div>
						<div class="text">часов</div>
					</div>
					<div class="timer_item">
						<div class="count minutes"></div>
						<div class="text">минут</div>
					</div>
					<div class="timer_item">
						<div class="count seconds"></div>
						<div class="text">секунд</div>
					</div>
				</div>
			</div>
			<a href="#order_form" class="button">Купить сейчас</a>
			<div class="products_count">* осталось <b>8</b> штук по акции</div>
		</header>

		<!-- /header 1 -->

		<!-- description -->

		<section class="description_section about_section">
			<h2 class="title">BAYRIX - беспроводная мини-клавиатура с сенсорной панелью</h2>
			<div class="video_block">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/MBol1sIR_kc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="text_block">
				<p>Мини-клавиатура, беспроводная, 2.4 ГГц, полный тачпад, контроллер, игровая воздушная мышь, совместима с ПК, ноутбуком, Mac OS, Linux, HTPC, IP TV, Google Android Smart TV, TV Box, XBMC, Windows 2000 XP/Vista/7/8/10</p>
				<p>
				<strong> ЛУЧШЕЕ УСТРОЙСТВО В ЛИНЕЙКЕ БЕСПРОВОДНЫХ КЛАВИАТУР<strong/>
				</p>
			</div>
			<div class="video_block">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/rNaTI0pcLPY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="text_block">
				<p>Беспроводная мини-клавиатура с сенсорной панелью может выполнять любую роль связанную не только с основным родом деятельности устройства, но и с многими другими, например, роль тачпада для магнитолы автомобиля и тд.</p>
			</div>
			<img src="images/description__image.jpg" alt="BAYRIX">
		</section>

		<!-- /description -->

		<!-- description -->

		<section class="description_section info_section">
			<h2 class="title">Дополните дизайн вашего интерьера с помощью BAYRIX</h2>
			<img src="images/info__image1.png" alt="BAYRIX">
			<div class="text_block">
				<h4>Простота и комфорт</h4>
				<p>Беспроводная клавиатура с лёгкостью заменяет обычную клавиатуру, компьютерную мышь и тачпад. Это универсальное, удобное и компактное средство для решения всех задач его владельца.</p>
			</div>
			<img src="images/info__image2.png" alt="BAYRIX">
			<div class="text_block">
				<h4>Интеллектуальное и легкое подключение</h4>
				<p>Возможность мгновенного начала работы сразу после подключения клавиатуры к устройству благодаря предварительной оптимизации работы со всеми вышеперечисленными операционными системами.</p>
			</div>
			<div class="text_block">
			<img src="images/info__image4.png" alt="BAYRIX">
				<p>Инновационная форма, портативная, элегантная. Вы можете использовать его для электронной почты, чата, дистанционного управления, ввода сообщений и игр. Используйте его с помощью Android TV BOX или SMART ТV на диване или просматривайте интернет в самой удобной позе.</p>
			</div>
			<img src="images/info__image3.png" alt="BAYRIX">
			<div class="text_block">
				<h4>Компактные размеры</h4>
				<p>Небольшие размеры данного устройства позволяют ему использоваться при любых обстоятельствах: домашние развлечения; мультимедийное образование в учебных заведениях; обучение, встречи, презентации, обьедання компьютерного дистанционново управления с обычным компьютерным управлением на роботе; автомобильный телевизор, HTPC, большой экран ТВ, Smart TV, жесткий диск плеер, сетевой плеер, X-BOX.</p>
			</div>
			<div class="text_block">
			<img src="images/info_image5.png" alt="BAYRIX">
				<h4>Касание во весь экран</h4>
				<p>Этот сенсорный экран полностью совместимый с жестами Windows 10. C другими же эксклюзивными жестами вы получите возможность быстрого доступа к другим малодоступным функциям Вашого устройства.</p>
			</div>
		</section>

		<!-- /description -->

		<!-- description -->

		<section class="description_section moments_section">
		
			<h2 class="title">Пожалуйста, обратите внимание</h2>
			<div class="text_block">
				<p align="justify">Для экономии энергии, тачпад войдет в режим сна, когда нет никакой работы в течение 3 минут или есть disconnecting wiselss (отключение/потеря беспроводной связи) в течение 10 секунд.</p>
				<p align="justify">Этот продукт может использоваться только при зарядке USB 2А, в противном случае, продукт может сгореть</p>
				<p align="justify">Примечание: когда 2 оранжевых светодиода светятся в то же время, то это означает, что тачпад находится в эксклюзивном состоянии жестов.</p>
			</div>
		</section>

		<!-- /description -->

		<!-- description -->

		<section class="description_section mobile_section">
			<h2 class="title">Полноценная QWERTY клавиатура</h2>
			<div class="text_block">
				<p>Используйте этот гаджет для легкого ввода текста, просмотра Интернета и воспроизведения игр с единой надежной и удобной клавиатурой.</p>
			</div>
			<div class="items_list">
				<div class="item">
					<img src="images/mobile__image1.jpg" alt="BAYRIX">
					<h3 align="center">Многозадачность</h3>
					<p align="justify">Сенсорные функции: включая движение мыши, левую кнопку мыши, кнопку правой мыши и колесо прокрутки мыши.</p>
					<p align="justify">Функция клавиатуры: функция виртуальной клавиатуры может поставлять ввод буквы.</p>
				</div>
				<div class="item">
					<img src="images/mobile__image2.jpg" alt="BAYRIX">
					<p align="justify">Жесты: Поддержка сенсорных жестов, как сенсорная панель в ноутбуке. Более того, он также поддерживает некоторые эксклюзивные жесты, позволяющие упростить общий контроль.</p>
				</div>
			</div>
		</section>

		<!-- /description -->

		<!-- characteristics -->

		<section class="char_section" content="width=440">
			<h2 class="title">Технические<br>характеристики</h2>
			<img src="images/char__image.jpg" alt="BAYRIX">
			<div class="characteristics_list1">
				<div class="characteristic_item">Порт подключения: с USB2.0 или выше.</div>
				<div class="characteristic_item">Режим передачи: GFSK 2,4 ГГц, до 10 м</div>
				<div class="characteristic_item">Частота передачи: 2400-2483 МГц (16 каналов)</div>
				<div class="characteristic_item">Мощность передачи: менее + 4bd</div>
				<div class="characteristic_item">Напряжение зарядки: 4,4 V-5,25 V</div>
				<div class="characteristic_item">Зарядный ток никель-металл: 300mA</div>
				<div class="characteristic_item">Рабочий ток: <15 мА (вибрация)</div>
				<div class="characteristic_item">Ток сна: <20uA</div>
				<div class="characteristic_item">Вес нетто: 118 г</div>
				<div class="characteristic_item">Размер: 143*89,5*18,5 мм</div>
			</div>
		</section>

		<!-- /characteristics -->

		<!-- description -->

		<section class="description_section components_section">
			<h2 class="title">Комплект поставки</h2>
			<img src="images/components__image.jpg" alt="BAYRIX">
		</section>

		<!-- /description -->
		
		<!-- reviews 3 -->
		<section class="reviews3_section">
		<h2 class="title">Лучшие отзывы покупателей</h2>
		<div class="reviews_stats_block">
		<p><b>97%</b> покупателей рекомендуют этот товар</p>
		<div class="line"></div>
		</div>
	<div class="reviews_list3 owl-carousel ">
	

				<div class="review_item">
					<div class="author_block clearfix">
					<img class="avatar" src="images/reviews__review1_avatar.jpg" alt="BAYRIX">
						<div class="author_info">
						<div class="name">Михаил Вороткин</div>
						<div class="text">38 лет</div>
						</div>
					</div>
					<div class="text_block">
						<p>Получил на днях долгожданную клавиатуру! Без сомнения один из лучших, которые я видел и пользовался. Тут и великолепное качество сборки и что самое главное, так это многофункциональное управление. Очень классная штука! Раньше подобным не пользовался, так что это в новинку.</p>
					</div>
				</div>

				<div class="review_item">
					<div class="author_block clearfix">
					<img class="avatar" src="images/reviews__review2_avatar.jpg" alt="BAYRIX">
						<div class="author_info">
						<div class="name">Андрей Золотухин</div>
						<div class="text">32 года</div>
						</div>
					</div>
					<div class="text_block">
					<p>Давно приглядывался к этой новинке. Внешний вид, характеристики – все было на высшем уровне, вот только останавливало то, что заказывать через интернет было боязно, а в обычных магазинах о таких товарах даже и не слышали. Через какое-то время увидел эту клавиатуру вновь	у знакомого. Соответственно, тот и посоветовал мне Ваш сайт. Мало того, что заказ дошел очень быстро, так ещё и все как в описание было. Прекрасный гаджет за свои деньги!</p>
					</div>
				</div>

							

				<div class="review_item">
					<div class="author_block clearfix">
					<img class="avatar" src="images/reviews__review3_avatar.jpg" alt="BAYRIX">
						<div class="author_info">
						<div class="name">Иван Быков</div>
						<div class="text">41 год</div>
						</div>
					</div>
					<div class="text_block">
					<p>Около двух месяцев назад получил клавиатуру в подарок от Вашого интернет-магазина. Сначала что-то руки не доходили его поставить. По итогу он пролежал около двух недель в коробке. Потом все-таки достал, установил на свой телевизор - все отлично! Самое главное, что мне нравится: Отличная замена всем пультам и даже некоторым джойстикам. За качество можно не переживать, все супер!</p>
					</div>
				</div>
					
	</div>
		</section>
		<!-- reviews 3 -->
		
		
		<!-- order steps 1 -->

		<section class="order_steps_section">
			<h2 class="title">Как заказать клавиатуру?</h2>
			<div class="order_steps_list1 clearfix">
				<div class="step_item">
					<h4>Заявка</h4>
					<p>Оставляете заявку на нашем сайте</p>
				</div>
				<div class="step_item">
					<h4>Звонок</h4>
					<p>Менеджер уточняет детали заказа</p>
				</div>
				<div class="step_item">
					<h4>Отправка</h4>
					<p>Доставляем заказ в течение 2-5 дней</p>
				</div>
				<div class="step_item">
					<h4>Получение</h4>
					<p>Оплачиваете при получении на почте</p>
				</div>
			</div>
		</section>

		<!-- /order steps 1 -->

		<!-- order 1 -->

		<section class="offer_section offer1">
			<div class="title_block">
				<h3 class="main_title">BAYRIX</h3>
				<p class="subtitle">Портативная клавиатура</p>
			</div>
			<img class="offer_image" src="images/offer__image.jpg" alt="BAYRIX">
			<div class="price_block clearfix">
				<div class="price_item old">
					<div class="text">Обычная цена:</div>
					<div class="value">2500грн</div>
				</div>
				<div class="discount_block">
					<div class="text">акция</div>
					<div class="value">-65%</div>
				</div>
				<div class="price_item new">
					<div class="text">Цена сегодня:</div>
					<div class="value">875грн</div>
				</div>
			</div>
			<div class="timer_block clearfix">
				<p>До конца акции осталось:</p>
				<div class="timer clearfix">
					<div class="timer_item">
						<div class="count hours"></div>
						<div class="text">часов</div>
					</div>
					<div class="timer_item">
						<div class="count minutes"></div>
						<div class="text">минут</div>
					</div>
					<div class="timer_item">
						<div class="count seconds"></div>
						<div class="text">секунд</div>
					</div>
				</div>
			</div>
			<form id="order_form" class="order_form" action="send.php"
			method="POST"
			name="order_form"
			>
			<input class="field" type="text" name="name" placeholder="Введите Ваше имя" required="">
			<input class="field" type="tel" name="phone" placeholder="Введите Ваш телефон" required="">
				<button class="button">Купить сейчас</button>
			<input type="hidden" name="l" value="">
			<input type="hidden" name="" value="=">
</form>
			<div class="products_count">* осталось <b>8</b> штук по акции</div>
		</section>

		<!-- /order 1 -->

		<!-- footer -->

		<footer class="footer_section">
			<img src="images/bayrix.png" alt="BAYRIX">
			<a target="_blank" href="politics.html">Политика конфиденциальности</a><br>
			<a target="_blank" href="agreement.html">Пользовательское соглашение</a>
		</footer>

		<!-- /footer -->
	</div>
	</div>

	<!-- scripts -->
			<script src="js/jquery.js" type="text/javascript"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/scripts.js"></script>
			<script src="js/slick.min.js"></script>
			<script src="js/www-embed-player.js"></script>
	<!-- /scripts -->

</body>
</html>