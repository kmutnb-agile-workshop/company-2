<html>
<head>
	<meta charset="UTF-8">
	<title>Topup</title>
	  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
    crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
	<div class="col-md-4 col-md-4-offset">
			<form action="postTopup.php" method="POST" role="form">
			<legend>Topup E-Wallet</legend>
			<div class="form-group">
				<label for="">เบอร์โทรศัพท์</label>
				<input type="text" class="form-control" name="tel" id="" placeholder="Input field">
				<label for="">ยอดเงิน</label>
				<input type="text" class="form-control" name="amount" id="" placeholder="Input field">
			</div>

			<button type="submit" class="btn btn-primary">เติมเงิน</button>
			</form>
		</div>
	</div>
</body>
</html>