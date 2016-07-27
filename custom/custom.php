<!DOCTYPE html>
<script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.17.js"></script>
<script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.17.min.js"></script>
<script src="https://js.braintreegateway.com/v2/braintree.js"></script>
<?php

require("config.php");
$clientToken = Braintree_ClientToken::generate();

?>

<form id="checkout" action="custom_hosted_subscription.php" method="post">
  <input data-braintree-name="number" value="4111111111111111">
  <input data-braintree-name="cvv" value="100">

  <input data-braintree-name="expiration_date" value="10/20">



  <input data-braintree-name="postal_code" value="94107">
  <input data-braintree-name="cardholder_name" value="John Smith">

  <input type="submit" id="submit" value="Pay">
</form>
<script type="text/javascript">
cToken="<?php echo $clientToken ?>";
// alert(cToken);

braintree.setup(cToken, 'custom', {id: 'checkout'});
</script>

