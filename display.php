<?php
include_once 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <button class=" btn btn-primary my-5"><a href="user.php"
    class="text-light">Add user</a>
    </button> 
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S1 no</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>


  <?php
  
  $sql="select * from crud";
  $result=mysqli_query($con,$sql);
  $i=1;
  if($result){
    while( $row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $Name=$row['Name'];
        $email=$row['Email'];
        $mobile=$row['Mobile'];
        $password=$row['Password'];
        echo '<tr>
        <th scope="row">'.$i.'</th>
        <td>'.$Name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary">
    <a href="Update.php?updateid='.$id.'" class="text-light">Update</a>
</button>
<button class="btn btn-danger">
    <a href="Delete.php?deleteid='.$id.'" class="text-light">Delete</a>
</button>

       <td>
      </tr>';
      $i++;
    }
  }

  
  
  ?>

    
  </tbody>
</table>

</div>
    
</body>
</html>