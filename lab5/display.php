<?php
  $conn = mysqli_connect("localhost","kartik","hello123","user_info");

  if(!$conn) {
    echo 'Connection error :' . mysqli_connect_error(); 
  }

  $sql='SELECT * FROM user';
    
  $result=mysqli_query($conn,$sql);
    
  $users=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="./display.css" />
    <title>Details</title>
    </head>   


      <p class="card-container-heading">Users' Data</p>

        <div class="card-container">

          <?php foreach($users as $user): ?>

                <div class="card">
                  
                  <p class="heading-card"><?php echo "{$user['first_name']}"." "."{$user['middle_name']}"." "."{$user['last_name']}"; ?></p>
                  <p><b>BirthDate</b>:<?php echo "{$user['birth_date']}"; ?></p>
                  <p><b>Gender </b>:<?php echo "{$user['gender']}"; ?></p>
                  <p><b>Address : </b>: <?php echo "{$user['address_one']}"." "."{$user['address_two']}"." "."{$user['city']}"; ?></p>
                  <p><b>Pincode :</b><?php echo "{$user['pincode']}"; ?></p>
                  <p><b>Country </b> : <?php echo "{$user['country']}"; ?></p>
                  <p><b>Email Address </b> : <?php echo "{$user['email']}"; ?></p>
                  <p><b>Phone no </b>: <?php echo "{$user["phone"]}"; ?></p>
      
                </div>

          <?php endforeach; ?>

        </div>
    </body>
</html>