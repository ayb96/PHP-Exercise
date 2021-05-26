
<html>
    <head>

        <link rel="stylesheet" href="style.css">
    </head>



    <body>
    <?php
        
        
        $nameErr = $usernameErr = $passwordErr = $confirmpasswordErr = $emailErr = $phoneErr = $dateErr = $numErr= $conferr = "";
        $name = $username = $password = $confirmpassword = $email = $phone = $date = $num ="";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Name is required";
          } else {
            $name = show_data($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
              }
          }
          if (empty($_POST["username"])) {
            $usernameErr = "username is required";
          } else {
            $username = show_data($_POST["username"]);
          }
            
          if (empty($_POST["password"])) {
            $passwordErr = "password is required";
          } else {
            $password = show_data($_POST["password"]);
          }
        
          if (empty($_POST["confirmpassword"])) {
            $confirmpasswordErr = "confirm password is required";
          } else {
            $confirmpassword = show_data($_POST["confirmpassword"]);
           if ($password != $confirmpassword) {
           echo("Error... Passwords do not match");
             }
          }
          if($_POST["password"]!== $_POST["confirmpassword"]){
            $conferr = "password not matching try again";
          }
        
          if (empty($_POST["email"])) {
            $emailErr = "email is required";
          } else {
            $email = show_data($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
              }
          }
          if (empty($_POST["phone"])) {
            $phoneErr = "phone number is required";
          } else {
            $phone = show_data($_POST["phone"]);
          }
          if (empty($_POST["date"])) {
            $dateofbirthErr = "Date of birth is required";
          } else {
            $date = show_data($_POST["date"]);
          }
          if (empty($_POST["num"])) {
            $ssnumberErr = "Social Security number is required";
          } else {
            $num = show_data($_POST["num"]);
          }
        }
        
        function show_data($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
      
    
    ?>
        <form method="POST" action="home.php" >
        
        
        
            <div class="all-container">
                <div class="box-1">
                  <h3>Registration Field</h3>
                    <div>
                    <span class="error" style="color: red;"><?php echo $nameErr;?></span>
                        <label for="name">Full Name<br></label>
                        <input type="text" name="name" id="name" value=<?php echo $name?>>
                      </div>
                      <div>
                      <span class="error" style="color: red;"><?php echo $usernameErr;?></span>
                          <label for="username">Userame<br></label>
                          <input type="text" name="username" id="name" value=<?php echo $username?>> 
                      </div>
                      <div>
                      <span class="error" style="color: red;"><?php echo $passwordErr;?></span>
                          <label for="password">Password<br>
                            <input type="password" name="password" class = "password" value=<?php echo $password?>>
                          </label>
                      </div>
                      <div>
                        <div style="color: red;"><?php echo $conferr; ?></div>
                       <span class="error" style="color: red;"><?php echo $confirmpasswordErr;?></span>
                          <label for="confirmpassword">
                            Confirm Password<br>
                            <input type="password" name="confirmpassword" class = "confirm-password" value=<?php echo $confirmpassword?>>
                          </label>
                          
                        </div>
                      <div>
                      <span class="error" style="color: red;"><?php echo $emailErr;?></span>
                          <label for="email">Email<br></label>
                          <input type="email" name="email" id="email"value=<?php echo $email?>>
                      </div>
                      <div>
                      <span class="error" style="color: red;"><?php echo $phoneErr;?></span>
                          <label for="phone">Telephone<br></label>
                          <input type="tel" name="phone" id="phone" value=<?php echo $phone?>>
                      </div>
                      <div class="www">
                      <span class="error" style="color: red;"><?php echo $datenameErr;?></span>
                          <label for="date">Birthdate<br></label>
                          <input type="date" name="date" id="date" min="2019-06-10" value=<?php echo $date?>>
                      </div>
                      <div>
                      <span class="error" style="color: red;"><?php echo $numErr;?></span>
                          <label for="num">Social Security Number<br></label>
                          <input type="number" name="num" id="num" min="1" max="200" step="5"value=<?php echo $num?>>
                      </div>
                      <button type="submit" class="qqq" style="margin-top: 10px;margin-bottom: 10px">Submit</button>
                </div>
            </form>
            
                <form method="POST" action="safe.php" >
                <div class="box-2">
                <h3>Login Field</h3>
                    <div>
                        <label for="loginuser">Userame<br></label>
                        <input type="text" name="loginuser" id="loginuser" >
                    </div>
                    <div>
                        <label for="loginpass">
                          Password<br>
                          <input type="password" name="loginpass">
                        </label>
                    </div>
                    <button type="submit" style="margin-top: 10px;margin-bottom: 10px">Submit</button>
                </div>
               
            </div>
    <input type="hidden" name= "name" value=<?php echo $name?>>
    <input type="hidden" name="username" value=<?php echo $username?>>
    <input type="hidden" name="password" value=<?php echo $password?>>
    <input type="hidden" name="confirmpassword" value=<?php echo $confirmpassword?>>
    <input type="hidden" name="email" value=<?php echo $email?>>
    <input type="hidden" name="phone" value=<?php echo $phone?>>
    <input type="hidden" name="date" value=<?php echo $date?>>
    <input type="hidden" name="num" value=<?php echo $num?>>

            
            </form>
    
    </body>
    
</html>

