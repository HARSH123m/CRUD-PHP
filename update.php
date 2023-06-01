<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$email=$row['Email'];
$mobile=$row['Mobile'];
$password=$row['Password'];

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Sanitize inputs
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $mobile = mysqli_real_escape_string($con, $mobile);
    $password = mysqli_real_escape_string($con, $password);

    $sql = "UPDATE `crud` SET id=$id,name='$name', email='$email', mobile='$mobile', password='$password' WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location: display.php');
    } else {
       echo "Query Failed!";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>CRUD Operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
            <label>Name</label>
<input type="text" class="form-control"
       placeholder="Enter your Name" 
       name="name" autocomplete="off" value="<?php echo $name; ?>">

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control"
                 placeholder="Enter your Email"
                  name="email" autocomplete="off" value="<?php echo $email;?>">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control"
                 placeholder="Enter your mobile number"
                  name="mobile" autocomplete="off" value="<?php echo $mobile;?>">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control"
                 placeholder="Enter your password"
                  name="password" autocomplete="off" value="<?php echo $password;?>">
            </div>

            

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://
