<?php

include("../includes/connect.php");
if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];

    // select data from db 
    $select_query = "select * from `categories` where category_title = '$category_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);
    if($number>0){
        echo "<script> alert(`Category present allready`)</script>" ;
    }else {
    
    $insert_query= "insert into `categories` (category_title) values ('$category_title')";
    $result = mysqli_query($con,$insert_query);
    if($result){
        echo "<script> alert(`category added successfully`)</script>" ;
    }

}
}

?>

<h2 class="text-center">
    Insert Categories
</h2>


<form action="" method="post" >
<div class="input-group w-9 mb-1">
  <span class="input-group-text " id="basic-addon1">
    <i class="fa-solid icon__categories fa-receipt"></i>
 </span>
  <input type="text" 
  name="cat_title"  
  class="form-control" 
  placeholder="Insert categories" 
  aria-label="Username" 
  aria-describedby="basic-addon1">
</div>

<div class="input-group m-auto ">
 
  <input 
  type="submit" 
  name="insert_cat"
  value="Insert categories"  
  class="bg-info border-0 p-2 mt-2" 
  >
  

   <!-- <button class="p-2 my-3 border-0">Insert categories</button> -->
</div>


</form>