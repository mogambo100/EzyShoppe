<?php
include '../common/dl.php';
session_start();
$error="";
if(isset($_SESSION['isloggedin']))
{
    header('location:manageProduct.php');
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $check=getAdmin($username);
    if($check['password']==$password)
    {
        $_SESSION["isloggedin"]=true;
        header('location:manageProduct.php');

    }
    else
    {
        $error="PLEASE TRY AGAIN";
    }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin LOGIN</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
         <div class="row ">
            <h1 style="text-align: center;">EZYShoppe</h1>            
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                           
                            <div class="panel-body">
                                <form  method="POST" action="">
                                    <hr />
                                    <h5>Enter Details to Login</h5>
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" class="form-control" placeholder="Your Username " />

                                        </div>
                                           <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" /> Remember me
                                            </label>
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>
                                     
                                     <button class="btn btn-primary ">Login Now</button>
                                    <hr />
                                    Not register ? <a href="#" >click here </a> or go to <a href="#">Home</a> 
                                    </form>
                                    <h1 style="background-color: red;"><?php echo $error ?></h1>
                            </div>
                           
                        </div>
                
                
        </div>
    </div>

</body>
</html>
