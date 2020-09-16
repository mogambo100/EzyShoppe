<?php 
include "../common/dl.php";
$id=$_GET['id'];
$record=getImagesId($id);
$products=getProducts();
$pid=$record['pid'];
$image=$record['url'];
$caption=$record['caption'];
if($_SERVER['REQUEST_METHOD']=="POST")
{	
	$pid=$_POST['product'];
	$tmp_name=$_FILES['image']['tmp_name'];
    $filename=$_FILES['image']['name'];
    $caption=$_POST['caption'];
    if(updateImages($id,$pid,$caption,$filename))
    {
        move_uploaded_file($tmp_name, "../images/" . $filename);
        echo "record saved ";
        header("location:manageImages.php");
        
    }
}
?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Images</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
<form action="" method="POST" enctype="MULTIPART/FORM-DATA">

	 <div class="form-group">
                <label>Product NAME</label>
                <select class="form-control" name="product" >
                
                <?php foreach($products as $product) { ?>
                    <option value="<?php echo $product['id'] ?>" <?php echo ($pid==$product['id'])?"selected":"" ?> ><?php echo $product['name']; ?></option>
                <?php } ?>            
      </div>
    <div class="">
                <input class="form-control" type="text" name="caption" value="<?php  echo "$caption";?>"v />
    
    </div>
    <div class="form-group">
        <label class="control-label col-lg-4"> Image</label>
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="../images/<?php echo $image ?>" /></div>
                                
    </div>
                                
                            
       <div class="form-group">
                <br><br><br><br><br><br><br><br><br>

                                    <span class="btn btn-file btn-primary" ><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image"></span> 
                                    
                          
            </div>
		
	
 <button type="submit" class="btn btn-primary">Update Images </button>

</form>
 <?php include 'admin-footer.php'; ?>