<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid">
		<div class="panel panel-success">
			<div class="panel-heading">
				Welcome <?php echo $request['name'] ?> !
				<br/>
				your email : <?php echo $request['email'] ?>
			</div>
			<div class="panel-body">We will contact you soon.</div>
		</div>
	</div>

</body>
</html>