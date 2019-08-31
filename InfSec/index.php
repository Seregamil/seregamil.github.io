<?php
	include 'tree.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
	   body {
		background: #f5f5f5;
		color: black;
	   }
	   
	   .container {
		margin-left: 50px;
		margin-right: 50px;
		margin-top: 15px;
	   }
	   
  </style>
    <title>CXXY</title>
  </head>
  <body>
    <div class="container">
		<div class="row">
			<div class="col-sm-3">
				<h5>Дисциплины</h5>
				<hr>
				<ul class="nav flex-column">
				  <?php disciplinesTree(); ?>
				</ul>
			</div>
			<div class="col-sm-9">
				<h5>Записи</h5>
				<hr>
				<table class="table table-striped">
				  <thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Name</th>
					  <th scope="col">Date</th>
					  <th scope="col">Link</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <th scope="row">1</th>
					  <td>Mark</td>
					  <td>Otto</td>
					  <td>@mdo</td>
					</tr>
					<tr>
					  <th scope="row">2</th>
					  <td>Jacob</td>
					  <td>Thornton</td>
					  <td>@fat</td>
					</tr>
					<tr>
					  <th scope="row">3</th>
					  <td>Larry</td>
					  <td>the Bird</td>
					  <td>@twitter</td>
					</tr>
				  </tbody>
				</table>
			</div>
		</div>
		
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>