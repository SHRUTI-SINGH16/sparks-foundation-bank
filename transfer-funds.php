<?php
include 'config.php';
$sid = $_GET['id'];
$select = "SELECT * FROM  users where id=$sid";
$select_query = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($select_query);
if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $select = "SELECT * from users where id=$from";
    $select_query = mysqli_query($con, $select);
    $row1 = mysqli_fetch_array($select_query); // returns array or output of user from which the amount is to be transferred.

    $receiver = "SELECT * from users where id=$to";
    $query = mysqli_query($con, $receiver);
    $row2 = mysqli_fetch_array($query);

    // constraint to check input of negative value by user
    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }
    // constraint to check insufficient balance.
    else if ($amount > $row1['balance']) {
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    // constraint to check zero values
    else if ($amount == 0) {
        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        // deducting amount from sender's account
        $newbalance = $row1['balance'] - $amount;
        $new = "UPDATE users set balance=$newbalance where id=$from";
        mysqli_query($con, $new);
        // adding amount to reciever's account
        $newbalance = $row2['balance'] + $amount;
        $new2 = "UPDATE users set balance=$newbalance where id=$to";
        mysqli_query($con, $new2);
        $sender = $row1['name'];
        $receivr = $row2['name'];
        $insert = "INSERT INTO transfer(`sender`, `receiver`, `amount`) VALUES ('$sender','$receivr','$amount')";
        $query = mysqli_query($con, $insert);

        if ($query) {
            echo "<script> alert('Transaction Successful');
window.location='transaction-history.php';
</script>";
        }
        $newbalance = 0;
        $amount = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="icon" href="https://internship.thesparksfoundation.info/assests/img/logo.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Sparks Bank</title>
</head>

<body style="background-color: #007a33;">
    <?php
    include 'header.php';
    ?>

    <div class="container">
        <h2 class="text-center" style="margin-top: 100px; color:black;">Transaction</h2>
        <br>
        <br>
        <div class="row">
            <form method="POST" name="send" style="background : linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.6));padding:20px">
                <table class="table table-hover" style="color:lightcoral; font-size:17px">
                    <thead>
                        <th style="text-align: center;  color:darksalmon">ID</th>
                        <th style="text-align: center;  color:darksalmon">Name</th>
                        <th style="text-align: center;  color:darksalmon">Email</th>
                        <th style="text-align: center;  color:darksalmon">Balance</th>
                    </thead>
                    <tbody>
                        <tr style="color: white; ">
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['balance'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
                <label style="color:darksalmon; font-size:20px ">Transfer To:</label>
                <select name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                    $sid = $_GET['id'];
                    $select = "SELECT * FROM  users where id!=$sid ";
                    $select_query = mysqli_query($con, $select);
                    while ($row = mysqli_fetch_assoc($select_query)) {
                    ?>
                        <option class="table" value="<?php echo $row['id']; ?>">
                            <?php echo $row['name']; ?>
                        </option>
                    <?php
                    }
                    ?>
                    <div>
                </select>
                <br>

                <label style="color: darksalmon ; font-size:20px">Amount:</label>
                <input type="number" class="form-control" step="0.01" name="amount" required>
                <br><br>
                <div class="text-center">
                    <button class="btn btn-danger" name="submit" type="submit" style="color:yellow;	background:brown;">Transfer</button>
            </form>
        </div>
    </div>
</body>

</html>