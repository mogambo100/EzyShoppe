<?php
include "../common/dl.php";
$categories=getCategories();
$products=getProducts();

 if($_SERVER['REQUEST_METHOD']=='POST')
 {	
  	$pid=$_POST['product'];
    $fid=$_POST['featuresList'];
 	$fvalue=$_POST['featureValue'];
 
    foreach($_POST['features'] as $fid=>$fvalue)
    {
     	if(addFeaturesValues($pid,$fid,$fvalue))
     	{
     		echo "Record Saved Succesfully";
     		header('location:addFeaturesValues.php');
     	}
     	else
     	{
     		echo "Record Not saved! Please check";
     	}
    }
 }

 ?>
<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add New Features Values</h1>
                        </div>
                </div>
                <!-- /. ROW  -->


 		<form method="POST" action="" enctype="multipart/form-data" class='col-md-5'>
            
            <div class="form-group">               
                <label>Product</label>
                <select class="form-control"  name="product" onchange="LoadFeatures(this.value)">
        			<?php foreach($products as $product) { ?>
           			 <option value="<?php echo $product['id'] ?>"><?php echo $product['name']; ?></option>
        			<?php } ?>
            	</select>            
            </div>

            <div id="features">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary pull-right">Add Features Values</button>
        	</div>

 		</form>
 </div>
</div>

<script>
    function LoadFeatures(pid)
    {
        xhr=new XMLHttpRequest();
        xhr.open("GET","ajaxfeatureslist.php?pid="+pid);
        xhr.send();
        xhr.onreadystatechange=function()
        {
            if(xhr.readyState==4 && xhr.status==200)
            {
                features=JSON.parse(xhr.responseText);
                for(i=0;i<features.length;i++)
                {
                    div=document.createElement('div');
                    div.setAttribute('class','form-group');

                    label=document.createElement('label');
                    label.innerHTML=features[i].name;

                    input=document.createElement('input');
                    input.setAttribute('name',"features["+features[i].id+"]");
                    input.setAttribute('class','form-control');

                    div.appendChild(label);                    
                    div.appendChild(input);
                    document.getElementById('features').appendChild(div);
                }

            }
        }
    }     
</script>

<?php include 'admin-footer.php'; ?> 
</html>