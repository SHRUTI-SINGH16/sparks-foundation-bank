<?php
include 'config.php';
$select = "SELECT * FROM transfer";
$select_query = mysqli_query($con, $select);
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
    <title>Sparks Bank</title>
</head>

<body style="background-color: #0000ff;">
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <div class="row">
            <h2 class="text-center" style="margin-top: 100px; color: black">Transaction History</h2>
            <br>

            <div class="col-md-offset-2 col-md-8" style="padding:20px;background : linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.6));">
                <table class="table" style="letter-spacing: 1px;font-size:18px;box-sizing: border-box; ">
                    <thead>
                        <tr style="text-align: center;">
                            <th style="text-align: center;  color:darksalmon">ID</th>
                            <th style="text-align: center;  color:darksalmon">Sender</th>
                            <th style="text-align: center;  color:darksalmon">Receiver</th>
                            <th style="text-align: center;  color:darksalmon">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($select_query)) {
                        ?>
                            <tr style="text-align: center; color : #ff3333;color:white">
                                <td><?php echo $row['sid'] ?></td>
                                <td><?php echo $row['sender'] ?></td>
                                <td><?php echo $row['receiver'] ?></td>
                                <td><?php echo $row['amount'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>