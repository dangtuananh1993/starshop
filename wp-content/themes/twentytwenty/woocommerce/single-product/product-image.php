

<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images">
	<div class="flex-viewport slider-product-top">
		<?php
			global $product;

			$attachment_idd = $product->get_gallery_image_ids();
			$image = wp_get_attachment_image_src($product->get_image_id(), 'single-post-thumbnail');
		?>

		<div class="image-1"><img src="<?php print_r($image[0]);?>" alt=""></div>

		<?php
		$attachment_ids = $product->get_gallery_image_ids(); //get id of gallery ids
		
		foreach( $attachment_ids as $attachment_id ) {
			//echo $image_link = wp_get_attachment_url( $attachment_id );?>
			<div class="image-1"><img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id );?>" alt=""></div>
			<?php
		}
		?>
	</div>
	<div class="flex-viewport slider-product-bot">
		<?php
			global $product;

			$attachment_idd = $product->get_gallery_image_ids();
			$image = wp_get_attachment_image_src($product->get_image_id(), 'single-post-thumbnail');
		?>

		<div class="image-2"><img src="<?php print_r($image[0]);?>" alt=""></div>

		<?php
		$attachment_ids = $product->get_gallery_image_ids(); //get id of gallery ids
		
		foreach( $attachment_ids as $attachment_id ) {
			//echo $image_link = wp_get_attachment_url( $attachment_id );?>
			<div class="image-2"><img src="<?php echo $image_link = wp_get_attachment_url( $attachment_id );?>" alt=""></div>
			<?php
		}
		?>
	</div>
</div>

