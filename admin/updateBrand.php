<?php 
include "../common/dl.php";
$id=$_GET['id'];
$record=getBrand($id);
$name=$record['name'];
$image=$record['image'];
$isactive=$record['isactive'];
var_dump($image);
if($_SERVER['REQUEST_METHOD']=="POST")
{	
	$name=$_POST['name'];
	updateBrandName($id,$name);
    $tmp_name=$_FILES['image']['tmp_name'];
    $filename=$_FILES['image']['name'];

    if(updateBrandImage($id,$filename))
    {
        move_uploaded_file($tmp_name, "../images/" . $filename);
        echo "record saved ";
        header("location:manageBrand.php");
        
    }
}
?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update BRAND</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
<form action="" method="POST" enctype="MULTIPART/FORM-DATA">

	 <div class="form-group">
                <label>NAME</label>
                <input class="form-control" type="text" name="name" value="<?php  echo "$name";?>">
            </div>
<div class="form-group">
                        <label class="control-label col-lg-4"> Image</label>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="../images/<?php echo $image?>" /></div>
                                <div>
                                    <span class="btn btn-file btn-primary" ><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image"></span> 
                                    </div>
                                
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="<?php echo $tmp_name ?>" alt="" /></div>
                            </div>
                        </div>
                    </div>
	<div class="form-group">
		        <label>IS-ACTIVE</label>
		        <div class="radio">
		            <label>
		                <input type="radio" name="isactive" value=1 <?php echo $isactive==1?'checked':'';  ?>>ACTIVE

		            </label>
		        </div>
		        <div class="radio">
		            <label>
		                <input type="radio" name="isactive" value=0 <?php echo $isactive==0?'checked':''; ?>>IN-ACTIVE
		            </label>
		        </div>
	</div>
		
	
 <button type="submit" class="btn btn-primary">Update Brand </button>

</form>
 <?php include 'admin-footer.php'; ?>