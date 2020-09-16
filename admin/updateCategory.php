<?php 
include "../common/dl.php";
$id=$_GET['id'];
$record=getCategory($id);
$parentid=$record['parentid'];
$name=$record['name'];
$desc=$record['description'];
$image=$record['image'];
$isactive=$record['isactive'];
var_dump($isactive);
if($_SERVER['REQUEST_METHOD']=="POST")
{	
	$parentid=$_POST['parentid'];
	$name=$_POST['name'];
	$desc=$_POST['desc'];
	updateCategoryParentid($id,$parentid);
	updateCategoryName($id,$name);
	updateCategoryDescription($id,$desc);
	header("location:manageCategory.php");
}
?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update CATEGORY</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
<form action="" method="POST" >
	 <div class="form-group">
                <label>PARENT ID</label>
                <input class="form-control" type="text" name="parentid" value="<?php  echo "$parentid";?>">
            </div>
	 <div class="form-group">
                <label>NAME</label>
                <input class="form-control" type="text" name="name" value="<?php  echo "$name";?>">
            </div>
	<div class="form-group">
                <label>DESCRIPTION</label>
                <input class="form-control" type="textarea" name="desc" value="<?php  echo "$desc";?>">
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
		
	
 <button type="submit" class="btn btn-primary">Update Category </button>

</form>
 <?php include 'admin-footer.php'; ?>