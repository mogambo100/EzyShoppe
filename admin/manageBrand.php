<?php
include "../common/dl.php";
$brands=getBrands();
 ?>
 


<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE BRAND</h1>
                        <h1 class="page-subhead-line"><a href="addBrand.php">ADD BRAND</a> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->


<table class="table table-striped table-bordered table-hover">
 			<tr>
 				<td>ID</td>
 				<td>NAME</td>
 				<td>IMAGE</td>
 				<td>COMMANDS</td>

 			</tr>
 			<?php foreach($brands as $brand) {  ?>
 			<tr>
 				<td><?php echo $brand['id'];  ?></td>
 				<td><?php echo $brand['name']?></td>
 				<td><img src="../images/<?php echo $brand['image']?>" height="120px" width ="80px" ></td>
 				<td><a href="deleteBrand.php?id=<?php echo $brand['id']; ?>">Delete </a>| <a href="updateBrand.php?id=<?php echo $brand['id']?>">Update</a></td>
 			</tr>
 			<?php } ?>
 		</table>

</div>
</div>

 <?php include 'admin-footer.php'; ?>