<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Javascript CRUD Implementation</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
	<div class="container py-5">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8">
				<h1 class="text-center text-dark mb-4">Library Management System</h1>
				<form id = "frm" method = "post">
					<div class="mb-2">
						<label for="title" class="form-label text-dark">Title:</label>
						<input type="text" name = "t" class="form-control" id="title" required>
					</div>
					<div class="mb-2">
						<label for="author" class="form-label text-dark">Author(s):</label>
						<input type="text"  name = "a" class="form-control" id="author" required>
					</div>
					<div class="mb-2">
						<label for="publisher" class="form-label text-dark">Publisher:</label>
						<input type="text" name = "p" class="form-control" id="publisher" required>
					</div>
					<div class="mb-2">
						<label for="year" class="form-label text-dark">Year:</label>
						<input type="number" name = "y" class="form-control" id="year" required>
					</div>
					<div class="mb-2">
						<label for="pages" class="form-label text-dark">Pages:</label>
						<input type="number" class="form-control" id="pages" name = "pg">
					</div>
					<button type="submit" class="btn btn-sm btn-primary btn d-block mx-auto mt-3">Add Book</button>
				</form>
			</div>
		</div>

		<div class="d-flex py-5">
			<div class="flex-grow-1 flex-shrink-0">
				<table id="bookTable" class="table table-responsive table-light">
					<thead>
						<tr>
							<th scope="col" class="text-center text-dark">Author</th>
							<th scope="col" class="text-center text-dark">Title</th>
							<th scope="col" class="text-center text-dark">Publisher</th>
							<th scope="col" class="text-center text-dark">Year</th>
							<th scope="col" class="text-center text-dark">Pages</th>
							<th scope="col" class="text-center text-dark">Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="script.js"></script>
</body>

</html>

