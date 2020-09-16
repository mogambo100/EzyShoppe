<?php
include "../common/dl.php";
$products=getProducts();
 ?>
 


<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE Product</h1>
                        <h1 class="page-subhead-line"><a href="addProduct.php">ADD Product</a> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->


<table class="table table-striped table-bordered table-hover">
 			<tr>
 				<td>ID</td>
 				<td>CID</td>
 				<td>BID</td>
 				<td>NAME</td>
 				<td>PRICE</td>
 				<td>isActive</td>

 			</tr>
 			<?php foreach($products as $product) {  ?>
 			<tr>
 				<td><?php echo $product['id'];  ?></td>
 				<td><?php
 					$category=getCategory($product['cid']);
 				 echo $category['name']?></td>
 				<td><?php 
 				 $brand=getBrand($product['bid']); 
 				echo $brand['name']?></td>
 				<td><?php echo $product['name']?></td>
 				<td><?php echo $product['price']?></td>
 				<td><?php echo $product['isactive']?></td>
 			
 			
 				<td><a href="deleteproduct.php?id=<?php echo $product['id']; ?>">Delete </a>| <a href="updateproduct.php?id=<?php echo $product['id']?>">Update</a></td>
 			</tr>
 			<?php } ?>
 		</table>

</div>
</div>

 <?php include 'admin-footer.php'; ?>