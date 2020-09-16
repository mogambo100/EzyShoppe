<?php

session_start();
if(!isset($_SESSION['isloggedin']))
{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">EZYShoppe</a>
            </div>

            <div class="header-right">

                <a href="logout.php" class="btn btn-danger" title="Logout">Logout</a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="admin-header.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="managecategory.php"><i class="fa fa-desktop "></i>Manage Categories</a>                       
                    </li>
                    <li>
                        <a href="manageBrand.php"><i class="fa fa-desktop "></i>Manage Brand</a>                       
                    </li>
                    <li>
                        <a href="manageProduct.php"><i class="fa fa-desktop "></i>Manage Product</a>                       
                    </li>
                    <li>
                        <a href="manageFeaturesList.php"><i class="fa fa-desktop "></i>Manage Features List</a>                       
                    </li>
                    <li>
                        <a href="manageFeaturesValues.php"><i class="fa fa-desktop "></i>Manage Features Values</a>                       
                    </li>
                    <li>
                        <a href="manageImages.php"><i class="fa fa-desktop "></i>Manage Images</a>                       
                    </li>
                    
                    
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->