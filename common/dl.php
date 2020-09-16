<?php 
//Database configuration
$server='localhost';
$user='root';
$password='root';
$database='ezyshoppe';

//database connection
$con=mysqli_connect($server,$user,$password,$database);

//Brand Table;

function addBrand($name,$image){

	global $con;
	$query="insert into brand(name,image) values('$name','$image')";
	$result=mysqli_query($con,$query);
	return ($result>0)?true:false;
}

function deletebrand($id){
	global $con;
	$query="delete from brand where id=$id ";
	$result=mysqli_query($con,$query);
	return $result;


}
function updateBrandName($id,$name){

	global $con;
	$query="update brand set name='$name' where id=$id";
	$result=mysqli_query($con,$query);
	return $result;

}
function updateBrandImage($id,$image){
	global $con;
	$query="update brand set image='$image' where id=$id";
	$result=mysqli_query($con,$query);

	return ($result>0)?true:false;
}

function getBrand($id)
{
	global $con;

	$query="select * from brand where id=$id";
	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;
}

function getBrands()
{
	global $con;

	$query="select * from brand";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;
}

//product Table

function getProduct($id)
{
	global $con;

	$query="select * from product where id=$id";

	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;
}
function getProductsByName($name){
	global $con;
	$query="select * from category where name='$name'";
	$record=mysqli_query($con,$query);
	$result=mysqli_fetch_assoc($record);
	$id=$result['id'];
	$query="select * from product where cid=$id";
	$record=mysqli_query($con,$query);
	$data=array();
	while($result=mysqli_fetch_assoc($record))
	{
		$data[]=$result;
	}
	return $data;
	
}
function getProductsByCid($cid)
{
	global $con;

	$query="select * from product where cid=$cid";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;
}

function getProducts()
{
	global $con;

	$query="select * from product";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;
}

function addProduct($cid,$bid,$name,$price){
	global $con;
	$query="insert into product(cid,bid,name,price) values($cid,$bid,'$name','$price')";
	$result=mysqli_query($con,$query);

	echo mysqli_error($con);
	return $result;

}


function deleteProduct($id){
	global $con;
	$query="delete from product where id=$id";
	$result=mysqli_query($con,$query);
	return $result;
}
function updateProductName($id,$name){
	global $con;
	$query="update product set name='$name' where id=$id";
	$result=mysqli_query($con,$query);
	return $result;

}
function updateProductPrice($id,$price){
	global $con;
	$query="update product set price='$price' where id=$id";
	$result=mysqli_query($con,$query);
	return $result;

}

function updateProductBrand($id,$bid){
	global $con;
	$query="update product set bid=$bid where id=$id";
	$result=mysqli_query($con,$query);
	return $result;

}
function updateProductCategory($id,$cid){
	global $con;
	$query="update product set cid=$cid where id=$id";
	$result=mysqli_query($con,$query);
	return $result;

}
function addCategory($parentid,$name,$description){

	global $con;
	$query="insert into category(parentid,name,description) values($parentid,'$name','$description')";
	$result=mysqli_query($con,$query);
	echo mysqli_error($con);
	return $result;	
}
function getCategory($id){
	global $con;
	$query="select * from category where id=$id";
	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;

}
function getCategories(){
	global $con;
	$query="select * from category";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;

	}
	return $data;
}


function updateCategoryParentid($id,$parentid){
	global $con;
	$query="update category set parentid=$parentid where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	
}
function updateCategoryName($id,$name){
	global $con;
	$query="update category set name='$name' where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	
}
function updateCategoryDescription($id,$description){
	global $con;
	$query="update category set description='$description' where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	
}
function deleteCategory($id){
	global $con;
	$query="delete from category where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	
}

function addFeaturesList($cid,$name){
	global $con;
	$query="insert into featureslist(cid,name) values($cid,'$name') ";
	$result=mysqli_query($con,$query);
	return ($result>0)?true:false;	
}
function getFeaturesList()
{
	global $con;

	$query="select * from featureslist";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;
}
function getFeaturesListByCid($cid)
{
	global $con;

	$query="select * from featureslist where cid=$cid";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;
}

function getFeaturesListId($id){
	global $con;
	$query="select *  from featureslist  where id=$id";
	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;

}

function deleteFeaturesList($id){
	global $con;
	$query="delete from featureslist  where id=$id";
	$result=mysqli_query($con,$query);
	return $result;
}
function updateFeaturesListByCid($id,$cid){
	global $con;
	$query="update featureslist set cid='$cid' where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	
}
function updateFeatureslistName($id,$name){
	global $con;
	$query="update featureslist set name='$name' where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	
}
//Features Values table

function getFeaturesValues()
{
	global $con;

	$query="select * from featuresvalues";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;
}
function getFeaturesValuesByPid($pid)
{
	global $con;

	$query="select * from featuresvalues where pid=$pid";
	
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;
}
function getFeaturesValuesId($id){
	global $con;
	$query="select *  from featuresvalues  where id=$id";
	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;

}
function addFeaturesvalues($pid,$fid,$values){

	global $con;
	$query="insert into featuresvalues(pid,fid,value) values($pid,$fid,'$values')";
	echo $query;

	$result=mysqli_query($con,$query);
	echo $result;
	return ($result>0)?true:false;	
}
function deleteFeaturesvalues($id){
	global $con;
	$query="delete from featuresvalues  where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	

}
function updateFeaturesValuesPid($id,$pid){

	global $con;
	$query="update featuresvalues set pid=$pid where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	

}
function updateFeaturesValuesFid($id,$fid){
	global $con;

	$query="update featuresvalues set fid=$fid where id=$id";
	$result=mysqli_query($con,$query);
	return $result;	
}
function updateFeaturesValuesValue($id,$value){
	global $con;
	$query="update featuresvalues set value=$value where id=$id";
	$result=mysqli_query($con,$query);
	return $result;
}
//Images tables

function addImages($pid,$caption,$url){
	global $con;
	$query="insert into images(pid,caption,url) values($pid,'$caption','$url')";
	echo $query;
	$record=mysqli_query($con,$query);

	return ($record>0)?true:false;
}
function getImages(){

	global $con;

	$query="select * from images";
	$result=mysqli_query($con,$query);
	$data=array();
	while($record=mysqli_fetch_assoc($result))
	{
		$data[]=$record;
	}
	return $data;	
}
function getImagesId($id){
	global $con;
	$query="select * from images where id =$id";
	$record=mysqli_query($con,$query);
	$result=mysqli_fetch_assoc($record);
	return $result;
}
function getImagesByPid($pid)
{
	global $con;
	$query="select * from images where pid=$pid";
	$record=mysqli_query($con,$query);
	$data=array();
	while($result=mysqli_fetch_assoc($record)){
		$data[]=$result;
	}
	return $data;	
}
function deleteImages($id){
	global $con;
	$query="delete  from images where id =$id";
	$result=mysqli_query($con,$query);
		
}
function updateImages($id,$pid,$caption,$url){
	global $con;
	$query="update images set pid=$pid,caption='$caption',url='$url' where id =$id";
	$record=mysqli_query($con,$query);
	return ($record>0)?true:false;
}
//admin Login table
function getAdmin($username){
	global $con;
	$query="select * from adminLogin where username='$username'";

	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;
}


//user table
function getUserById($id){
	global $con;
	$query="select * from user where id=$id";
	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;
} 

function getUserByMobile($name){
	global $con;
	$query="select * from user where mobile=$mobile";
	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;
} 
function getUserByEmail($email){
	global $con;
	$query="select * from user where email=$email";
	$result=mysqli_query($con,$query);
	$record=mysqli_fetch_assoc($result);
	return $record;
}
function checkUserByEmail($email,$password){
	global $con;
	$query="select * from user where email=$email";
	$record=mysqli_query($con,$query);
	return($password==$record['password'])?true:false;
}
function checkUserByMobile($mobile,$password){
	global $con;
	$query="select * from user where mobile=$mobile";
	$record=mysqli_query($con,$query);
	return($password==$record['password'])?true:false;
}   
function addUser($name,$mobile,$password,$email,$address)
{
	global $con;
	$query="insert into user(name,email,password,email,address) values('$name','$mobile','$password','$email','$address')";
	$record=mysqli_query($con,$query);
	return ($record>0)?true:false;
}
//cart table
function getCartByUid($uid){
	global $con;
	$query="select * from cart where uid=$uid";
	$data=array();
	$record=mysqli_query($con,$query);
	while($result=mysqli_fetch_assoc($record)){
		$data[]=$result;

	}
	return $data;
}
function getCartByPid($pid){
	global $con;
	$query="select * from cart where pid=$pid";
	$data=array();
	$record=mysqli_query($con,$query);
	while($result=mysqli_fetch_assoc($record)){
		$data[]=$result;

	}
	return $data;
}

function addCart($uid,$pid,$total){
	global $con;
	$query="insert into cart(uid,pid,total) values($uid,$pid,'$total')";
	$record=mysqli_query($con,$query);
	return ($record>0)?true:false;
}
function updateCartIspaid($id){
	global $con;
	$query="update cart set isPaid=1 where id=$id";
	$record=mysqli_query($con,$query);
	return $record;
}
function updateCartByQuantity($id,$pid,$quantity){
	global $con;
	$record=getProduct($pid);
	$total=$quantity*$record['price'];
	$query="update cart set quantity=$quantity,total=$total where id=$id";
	$record=mysqli_query($con,$query);
	return $record;

}
function deleteCart($id){
	global $con;
	$query="delete from cart where id=$id";
	$record=mysqli_query($con,$query);
	return $record;
}


function getProductFeaturesList($cid)
{
	global $con;
	$query="select * from featureslist where cid=$cid";
	$data=array();
	$record=mysqli_query($con,$query);
	while($result=mysqli_fetch_assoc($record)){
		$data[]=$result;

	}
	return $data;
	
}


?>