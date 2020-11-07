<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="text">
	<div class="mx-auto col-12">
		<form action="insert.php" method="GET">
			<div class="mt-3">
				<span class="font-weight-bold">User: </span>
				<input type="" name="user">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Text: </span>
				<textarea name="text"></textarea>
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Img: </span>
				<input type="" name="img">
			</div>
			<div class="mt-3">
				<span class="font-weight-bold">Date: </span>
				<input type="" name="date">
			</div>
			<button class="btn btn-dark mt-5">Download</button>
		</form>
	</div>
</body>
</html>