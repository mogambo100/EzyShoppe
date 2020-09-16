<?php
include "../common/dl.php";
$images=getImages();
 ?>
 


<?php include 'admin-header.php'; ?>

<div id="page-wrapper">
    <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MANAGE IMAGES</h1>
                        <h1 class="page-subhead-line"><a href="addImages.php">ADD Images</a> </h1>

                    </div>
                </div>
                <!-- /. ROW  -->


<table class="table table-striped table-bordered table-hover">
            <tr>
                <td>ID</td>
                <td>Product Name</td>
                <td>Caption</td>
                <td>IMAGE</td>
                <td>COMMANDS</td>

            </tr>
            <?php foreach($images as $image) {  ?>
            <tr>
                <td><?php echo $image['id'];  ?></td>
                <td><?php 
                        $product=getProduct($image['pid']);
                echo $product['name']?></td>
                <td><?php echo $image['caption'];  ?></td>
                <td><img src="../images/<?php echo $image['url']?>" height="500px" width ="375px"></td>
                
                <td><a href="deleteImages.php?id=<?php echo $image['id']; ?>">Delete </a>| <a href="updateImages.php?id=<?php echo $image['id']?>">Update</a></td>
            </tr>
            <?php } ?>
        </table>

</div>
</div>

 <?php include 'admin-footer.php'; ?>