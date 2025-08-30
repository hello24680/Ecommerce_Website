<!-- connect to database-->
<?php
    include('includes/connect.php'); // database connection to this page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website using PHP and MySQL</title>
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar-->
    <div class="container-fluid p-0">
        <!-- first child-->
        <!-- bg-info is a bootstrap class (background color light blue); navbar-expand-lg is a bootstrap class (for responsive design) (hiển thị nội dung co giãn phù hợp trên tất cả các màn hình thiết bị khác nhau) -->
        <nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="logo" class="logo"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: 100/-</a>   
        </li>

        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    </div>


<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Welcome Guest</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
  </ul>
    
</nav>

<!-- third child-->
<div class="bg-light">
  <h3 class="text-center">Hidden Store</h3>
  <p class="text-center">
    Communication is at the heart of e-commerce and community
  </p>
</div>

<!-- fourth child-->
<div class="row">
  <div class="col-md-10">
    <!-- products-->
    <div class="row">
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="./images/apple.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>          
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="./images/snickers.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>          
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="./images/snickers.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>          
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="./images/snickers.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>          
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-2">
        <div class="card">
          <img src="./images/snickers.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
            <a href="#" class="btn btn-info">Add to cart</a>
            <a href="#" class="btn btn-secondary">View more</a>          
          </div>
        </div>  
      </div>
    </div>
  </div>
  <div class="col-md-2 bg-secondary p-0">
    <!-- brands to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>
      <?php 
        $select_brands = "select * from `brands`";
        $result_brands = mysqli_query($con, $select_brands);
        // $row_data = mysqli_fetch_assoc($result_brands);
        // echo $row_data['brand_title'];
        while($row_data = mysqli_fetch_assoc($result_brands)){
          $brand_title = $row_data['brand_title'];
          echo "<li class='nav-item'>
                  <a href='#' class='nav-link text-light'>$brand_title</a>
                </li>";
        }
      ?>
    </ul>

    <!-- categories to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">Category1</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">Category2</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">Category3</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">Category4</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-light">Category5</a>
      </li>
    </ul>
  </div>
</div>

<!-- last child -->
<div class="bg-info p-3 text-center">
    <p> All rights reserved @- Designed by Hoang-2025</p>
</div>

<!-- Bootstrap JS link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" 
crossorigin="anonymous"></script>

</body>
</html>