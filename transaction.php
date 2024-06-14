<?php 
session_start();
$membershipPrice = $_SESSION['membershipPrice'];
$membershipType = $_SESSION['membershipType'];
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

    <!--Customized Bootstrap Stylesheet -->
    <link href="../front-end/lib/bootsrtap/css/style.min.css" rel="stylesheet">

    <!--css-->
    <link rel="stylesheet" href="../front-end/scripts/css/payment.css">
</head>

<body class="bg-white">
    <div class="container mt-6">
        <ul class="nav nav-tabs justify-content-center" id="myTabs">
            <li class="nav-item">
              <a class="nav-link " href="#">Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#">Offer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Payment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Receipt</a>
            </li>
        </ul>
        
        <!--transaction details-->
        <!-- <form action="../back-end/php/store-data.php" method="get">
        <p>Selected Membership:</p>
        </form> -->
        <div class="tab-pane" id="payment">
    <form action="../back-end/php/store-data.php" method="POST">
        <div class="payment-container">
            <h3>Payment Details</h3>
            <p>Selected Membership: <span id="selectedMembership"><?php echo $membershipType; ?></span></p>
            <p>Amount: <span id="amount"><?php echo $membershipPrice; ?></span>/month</p>
            <div class="form-group">
                <label for="paymentMethod">Payment Method:</label>
                <select id="paymentMethod" name="paymentMethod">
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="Prepaid Card">Prepaid Cards</option>
                    <option value="Gift Cards">Gift Cards</option>
                </select>
            </div>
            <div class="payment">
                <span>Card Number:</span>
                <input type="number" name="cardNumber" required>
                <span>Expiration date:</span>
                <input type="date" name="cardDate" required>
                <span>Security Code:</span>
                <input type="number" name="cardCode" required>
                <br>
                <br>
                <span>Billing address:</span>
                <input type="text" name="cardAddress" required>
                <span>Cardholder name:</span>
                <input type="text" name="cardName" required>
                <br>
                <br>
            </div>
            <button name="confirm" type="submit" class="btn btn-primary">Confirm</button>
        </div>
    </form>
</div>

            <style>
              .payment-container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f5f5f5;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .payment-container h3 {
                text-align: center;
                margin-bottom: 20px;
            }

            .payment-container p {
                margin-bottom: 10px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .payment span {
                display: block;
                margin-bottom: 5px;
            }

            .payment input[type="number"],
            .payment input[type="date"],
            .payment input[type="text"] {
                width: 100%;
                padding: 5px;
                border-radius: 5px;
                border: 1px solid #ccc;
            }

            .btn-primary {
                display: block;
                width: 100%;
                max-width: 200px;
                margin: 20px auto 0;
            }
            </style>

        

    <!-- JavaScript Libraries-->
    <script src="../front-end/lib/jQuery/min.js"></script>
    <script src="../front-end/lib/bootsrtap/js/min.js"></script>
    <script src="../front-end/lib/easing/easing.min.js"></script>
    <script src="../front-end/lib/waypoints/waypoints.min.js"></script>

    <!--Contact Javascript File-->
    <script src="../front-end/mail/jqBootstrapValidation.min.js"></script>
    <script src="../front-end/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../front-end/scripts/js/payment.js"></script>
</body>

</html>