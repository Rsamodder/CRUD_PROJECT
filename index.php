<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Expire-date</th>
      <th scope="col">Description</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php

    $sql = "Select * from `crud`";
    $r = mysqli_query($conn,$sql);
    if($r){
        /*$row=mysqli_fetch_assoc($r);
        echo $row['Name'];
    }*/
        while($row=mysqli_fetch_assoc($r)){
            $id=$row['ID'];
            $name=$row['Name'];
            $quantity=$row['Quantity'];
            $price=$row['Price'];
            $date=$row['Expire_date'];
            $description=$row['Description'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$quantity.'</td>
            <td>'.$price.'</td>
            <td>'.$date.'</td>
            <td>'.$description.'</td>
            <td>
            <button class="btn btn-success" ><a href="update.php?updateid='.$id.'"" class="text-light">Update</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
          </tr>';
        }
    }
  ?>

</tbody>
</table>

        <button class="btn btn-primary" ><a href="product.php" class="text-light">Add New Product</button>
    
    </div>    
</body>
</html>