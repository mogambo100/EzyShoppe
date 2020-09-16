<?php
include "../common/dl.php";
$id=$_GET['id'];
$featuresValues=getFeaturesValuesId($id);
$categories=getCategories();
$products=getProducts();
$featuresLists=getFeaturesList();
 if($_SERVER['REQUEST_METHOD']=='POST')
 {	
 	$pid=$_POST['product'];
    $fid=$_POST['featuresList'];
 	$fvalue=$_POST['featureValue'];
 	updateFeaturesValuesPid($id,$pid);
    updateFeaturesValuesFid($id,$fid);
    updateFeaturesValuesValue($id,$fvalue);
    

 	
 		echo "Record Saved Succesfully";
 		header('location:manageFeaturesValues.php');
 	
 	
 }

 ?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Update Features Values</h1>
                        </div>
                </div>
                <!-- /. ROW  -->


 		<form method="POST" action="" enctype="multipart/form-data" class='col-md-5'>
            <div class="form-group">
                <label>Product Name</label>
                <select class="form-control" name="product" >
                
                			<?php foreach($products as $product) { ?>
                   			 <option value="<?php echo $product['id'] ?>" <?php  echo ($featuresValues['pid']==$product['id'])?"selected":"" ?> ><?php echo $product['name']; ?></option>
                			<?php } ?>
            			</select>
            
            </div>
            <div class="form-group">
                <label>Features List</label>
                <select class="form-control" name="featuresList" >
                
                            <?php foreach($featuresLists as $featuresList) { ?>
                             <option value="<?php echo $featuresList['id'] ?>" <?php  echo ($featuresValues['fid']==$featuresList['id'])?"selected":"" ?>><?php echo $featuresList['name']; ?></option>
                            <?php } ?>
                        </select>
            
            </div>
            
            <div class="form-group">
                <label>Value</label>
                <input class="form-control" type="text" name="featureValue" required value="<?php echo $featuresValues['value']?>">
            </div>
            
            <div class="form-group">
            <button type="submit" class="btn btn-primary pull-right">Update Features Values</button>
        	</div>

 		</form>
 </div>
</div>

<?php include 'admin-footer.php'; ?> 