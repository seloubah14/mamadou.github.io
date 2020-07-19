<!DOCTYPE html>
<html lang="en">
        <head>
                <title>Page d'enregistrement admin et sup</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                <script src="https://kit.fontawesome.com/7cb0e7c261.js" crossorigin="anonymous"></script>
       </head>
<body>
        <div class="container center-div">
            <div class="container row d-flex flex-row justify-content-center mb-8">
                <div class="admin-form shadow p-5">
                    <form id="" action="" method="POST">
                        <center><h3>S'enregistrer</h3></center><br>

                        <div class="col form-group">
                            <label class="font-weight-bold">Nom </label>
                            <input type="name" class="form-control" id="nom" placeholder="Saisir votre nom " name="nom" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Saisir votre email" name="email" required>
                        </div>
                        <div class="col form-group">
                            <label class="font-weight-bold">password</label>
                            <input type="password" class="form-control" id="password" placeholder="12345" name="password" required>
                         <br>

                        <input type="submit" value="Enregistrer" name="Enregistrer" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
<?php
        
include_once('bd.php');



if(isset($_POST['Enregistrer'])){
$nom = $_POST['nom'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$date = date("Y-m-d h:i:s");

$sql = "INSERT INTO etudiants (nom, email, password, date)
VALUES ('$nom', '$email', '$password', '$date')";

if (mysqli_query($con, $sql)) {

 
    echo '<script language="Javascript">';
    echo 'document.location.replace("./login.php")';
    echo ' </script>';


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

}else{
	echo "";
}


mysqli_close($con);


?>




    </body>
</html>