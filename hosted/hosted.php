<html>
<head><title>Brain Tree test</title>
<script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.17.js"></script>
<script src="https://js.braintreegateway.com/js/beta/braintree-hosted-fields-beta.17.min.js"></script>
<style>
#card-number {
  border: 1px solid red;
  -webkit-transition: border-color 160ms;
  transition: border-color 160ms;
  height:31px;
  width:200px;
  border-radius : 10px;
}
#card-number.braintree-hosted-fields-focused {
  border-color: #777;
  line-height:31px;
}

#card-number.braintree-hosted-fields-invalid {
  border-color: tomato;
   line-height:31px;
}

#card-number.braintree-hosted-fields-valid {
  border-color: limegreen;
   line-height:31px;
}
#expiration-date {
  border: 1px solid #333;
  -webkit-transition: border-color 160ms;
  transition: border-color 160ms;
  height:31px;
  width:100px;
}
#expiration-date.braintree-hosted-fields-focused {
  border-color: #777;
  line-height:31px;
}

#expiration-date.braintree-hosted-fields-invalid {
  border-color: tomato;
   line-height:31px;
}

#expiration-date.braintree-hosted-fields-valid {
  border-color: limegreen;
   line-height:31px;
}
#cvv {
  border: 1px solid #333;
  -webkit-transition: border-color 160ms;
  transition: border-color 160ms;
  height:31px;
  width:50px;
}
#cvv.braintree-hosted-fields-focused {
  border-color: #777;
  line-height:31px;
}

#cvv.braintree-hosted-fields-invalid {
  border-color: tomato;
   line-height:31px;
}

#cvv.braintree-hosted-fields-valid {
  border-color: limegreen;
   line-height:31px;
}
</style>

</head>
<body>

<?php
require("config.php");
$clientToken = Braintree_ClientToken::generate();

?>

<form action="hosted_subscription.php" method="POST" id="my-sample-form">
	  <div id="paypal-container"></div>
		<input type="hidden" id="paypal_nonce" name="paypal_nonce" value="" />
      <label for="card-number">Card Number</label>
      <div id="card-number"></div>

      <label for="cvv">CVV</label>
      <div id="cvv"></div>

      <label for="expiration-date">Expiration Date</label>
      <div id="expiration-date"></div>

      <input type="submit" value="Pay" />
    </form>





<script type="text/javascript">
cToken="<?php echo $clientToken ?>";
</script>
<br/>

<script>
      braintree.setup(cToken, "custom", {
        id: "my-sample-form",
        hostedFields: {
          number: {
            selector: "#card-number"
          },
          cvv: {
            selector: "#cvv"
          },
          expirationDate: {
            selector: "#expiration-date"
          }
        }
      });
    </script>
</body>
</html>




