<?php
require "./src/User.php";

$user = new User();
$ObjUser = $user->getUserInfo($_GET['id']);
?>
<!DOCTYPE html>

<html>

<head>

<title>Bootstap</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href= "css/bootstrap.min.css" rel= "stylesheet">

</head>

<body>

<div class="container">

<!-- Nav-->

<div class="row"></div>

<!-- Nav-->

<div class="row">
<div class="col-md-6">
	<div class="alert alert-success">
		<?php foreach($ObjUser as $u) { ?>
			<div class="row">
				<div class="col-md-2">ชื่อ : </div>
				<div class="col-md-3"><?=$u[1]?> <?=$u[2]?></div>
			</div>
			<div class="row">
				<div class="col-md-2">เบอร์โทร : </div>
				<div class="col-md-3"><?=$u[3]?></div>
			</div>
		<?php } ?>
	</div>
</div>
</div>

<div class="row">
<div class="col-md-6">
		<div class="alert alert-success" align="center"><strong>ยอดเงินคงเหลือ (บาท)</strong>
		<div align="center"><?=$u[4]?></div>
		</div>
</div>

	<div class="row"></div>

<!--Togglable Tab-->

<ul class="nav nav-tabs">
<li class="active"></li>
<li></li>
</ul>
<div class="tab-content">
<div id="home" class="tab-pane fade in active">

<!--Tab การจัดการบุคลากร--></div>
<!--Tab การจัดการบุคลากร-->

<!--Tab เพิ่มบุคลากร-->
<div id="menu1" class="tab-pane fade">
<div class="container">
		<div class="row">
		<div class="col-md-6">
		<h1>เพิ่มบุลคลากร</h1>
		
			<form class= "form-horizontal" >
			<div class="form-group">
			<label for="id" class="col-sm-2 control-label">id</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" id="id" placeholder="123" disabled>
			</div>
			</div>
			
			<div class="form-group">
			<label for="txt_=ชื่อ" class="col-sm-2 control-label">ชื่อ</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" id="txt_ชื่อ" placeholder="ชื่อ">
			</div>
			</div>
			
			<div class="form-group has-error">
			<label for="txt_นามสกุล" class="col-sm-2 control-label">นามสกุล</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" id="txt_password" placeholder="นามสกุล">
			</div>
			</div>
			
			<div class="form-group">
			<label for="txt_อีเมล์" class="col-sm-2 control-label">อีเมล์</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" id="txt_อีเมล์" placeholder="อีเมล์">
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Submit</button>
			</div>
			</div>
			
		</form>
		</div>
	</div>
</div>
</div>
<!--Tab เพิ่มบุคลากร-->

</div>

<!--Togglable Tab-->
	
	
</div>

<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modals-->
<div class="modal-body">
<p>คุณยืนยันที่จะลบข้อมูลนี้</p>
</div>

<div class="modal-footer">
<button type="button" class="btn btn-primary" data-dismiss="modal">ยืนยัน</button>
<button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
</div>

</div>
</div>
</div>
<!-- Modals-->

<script src= "js/jquery-3.2.0.min.js" ></script>
<script src= "js/bootstrap.min.js" ></script>
<script>
$(function () {
$('[data-toggle="tooltip"]').tooltip();
});
</script>

</body>

</html>