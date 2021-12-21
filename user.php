<?php
include 'common.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sparks Bank</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="icon" href="https://internship.thesparksfoundation.info/assests/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:#4d4db2;">

    <?php
    include 'header.php';
    ?>


    <div class="container">
        <div class="row ">
            <br>
            <h2 class="text-center" style="margin-top: 100px; color: black">Create New User</h2>
            <br>
            <div class="col-md-offset-2 col-md-8" style="font-size:18px;text-align:center;background : linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.6));padding:20px">
                <form method="POST" action="user_script.php" style="text-align:left">
                    <div class="form-group">
                        <label for="name" style="color:peachpuff;">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                    </div><br>
                    <div class="form-group">
                        <label for="email" style="color:peachpuff;">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div><br>
                    <div class="form-group">
                        <label for="balance" style="color:peachpuff;">Balance</label>
                        <input type="number" class="form-control" step="0.01" name="balance" placeholder="Balance" required>
                    </div>
                    <br><br>
                    <button class="btn btn-danger" style="color:yellow;	background:brown;">Submit</button>

                </form>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>