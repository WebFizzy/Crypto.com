<?php
$nameErr = $emailErr = $passwordErr = $conPwdErr = " ";
$emailEx = " ";
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
        $passwordErr = "password must contain at least one number";
        $isValid = false;
      }
      if($isValid) {
        if ($_POST["password"] !== $_POST["password-confirmation"]) {
          $conPwdErr = "password must match";
          $isValid = false;
        }
        if (empty($_POST["password-confirmation"])) {
          $conPwdErr = "confirm password";
          $isValid = false;
        }
        
          $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
          
          
          $mysqli = require __DIR__ . "/database.php";
          
          $sql = "INSERT INTO login_db (name, email, password_hash) VALUES (?, ?, ?)";
          
          $stmt = $mysqli->stmt_init();
          
          if ( ! $stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
          }

          if ($isValid) {

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
                $emailEx = ("Email already exist");
                return false;
              }
  
            }
          }

      }

    }   

  }
}

?>

<!DOCTYPE html>
<html>
  <head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM</title>
    <link rel="stylesheet" type="text/css" href="styles/signup-css.php">
    <script type="text/javascript" src="https://kit.fontawesome.com/88f8f09358.js" 
    crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .hii {
        text-align: center;
        padding-top: 3rem;
        color: #0d6efd;
      }

      .hii span {
        font-size: 20px;
        color: black;
      }

      em {
        color: red;
      }
    </style>
  </head>
  <body>
        <?php if ($isValid === false): ?>
          <em></em>
        <?php endif; ?>

    <h1 class="hii">Crypto.<span>Com</span></h1>
    <div class="container">
      <div  class="form1">
        <h1>Sign up</h1>
        <h3>Create your account</h3>  
        <hr>
      <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="mb-3">
          <label for="exampleInputName1" class="form-label">Username</label>
          <input type="text" name="name" placeholder="username" class="form-control" id="name" autocomplete="off" >
          <span class="error"><?php echo $nameErr;?></span>
        </div>
        <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
         <input type="text" name="email" placeholder="your email address" class="form-control" aria-describedby="emailHelp" id="email">
          <span class="error"><?php echo $emailEx;?></span>

         <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password*</label>
         <input type="password" name="password"  placeholder="password" class="form-control" id="password" autocomplete="off">
         <span class="error"> <?php echo $passwordErr;?></span>
        </div>
        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Password Confirmation*</label>
         <input type="password" name="password-confirmation" placeholder="password confirmation" class="form-control"  id="password-confirmation" autocomplete="off">
         <span class="error"><?php echo $conPwdErr;?></span>
        </div>
        <div class="mb-3">
         <label for="exampleInputPassword1" class="form-label">Referral(optional)</label>
         <input type="text" placeholder="referral" class="form-control">
        </div>
        <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
         <label class="form-check-label" for="flexCheckDefault">
          I agree with the terms and conditions
         </label>
        </div>
        <div class="d-grid">
         <button class="btn btn-primary" type="submit"><a href="../javascript.form/sign1-in.php" style="text-decoration: none; color:white">Submit</a></button>
        </div>
         <p>Already have an account? <span><a href="sign1-in.php" style="color: #0d6efd;">sign in instead</a></span></p>
      </form>
    </div>
    </div>  
  
  </body>
</html>
