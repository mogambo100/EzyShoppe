<?php 
include "common/dl.php";
session_start();
$_SESSION['id']=1;

if(isset($_SESSION['id']))
{
	$record=getUserById($_SESSION['id']);
	$carts=getCartByUid($record['id']);
	$var=count($carts);
}


?>

<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Free shipping fro standard over &#8377; 1000;
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						contact@ezyshoppe.com
					</span>

				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
					<img src="images/ezyshoppe.jpg" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							
							<li>
								<a href="product.php">Prodcuts</a>
							</li>


							<li>
								<a href="cart.php">Cart</a>
							</li>

							<li>
								<a href="blog.php">Blog</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<?php if(!isset($record)) {?>
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>
				<?php } else { ?>
					<a href="#" >
						<h4 style="color: blue;"><?php echo $record['name'];?></h4>
					</a>
				<?php } ?>
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti"><?php echo $var; ?></span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<?php foreach($carts as $cart) {
									$product=getProduct($cart['pid']);		
								 ?>
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<?php $image=getImagesByPid($cart['pid'])[0]; ?>
										<img src="images/<?php echo $image['url'];?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="product_detail.php?id=<?php echo $cart['pid']; ?>" class="header-cart-item-name">
											<?php echo $product['name'];?> 
										</a>

										<span class="header-cart-item-info">
										<?php echo $cart['quantity'];  ?>  X  <?php echo $product['price'];?>
										</span>
									</div>
								</li>
							<?php }?>
								
							</ul>

							<div class="header-cart-total">
								Total: &#8377; <?php echo ($product['price']*$cart['quantity']);?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<?php foreach($carts as $cart) {
									$product=getProduct($cart['pid']);		
								 ?>
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<?php $image=getImagesByPid($cart['pid'])[0]; ?>
										<img src="images/<?php echo $image['url'];?>" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="product_detail.php?id=<?php echo $cart['pid']; ?>" class="header-cart-item-name">
											<?php echo $product['name'];?> 
										</a>

										<span class="header-cart-item-info">
										<?php echo $cart['quantity'];  ?>  X  <?php echo $product['price'];?>
										</span>
									</div>
								</li>
							<?php }?>
								
							</ul>

							<div class="header-cart-total">
								Total: &#8377; <?php echo ($product['price']*$cart['quantity']);?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
				
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		
	</header>
	