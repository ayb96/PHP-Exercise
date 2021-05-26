
<?php 

$name = $username = $password = $confirmpassword = $email = $phone = $date = $num = $loggedusername = $loggedpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $loggedusername=htmlspecialchars($_POST["loggedusername"]);
   $loggedpassword=htmlspecialchars($_POST["loggedpassword"]);
   $name=htmlspecialchars($_POST["name"]);
   $username=htmlspecialchars($_POST["username"]);
   $password=htmlspecialchars($_POST["password"]);
   $confirmpassword=htmlspecialchars($_POST["confirmpassword"]);
   $email=htmlspecialchars($_POST["email"]);
   $phone=htmlspecialchars($_POST["phone"]);
   $date=htmlspecialchars($_POST["date"]);
   $num=htmlspecialchars($_POST["num"]);


}
?>



<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Personal Information</h1>
   
    <table style="width:50%;">
        <tr>
        <th>Full Name</th>
        <th><?php echo $name;?></th>
        </tr>

        <tr>
        <th>Username</th>
        <th><?php echo $username;?></th>
        </tr>

        <tr>
        <th>Password</th>
        <th><?php echo $password;?></th>
        </tr>

        <tr>
        <th>Confirm password</th>
        <th><?php echo $confirmpassword;?></th>
        </tr>

        <tr>
        <th>Phone Number</th>
        <th><?php echo $phone;?></th>
        </tr>

        <tr>
        <th>Email</th>
        <th><?php echo $email;?></th>
        </tr>

        <tr>
        <th>Date of Birth</th>
        <th><?php echo $date;?></th>
        </tr>

        <tr>
        <th>Social Security Number</th>
        <th><?php echo $num;?></th>
        </tr>


    </table>
    

    


    
</body>
</html>