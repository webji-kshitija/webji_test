<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/"></script>
</head>
<body>
<b>Mailing Address</b>

<br><br>

<form>

Name:

<input type=”text” name=”shippingname”>

<br>

City:

<input type=”text” name=”shippingcity”>

<br>

<input type=”checkbox” name=”billingtoo” onclick=”FillBilling(this.form)”>

<em>Check this box if Billing Address and Mailing Address are the same.</em>

<P>

<b>Billing Address</b>

<br><br>

Name:

<input type=”text” name=”billingname”>

<br>

City:

<input type=”text” name=”billingcity”>

</form>
</body>
</html>