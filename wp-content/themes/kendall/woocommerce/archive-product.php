<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<section>
		
		<div class="oil">
			<div class="container">
                123
				<h1><?php woocommerce_page_title(); ?></h1>
				<p class="about_oil"><?do_action( 'woocommerce_archive_description' );?></p>
			</div>
			<?php
			woocommerce_product_loop_start();

			if ( wc_get_loop_prop( 'total' ) ) {
				while ( have_posts() ) {
					the_post();
		
					/**
					 * Hook: woocommerce_shop_loop.
					 *
					 * @hooked WC_Structured_Data::generate_product_data() - 10
					 */
					do_action( 'woocommerce_shop_loop' );
		
					wc_get_template_part( 'content', 'product' );
				}
			}
		
			woocommerce_product_loop_end();
			
			
			?>
			<div class="slider">
				<img class="product_BG" src="img/product_BG.png" alt="">
				<div class="container">
					<div class="slider_nav">
						<p class="oil_name">Syntetic blend</p>
						<button class="prev_1"><</button>
						<button class="next_1">></button>
				</div>
					<div class="slider_img_1">
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

	<section>
		
		<div class="lubricants">
			<div class="container">
				<div class="piston"><img src="img/piston.png" alt=""></div>
				<div class="leader_in_USA">
					<h3>Смазочные материалы от лидера на рынке США</h3>
					<p><span>Моторное масло Kendall®</span> с жидкой защитной добавкой Titanium® образует щит для двигателей, связывая самые горячие детали, чтобы уменьшить трение. В каждом стандартном отраслевом тесте двигатели, использующие Kendall® с Liquid Titanium®, оказались более долговечными, чем те, у кого нет. Когда вы помещаете Kendall в свой двигатель, вы сражаетесь с измельчением и носите на молекулярном уровне с дополнительным слоем титана. Изучите конкретные преимущества в видео ниже.
					</p>
				</div>
			</div>
		</div>

	</section>
	<?get_footer();?>
