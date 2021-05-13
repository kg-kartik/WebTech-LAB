<?php 
 
 $conn = mysqli_connect("localhost","kartik","hello123","user_info");

  if(!$conn) {
    echo 'Connection error :' . mysqli_connect_error(); 
  }

  //Setting variables

  $fname=$mname=$lname='';
  $number='';
  $sname="";
  $gender=$sname2=$city=$state=$email='';

if(isset($_POST['submit'])) {
    echo "chal jaa";
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $bd=$_POST['day']." / ".$_POST['month']." / ".$_POST['year'];
    $gender=$_POST['gender'];
    $address_one=$_POST['address_one'];
    $address_two=$_POST['address_two'];
    $pincode=$_POST['zip'];
    $country=$_POST['country'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];

    // Inserting values
    $sql = "INSERT INTO user(first_name,middle_name,last_name,birth_date,gender,address_one,address_two,
    city,pincode,country,email,phone)VALUES('$fname','$mname','$lname','$bd','$gender','$address_one',
    '$address_two','$city','$pincode','$country','$email','$phone')";

    // saving and checking if the data is saved to db
    if(mysqli_query($conn, $sql)){

      header('Location: display.php');
      unset($_POST);
    } else {
      echo 'query error: '. mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html>

    <head>
        
        <title>
            Form
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
    
    <script src="./index.js"> </script>

    <body>
        <div class="home">
            <h1 class="title">Student Registration Form</h1>
            <p class="short-headline">Fill out the form carefully for registration</p>
            
            <div id="error-messages"> </div>
        
            <form id="form" action="index.php" method="POST">
                
                <div class="form">
                    <h1 class="data-headings">Student Name</h1>
                <div class="name-fields">
                    <div class="fields">
                        <p>First name (*)</p>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="fields">
                        <p>Middle name</p>
                        <input type="text" name="mname" id="mname" >
                    </div>
                    <div class="fields">
                        <p>Last name</p>
                        <input type="text" name="lname" id="lname" >
                    </div>
                </div>
                
                
                <!-- Birthdate -->
                <h1 class="data-headings">Birth date</h1>
                <div class="name-fields">
                    <div class="fields">
                        <p>Month </p>
                    <select id="month" name="month" class="select">
                        <option value="sept">sept</option>
                        <option value="oct">oct</option>
                    </select>
                </div>
                <div class="fields">
                    <p>Day</p>
                    <select id="day" name="day" class="select-country">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
                <div class="fields">
                    <p>Year</p>
                    <select id="year" name="year">
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                    </select>
                </div>
                
                <div class="gender">
                    <div class="fields">
                        <p>Gender</p>
                        <select id="gender" name="gender" class="select-gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    
                </div>
            </div>
            
            <!-- Address -->
            <h1 class="data-headings">Address</h1>
            <div class="fields">
                <p>Street Address (*) </p>
                <input id="address-one" name="address_one" type="text" class="big-input" >
            </div>
            <div class="fields">
                <p>Street Address line 2</p>
                <input type="text" name="address_two" class="big-input" >
            </div>
            
            <div class="name-fields">
                <div class="fields">
                    <p>City</p>
                    <input id="city" name="city" type="text" >
                </div>
                <div class="fields">
                    <p>State/province</p>
                    <input id="state" name="state" type="text" >
                </div>
            </div>
            
                <div class="name-fields">
                    <div class="fields">
                        <p>Postal/Zip Code</p>
                        <input id="zip" name="zip" type="text" >
                    </div>
                    <div class="fields">
                        <p>Country</p>
                        <select id="country" name="country" class="select-country">
                            <option value="India">India</option>
                            <option value="China">China</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                        </select>
                    </div>
                </div>
                
                <h1 class="data-headings">Contact Info</h1>
                <div class="fields">
                    <p>Email address (*)</p>
                    <input type="text" name="email" id="email" >
                </div>
                
                <div class="fields">
                    <p>Mobile number (*)</p>
                    <input type="text" name="phone" id="phone" >
                </div>
                
            </div>
            <center>
                <input type="submit" id="submit" name="submit" value="submit">
            </center>
        </div>
    </form>
</div>
</body>
</head>
</html>