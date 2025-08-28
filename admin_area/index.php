<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" 
    crossorigin="anonymous">

    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" 
    integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- css file link-->
    <link rel="stylesheet" href="../style.css">

    <!-- style-->
    <style>
        .admin_image{
            width: 100px;
            object-fit: contain;
        }

        .footer{
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body>
    <!-- navbar-->
    <div class="container-fluid p-0">
        <!-- first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="logo" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Hello</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

        <!-- second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">
                Manage Details
            </h3>
        </div>

        <!-- third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                <div class="px-5">
                    <a href="#">
                        <img src="../images/pineapple.jpg" alt="pineapple" class="admin_image">
                    </a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <!-- button*10>a.nav-link.text-light.bg-info.my-1 -->
                <div class="button text-center">
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                    <button class= "my-3"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                    <button class= "my-3"><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
                    <button class= "my-3"><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                </div>
            </div>
        </div>
    </div>

    <!-- fourth child-->
    <div class="container my-5">
        <?php 
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand'])){
                include('insert_brands.php');
            }
        ?>
    </div>


<!-- last child -->
<div class="bg-info p-3 text-center footer">
    <p> All rights reserved @- Designed by Hoang-2025</p>
</div>

<!-- Bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
crossorigin="anonymous"></script>

</body>
</html>