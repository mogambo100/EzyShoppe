<?php 
include "../common/dl.php";
$id=$_GET['id'];
$record=getFeaturesListId($id);
$categories=getCategories();
$cid=$record['cid'];
$name=$record['name'];
if($_SERVER['REQUEST_METHOD']=="POST")
{	
	$name=$_POST['name'];
	$cid=$_POST['category'];
	updateFeaturesListCid($id,$cid);
	updateFeaturesListName($id,$name);
	updateCategoryDescription($id,$desc);
	header("location:manageFeaturesList.php");
}
?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Features List</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
<form action="" method="POST" >
	 <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category" >
                
                <?php foreach($categories as $category) { ?>
                    <option value="<?php echo $category['id'] ?>" <?php echo ($cid==$category['id'])?"selected":"" ?>><?php echo $category['name']; ?></option>
                <?php } ?>
            </select>
            </div>
	 <div class="form-group">
                <label>NAME</label>
                <input class="form-control" type="text" name="name" value="<?php  echo "$name";?>">
            </div>
	
 <button type="submit" class="btn btn-primary">Update Features List </button>

</form>
 <?php include 'admin-footer.php'; ?>