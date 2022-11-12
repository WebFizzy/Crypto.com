<?php
 header('content-type: text/css; charset:UTF-8');
?>

body {
  font-family: 'Open Sans',sans-serif;
  background-color: rgb(255, 254, 254);
  margin: 0%;
  padding: 0%;
}

.container {
  max-width: 100%; 
}

.login {
  background-color: rgb(226, 225, 225);
  padding: 2rem;
  width: 50%;
  border-radius: 10px;
  margin: 30px auto;
  margin-top: 1rem;
}

.d-grid {
  margin: 40px 0px;
}

#password-error {
  color: rgb(223, 69, 69);
  font-size: 12px;
}

#name-error {
  color: rgb(223, 69, 69);
  font-size: 12px;
}

#passw {
  position: relative;
}

#passw a {
  float: right;
}

.eye {
  position: absolute;
  box-sizing: border-box;
  top: 2.4rem;
  right: 15px;
}

#open {
  display: none;
}

@media screen and (max-width: 800px) {
  .login {
    width: 90%;
    padding: 1rem;
  }

  .login h1 {
    font-size: 22px;
  }

  .login h3 {
    font-size: 15px;
  }

  .login-label {
    font-size: 13px;
  }

  .mb-3 input {
    font-size: 12px;
  }

  .login p {
    font-size: 10px;
  }

}
