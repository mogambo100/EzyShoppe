<?php 
include "../common/dl.php";
$category=getCategories();
?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE CATEGORY</h1>
						<h1 class="page-subhead-line"><a href="addCategory.php">ADD Category</a> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
 		<table class="table table-striped table-bordered table-hover">
 			<tr>
 				<td>ID</td>
 				<td>PARENTID</td>
 				<td>NAME</td>
 				<td>DESCRIPTION</td>
 				<td>COMMANDS</td>

 			</tr>
 			<?php foreach($category as $category) {  ?>
 			<tr>
 				<td><?php echo $category['id'];  ?></td>
 				<td><?php echo $category['parentid']?></td>
 				<td><?php echo $category['name']?></td>
 				<td><?php echo $category['description']?></td>
 				<td><a href="deleteCategory.php?id=<?php echo $category['id']; ?>">Delete </a>| <a href="updateCategory.php?id=<?php echo $category['id']?>">Update</a></td>
 			</tr>
 			<?php } ?>
 		</table>
 	</div>
</div>

 <?php include 'admin-footer.php'; ?>