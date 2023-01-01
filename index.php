<!-- connectiong php file -->
<?php
 include("./includes/connect.php")
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden Store-Ecommerce || PHP & MySQL</title>
    <!-- css linked -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- bootstrap css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
      .footer {
        color:red;
      }
    </style>
</head>
<body>
   
<!-- =========== Navbar =========== -->
<div class="container-fluid p-0">
    <!-- first child -->
<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <div class="nav-logo">
    <i class="fa-solid fa-truck-fast fa-2x"></i>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
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
          <a class="nav-link" href="#">
          <i class="fa-solid fa-cart-shopping"></i> <sup>1</sup>    
        </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price: 1000/-</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->

<nav class="navbar navabr-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto ">
    <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#">Welcome Guest</a>
        </li>
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Login</a>
        </li>
    </ul>
</nav>

<!-- third child -->
 <div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Communication is at the heart of e-commerce and community.</p>
 </div>

 <!-- fourth child -->
  <div class="row">
    <div class="col-md-10">
        <!-- products -->
         <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
             <img src="data:image/jpeg;base64,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" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Apple</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to Cart</a>
                  <a href="#" class="btn btn-secondary">View More</a>
               </div>
            </div>

            <!-- card end -->
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
             <img src="data:image/jpeg;base64,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" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Capsicum</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to Cart</a>
                  <a href="#" class="btn btn-secondary">View More</a>
               </div>
            </div>
            </div>
            <!--  -->
            <div class="col-md-4 mb-2">
            <div class="card">
             <img src="data:image/jpeg;base64,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" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Dairy Milk</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to Cart</a>
                  <a href="#" class="btn btn-secondary">View More</a>
               </div>
            </div>
            </div>

            <div class="col-md-4 mb-2">
            <div class="card">
             <img src="data:image/jpeg;base64,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" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Capsicum</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to Cart</a>
                  <a href="#" class="btn btn-secondary">View More</a>
               </div>
            </div>
            </div>

            <div class="col-md-4 mb-2">
            <div class="card">
             <img src="data:image/jpeg;base64,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" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Capsicum</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to Cart</a>
                  <a href="#" class="btn btn-secondary">View More</a>
               </div>
            </div>
            </div>

            <div class="col-md-4 mb-2">
            <div class="card">
             <img src="data:image/jpeg;base64,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" 
             class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Capsicum</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to Cart</a>
                  <a href="#" class="btn btn-secondary">View More</a>
               </div>
            </div>
            </div>


            <div class="col-md-4 mb-2">
            <div class="card">
             <img src="data:image/jpeg;base64,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" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Capsicum</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-info">Add to Cart</a>
                  <a href="#" class="btn btn-secondary">View More</a>
               </div>
            </div>
            </div>

            
        </div>
        
    </div>
    <div class="col-md-2 bg-secondary p-0"> 
         <!-- brands to be displayed  -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link  text-light"><h4>Delivery Brands</h4></a>
            </li>

            <?php
            $select_brands = "Select * from `brands`";
            $result_brands = mysqli_query($con,$select_brands);

            // $row_data = mysqli_fetch_assoc($result_brands);
            //  echo $row_data['brand_title'];
            //  echo $row_data['brand_title'];

            while( $row_data = mysqli_fetch_assoc($result_brands)){
              $brand_title = $row_data['brand_title'];
              $brand_id = $row_data['brand_id'];
              // echo $brand_title;
              echo "<li class='nav-item'>
              <a href='index.php?brand=$brand_title' class='nav-link  text-light'><p>$brand_title</p></a>
          </li>";
            }
              ?>
            <!-- <li class="nav-item ">
                <a href="#" class="nav-link  text-light"><p>Brand 1</p></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link  text-light"><p>Brand 2</p></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link  text-light"><p>Brand 3</p></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link  text-light"><p>Brand 4</p></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link  text-light"><p>Brand 5</p></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link  text-light"><p>Brand 6</p></a>
            </li> -->
        </ul>

        <!-- categories to be displayed -->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link  text-light"><h4>Categories</h4></a>
            </li>

            <?php
            $select_categories = "Select * from `categories`";
            $categories = mysqli_query($con,$select_categories);

            // $row_data = mysqli_fetch_assoc($result_brands);
            //  echo $row_data['brand_title'];
            //  echo $row_data['brand_title'];

            while( $row_data = mysqli_fetch_assoc($categories)){
              $category_title = $row_data['category_title'];
              $category_id = $row_data['category_id'];
              // echo $brand_title;
              echo "<li class='nav-item'>
              <a href='index.php?category=$category_id' class='nav-link  text-light'><p>$category_title</p></a>
          </li>";
            }
              ?>

        </ul>
    </div>
  </div>

<!-- last child -->
<div class=" footer bg-info p-3 text-center color-light">
  <p>All rights reserved by Swapnil Shelke</p>
</div>
</div>

    <!-- bootstrap js linked -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>