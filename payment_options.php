<div class="box"><!-- box Starts -->

<?php

$session_email = $_SESSION['customer_email'];

$select_customer = "select * from customers where customer_email='$session_email'";

$run_customer = mysqli_query($con,$select_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customer_id'];


?>

<h1 class="text-center">Payment Options For You</h1>

<p class="lead text-center">

<a href="order.php?c_id=<?php echo $customer_id; ?>">Pay Off line</a>

<div id="paypal-button-container"></div>
<p id="result-message"></p>

<script
            src="https://www.paypal.com/sdk/js?client-id=AVv_aRAjJO2tzzge5U4jmLI49zZXlcIdwY8mDGa5hUFADnc3rZw28coUA9ecbCEDAuBZ-rhz2O3lI3vY&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo,paylater,card"
            data-sdk-integration-source="developer-studio"></script>

</script>
  <script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '10.00'  // Specify the amount to charge (example: $10)
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                alert('Payment Successful! ' + details.payer.name.given_name);
            });
        },
        onError: function(err) {
            console.error('PayPal error:', err);
            alert('Something went wrong with the payment.');
        }
    }).render('#paypal-button-container');
</script>
</script>

</p>
</div><!-- box Ends -->
