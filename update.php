<?php
include('connection.php');
$id=$_GET["updateid"];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];


    $sql= "update `crud`set id=$id, name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "updated inserted succesfully";
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name"  value=<?php echo $name;?>>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" value=<?php echo $email;?>>
            </div>

            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" value=<?php echo $mobile;?>>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password;?>>
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>