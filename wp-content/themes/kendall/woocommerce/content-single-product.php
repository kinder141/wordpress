<?php
	if(!defined( 'ABSPATH' ))exit;
	global $post;
	global $product;

?>
<style>
.in-stock{
	color:green !important;
}
.out-of-stock{
	color:red !important;
}
.quantity_input>.quantity{
	display:inline;
}
td{
    white-space: nowrap;
}
.table-1{
    display: none;
}
.table-2{
    display: none;
}
.table-3{
    display: none;
}
.table-4{
    display: none;
}.table-5{
     display: none;
 }.table-6{
      display: none;
  }
.table-7{
    display: none;
}
.table-8{
    display: none;
}
.table-9{
    display: none;
}
.active-table{
    display:block;
}
.up-sells.upsells.products
{
    width: 80%;
    margin: 0 auto;
    height: 500px;
}
.upsells>ul{
    display: flex;
    justify-content: space-around;
    list-style: none;
}
    .upsells>ul .price{
         justify-content: center;
         padding: 10px;
         margin-top: 0;
     }
.upsells>ul li{
    text-align: center;
}
.button.product_type_simple.add_to_cart_button.ajax_add_to_cart{
    font-size: 25px;
}

</style>

<?
$produktcat = get_the_terms( $product->ID, 'product_cat' );
do_action( 'woocommerce_before_main_content' );

?>
<link rel="stylesheet" href="<?=get_template_directory_uri()?>/main-single-product.css">
<!--<nav class="woocommerce-breadcrumb"><a href="http://oil">Главная</a>&nbsp;/&nbsp;<a href="http://oil/продукция">Продукция</a>&nbsp;/&nbsp;--><?// woocommerce_page_title();?><!--</nav>-->
<section>

		<div class="machine_oil">
			<div class="container">
				<div class="machine_oil_top">
					
					<h1><?woocommerce_template_single_title();?></h1>
				<!--Сделать доп-->	<p>Premium Synthetic Blend Passenger Car Engine Oil; Fortified with Liquid Titanium Protection Additive</p>
				</div>
				<div class="buy_oil">
					<div class="oil_block_img">
						<!-- <div class="small_img">
							<div class="smal_img_block active_img"><img src="img/kend_prod_1.png" alt=""></div>
						</div>
						<img class="big_img" src="img/kend_prod_1.png" alt=""> -->
						<? do_action('woocommerce_before_single_product_summary');?>
					</div>
					
					<div class="about_oil">
						<p class="top_text"><?=$post->post_content;?>
							
					 </p>
					 <?//wc_get_stock_html($product)?>
					 <div class="price">
					 	<div class="availability">
							
							 <?=wc_get_stock_html($product)?>
							 
					 		<!-- <button>купить</button> -->
							 <? do_action('woocommerce_simple_add_to_cart');?>
						 </div>
						 <?if($product->stock_status==='instock'):?>
					 	<div class="quantity">
							 <p>Количество</p>
							 <div class="quantity_input">
					 			    <span class="minus">-</span>
								    <input type="text" id="fake-input-count"value="1" size="5"/>
								    <span class="plus">+</span>
							 </div>
							 <script>
							 $(document).ready(function () {
								 $('#fake-input-count').val($('.cart').find('input[type=hidden]').val());
							 });
							 </script>
							 <?php
							
							 
							 //do_action('woocommerce_simple_add_to_cart');?>
					 		<!-- <div class="quantity_input">
					 			    <span class="minus">-</span>
								    <input type="text" value="1" size="5"/>
								    <span class="plus">+</span>
					 		</div> -->
						 </div>
						<?endif;?>

						 <?//print_r($product);?>
					 	<div class="past_new_price">
					 		<p class="past_price">
							<?php
							if ( $product->is_on_sale() )
							{
								echo $product->sale_price.'грн';
							}
							?>
							</p>
					 		<p class="new_price"><?=$product->regular_price;?> грн</p>
					 		
					 	</div>
					 </div>	
					</div>
				</div>
				<div class="features_and_benefits">
					<h2> Features & Benefits</h2>
					<ul>
						<?php
						$arr_features = explode(';',get_field('features_benefits'));
						foreach($arr_features as $feature){
						?>
						<li><?=$feature?></li>
						<?}?>
					
					</ul>
					<h2>Applications</h2>
					<ul>
						<?php
						$arr_features = explode(';',get_field('applications'));
						foreach($arr_features as $feature){
						?>
						<li><?=$feature?></li>
						<?}?>
					</ul>
				</div>
			</div>
		</div>

	</section>
<section>
    <?woocommerce_upsell_display();?>
    <div class="specification_of_viscosity">
        <h2>Спецификация вязкости</h2>
        <div class="details">
            <div class="container">
               <?if( have_rows('prop_details') ):?>


                <div class="tab_group">
                    <?php
                    $counter=1;
                    while ( have_rows('prop_details') ) : the_row();?>
                    <?if ($counter===1):?>
                            <div class="label_group label-column-<?=$counter?> active ">
                                <p><?echo get_sub_field("prop_name");?></p>
                            </div>
                        <?else:?>
                            <div class="label_group label-column-<?=$counter?>">
                                <p><?echo get_sub_field("prop_name");?></p>
                            </div>
                    <?endif;?>


                    <?php
                    $counter++;
                    endwhile;?>
                </div>

                <?endif;?>

                <div class="details_block">
                    <div class="icenses">
                        <h3>Licenses & Approvals</h3>
                        <ul>
                            <li>GT-1 High Performance Motor Oil with Liquid Titanium is licensed for :</li><br>
                            <li class="list">
                                ILSAC GF-5 (except SAE 10W-40, SAE 20W-50)<br>
                                API Service SN Plus with Resource Conserving (except SAE 10W-40 and SAE 20W-50 which are API SN Plus only)</li><br>
                            <li>GT-1 High Performance Motor Oil with Liquid Titanium meets or exceeds the requirements of:</li><br>
                            <li class="list">Chrysler MS-6395<br>
                                Ford WSS-M2C945-A (SAE 5W-20), Ford WSS-M2C945-B1 (SAE 5W-20)<br>
                                Ford WSS-M2C946-A (SAE 5W-30), Ford WSS-M2C946-B1 (SAE 5W-30)<br>
                                Ford WSS-M2C947-A (SAE 0W-20), Ford WSS-M2C947-B1 (SAE 0W-20)<br>
                                GM6094M (obsolete specification)</li>
                        </ul>
                    </div>

                    <div class="additional">
                        <h4>Additional Details</h4>


                                <?php


                                    $counter=1;

                                foreach (get_field('prop_details') as $detail):;?>

                                <?if($counter===1):?>
                                <table class="table-<?= $counter?> active-table">
                                    <?else:?>
                                    <table class="table-<?= $counter?> ">
                                        <?endif;?>
                                <?php
                                $color=true;
                                foreach ($detail["prop_value"] as $current_detail):;?>
                                        <?if($color):?>
                                        <tr class="grey_bg">
                                        <?$color=false?>
                                        <?else:?>
                                        <?$color=true?>
                                        <tr>
                                        <?endif;?>
                                        <td ><?=$current_detail['current_prop_name']?></td>
                                        <td class="attribute-column attribute-column-<?=$counter?>"><?=$current_detail['current_prop_value']?></td>
                                        </tr>

                                <? endforeach;?>
                                </table>

                                <? $counter++;endforeach; ?>






                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    $( document ).ready(function() {
        $(".label-column-1").click(function() {
            $(".label-column-1").addClass('active');
            $(".label-column-2").removeClass('active');
            $(".table-1").addClass('active-table');
            $(".table-2").removeClass('active-table');
        });
        $(".label-column-2").click(function() {
            $(".label-column-2").addClass('active');
            $(".label-column-1").removeClass('active');
            $(".table-2").addClass('active-table');
            $(".table-1").removeClass('active-table');
        });



        $(".label-column-3").click(function() {
            $(".label-column-3").addClass('active');
            $(".attribute-column-3").removeClass('none');
            $(".label-column-1").removeClass('active');
            $(".label-column-2").removeClass('active');
            $(".label-column-4").removeClass('active');
            $(".label-column-5").removeClass('active');
            $(".label-column-6").removeClass('active');
            $(".attribute-column-1").addClass('none');
            $(".attribute-column-2").addClass('none');
            $(".attribute-column-4").addClass('none');
            $(".attribute-column-5").addClass('none');
            $(".attribute-column-6").addClass('none');
        });

        $(".label-column-4").click(function() {
            $(".label-column-4").addClass('active');
            $(".attribute-column-4").removeClass('none');
            $(".label-column-1").removeClass('active');
            $(".label-column-2").removeClass('active');
            $(".label-column-3").removeClass('active');
            $(".label-column-5").removeClass('active');
            $(".label-column-6").removeClass('active');
            $(".attribute-column-1").addClass('none');
            $(".attribute-column-2").addClass('none');
            $(".attribute-column-3").addClass('none');
            $(".attribute-column-5").addClass('none');
            $(".attribute-column-6").addClass('none');
        });

        $(".label-column-5").click(function() {
            $(".label-column-5").addClass('active');
            $(".attribute-column-5").removeClass('none');
            $(".label-column-1").removeClass('active');
            $(".label-column-2").removeClass('active');
            $(".label-column-3").removeClass('active');
            $(".label-column-4").removeClass('active');
            $(".label-column-6").removeClass('active');
            $(".attribute-column-1").addClass('none');
            $(".attribute-column-2").addClass('none');
            $(".attribute-column-3").addClass('none');
            $(".attribute-column-4").addClass('none');
            $(".attribute-column-6").addClass('none');
        });

        $(".label-column-6").click(function() {
            $(".label-column-6").addClass('active');
            $(".attribute-column-6").removeClass('none');
            $(".label-column-1").removeClass('active');
            $(".label-column-2").removeClass('active');
            $(".label-column-3").removeClass('active');
            $(".label-column-4").removeClass('active');
            $(".label-column-5").removeClass('active');
            $(".attribute-column-1").addClass('none');
            $(".attribute-column-2").addClass('none');
            $(".attribute-column-3").addClass('none');
            $(".attribute-column-4").addClass('none');
            $(".attribute-column-5").addClass('none');
        });
        $('.slide').slick({
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
