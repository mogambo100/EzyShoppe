<?php
include "../common/dl.php";
$value=array("name"=>"");
$products=getProducts();

if($_SERVER['REQUEST_METHOD']=='POST')
{	
    $pid=$_POST['product'];
    $caption=$_POST['caption'];
	$tmp_name=$_FILES['image']['tmp_name'];
	$filename=$_FILES['image']['name'];

	if(addImages($pid,$caption,$filename))
	{
		move_uploaded_file($tmp_name, "../images/" . $filename);
		header('location:addImages.php');
	}
	else{
		echo "Record Not saved! Please check";
	}

}

 ?>


<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Product IMAGE</h1>
                        </div>
                </div>
                <!-- /. ROW  -->


 		<form method="POST" action="" enctype="multipart/form-data" class='col-md-5'>
            <div class="form-group">
                <label>Product Name</label>
                <select class="form-control" name="product" >
                
                <?php foreach($products as $product) { ?>
                    <option value="<?php echo $product['id'] ?>"><?php echo $product['name']; ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="form-group">
                       
             
                <label>CAPTION</label>
                <input class="form-control" type="text" name="caption">
            </div>


           <div class="form-group">
           <div class="form-group">
                       
             
                <label>Product Image</label>
                <input class="form-control" type="file" name="image">
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Add IMAGE</button>
        	</div>

 		</form>
 </div>
</div>

<?php include 'admin-footer.php'; ?>