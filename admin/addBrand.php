<?php
include "../common/dl.php";
$value=array("name"=>"");


if($_SERVER['REQUEST_METHOD']=='POST')
{	
	$value['name']=$_POST['name'];
	$name=$_POST['name'];
	$tmp_name=$_FILES['image']['tmp_name'];
	$filename=$_FILES['image']['name'];

	if(addBrand($name,$filename))
	{
		move_uploaded_file($tmp_name, "../images/" . $filename);
		header('location:addBrand.php');
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
                        <h1 class="page-head-line">Add New Brand</h1>
                        </div>
                </div>
                <!-- /. ROW  -->


 		<form method="POST" action="" enctype="multipart/form-data" class='col-md-5'>
            <div class="form-group">
                <label>Brand Name</label>
                <input class="form-control" type="text" name="name" required value="<?php $value['name']?>">
            </div>

           <div class="form-group">
           <div class="form-group">
                       
             
                <label>Brand Image</label>
                <input class="form-control" type="file" name="image">
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Add Brand</button>
        	</div>

 		</form>
 </div>
</div>

<?php include 'admin-footer.php'; ?>