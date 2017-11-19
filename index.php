<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Zealot</title>
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<div class="main-wrap">
		<div class="header-wrap" id="sec-1">
			<div class="content">
				<div class="row">
					<header>
						<div class="col-md-5 col-xs-4 col-sm-5"><a href="/"><div class="logo"></div></a></div>
						<div class="col-xs-8" id="icc">
							<a href="javascript:void(0);" class="icon" onclick="respon()">&#9776;</a>
						</div>
						<div class="col-md-7 col-xs-12 col-sm-7">
							<ul class="menu" id="topNav">
								<li><a href="#sec-1" rel="m_PageScroll2id">Home</a></li>
<!-- 								<li><a href="#sec-2" rel="m_PageScroll2id">Работа</a></li> -->
								<li><a href="#sec-3" rel="m_PageScroll2id">About me</a></li>
								<li><a href="#sec-4" rel="m_PageScroll2id">Contacts</a></li>
							</ul>
						</div>
					</header>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="entry-text">
							<h1>Hi, my name is Fakhriddin. I design and develope</h1>
							<p id="typed"></p>
						</div>
						<div class="hire">
							<a href="#sec-4" id="hire-me">CONTACT ME.</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="more">
						<a href="#sec-2" id="moreBtn"><span style="width: 100%; display: block">Know more what i do</span><span class="ico glyphicon glyphicon-chevron-down animated infinite pulse"></span></a>
					</div>
				</div>
			</div>
		</div>
<!-- 		<div class="work-wrap" id="sec-2">
	<div class="container">
		<div class="row">
			<h2 class="section-name">Рабочий процесс</h2>
		</div>
		<div class="row">
			<div class="col-md-4 one-part">
				<i class="fa fa-diamond yellow"></i>
				<h2>Идеи</h2>
				<p>Работая совместно с заказчиками <br>и моими коллегами, мы придаем идеям законченный вид. <br>На выходе получая финальное техническое задание. В конечном итоге, именно здесь рождается большая часть гениальных решений.
				</p>
			</div>
			<div class="col-md-4 one-part">
				<i class="fa fa-magic yellow"></i>
				<h2>UX/UI проектирование</h2>
				<p>При создании набросков <br> и Wireframing-ге, я фокусируюсь на структуре контента, интуитивно-понятных UI паттернах и создании простых взаимодействий. Я минималист, который твёрдо верит, что меньше &mdash; это больше.</p>
			</div>
			<div class="col-md-4 one-part">
				<i class="fa fa-code yellow"></i>
				<h2>Разработка</h2>
				<p>В конце концов, все сводится к разработке на HTML(5)/CSS(3)/JavaScript в связке с PHP/MySQL. Мне нравится программировать с нуля, но я так же могу работать с Front-end фреймворками как Bootstrap, а на серверной стороне использовать CMS.</p>
			</div>
		</div>
	</div>
</div> -->
		<div class="skills-wrap" id="sec-3">
			<div class="container">
				<div class="row">
					<h2 class="section-name">About me</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="about-me">
							<p>
								&emsp; My name is <b>Fakhiriddin Abdurakhimov</b>. I am freshman student in INHA. I used to write front-end part. For one year I also code backend(PHP/MySQL/NodeJS). I speak Uzbek, Russian, English and German, at the moment i learn French. I also interested in competitve programming.
							</p>
								<p>My ID: U1710180.</p>
								<p>Group: 17-2.</p>
								<p>f.abdurakhimov@inha.uz</p>
						</div>
					</div>
					<div class="col-md-6">
						<h2>Proffessional skills</h2>
						<div class="allbar wow">
							<div class="progressbar" id="html-css">
								<p>HTML5/CSS3 & JavaScript</p>
								<i class="fa fa-star progIcon yellow" aria-hidden="true"></i>
							</div>
							<div class="progressbar" id="design-ux">
								<p>DESING & UX</p>
								<i class="fa fa-star progIcon yellow" aria-hidden="true"></i>
							</div>
							<div class="progressbar" id="php">
								<p>PHP(Yii) & MySQL</p>
								<i class="fa fa-star progIcon yellow" aria-hidden="true"></i>
							</div>
							<div class="progressbar" id="cms">
								<p>CMS: WordPress, Joomla, Opencart</p>
								<i class="fa fa-star progIcon yellow" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="sec-4-r">
			<div class="contact-wrap" id="sec-4">
				<div class="container">
					<div class="row">
						<h2 class="section-name">Contact me</h2>
					</div>
					<div class="row">
						<div class="col-md-3 manager-form">
							<div class="avatar"></div>
							<a href="tel:998911625686" class="call" target="_blank">+998 (91) 162-56-86</a>
							<br>
							<a href="https://www.facebook.com/zealotrahl" target="_blank"><i class="socials fa fa-facebook fb" aria-hidden="true"></i></a>
							<a href="https://t.me/zealotrahl" target="_blank"><i class="socials fa fa-telegram tg" aria-hidden="true"></i></a>
							<a href="https://plus.google.com/u/0/112451796744632169614" target="_blank"><i class="socials fa fa-google-plus gm" aria-hidden="true"></i></a>
						</div>
						<div class="col-md-7">
							<div class="contact-form">
								<form action="send.php" method="POST">
									<div class="input-group">
										<div class="inputs">
											<input type="text" id="name" name="name" placeholder="Your name*" class="form-control meta-inf" required>
											<input type="text" id="email" name="email" placeholder="Your email*" class="form-control meta-inf" required>
											<input type="text" id="phone" maxlength="12" name="phone" placeholder="Your telephone number" class="form-control meta-inf" >
										</div>
										<br>
										<textarea name="message" id="message" rows="10" placeholder="Message" class="form-control" maxlength="500" required=""></textarea>
									</div>
									<input type="submit" name="sendRes" value="Send" class="btn-s">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-text">
			<p style="font-style: bold; font-size: 25px; line-height: 50px;">&emsp; Want work together?</p>
			<p>Currently i gather ideas and people, for Open data hackathon</p>
			<p>Send me hi in <a href="https://www.facebook.com/zealotrahl">facebook</a> are on my email: <a href="mailto:zealotrahl@gamil.com">zealotrahl@gmail.com</a>.</p>
			<p><h1>SEE <a href="movies.html">PAGE</a> ABOUT MY FAVOURITE MOVIES</h1></p>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						Handmade by me © <a href="http://zealotlab.uz">zealotlab.uz</a> 2017
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/progressbar.min.js"></script>
	<script src="js/typed.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/pagescrollid.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>