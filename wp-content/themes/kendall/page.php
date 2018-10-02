<?php get_header(); ?>
<style>
	
.way {
    background-color: #d9d9d9;
    margin-bottom: 30px
}

.way .container {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    color: #b51d2e
}

.way .container ul {
    list-style-type: none;
    margin-top: 3px;
    margin-bottom: 3px
}

.way .container li {
    display: inline-block;
    font-size: 17px;
    padding: 0 2px
}

.way .container a,
.way .container p {
    color: #b51d2e
}

.oil h1 {
    font-weight: 200;
    color: #b51d2e;
    font-size: 43px;
    text-align: center;
    line-height: 1.1;
    margin-bottom: 30px
}

.oil .about_oil {
    font-size: 18px;
    margin-bottom: 60px
}

	.slider {
    margin-bottom: 120px
}

.slider .container .slider_nav {
    width: 250px;
    position: absolute;
    z-index: 99;
    text-align: center;
    margin-top: 70px
}

.slider .container .slider_nav button {
    margin-top: 100px;
    font-size: 22px;
    color: #fff;
    background-color: #ed1b24;
    border: none;
    outline: 0;
    padding: 2px 13px 5px 13px;
    margin-left: 5px;
    opacity: .8;
    -webkit-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease
}

.slider .container .slider_nav button:hover {
    cursor: pointer;
    opacity: 1
}

.slider .container .slider_nav .oil_name {
    color: #b51d2e;
    font-size: 28px;
    font-weight: 400
}

.slider .product_BG {
    position: absolute;
    width: 100%;
    height: 135px;
    margin-top: 340px
}

.slick-slider {
    padding-left: 250px
}

.slick-slide {
    outline: 0
}

.oil_type {
    font-size: 20px;
    color: #fff;
    font-weight: 100;
    margin: 0
}

.oil_name_slider {
    font-size: 22px;
    color: #fff;
    font-weight: 800;
    margin: 0
}

</style>
<?=do_shortcode('[woocommerce_cart]');?>
<section>
		<?$term = get_term(get_queried_object_id());?>
		
		<div class="oil">
			<div class="container">
				<h1><?=$term->name?></h1>
				<p class="about_oil"><?=$term->description?></p>
			</div>
            
			<!-- Fuck -->
			<div class="slider">
				<img class="product_BG" src="/wp-content/themes/kendall/img/product_BG.png" alt="">
				<div class="container">
					<div class="slider_nav">
						<p class="oil_name">Syntetic blend</p>
						<button class="prev_1"><</button>
						<button class="next_1">></button>
				</div>
					<div class="slider_img_1">
						<div class="oil_img"><img src="/wp-content/themes/kendall/img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="/wp-content/themes/kendall/img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="/wp-content/themes/kendall/img/kend_prod_1.png" alt="">
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
					</div>
				</div>
			</div>

			<div class="slider">
				<img class="product_BG" src="img/product_BG.png" alt="">
				<div class="container">
					<div class="slider_nav">
						<p class="oil_name">Syntetic blend</p>
						<button class="prev_2"><</button>
						<button class="next_2">></button>
				</div>
					<div class="slider_img_2">
						<div class="oil_img">
							<img src="img/kend_prod_1.png" alt=""> 
							<p class="oil_type">Синтетическое моторное масло</p>
							<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img">
							<img src="img/kend_prod_1.png" alt=""> 
							<p class="oil_type">Синтетическое моторное масло</p>
							<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img">
							<img src="img/kend_prod_1.png" alt="">
							<p class="oil_type">Синтетическое моторное масло</p>
							<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img">
							<img src="img/kend_prod_1.png" alt=""> 
							<p class="oil_type">Синтетическое моторное масло</p>
							<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
					</div>
				</div>
			</div>

			<div class="slider">
				<img class="product_BG" src="img/product_BG.png" alt="">
				<div class="container">
					<div class="slider_nav">
						<p class="oil_name">Syntetic blend</p>
						<button class="prev_3"><</button>
						<button class="next_3">></button>
				</div>
					<div class="slider_img_3">
						<div class="oil_img"><img src="img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="img/kend_prod_1.png" alt="">
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
					</div>
				</div>
			</div>

			<div class="slider">
				<img class="product_BG" src="img/product_BG.png" alt="">
				<div class="container">
					<div class="slider_nav">
						<p class="oil_name">Syntetic blend</p>
						<button class="prev_4"><</button>
						<button class="next_4">></button>
				</div>
					<div class="slider_img_4">
						<div class="oil_img"><img src="img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="img/kend_prod_1.png" alt="">
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
						<div class="oil_img"><img src="img/kend_prod_1.png" alt=""> 
						<p class="oil_type">Синтетическое моторное масло</p>
						<p class="oil_name_slider">Kendall GT-1 Endurens</p>
						</div>
					</div>
				</div>
			</div>

		</div>

		</div>

	</section>
<?php //the_post(); ?>
<?php //the_content(); ?>


<?php get_footer(); ?>
