<?php
include('includes/header.php');
?>
<body>
	<!-- header-section-starts -->
	<div class="full">

		<?php include('includes/menu.php');?>

		<div class="main">
		<div class="single-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<form action="" class="navbar-form">
					<div class="search">
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</div>
				</form>

				<?php
				include('includes/log-in.php');
				?>

				<?php
					include('includes/register.php');
				?>

				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Обзор фильма</h3>
				<div class="col-md-9 reviews-grids">
					<div class="review">
						<div class="movie-pic">
							<img src="images/r4.jpg" alt=""/>
						</div>
						<div class="review-info">
							<a class="span">Интерстеллар</a>
							<p class="dirctr">Год выпуска: 2014</p>
							<p class="ratingview">Рейтинг:</p>
							<div class="rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>
							<p class="ratingview">
								&nbsp;4.5/5
							</p>
							<div class="clearfix"></div>
							<p class="ratingview c-rating">Средняя оценка фильма:</p>
							<div class="rating c-rating">
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
								<span>☆</span>
							</div>
							<p class="ratingview c-rating">
								&nbsp; 4.3/5</p>
							<div class="clearfix"></div>
							<div class="yrw">
								<div class="rtm text-center">
									<a href="#">Написать отзыв</a>
								</div>
								<div class="wt text-center">
									<a href="#">Посмотреть трейлер</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<p class="info">Страна:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;США, Великобритания</p>
							<p class="info">В главных ролях: &nbsp;&nbsp;&nbsp;&nbsp;Мэттью МакКонахи, Энн Хэтэуэй, Джессика Честейн, Майкл Кейн</p>
							<p class="info">Режисер: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Кристофер Нолан</p>
							<p class="info">Композитор:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ханс Циммер</p>
							<p class="info">Продюсер:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Кристофер Нолан, Линда Обст, Эмма Томас</p>
							<p class="info">Жанр:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;фантастика, драма, приключения</p>
							<p class="info">Время:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;169 мин. / 02:49</p>
							<p class="info">Возраст:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12+</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<br>
					<div class="story-review">
						<h4>Описание:</h4>
						<p>Когда засуха приводит человечество к продовольственному кризису, коллектив исследователей и учёных
							отправляется сквозь червоточину (которая предположительно соединяет области пространства-времени через большое расстояние) в путешествие, чтобы
							превзойти прежние ограничения для космических путешествий человека и переселить человечество на другую планету.</p>
					</div>
							<!-- comments-section-starts -->
	    <div class="comments-section">
			<div class="blog-form">
			    <form>
					<input type="text" class="text" value="Enter Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Name';}">
					<input type="text" class="text" value="Enter Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}">
					<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
					<textarea></textarea>
					<input type="button" value="SUBMIT COMMENT">
			    </form>
			 </div>
		  </div>
		  </div>
					<div class="col-md-3 side-bar">
						<div class="featured">
							<h3>Featured Today in Movie Reviews</h3>
							<ul>
								<li>
									<a href="Interstellar.php"><img src="images/f1.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="Interstellar.php"><img src="images/f2.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="Interstellar.php"><img src="images/f3.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="Interstellar.php"><img src="images/f4.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="Interstellar.php"><img src="images/f5.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<li>
									<a href="Interstellar.php"><img src="images/f6.jpg" alt="" /></a>
									<p>lorem movie review</p>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
						
						<div class="entertainment">
							<h3>Featured Today in Entertainment</h3>
							<ul>
								<li class="ent">
									<a href="Interstellar.php"><img src="images/f6.jpg" alt="" /></a>
								</li>
								<li>
									<a href="Interstellar.php">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="Interstellar.php"><img src="images/f5.jpg" alt="" /></a>
								</li>
									<li>
									<a href="Interstellar.php">Watch ‘Bombay Velvet’ trailer during WC match</a>
							
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="Interstellar.php"><img src="images/f3.jpg" alt="" /></a>
								</li>
								<li>
									<a href="Interstellar.php">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="Interstellar.php"><img src="images/f4.jpg" alt="" /></a>
								</li>
								<li>
									<a href="Interstellar.php">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="Interstellar.php"><img src="images/f2.jpg" alt="" /></a>
								</li>
								<li>
									<a href="Interstellar.php">Watch ‘Bombay Velvet’ trailer during WC match</a>
							
								</li>
								<div class="clearfix"></div>
							</ul>
							<ul>
								<li class="ent">
									<a href="Interstellar.php"><img src="images/f1.jpg" alt="" /></a>
								</li>
								<li>
									<a href="Interstellar.php">Watch ‘Bombay Velvet’ trailer during WC match</a>
								
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
						<div class="might">
				<h4>You might also like</h4>
				<div class="might-grid">
					<div class="grid-might">
						<a href="Interstellar.php"><img src="images/mi.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="Interstellar.php">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="Interstellar.php"><img src="images/mi1.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="Interstellar.php">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="Interstellar.php"><img src="images/mi2.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="Interstellar.php">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
				<div class="might-grid">
					<div class="grid-might">
						<a href="Interstellar.php"><img src="images/mi3.jpg" class="img-responsive" alt=""> </a>
					</div>
					<div class="might-top">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> 
						<a href="Interstellar.php">Lorem Ipsum <i> </i></a>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
			<!---->
				<div class="grid-top">
				<h4>Archives</h4>
				<ul>
					<li><a href="Interstellar.php">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
					<li><a href="Interstellar.php">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a></li>
					<li><a href="Interstellar.php">When an unknown printer took a galley of type and scrambled it to make a type specimen book. </a> </li>
					<li><a href="Interstellar.php">It has survived not only five centuries, but also the leap into electronic typesetting</a> </li>
					<li><a href="Interstellar.php">Remaining essentially unchanged. It was popularised in the 1960s with the release of </a> </li>
					<li><a href="Interstellar.php">Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing </a> </li>
					<li><a href="Interstellar.php">Software like Aldus PageMaker including versionsof Lorem Ipsum.</a> </li>
				</ul>
				</div>
				<!---->

					</div>

					<div class="clearfix"></div>
			</div>
			</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><img src="images/r4.jpg" alt=""/></li>
			<li><img src="images/r5.jpg" alt=""/></li>
			<li><img src="images/r6.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>
	</div>
	<div class="clearfix"></div>
	</div>
</body>
</html>