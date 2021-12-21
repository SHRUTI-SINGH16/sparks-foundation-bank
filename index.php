<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="icon" href="https://internship.thesparksfoundation.info/assests/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>The Sparks Foundation Bank</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>



    <div class="frontpage"></div>

    <div class="container">

        <div class="welcome" style="color:white;padding:20px;background : linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.6));">
            <h3>Welcome to </h3>
            <h1>The Sparks Foundation Bank</h1>
            <p>Banking made easy | Fast and secure transactions | Hassle-Free Banking</p>
        </div>



    </div>
    </div>


    <!-- Activity section -->
    <div class="projects">

        <div class="link">
            <a href="user.php">CREATE USER</a>
        </div>
        <div class="link">
            <a href="transfer.php">TRANSFER FUNDS</a>
        </div>
        <div class="link">
            <a href="transaction-history.php">TRANSACTION HISTORY</a>
        </div>
    </div>



    <?php
    include 'footer.php';
    ?>
</body>

</html>