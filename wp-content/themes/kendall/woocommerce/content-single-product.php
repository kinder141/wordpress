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
</style>
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
					 	<div class="viscosity">
					 		<p>Вязкость</p>
							<div class="new-select-style-wpandyou" style="background-image: url(img/drop_down.png);">
							<select>
							     <option>0W-20</option>
							     <option>5W-20</option>
							     <option>5W-30</option>
							     <option>10W-30</option>
							     <option>10W-40</option>
							     <option>20W-50</option>
							</select>
							</div>		 		
						 </div>
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


