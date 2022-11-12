<?php

$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $mysql = require __DIR__ . "/database.php";

  $sql = sprintf("SELECT * FROM login_db user WHERE email = '%s'", $mysql->real_escape_string($_POST["email"]));

  $result = $mysql->query($sql);

  $user = $result->fetch_assoc();
  
  if($user) {
    if(password_verify($_POST["password"], $user["password_hash"])) {
      
      session_start();

      session_regenerate_id();

      $_SESSION["login_db_id"] = $user["id"];

      header("location: dashboard.php");
      exit;
    }
  }
  $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGN IN</title>
    <link rel="stylesheet" type="text/css" href="styles/login-css.php">
    <style>
      em {
        color: red;
        font-size: 16px;
        align-items: center;
      }

      .hii {
        text-align: center;
        padding-top: 3rem;
        color: #0d6efd;
      }

      .hii span {
        font-size: 20px;
        color: black;
      }
    </style>
    
    <script src="https://kit.fontawesome.com/88f8f09358.js" 
    crossorigin="anonymous"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="hii">Crypto.<span>Com</span></h1>

  <div class="container">
      <div class="login">
        <h1>Sign in</h1>
        <h3>Sign in to your account</h3>  
        <hr>

        <?php if ($is_invalid): ?>
          <em class="err">Invalid login</em>
          <?php endif; ?>

      <form method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" name="email" placeholder="username" class="form-control" id="email"
          value="<?= htmlspecialchars($_POST["email"] ?? "") ?> ">
      </div>
      <div class="mb-3" id="passw">
        <label for="exampleInputPassword1" class="form-label">Password* </label> <span><a href="signup1.php">Forget code?</a></span>
        <input type="password" name="password" placeholder="password" class="form-control" id="password">
        <span id="password-error"></span>
        <span class="eye" onclick="myFunction()">
          <i id="open" class='fas fa-eye'></i>
          <i id="hide" class='fas fa-eye-slash'></i> 
        </span>
      </div>
      
      <div class="d-grid">
        <button class="btn btn-primary" type="submit">submit</button>  
      </div>
        <p>Not registered? <span><a href="signup1.php" style="color: #0d6efd;">sign up here</a></span></p>
      </form>
    </div>
    </div>
    <script type="text/javascript">
      
      function myFunction() {
        var x = document.getElementById("password");
        var y = document.getElementById("open");
        var z = document.getElementById("hide");
  
        if (x.type === 'password') {
          x.type = 'text';
          y.style.display = 'block';
          z.style.display = 'none';
        }
        else {
          x.type = 'password';
          y.style.display = 'none';
          z.style.display = 'block';
        }
      }
      </script>
  </body>
</html>