<?php
include('connection.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql= "insert into `crud` (name,email,mobile,password)
    values('$name','$email','$mobile','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Data inserted succesfully";
          header('location:display.php');
    } else{
        die(mysqli_error($conn));
    }
    
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootsrapcdn.com/bootsrap/4.0.0/css/bootsrap.min.css">
</head>

<body>
    <div class="container margin-5">

        <form method="post">

            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>

            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>