
<?php

include("../includes/connect.php");
if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];

    // select data from db 
    $select_query = "select * from `brands` where brand_title = '$brand_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number > 0){
        echo "<script> alert(`Brand present allready`)</script>" ;
    }else {
    
    $insert_query= "insert into `brands` (brand_title) values ('$brand_title')";
    $result = mysqli_query($con,$insert_query);
    if($result){
        echo "<script> alert(`Brand added successfully`)</script>" ;
    }

}
}

?>

<h2 class="text-center">
    Insert Brands
</h2>


<form action="" method="post" >
<div class="input-group w-9 mb-1">
  <span class="input-group-text " id="basic-addon1">
    <i class="fa-solid icon__categories fa-receipt"></i>
 </span>


  <input type="text" 
  name="brand_title"  
  class="form-control" 
  placeholder="Insert Brands" 
  aria-describedby="basic-addon1">


</div>

<div class="">
 
  <input  
  class="bg-info border-0 p-2 my-3"
  type="submit" 
  name="insert_brand"
  value="Insert Brands"  
  class="form-control" 
  >
  
</div>
</form>