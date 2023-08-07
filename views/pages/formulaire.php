<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<?php
// $a = "Jenovic";
//  echo "Bonjour $a";
include('../components/nav.php');
?>
<section>
<div class="container mt-5">
<form method="POST" action="../../controllers/formcontroller.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom</label>
    <input type="text" name="nom" placeholder="ex Jenovic ..."  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Vas y hunnn écrit</div>
    <button type="submit" class="btn btn-danger">Confirmer</button>
   </div>
  <div class="mb-3">
  
</form>
</section>

<button type="button" class="btn btn-primary"><a href="../../index.php">Liste</a></button>


</body>
</html>