@extends('Layouts.main')

@section('title' , 'Home Ireks Service')

@section('content')

<!-- =================== HERO AREA START ===================== -->
<section class="hero__area">
	<div class="hero__slide__blk owl-carousel">
		<div class="single__hero__slide first" style="background-image: url(assets/img/hero_bg.jpg);">
			<h4>IREKS: O melhor da natureza para panificação e confeitaria.</h4>
		</div>
		<div class="single__hero__slide second" style="background-image: url(./img/hero_slide_2.jpg)">
			<h4>IREKS: O melhor da natureza para panificação e confeitaria.</h4>
		</div>
		<div class="single__hero__slide third" style="background-image: url(./img/hero_slide_3.jpg)">
			<h4>IREKS: O melhor da natureza para panificação e confeitaria.</h4>
		</div>
		<div class="single__hero__slide fourth" style="background-image: url(./img/hero_slide_4.jpg)">
			<h4>IREKS: O melhor da natureza para panificação e confeitaria.</h4>
		</div>
	</div>
</section>


<!-- =================== HERO AREA END ===================== -->

<!-- =================== MEET AREA START ===================== -->
<section class="meet__area">
	<div class="container">
		<div class="meet__content">
			<h4 class="d-none d-lg-block">Conheça a IREKS</h4>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="meet__left__blk">
					<img src="assets/img/logoo.png" alt="" />
				</div>
			</div>
			<div class="col-lg-9">
				<div class="meet__content">
					<h4 class="d-lg-none">Conheça a IREKS</h4>
					<p>
						Somos conhecidos mundialmente pelos ingredientes de panificação
						e confeitaria de primeira qualidade.
					</p>
					<p>
						Com uma equipe altamente profissional, aliados com uma
						competência em todas as áreas, fazemos com que a produção e o
						padrão de qualidade, atenda as expectativas dos clientes mais
						exigentes.
					</p>
					<p>
						Como incentivadores, consultores e solucionadores, nós
						acompanhamos padeiros e confeiteiros em mais de 90 países,
						oferecendo uma grande variedade de ofertas e produtos.
					</p>
					<p>
						Somos também líder na fabricação de maltes cervejeiros de alta
						qualidade para muitas cervejarias de renome. Os segmentos de
						aroma, produtos para sorvetes e o comércio de produtos agrícolas
						completam a gama de produtos.
					</p>
				</div>
			</div>
		</div>

		<div class="meet__video">
			<div class="ratio ratio-16x9">
				<iframe src="https://www.youtube.com/embed/dIiPcpgwnpM" title="Intro music 20 seconds [NCV Release]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
<!-- =================== MEET AREA END ===================== -->

<!-- =================== BRAND AREA START =====================
<section class="brand__area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="brand__content">
					<h5>Empresas que aprovam a qualidade IREKS</h5>
				</div>
				<div class="brand__slide__blk owl-carousel">
					<div class="brand__single__slide">
						<a href="#"><img src="{{ asset('img/brand_1.svg') }}" alt="" /></a>
					</div>
					<div class="brand__single__slide">
						<a href="#"><img src="./img/brand_2.svg" alt="" /></a>
					</div>
					<div class="brand__single__slide">
						<a href="#"><img src="./img/brand_3.svg" alt="" /></a>
					</div>
					<div class="brand__single__slide">
						<a href="#"><img src="./img/brand_4.svg" alt="" /></a>
					</div>
					<div class="brand__single__slide">
						<a href="#"><img src="./img/brand_5.svg" alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

 -->
<!-- =================== BRAND AREA END ===================== -->

<!-- =================== REGISTER AREA START ===================== -->
<section class="register__area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="register__content">
					<p>
						<b>Cadastre-se</b> para ter acesso a todos os materiais que
						disponibilizamos para o <b>sucesso da sua empresa.</b>
					</p>

					<a href="#">Cadastre-se</a>
				</div>
			</div>
		</div>
	</div>
	<div class="register__bg">
		<img src="assets/img/register.png" alt="" />
	</div>
</section>
<!-- =================== REGISTER AREA END ===================== -->


@endsection