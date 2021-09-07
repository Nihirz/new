<?php 

include 'conn.php';

error_reporting(E_ERROR | E_PARSE);

if (isset($_POST['done'])) {


  // $hobbies_str = '';
  // foreach ($hobbies as $key => $value) {
  //     if( empty($hobbies_str) ) {
  //         $hobbies_str = $value;
  //     } else {
  //         $hobbies_str.= ', ' . $value;
  //     }
  // }

  // echo $hobbies_str."<br/>";

  // $hobbies_arr = explode( ', ', $hobbies_str);

  // print_r($hobbies_arr);

  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $adderss = $_POST['adderss'];
  // $gender = $_POST['Gender'];
  $country = $_POST['country'];

  $gender = $_POST['Gender'];
  $gender_str = implode(' ',$gender);

  // echo "<pre>";
  // print_r($_POST);

  $hobbies = $_POST['Hobbies'];

  // print_r($hobbies);

  $hobbies_str = implode( ', ', $hobbies );





  $q = "INSERT INTO `task`(`username`, `fname`, `address`, `gender`, `country`, `hobbies`) VALUES ('$username','$firstname','$adderss','$gender_str','$country','$hobbies_str')";

  $query = mysqli_query($con,$q);
}



?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Add User</title>
  </head>
  <body>
      <div class="container">
        <h1 class="mt-5">Add User</h1>
      </div>
      <div class="container">
        <form method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User Name:-</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">First Name:-</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
       <label for="exampleInputEmail1" class="form-label">Address:-</label>
    <input type="text" name="adderss" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
  </div>
   <label for="exampleInputEmail1" class="form-label">Gender:-</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="Gender[]" value="Male" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Male 
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Gender[]" value="Female" id="flexRadioDefault2">
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
<br/>
 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Add Your Country:-</label>
    <input type="text" class="form-control" name="country" id="exampleInputEmail1" aria-describedby="emailHelp">

</div>
<h1>Hobbies:-</h1>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Cricket" name="Hobbies[]" id="flexCheckDefault">
  <label class="form-check-label"  for="flexCheckDefault">
Cricket
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Football" name="Hobbies[]" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
Football
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Chess" name="Hobbies[]" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
Chess
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Music" name="Hobbies[]" id="flexCheckChecked" >
  <label class="form-check-label" for="flexCheckChecked">
Music
  </label>
</div>
    <br>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary" name="done">Submit</button>
</form>
</div>









   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>