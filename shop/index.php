<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/2/2017
 * Time: 2:04 PM
 */
session_start();
$page="";
if(isset($_GET['page'])){
    $page=$_GET['page'];
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Smart Shop</title>
    <link type="text/css" href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/fullcalendar.min.css" rel="stylesheet">
    <script type="javascript" src="bootstrap/js/bootstrap.js" rel="script"></script>
    <script type="javascript" src="bootstrap/js/jquery.js" rel="script"></script>
    <script src="bootstrap/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <style>
        .common{background-color: gainsboro; color: gainsboro;}
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="span12">
            <div class="row-fluid">
                <div class="span12">
                    <div class="navbar navbar-fixed-top navbar-default">
                        <div class="navbar-inner">
                            <div class="row-fluid">
                                <div class="span2">
                                    <img src="" alt="Logo">
                                </div>
                                <div class="span8">Header

                                </div>
                                <div class="span2"><span class="icon-user"></span><span class="badge">Logout</span><label>Username<i> Logged in</i></label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <hr>
                <div class="span12">
                    <div class="row-fluid">
                        <div class="span3">
                            <ul class="nav nav-list bs-docs-sidenav">
                                <li class="active">
                                    <a href="index.php?page=home"><span class="icon-home"></span>Home</a>
                                </li>
                                <li class="active">
                                    <a href="#">Manage Products</a>
                                </li>
                                <li><a href="index.php?page=category_form"><span class="icon-pencil"></span>Edit Categories</a></li>
                                <li><a href="index.php?page=category_table"><span class="icon-eye-open"></span>View Categories</a></li>
                                <li><a href="index.php?page=product_form"><span class="icon-pencil"></span>Edit Product(s)</a></li>
                                <li><a href="index.php?page=product_table"><span class="icon-eye-open"></span>View Product(s)</a></li>
                                <li class="active">
                                    <a href="#">Orders</a>
                                </li>
                                <li><a href="index.php?page=order_table"><span class="icon-eye-open"></span>Check Orders</a></li>
                                <li><a href="index.php?page=order_form"><span class="icon-edit"></span>Make Order</a></li>
                                <li class="active">
                                    <a href="#">Customer</a>
                                </li>
                                <li><a href="index.php?page=customer_form"><span class="icon-pencil"></span>Edit Customer</a></li>
                                <li><a href="index.php?page=customer_table"><span class="icon-eye-open"></span>View Customer(s)</a></li>
                                <li class="active">
                                    <a href="#">Users</a>
                                </li>
                                <li><a href="index.php?page=user_form"><span class="icon-pencil"></span>Edit User</a></li>
                                <li><a href="index.php?page=user_table"><span class="icon-eye-open"></span>View User(s)</a></li>
                                <li class="active">
                                    <a href="#"><span class="icon-star-empty"></span>System Setting</a>
                                </li>
                                <li class="active">
                                    <a href="#"><span class="icon-hand-right"></span>Help</a>
                                </li>
                            </ul>
                        </div>
                        <div class="span8">
                            <div class="" style="border-width: 3px; border-color: #808080;">

                                <?php
                                if(isset($page)){
                                    switch($page){
                                        case'':

                                            break;
                                        case'home':
                                            header("Location:index.php");
                                            break;
                                        case'category_form':
                                            include("category_form.php");
                                            break;
                                        case'category_table':
                                            include("category_table.php");
                                            break;
                                        case'product_form':
                                            include("product_form.php");
                                            break;
                                        case'product_table':
                                            include("product_table.php");
                                            break;
                                        case'customer_form':
                                            include("customer_form.php");
                                            break;
                                        case'customer_table':
                                            include("customer_table.php");
                                            break;
                                        case'user_form':
                                            include("user_form.php");
                                            break;
                                        case'order_table':
                                            include("order_table.php");
                                            break;
                                        case'order_details':
                                            include("order_details.php");
                                            break;
                                        case'order_form':
                                            include("order_form.php");
                                            break;
                                        case'user_table':
                                            include("user_table.php");
                                            break;
                                        case'page_not_found':
                                            //include("message.php");
                                            break;
                                        default:
                                            $_SESSION['page_found']=false;
                                            include("message.php");
                                            break;
                                    }
                                }
                                ?>



                            </div>
                        </div>
                    </div>
                </div>
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar navbar-inner navbar-static">Footer</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
</html>