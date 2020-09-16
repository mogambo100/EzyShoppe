<?php include "head.php";
//include "common/dl.php";
?>
<body class="animsition">

	<!-- Header -->
	<?php include "header.php";?>
<?php

if(isset($_SESSION['id']))
{
	$record=getUserById($_SESSION['id']);
}
$carts=getCartByUid($record['id']);
$subTotal=0;
$categories=getCategories();
?>


	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							
							<th class="column-5">Total</th>
							<th class="column-6"></th>
						</tr>

						<tr class="table-row">
						<?php foreach($carts as $cart){
							$product=getProduct($cart['pid']);  ?>
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<?php $image=getImagesByPid($cart['pid'])[0]; ?>
									<img src="images/<?php echo $image['url'];?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php echo $product['name'];?></td>
							<td class="column-3">&#8377; <?php echo $product['price'];?></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5"><?php $subTotal +=$cart['total'];echo $cart['total'];?></td>
							<td><a style="color: blue;" href="deleteCartItem.php?id=<?php echo $cart['id']?>">Delete</a></td>
						</tr>
					<?php } ?>
						
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
					<?php echo $subTotal; ?>
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
						<?php echo $record['address'];?>
						</p>
						<?php if($subTotal>1000000){ $ship=0;?>
						<span class="s-text19">
							Calculate Shipping<br>
							<strike>Shipping charges &#8377; 250</strike>&ensp; FREE

						</span>
					<?php } else {$ship=250;?>
						<span class="s-text19">
							Calculate Shipping<br>
							Shipping charges &#8377; 250&ensp; FREE

						</span>
					<?php }?>
						<h6 style="color:red;">CGST:9%
							<?php 
							$cgst=0;
							$cgst=(9* $subTotal)/100;
							echo $cgst;
							
						?>
						</h6>
						<h6 style="color:red;">SGST:9%
							<?php 
							$sgst=0;
							$sgst=(9* $subTotal)/100;
							echo $sgst;
							
						?>
						</h6>

						
						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						<?php
						$subTotal+=$ship;
						$subTotal+=$cgst;
						$subTotal+=$sgst;
						echo $subTotal;

						 ?>
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</section>



	<!-- Footer -->
	<?php include "footer.php";?>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<?php include "body.php";?>