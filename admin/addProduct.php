<?php 

include "../common/dl.php";

$value=array("name"=>"");
$categories=getCategories(); $brands=getBrands(); 


if($_SERVER['REQUEST_METHOD']=='POST')
{	
	$name=$_POST['name'];
    $cid=$_POST['category'];
    $bid=$_POST['brand'];
    $price=$_POST['price'];

      if(addProduct($cid,$bid,$name,$price))
      {
        header('location:addProduct.php');
      }  	
}

 ?>


<?php include 'admin-header.php';?>
<div id="page-wrapper">
    <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Product</h1>
                        
                    </div>
                </div>
                <!-- /. ROW  -->


 		<form method="POST" action="" enctype="multipart/form-data" class='col-md-5'>
            <div class="form-group">
                <label>Product Name</label>
                <input class="form-control" type="text" name="name" required value="<?php $value['name']?>">
            </div>
            <div class="form-group">
                <label>Category Name</label>
                <select class="form-control" name="category" >
                
                <?php foreach($categories as $category) { ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name']; ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label>Brand Name</label>
                <select class="form-control" name="brand" >
                
                <?php foreach($brands as $brand) { ?>
                    <option value="<?php echo $brand['id'] ?>"><?php echo $brand['name']; ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input class="form-control" type="text" name="price" required ">
            </div>
          
            <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Add Product</button>
        	</div>

 		</form>
 </div>
</div>

<?php include 'admin-footer.php'; ?>