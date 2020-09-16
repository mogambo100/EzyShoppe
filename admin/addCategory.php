<?php
include "../common/dl.php";

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
 	$parentid=$_POST['parentid'];
 	$name=$_POST['name'];
 	$description=$_POST['description'];
 	if(addCategory($parentid,$name,$description))
 	{
 		header('location:addCategory.php');
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
                        <h1 class="page-head-line">Add New Category</h1>
                        </div>
                </div>
                <!-- /. ROW  -->


 		<form method="POST" action="" enctype="multipart/form-data" class='col-md-5'>
            <div class="form-group">
                <label>Parent ID</label>
                <input class="form-control" type="text" name="parentid" required >
            </div>
            <div class="form-group">
                <label>NAME</label>
                <input class="form-control" type="text" name="name" required >
            </div>
            <div class="form-group">
                <label>DESCRIPTION</label>
                <input class="form-control" type="textarea" name="description" required >
            </div>


            <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Add Category</button>
        	</div>

 		</form>
 </div>
</div>

<?php include 'admin-footer.php'; ?>