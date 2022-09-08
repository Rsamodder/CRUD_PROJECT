<?php

include 'connect.php';

$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
        $r = mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($r);
        $name=$row['Name'];
        $quantity=$row['Quantity'];
        $price=$row['Price'];
        $date=$row['Expire_date'];
        $description=$row['Description'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $date=$_POST['date'];
    $description=$_POST['description'];

    $sql="update `crud` set ID=$id , Name='$name', Quantity='$quantity', Price='$price', Expire_date='$date',Description= '$description' where id = $id";
    $r=mysqli_query($conn,$sql);

    if($r){
        //echo"updated";
        header('location:index.php');
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container my-4">
    <form method="post">
  <div class="mb-3">
    <label class="form-label">Product Name:</label>
    <input type="text" class="form-control" placeholder="Enter Product Name" name="name" value=<?php echo $name;?>>
  </div>

  <div class="mb-3">
    <label class="form-label">Quantity:</label>
    <input type="number" class="form-control" placeholder="Enter Product Quantity" name="quantity" value=<?php echo $quantity;?>>
  </div>

  <div class="mb-3">
    <label class="form-label">Price:</label>
    <input type="double" class="form-control" placeholder="Enter Product Price" name="price" value=<?php echo $price;?>>
  </div>

  <div class="mb-3">
    <label class="form-label">Expire Date:</label>
    <input type="date" class="form-control" placeholder="Enter Expire Date" name="date" value=<?php echo $date;?>>
  </div>

  <div class="mb-3">
    <label class="form-label">Description:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1"  rows="3" name="description" value=<?php echo $description;?>></textarea>
    <div id="emailHelp" class="form-text">Please give some information about the product.</div>
  </div>
  
  <button type="submit" class="btn btn-success" name="submit" >Update</button>
</form>
    </div>
  </body>
</html>
