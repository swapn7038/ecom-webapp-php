<?php

include("../includes/connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Boss-Instruct Products here || Admin dashboard</title>

    <!-- css linked -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- bootstrap css link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" 
    referrerpolicy="no-referrer" />

    <!-- css linked -->
    <link rel="stylesheet" href="../style.css">

    <style>
        body {
            background-color:#aaa;
        }

        h1 {
            text-shadow:2px 2px 4px rgba(0,0,0,0.5);
        }

        .btn {
            background-color:transparent;
            color:black;
            font-size:.9rem;
            border:2px solid black;
            border-radius:.5rem;
            font-weight:600;
            transition:.4s;
        }

        .btn:hover {
            background-color:transparent;
            border:2px solid yellow;
            color:yellow;
            text-shadow:3px 3px 6px rgba(0,0,0,.5);
            box-shadow:3px 3px 6px rgba(0,0,0,.5);
        }
    </style>

</head>
<body class="">
    <div class="container">
        <h1 class="text-center mt-3">Insert Products</h1>

        <!-- form -->
        <form  method="post" enctype="multipart/form-data">
            <!-- title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>

                <input class="form-control" placeholder="Enter product title" required="required" autocomplete="off" type="text" name="product_title" id="product_title">
            </div>

            <!-- description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description_title" class="form-label">Description Title</label>

                <input class="form-control" placeholder="Enter description of product" required="required" autocomplete="off" type="text" name="description_title" id="description_title">
            </div>

            <!-- product keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Keywords Title</label>

                <input class="form-control" placeholder="Enter keywords" required="required" autocomplete="off" type="text" name="product_keywords" id="keywords_title">
            </div>


            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_category" class="product_category form-select">
                 <option value="">Select Category</option>
                 <?php

                 $select_query="Select * from `categories` ";
                 $result_query = mysqli_query($con, $select_query);

                 while($row=mysqli_fetch_assoc($result_query)){
                  $category_title = $row['$category_title'];
                  $category_id = $row['$category_id'];

                  echo "<option value='$category_id'>$category_title</option>";
                 }

                 ?>
               </select>
            </div>

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
               <select name="product_brands" class="product_brands form-select">
                 <option value="">Select Brands</option>
                    <?php

                 $select_query="Select * from `brands` ";
                 $result_query = mysqli_query($con, $select_query);

                 while($row=mysqli_fetch_assoc($result_query)){
                  $brand_title = $row['$brand_title'];
                  $brand_id = $row['$brand_id'];

                  echo "<option value='$brand_id'>$brand_title</option>";
                 }

                 ?>
               </select>
            </div>

              <!-- Image 1 -->
              <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" 
                class="form-label">Product Image 1</label>

                <input 
                  class="form-control" 
                  placeholder="Enter Image" 
                  required="required" 
                  type="file" 
                  name="product_image1"
                  id="product_image1">
            </div>

              <!-- Image 2-->
              <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" 
                class="form-label">Product Image 2</label>

                <input 
                  class="form-control" 
                  placeholder="Enter Image" 
                  required="required" 
                  type="file" 
                  name="product_image2"
                  id="product_image2">
            </div>

              <!-- Image 3 -->
              <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" 
                class="form-label">Product Image 3</label>

                <input 
                  class="form-control" 
                  placeholder="Enter Image" 
                  required="required" 
                  type="file" 
                  name="product_image3"
                  id="product_image3">
            </div>


             <!-- price -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label 
                   for="product_price" 
                   class="form-label"></label>

                <input 
                  class="form-control" 
                  placeholder="Product Price" 
                  required="required" 
                  autocomplete="off" 
                  type="text" 
                  name="product_price" 
                  id="product_price">
            </div>

             <!-- price -->
             <div class="form-outline mb-4 w-50 m-auto">

                <input 
                  class="btn btn-info" 
                  type="submit" 
                  value="Insert products"
                  >
            </div>



        </form>
    </div>
</body>
</html>