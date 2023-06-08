<?php
require '../common/navbar.php';
?>
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <?php
      if(isset($_SESSION['add_msg'])){
        echo $_SESSION['add_msg'];
        unset($_SESSION['add_msg']);
      }else if(isset($_SESSION['update_msg'])){
        echo $_SESSION['update_msg'];
        unset($_SESSION['update_msg']);
      }else if(isset($_SESSION['delete_msg'])){
        echo $_SESSION['delete_msg'];
        unset($_SESSION['delete_msg']);
      }else if(isset($_SESSION['delete_error'])){
        echo $_SESSION['delete_error'];
        unset($_SESSION['delete_error']);
      }
  ?>
<table  border=2 class="table" >
  <thead>
    <tr>
      <th scope="col">productId</th>
      <th scope="col">productname</th>
      <th scope="col">productDesc</th>
      <th scope="col">productPrice</th>
      <th scope="col">ProductCode</th>
      <th scope="col">ProductCat</th>
      <th scope="col">productDiscount</th>
      <th scope="col">ProductStatus</th>
      <th scope="col">ProductQty</th>
      <th scope="col">Productimg</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <?php
     include '../common/_dbconnect.php';

     $data=mysqli_query($conn,"SELECT * FROM   `addproduct` ORDER BY productId DESC");
     while($row = mysqli_fetch_array($data)){ 
      ?>
      
          <tr>
              <td><?php echo  $row['productId'];?></td>
              <td><?php echo  $row['productname'];?></td>
              <td><?php echo  $row['productDesc'];?></td>
              <td><?php echo  $row['productPrice'];?></td>
              <td><?php echo  $row['ProductCode'];?></td>
              <td><?php echo  $row['productCat'];?></td>
              <td><?php echo  $row['productDiscount'];?></td>
              <td><?php echo  $row['ProductStatus'];?></td>
              <td><?php echo  $row['ProductQty'];?></td>
              <td><img src="../assets/uploaded-images/<?php echo $row['Productimg'];?>" height="100px" width="100px"></td>
              <td> <a href='update_product.php?productId=<?php echo  $row['productId'];?>' class = 'btn btn-success'>Edit</a></td>
              <td>  <a href='../process/process_delete_product.php?productId=<?php echo  $row['productId'];?>' class = 'btn btn-danger'>Delete</a></td>
              <td></td>
          </tr> 
       <?php   
      }?>
      
    
  </tbody>
</table>

</body>
</html>