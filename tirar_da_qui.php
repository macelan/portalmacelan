cody



	<div class="circle"><i class="fas fa-angle-down"></i></div>

	<section class="clientes-slider">

		<div class="center">
		<div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
			<img src="images/amazon.jpg" />
			<img src="images/costco.jpg" />
			<img src="images/dominos.jpg" />
			<img src="images/uber.jpg" />
			<img src="images/walmart.jpg" />
			<img src="images/amazon.jpg" />
			<img src="images/costco.jpg" />
			<img src="images/dominos.jpg" />
			<img src="images/uber.jpg" />
			<img src="images/walmart.jpg" />
		</div>
		</div><!--center-->
	</section>


	<section class="diferenciais">
			
			<div class="center">
				<h2>Contribuímos de ponta a ponta</h2>

				<div class="icons-diferenciais">

					<div class="box-single-diferenciais">
						<img src="images/icon1.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icon2.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icon3.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

				</div><!--icons-diferenciais-->

			</div>

	</section>

	<section class="sobre-time">
		<div class="center">
			<div class="w50 time-descricao-2">
				<h2>Um time experiente,<br/>comunicador e coeso.</h2>
				<p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
				<br /><br/>
				Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.</p>
			</div><!--w50-->
			<div class="w50 img-time">
				<img src="images/time.png" />
			</div>
			<div class="clear"></div>
		</div>
	</section>

	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimentos-box">
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Guilherme Grillo</p>
					<img src="images/autor.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Guilherme Grillo</p>
					<img src="images/autor.jpg" />
				</div><!--depoimento-single-->
				<div class="depoimento-single">
					<p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
					<p>Guilherme Grillo</p>
					<img src="images/autor.jpg" />
				</div><!--depoimento-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>


	<footer>
	<section class="metodologia">
		<div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou telefone.</p>
			<a href="/contato">Entrar Contato</a>
		</div>
	</section>
		<div class="center">
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="images/logo-footer.png" />
			</div>
		</div>
	</footer>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<script type="text/javascript">
	$('section.clientes-slider .slider-container').slick({
		dots: true,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});

	$('section.depoimentos .depoimentos-box').slick({
		dots: true,
		arrows:false,
	    infinite: true,
	    speed:1000,
	    slidesToShow: 1,
	    centerMode:false
	});
</script>
<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
</script>