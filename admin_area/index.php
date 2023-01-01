<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

     <!-- font awesome link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

        /*  */
        .container-fluid > .fa-truck-fast  {
            font-size:4rem;
            /* border:3px solid; */
        }

        .admin_image {
              width: 80px;
              object-fit: contain;
              border-radius:50%;
              box-shadow:3px 3px 6px rgba(0,0,0,0.5);
        }

        .gradiect{
            background:linear-gradient(#0dcaf0, #d63384);
        }

        .nav-link{
            color:black;
            font-size:.8rem;
            font-weight:600;
        }

        .button {
            margin-left:2rem;
        }

        button {
            box-shadow:3px 3px 6px rgba(0,0,0,0.6);
            border-radius:.5rem;
            border:none;
            /* margin-top:3px; */
        }

        /* footer css */

        .footer {
            color:black;
            font-size: 1rem;
            position: absolute;
            bottom: 0;
            margin:auto;
            width: 100%;
        }

    </style>
</head>
<body>

   <div class="container-fluid p-0">
    <!-- first child -->
       <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
        <i class="fa-solid fa-truck-fast fa-2x admin__logo"></i>
           <nav class="navbar-expand-lg">
            <ul class="navbar-nav">
                <li class="nav-item"> <a href="#" class="nav-link"></a>Welcome Guest</li>
            </ul>
           </nav>
        </div>
       </nav>

       <!-- second child -->
       <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
       </div>

       <!-- third child -->
       <div class="row">
        <div class="col-md-12 gradiect p-0 d-flex align-items-center ">
            <div class="p-3">
                <a href="#"> <img class="admin_image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXCiQOiSpi-t094_h9TmGZxm6mz9SjbHscGA&usqp=CAU" alt=""> </a>
                <p class="text-align text-center">Swapnil Shelke</p>
            </div>

            <div class="button text-center">
                <button><a href="insert_product.php" class="nav-link p-1 ">Insert products</a></button>
                <button><a href="" class="nav-link p-1">View Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link p-1">Insert Categories</a></button>
                <button><a href="" class="nav-link p-1">View Categories</a></button>
                <button><a href="index.php?insert_brand" class="nav-link p-1">Insert Brands</a></button>
                <button><a href="" class="nav-link p-1">View Brands</a></button>
                <button><a href="" class="nav-link p-1">All orders</a></button>
                <button><a href="" class="nav-link p-1">All Payments</a></button>
                <button><a href="" class="nav-link p-1">List Users</a></button>
                <button><a href="" class="nav-link p-1 ">Logout</a></button>
            </div>
        </div>
       </div>

       <!-- fourth child -->
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
   </div>
    
    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>