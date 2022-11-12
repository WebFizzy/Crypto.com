<?php
$nameErr = $emailErr = $passwordErr = $conPwdErr = " ";
$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//exit($_POST["email"]); 

if (empty($_POST["name"])) {
  $nameErr = "Name is required";
  $isValid = false;
}  // check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["name"])) {
  $nameErr = "Only letters and white space allowed";
  $isValid = false;
}
if ($isValid){
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $isValid = false;
    }
    if (empty($_POST["email"])) {
      $emailErr = "email is requird";
      $isValid = false;
    }
    if($isValid) {
      if (empty($_POST["password"])) {
        $passwordErr = "Input Password";
        $isValid = false;
      }
      if (strlen($_POST["password"]) < 8) {
        $passwordErr = "password must be at least 8 characters";
        $isValid = false;
      }
      
      if (!preg_match("/[a-z]/i", $_POST["password"])) {
        $passwordErr = "password must contain at least one letter";
        $isValid = false;
      }
          
          if (!preg_match("/[0-9]/", $_POST["password"])) {
            die ("password must contain at least one number");
          }
          
          if ($_POST["password"] !== $_POST["password-confirmation"]) {
            die ("password must match");
          }
          
          $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
          
          
          $mysqli = require __DIR__ . "/database.php";
          
          $sql = "INSERT INTO login_db (name, email, password_hash) VALUES (?, ?, ?)";
          
          $stmt = $mysqli->stmt_init();
          
          if ( ! $stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
          }
          
          $stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);
          try {
            if ($stmt->execute()) {
              header("Location: ./signupsuccess.php");
              exit;
              //   exit("okay");
              //   if ($mysqli->errno === 1062) {
              //     die("email already taken");
              //   }else {
              //   die($mysqli->error . " " . $mysqli->errno);
                
              // }  
              // exit("successful");
            
            }
            
          } catch (\Throwable $th) {
            if($th->getCode() === 1062) {
              die ("email already exist");
              }
          }

       
    }   

  }
}

?>

