<?php
	
	$products = array(
		array(
			'product_name' => 'Unlocked Android 6″ Inch  4.4.2 Dual Core',
			'productImageURL' => 'assets/images/products/card-1.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'Headset 3D Glasses VR  for Android',
			'productImageURL' => 'assets/images/products/card-2.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$500'
		),
		array(
			'product_name' => 'PowerBank 4400',
			'productImageURL' => 'assets/images/products/card-3.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'Snap White Instant Digital Camera in White',
			'productImageURL' => 'assets/images/products/card-4.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$800'
		),
		array(
			'product_name' => 'Smart Watches 3 SWR50',
			'productImageURL' => 'assets/images/products/card-5.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'ZenBook 3 Ultrabook 8GB 512SSD W10',
			'productImageURL' => 'assets/images/products/card-6.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$600'
		),
		array(
			'product_name' => 'PowerBank 4400',
			'productImageURL' => 'assets/images/products/card-3.jpg',
			'oldPrice' 		=> '$3,788.00',
			'newPrice'		=>'$4,780.00',
			'price'			=> ''
		),
		array(
			'product_name' => 'Snap White Instant Digital Camera in White',
			'productImageURL' => 'assets/images/products/card-4.jpg',
			'oldPrice' 		=> '',
			'newPrice'		=> '',
			'price'			=> '$800'
		)	
		);

		$column=4;
?>

<div class="products">
	<?php
		shuffle($products); 
		foreach($products as $product): 
		
		
		if ( empty( $loop ) ) {
			$loop = 0;
		}
		$loop++;
		$classes = '';
		if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
			$classes = 'first';
		}
		if ( 0 === $loop % $column ) {
			$classes = 'last';
		}
		?>

		<div class="landscape-product product">
			<?php display_card_product($product['productImageURL'], $product['oldPrice'], $product['newPrice'], $product['price'], $product['product_name']) ; ?>
		</div><!-- .landscape-product -->	

		
	<?php endforeach; ?>
</div>