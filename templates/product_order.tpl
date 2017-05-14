<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="search.php">{$MenuHead}</a>
		</div>

		
	  </div><!-- /.container-fluid -->
	</nav>
	
	<div class="container">
		<button type="button" class="btn btn-default btn-sm">
		  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
		</button>
		<div style="float: right;">ยอดเงิน 1,000.00 บาท </div>
		<hr>
		<div class="table-responsive">
			<table class="table">
				<tr>
					<td>#</td>
					<td>รายการ</td>
					<td>ราคา/แก้ว</td>
					<td>จำนวน</td>
					<td>รวม</td>
				</tr>
				<tr>
					<td>1</td>
					<td>อเมริกาโนร้อน</td>
					<td>30.00</td>
					<td><input type="number" style="width: 30px;text-align: center;" value="2"></td>
					<td>60.00</td>
				</tr>
				<tr>
					<td>2</td>
					<td>โกโก้เย็น</td>
					<td>60.00</td>
					<td><input type="number" style="width: 30px;text-align: center;" value="4"></td>
					<td>240.00</td>
				</tr>
				<tr>
					<td colspan="4">รวม</td>
					<td>300.00</td>
				</tr>
			</table>
		</div>
			<div style="float: right;"><button type="button" class="btn btn-primary">สั่งซื้อสินค้า</button></div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>