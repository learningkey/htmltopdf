<!DOCTYPE html>
<html>
<head>
	<title>HTML to PDF</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>How to convert html to pdf using dompdf</h2>
		<form action="generate.php" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</body>
</html>