
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Display</title>
  </head>
  <body>
    <div class="container">
    <h1> Display Table Data</h1>
    <table class="table table-stripped table-hover table-border">
    	<tr>
    		<th>username</th>
    		<th>First Name</th>
    		<th>Address</th>
    		<th>Gender</th>
    		<th>Country</th>
    		<th>Hobbies</th>
    	</tr>
			<?php 
			include 'conn.php';
			 
			$q = "SELECT * FROM task";
			$query = mysqli_query($con,$q);

			while ($res = mysqli_fetch_array($query)) {

			?>

    	<tr>
    		<th><?php echo $res['username']; ?></th>
    		<th><?php echo $res['fname']; ?></th>
    		<th><?php echo $res['address']; ?></th>
    		<th><?php echo $res['gender']; ?></th>
    		<th><?php echo $res['country']; ?></th>
    		<th><?php echo $res['hobbies']; ?></th>
    	</tr>
    	<?php 
			}
    	?>
    </table>
</div>
  







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>