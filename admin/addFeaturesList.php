<?php
include "../common/dl.php";
$categories=getCategories();
 if($_SERVER['REQUEST_METHOD']=='POST')
 {	
 	$cid=$_POST['category'];
 	$name=$_POST['name'];
 	if(addFeaturesList($cid,$name))
 	{
 		echo "Record Saved Succesfully";
 		header('location:addFeaturesList.php');
 	}
 	else
 	{
 		echo "Record Not saved! Please check";
 	}
 }

 ?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Features </h1>
                        </div>
                </div>
                <!-- /. ROW  -->


 		<form method="POST" action="" enctype="multipart/form-data" class='col-md-5'>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category">
                
                			<?php foreach($categories as $category) { ?>
                   			 <option value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
                			<?php } ?>
            			</select>
            </div>
            <div class="form-group">
                <label>NAME</label>
                <input class="form-control" type="text" name="name" required >
            </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Add Features</button>
        	</div>

 		</form>
 </div>
</div>

<?php include 'admin-footer.php'; ?> 