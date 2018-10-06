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
wp_enqueue_style(
    'main',
    get_template_directory_uri().'/main.css',
    array(),
    null
);


$parentid = get_queried_object_id();
var_dump($parentid);
$args = array(
    'parent' => $parentid
);
$terms = get_terms( 'product_cat', $args );


?>
<!--<pre>-->
<?php
//
//var_dump($terms);
//?>
<!---->
<!--</pre>-->
<script>
    $(document).ready(function () {


    $('.slider_img_1').slick({
        infinite: true,
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 8200,
        speed: 700,
        slidesToScroll: 1,
        prevArrow: $('.prev_1'),
        nextArrow: $('.next_1'),
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
    });
</script>

<section>
		
		<div class="oil">
			<div class="container">
				<h1><?php woocommerce_page_title(); ?></h1>
				<p class="about_oil"><?do_action( 'woocommerce_archive_description' );?></p>
			</div>
			<?php
            wp_reset_query();
            if ( $terms ) {
                $count =0;
                foreach ( $terms as $term ) {// var_dump($term);
                    //echo $count;
                    echo '<div class="slider">
                            <img class="product_BG" src="/wp-content/themes/kendall/img/product_BG.png" alt="">
                            <div class="container">
                                <div class="slider_nav">
                                <p class="oil_name">' . $term->name . '</p>
                                <button class="prev_1"><</button>
                                <button class="next_1">></button>
                            </div>
                                <div class="slider_img_1">';
                                    $args = array(
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'product_cat',
                                                'field' => array(
                                                    'term_id' => $term->term_id
                                                ),
                                                'terms' => array($term->term_id),
                                                'post_type' => 'product'
                                            )
                                            // количество выводимых товаров
                                        ));
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                        ?>

                                        <div class="oil_img">
                                            <?=get_the_post_thumbnail($the_query->post->id)?>
                                            <p class="oil_type" style="color:black"></p>
                                            <p class="oil_name_slider"><?=$the_query->post->post_title?></p>
                                        </div>
                                        <?php

                                    endwhile;
                                    endif;
                                echo '</div>';
                    wp_reset_postdata();
                    wp_reset_query();
                    echo '</div></div>';
                }
            }
            ?>
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
