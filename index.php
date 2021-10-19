<?php
$counter = isset($_COOKIE["counter"]) ? $_COOKIE["counter"]:0;
$counter++;
setcookie("counter",$counter);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Заповедник ДГТУ</title>
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="img/el8.jpg" type="image/x-icon">
</head>
<body>
	<header>
		<div class="container">
			<nav id="top">
				<img src="img/Logo.png" alt="RedForest" class="logo">
				<div>
					<ul class="menu">
						<li>
							<a href="#services" class="nav-link">Услуги</a>
						</li>
						<li>
							<a href="#feed" class="nav-link">Отзывы</a>
						</li>

						<li>
							<a href="#partners" class="nav-link">Партнеры</a>
						</li>
						<li>
							<a href="enter.html" class="nav-link">Вход</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="titles">
				<h1 class="main-title">
					Думайте над <br>Будущем Земли уже Сейчас
				</h1>
				<p>
					Берегите природу и способствуйте ее скорейшему <br> выздоровлению, иначе кто, если не Вы будет лечить её раны?
				</p>
				<a href="#" class="btn">Подробнее</a>
			<div class="all">
					<article id="slider">
						<div class="slider">
							<div class="slides slide1"></div>
							<div class="slides slide2"></div>
							<div class="slides slide3"></div>
							<div class="slides slide4"></div>
						</div>
						<div class="controls">
							<label for="slide1"></label>
							<label for="slide2"></label>
							<label for="slide3"></label>
							<label for="slide4"></label>
						</div>
					</article>
			</div>
		</div>
	</header>
	<section id="info" class="site-section">
		<div class="container">
			<div class="stroka">
				<marquee scrollamount="14" behavior="scroll" direction="right">Здесь могла быть ваша реклама Здесь могла быть ваша Здесь могла быть ваша Здесь могла быть ваша Здесь могла быть ваша Здесь могла быть ваша Здесь могла быть ваша Здесь могла быть ваша Здесь могла быть ваша</marquee>
				<div class="groups">
					<div class="group">
						<img src="img/Group.png" alt="">
						<h3>
							Фотографии Заповедника
						</h3>
						<p>
							  Здесь Вы найдете милые  фотографии с нашими <br> любимцами и не только...
						</p>
					</div>
					<div class="group">
						<img src="img/location.png" alt="">
						<h3>
							Маршруты по Заповеднику
						</h3>
						<p>
							 Наши экскурсоводы покажут Вам самые красивые места, где Вы когда-либо были!
						</p>
					</div>
					<div class="group">
						<img src="img/Mask_Group.png" alt="">
						<h3>
							Информация об обитателях
						</h3>
						<p>
							Мы обязательно ответим на все вопросы и если что, дадим рекомендации
						</p>
					</div>			
					<div class="group">
						<img src="img/heart.png" alt="">
						<h3>
							Поддержите нас
						</h3>
						<p>
							 Если бы не Ваша материальная поддержка  наш заповедник пришел бы в упадок.
						</p>
					</div>
				</div>
			</div>	
		</div>
	</section>
	<section id="services">
		<div class="container">
			<h2>Предоставляемые услуги</h2>
			<div class="services1">
				<div class="services_item1">
					<img src="img/el1.png" alt="Услуга">
					<h3>Акции</h3>
					<p>
						Акция в честь дня нашего рождения<br> И Вашего тоже
					</p>
					<a href="#">Подробнее</a>
				</div>
				<div class="services_item1">
					<img src="img/el2.png" alt="Услуга">
					<h3>Экотуризм</h3>
					<p>
						Любите путешествовать?<br> Жмите на кнопку ниже.
					</p>
					<a href="#">Подробнее</a>
				</div>
				<div class="services_item1">
					<img src="img/el3.png" alt="Услуга">
					<h3>Экскурсия для взрослых</h3>
					<p>
						Побываем там, где может быть действительно опасно.
					</p>
					<a href="#">Подробнее</a>
				</div>
			</div>
			<div class="services2">
				<div class="services_item2">
					<img src="img/el4.png" alt="Услуга">
					<h3>Приобретение билетов</h3>
					<p>
						Наши билеты дешевле если<br> заказывать на несколько человек.
					</p>
					<a href="buy.html">Подробнее</a>
				</div>
				<div class="services_item2">
					<img src="img/el5.png" alt="Услуга">
					<h3>Научная статистика</h3>
					<div class="fix">
						<p>
							Интересуют цифры, касательно экологии?Научный отдел покажет.
						</p>
					</div>
					<a href="#">Подробнее</a>
				</div>
				<div class="services_item2">
					<img src="img/el6.png" alt="Услуга">
					<h3>Экскурсия для школьников</h3>
					<div class="fix">
						<p>
							Проведём для детей увлекательное путешествие без угрозы их жизни.
						</p>
					</div>
					<a href="#">Подробнее</a>
				</div>
			</div>
		</div>
	</section>
	<section id="feed" class="feedback">
		<div class="container">
			<div class="workers">
					<h2>Отзывы работников Заповедника</h2>
					<div class="workers_feedback">
						<div class="type1">
							<img src="img/photo1.png" alt="">
							<h3>Бакаринцева Александра</h3>
							<a href="#" class="department1">
							Планово-Финансовый отдел</a>
							<p>
								Мы равномерно вкладываем наши деньги в то, что действительно нужно нашему Заповеднику и нашим работникам и не забываем и о Вас, наши посетители.
							</p>
						</div>
						<div class="type2">
							<img src="img/photo2.png" alt="">
							<h3>Ямпольская Христина</h3>
							<a href="#" class="department3">Экскурсовод</a>
							<div class="fix1">
								<p>
									Каждый день в нашем заповеднике люди находят то, что называеться природой и каждый подчеркивает для себя что-то новое из наших экскурсий.
								</p>
							</div>
						</div>
						<div class="type3">
							<img src="img/photo3.png" alt="">
							<h3>Зюганова Кира</h3>
							<a href="#" class="department2">Научный отдел</a>
							<p>
								Ежедневно мы следим за животными чтобы заранее выявить и убрать проблему, если такова появится.  Наша охрана пристально следит за посетителями заповедника. 
							</p>
						</div>
					</div>
			</div>
		</div>
	</section>
	<section class="sss">
		<div class="container">
			<h3>Таблица с вымирающими животными</h3>
			<table border="	">
				<tr>
					<th>Животное</th>
					<th>Было</th>
					<th>Выросло</th>
				</tr>
				<tr>
					<td>Амурский тигр</td>
					<td>40</td>
					<td>580</td>
				</tr>
				<tr>
					<td>Мадагарский нырок</td>
					<td>20</td>
					<td>100</td>
				</tr>
				<tr>
					<td>Североамериканский бизон</td>
					<td>1000</td>
					<td>20000</td>
				</tr>
			</table>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21671.98884115032!2d39.71829409821354!3d47.23617316634643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3bbd25efc8dab%3A0xe71795934da757ba!2z0JTQk9Ci0KM!5e0!3m2!1sru!2sru!4v1615817433860!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</section>
	<section id="partners" class="partners">
		<div class="container">
			<div class="partner">
				<h2>Наши партнеры</h2>
				<div class="photo">
					<div class="prts_photos1">
						<img src="img/el8.jpg" alt="">
						<hr>
						<img src="img/el9.png" alt="">
						<hr>
						<img src="img/el10.png" alt="">
						<hr>
						<img src="img/el11.png" alt="">
					</div>	
				</div>
				<div class="partner_line"><hr></div>
					<div class="prts_photos2">
						<img src="img/el12.png" alt="">
						<hr>
						<img src="img/el7.png" alt="">
						<hr>
						<img src="img/el13.png" alt="">
						<hr>
						<img src="img/el14.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="end">
			<div class="container">
				<div class="foot">
					<img src="img/footer.png" alt="ss" class="">
					<div class="text_foot">
						<p>Адрес:ДГТУ<br></p>
						<a href="tel: +78001001930" class="phone">Телефон: 8 (800) 100-19-30</a>
						<br>
						<a href="mailto:dstu@mail.ru" class="mail">E-mail: dstu@mail.ru</a>
					</div>
					<div class="text">
						<p class="red">RED</p>
						<p class="forest">FOREST Все права защищены</p>
					</div>
						<div class="schet">
							<span>
							<?php
							$counter = isset($_COOKIE["counter"]) ? $_COOKIE["counter"]:0;
							$counter++;
							echo $counter;
							?>
							</span>
						</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("a.nav-link").click(function(){
				$("html, body").animate({
					scrollTop: $($(this).attr("href")).offset().top + "px"
				}, {
					duration: 1000,
					easing: "swing"
				});
				return false;
			});
		});
	</script>
</body>
</html>



