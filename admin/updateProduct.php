<?php 
include "../common/dl.php";
$id=$_GET['id'];
$categories=getCategories();
$brands=getBrands();
$record=getProduct($id);
$name=$record['name'];
$price=$record['price'];
$cid=$record['cid'];
$bid=$record['bid'];
$isactive=$record['isactive'];
if($_SERVER['REQUEST_METHOD']=="POST")
{	
	$name=$_POST['name'];
	$price=$_POST['price'];
    $brand=$_POST['brand'];
    $category=$_POST['category'];
	updateProductName($id,$name);
    updateProductPrice($id,$price);
    updateProductCategory($id,$category);
    updateProductBrand($id,$brand);
    header("location:manageProduct.php");
}
?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update PRODUCT</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->
<form action="" method="POST" >
	 <div class="form-group">
                <label>NAME</label>
                <input class="form-control" type="text" name="name" value="<?php  echo "$name";?>">
     </div>
	<div class="form-group">
                <label>CATEGORY</label>
                <select class="form-control" name="category" >
                
                <?php foreach($categories as $category) { ?>
                    <option value="<?php echo $category['id'] ?>" <?php echo ($cid==$category['id'])?"selected":"" ?>><?php echo $category['name']; ?></option>
                <?php } ?>
            </select>
    </div>
    <div class="form-group">
                <label>Brand</label>
                <select class="form-control" name="brand" >
                
                <?php foreach($brands as $brand) { ?>
                    <option value="<?php echo $brand['id'] ?>" <?php echo ($bid==$brand['id'])?"selected":"" ?> ><?php echo $brand['name']; ?></option>
                <?php } ?>
            </select>
     </div>
     <div class="form-group">
                <label>PRICE</label>
                <input class="form-control" type="text" name="price" value="<?php  echo "$price";?>">
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
		
	
 <button type="submit" class="btn btn-primary">Update Product </button>

</form>
 <?php include 'admin-footer.php'; ?>