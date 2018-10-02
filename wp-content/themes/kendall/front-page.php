<?php

/**

 * Template Name: Главная

 *

 * Description: This main page

 *

 * @package Kendall

 */
get_header();

?>
<div class="header_slider">
    <?php


// check if the repeater field has rows of data
if( have_rows('MainSlider') ):

 	// loop through the rows of data
    while ( have_rows('MainSlider') ) : the_row();
    //echo get_sub_field("slide_img_main")[' url'];
?>
    <div class="slide" style='background-image: url("<?=get_sub_field("slide_img_main")['url']?>");'>
        <div class="kendall_slide_logo">
            <img class="kendall_text_logo" src="/wp-content/themes/kendall/img/Kendall.png" alt=""><br>
            <img class="img_logo" src="/wp-content/themes/kendall/img/kendall_img.png" alt="">
        </div>
    </div>
    <?php
        // display a sub field value
       

    endwhile;

else :

    echo 111111111;

endif;

?>
</div>
<section>

    <div class="revolutionary_technology">
        <div class="container">
            <div class="tech_block">
                <img src="/wp-content/themes/kendall/img/Liquid_titanium.png" alt="Liquid_titanium">
                <p class="revolutionary">революционная<br>технология</p>
            </div>
            <div class="tech_block">
                <div class="about_kendall">
                    <p>Моторное масло Kendall® с жидкой защитной добавкой Titanium® образует щит для двигателей,
                        связывая самые горячие детали, чтобы уменьшить трение.</p>
                    <a href="">Подробнее</a>
                </div>
                <img class="molecule" src="/wp-content/themes/kendall/img/molecule.png" alt="">
            </div>
        </div>
    </div>

</section>
<section>
<?php
//echo do_shortcode('[product_categories parent="0"]');
$args = array(
    'parent' => 0
);
 
$terms = get_terms( 'product_cat', $args );
// echo '<pre>';
// print_r($terms);
// echo '</pre>';
?>
    <div class="production">
        <div class="production_kendall">
            <h2>Продукция от компании <img src="/wp-content/themes/kendall/img/Kendall.png" alt="Kendall"></h2>
        </div>
        <div class="production_photo">
        <?php 
        $counter = 0;
        foreach ($terms as $key_term => $term) {
            if($counter%3===0)
            {
                echo '<img class="product_BG" src="/wp-content/themes/kendall/img/product_BG.png" alt="">';
                echo '<div class="container">
                <div class="product_line product_line_'.$counter.'">';
            }
            echo '<div class="product">';
            $thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
            $image = wp_get_attachment_url( $thumbnail_id ); 

            echo '<a href="'.get_term_link($term->term_id).'"><img src="'.$image.'" alt=""></a>';
            echo' <p>'.$term->name.'</p></div>';
            $counter++;
            if($counter%3===0)
            {
                echo '</div></div>';
            }
        }?>
    </div>
    </div>

</section>
<section>
		
		<div class="lubricants">
			<div class="container">
				<div class="family"><img src="/wp-content/themes/kendall/img/family.png" alt=""></div>
				<div class="leader_in_USA">
					<h3>Смазочные материалы от лидера на рынке США</h3>
					<p><span>Моторное масло Kendall®</span> с жидкой защитной добавкой Titanium® образует щит для двигателей, связывая самые горячие детали, чтобы уменьшить трение. В каждом стандартном отраслевом тесте двигатели, использующие Kendall® с Liquid Titanium®, оказались более долговечными, чем те, у кого нет. Когда вы помещаете Kendall в свой двигатель, вы сражаетесь с измельчением и носите на молекулярном уровне с дополнительным слоем титана. Изучите конкретные преимущества в видео ниже. <br><br>
						 <span>Моторное масло Kendall®</span> <br>
						 <span>Моторное масло Kendall®</span> с жидкой защитной добавкой Titanium® образует щит для двигателей, связывая самые горячие детали, чтобы уменьшить трение. В каждом стандартном отраслевом тесте двигатели, использующие Kendall® с Liquid Titanium®, оказались более долговечными, чем те, у кого нет. Когда вы помещаете Kendall в свой двигатель, вы сражаетесь с измельчением и носите на молекулярном уровне с дополнительным слоем титана. Изучите конкретные преимущества в видео ниже.</p>
				</div>
			</div>
		</div>

	</section>
<?php
get_footer();
 ?>