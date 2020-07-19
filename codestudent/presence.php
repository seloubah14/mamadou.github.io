<?php session_start();


?>




<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="style.css">

            <style>
                table {font-size: 13px;}

                thead {font-weight: bold;}
                
                table {
                   border-collapse: collapse;
                      }

                table, th, td {
                border: 1px solid black;

                }

                table {
                  width: 100%;
                     }

                th {
              height: 50px;
                  }

                  th, td {
                    padding: 15px;
                    text-align: left;
                     }

                     th {
                    background-color: #4CAF50;
                     color: white;
                        }



            
            </style>
      </head>
      <body>

      <center><h2>La liste de presence</h2></center>
    <div class="row">
    <div class="col-md-12 offset-md-2">
    <table >
         <thead>
                <tr>
                    <td>Id</td>
                    <td>nom</td>
                    <td>email</td>
                    <td>password</td>
                    <td>Date</td>

                </tr>
         </thead>
    <tbody>
    <?php        
      include_once('bd.php');
      $sql = "SELECT id,nom,email,password,date FROM etudiants";
      $result = mysqli_query($con,$sql);
      while($row = mysqli_fetch_array($result))
      
      { ?>
    
               <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nom'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['password'] ?></td>
                    <td><?php echo $row['date'] ?></td>
    
    
    
                </tr>
                <?php } ?>
    </tbody>
    </table>
    </div>
    </div>
    <?php
      '}'
    ?>
       </body>
</html>