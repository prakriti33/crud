<?php
include('connection.php');

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
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">opertations</th>


                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "Select * from `crud` ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td>
                       <button class= btn btn-primary><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                      <button class="btn btn-danger"> <a href="delete.php?deleteid='.$id.'" class="text-light" >Delete</a></button>
                    </td>                                                                                                                      

                </tr>';
                    }
                }


                ?>
               
            </tbody>
        </table>
    </div>
</body>

</html>