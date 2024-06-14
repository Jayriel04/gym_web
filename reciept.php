<?php
// session_start();
// include '../back-end/php/connect-DB.php';
include '../back-end/php/store-data.php';
$membershipType = $_SESSION['membershipType'];
$membershipPrice = $_SESSION['membershipPrice'];
$paymentMethod = $_SESSION['paymentMethod'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gymnast</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon-->
    <link href="img/favicon.ico" rel="icon">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="../front-end/lib/jQuery/min.js" rel="stylesheet">

    <!--Flaticon Fon
    <link href="../front-end/lib/flaticon/font/flaticon.css" rel="stylesheet">
    -->

    <!--Customized Bootstrap Stylesheet -->
    <link href="../front-end/lib/bootsrtap/css/style.min.css" rel="stylesheet">

    <!--css-->
    <link rel="stylesheet" href="../front-end/scripts/css/payment.css">
</head>

<!--nav_header-->
<body class="bg-white">
    <div class="container mt-6">
        <ul class="nav nav-tabs justify-content-center" id="myTabs">
            <li class="nav-item">
              <a class="nav-link " href="#">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Offer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="transaction.php">Reciept</a>
            </li>
        </ul>

        <style>
                .container-receipt {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #f5f5f5;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .receipt-heading {
                    text-align: center;
                    margin-bottom: 20px;
                }

                .receiptItem {
                    margin-bottom: 10px;
                }

                .receiptLabel {
                    font-weight: bold;
                    margin-right: 10px;
                }

                .receiptValue {
                    font-weight: normal;
                }

                .btn-primary {
                    display: block;
                    width: 100%;
                    max-width: 200px;
                    margin: 20px auto 0;
                }
        </style>

        <div class="container-receipt">
    <h3 class="receipt-heading">Receipt</h3>
    <div id="receiptContent">
        <div class="receiptItem">
            <span class="receiptLabel">User:</span>
            <span class="receiptValue"><?php echo $firstName .' '. $lastName;?></span>
        </div>
        <div class="receiptItem">
            <span class="receiptLabel">Email:</span>
            <span class="receiptValue"><?php echo $email;?></span>
        </div>
        <div class="receiptItem">
            <span class="receiptLabel">Phone Number:</span>
            <span class="receiptValue"><?php echo $phonenumber;?></span>
        </div>
        <div class="receiptItem">
            <span class="receiptLabel">Address:</span>
            <span class="receiptValue"><?php echo $address;?></span>
        </div>
        <div class="receiptItem">
            <span class="receiptLabel">Membership Type:</span>
            <span class="receiptValue"><?php  echo $membershipType;?></span>
        </div>
        <div class="receiptItem">
            <span class="receiptLabel">Price:</span>
            <span class="receiptValue"><?php echo $membershipPrice ?> </span>
        </div>
        <div class="receiptItem">
            <span class="receiptLabel">Payment Method:</span>
            <span class="receiptValue"><?php echo $paymentMethod;?></span>
        </div>
        <button type="submit" name="return" class="btn btn-primary" href="index.html"><a href="index.html" style="text-decoration: none; color: white; ">Return</a></button>
    </div>
</div>
  </div>
    <!-- JavaScript Libraries-->
    <script src="../front-end/lib/jQuery/min.js"></script>
    <script src="../front-end/lib/bootsrtap/js/min.js"></script>
    <script src="../front-end/lib/easing/easing.min.js"></script>
    <script src="../front-end/lib/waypoints/waypoints.min.js"></script>

    <!--Contact Javascript File-->
    <script src="../front-end/mail/jqBootstrapValidation.min.js"></script>
    <!-- <script src="../front-end/lib/bootsrtap/js/bootstrap.min.js"></script> -->
    <script src="../front-end/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../front-end/scripts/js/payment.js"></script>
    <!-- <script src="../front-end/scripts/js/connect-db.js"></script> -->
</body>

</html>
